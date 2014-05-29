<?php

namespace Bibli\LivresBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PaysType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Pays')
            ->add('Nationalite')
            ->add('Capitale')
            ->add('Continent')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Bibli\LivresBundle\Entity\Pays'
        ));
    }

    public function getName()
    {
        return 'bibli_livresbundle_paystype';
    }
}
