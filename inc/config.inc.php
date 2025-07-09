<?php
define("TITLE", "Order Product");
define("AUTHOR", "Kay Shigenaga");

date_default_timezone_set('America/Vancouver');
ini_set("log_errors", TRUE);
ini_set("error_log", "log/error_log.txt");

define("ITEM_COST",25);
define("DISCOUNT",0.15);
define("WRAP_COST",10);
define("TAX",0.12);

define("SHIPPING_PRICES", [
  "regular" => 6,
  "express" => 15,
  "priority" => 25
]);
