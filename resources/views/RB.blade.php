@extends ('layouts.master')

@section('title', 'ALL RB STATS')

@section('content')
    <div class="jumbotron text-center">
        <h2>RB Jersey Number, Name, and Total Rushing Yards</h2>
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