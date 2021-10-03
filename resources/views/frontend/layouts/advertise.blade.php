@extends('frontend.master')
@section('contents')
<table class="table table-striped">
  <thead>
    
    <tr>
    <th scope="col">Ad ID</th>
      <th scope="col">Product Category</th>
      <th scope="col">Product Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Quality</th>
      <th scope="col">Price</th>
      <th scope="col">Probable Suply Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($advertisements as $Ad)

    <tr>
      <td>{{$Ad->id}}</td>
      <td>{{$Ad->Product_Category}}</td>
      <td>{{$Ad->Product_Name}}</td>
      <td>{{$Ad->Amount}}</td>
      <td>{{$Ad->Quality}}</td>
      <td>{{$Ad->Price}}</td>
      <td>{{$Ad->date}}</td>
      <td>{{$Ad->Status}}</td>
      <td><a href="{{route('claim.status',$Ad->id)}}" class="btn btn-success">Claim</a></td>
      
    </tr>
    @endforeach
</tbody>
</table>

@endsection