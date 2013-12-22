<?php

namespace AO\TestBundle\Controller;

use AO\TestBundle\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template
     */
    public function indexAction(Request $request)
    {

        $form = $this->createForm(new TestType(), array('attachments' => array(1 => null, 2 => null)));
        $form->handleRequest($request);
        
        if($form->isValid())
        {
            $this->get('session')->getFlashBag()->add('success', 'Form is valid');
        }

        return array(
            'form' => $form->createView(),
        );
    }
}
