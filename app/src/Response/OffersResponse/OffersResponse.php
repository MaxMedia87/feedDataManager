<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Response\OffersResponse;

class OffersResponse implements OffersResponseInterface
{
    /**
     * @var OfferResponseInterface[]|null
     */
    private $offers;

    /**
     * @return OffersResponseInterface[]|null
     */
    public function offers(): ?array
    {
        return $this->offers;
    }

    /**
     * @param OfferResponseInterface[]|null $offers
     */
    public function setOffers(?array $offers): void
    {
        $this->offers = $offers;
    }

    /**
     * @param OfferResponseInterface $offerResponse
     */
    public function addOffer(OfferResponseInterface $offerResponse)
    {
        $this->offers[] = $offerResponse;
    }
}
