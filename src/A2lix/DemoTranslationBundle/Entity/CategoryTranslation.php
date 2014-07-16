<?php

namespace A2lix\DemoTranslationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use A2lix\I18nDoctrineBundle\Doctrine as A2lixI18n;

/**
 * @ORM\Entity
 * @ORM\Table(name="categoryTranslation")
 */
class CategoryTranslation implements A2lixI18n\Interfaces\OneLocaleInterface
{
    use A2lixI18n\ORM\Util\Translation;

    /**
     * @ORM\Column(nullable=true)
     */
    protected $title;

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle()
    {
        return $this->title;
    }
}