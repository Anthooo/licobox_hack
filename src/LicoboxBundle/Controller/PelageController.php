<?php

namespace LicoboxBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LicoboxBundle\Entity\Pelage;

/**
 * Pelage controller.
 *
 */
class PelageController extends Controller
{
    /**
     * Lists all Pelage entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pelages = $em->getRepository('LicoboxBundle:Pelage')->findAll();

        return $this->render('pelage/index.html.twig', array(
            'pelages' => $pelages,
        ));
    }

    /**
     * Finds and displays a Pelage entity.
     *
     */
    public function showAction(Pelage $pelage)
    {

        return $this->render('pelage/show.html.twig', array(
            'pelage' => $pelage,
        ));
    }
}
