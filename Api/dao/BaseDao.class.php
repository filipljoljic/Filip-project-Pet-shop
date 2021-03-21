<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once dirname(__FILE__)."/../config.php";

class BaseDao {
protected $connection;

public function __construct(){
try {
  $this->connection = new PDO("mysql:host=".Config::DB_HOST.";dbname=".Config::DB_SCHEME, Config::DB_USERNAME, Config::DB_PASSWORD);
  $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  throw $e;

}
}
public function insert(){

}
public function update(){

}

public function query($query, $params){
  $stmt = $this->connection->prepare($query);
  $stmt->execute($params);
  return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

public function query_unique($query, $params){
$result = $this->query($query, $params);
return reset($result);
}

}

 ?>
