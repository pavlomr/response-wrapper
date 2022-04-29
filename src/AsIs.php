<?php

namespace pavlomr\Wrapper;

use Psr\Http\Message\ResponseInterface;

class AsIs implements ResponseWrapperInterface
{

    public function wrap(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}