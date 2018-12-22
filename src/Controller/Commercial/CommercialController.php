<?php

namespace App\Controller\Commercial;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CommercialController
 * @package App\Controller
 */
/**
 * @Route("/direction-commerciale")
 */
class CommercialController extends AbstractController
{
    /**
     * @Route("/commercial", name="commercial")
     */
    public function liste()
    {
        return $this->render('commercial/page/commercial.html.twig', [

        ]);
    }
}
