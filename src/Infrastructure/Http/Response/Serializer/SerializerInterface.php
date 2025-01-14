<?php

declare(strict_types=1);

namespace Whirlwind\Infrastructure\Http\Response\Serializer;

interface SerializerInterface
{
    public function serialize($data);
}
