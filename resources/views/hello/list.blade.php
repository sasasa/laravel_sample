<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quick Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>
<body>
  <a href="/save/create">本を新規追加</a>
  <table class="table">
    <tr>
      <th></th>
      <th>書籍</th>
      <th>価格</th>
      <th>出版社</th>
      <th>刊行日</th>
      <th></th>
      <th></th>
    </tr>
    @foreach ($records as $id => $record)
      <tr>
        <td>{{ $id + 1 }}</td>
        <td>{{ $record->title }}</td>
        <td>{{ $record->price }}</td>
        <td>{{ $record->publisher }}</td>
        <td>{{ $record->published }}</td>
        <td>{{ $record->price_avg }}</td>
        <td>
          <a href="/save/{{ $record->id }}/edit">編集</a>
          <a href="/save/{{ $record->id }}">削除</a>
        </td>
      </tr>
    @endforeach
  </table>
  {{ $records->links() }}
  @isset($max)
  max: {{$max}}
  @endisset
</body>
</html>