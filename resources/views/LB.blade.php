@extends ('layouts.master')

@section('title', 'ALL LB STATS')

@section('content')
        <h2>LB Jersey Number, Name, and Total Rushing Yards</h2>

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