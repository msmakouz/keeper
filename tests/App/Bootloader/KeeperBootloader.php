<?php

declare(strict_types=1);

namespace Spiral\Tests\Keeper\App\Bootloader;

use Spiral\Keeper\Bootloader;
use Spiral\Keeper\Bootloader\GuestBootloader;

class KeeperBootloader extends Bootloader\KeeperBootloader
{
    protected const LOAD = [
        Bootloader\SitemapBootloader::class,
        Bootloader\AnnotatedBootloader::class,
        GuestBootloader::class,
    ];
}
