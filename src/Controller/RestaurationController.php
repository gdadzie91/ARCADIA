<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RestaurationController extends AbstractController
{
    /**
     * @Route("/restauration", name="app_restauration")
     */
    public function index(): Response
    {
        return $this->render('restauration/index.html.twig', [
            'controller_name' => 'RestaurationController',
        ]);
    }
}
