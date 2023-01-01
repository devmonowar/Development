<?php

/**
 * WHMCS Sample Local API Call
 *
 * @package    WHMCS
 * @author     WHMCS Limited <development@whmcs.com>
 * @copyright  Copyright (c) WHMCS Limited 2005-2016
 * @license    http://www.whmcs.com/license/ WHMCS Eula
 * @version    $Id$
 * @link       http://www.whmcs.com/
 */

require_once 'init.php';

// Define parameters
$command = 'SendEmail';
$values = array(
    'messagename' => 'Test Template',
    'id' => '1',
);
$adminuser = 'nutmember018';

// Call the localAPI function
$results = localAPI($command, $values, $adminuser);
if ($results['result'] == 'success') {
    echo 'Message sent successfully!';
} else {
    echo "An Error Occurred: " . $results['message'];
}