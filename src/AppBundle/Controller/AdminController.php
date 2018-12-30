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


}
