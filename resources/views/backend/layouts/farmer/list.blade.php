@extends('backend.master')
@section('content')
<h1>Farmer</h1>




<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Full name</th>
      <th scope="col">Username</th>
      <th scope="col">Email Address</th>
      <th scope="col">Mobile No.</th>
      <th scope="col">Address</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($farmers as $information)
    <tr>
      <th scope="row">{{$information->id}}</th>
      <th scope="row">{{$information->Full_Name}}</th>
      <th scope="row">{{$information->User_Name}}</th>
      <th scope="row">{{$information->Email}}</th>
      <th scope="row">{{$information->Mobile_No}}</th>
      <th scope="row">{{$information->Address}}</th>
      
     
      
    </tr>
    @endforeach
    
  </tbody>
</table>
    
    @endsection