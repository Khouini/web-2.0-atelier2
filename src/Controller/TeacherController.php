<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(Request $request): Response
    {
        return $this->render('teacher/index.html.twig', [
            'name' => $request->query->get('name'),
            'goToIndexResult' => $this->goToIndex(),
        ]);
    }
    #[Route('/student', name: 'app_student')]

    public function goToIndex()
    {
        return $this->redirectToRoute('app_student');
    }
}
