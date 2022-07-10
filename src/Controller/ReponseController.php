<?php

namespace App\Controller;

use App\Entity\Reponse;
use App\Entity\Category;
use App\Entity\Question;
use App\Form\ReponseType;
use App\Repository\ReponseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

#[Route('/reponse')]
class ReponseController extends AbstractController
{
    #[Route('/end_update_quizz', name: 'app_update_quizz', methods: ['GET'])]
    public function end_update_quizz(): Response
    {
       

        return $this->render('reponse/end_update_quizz.html.twig', [
          
        ]);
    }
    #[Route('/end_quizz', name: 'app_end_quizz', methods: ['GET'])]
    public function end_quizz(): Response
    {
       

        return $this->render('reponse/end_make_quizz.html.twig', [
          
        ]);
    }
    #[Route('/index', name: 'app_reponse_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $reponses = $entityManager
            ->getRepository(Reponse::class)
            ->findAll();

        return $this->render('reponse/index.html.twig', [
            'reponses' => $reponses,
        ]);
    }

    #[Route('/new/{namecategory}/{idq}/{idr}', name: 'app_reponse_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $routeParams = $request->attributes->get('_route_params');
        $category = $entityManager->getRepository(Category::class)
        ->findoneBy(['name' => $routeParams['namecategory']]);
        $categoryId = $category->getId();
       
        $question = $entityManager->getRepository(Question::class)->findBy(['category'=>$categoryId]);
        dump($question);
        $reponse = new Reponse();
        $reponse->setQuestion($question[$routeParams['idq']]);
        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reponse);
            $entityManager->flush();
            if ($routeParams['idq'] == 9 and $routeParams['idr'] ==2 ) {
                return $this->redirectToRoute('app_end_quizz', [], Response::HTTP_SEE_OTHER);

            }
            elseif ($routeParams['idr'] == 2) {
                return $this->redirectToRoute('app_question_new', ['namecategory'=>$routeParams['namecategory'],'idq'=>$routeParams['idq']+1], Response::HTTP_SEE_OTHER);

            }
            else {
                return $this->redirectToRoute('app_reponse_new', ['namecategory'=>$routeParams['namecategory'],'idq'=>$routeParams['idq'],'idr'=>$routeParams['idr']+1], Response::HTTP_SEE_OTHER);

            }

        }

        return $this->renderForm('reponse/new.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_show', methods: ['GET'])]
    public function show(Reponse $reponse): Response
    {
        return $this->render('reponse/show.html.twig', [
            'reponse' => $reponse,
        ]);
    }

    #[Route('/{id}/edit/{idc}/{nbq}/{idq}/{nbr}', name: 'app_reponse_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        $routeParams = $request->attributes->get('_route_params');
        $reponses = $entityManager->getRepository(Reponse::class)
        ->findBy(['question' => $routeParams['idq']]);
if ($routeParams['nbr']==3) {
    $questions = $entityManager->getRepository(Question::class)
    ->findBy(['category' => $routeParams['idc']]);
    $questionId = $questions[$routeParams['nbq']]->getId();
  

    
}else {

        $reponseId = $reponses[$routeParams['nbr']]->getId();

}


        
       

        $form = $this->createForm(ReponseType::class, $reponse);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            if ($routeParams['nbq'] == 10 and $routeParams['nbr'] ==2 ) {
                return $this->redirectToRoute('app_update_quizz', [], Response::HTTP_SEE_OTHER);

            }
            elseif ($routeParams['nbr']==3) {
 
                return $this->redirectToRoute('app_question_edit', ['id'=>$questionId,'idc'=>$routeParams['idc'],'nbq'=>$routeParams['nbq'],'nbr'=>0], Response::HTTP_SEE_OTHER);
            }
            else {
                return $this->redirectToRoute('app_reponse_edit', ['id'=>$reponseId,'idc'=>$routeParams['idc'],'nbq'=>$routeParams['nbq'],'idq'=>$routeParams['idq'],'nbr'=>$routeParams['nbr']+1], Response::HTTP_SEE_OTHER);

            }

        }

        return $this->renderForm('reponse/edit.html.twig', [
            'reponse' => $reponse,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_reponse_delete', methods: ['POST'])]
    public function delete(Request $request, Reponse $reponse, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$reponse->getId(), $request->request->get('_token'))) {
            $entityManager->remove($reponse);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_reponse_index', [], Response::HTTP_SEE_OTHER);
    }
}
