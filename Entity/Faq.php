<?php
namespace Viweb\FaqBundle\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TranslatableInterface;
use Sylius\Component\Resource\Model\TranslatableTrait;

/**
 * Faq
 */
class Faq implements ResourceInterface, TranslatableInterface
{
    use TranslatableTrait {
        __construct as intializeTranslationCollection;
    }

    public function __construct()
    {
        $this->currentLocale = $this->fallbackLocale = 'en';
        $this->intializeTranslationCollection();
    }
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $ordering;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ordering
     *
     * @param integer $ordering
     *
     * @return Faq
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;

        return $this;
    }

    /**
     * Get ordering
     *
     * @return int
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    public function createTranslation()
    {
        return new FaqTranslation();
    }

    public function getTitle()
    {
        return $this->getTranslation()->getTitle();
    }

    public function getAnswer()
    {
        return $this->getTranslation()->getAnswer();
    }
}

