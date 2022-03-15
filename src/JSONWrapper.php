<?php

namespace pavlomr\DTO;

use GuzzleHttp\Psr7\StreamDecoratorTrait;
use Psr\Http\Message\StreamInterface;

class JSONWrapper implements StreamInterface
{
    use StreamDecoratorTrait;

    /**
     * @param \Psr\Http\Message\StreamInterface $stream
     * @param \pavlomr\DTO\DTOInterface         $DTO
     *
     * @throws \JsonException
     */
    public function __construct(StreamInterface $stream, DTOInterface $DTO)
    {
        $this->stream = $stream;
        $this->write(json_encode($DTO->asDto(), JSON_THROW_ON_ERROR));
    }

    public function contentType(): string
    {
        return 'application/json';
    }
}