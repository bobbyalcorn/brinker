<?php

// src/Controller/QuestionController.php

namespace App\Controller;

use App\Entity\Question;
use App\Form\QuestionType;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class QuestionController extends AbstractController
{
    private $entityManager;
    private $questionRepository;
    private $csrfTokenManager;

    public function __construct(EntityManagerInterface $entityManager, QuestionRepository $questionRepository, CsrfTokenManagerInterface $csrfTokenManager)
    {
        $this->entityManager = $entityManager;
        $this->questionRepository = $questionRepository;
        $this->csrfTokenManager = $csrfTokenManager;
    }

    #[Route('/questions', name: 'questions_index', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(): Response
    {
        $questions = $this->questionRepository->findAll();
        return $this->render('question/index.html.twig', [
            'questions' => $questions,
        ]);
    }

    #[Route('/questions/{id}', name: 'questions_show', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function show(int $id): Response
    {
        $question = $this->questionRepository->find($id);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }
        return $this->render('question/show.html.twig', [
            'question' => $question,
        ]);
    }

    #[Route('/question/new', name: 'question_new', methods: ['GET', 'POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function create(Request $request): Response
    {
        $question = new Question();
        $form = $this->createForm(QuestionType::class, $question);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($question);
            $this->entityManager->flush();

            return $this->redirectToRoute('questions_show', ['id' => $question->getId()]);
        }

        return $this->render('question/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/questions/{id}/edit', name: 'questions_edit', methods: ['GET', 'POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function update(int $id, Request $request): Response
    {
        $question = $this->questionRepository->find($id);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $form = $this->createForm(QuestionType::class, $question);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            return $this->redirectToRoute('questions_show', ['id' => $question->getId()]);
        }

        return $this->render('question/edit.html.twig', [
            'form' => $form->createView(),
            'question' => $question,
        ]);
    }

    #[Route('/questions/{id}/delete', name: 'questions_delete', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function delete(int $id, Request $request): Response
    {
        $question = $this->questionRepository->find($id);
        if (!$question) {
            throw $this->createNotFoundException('Question not found');
        }

        $submittedToken = $request->request->get('_token');

        if ($this->isCsrfTokenValid('delete' . $question->getId(), $submittedToken)) {
            $this->entityManager->remove($question);
            $this->entityManager->flush();

            return $this->redirectToRoute('questions_index');
        }

        return $this->redirectToRoute('questions_index');
    }
}
