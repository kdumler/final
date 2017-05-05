@extends ('layouts.master')

@section('title', 'ALL LB STATS')

@section('content')
    <div class="jumbotron text-center">
        <h2>LB Jersey Number, Name, and Total Tackles</h2>
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