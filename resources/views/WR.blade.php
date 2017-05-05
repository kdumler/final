@extends ('layouts.master')

@section('title', 'ALL WR STATS')

@section('content')
    <div class="jumbotron text-center">
    <h2>WR Jersey Number, Name, and Total Recieving Yards</h2>
    </div>
@endsection

@section ('footer')
    <hr>
    <table class="table">
        @foreach($stats as $row)
            <tr>
                @foreach($row as $field)
                    <td>{{$field}}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
@endsection