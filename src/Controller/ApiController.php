<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends AbstractController
{
    public function getjson(): Response
    {
        return $this->json(['server data' => '0123456789']);
    }
}