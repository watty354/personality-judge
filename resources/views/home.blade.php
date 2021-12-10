<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>フェイク診断</title>
    <meta name="description" content="あなたが相手の性格診断結果を作成して相手をだまそう">
    <meta property="og:title" content="フェイク診断"/>
    <meta property="og:description" content="あなたが相手の性格診断結果を作成して相手をだまそう"/>
    <meta property="og:image" content="{{ asset('images/about.png')}}"/>
    <meta property="og:url" content="https://personality-judge.herokuapp.com"/>
    <meta property="og:type" content="article"/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="フェイク診断" />
    <meta name="twitter:description" content="あなたが相手の性格診断結果を作成して相手をだまそう" />
    <meta name="twitter:image" content="{{ asset('images/about.png')}}" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/sass/sample.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>

<body>
    <div id="loading" class="load">
        <div class="preloader loading">
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
            <span class="slice"></span>
        </div>
    </div>
    
    <div class="container fadein">

        <div class="main mt-5 mb-5">
            <h1 class="main-heading">
              <span class="main-heading-primary">フェイク診断</span>
              <span class="main-heading-secondary">
                You make a personality diagnosis</span>
            </h1>
          </div>
        

        <div class="next mb-5">
            <a href="{{ url('/about') }}" class="button" onclick="clickBtn3()">入力</a>
        </div>
        

        {{-- <div class="sentence mt-5 mb-5">
            <a href="{{ url('/about') }}"  onclick="clickBtn3()">もう少し詳しく聞きたい</a>
        </div> --}}

        <div class="share_home mt-5">
            <a class="fab fa-twitter-square twiiter fa-3x pr-1 pl-1" href="https://twitter.com/share?url=https://personality-judge.herokuapp.com&text=【偽性格診断】をつくってみよう" rel="nofollow" target="_blank"></a>
            <a class="fab fa-line fa-3x pr-1 pl-1 line" href="https://social-plugins.line.me/lineit/share?url=https://personality-judge.herokuapp.com" target="_blank" rel="nofollow"></a>
            <a class="fab fa-facebook-square facebook fa-3x pr-1 pl-1" href="https://www.facebook.com/share.php?u=https://personality-judge.herokuapp.com" rel="nofollow" target="_blank"></a>
            <p>共有してくれるとニンマリ</p>
        </div>
        
        <footer class="footer">2021 © m-wada</footer>
    </div>
    
    

    <script src="{{ mix('js/all.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>