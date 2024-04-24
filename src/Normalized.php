<?php

namespace pavlomr\Wrapper;

use pavlomr\Normalizer\NormalizerInterface;
use Psr\Http\Message\StreamInterface;

readonly class Normalized extends JSONStream
{
    public function __construct(mixed $buffer, StreamInterface $stream, NormalizerInterface $normalizer)
    {
        parent::__construct($normalizer->normalize($buffer), $stream);
    }
}
