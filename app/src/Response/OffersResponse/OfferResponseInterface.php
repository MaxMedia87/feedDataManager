<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Response\OffersResponse;

interface OfferResponseInterface
{
    public function categoryId();

    public function currencyId();

    public function name();

    public function description();

    public function model();

    public function vendor();

    public function quantity();

    public function price();

    public function oldPrice();

    public function image();

    public function images();
}
