<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;

class Stream implements ResponseWrapperInterface
{

    /**
     * @var \Psr\Http\Message\StreamInterface
     */
    private StreamInterface $body;

    public function __construct(StreamInterface $buffer)
    {
        $this->body = $buffer;
    }

    /**
     * @inheritDoc
     */
    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $response
            ->withBody($this->body)
        ;
    }
}
