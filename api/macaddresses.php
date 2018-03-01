<?php

/**
 * All methods in this class are protected
 * APIs for looking up MAC addresses
 *
 * @author Daniel Finke
 * @license MPL / GPLv2 / LGPL
 * @package Provisioner
 * @version 5.0
 */

class MACAddresses {
    public $db;
    private $_log;

    function __construct() {
        $this->_log = KLogger::instance('logs', Klogger::DEBUG);
        $this->db = new BigCouch(DB_SERVER, DB_PORT);
    }

    // Will return the formated account_id from the raw account_id
    private function _get_account_db($account_id) {
        // account/xx/xx/xxxxxxxxxxxxxxxx
        return "account/" . substr_replace(substr_replace($account_id, '/', 2, 0), '/', 5, 0);
    }

    function options() {
        return;
    }

    /**
     * Returns a 200 if a MAC address is already in use, or a 404 otherwise.
     *
     * @url GET /{mac_address}
     * @access protected
     * @class AccessControl {@requires user}
     */
    function inUse($mac_address) {
        $lookup = $this->db->get('mac_lookup', $mac_address);
        if(!$lookup) {
            throw new RestException(404);
        }

        $config = $this->db->get($this->_get_account_db($lookup['account_id']), $mac_address);
        if(!$config) {
            throw new RestException(404);
        }

        return [
            'account_id' => $lookup['account_id'],
            'device_id' => $config['settings']['id'],
            'device_name' => $config['settings']['name']
        ];
    }
}
?>
