<?php

namespace PhpSchulungDe\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/psd/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        $foo = array('a', 'b', 'c');
        dump($foo);

        return array('name' => $name);
    }
}
