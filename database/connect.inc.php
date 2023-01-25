<?php
$db_username = 'root';
$db_password = '';
$connect     = new PDO('mysql:host=localhost;dbname=woofer_db', $db_username, $db_password);
if (!$connect) {
  die("Fatal Error: Connection Failed!");
}
function get_all_rows(PDOStatement $statement)
{
  $data = array();
  while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    array_push($data, $row);
  }
  return $data;
}

function login(string $username, string $password)
{
  global $connect;
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    $sql = $connect->prepare("SELECT * FROM `user_table` WHERE `username` = :user AND `password` = :pass ");
    $sql->bindParam(':user', $username);
    $sql->bindParam(':pass', $password);
    $sql->execute();

    while ($fetch = $sql->fetch(PDO::FETCH_ASSOC)) {
      return $fetch;
    }
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function register(string $name, string $username, string $password)
{
  global $connect;
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    $sql = $connect->prepare("INSERT INTO `user_table`(name, username, password) VALUES(:n, :u, :p)");
    $sql->bindParam(':n', $name);
    $sql->bindParam(':u', $username);
    $sql->bindParam(':p', $password);
    $sql->execute();

    return $sql;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function get_all_dogs()
{
  global $connect;
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    $sql = $connect->prepare("SELECT * FROM dogs_table");
    $sql->execute();

    return get_all_rows($sql);
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function add_dog(string $name, string $breed, string $status)
{
  global $connect;
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    $sql = $connect->prepare("INSERT INTO dogs_table(name, breed, status) VALUES (:name, :breed, :status)");
    $sql->bindParam(':name', $name);
    $sql->bindParam(':breed', $breed);
    $sql->bindParam(':status', $status);
    $sql->execute();

    return $sql;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function update_dog(int $id, string $name, string $breed, string $status)
{
  global $connect;
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    $sql = $connect->prepare("UPDATE dogs_table SET name = :name, breed = :breed, status = :status WHERE id = :id");
    $sql->bindParam(':name', $name);
    $sql->bindParam(':breed', $breed);
    $sql->bindParam(':status', $status);
    $sql->bindParam(':id', $id);
    $sql->execute();

    return $sql;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}

function delete_dog(int $id)
{
  global $connect;
  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try {
    $sql = $connect->prepare("DELETE FROM dogs_table WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->execute();

    return $sql;
  } catch (PDOException $e) {
    echo $e->getMessage();
  }
}