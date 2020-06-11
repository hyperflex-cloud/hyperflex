<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace Hyperf\Devtool;

use Hyperf\Devtool\Describe;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'commands' => [
                Describe\AspectsCommand::class,
                Describe\RoutesCommand::class,
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for devtool.',
                    'source' => __DIR__ . '/../publish/devtool.php',
                    'destination' => BASE_PATH . '/config/autoload/devtool.php',
                ],
            ],
        ];
    }
}
