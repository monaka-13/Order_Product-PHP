<?php
require_once("./inc/config.inc.php");
require_once("./inc/Page.class.php");
require_once("./inc/Validate.class.php");

Page::getHeader(TITLE, AUTHOR);
if (!isset($_POST["submit"])) {
  Page::showForm([]);
} else {
  if (Validate::validateForm()) {
    Page::showNotification([]); // thank you
    Page::showData(Validate::$valid_status["values"]);
  } else {
    Page::showNotification(Validate::$valid_status["error_notifications"]); // error
    Page::showForm(Validate::$valid_status);
  }
}
Page::getFooter();