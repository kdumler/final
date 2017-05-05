@extends ('layouts.master')

@section('title', 'Roster')

@section('content')
        <div class="jumbotron text-center">
    <h2>Roster</h2>
    </div>
@endsection

@section ('footer')
    <hr>
    <table class = "table">
        @foreach($roster as $row)
            <tr>
                @foreach($row as $field)
                    <td>{{$field}}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection