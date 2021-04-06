 <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/BaseDao.class.php";

class OwnerDao extends BaseDao{

  public function get_owner_by_email($email){
  return $this->query_unique("SELECT * FROM owner WHERE email= :email",["email"=>$email]);
}

  public function get_owner_by_id($id){
  return $this->query_unique("SELECT * FROM owner WHERE id=:id",["id"=>@id]);
}

  public function add_owner($owner){
return $this->insert("owner", $owner);
}

public function update_owner($id, $owner){
  $this->update("owner", $id, $owner);
}

public function update_owner_by_email($email, $owner){
  $this->update("owner", $email, $owner, "email");
}

}


 ?>
