<?php


class Validate
{
  static $valid_status = [];
  static function validateForm()
  {
    $values = [];
    $error_notifications = [];

    // fullName
    if (empty($_POST["fullName"])) {
      array_push($error_notifications, "Name is required.");
      error_log("Name is required.");
    } else {
      $values["fullName"] = $_POST["fullName"];
    }

    // E-mail
    if (empty($_POST["email"])) {
      array_push($error_notifications, "Email Address is required.");
      error_log("Email Address is required.");
    } else if(!filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL)){
      array_push($error_notifications, "Input correct Email Address.");
      error_log("Input correct Email Address.");
    } else {
      $values["email"] = $_POST["email"];
    }

    self::$valid_status["values"] = $values;
    self::$valid_status["error_notifications"] = $error_notifications;
    print_r(self::$valid_status);
    return count($error_notifications) == 0;
  }
}
