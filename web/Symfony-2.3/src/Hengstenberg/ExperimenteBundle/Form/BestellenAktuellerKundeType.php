<?php
namespace Hengstenberg\ExperimenteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class BestellenAktuellerKundeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('art_betrieb', 'text', array('required' => false, 'label' => 'artikelbetrieb'))
            ->add('warengruppe', 'text', array('required' => false, 'label' => 'warengruppe'))
            ->add('artikelnr', 'text', array('required' => false, 'label' => 'artikelnr'))
            // @TODO artikelstatus wird aus DB schon geholt, später in Ergebnistabelle versteckt mit rein schreiben: {{ dump(artikel[0].ARTS_KZSTATUSCODE) }}
            ->add('artikelstatus', 'text', array('required' => false, 'label' => 'artikelstatus'))
            ->add('menge', 'text', array('required' => false, 'label' => 'menge'))
            ->add('sdo', 'text', array('required' => false, 'label' => 'standort'))
            // @TODO Preisfindung in DB Aufrufen, dann Feld hier löschen!
            ->add('standardvsa', 'text', array('required' => false, 'label' => 'standardversandart'))
            // @TODO siehe Artieklstatus
            ->add('bestellen', 'submit', array('label' => 'bestellen'))
            ->add('bestell_parameter', 'submit', array('label' => 'bestellparameter'))
            ->add('bestellstatus', 'submit', array('label' => 'bestellstatus'))
            ->add('bestelldatei', 'submit', array('label' => 'bestelldatei'))
            ->add('rueckruf', 'submit', array('label' => 'rueckruf'))
            ->add('zurueck', 'submit', array('label' => 'zurueck'))
        ;
    }

    public function getName()
    {
        return 'bestellen_aktueller_kunde';
    }
}
