<?php
/**
 * Created by PhpStorm.
 * User: Krionari
 * Date: 27/06/2019
 * Time: 22:03
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home_index")
     * @return Response A response instance
     */
        public function index(): Response
        {
            return $this->render('home/index.html.twig');
        }

}