<?php

// id受け取り

include("functions.php");

// 入力項目のチェック
$id = $_GET['id'];
// DB接続
$pdo = connect_to_db();

// SQL実行
$sql = 'SELECT * FROM todo_table WHERE id=:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);

?>

// 以下HTML部分

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="todo_update.php" method="POST">
  <fieldset>
    <legend>DB連携型todoリスト（編集画面）</legend>
    <a href="todo_read.php">一覧画面</a>
    <div>
      todo: <input type="text" name="todo" value="<?= $record['todo'] ?>">
    </div>
    <div>
      deadline: <input type="date" name="deadline" value="<?= $record['deadline'] ?>">
    </div>
    <div>
      <input type="hidden" name="id" value="<?= $record['id'] ?>">
    </div>
    <div>
      <button>submit</button>
    </div>
  </fieldset>
</form>
</body>
</html>






