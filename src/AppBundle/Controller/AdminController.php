<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\User;
use AppBundle\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{

    public function indexAction(Request $request)
    {

        return $this->render('base.html.twig');
    }

    public function showAction( Request $request, $id)
    {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));

        return $this->render('user/show.html.twig', array(
            'user'           => $user,

        ));
    }

    public function listAction(Request $request)
    {

        $userManager = $this->get('fos_user.user_manager');
        $users = $userManager->findUsers();

        return $this->render('user/list.html.twig', array(
            'users'           => $users,

        ));
    }

    public function deleteAction(Request $request, $id)
    {

        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));
        $form = $this->get('form.factory')->create();

        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {

            $userManager->deleteUser($user);
            return $this->redirectToRoute('app_user_list');
        }

        return $this->render('user/delete.html.twig', array(
            'user' => $user,
            'form'   => $form->createView(),
        ));
    }
}
