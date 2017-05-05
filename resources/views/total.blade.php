@extends ('layouts.master')

@section('title', 'Total')

@section('content')
    <div class="jumbotron text-center">
    <h2>Totals rushing yards, revieving yards, and tackles</h2>
    </div>
@endsection

@section ('footer')
    <hr>
    @foreach($total as $row)
        <tr>
            @foreach($row as $field)
                <li class="list-group-item">RB total rushing yards [{{$field}}]</li>
            @endforeach
        </tr>
    @endforeach
@endsection
