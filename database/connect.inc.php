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