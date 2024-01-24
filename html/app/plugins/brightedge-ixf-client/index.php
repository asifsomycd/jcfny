<?php
/**
 * Author URI:  https://brightedge.com
 * Author:      BrightEdge
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * License:     GNU General Public License v2
 * Plugin Name: BrightEdge IXF Client Interface
 * Plugin URI:  https://brightedge.com
 * Version:     1.5.12
 * Description: Custom integration with BrightEdge.
 */

//Your access to and use of BrightEdge Link Equity Manager is governed by the
//Infrastructure Product Terms located at: www.brightedge.com/infrastructure-product-terms.
//Customer acknowledges and agrees it has read, understands and agrees to be bound by the
//Infrastructure Product Terms.

//IXF: save the be_ixf_client.php file to your server, then use "require" to include it in your template.
require 'be_ixf_client.php';

use BrightEdge\BEIXFClient;

//IXF: the following array and constructor must be placed before any HTML is written to the page.
$be_ixf = new BEIXFClient([
    BEIXFClient::$CAPSULE_MODE_CONFIG => BEIXFClient::$REMOTE_PROD_CAPSULE_MODE,
    BEIXFClient::$ACCOUNT_ID_CONFIG => "f00000000154546",

    BEIXFClient::$API_ENDPOINT_CONFIG => "https://ixfd-api.bc0a.com",
    // BEIXFClient::$CANONICAL_HOST_CONFIG => "www.domain.com",
    BEIXFClient::$CANONICAL_PROTOCOL_CONFIG  => "https",

    // IXF: By default, all URL parameters are ignored. If you have URL parameters that add value to
    // page content.  Add them to this config value, separated by the pipe character (|).
    BEIXFClient::$WHITELIST_PARAMETER_LIST_CONFIG => "ixf",

]);
