<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TemplateController extends AbstractController
{
    #[Route('/Dummy', name: 'app_Dummy')]
    public function index(): Response
    {
        $text="welcome";
        $years=[2020,2021,2022,2023];
        return $this->render(view:'Dummy/index.html.twig',parameters:[
            "text" => $text,
            "years" => $year
        ]);
    }
}
