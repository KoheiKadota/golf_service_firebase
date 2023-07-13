<?php
// var_dump($_POST);
// exit();
// POSTデータ確認

include('functions.php');
$pdo = connect_to_db();

// NGだった時の条件
if (
  !isset($_POST['date']) || $_POST['date'] === '' ||
  !isset($_POST['course']) || $_POST['course'] === '' ||
  !isset($_POST['name']) || $_POST['name'] === '' ||
  !isset($_POST['name_kana']) || $_POST['name_kana'] === '' ||
  !isset($_POST['gender']) || $_POST['gender'] === '' ||
  !isset($_POST['age']) || $_POST['age'] === '' ||
  !isset($_POST['email']) || $_POST['email'] === '' ||
  !isset($_POST['ave_score']) || $_POST['ave_score'] === '' ||
  !isset($_POST['best_score']) || $_POST['best_score'] === '' ||
  !isset($_POST['career']) || $_POST['career'] === '' || 
  !isset($_POST['residence']) || $_POST['residence'] === '' || 
  !isset($_POST['free']) || $_POST['free'] === ''   

) {
  exit('データが足りません。。');
}

$date = $_POST['date'];
$course = $_POST['course'];
$name = $_POST['name'];
$name_kana = $_POST['name_kana'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$ave_score = $_POST['ave_score'];
$best_score = $_POST['best_score'];
$career = $_POST['career'];
$residence = $_POST['residence'];
$free = $_POST['free'];


// 各種項目設定
$dbn ='mysql:dbname=golf_service;charset=utf8mb4;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}

// SQL作成&実行

$sql = 'INSERT INTO profile (id, date, course, name, name_kana, gender, age, email, ave_score, best_score, career, residence, free, created_at, updated_at) VALUES (NULL, :date, :course, :name, :name_kana, :gender, :age, :email, :ave_score, :best_score, :career, :residence, :free, now(), now())';
 
$stmt = $pdo->prepare($sql);

// バインド変数を設定
$stmt->bindValue(':date', $date, PDO::PARAM_STR);
$stmt->bindValue(':course', $course, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':name_kana', $name_kana, PDO::PARAM_STR);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':ave_score', $ave_score, PDO::PARAM_STR);
$stmt->bindValue(':best_score', $best_score, PDO::PARAM_STR);
$stmt->bindValue(':career', $career, PDO::PARAM_STR);
$stmt->bindValue(':residence', $residence, PDO::PARAM_STR);
$stmt->bindValue(':free', $free, PDO::PARAM_STR);


// SQL実行（実行に失敗すると `sql error ...` が出力される）
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}


// データ入力画面に移動する
header("Location:service.php");
exit();