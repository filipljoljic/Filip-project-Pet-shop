 <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/BaseDao.class.php";

class OwnerDao extends BaseDao{
  public function __construct(){
    parent::__construct("owner");
  }

  public function get_owner_by_email($email){
  return $this->query_unique("SELECT * FROM owner WHERE email= :email",["email"=>$email]);
}


public function update_owner_by_email($email, $owner){
  $this->update("owner", $email, $owner, "email");
}

}


 ?>
