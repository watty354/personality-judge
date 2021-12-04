@extends('master')
@section('content')





    <h3 class="mt-5 mb-5 sentence">
        偽性格診断完成
    </h3>
    <div>
        <button id="copy" class="button" class="button coisbg" onclick="copy()" value="{{ url ('/game.home', $id) }}">クリックでコピー</button>
    </div>
    <div class="mt-4">
        <button id="share" class="button share_button">共有する</button>
    </div>
    
    <div class="copy_info">
        <div id="info" class="card-body bg-secondary text-white hide">
          コピーしました
        </div>
    </div>
    
    
    
    
    {{-- <button class="btn btn-primary" type="button">
        <a href="{{ url ('/fake.home', $id) }}" >URLへ</a>
    </button> --}}
    
    <div class="next">
        <a href="{{ url ('/game.home', $id) }}" class="button" onclick="clickBtn3()">URLへ</a>
    </div>

    <script type="text/javascript">
        function(){
          function share() {
            if (navigator.share) {
              navigator.share({
                title: '性格診断',
                text: 'めちゃくちゃ当たる性格診断',
                url: 'https://social-plugins.line.me/lineit/share?url=https://personality-judge.herokuapp.com/game.home', $id
              })
              .then(() => {
                // シェアしたら実行される
                console.log('Successful share');
              })
              .catch((error) => {
                // シェアせず終了した場合もここに入ってくる。
                console.log('Error sharing', error));
              };
            } else {
              alert('Web Share API is not supported!!');
              // Web Share API未対応ブラウザ向けのフォールバックを実装する。
            }
          }
          document.querySelector('#share').addEventListener('click', share);
        }();
      </script>
        

@endsection