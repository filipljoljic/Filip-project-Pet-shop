<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/OwnerDao.class.php";
require_once dirname(__FILE__)."/dao/AccountDao.class.php";

$dao = new AccountDao();

$dao->add([
  "name" => "Filip Ljoljic",
  "created_at" => date("2021-03-15 11:45:32")
]);

$accounts = $dao->get_all_accounts();

print_r($accounts);


 ?>
