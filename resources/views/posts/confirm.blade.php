<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laravel基礎</title>
</head>

<body>
   <h2>投稿一覧</h2>
   <table>
       <tr>
           <th>タイトル</th>
           <td>{{ $title }}</td>
       </tr>
       <tr>
           <th>本文</th>
           <td>{{ $content }}</td>
       </tr>    
                                   
   </table>
   <form action="{{ route('posts.store') }}" method="POST">
       @csrf
       <input type="hidden" name="title" value="{{ $title }}">
       <input type="hidden" name="content" value="{{ $content }}">
       <input type="submit" value="登録">
   </form>

   <form action="{{ route('posts.create') }}" method="GET">
       <input type="submit" value="戻る">
   </form>
   
</body>

</html>