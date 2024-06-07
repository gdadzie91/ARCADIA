<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisiteGuideController extends AbstractController
{
    /**
     * @Route("/visite/guide", name="app_visite_guide")
     */
    public function index(): Response
    {
        return $this->render('visite_guide/index.html.twig', [
            'controller_name' => 'VisiteGuideController',
        ]);
    }
}
