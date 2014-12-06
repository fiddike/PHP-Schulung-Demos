<?php

namespace PhpSchulungDe\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * @Route("/psd")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/exception")
     */
    public function exceptionAction()
    {
        throw new NotFoundHttpException ('This Exception is thrown to simulate that content has not been found.');
    }

    /**
     * @Route("/dump")
     * @Template()
     */
    public function dumpAction()
    {
        $foo = array('a', 'b', 'c');
        dump($foo);

        return array();
    }

    /**
     * @Route("/debug")
     */
    public function debugMeAction()
    {
        $foo = array('a', 'b', 'c');

        $i = 1;
        $k = 2;

        $i = 10;
        $k = 20;

        $p = 100;
        $p = 200;

        throw new NotFoundHttpException ('Debug me, please!');
    }
}
