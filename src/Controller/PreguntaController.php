<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class PreguntaController extends AbstractController
{
    /**
     * @Route("/", name="portada")
     */
    public function home(Environment $twigEnv){
        $view = $twigEnv->render('home.html.twig');
        return new Response($view);
        //return $this->render('home.html.twig');
    }

    /**
     * @Route("/preguntas/{slug}", name="pregunta")
     */
    public function mostrar($slug){

        dump($slug, $this);
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