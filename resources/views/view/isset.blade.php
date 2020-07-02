@isset($msg)
<p>変数$msgは「{{ $msg }}」です。</p>
@else
<p>変数$msgはありません。</p>
@endisset

@empty($msg2)
<p>変数$msg2はありません。</p>
@else
<p>変数$msg2は「{{ $msg2 }}」です。</p>
@endempty