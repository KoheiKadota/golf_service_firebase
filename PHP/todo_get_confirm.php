<?php
// var_dump($_GET);
// exit();

$name = $_GET['name'];
$nameKana = $_GET['nameKana'];
$gender = $_GET['gender'];
$averageScore = $_GET['averageScore'];
$yearsOfExperience = $_GET['yearsOfExperience'];
$availableDays = $_GET['availableDays'];
$residence = $_GET['residence'];
$activityArea = $_GET['activityArea'];
$freeFormat = $_GET['freeFormat']

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プロフィール登録（GET）</title>
</head>

<body>
  <fieldset>
    <legend>プロフィール登録（GET）</legend>
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