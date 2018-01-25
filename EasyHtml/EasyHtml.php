<?php

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

use WHMCS\Module\Addon\EasyHtml\Admin\AdminDispatcher;
use WHMCS\Module\Addon\EasyHtml\Client\ClientDispatcher;

function EasyHtml_config()
{
    return array(
        'name' => 'EasyHtml', // Display name for your module
        'description' => 'This module provides you to add Html to a WHMCS websites client pages easily', // Description displayed within the admin interface
        'author' => 'CMBAPPS', // Module author name
        'language' => 'english', // Default language
        'version' => '1.3.7', // Version number
        'fields' => array(
            // a text field type allows for single line text input
            'EasyHtmlscript' => array(
                'FriendlyName' => 'Your clientarea footer',
                'Type' => 'textarea',
                'Rows' => '10',
                'Cols' => '100',
                'Default' => '',
                'Description' => 'The Html code you want to use for clientarea footer.',
            ),
            'HeadHtmlscript' => array(
                'FriendlyName' => 'Your clientarea head',
                'Type' => 'textarea',
                'Rows' => '10',
                'Cols' => '100',
                'Default' => '',
                'Description' => 'The Html code you want to use for clientarea head.',
            ),
            'HeaderHtmlscript' => array(
                'FriendlyName' => 'Your clientarea header',
                'Type' => 'textarea',
                'Rows' => '10',
                'Cols' => '100',
                'Default' => '',
                'Description' => 'The Html code you want to use for clientarea header.',
            ),
            'ProductDetailsHtml' => array(
                'FriendlyName' => 'Your clientarea ProductDetails',
                'Type' => 'textarea',
                'Rows' => '10',
                'Cols' => '100',
                'Default' => '',
                'Description' => 'The Html code you want to use for product details.',
            ),
            // the textarea field type allows for multi-line text input
            'Text' => array(
                'FriendlyName' => 'Allowed Scripts',
                'Description' => 'Works with HTML, CSS and JS codes.',
            ),
            // the textarea field type allows for multi-line text input
            'Text1' => array(
                'FriendlyName' => 'Text',
                'Description' => 'Designed for YVSSE HOSTING.',
            ),
        )
    );
	return $configarray;
}

