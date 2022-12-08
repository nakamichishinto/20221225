<style>
  .restaurants {
    width:100%;
    margin:10px;
  }

  .restaurant-card {
    display:inline-block;
    width:22%;
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
    
  }

  .detail-button:hover {
    color:white;
    background-color:rgba(186,85,211);
  }  /*後ではずす*/

  a {
    color:white;
    text-decoration:none;
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
  
  
  <div class="search-form">
    <form action="/search" method="get">
      @csrf

      <select name="address">
        <option value="">全て</option>
        <option value="1">東京都</option>
        <option value="2">大阪府</option>
        <option value="3">福岡県</option>
      </select>

      <select name="genre">
        <option value="">全て</option>
        <option value="1">寿司</option>
        <option value="2">焼肉</option>
        <option value="3">居酒屋</option>
        <option value="4">イタリアン</option>
        <option value="5">ラーメン</option>
      </select>

      <input type="text" name="keyword" value="{{$keyword}}" placeholder="Search">
      <button>検索</button>
    </form>
  </div>
  <div class="restaurants">
    @foreach($items as $item)
    <input type="hidden" name="restaurant_id" value="{{$item->id}}">
    
    <div class="restaurant-card"> 
    
    <div class="photo">
      <img src="{{$item->photo}}" alt="画像">
    </div>

    <div class="card-text">
      <div class="name">
        <h2>{{$item->name}}</h2>
      </div>
      
      <div class="tag">
        @if($item->address_id === 1)
        <p>#東京都</p>
        @elseif($item->address_id === 2)
        <p>#大阪府</p>
        @elseif($item->address_id === 3)
        <p>#福岡県</p>
        @endif

        @if($item->genre_id === 1)
        <p>#寿司</p>
        @elseif($item->genre_id === 2)
        <p>#焼肉</p>
        @elseif($item->genre_id === 3)
        <p>#居酒屋</p>
        @elseif($item->genre_id === 4)
        <p>#イタリアン</p>
        @elseif($item->genre_id === 5)
        <p>#ラーメン</p>
        @endif

        <div class="favorite">
          <form action="/favorite" method="post">
            @csrf
            <input type="submit" value="お気に入り"></input>
          </form>
        </div>


      </div>

    <button class="detail-button" onclick="location.href=">
    <a href="/detail/{{$item->id}}">
      詳しくみる
    </a>
    </button>

  </div>
  




  </div>
      @endforeach
</body>


