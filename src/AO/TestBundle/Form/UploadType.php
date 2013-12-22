<?php

namespace AO\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

class UploadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('upload', 'file', array(
            'constraints' => array(
                new Assert\File(array(
                        'mimeTypes' => array('application/pdf'))
                )
            )
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'upload';
    }
}