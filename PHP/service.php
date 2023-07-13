<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <title>G O L F   P A R T Y</title>
</head>

<body>

<!-- 画面左上のタイトル -->
    <div id="service.html">
    <p class="title"> REQUEST</p>
    <div class="bg"  style="background:url(img/skygreen2.jpg);"></div>


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

<style>
  /* 以下①ラウンド希望日のフォームCSS */
  input[type="date"] {
    width: 120px;
  margin-bottom: 20px;
  }
</style>

  <div class="container">
  <!-- PHP  formにはaction, method, nameを設定！ -->
      <form action="todo_create.php" method="POST">

    <title>プロフィール登録</title>

        <!-- ①ラウンド希望日 -->
        <label for="date">ラウンド希望日</label>
        <input type="date" id="date" name="date" required>
        </select>

        <!-- ②ゴルフ場 -->
        <label for="course">ゴルフ場</label>
        <select id="course" name="course" required>
          <option value="">選択してください</option>
          <option value="東京">芥屋ゴルフクラブ</option>
          <option value="福岡">志摩シーサイド</option>
        </select>

       <!-- ③名前 -->
        <label for="name">名前</label>
        <input type="text" id="name" name="name" required>
  
       <!-- ④名前かな -->
        <label for="name_kana">ふりがな</label>
        <input type="text" id="name_kana" name="name_kana" required>
 
       <!-- ⑤性別 -->
        <label for="gender">性別</label>
        <select id="gender" name="gender" required>
          <option value="">選択してください</option>
          <option value="男">男</option>
          <option value="女">女</option>
        </select>
  
        <!-- ⑥年齢 -->       
        <label for="age">年齢</label>
        <select id="age" name="age" required>
          <option value="">選択してください</option>
          <option value="25">25</option>
          <option value="35">35</option>
        </select>

        <!-- ⑦メールアドレス -->    
        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" required>

        <!-- ⑧平均スコア -->    
        <label for="ave_score">平均スコア</label>
        <select id="ave_score" name="ave_score" required>
          <option value="">選択してください</option>
          <option value="70">70代</option>
          <option value="80">80代</option>
          <option value="90">90代</option>
          <option value="100">100代</option>
        </select>

        <!-- ⑨ベストスコア -->    
        <label for="best_score">ベストスコア</label>
        <input type="number" id="best_score" name="best_score" required>
  
        <!-- ⑩ゴルフ歴 -->  
        <label for="career">ゴルフ歴</label>
        <input type="number" id="career" name="career" required>
  
        <!-- 11 居住地-->  
        <label for="residence">居住地</label>
        <select id="residence" name="residence" required>
          <option value="">選択してください</option>
          <option value="東京">東京</option>
          <option value="福岡">福岡</option>
        </select>
  

        <!-- 12 フリーフォーマット-->  
        <label for="free">フリーフォーマット</label>
        <textarea id="free" name="free" rows="5" style="width: 100%;"></textarea>
  
        <input type="submit" value="送信">
 </form>
 </div>



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

    <style> 

.bg {
  z-index: -1;
  position: fixed;
  top: 0;
  left: 0;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
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
    input[type="date"],
    input[type="email"],
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