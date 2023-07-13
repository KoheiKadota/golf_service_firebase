<?php
include('functions.php');
// 入力項目のチェック
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
  !isset($_POST['id']) || $_POST['id'] === ''
) {
  exit('paramError');
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
$id = $_POST['id'];

// DB接続
$pdo = connect_to_db();

$sql = 'UPDATE profile SET date=:date, course=:course,  name=:name, name_kana=:name_kana, gender=:gender, age=:age, email=:email, ave_score=:ave_score, career=:career, residence=:residence, free=:free, created_at=:created_at,updated_at=now() WHERE id=:id';

$stmt = $pdo->prepare($sql);
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
$stmt->bindValue(':id', $id, PDO::PARAM_STR);

var_dump($id);
try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header('Location:todo_read.php');
exit();

?>

