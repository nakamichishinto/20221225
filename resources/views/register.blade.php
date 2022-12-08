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
      <p>Registration</p>
    </div>


    
    <form action="/register" method="post">
      @csrf

      <div class="form">
        <input type="text" name="name" placeholder="Username"></input>
      </div>

      <div class="form">
        <input type="text" name="email" placeholder="email"></input>
      </div>

      <div class="form">
        <input type="text" name="password" placeholder="password"></input>
      </div>

      <div class="register-btn">
        <button>登録</button>
      </div>

    </form>
  </div>

</body>

</html>