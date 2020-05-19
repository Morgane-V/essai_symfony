<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropertyController extends AbstractController
{

/**
 * @Route("/biens", name="property.index")
 * @return Response
 */
    public function index(): Response
    {
        return $this->render('property/index.html.twig', [
            'current_menu' => 'properties'
        ]);
    }

    /**
 * @Route("/page3", name="property.page3")
 * @return Response
 */
public function page3(): Response
{
    return $this->render('property/page3.html.twig', [
        'current_menu' => 'properties'
    ]);
}
}