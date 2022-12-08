<style>
  body {
    background-color:rgba(211,211,211,0.5);
    text-align:center;
    margin-top:10%;
  }
  .thanks-card {
    display:inline-block;
    border:1px solid white;
    border-radius:5px;
    padding: 80px 30px;
    width:400px;
    text-align:center;
    background-color:white;
    margin-right:auto;
    box-shadow:5px 5px 5px rgba(211,211,211);
  }

  .btn {
    color:white;
    background-color:blue;
    border-radius:5px;
    border:1px solid blue;
  }
</style>



<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <form action="/login" method="get">
  <div class="thanks-card">
    <div class="thanks">
      <h2>会員登録ありがとうございます</h2>
      <h1>{{$text}}</h1>
      
    </div>

    <button class="btn">
        ログインする
    </button>
  </div>
  </form>
</body>

</html>