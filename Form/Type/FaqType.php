<?php
namespace Viweb\FaqBundle\Form\Type;

use Sylius\Bundle\ResourceBundle\Form\Type\AbstractResourceType;
use Sylius\Bundle\ResourceBundle\Form\Type\ResourceTranslationsType;
use Symfony\Component\Form\FormBuilderInterface;
use Viweb\FaqBundle\Entity\Faq;

class FaqType extends AbstractResourceType
{
    public function __construct($dataClass = null, $validationGroups = [])
    {
        if(!$dataClass){
            $dataClass = Faq::class;
        }
        parent::__construct($dataClass, $validationGroups);
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('translations', ResourceTranslationsType::class, [
            'entry_type' => FaqTranslationType::class
        ]);
    }
}