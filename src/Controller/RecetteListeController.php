<?php

namespace App\Controller;

use App\Entity\Meal;
use App\Entity\Ingredient;
use App\Entity\Instruction;
use App\Repository\MealRepository;
use App\Repository\IngredientRepository;
use App\Repository\InstructionRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
     * @Route("/", name="recette_")
     */
class RecetteListeController extends AbstractController
{
    protected MealRepository $repository;
    
    public function __construct(MealRepository $repository)
    {
        $this->repository = $repository;
    }
    
    /**
     * @Route("", name="list")
     */
    public function index(): Response
    {
            $recettes = $this->repository->findAll();

        return $this->render('recette_liste/index.html.twig', [
            'recettes' => $recettes,
        ]);
    }
}
