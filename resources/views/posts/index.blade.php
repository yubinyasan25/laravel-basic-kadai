<!DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>投稿一覧</title>
   <style>
       body {
           font-family: Arial, sans-serif;
       }
       .post-list {
           margin-bottom: 20px;
       }
       .post-header, .post {
           display: flex;
           gap: 20px;
           padding: 10px 0;
       }
       .post-header {
           font-weight: normal;   /* タイトルを通常に */
           border-bottom: 2px solid #000; /* 下線の代わりにヘッダーだけ線 */
       }
       .post-title {
           width: 200px;
           font-weight: normal;    /* タイトルを通常に */
           text-decoration: none;  /* 下線を消す */
       }
       .post-content {
           flex: 1;
           text-decoration: none;  /* 下線を消す */
       }
   </style>
</head>
<body>
   <h2>投稿一覧</h2>

   <div class="post-list">
       <!-- 見出し -->
       <div class="post-header">
           <div class="post-title">タイトル</div>
           <div class="post-content">本文</div>
       </div>

       <!-- 投稿内容 -->
       @foreach ($posts as $post)
           <div class="post">
               <div class="post-title">{{ $post->title }}</div>
               <div class="post-content">{{ $post->content }}</div>
           </div>
       @endforeach
   </div>

</body>
</html>
