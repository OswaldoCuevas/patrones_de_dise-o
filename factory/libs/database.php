<?php
ini_set('max_execution_time', 0); 
ini_set('memory_limit', '-1');
include_once 'config.php';

class Database extends mysqli
{
 
 public function __construct()
 {
  try{
   parent::__construct(DB_HOST, DB_USER, DB_PASS,DB_NAME,DB_PORT);
   $this -> set_charset("utf8");
  } catch(Exception $e){
   echo "Falla en la conexión";
  }
 }

 public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
 {
  try{
   $result =  $this -> execute_query($sql, $array);
   return $result -> fetch_all(MYSQLI_ASSOC);
  }catch(Exception $e){
   return $e;
  }
 }
 public function insert($table, $data)
 {
  
   ksort($data);
   $fieldNames = implode(', ', array_keys($data));
   $fieldValues = join(',',array_fill(0, count($data), '?'));
   $query = "INSERT INTO $table ($fieldNames) VALUES ($fieldValues)";
   $valores = array_values($data);
   $this->execute_query($query,$valores);
   return $this -> insert_id;
 }
public function update($table, $data, $where)
 {
  
  ksort($data);

  $encabezadosArray = array();
  $valores = array_values($data);
  foreach($data as $key=> $value) {
   $encabezadosArray[] = "$key= ?";
  }
  
  $encabezados = join(',',$encabezadosArray);
  $query = "UPDATE $table SET $encabezados WHERE $where";

  return $this -> execute_query($query,$valores);
  
 }
 
 public function delete($table, $where, $limit = 1)
 {
  return $this->execute_query("DELETE FROM $table WHERE $where LIMIT $limit");
 }

 public function deleteAll($table, $where){
  return $this->execute_query("DELETE FROM $table WHERE $where");
 }
}