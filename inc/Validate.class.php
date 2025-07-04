<?php


class Validate
{
  static $valid_status = [];
  static function validateForm()
  {
    $values = [];
    $error_notifications = [];
    if (empty($_POST["fullName"])) {
      array_push($error_notifications, "Name is required.");
      error_log("Name is required.");
    } else {
      $values["fullName"] = $_POST["fullName"];
    }

    self::$valid_status["values"] = $values;
    self::$valid_status["error_notifications"] = $error_notifications;
    print_r(self::$valid_status);
    return count($error_notifications) == 0;
  }
}
