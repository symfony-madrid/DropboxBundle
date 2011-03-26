<?php

namespace SfMadrid\DropboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SfMadridDropboxBundle:Default:index.html.twig');
    }
}
