<?php

namespace LicoboxBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LicoboxBundle\Entity\Habitat;

/**
 * Habitat controller.
 *
 */
class HabitatController extends Controller
{
    /**
     * Lists all Habitat entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $habitats = $em->getRepository('LicoboxBundle:Habitat')->findAll();

        return $this->render('habitat/index.html.twig', array(
            'habitats' => $habitats,
        ));
    }

    /**
     * Finds and displays a Habitat entity.
     *
     */
    public function showAction(Habitat $habitat)
    {

        return $this->render('habitat/show.html.twig', array(
            'habitat' => $habitat,
        ));
    }
}
