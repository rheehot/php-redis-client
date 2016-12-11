<?php
/**
 * This file is part of RedisClient.
 * git: https://github.com/cheprasov/php-redis-client
 *
 * (C) Alexander Cheprasov <cheprasov.84@ya.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Test\Integration\Version3x2;

include_once(__DIR__. '/../Version3x0/ClusterCommandsTest.php');

use RedisClient\Client\Version\RedisClient3x2;
use Test\Integration\Version3x0\ClusterCommandsTest as ClusterCommandsTest3x0;

class ClusterCommandsTest extends ClusterCommandsTest3x0 {

    const TEST_REDIS_SERVER_1 = TEST_REDIS_SERVER_3x2_1;

    /**
     * @inheritdoc
     */
    public static function setUpBeforeClass() {
        static::$Redis = new RedisClient3x2([
            'server' =>  static::TEST_REDIS_SERVER_1,
            'timeout' => 2,
        ]);
    }

    public function testOne() {
        $Redis = new RedisClient3x2([
            'server' =>  TEST_REDIS_SERVER_3x2_CLUSTER_A,
            'timeout' => 2,
        ]);

        $this->markTestSkipped();
        $this->assertSame(true, $Redis->set('foo', 'bar'));
    }
}
