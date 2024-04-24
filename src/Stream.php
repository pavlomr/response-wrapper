<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

readonly class Stream implements ResponseWrapperInterface
{
    public function __construct(private StreamInterface $buffer)
    {
    }

    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $response
            ->withBody($this->buffer)
        ;
    }
}
