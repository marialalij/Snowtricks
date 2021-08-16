<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Trick;
use Twig\Environment;

class HomeController extends AbstractController
{

  /**
   * @Route("/", name="home")
   * @return Response
   * @throws \Twig Error_Loader
   * @throws \Twig Error_Runtime
   * @throws \Twig Error_Syntax
   */

  public function index(): Response
  {

    $rep = $this->getDoctrine()->getRepository(Trick::class);
    $tricks = $rep->findAll();
    return $this->render('pages/home.html.twig', [
      'tricks' => $tricks,

    ]);
  }

  /**
   * @Route("/show/{id}", name="show")
   **/

  public function show($id): Response
  {
    $rep = $this->getDoctrine()->getRepository(Trick::class);
    $trick = $rep->find($id);
    return $this->render('show/index.html.twig', [
      'trick' => $trick,

    ]);
  }
}
