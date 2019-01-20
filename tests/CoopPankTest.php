<?php

namespace RKD\BanklinkTests;

/**
 * Test suite for Coop Pank banklink.
 *
 * @author  Rene Korss <rene.korss@gmail.com>
 */
class CoopPankTest extends SEBTest
{
    protected $bankClass = "RKD\Banklink\EE\CoopPank";

    protected $requestUrl = [
        'payment' => 'https://i.cooppank.ee/pay',
        'auth' => 'https://i.cooppank.ee/auth'
    ];
    protected $testRequestUrl = [
        'payment' => 'https://i.cooppank.ee/pay',
        'auth' => 'https://i.cooppank.ee/auth'
    ];
}
