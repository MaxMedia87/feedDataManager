<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\FeedDataHandler;

use Sakharov\SupplierDataManager\Model\TechnoVector\Categories;
use Sakharov\SupplierDataManager\Model\TechnoVector\Offers;
use Sakharov\SupplierDataManager\Response\CategoriesResponse\CategoriesResponse;
use Sakharov\SupplierDataManager\Response\CategoriesResponse\CategoryResponse;
use Sakharov\SupplierDataManager\Response\CategoriesResponse\CategoryResponseInterface;
use Sakharov\SupplierDataManager\Response\OffersResponse\OfferResponse;
use Sakharov\SupplierDataManager\Response\OffersResponse\OfferResponseInterface;
use Sakharov\SupplierDataManager\Response\OffersResponse\OffersResponse;

class TechnoVectorFeedDataHandler extends BaseFeedDataHandler implements FeedDataHandlerInterface
{
    /**
     * @return CategoryResponseInterface[]|null
     */
    public function categories(): ?array
    {
        $xml = $this->parse('categories');

        if (null !== $xml) {
            /** @var Categories $categoriesFromFeed */
            $categoriesFromFeed = $this->serializer()->deserialize($xml, Categories::class, 'xml');

            $categoriesResponse = new CategoriesResponse();

            foreach ($categoriesFromFeed->getCategories() as $category) {
                $categoryResponse = new CategoryResponse();
                $categoryResponse
                    ->setId($category->id())
                    ->setName($category->title())
                    ->setParentId($category->parentId());

                $categoriesResponse->addCategory($categoryResponse);
            }

            return $categoriesResponse->categories();
        }

        return null;
    }

    /**
     * @return OfferResponseInterface[]|null
     */
    public function offers(): ?array
    {
        $xml = $this->parse('offers');

        if (null !== $xml) {
            /** @var Offers $offersFromFeed */
            $offersFromFeed = $this->serializer()->deserialize($xml, Offers::class, 'xml');

            $offersResponse = new OffersResponse();

            foreach ($offersFromFeed->offers() as $offer) {
                $offerResponse = new OfferResponse();
                $offerResponse
                    ->setName($offer->name())
                    ->setCategoryId($offer->categoryId())
                    ->setCurrencyId($offer->currencyId())
                    ->setModel($offer->vendorCode())
                    ->setVendor($offer->vendor())
                    ->setDescription($offer->description())
                    ->setImage($offer->picture())
                    ->setPrice($offer->price());

                $offersResponse->addOffer($offerResponse);
            }

            return $offersResponse->offers();

        }

        return null;
    }
}
