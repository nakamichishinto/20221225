<style>
.detail {
  width:45%;
  margin:40px;
}

.ttl h2 {
  display:inline;
}

img {
  width:100%;
  margin:20 0px;
}

.tag p {
  display:inline;
  
}

.confirm {
  background-color:;
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
  <div class="detail">
    <form action="/logout" method="get">
      @csrf
      <button>
        ログアウト
      </button>
      </form>

    <div class="ttl">
      <button class="back">
        <a href="/"><</a>
        
        
      </button>

      <h2 class="name">
        {{$item->name}}
      </h2>
    </div>
    

    <div class="photo">
      <img src="{{$item->photo}}" alt="画像">
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
    </div>

    <div class="text">
      <p>
        {{$item->detail}}
      </p>
    </div>
  </div>


  <div class="reserve">
    <form action="/reserve" method="post">
      @csrf
      
    <table>
      <div class="ttl">
        <tr>
          <h2>予約</h2>
        </tr>
      </div>

      <tr><input type="hidden" name="user_id" value="{{$user->id}}"></tr>
      <tr><input type="hidden" name="restaurant_id" value="{{$item->id}}"></tr>

      <tr>
        <td>
          <input type="date" name="date">
        </td>
        
      </tr>

      <tr>
        <td>
          {{--
          <select name="time" id="">
            <option value="">17:00</option>
            <option value="">18:00</option>
            <option value="">19:00</option>
            <option value="">20:00</option>
            <option value="">21:00</option>
          </select>--}}
          
          <input type="text" name="time">
        </td>
      </tr>

      <tr>
        <td>
          {{--
          <select name="number" id="">
            <option value="">1人</option>
            <option value="">2人</option>
            <option value="">3人</option>
            <option value="">4人</option>
            <option value="">5人</option>
          </select>--}}
        </td>

        <input type="text" name="number">
      </tr>
    </table>

    <div class="confirm">
      <table>
        <tr>
          <td>
            <p>Shop</p>
          </td>
          <th>
            <p>{{$item->name}}</p>
          </th>
        </tr>

        <tr>
          <td>
            <p>Date</p>
          </td>
          <th>

          </th>
        </tr>

        <tr>
          <td>
            <p>Time</p>
          </td>
          <th>

          </th>
        </tr>

        <tr>
          <td>
            <p>Number</p>
          </td>
          <th>

          </th>
        </tr>
      </table>
    </div>

    <div class="reserve-btn">
      <button>予約する</button>
    </div>

    </form>
  </div>
  

</body>

