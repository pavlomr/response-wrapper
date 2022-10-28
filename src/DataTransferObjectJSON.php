<?php

namespace pavlomr\Wrapper;

use GuzzleHttp\Psr7\BufferStream;
use pavlomr\DataTransfer\DataTransferObjectInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

/**
 * @deprecated @see \pavlomr\Wrapper\JSONStream
 */
class DataTransferObjectJSON extends Stream
{

    /**
     * @throws \JsonException
     */
    public function __construct(DataTransferObjectInterface $buffer)
    {
        $stream = new BufferStream();
        $stream->write(json_encode($buffer->asObject(), JSON_THROW_ON_ERROR));
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
