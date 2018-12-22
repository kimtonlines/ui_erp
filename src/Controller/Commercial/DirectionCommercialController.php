<?php
/**
 * Created by PhpStorm.
 * User: kimt
 * Date: 22/12/18
 * Time: 01:29
 */

namespace App\Controller\Commercial;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DirectionCommercialController extends AbstractController
{
    /**
     * @Route("/direction-commerciale", name="direction-commerciale")
     */
    public function index()
    {
        return $this->render('commercial/page/index.html.twig', [

        ]);
    }

}