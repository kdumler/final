@extends ('layouts.master')

@section('title', 'ALL WR STATS')

@section('content')
    <h2>WR Jersey Number, Name, and Total Rushing Yards</h2>

@endsection

@section ('footer')
    <hr>
    <table border="1">
        @foreach($stats as $row)
            <tr>
                @foreach($row as $field)
                    <td>{{$field}}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection