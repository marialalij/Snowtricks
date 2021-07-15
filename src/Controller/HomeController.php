<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HomeController extends AbstractController{ 
    
   /**
     * @Route("/", name="home")
     * @return Response
     * @throws \Twig Error_Loader
     * @throws \Twig Error_Runtime
     * @throws \Twig Error_Syntax
     */
 
   public function index(): Response
   {
     return $this->render('pages/home.html.twig');
   }


}