<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Question;
use App\Entity\Reponse;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/question')]
class QuestionController extends AbstractController
{
    #[Route('/', name: 'app_question_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $questions = $entityManager
            ->getRepository(Question::class)
            ->findAll();

        return $this->render('question/index.html.twig', [
            'questions' => $questions,
        ]);
    }

    #[Route('/new/{namecategory}/{idq}', name: 'app_question_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $routeParams = $request->attributes->get('_route_params');

        $category = $entityManager->getRepository(Category::class)
        ->findoneBy(['name' => $routeParams['namecategory']]);
        
        $question = new Question();
        $question->setCategory($category);
    $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($question);
          
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_new', ['namecategory' => $routeParams['namecategory'],'idq'=>$routeParams['idq'],'idr'=>0], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('question/new.html.twig', [
            'question' => $question,
            'form' => $form,
            'routeParams' => $routeParams,
        ]);
    }

    #[Route('/{id}', name: 'app_question_show', methods: ['GET'])]
    public function show(Question $question): Response
    {
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    #[Route('/{id}/edit/{idc}/{nbq}/{nbr}', name: 'app_question_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Question $question, EntityManagerInterface $entityManager): Response
    {
        $routeParams = $request->attributes->get('_route_params');

        $reponses = $entityManager->getRepository(Reponse::class)
        ->findBy(['question' => $question]);

     

        $reponseId = $reponses[$routeParams['nbr']]->getId();
   

        
        $form = $this->createForm(QuestionType::class, $question);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reponse_edit', ['id'=>$reponseId,'idc'=>$routeParams['idc'],'nbq'=>$routeParams['nbq']+1,'idq'=>$routeParams['id'],'nbr'=>1], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('question/edit.html.twig', [
            'question' => $question,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_question_delete', methods: ['POST'])]
    public function delete(Request $request, Question $question, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$question->getId(), $request->request->get('_token'))) {
            $entityManager->remove($question);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_question_index', [], Response::HTTP_SEE_OTHER);
    }
}
