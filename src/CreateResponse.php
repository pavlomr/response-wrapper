<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

class CreateResponse implements ResponseWrapperInterface
{

    public function __construct(private readonly ResponseFactoryInterface $buffer)
    {
    }

    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $this->buffer->createResponse();
    }
}