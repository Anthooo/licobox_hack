<?php

namespace LicoboxBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LicoboxBundle\Entity\Corne;

/**
 * Corne controller.
 *
 */
class CorneController extends Controller
{
    /**
     * Lists all Corne entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cornes = $em->getRepository('LicoboxBundle:Corne')->findAll();

        return $this->render('corne/index.html.twig', array(
            'cornes' => $cornes,
        ));
    }

    /**
     * Finds and displays a Corne entity.
     *
     */
    public function showAction(Corne $corne)
    {

        return $this->render('corne/show.html.twig', array(
            'corne' => $corne,
        ));
    }
}
