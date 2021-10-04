@extends('frontend.master')
@section('contents')
<section class="ftco-section">
<div class="container">
<!-- <div class="row justify-content-center"> -->
<div class="col-md-6 text-center mb-5">

</div>
</div>
<div class="row">
<div class="col-md-12">

<div class="table-wrap">
<table class="table">
<thead class="thead-primary">
<tr>
<th>Tips No:</th>   
<th>Category</th>
<th>Crop Name</th>
<th>Problem Type</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
@foreach($categories as $key=>$cat)

<td scope="row">{{$key+1}}> </td>

<td scope="row">{{$cat->Category}}</td>
<td scope="row">{{$cat->Crop_Name}}</td>
<td scope="row">{{$cat->Problem_Type}}</td>
<td><a href="{{route('descriptions')}}" class="btn btn-primary">View Details</a></td>


</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</section>

@endsection