<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseInterface;

class AsIs implements ResponseWrapperInterface
{

    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private ResponseInterface $response;

    public function __construct(ResponseInterface $buffer)
    {
        $this->response = $buffer;
    }

    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $this->response;
    }
}