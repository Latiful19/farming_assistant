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
<th>Category-ID</th>   
<th>Category</th>
<th>Crop Name</th>
<th>Problem Type</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<tr>
@foreach($categories as $key=>$cat)

<th scope="row">{{$key+1}}

<th scope="row">{{$cat->Category}}</th>
<th scope="row">{{$cat->Crop_Name}}</th>
<th scope="row">{{$cat->Problem_Type}}</th>
<th><a href="{{route('descriptions')}}" class="btn btn-primary">View Details</a></th>


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