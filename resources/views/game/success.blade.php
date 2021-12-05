@extends('master')
@section('content')





    <h3 class="mt-5 mb-5 sentence">
        偽性格診断完成
    </h3>
    <div>
        <button id="copy" class="button" class="button coisbg" onclick="copy()" value="{{ url ('/game.home', $id) }}">クリックでコピー</button>
    </div>
    <div class="mt-4 share">
        <a class="share_button button" href="{{ url ('/game.home', $id) }}" target="_blank" rel="nofollow">ラインで共有する</a>
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


@endsection