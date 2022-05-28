<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Response\CategoriesResponse;

interface CategoryResponseInterface
{
    public function id();

    public function parentId();

    public function name();
}
