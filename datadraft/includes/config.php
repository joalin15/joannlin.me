<?php

$config = array(
    "urls" => array(
        "baseUrl" => "http://joannlin.me/datadraft"
    ),
    "paths" => array(
        "images" => "./img",
        "css" => "./css"
    )
);

switch ($_SERVER["SCRIPT_NAME"]) {
		case "/datadraft/team.php":
    $CURRENT_PAGE = "Team";
    $PAGE_TITLE = "Who We Are";
			break;
		case "/datadraft/contact.php":
			$CURRENT_PAGE = "Contact";
			$PAGE_TITLE = "Contact Us";
			break;
		default:
			$CURRENT_PAGE = "Home";
			$PAGE_TITLE = "Data Draft";
};

defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);

?>
