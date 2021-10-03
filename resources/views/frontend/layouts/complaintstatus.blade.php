@extends('frontend.master')
@section('contents')

<table class="table">

 
  <thead class="thead-dark">
    <tr>
      <th scope="col">Complaint ID</th>
      <th scope="col">User name</th>
      <th scope="col">Category</th>
      <th scope="col">problem name</th>
      <th scope="col">Image</th>
      <th scope="col">status</th>
      <th scope="col">Actoin</th>
    </tr>
  </thead>
  <tbody>
  @foreach($complaints as $data)
    <tr>
      <td>{{$data->id}}</td>
      <td>{{$data->User_name}}</td>
      <td>{{$data->Category}}</td>
      <td>{{$data->problem_name}}</td>
      <td>{{$data->Image}}</td>
      <td>{{$data->status}}</td>
      <td><a href="{{route('complaints.solutions',$data->id)}}" class="btn btn-primary">view solution</a></td>
    </tr>
@endforeach

  </tbody>
</table>


@endsection