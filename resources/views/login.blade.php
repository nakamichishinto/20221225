<style>
  .register-form{
    display:inline-block;
    margin:auto;
    width:30%;
    height:300px;
    border:1px solid;
  }

  .title {
    border-bottom:1px solid;
    margin-bottom:10px;
    text-align:center;
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
  <div class="register-form">
    <div class="title">
      <p>Login</p>
    </div>


    <p>{{$text}}</p>
    <form action="/login" method="post">
      @csrf

      
      <div class="form">
        <input type="text" name="email" placeholder="email"></input>
      </div>

      <div class="form">
        <input type="text" name="password" placeholder="password"></input>
      </div>

      <div class="register-btn">
        <button>ログイン</button>
      </div>

    </form>
  </div>

</body>

</html>