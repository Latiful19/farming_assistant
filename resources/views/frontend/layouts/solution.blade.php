@extends('frontend.master')
@section('contents')



<table class="table">
 
  <thead class="thead-dark">
    <tr>
      <th scope="col">Complaint ID</th>
      <th scope="col">Solution</th>
      </tr>
  </thead>
  <tbody>
  @foreach($complaints->solutions as $data)
    <tr>
      <td>{{$data->complaint_id}}</td>
      <td>{{$data->solution}}</td>
    </tr> 
      @endforeach

     
</tbody>
</table>

@endsection