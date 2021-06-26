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
namespace Hyperf\ConfigCenter;

use Hyperf\ConfigCenter\Contract\DriverInterface;
use Hyperf\Contract\ConfigInterface;

class DriverFactory
{
    /**
     * @var ConfigInterface
     */
    protected $config;

    /**
     * @var DriverInterface[]
     */
    protected $drivers = [];

    public function __construct(ConfigInterface $config)
    {
        $this->config = $config;
    }

    public function get(string $driver): DriverInterface
    {
        if ($instance = $this->drivers[$driver] ?? null) {
            return $instance;
        }

        $defaultDriver = $this->config->get('config_center.driver', '');
        $config = $this->config->get('config_center.drivers.' . $driver, []);
        $class = $config['driver'] ?? $defaultDriver;
        return $this->drivers[$driver] = make($class, $config);
    }
}
