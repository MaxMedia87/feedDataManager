<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Response\CategoriesResponse;

class CategoriesResponse implements CategoriesResponseInterface
{
    /**
     * @var CategoryResponseInterface[]|null
     */
    private $categories;

    /**
     * @return CategoryResponseInterface[]|null
     */
    public function categories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param CategoryResponseInterface[]|null
     */
    public function setCategories(?array $categories)
    {
        $this->categories = $categories;
    }

    /**
     * @param CategoryResponseInterface $categoryResponse
     */
    public function addCategory(CategoryResponseInterface $categoryResponse)
    {
        $this->categories[] = $categoryResponse;
    }
}
