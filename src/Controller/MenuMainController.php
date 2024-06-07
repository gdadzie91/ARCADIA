<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuMainController extends AbstractController
{
    /**
     * @Route("/menu/main", name="app_menu_main")
     */
    public function index(): Response
    {
        return $this->render('menu_main/index.html.twig', [
            'controller_name' => 'MenuMainController',
        ]);
    }
}
