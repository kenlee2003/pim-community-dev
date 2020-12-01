<?php
declare(strict_types=1);

namespace Akeneo\Connectivity\Connection\Application\Webhook\Service;


interface CacheClearerInterface
{
    public function clear(): void;
}
