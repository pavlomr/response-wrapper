<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseInterface;

class AsIs implements ResponseWrapperInterface
{

    public function __construct(private readonly ResponseInterface $buffer)
    {
    }

    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $this->buffer;
    }
}
