<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class Stream implements ResponseWrapperInterface
{

    public function __construct(readonly private StreamInterface $buffer)
    {
    }

    /**
     * @inheritDoc
     */
    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $response
            ->withBody($this->buffer)
        ;
    }
}
