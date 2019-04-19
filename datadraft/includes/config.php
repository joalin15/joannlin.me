<?php

/*
    The important thing to realize is that the config file should be included in every
    page of your project, or at least any page you want access to these settings.
    This allows you to confidently use these settings throughout a project because
    if something changes such as your database credentials, or a path to a specific resource,
    you'll only need to update it here.
*/

$config = array(
    "urls" => array(
        "baseUrl" => "http://joannlin.me/datadraft"
    ),
    "paths" => array(
        "images" => "/img"
    )
);

switch ($_SERVER["SCRIPT_NAME"]) {
		case "/team.php":
    $CURRENT_PAGE = "Team";
    $PAGE_TITLE = "Who We Are";
			break;
		case "/contact.php":
			$CURRENT_PAGE = "Contact";
			$PAGE_TITLE = "Contact Us";
			break;
		default:
			$CURRENT_PAGE = "Home";
			$PAGE_TITLE = "Data Draft";
	}

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

/*
    Error reporting.
*/
ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>
