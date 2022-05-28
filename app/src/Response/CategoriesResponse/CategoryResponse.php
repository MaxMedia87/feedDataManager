<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Response\CategoriesResponse;


class CategoryResponse implements CategoryResponseInterface
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $parentId;

    /**
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function parentId(): ?string
    {
        return $this->parentId;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @param string $id
     * @return $this
     */
    public function setId(string $id): CategoryResponse
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): CategoryResponse
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string|null $parentId
     * @return $this
     */
    public function setParentId(?string $parentId): CategoryResponse
    {
        $this->parentId = $parentId;

        return $this;
    }
}
