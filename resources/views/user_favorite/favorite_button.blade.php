        {{-- ログインユーザーがお気に入り保存済みか？何を？お気に入り保存済みならtrue、そうじゃなければfalse --}}
        {{-- お気に入り保存済みだったら、お気に入り削除ボタンを、お気に入り未保存なら、お気に入り追加ボタンを表示する --}}
    @if (Auth::user()->is_favorite($micropost->id))
        {{-- アンライクボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unlike', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unlike', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- ライクボタンのフォーム --}}
        {!! Form::open(['route' => ['user.like', $micropost->id]]) !!}
            {!! Form::submit('Like', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
