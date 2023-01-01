<?php
/**
 * WHMCS Sample API Call
 *
 * @package    WHMCS
 * @author     WHMCS Limited <development@whmcs.com>
 * @copyright  Copyright (c) WHMCS Limited 2005-2021
 * @license    http://www.whmcs.com/eula/ WHMCS Eula
 * @link       http://www.whmcs.com/
 */

// API Connection Details
$whmcsUrl = "http://kobita.cf/path/to/whmcs/";
//https://www.yourdomain.com/path/to/whmcs/includes/api.php

// For WHMCS 7.2 and later, we recommend using an API Authentication Credential pair.
// Learn more at http://docs.whmcs.com/API_Authentication_Credentials
// Prior to WHMCS 7.2, an admin username and md5 hash of the admin password may be used
// with the 'username' and 'password' keys instead of 'identifier' and 'secret'.
$api_identifier = "rj3Ef4QfSm6ffq1NnOlgmjIUlqdZjNEs";
$api_secret = "uGxXpVD4iOM7x1LNW3YtNkE2bCWQFk4J";

$username = "nutmember018";
$password = "nutmember018";

// Set post values
$postfields = array(
    'identifier' => $api_identifier,
    'secret' => $api_secret,

    'action' => 'GetClients',
    'responsetype' => 'json',
);

// // Call the API
// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $whmcsUrl . 'includes/api.php');
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_TIMEOUT, 30);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
// $response = curl_exec($ch);
// if (curl_error($ch)) {
//     die('Unable to connect: ' . curl_errno($ch) . ' - ' . curl_error($ch));
// }
// curl_close($ch);

// // Decode response
// $jsonData = json_decode($response, true);

// // Dump array structure for inspection
// var_dump($jsonData);