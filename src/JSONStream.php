<?php

namespace pavlomr\Wrapper;

use JsonSerializable;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use stdClass;

readonly class JSONStream extends Stream
{
    /**
     * @throws \JsonException
     */
    public function __construct(float|array|bool|int|string|stdClass|JsonSerializable|null $buffer, StreamInterface $stream)
    {
        $stream->write(json_encode($buffer, JSON_THROW_ON_ERROR));
        parent::__construct($stream);
    }

    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return parent
            ::wrap($response)
            ->withHeader('Content-Type', 'application/json')
        ;
    }
}
