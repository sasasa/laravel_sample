@switch($random)
    @case(5)
      <p>大ラッキーの日です。</p>
      @break
    @case(4)
      <p>良いことがあるかもです。</p>
      @break
    @case(3)
      <p>フツーの日です。</p>
      @break
    @case(2)
      <p>今日は静かに過ごしましょう。</p>
      @break
    @default
      <p>うｍｍｍｍ。</p>
@endswitch