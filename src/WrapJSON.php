<?php

namespace pavlomr\Wrapper;

use GuzzleHttp\Psr7\BufferStream;
use JsonSerializable;
use Psr\Http\Message\ResponseInterface;

class WrapJSON extends Stream
{

    /**
     * @throws \JsonException
     */
    public function __construct(JsonSerializable $buffer)
    {
        $stream = new BufferStream();
        $stream->write(json_encode($buffer, JSON_THROW_ON_ERROR));
        parent::__construct($stream);
    }

    /**
     * @inheritDoc
     */
    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return parent
            ::wrap($response)
            ->withHeader('content-type', 'application/json')
        ;
    }
}
