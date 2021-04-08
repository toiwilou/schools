<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherUserController extends AbstractController
{
    #[Route('/teacher/user', name: 'teacher_user')]
    public function index(): Response
    {
        return $this->render('teacher_user/index.html.twig', [
            'controller_name' => 'TeacherUserController',
        ]);
    }
}
