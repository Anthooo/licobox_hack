<?php

namespace LicoboxBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LicoboxBundle\Entity\Eyes;

/**
 * Eyes controller.
 *
 */
class EyesController extends Controller
{
    /**
     * Lists all Eyes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $eyes = $em->getRepository('LicoboxBundle:Eyes')->findAll();

        return $this->render('eyes/index.html.twig', array(
            'eyes' => $eyes,
        ));
    }

    /**
     * Finds and displays a Eyes entity.
     *
     */
    public function showAction(Eyes $eye)
    {

        return $this->render('eyes/show.html.twig', array(
            'eye' => $eye,
        ));
    }
}
