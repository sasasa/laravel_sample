@forelse ($records as $record)
  <p>{{$record}}</p>
@empty
  <p>データは存在しません。</p>
@endforelse