@extends('frontend.master')
@section('contents')
  
<form>
  <div class="form-group">
    <label for="ComplaintID">Complaint ID</label>
    <input type="text" class="form-control" id="ComplaintID" placeholder="ComplaintID">
  </div>

  <div class="form-group col-md-4">
      <label for="inputCategory">Category</label>
      <select id="inputCategory" class="form-control">
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
    <input type="file" class="form-control" name='image' >
    
    <br></br>
  </div>



  <div class="form-group">
    <label for="Textarea">Description</label>
    <textarea class="form-control" id="Textarea" rows="10"></textarea>
  </div>
</form>

<button type="submit" class="btn btn-dark">Submit Complaint </button>
</form>


@endsection