<?php declare(strict_types=1);

namespace LocalPath\App1;

use LocalPath\Shared\SharedClass;

class Application1
{
    private SharedClass $sharedClass;

    public function __construct()
    {
        $this->sharedClass = new SharedClass();
    }

    public function run(): void
    {
        $this->sharedClass->doSomething(1);
    }
}
