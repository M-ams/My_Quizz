<?php

namespace App\Controller;


use App\Entity\History;
use App\Entity\Category;
use App\Entity\User;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Form\TestType;
use App\Form\NextType;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Mailer;



#[Route('/category')]
class CategoryController extends AbstractController
{
    #[Route('/{id}/History', name: 'app_show_history', methods: ['GET', 'POST'])]
    public function History(Request $request, EntityManagerInterface $entityManager): Response
    {
        $routeParams = $request->attributes->get('_route_params');
        $history = $entityManager->getRepository(History::class)->findBy(['user' => $routeParams['id']]);
        $nbhistory = count($history);

        for ($i = 0; $i <= $nbhistory - 1; $i++) {
            $categoryname[$i] = $history[$i]->getCategory()->getName();
        }





        return $this->renderForm('category/show_history.html.twig', [
            'history' => $history,
            'categoryname' => $categoryname,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_category_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        $routeParams = $request->attributes->get('_route_params');

        $questions = $entityManager->getRepository(Question::class)
            ->findBy(['category' => $category]);

        $questionsId = $questions[0]->getId();



        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_question_edit', ['id' => $questionsId, 'idc' => $routeParams['id'], 'nbq' => 0, 'nbr' => 0], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('category/edit.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/reponse/{id}/{idq}', name: 'app_reponse', methods: ['GET', 'POST'])]
    public function show_answer(EntityManagerInterface $entityManager, Request $request): Response
    {
        $form2 = $this->createForm(NextType::class);
        $form = $this->createForm(TestType::class);
        $routeParams = $request->attributes->get('_route_params');

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $session = $request->getSession();

            $session->set($routeParams['idq'], $data['Reponse']);
        }


        $qb = $entityManager->createQueryBuilder();
        $qb->select('c')
            ->from(Category::class, 'c')
            ->Where('c.id =' . $routeParams['id']);

        $categories = $qb->getQuery()->getResult();

        $qb = $entityManager->createQueryBuilder();
        $qb->select('q')
            ->from(Question::class, 'q')
            ->Where('q.category =' . $routeParams['id']);
        $questions = $qb->getQuery()->getResult();


        for ($i = 0; $i <= count($questions) - 1; $i++) {
            $qb = $entityManager->createQueryBuilder();
            $qb->select('r')
                ->from(Reponse::class, 'r')
                ->Where('r.question =' . $questions[$i]->getId())
                ->andWhere('r.reponse_expected = 1');
            $reponses[$i] = $qb->getQuery()->getResult();
        }


        return $this->render('category/reponse.html.twig', [
            'reponses' => $reponses,
            'routeParams' => $routeParams,
            'form2' => $form2->createView(),
        ]);
    }
    #[Route('/end/{id}', name: 'app_final_quizz', methods: ['GET'])]
    public function Final_quizz(EntityManagerInterface $entityManager, Request $request, MailerInterface $mailer, User $user): Response
    {
        $score = null;
        $routeParams = $request->attributes->get('_route_params');
        $qb = $entityManager->createQueryBuilder();
        $qb->select('c')
            ->from(Category::class, 'c')
            ->Where('c.id =' . $routeParams['id']);

        $categories = $qb->getQuery()->getResult();

        $qb = $entityManager->createQueryBuilder();
        $qb->select('q')
            ->from(Question::class, 'q')
            ->Where('q.category =' . $routeParams['id']);
        $questions = $qb->getQuery()->getResult();


        for ($i = 0; $i <= count($questions) - 1; $i++) {
            $qb = $entityManager->createQueryBuilder();
            $qb->select('r')
                ->from(Reponse::class, 'r')
                ->Where('r.question =' . $questions[$i]->getId());
            $reponses[$i] = $qb->getQuery()->getResult();
        }

        $session = $request->getSession();
        for ($i = 0; $i <= 9; $i++) {
            $data[$i] = $session->get($i);
        }


        for ($i = 0; $i <= 9; $i++) {

            if ($reponses[$i][$data[$i]]->getReponseExpected() == 1) {
                $score = $score + 1;
                $verify[$i] = "Vrai";
                $verifyint[$i] = 1;
            } else {
                $verify[$i] = "Faux";
                $verifyint[$i] = 0;
            }
        }
        $user = $this->getUser();


        $history = new History();

        $history->setUser($user);
        $history->setScore($score);
        $history->setCategory($categories[0]);
        $history->setQ1($verifyint[0]);
        $history->setQ2($verifyint[1]);
        $history->setQ3($verifyint[2]);
        $history->setQ4($verifyint[3]);
        $history->setQ5($verifyint[4]);
        $history->setQ6($verifyint[5]);
        $history->setQ7($verifyint[6]);
        $history->setQ8($verifyint[7]);
        $history->setQ9($verifyint[8]);
        $history->setQ10($verifyint[9]);



        $entityManager->persist($history);
        $entityManager->flush();


        // send mail 

        $email = (new Email())
            ->from('quizz@score.fr')
            ->to($this->getUser()->getEmail())
            ->subject('Votre score')
            ->html('<p>Votre score est de ' . $score . '/10</p>');
        $mailer->send($email);


        return $this->render('category/final_quizz.html.twig', [
            'score' => $score,
            'verify' => $verify
        ]);
    }
    #[Route('/{id}/{idq}', name: 'app_category_index', methods: ['GET', 'POST'])]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {
        $form = $this->createForm(TestType::class);
        $routeParams = $request->attributes->get('_route_params');

        if ($routeParams['idq'] == 10) {

            return $this->redirectToRoute('app_final_quizz', ['id' => $routeParams['id']]);
        } else {
            # code...

            $qb = $entityManager->createQueryBuilder();
            $qb->select('c')
                ->from(Category::class, 'c')
                ->Where('c.id =' . $routeParams['id']);

            $categories = $qb->getQuery()->getResult();

            $qb = $entityManager->createQueryBuilder();
            $qb->select('q')
                ->from(Question::class, 'q')
                ->Where('q.category =' . $routeParams['id']);
            $questions = $qb->getQuery()->getResult();


            for ($i = 0; $i <= count($questions) - 1; $i++) {
                $qb = $entityManager->createQueryBuilder();
                $qb->select('r')
                    ->from(Reponse::class, 'r')
                    ->Where('r.question =' . $questions[$i]->getId());
                $reponses[$i] = $qb->getQuery()->getResult();
            }

            return $this->render('category/index.html.twig', [
                'categories' => $categories,
                'questions' => $questions,
                'reponses' => $reponses,
                'form' => $form->createView(),
                'routeParams' => $routeParams
            ]);
        }
    }

    #[Route('/new', name: 'app_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($category);
            $entityManager->flush();

            $namecategories = $form->get('name')->getData();



            return $this->redirectToRoute('app_question_new', ['namecategory' => $namecategories, 'idq' => 0], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('category/new.html.twig', [
            'category' => $category,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {

        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }


    #[Route('/{id}', name: 'app_category_delete', methods: ['POST'])]
    public function delete(Request $request, Category $category, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $category->getId(), $request->request->get('_token'))) {
            $entityManager->remove($category);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_category_index', [], Response::HTTP_SEE_OTHER);
    }
}