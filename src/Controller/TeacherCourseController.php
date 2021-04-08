<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherCourseController extends AbstractController
{
    #[Route('/teacher/course', name: 'teacher_course')]
    public function index(): Response
    {
        return $this->render('teacher_course/index.html.twig', [
            'controller_name' => 'TeacherCourseController',
        ]);
    }
}
