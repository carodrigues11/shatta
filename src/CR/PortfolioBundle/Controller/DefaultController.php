<?php

namespace CR\PortfolioBundle\Controller;

use AppBundle\Entity\User;
use CR\PortfolioBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;




class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $users = $em->getRepository('CRPortfolioBundle:Users')->findAll();


        return $this->render('CRPortfolioBundle:Default:index.html.twig', array(
            'users'=> $users
        ));

    }

    public function addAction(Request $request)
    {
        $test = 'bonjour';

        return $this->render('CRPortfolioBundle:Default:index.html.twig', [
            'test' => $test,
        ]);
    }


    public function portfolioAction()
    {
        return $this->render('CRPortfolioBundle:Default:portfolio.html.twig');
    }

    public function photosAction()
    {
        return $this->render('CRPortfolioBundle:Default:photos.html.twig');
    }

    public function infosAction()
    {
        return $this->render('CRPortfolioBundle:Default:infos.html.twig');
    }

    public function contactAction()
    {
        return $this->render('CRPortfolioBundle:Default:contact.html.twig');
    }
}
