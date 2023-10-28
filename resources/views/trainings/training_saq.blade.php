<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
    <x-slot name="header">
    <head>
        <meta charset="utf-8">
        <title>Torejo</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    </x-slot>
    <body>
        <h1> SAQレーニング</h1>
        <h2>SAQトレーニングとは、スポーツの三大要素、Speed(スピード)・Agility(アジリティ)・Quickness(クイックネス)の頭文字から由来しています。</h2></br>
        
        <h3></br>SAQトレーニングをする意味：SAQトレーニングは、「走る」や「止まる」、「跳ぶ」などスポーツの基礎となる「ゼネラルスキル」を高めるためのトレーニングです。このゼネラルスキルが備わっていない、状態でスポーツの専門的なスキルを行ったとしても、スキルの習得がうまくいかない、ケガが増えるなどの問題が生じてしまう可能性が高いです。また、ゼネラルスキルを高めることは、身体の正しい使い方を習得することが出来る上に、ケガ予防や競技復帰のリハビリにも効果があります。
        </br>Speed(スピード)：SAQトレーニングにおけるスピードとは、重心移動の速さ、つまり移動スピードのことを指します。スピードは、「ピッチ」（足の回転）と「ストライド」（重心移動の距離）の2つの要素で決定されます。スピードを高めるためには、ピッチを落とすことなくストライドを伸ばす、ストライドを落とすことなくピッチを速めるトレーニングが必要です。そのためには、姿勢や腕振り、脚の動作などの基本動作を身に着けることが大切です。
        </br>Agility(アジリティ):アジリティは運動時に身体をコントロールする能力のことを指します。敏捷性とも呼び、方向転換をして進む方向を変えたり、ターンをして身体の向きを変える時に必要な能力です。アジリティを高めるには、バランストレーニングやコーディネーション（身体を巧みに操作する能力）トレーニングなどで、姿勢を保持したり身体をイメージ通りに動かすトレーニングから行い、ラダートレーニングやマーカーコーンを使った方向転換のトレーニング、そして鬼ごっこやミラードリル（二人一組で向かい合い、ランダムに動く相手と同じ動きをするドリル）などのランダムな動きをするトレーニングへと進めていきます。
        </br>Quickness(クイックネス)：クイックネスとは、刺激(目や耳などの感覚器官から入ってくる情報のこと)に反応し素早く動く能力のことを指します。クイックネスは刺激を認識し動き出すまでの「リアクションタイム」と動き出しの速さの「ムーブメントタイム」から構成され、前方だけでなく横や後ろなど様々な方向へ素早く動き出すトレーニングが必要です。・刺激を正しく認識すること・動き出しの動作をいかに効率よく・素早く行うことが出来るかがポイントになります。
        </h3>
        
        
        <div class='trainings'>
            @foreach ($training as $saq)
                <div class='training'>
                    <h2 class='name'>
                        <a href="/trainings/{{ $saq->id }}">{{ $saq->name }}</a>
                    </h2>
                </div>
            @endforeach
        </div>
            
            <p>ログインユーザー：{{ Auth::user()->name }}</p>
            </div>
            
    </body>
    </x-app-layout>
</html>