<?php

namespace LicoboxBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LicoboxBundle\Entity\Capture;
use LicoboxBundle\Form\CaptureType;

/**
 * Capture controller.
 *
 */
class CaptureController extends Controller
{
    /**
     * Lists all Capture entities.
     *
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $captures = $em->getRepository('LicoboxBundle:Capture')->findAll();

        return $this->render('capture/index.html.twig', array(
            'captures' => $captures,
        ));
    }

    /**
     * Creates a new Capture entity.
     *
     */
    public function newAction(Request $request)
    {
        $capture = new Capture();
        $form = $this->createForm('LicoboxBundle\Form\CaptureType', $capture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($capture);
            $em->flush();

            return $this->redirectToRoute('capture_show', array('id' => $capture->getId()));
        }

        return $this->render('capture/new.html.twig', array(
            'capture' => $capture,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Capture entity.
     *
     */
    public function showAction(Capture $capture)
    {
        $deleteForm = $this->createDeleteForm($capture);

        return $this->render('capture/show.html.twig', array(
            'capture' => $capture,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Capture entity.
     *
     */
    public function editAction(Request $request, Capture $capture)
    {
        $deleteForm = $this->createDeleteForm($capture);
        $editForm = $this->createForm('LicoboxBundle\Form\CaptureType', $capture);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($capture);
            $em->flush();

            return $this->redirectToRoute('capture_edit', array('id' => $capture->getId()));
        }

        return $this->render('capture/edit.html.twig', array(
            'capture' => $capture,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Capture entity.
     *
     */
    public function deleteAction(Request $request, Capture $capture)
    {
        $form = $this->createDeleteForm($capture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($capture);
            $em->flush();
        }

        return $this->redirectToRoute('capture_index');
    }

    /**
     * Creates a form to delete a Capture entity.
     *
     * @param Capture $capture The Capture entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Capture $capture)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('capture_delete', array('id' => $capture->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
