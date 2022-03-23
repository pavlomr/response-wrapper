<?php

namespace pavlomr\DTO;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use Psr\Http\Message\StreamInterface;

class JSONWrapper implements StreamInterface
{
    use StreamDecoratorTrait;

    public function writeDto($DTO):int
    {
        return$this->write(json_encode($DTO, JSON_THROW_ON_ERROR));
    }

    public function getContentType(): string
    {
        return 'application/json';
    }
}