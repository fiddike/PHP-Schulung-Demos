<?php

namespace PhpSchulungDe\SessionDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/session-counter-up/")
     * @Template()
     */
    public function sessionCounterUpAction(Request $request)
    {
        $session = $request->getSession();
        $demo_counter = $session->get('demo_counter');
        if (!isset($demo_counter)) {
            $demo_counter = 0;
        }
        $session->set('demo_counter', ++$demo_counter);

        return array('demo_counter' => $demo_counter);
    }

    /**
     * @Route("/session-counter-reset/")
     * @Template("PhpSchulungDeSessionDemoBundle:Default:sessionCounterUp.html.twig")
     */
    public function sessionCounterResetAction(Request $request)
    {
        $session = $request->getSession();
        $session->set('demo_counter', $demo_counter = 0);

        return array('demo_counter' => $demo_counter);
    }
}
