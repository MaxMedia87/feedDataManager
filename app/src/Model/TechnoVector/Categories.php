<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Model\TechnoVector;

use JMS\Serializer\Annotation as JMS;


/** @JMS\XmlRoot("categories") */
class Categories
{
    /**
     * @JMS\XmlList(inline=true, entry="category")
     * @JMS\Type("array<Sakharov\SupplierDataManager\Model\TechnoVector\Category>")
     * @var Category[]
     */
    private $categories = [];

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
}
