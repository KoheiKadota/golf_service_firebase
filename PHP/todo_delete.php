<?php
// データ受け取り
$id = $_GET['id'];

include('functions.php');

// DB接続
$pdo = connect_to_db();

// SQL実行
$sql = 'DELETE FROM profile WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_read.php");
exit();

