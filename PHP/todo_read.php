<?php
include('functions.php');
$pdo = connect_to_db();

// DB接続

// $dbn ='mysql:dbname=golf_service;charset=utf8mb4;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   echo json_encode(["db error" => "{$e->getMessage()}"]);
//   exit();
// }


// SQL作成&実行

$sql = 'SELECT * FROM profile ORDER BY date ASC';

$stmt = $pdo->prepare($sql);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

// SQL実行の処理

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// var_dump($result);
// echo'<pre>';
// exit();

$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["date"]}</td>
      <td>{$record["course"]}</td>
      <td>{$record["name"]}</td>
      <td>{$record["nameKana"]}</td>
      <td>{$record["gender"]}</td>
      <td>{$record["age"]}</td>
      <td>{$record["email"]}</td>
      <td>{$record["aveScore"]}</td>
      <td>{$record["bestScore"]}</td>
      <td>{$record["career"]}</td>
      <td>{$record["residence"]}</td>
      <td>{$record["freeFormat"]}</td>
    </tr>
  ";
}


?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プロフィール（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>プロフィール（一覧画面）</legend>
    <a href="todo_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>date</th>
          <th>course</th>
          <th>name</th>
          <th>nameKana</th>
          <th>gender</th>
          <th>age</th>
          <th>email</th>
          <th>aveScore</th>
          <th>bestScore</th>
          <th>career</th>
          <th>residence</th>
          <th>freeFormat</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
          <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>