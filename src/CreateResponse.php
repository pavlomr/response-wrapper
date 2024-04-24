<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

readonly class CreateResponse implements ResponseWrapperInterface
{
    public function __construct(private ResponseFactoryInterface $buffer)
    {
    }

    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $this->buffer->createResponse();
    }
}
