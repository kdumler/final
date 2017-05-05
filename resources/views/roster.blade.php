@extends ('layouts.master')

@section('title', 'Roster')

@section('content')
    <h2>Roster</h2>

@endsection

@section ('footer')
    <hr>
    <table border="1">
        @foreach($roster as $row)
            <tr>
                @foreach($row as $field)
                    <td>{{$field}}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection