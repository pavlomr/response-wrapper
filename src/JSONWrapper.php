<?php

namespace pavlomr\DTO;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use Psr\Http\Message\StreamInterface;

class JSONWrapper implements StreamInterface
{
    use StreamDecoratorTrait;

    /**
     * @throws \JsonException
     */
    public static function wrap(StreamInterface $stream, $data): self
    {
        $self = new static($stream);
        $self->write(json_encode($data, JSON_THROW_ON_ERROR));

        return $self;
    }

    public static function getContentType(): string
    {
        return 'application/json';
    }
}