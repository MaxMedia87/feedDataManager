<?php

declare(strict_types=1);

namespace Sakharov\SupplierDataManager\FeedDataHandler;

use JMS\Serializer\Exception\XmlErrorException;
use JMS\Serializer\SerializerInterface;
use XMLReader;

abstract class BaseFeedDataHandler
{
    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var  XMLReader
     */
    private $reader;

    /**
     * @var string
     */
    private $filePath;

    public function __construct(
        SerializerInterface $serializer,
        string $filePath
    ) {
        $this->setSerializer($serializer);
        $this->setFilePath($filePath);
    }

    protected function filePath(): string
    {
        return $this->filePath;
    }

    private function setFilePath(string $filePath): void
    {
        $this->filePath = $filePath;
    }

    protected function reader(): XMLReader
    {
        if (false === isset($this->reader)) {
            $this->reader = new XMLReader();
        }

        return $this->reader;
    }

    protected function serializer(): SerializerInterface
    {
        return $this->serializer;
    }

    private function setSerializer(SerializerInterface $serializer): void
    {
        $this->serializer = $serializer;
    }

    protected function parse(string $nodeName): ?string
    {
        $reader = $this->reader();

        try {
            $reader->open($this->filePath());

            while ($reader->read()) {
                if ($reader->nodeType === XMLReader::ELEMENT) {
                    if ($reader->name === $nodeName) {
                        return $reader->readOuterXml();
                    }
                }
            }
        } catch (XmlErrorException $exception) {
            throw new $exception;
        }

        $reader->close();

        return null;
    }
}
