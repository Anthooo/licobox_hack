<?php

namespace LicoboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LicoboxBundle:Default:index.html.twig');
    }

    public function checkUserAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('LicoboxBundle:User')->findAll();

        $username = $_GET['username'];
        $pass = $_GET['pass'];

        foreach ($users as $user){
            if (strtolower($user->getName()) == strtolower($username)){
                if (strtolower($user->getPass()) == strtolower($pass)){

                    $captures = $em->getRepository('LicoboxBundle:Capture')->findBy(array('Id_User' => $user->getId()));
                    $licornes = $em->getRepository('LicoboxBundle:Licorne')->findAll();

                    $session = new Session();
                    // set and get session attributes
                    $session->set('name', $username);
                    $session->set('id_user', $user->getId());
                    return $this->render('licorne/index.html.twig', array(
                        'captures' => $captures,
                        'licornes'=> $licornes,
                    ));
                }
                // si le mdp est faux
                return $this->render('LicoboxBundle:Default:index.html.twig');
            }
            // si le user existe pas
            return $this->redirectToRoute('user_new');
        }
    }
}