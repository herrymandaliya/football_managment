<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    /**
     * @Route("/player", name="player")
     */
    public function index(): Response
    {
        return $this->render('player/index.html.twig', [
            'controller_name' => 'PlayerController',
        ]);
    }

     /**
     * @Route("/create", name="create")
     */
    public function create(): Response
    {
        return $this->render('player/create.html.twig', [
            'controller_name' => 'PlayerController',
        ]);
    }
}
