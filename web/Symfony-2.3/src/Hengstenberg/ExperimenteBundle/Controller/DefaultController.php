<?php

namespace Hengstenberg\ExperimenteBundle\Controller;

use Hengstenberg\ExperimenteBundle\Entity\Bestellen;
use Hengstenberg\ExperimenteBundle\Form\BestellenAktuellerKundeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/hb-exp/bestellen", name="bestellen")
     * @Template()
     */
    public function bestellenAction(Request $request)
    {
        $bestellParameter = new Bestellen();
        $form = $this->createForm(
            new BestellenAktuellerKundeType(),
            $bestellParameter
        );

        return array(
            'bestellFormular' => $form->createView(),
        );
    }
}
