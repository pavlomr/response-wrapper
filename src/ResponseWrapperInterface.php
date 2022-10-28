<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseInterface;

interface ResponseWrapperInterface
{
    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function wrap(ResponseInterface $response): ResponseInterface;
}
