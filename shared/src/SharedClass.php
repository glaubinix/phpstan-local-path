<?php declare(strict_types=1);

namespace LocalPath\Shared;

class SharedClass
{
    public function doSomething(string $parameter): bool
    {
        return $parameter > 1;
    }
}
