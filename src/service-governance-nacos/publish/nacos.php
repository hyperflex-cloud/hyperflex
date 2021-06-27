<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    // nacos server url like https://nacos.hyperf.io, Priority is higher than host:port
    // 'url' => '',
    // The nacos host info
    'host' => '127.0.0.1',
    'port' => 8848,
    // The nacos account info
    'username' => null,
    'password' => null,
    'guzzle' => [
        'config' => [],
    ],
    // The service info.
    'service' => [
        'enable' => true,
        'service_name' => 'hyperf',
        'group_name' => 'api',
        'namespace_id' => 'namespace_id',
        'protect_threshold' => 0.5,
        'metadata' => null,
        'selector' => null,
        'instance' => [
            'cluster' => null,
            'weight' => null,
            'metadata' => null,
            'ephemeral' => null,
            'heartbeat' => 5,
            'auto_removed' => false,
        ],
    ],
];
