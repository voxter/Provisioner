<?php

/**
 * Grandstream Phone File
 *
 * @author Andrew Nagy
 * @author Jimmy Godbout
 * @license MPL / GPLv2 / LGPL
 * @package Provisioner
 */
class endpoint_grandstream_ht_phone extends endpoint_grandstream_base {
    function prepareConfig($settings, $config_manager) {
        parent::prepareConfig($settings, $config_manager);

        return $settings;
    }
}
