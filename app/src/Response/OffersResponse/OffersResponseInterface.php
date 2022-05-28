<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Response\OffersResponse;

interface OffersResponseInterface
{
    /**
     * @return OfferResponseInterface[]|null
     */
    public function offers(): ?array;
}
