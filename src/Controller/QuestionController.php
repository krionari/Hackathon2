<?php
/**
 * Created by PhpStorm.
 * User: Krionari
 * Date: 27/06/2019
 * Time: 22:03
 */

namespace App\Controller;


use App\Entity\Question;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/question/{id}", name="question_index")
     * @return Response A response instance
     */
        public function index(Question $question): Response
        {

            $questions = $question->getDirective();

            return $this->render('question/index.html.twig', ['questions' => $questions]);
        }

    /**
     * @Route("/solution/{id}", name="solution_index")
     * @return Response A response instance
     */
    public function solution(Question $question): Response
    {
        $reponses = $question->getReponse();
        $solution = $question->getSolution();

        return $this->render('question/solution.html.twig', [
            'reponses' => $reponses,
            'solution' => $solution
        ]);
    }
}