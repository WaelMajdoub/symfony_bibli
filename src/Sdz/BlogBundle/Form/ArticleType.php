<?php

namespace Sdz\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('titre')
            ->add('auteur')
            ->add('contenu')
        ;
    }

/*
Every form needs to know the name of the class that holds the underlying data (e.g.
Acme\TaskBundle\Entity\Task). Usually, this is just guessed based off of the object passed to the
second argument to createForm (i.e. $task). Later, when you begin embedding forms, this will no
longer be sufficient. So, while not always necessary, it's generally a good idea to explicitly specify
the data_class option by adding the following to your form type class:
*/
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sdz\BlogBundle\Entity\Article'
        ));
    }

    public function getName()
    {
        return 'sdz_blogbundle_articletype';
    }
}
