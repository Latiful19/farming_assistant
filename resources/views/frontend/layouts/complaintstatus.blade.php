@extends('frontend.master')
@section('contents')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Farmer ID</th>
      <th scope="col">Complaint Name</th>
      <th scope="col">Complaint ID</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($Complaints as $Complaint)
    <tr>
      <th scope="row">1</th>
      <td>{{$product->name}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->name}}</td>
      <td>{{$product->name}}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


@endsection