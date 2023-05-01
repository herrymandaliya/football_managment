<?php

namespace App\Controller;

use App\Form\TeamType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeamController extends AbstractController
{
    /**
     * @Route("/team", name="team")
     */
    public function index(): Response
    {
        return $this->render('team/index.html.twig', [
            'controller_name' => 'TeamController',
        ]);
    }

    /**
     * @Route("team/create", name="create")
     */
    public function create(): Response
    {
        $form = $this->createForm(TeamType::class);
        return $this->render('team/create.html.twig', [
            'form' => $form->createView(),
        ]);
        
    }
}
