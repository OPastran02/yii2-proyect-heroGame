<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
    ],
    'container' => [
        'definitions' => [
            \api\Core\AvailableHeroes\Domain\Repository\AvailableHeroesRepositoryInterface::class =>
                \api\Core\AvailableHeroes\Infrastructure\Persistence\AvailableHeroRepositoryActiveRecord::class,
        ],
    ],
];
