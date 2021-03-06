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
      <td>
                <img src="{{url('/uploads/'.$data->Image)}}" width="100px" alt="problem_image">
            </td>
      <td>{{$data->status}}</td>>
      <td >
        <span style="padding-right: 6px;"><a href="{{route('description',$data->id)}}" class="btn btn-primary">View Details</a></span>
        <a href="{{route('status.update',$data->id)}}" class="btn btn-success">solved</a>
        <a href="{{route('statuses.updated',$data->id)}}" class="btn btn-danger">unsolved</a>
      </td>
    </tr>
@endforeach

</tbody>




@endsection