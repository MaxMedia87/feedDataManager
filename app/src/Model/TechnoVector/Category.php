<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Model\TechnoVector;

use JMS\Serializer\Annotation as JMS;

/** @JMS\XmlRoot("category") */
class Category
{
    /**
     * @JMS\SerializedName("id")
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string
     */
    private $id;

    /**
     * @JMS\SerializedName("parentId")
     * @JMS\XmlAttribute
     * @JMS\Type("string")
     *
     * @var string|null
     */
    private $parentId;

    /**
     * @JMS\XmlValue(cdata = false)
     * @JMS\Type("string")
     *
     * @var string
     */
    private $title;

    public function id(): ?string
    {
        return $this->id;
    }

    public function parentId(): ?string
    {
        return $this->parentId;
    }

    public function title(): string
    {
        return $this->title;
    }
}
