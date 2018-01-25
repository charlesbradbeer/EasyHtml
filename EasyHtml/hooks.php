<?php
use Illuminate\Database\Capsule\Manager as Capsule;
function EasyHtml_check($vars)
{

	$uid = $_SESSION['uid'];

	//get the code
    $widgetScript =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'EasyHtml')->WHERE('setting' , '=', 'EasyHtmlscript')->pluck('value');
    if (is_array($widgetScript)) {
        $widgetScript = current($widgetScript);
    }
    if ($widgetScript) {
        // $widgetScript = addslashes($widgetScript); // this breaks the widget script when displayed on client side
        // $widgetScript = FooterHtmlentities($widgetScript); // this displays the script as FooterHtml text and prevents proper rendering of the script
        $widgetScript = trim($widgetScript);
    } else {
        return;
	}

	//get the key
    $EasyHtmlreturn = "$widgetScript";
    return($EasyHtmlreturn);
}
function HeadHtml_check($vars)
{

	$uid = $_SESSION['uid'];

	//get the code
    $widgetScript =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'EasyHtml')->WHERE('setting' , '=', 'HeadHtmlscript')->pluck('value');
    if (is_array($widgetScript)) {
        $widgetScript = current($widgetScript);
    }
    if ($widgetScript) {
        // $widgetScript = addslashes($widgetScript); // this breaks the widget script when displayed on client side
        // $widgetScript = FooterHtmlentities($widgetScript); // this displays the script as FooterHtml text and prevents proper rendering of the script
        $widgetScript = trim($widgetScript);
    } else {
        return;
	}

	//get the key
    $EasyHtmlreturn = "$widgetScript";
    return($EasyHtmlreturn);
}
function HeaderHtml_check($vars)
{

	$uid = $_SESSION['uid'];

	//get the code
    $widgetScript =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'EasyHtml')->WHERE('setting' , '=', 'HeaderHtmlscript')->pluck('value');
    if (is_array($widgetScript)) {
        $widgetScript = current($widgetScript);
    }
    if ($widgetScript) {
        // $widgetScript = addslashes($widgetScript); // this breaks the widget script when displayed on client side
        // $widgetScript = FooterHtmlentities($widgetScript); // this displays the script as FooterHtml text and prevents proper rendering of the script
        $widgetScript = trim($widgetScript);
    } else {
        return;
	}

	//get the key
    $EasyHtmlreturn = "$widgetScript";
    return($EasyHtmlreturn);
}
function ProductDetailsHtml_check($vars)
{

	$uid = $_SESSION['uid'];

	//get the code
    $widgetScript =  Capsule::table('tbladdonmodules')->select('value')-> WHERE('module', '=' , 'EasyHtml')->WHERE('setting' , '=', 'ProductDetailsHtmlscript')->pluck('value');
    if (is_array($widgetScript)) {
        $widgetScript = current($widgetScript);
    }
    if ($widgetScript) {
        // $widgetScript = addslashes($widgetScript); // this breaks the widget script when displayed on client side
        // $widgetScript = FooterHtmlentities($widgetScript); // this displays the script as FooterHtml text and prevents proper rendering of the script
        $widgetScript = trim($widgetScript);
    } else {
        return;
	}

	//get the key
    $EasyHtmlreturn = "$widgetScript";
    return($EasyHtmlreturn);
}
add_hook("ClientAreaFooterOutput",1,"EasyHtml_check");
add_hook("ClientAreaHeadOutput",1,"HeadHtml_check");
add_hook("ClientAreaHeaderOutput",1,"HeaderHtml_check");
add_hook("ClientAreaProductDetailsOutput",1,"ProductDetailsHtml_check");