<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>G O L F   P A R T Y</title>
</head>


<body>
  <!-- PHP  formにはaction, method, nameを設定！ -->
      <form action="todo_post_confirm.php" method="POST">
       <title>プロフィール登録</title>

        <label for="name">名前</label>
        <input type="text" id="name" name="name" required>
  
        <label for="nameKana">ふりがな</label>
        <input type="text" id="nameKana" name="nameKana" required>
  
        <label for="gender">性別</label>
        <select id="gender" name="gender" required>
          <option value="">選択してください</option>
          <option value="男">男</option>
          <option value="女">女</option>
        </select>
  
        <label for="averageScore">平均スコア</label>
        <select id="averageScore" name="averageScore" required>
          <option value="">選択してください</option>
          <option value="70代">70代</option>
          <option value="80代">80代</option>
          <option value="90代">90代</option>
          <option value="100代">100代</option>
        </select>
  
        <label for="bestScore">ベストスコア</label>
        <input type="number" id="bestScore" name="bestScore" required>
  
        <label for="yearsOfExperience">ゴルフ歴</label>
        <input type="number" id="yearsOfExperience" name="yearsOfExperience" required>
  
        <label for="availableDays">ラウンド可能日</label>
        <select id="availableDays" name="availableDays" required>
          <option value="">選択してください</option>
          <option value="平日">平日</option>
          <option value="土日">土日</option>
          <option value="全日">全日</option>
        </select>
  
        <label for="residence">居住地</label>
        <select id="residence" name="residence" required>
          <option value="">都道府県を選択してください</option>
          <option value="東京">東京</option>
          <option value="福岡">福岡</option>
          <!-- 他の都道府県のオプション -->
        </select>
  
        <label for="activityArea">活動地域</label>
        <select id="activityArea" name="activityArea" required>
          <option value="">都道府県を選択してください</option>
          <option value="東京">東京</option>
          <option value="福岡">福岡</option>
          <!-- 他の都道府県のオプション -->
        </select>
  
        <label for="freeFormat">フリーフォーマット</label>
        <textarea id="freeFormat" name="freeFormat" rows="5" style="width: 100%;"></textarea>
  
        <input type="submit" value="送信">
 </form>


<!-- 画面右上のメニュー -->
    <nav>
      <ul class="nav-list">
      <div id="btn1"><li class="nav-item"><a href="#top">TOP</a></li></div>
      <div id="btn2"><li class="nav-item"><a href="#about">ABOUT</a></li></div>
      <div id="btn3"><li class="nav-item"><a href="#service">SERVICE</a></li></div>
      <div id="btn4"><li class="nav-item"><a href="#course">COURSE</a></li></div>
      <div id="btn5"><li class="nav-item"><a href="#contact">CONTACT</a></li></div>
      </ul>
    </nav>

 <!-- 画面左上のタイトル -->
    <div id="service.html">
    <p class="title"> S E R V I C E</p>
    <div class="bg"  style="background:url(img/skygreen.jpg);"></div>

        <!-- /* ボタン(btn)をクリックすると次のページへ遷移 -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
          $("#btn1").click(function () {
            window.location.href = "index.html";
          });

          $("#btn2").click(function () {
            window.location.href = "about.html";
          });

          $("#btn3").click(function () {
            window.location.href = "service.html";
          });

          $("#btn4").click(function () {
            window.location.href = "course.html";
          });

          $("#btn5").click(function () {
            window.location.href = "contact.html";
          });
          
      </script>
    </div>

<!-- 問合せフォームのCSS -->
  <style>
    body {
      background-color: #E6F2E8;
      font-family: Arial, sans-serif;
    }
  
    h1 {
      color: #006400;
    }
  
    .container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      background-color: #FFFFFF;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
  
    label {
      display: block;
      margin-bottom: 10px;
      color: #006400;
    }
  
    input[type="text"],
    input[type="number"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #006400;
      border-radius: 3px;
      box-sizing: border-box;
      font-size: 16px;
      margin-bottom: 20px;
    }
  
    select {
      height: 40px;
    }
  
    input[type="submit"] {
      background-color: #006400;
      color: #FFFFFF;
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
      font-size: 16px;
    }
  
    input[type="submit"]:hover {
      background-color: #003300;
    }

 .fade-in {
      position: relative;
      animation: fadeIn 2s ease-in-out;
    }

    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }

  </style>

</body>
</html>