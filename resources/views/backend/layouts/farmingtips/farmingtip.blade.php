@extends('backend.master')
@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Add More Farming Tips
</button>
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
<tr>
<th scope="row">{{$key+1}}

<th scope="row">{{$cat->Category}}</th>
<th scope="row">{{$cat->Crop_Name}}</th>
<th scope="row">{{$cat->Problem_Type}}</th>
</tr>
@endforeach

</tbody>
</table>
</div>
</div>
</div>
</div>
</section>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Farming Tips</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
          <!-- TIPS ADDING FORM -->
          <div class="form-group col-md-4">
      <label for="inputState">Category</label>
      <select id="inputState" class="form-control">
        <option selected>Select Category</option>
        <option>Vegetable</option>
        <option>Fruit</option>
        <option>Corn</option>
        <option>Cattle</option>
      </select>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCropName">Crop Name</label>
      <input type="text" class="form-control" id="inputCropName">
    </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputProblem">Problem Type</label>
      <input type="text" class="form-control" id="inputProblem">
    </div>
    
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
        <button type="button" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
@endsection