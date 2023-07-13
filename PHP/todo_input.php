<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プロフィール（入力画面）</title>
</head>

<body>
  <form action = "todo_create.php" method="POST">
    <fieldset>
      <legend>プロフィール（入力画面）</legend>
      <a href="todo_read.php">一覧</a>
      <div>date: <input type="date" name="date"></div>
      <div>course: <input type="text" name="course"></div>
      <div>name: <input type="text" name="name"></div>
      <div>nameKana: <input type="text" name="nameKana"></div>
      <div>gender: <input type="text" name="gender"></div>
      <div>age: <input type="text" name="age"></div>
      <div>email: <input type="text" name="email"></div>
      <div>aveScore: <input type="text" name="aveScore"></div>
      <div>bestScore: <input type="text" name="bestScore"></div>
      <div>career: <input type="text" name="career"></div> 
      <div>residence: <input type="text" name="residence"></div>
      <div>freeFormat: <input type="text" name="freeFormat"></div>
      <div><button>submit</button></div>
    </fieldset>
  </form>

</body>

</html>