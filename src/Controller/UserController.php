<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;

class UserController extends AbstractController
{
    /**
     * @Route("/Seconnecter", name="seconnecter")
     */
    public function index(): Response
    {
        return $this->render('registration/register.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    /**
     * @Route("/login", name="login")
     */
    public function login(): Response
    {
        return $this->render('registration/login.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }


    /**
     * @Route("/reset", name="reset")
     */
    public function reset(): Response
    {
        return $this->render('registration/reset.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
