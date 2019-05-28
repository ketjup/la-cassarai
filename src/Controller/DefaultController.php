<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/index", name="Default")
     */
    public function index()
    {
        return $this->render('Default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
