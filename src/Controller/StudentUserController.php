<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentUserController extends AbstractController
{
    #[Route('/student/user', name: 'student_user')]
    public function index(): Response
    {
        return $this->render('student_user/index.html.twig', [
            'controller_name' => 'StudentUserController',
        ]);
    }
}
