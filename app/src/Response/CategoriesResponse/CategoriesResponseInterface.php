<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Response\CategoriesResponse;

interface CategoriesResponseInterface
{
    /**
     * @return CategoryResponseInterface[]|null
     */
    public function categories(): ?array;
}
