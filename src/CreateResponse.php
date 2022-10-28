<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;

class CreateResponse implements ResponseWrapperInterface
{
    private ResponseFactoryInterface $factory;

    public function __construct(ResponseFactoryInterface $buffer)
    {
        $this->factory = $buffer;
    }

    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $this->factory->createResponse();
    }
}