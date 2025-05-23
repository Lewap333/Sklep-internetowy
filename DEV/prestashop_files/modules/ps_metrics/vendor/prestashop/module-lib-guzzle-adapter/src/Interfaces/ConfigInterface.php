<?php

namespace ps_metrics_module_v4_0_10\Prestashop\ModuleLibGuzzleAdapter\Interfaces;

interface ConfigInterface
{
    /**
     * When a client is created with the config of another version,
     * this method makes sure the keys match.
     *
     * @param array<string, mixed> $config
     *
     * @return array<string, mixed>
     */
    public static function fixConfig(array $config);
}
