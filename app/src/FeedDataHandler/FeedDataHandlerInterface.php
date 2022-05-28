<?php

namespace Sakharov\SupplierDataManager\FeedDataHandler;

use Sakharov\SupplierDataManager\Response\CategoriesResponse\CategoriesResponseInterface;
use Sakharov\SupplierDataManager\Response\OffersResponse\OffersResponseInterface;

interface FeedDataHandlerInterface extends CategoriesResponseInterface, OffersResponseInterface
{
}
