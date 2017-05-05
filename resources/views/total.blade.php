@extends ('layouts.master')

@section('title', 'Total')

@section('content')
    <h2>Totals</h2>

@endsection

@section ('footer')
    <hr>
    @foreach($totalRB as $row)
        <tr>
            @foreach($row as $field)
                <li>RB total rushing yards [{{$field}}]</li>
            @endforeach
        </tr>
    @endforeach
@endsection

@section ('footer')
    <hr>
    @foreach($totalWR as $row)
        <tr>
            @foreach($row as $field)
                <li>RB total rushing yards [{{$field}}]</li>
            @endforeach
        </tr>
    @endforeach
@endsection