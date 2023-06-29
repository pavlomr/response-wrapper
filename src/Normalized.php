<?php

namespace pavlomr\Wrapper;

use pavlomr\Normalizer\NormalizerInterface;

class Normalized extends JSONStream
{
    public function __construct($buffer, private readonly NormalizerInterface $normalizer)
    {
        parent::__construct($this->normalizer->normalize($buffer));
    }
}