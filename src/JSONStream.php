<?php

namespace pavlomr\Wrapper;

use GuzzleHttp\Psr7\BufferStream;
use Psr\Http\Message\ResponseInterface;

class JSONStream extends Stream
{

    /**
     * @param scalar|array|object|\JsonSerializable
     *
     * @throws \JsonException
     */
    public function __construct($buffer)
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
