<?php

namespace UniCrm\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Tests\Matcher\DumpedUrlMatcherTest;

class DefaultController extends Controller
{

    /**
     * @Route("/core")
     */
    public function indexAction()
    {

        dump('aye');die();
        //return $this->render('@UniCoreBundle/Default/index.html.twig');
    }
}
