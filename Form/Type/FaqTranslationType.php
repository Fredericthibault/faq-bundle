<?php
/**
 * Created by PhpStorm.
 * User: pmdc
 * Date: 23/01/17
 * Time: 1:29 PM
 */

namespace Viweb\FaqBundle\Form\Type;


use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Viweb\FaqBundle\Entity\FaqTranslation;

class FaqTranslationType extends AbstractResourceType
{
    public function __construct($dataClass = null, $validationGroups = [])
    {
        if(!$dataClass){
            $dataClass = FaqTranslation::class;
        }
        parent::__construct($dataClass, $validationGroups);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class)
            ->add('answer', TextareaType::class)
            ;
    }
}