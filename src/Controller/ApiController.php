<?php

// src/Controller/ApiController.php

namespace App\Controller;

use App\Entity\Question;
use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/api')]
class ApiController extends AbstractController
{
    private $entityManager;
    private $questionRepository;

    public function __construct(EntityManagerInterface $entityManager, QuestionRepository $questionRepository)
    {
        $this->entityManager = $entityManager;
        $this->questionRepository = $questionRepository;
    }

    #[Route('/questions', name: 'api_questions_index', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function index(): JsonResponse
    {
        $questions = $this->questionRepository->findAll();
        return $this->json($questions);
    }

    #[Route('/questions/{id}', name: 'api_questions_show', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function show(int $id): JsonResponse
    {
        $question = $this->questionRepository->find($id);
        if (!$question) {
            return $this->json(['message' => 'Question not found'], 404);
        }
        return $this->json($question);
    }

    #[Route('/questions/create', name: 'api_questions_create', methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function create(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $question = new Question();
        $question->setDescription($data['description']);

        $this->entityManager->persist($question);
        $this->entityManager->flush();

        return $this->json($question, 201);
    }

    #[Route('/questions/{id}/update', name: 'api_questions_update', methods: ['PUT'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function update(int $id, Request $request): JsonResponse
    {
        $question = $this->questionRepository->find($id);
        if (!$question) {
            return $this->json(['message' => 'Question not found'], 404);
        }

        $data = json_decode($request->getContent(), true);
        $question->setDescription($data['description']);

        $this->entityManager->flush();

        return $this->json($question);
    }

    #[Route('/questions/{id}/delete', name: 'api_questions_delete', methods: ['DELETE'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function delete(int $id): JsonResponse
    {
        $question = $this->questionRepository->find($id);
        if (!$question) {
            return $this->json(['message' => 'Question not found'], 404);
        }

        $this->entityManager->remove($question);
        $this->entityManager->flush();

        return $this->json(['message' => 'Question deleted']);
    }
}
