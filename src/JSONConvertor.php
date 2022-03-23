<?php

namespace pavlomr\DTO;

class JSONConvertor
{
    public const CONTENT_TYPE = 'application/json';

    /**
     * @throws \JsonException
     */
    public function __invoke($data): string
    {
        return json_encode($data, JSON_THROW_ON_ERROR);
    }
}