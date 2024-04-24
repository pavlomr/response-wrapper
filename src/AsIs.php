<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseInterface;

readonly class AsIs implements ResponseWrapperInterface
{
    public function __construct(private ResponseInterface $buffer)
    {
    }

    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $this->buffer;
    }
}
