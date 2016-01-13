<?php

namespace Test\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Test\TestBundle\Form\Type\BarType;
use Test\TestBundle\Entity\Bar;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $bar = new Bar();
        $form = $this->createForm(BarType::class,$bar);
        return $this->render('TestTestBundle:Default:index.html.twig');
    }
}
