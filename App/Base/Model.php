<?php
namespace App\Base;

class Model
{
 public function __construct()
 {
    $this->connect();
 }

 
 public function connect(): \PDO
 {
    try {
     
   
    return new \PDO('mysql:host=localhost;dbname=phpmvc', 'root', '');
    
   } catch (\Throwable $th) {
     throw $th;
 }
}
public function execute(string $sqlQuery):\PDOStatement|false
{
    $stmt = $this->connect()->query($sqlQuery);
    $stmt->execute();
    return $stmt;
}
 public function fetchALL(string $sqlQuery):array|false
 {
    $stmt= $this->execute($sqlQuery);
    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
 }

 public function fetchObj(string $sqlQuery): mixed
 {
    $stmt= $this->execute($sqlQuery);
    return $stmt->fetch(\PDO::FETCH_ASSOC);
 }


}