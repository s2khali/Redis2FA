<?php
/**
 * @author Ben Schnell <bwschnell52@gmail.com>
 */
namespace Redis2FA;


interface Redis2FAInterface {

    public function getCode();
    public function setCode();

}
