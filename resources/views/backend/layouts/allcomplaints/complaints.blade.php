@extends('backend.master')
@section('content')
   

  <table class="table">
 
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Complaint ID</th>
      <th scope="col">User name</th>
      <th scope="col">Category</th>
      <th scope="col">problem name</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
      
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
      <td><a href="{{route('description')}}" class="btn btn-primary">View Details</a></td>
    </tr>
@endforeach






@endsection