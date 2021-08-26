@extends('backend.master')
@section('content')
<h1>Farmer</h1>



<a href="{{route('farmer.openacc')}}" class="btn btn-info"> Create Account></a>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Farmer ID</th>
      <th scope="col">Farmer name</th>
      <th scope="col">Farmer phone</th>
      <th scope="col">Farmer address</th>
    </tr>
  </thead>
  <tbody>
      @foreach($info as $information)
    <tr>
      <th scope="row">{{$information->id}}</th>
      <th scope="row">{{$information->name}}</th>
      <th scope="row">{{$information->Phone}}</th>
      <th scope="row">{{$information->address}}</th>
     
      
    </tr>
    @endforeach
    
  </tbody>
</table>
    
    @endsection