<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return new Response(
            '<html><body>' . 'teacher index' . '</body></html>'
        );
    }

    #[Route('/teacher/{name}', name: 'app_teacher2')]
    public function showTeacher($name): Response
    {
        return $this->render('teacher/index.html.twig', [
            'name' => $name,
            // 'goToIndexResult' => $this->goToIndex(),
        ]);
    }
    #[Route('/teacherR', name: 'app_teacherR')]

    public function goToIndex()
    {
        return $this->redirectToRoute('app_student');
    }
}
