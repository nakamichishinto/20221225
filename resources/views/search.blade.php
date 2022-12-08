<style>
  .restaurants {
    width:100%;
    
  }
  .restaurant-card {
    display:inline-block;
    width:20%;
    margin:10px;
    border:1px solid;
    border-radius: 5px;
    box-shadow: 0 4px 15px rgba(0,0,0,.2)
  }

  img {
    width: 100%;
  height: auto;

  }

  .card-text {
    margin:20px;
  }

  .tag p {
    display:inline;
  }

    .detail-button {
    display: flex;
    justify-content: center;
    padding: 5px 3px;
    width: 90px;
    border: 1px solid blue;
    font-size: 8px;
    font-weight: 700;
    border-radius:7px;
    text-decoration:none;
    background-color:blue;
    color:white;
  }

  .detail-button:hover {
    color:white;
    background-color:rgba(186,85,211);
  }  /*後ではずす*/


</style>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <div class="restaurants">
    @foreach($posts as $post)
    @csrf
    <input type="hidden" name="id" value="{{$post->id}}">
    <div class="restaurant-card"> 
    
    <div class="photo">
      <img src="{{$post->photo}}" alt="画像">
    </div>

    <div class="card-text">
      <div class="name">
        <h2>{{$post->name}}</h2>
      </div>
      
      <div class="tag">
        @if($post->address_id === 1)
        <p>#東京都</p>
        @elseif($post->address_id === 2)
        <p>#大阪府</p>
        @elseif($post->address_id === 3)
        <p>#福岡県</p>
        @endif

        @if($post->genre_id === 1)
        <p>#寿司</p>
        @elseif($post->genre_id === 2)
        <p>#焼肉</p>
        @elseif($post->genre_id === 3)
        <p>#居酒屋</p>
        @elseif($post->genre_id === 4)
        <p>#イタリアン</p>
        @elseif($post->genre_id === 5)
        <p>#ラーメン</p>
        @endif

        
      </div>

      

      <a href="/detail/{{$post->id}}">詳細</a>

    <button class="detail-button" onclick="location.href=">
      詳しくみる
    </button>

  </div>
  
  </div>
      @endforeach
</body>
