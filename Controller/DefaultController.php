<?php

namespace Viweb\FaqBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $faqs = $this->get('viweb.repository.faq')->findAll();
        return $this->render('ViwebFaqBundle:Default:index.html.twig',
            [
                'faqs' => $faqs
            ]);
    }
}
