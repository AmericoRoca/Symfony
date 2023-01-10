<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hello world with symfony'
        ]);
    }

    public function animals($name, $surname){
        $title = 'Welcome to the animals page';

        return $this->render('home/animals.html.twig', [ 
            'title' => $title,
            'name' => $name,
            'surname' =>$surname
        ]);
    }

    public function redirigir(){
        //return $this->redirect('index');
        return $this->redirect('https://www.google.com');
    }
}
