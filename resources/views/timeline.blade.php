<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chat app</title>
  <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
</head>
<body>
  <div class="wrapper">
    <form action="/timeline" method="post">
      @csrf
      <div class="post_box">
        <input type="text" name="chat" placeholder="今何してる？">
        <button type="submit" class="submit_btn">投稿</button>
      </div>
    </form>

    <div class="chat_wrapper">
      @foreach($chats as $chat)
      <div class="chat_box">
        <div>{{ $chat->chat }}</div>
        <div class="destroy_btn">
          <form action="{{ route('destroy', [$chat->id]) }}" method="post">
            @csrf
            <input type="submit" value="削除">
          </form>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</body>
</html>
