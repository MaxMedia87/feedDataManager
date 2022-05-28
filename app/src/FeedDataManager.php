<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager;

use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use Sakharov\SupplierDataManager\FeedDataHandler\BaseFeedDataHandler;
use Sakharov\SupplierDataManager\FeedDataHandler\FeedDataHandlerInterface;

class FeedDataManager
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var string
     */
    private $feedData;

    /**
     * @var string
     */
    private $supplyCode;

    public function __construct(string $feedData, string $supplyCode)
    {
        $this->serializer = SerializerBuilder::create()->build();
        $this->setFeedData($feedData);
        $this->setSupplyCode($supplyCode);
    }

    /**
     * @return string
     */
    public function feedData(): string
    {
        return $this->feedData;
    }

    /**
     * @param string $feedData
     */
    private function setFeedData(string $feedData): void
    {
        $this->feedData = $feedData;
    }

    /**
     * @return string
     */
    public function supplyCode(): string
    {
        return $this->supplyCode;
    }

    /**
     * @param string $supplyCode
     */
    private function setSupplyCode(string $supplyCode): void
    {
        $this->supplyCode = $supplyCode;
    }

    /**
     * @param string $supplyCode
     * @return FeedDataHandlerInterface
     * @throws \Exception
     */
    private function getHandlerBySupplyCode(string $supplyCode): FeedDataHandlerInterface
    {
        $class = new \ReflectionClass(BaseFeedDataHandler::class);
        $namespace = $class->getNamespaceName();

        $handlerClass = $namespace . '\\' . ucfirst($supplyCode) . 'FeedDataHandler';

        if (false === class_exists($handlerClass)) {
            throw new \Exception('Класс обработчика не существует.');
        }

        return new $handlerClass($this->serializer, $this->feedData());
    }

    /**
     * @return FeedDataHandlerInterface
     * @throws \Exception
     */
    public function load(): FeedDataHandlerInterface
    {
        return $this->getHandlerBySupplyCode($this->supplyCode());
    }
}
