<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/dao/OwnerDao.class.php";
$owner_dao = new OwnerDao();
//$owner = $owner_dao->get_owner_by_email("filipljoljic2000@gmail.com");

$owner1 =[

"Address"=>"paromlin 45"


];


$owner = $owner_dao->update_owner_by_email("Adi.pacotti@stu.ibu.edu.ba", $owner1);

print_r($owner);


 ?>
