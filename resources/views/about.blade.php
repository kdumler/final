@extends ('layouts.master')

@section('title', 'ALL ROUTES')

@section('content')
    <div class="jumbotron text-center">
    <h2>List of Routes and what they do</h2>
    </div>
@endsection

@section ('footer')
    <hr>
    <ul class ="list-group">
        <li class="list-group-item">{{ $about }}</li>
        <li class="list-group-item">{{ $roster }}</li>
        <li class="list-group-item">{{ $total }} </li> <br>

        <li class="list-group-item">{{ $statsRB }}</li>
        <li class="list-group-item">{{ $compareRB }}</li> <br>

        <li class="list-group-item">{{ $statsWR }}</li>
        <li class="list-group-item">{{ $compareWR }}</li> <br>

        <li class="list-group-item">{{ $statsLB }}</li>
        <li class="list-group-item">{{ $compareLB }}</li> <br>


    </ul>
@endsection