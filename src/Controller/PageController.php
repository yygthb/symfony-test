<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PageController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('index/index.html.twig', []);
    }

    public function vue(): Response
    {
        return $this->render('vue/vue.html.twig', []);
    }
}