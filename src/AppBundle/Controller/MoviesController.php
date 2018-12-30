<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Mota
 * Date: 30/12/2018
 * Time: 19:31
 */

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\ControllerTrait;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use FOS\RestBundle\Controller\Annotations as Rest;
class MoviesController extends AbstractController
{

    use ControllerTrait;

    /**
     * @Rest\View()
     * @return array
     */
    public function getMoviesAction()
    {
        $movies = $this->getDoctrine()->getRepository('AppBundle:Movie')->findAll();
        return $movies;
    }
}