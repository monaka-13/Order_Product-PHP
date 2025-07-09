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

    // Email Adress
    if (empty($_POST["email"])) {
      array_push($error_notifications, "Email Address is required.");
      error_log("Email Address is required.");
    } else if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
      array_push($error_notifications, "Input correct Email Address.");
      error_log("Input correct Email Address.");
    } else {
      $values["email"] = $_POST["email"];
    }

    // Phone
    $options = ["options" =>
    ["regexp" => "/^\(?\d{3}\)?[\s.]?\d{3}[\s.]?\d{4}$/"]];
    if (empty($_POST["phoneNumber"])) {
      array_push($error_notifications, "Phone is required.");
      error_log("Phone is required.");
    } else if (!filter_input(INPUT_POST, "phoneNumber", FILTER_VALIDATE_REGEXP, $options)) {
      array_push($error_notifications, "Input correct Phone.");
      error_log("Input correct Phone.");
    } else {
      $values["phoneNumber"] = $_POST["phoneNumber"];
    }

    // Product Amount
    if (empty($_POST["productAmount"])) {
      array_push($error_notifications, "Product Amount is required.");
      error_log("Product Amount is required.");
    } else if (!filter_input(INPUT_POST, "productAmount", FILTER_VALIDATE_INT, ["options" => ["min_range" => 1, "max_range" => 6]])) {
      array_push($error_notifications, "Product Amount is limited between 1 and 6");
      error_log("Product Amount is limited between 1 and 6");
    } else {
      $values["productAmount"] = $_POST["productAmount"];
    }



    self::$valid_status["values"] = $values;
    self::$valid_status["error_notifications"] = $error_notifications;
    print_r(self::$valid_status);
    return count($error_notifications) == 0;
  }
}
