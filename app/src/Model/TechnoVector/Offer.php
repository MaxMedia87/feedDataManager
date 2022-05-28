<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Model\TechnoVector;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot("offer")
 */
class Offer
{
    /**
     * @JMS\SerializedName("url")
     * @JMS\Type("string")
     *
     * @var string|null
     */
    private $supplierOfferUrl;

    /**
     * @JMS\SerializedName("price")
     * @JMS\Type("float")
     *
     * @var float
     */
    private $price;

    /**
     * @JMS\SerializedName("currencyId")
     * @JMS\Type("string")
     *
     * @var string
     */
    private $currencyId;

    /**
     * @JMS\SerializedName("categoryId")
     * @JMS\Type("string")
     *
     * @var string
     */
    private $categoryId;

    /**
     * @JMS\SerializedName("picture")
     * @JMS\Type("string")
     *
     * @var string
     */
    private $picture;

    /**
     * @JMS\SerializedName("vendor")
     * @JMS\Type("string")
     *
     * @var string
     */
    private $vendor;

    /**
     * @JMS\SerializedName("model")
     * @JMS\Type("string")
     *
     * @var string
     */
    private $name;

    /**
     * @JMS\SerializedName("vendorCode")
     * @JMS\Type("string")
     *
     * @var string|null
     */
    private $vendorCode;

    /**
     * @JMS\SerializedName("description")
     * @JMS\Type("string")
     *
     * @var string|null
     */
    private $description;

    /**
     * @JMS\SerializedName("barcode")
     * @JMS\Type("string")
     *
     * @var string
     */
    private $barcode;

    public function supplierOfferUrl(): ?string
    {
        return $this->supplierOfferUrl;
    }

    public function price(): float
    {
        return $this->price;
    }

    public function currencyId(): string
    {
        return $this->currencyId;
    }

    public function categoryId(): string
    {
        return $this->categoryId;
    }

    public function picture(): string
    {
        return $this->picture;
    }

    public function vendor(): string
    {
        return $this->vendor;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function vendorCode(): ?string
    {
        return $this->vendorCode;
    }

    public function description(): ?string
    {
        return $this->description;
    }

    public function barcode(): string
    {
        return $this->barcode;
    }
}
