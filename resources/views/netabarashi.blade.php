@extends('master')
@section('content')

<h4 class="sentence mt-3 font-weight-bold">
    この性格診断結果は作成されたものです！</h4>

<div class="mb-3">
    <img src="{{ asset('images/dokkiri.png')}}" class="img-responsive neta mt-2">
        <p>誰かにおすすめされましたよね？</p>
        <p>さっきの診断結果はその人が作成したものです！</p>
    </div>


        <a href="{{ url('/')}}" class="button mt-2" onclick="clickBtn3()">あなたも誰かの作ってみよう！</a>
@endsection