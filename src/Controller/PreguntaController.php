<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PreguntaController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home(){
        return new Response('Bienvenido a la portada!');
    }

    /**
     * @Route("/preguntas/{slug}")
     */
    public function mostrar($slug){

        $res = [
            'Respuesta 1',
            'Respuesta 2',
            'Respuesta 3'
        ];
        return $this->render('res.html.twig', [
            'pregunta' => sprintf('Hola %s', $slug),
            'res' => $res,
        ]);
    }

}