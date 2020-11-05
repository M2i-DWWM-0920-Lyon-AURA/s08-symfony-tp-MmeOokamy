<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteListeController extends AbstractController
{
    /**
     * @Route("/", name="recette_liste")
     */
    public function index(): Response
    {
        return $this->render('recette_liste/index.html.twig', [
            'controller_name' => 'RecetteListeController',
        ]);
    }
}
