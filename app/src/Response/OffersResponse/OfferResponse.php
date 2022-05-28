<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Response\OffersResponse;

class OfferResponse implements OfferResponseInterface
{
    /**
     * @var string
     */
    private $categoryId;

    /**
     * @var string
     */
    private $currencyId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var string|null
     */
    private $model;

    /**
     * @var string
     */
    private $vendor;

    /**
     * @var int|null
     */
    private $quantity;

    /**
     * @var float
     */
    private $price;

    /**
     * @var float|null
     */
    private $oldPrice;

    /**
     * @var string|null
     */
    private $image;

    /**
     * @var array
     */
    private $images = [];

    public function categoryId(): string
    {
        return $this->categoryId;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function model(): ?string
    {
        return $this->model;
    }

    public function vendor(): string
    {
        return $this->vendor;
    }

    public function quantity(): ?int
    {
        return $this->quantity;
    }

    public function price(): float
    {
        return $this->price;
    }

    public function oldPrice(): ?float
    {
        return $this->oldPrice;
    }

    public function image(): ?string
    {
        return $this->image;
    }

    public function images(): array
    {
        return $this->images();
    }

    /**
     * @param string $categoryId
     * @return $this
     */
    public function setCategoryId(string $categoryId): OfferResponse
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): OfferResponse
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string|null $description
     * @return $this
     */
    public function setDescription(?string $description): OfferResponse
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param string|null $model
     * @return $this
     */
    public function setModel(?string $model): OfferResponse
    {
        $this->model = $model;

        return $this;
    }

    /**
     * @param string $vendor
     * @return $this
     */
    public function setVendor(string $vendor): OfferResponse
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * @param int|null $quantity
     * @return $this
     */
    public function setQuantity(?int $quantity): OfferResponse
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice(float $price): OfferResponse
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param float|null $oldPrice
     * @return $this
     */
    public function setOldPrice(?float $oldPrice): OfferResponse
    {
        $this->oldPrice = $oldPrice;

        return $this;
    }

    /**
     * @param string|null $image
     * @return $this
     */
    public function setImage(?string $image): OfferResponse
    {
        $this->image = $image;

        return $this;
    }

    /**
     * @param array $images
     * @return $this
     */
    public function setImages(array $images): OfferResponse
    {
        $this->images = $images;

        return $this;
    }

    /**
     * @param string $image
     * @return $this
     */
    public function addImage(string $image): OfferResponse
    {
        if (false === in_array($image, $this->images)) {
            $this->images[] = $image;
        }

        return $this;
    }

    /**
     * @return string
     */
    public function currencyId(): string
    {
        return $this->currencyId;
    }

    public function setCurrencyId(string $currencyId): OfferResponse
    {
        $this->currencyId = $currencyId;

        return $this;
    }
}
