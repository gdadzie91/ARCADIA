<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VisiteEnTrainController extends AbstractController
{
    /**
     * @Route("/visite/en/train", name="app_visite_en_train")
     */
    public function index(): Response
    {
        return $this->render('visite_en_train/index.html.twig', [
            'controller_name' => 'VisiteEnTrainController',
        ]);
    }
}
