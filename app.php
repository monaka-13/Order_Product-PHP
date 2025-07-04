<?php
require_once("./inc/config.inc.php");
require_once("./inc/Page.class.php");
require_once("./inc/Validate.class.php");

Page::getHeader(TITLE, AUTHOR);
if (!isset($_POST["submit"])) {
  Page::showForm([]);
} else {
  if (Validate::validateForm()) {
    Page::showNotification(Validate::$valid_status); // thank you
    Page::showData(0);
  } else {
    Page::showNotification(Validate::$valid_status); // error
    Page::showForm(Validate::$valid_status);
  }
}
Page::getFooter();