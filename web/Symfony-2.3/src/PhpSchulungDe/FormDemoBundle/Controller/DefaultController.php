<?php

namespace PhpSchulungDe\FormDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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
     * @Route("/post-demo-form/", name="post_demo_form")
     * @Template()
     */
    public function postDemoFormAction()
    {
        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('post_demo_show'))
            ->add('fooText', 'text')
            ->add('save', 'submit')
            ->getForm();

        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/post-demo-show/", name="post_demo_show")
     */
    public function postDemoShowAction(Request $request)
    {
        // echo '$_POST :      ';
        // var_dump($_POST);

        // echo '$request->request :      ';
        // var_dump($request->request);

        $formData = $request->get('form');
        echo $formData['fooText'];

        return new Response('');
    }
}
