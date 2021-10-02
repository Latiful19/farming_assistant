@extends('frontend.master')
@section('contents')
  
<form action="{{route('complaint.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  
  <div class="form-group">
			<label for="text">User name</label>
            <input type="text" class="form-control" id="text" name="User_name" required="required">
        </div>

<div class="form-group">
			<label for="text">Problem name</label>
            <input type="text" class="form-control" id="text" name="Problem_name" required="required">
        </div>



  <div class="form-group col-md-4">
      <label for="inputCategory">Category</label>
      <select id="inputCategory" class="form-control" name='category'>
        <option selected>Choose...</option>
        <option>Crop</option>
        <option>Vegetable</option>
        <option>Fruit</option>
        <option>Cattle</option>
      </select>
    </div>
</div>



  <div class="form-group">
    <label for="exampleFormControlFile1">Image</label>
    <div class="custom-file">
    <input type="file" class="form-control" name='problem_image'>
    
    <br></br>
    

  <div class="form-group">
    <label for="Textarea">Description</label>
    <textarea name="description" class="form-control" id="Textarea" rows="10"></textarea>
  </div>
</form>

<button type="submit" class="btn btn-dark">Submit Complaint </button>
</form>


@endsection