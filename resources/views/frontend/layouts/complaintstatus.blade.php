@extends('frontend.master')
@section('contents')

<table class="table">
 
  <thead class="thead-dark">
    <tr>
      <th scope="col">Farmer ID</th>
      <th scope="col">Complaint Name</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($complaints as $data)
    <tr>
      <td>{{$data->id}}</td>
      
      <td>{{$data->problem_name}}</td>
      <td>{{$data->name}}</td>
    </tr>
@endforeach

  </tbody>
</table>


@endsection