<?php
// var_dump($_POST);
// exit();

$name = $_POST['name'];
$nameKana = $_POST['nameKana'];
$gender = $_POST['gender'];
$averageScore = $_POST['averageScore'];
$yearsOfExperience = $_POST['yearsOfExperience'];
$availableDays = $_POST['availableDays'];
$residence = $_POST['residence'];
$activityArea = $_POST['activityArea'];
$freeFormat = $_POST['freeFormat']

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プロフィール登録（POST）</title>
</head>

<body>
  <fieldset>
    <legend>プロフィール登録（POST）</legend>
    <table>
      <thead>
        <tr>
          <th>name</th>
          <th>nameKana</th>
          <th>gender</th>
          <th>averageScore</th>
          <th>yearsOfExperience</th>
          <th>availableDays</th>
          <th>residence</th>
          <th>activityArea</th>
          <th>freeFormat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><?= $name ?></td>
          <td><?= $nameKana ?></td>
          <td><?= $gender ?></td>
          <td><?= $averageScore ?></td>
          <td><?= $yearsOfExperience ?></td>
          <td><?= $availableDays ?></td>
          <td><?= $residence ?></td>
          <td><?= $activityArea ?></td>
          <td><?= $freeFormat ?></td>
        </tr>
      </tbody>
    </table>
  </fieldset>
</body>

</html>