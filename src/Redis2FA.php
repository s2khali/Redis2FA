<?php
/**
 * @author Ben Schnell <bwschnell52@gmail.com>
 */
namespace Redis2FA;

use Redis2FA\Redis2FAInterface;

class Redis2FA implements Redis2FAInterface  {

    const VERSION = '0.0.1';
    const CHAR_LENGTH = 16;
    const DEFAULT_PORT = 6379;

    private $host;
    private $port;
    protected $redis;

    public function __construct($host = null, $port = DEFAULT_PORT) {

    }

    public function getCode() {
        // TODO: Implement getCode() method.
    }

    public function setCode() {
        // TODO: Implement setCode() method.
    }
}
