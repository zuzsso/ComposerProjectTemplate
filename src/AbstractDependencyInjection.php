<?php

declare(strict_types=1);

namespace YourProject;

abstract class AbstractDependencyInjection
{
    abstract public static function getDependencies(): array;
}
