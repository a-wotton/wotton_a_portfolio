<?php
$dsn = "mysql:host=xhrnyo07_portfolio;charset=utf8mb4";
try {
$connection = new PDO($dsn, 'xhrnyo07_a_wotton', '86[iGWEhX%bW');
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('unable to connect');
}
?>