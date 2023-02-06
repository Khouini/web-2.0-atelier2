<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]

    public function index(): Response
    {
        $message = 'Bonjour mes étudiants';

        return new Response('<html><body>' . $message . '</body></html>');
    }
}
