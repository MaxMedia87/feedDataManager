<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\Model\TechnoVector;

use JMS\Serializer\Annotation as JMS;

/**
 * @JMS\XmlRoot("offers")
 */
class Offers
{
    /**
     * @JMS\XmlList(inline=true, entry="offer")
     * @JMS\Type("array<Sakharov\SupplierDataManager\Model\TechnoVector\Offer>")
     * @var Offer[]
     */
    private $offers = [];

    /**
     * @return Offer[]
     */
    public function offers(): array
    {
        return $this->offers;
    }
}
