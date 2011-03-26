<?php

namespace SfMadrid\DropboxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $consumer='q2ary33ayixq8p3';
        $secret='fulpfpegg1s70fm';
        $oauth_con = new \Dropbox_OAuth_PHP($consumer, $secret);
        $dropbox = new \Dropbox_API($oauth_con);

        $oauth_con->getRequestToken();

        $info=$oauth_con->getAuthorizeUrl();

        $tokens = $oauth_con->getRequestToken();
        $this->redirect($oauth_con->getAuthorizeUrl("http://symfony2/app_dev.php/dropbox/view1"));
        
        //$usuario = $dropbox->getToken('suarez.ortega.cesar@gmail.com', 'sfmadrid');
        //$_SESSION['oauth_tokens'] = $usuario;
        //$tokens = $oauth->getAccessToken();

        //$oauth_con->setToken($usuario);

        //print_r($dropbox->getMetaData('/'));

        //$info = $dropbox->getMetaData('/');*/
        return $this->render('SfMadridDropboxBundle:Default:index.html.twig', array('metadata'=>$info));
    }

    public function viewAction () {


    }
}
