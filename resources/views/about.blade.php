@extends('master')
@section('content')

<h2 class="sentence mt-4 mb-4 font-weight-bold">相手の性格診断結果を作るいたずら</h2>
<div class="mb-3">
    <img src="{{ asset('images/hack.png')}}" class="img-responsive neta">
</div>
<p class="explanation">いたずらをしましょう。</p>
<p class="explanation">騙す相手の性格診断結果を自分が作成します。そして</p>
<p class="explanation">「めちゃくちゃ当たる性格診断あるからやってみて」と騙す相手に渡してください</p>

<p class="explanation mt-2 mb-2 explanation_sentence">診断結果にあなたが作成したものが表示されます。
</p>

<p class="explanation">「え！？めちゃくちゃあたってね？？」と相手がうろたえてる様を見てニヤニヤできるいたずらです。</p>
<p class="explanation">占いとか診断結果にかこつけて日頃の不満をぶつけるでもいいです。※自己責任</p>



<h3 class="sentence flow mt-5 mb-2">流れ</h3>
<div class="title mb-3 text-left mt-3">
    <h4 class="sentence">
        <span>1.</span>あなたが騙す相手の性格診断結果を作成します</h4>
    </div>
    <div class="mb-5">
        <img src="{{ asset('images/about1.png')}}" class="img-responsive">
    </div>

    
    <div class="title text-left">
        <h4 class="sentence">
            <span>2.</span>性格診断が作成されるので<br>URLをコピーして送る or <br>そのまま性格診断</h4>
        </div>
        <div class="mb-5">
            <img src="{{ asset('images/about5.png')}}" class="img-responsive">
        </div>
        
        <div class="title text-left">
            <h4 class="sentence">
                <span>3.</span>ここで騙す相手に性格診断をさせます。<br>どうでもいい質問が5問出題されます</h4>
            </div>
            <div class="mb-2">
                <img src="{{ asset('images/about2.png')}}" class="img-responsive">
            </div>
            <p class="explanation">どうでもいい質問</p>

            <div class="mb-5">
                <img src="{{ asset('images/about4.png')}}" class="img-responsive">
            </div>


    <div class="title text-left">
        <h4 class="sentence">
            <span>4.</span>診断結果にあなたが作成したものが表示されます</h4>
        </div>
        <div class="mb-2">
            <img src="{{ asset('images/about3.png')}}" class="img-responsive">
        </div>
        <p class="explanation m-3">ネタばらしは「実は作成したものです」と表示されます</p>

        <a href="{{ url('/input')}}"  class="button mt-5" onclick="clickBtn3()">作成する</a>
@endsection