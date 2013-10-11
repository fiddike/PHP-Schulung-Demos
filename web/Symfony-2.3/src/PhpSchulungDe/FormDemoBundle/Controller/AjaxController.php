<?php

namespace PhpSchulungDe\FormDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AjaxController extends Controller
{
    /**
     * @Route("/ajax-demo-form/", name="ajax_demo_form")
     * @Template()
     */
    public function ajaxDemoFormAction()
    {
        return array();
    }

    /**
     * @Route("/ajax-demo-show/", name="ajax_demo_show")
     */
    public function postDemoShowAction(Request $request)
    {
        // echo '$_POST :      ';
        // var_dump($_POST);

        // echo '$request->request :      ';
        // var_dump($request->request);

        $name = $request->get('fname');
        $rno  = $request->get('id');

        return new Response('Received name: #' . $name . '# and role number: #' . $rno . '#');
    }
}
