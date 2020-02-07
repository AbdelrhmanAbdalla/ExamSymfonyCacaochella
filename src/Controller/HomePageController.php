<?php

namespace App\Controller;

use App\Form\SelectionType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomePageController extends AbstractController
{
    /**
     * @Route("/", name="home.index")
     */
    public function index():Response
    {

        return $this->render('home/index.html.twig', [
        ]);
    }
}