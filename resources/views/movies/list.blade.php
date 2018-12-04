@extends('layouts.app')
@section('content')
<script>
$(document).ready(function(){    $('.dataTable').DataTable();});
</script>

<div class="page-header" >
<h1>Movies</h1>
</p></div>
    @if ($movies->isEmpty())
There are no movies in the database!
    @else
<table class="dataTable">
<thead>
<tr>
<th>Art</th>
<th>Description</th>
<th>Show</th>
<th>Booking</th>
</tr>
</thead>
<tbody>
                @foreach($movies as $movie)
    <tr>
<td><img src="{{ $movie->poster_image_url }}" width="100%"/></td>
<td>{{ $movie->desc }}</td>
<td>{{ $movie->show }}</td>

<td>
    <a href="{{ action('ReservationController@index', $movie->id) }}" class="btn btn-default">Choose Seat</a>
</td>
    </tr>
                @endforeach
            </tbody>
</table>
    @endif
@stop
