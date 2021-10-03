@extends('backend.master')
@section('content')
    <h1>Advertisements</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 POST A NEW ADVERTISEMENT
</button>
    <table class="table">
 
  <thead class="thead-dark">
    <tr>
      
    <th scope="col">Ad ID</th>
      <th scope="col">Product Category</th>
      <th scope="col">Product Name</th>
      <th scope="col">Amount</th>
      <th scope="col">Quality</th>
      <th scope="col">Price</th>
      <th scope="col">Probable Suply Date</th>
      <th scope="col">Status</th>
      <th scope="col">Claimed By</th>
      <th scope="col">Action</th>
      
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
      <td>{{$Ad->claimed_by}}</td>
      <td><a href="{{route('advertise.delete',$Ad->id)}}"> <i onclick="return confirm('Are you sure you want to delete this item?');"  class="fas fa-trash-alt"></i></a> </td>
      
    </tr>
@endforeach

</tbody>


  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post the latest Ad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{route('advertisements.advertisementstore')}}" method="post">
        @csrf
          <!-- TIPS ADDING FORM -->
          <div class="form-group col-md-4">
      <label for="category">Product Category</label>
      <select id="inputState" class="form-control" name="Product_Category" id="category">
        <option selected>Select Category</option>
        <option>Vegetable</option>
        <option>Fruit</option>
        <option>Corn</option>
        <option>Cattle</option>
      </select>
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Product_Name">Product Name</label>
      <input type="text" name="Product_Name" class="form-control" id="Product_Name" placeholder="Enter Product Name">
    </div>
  
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Amount">Amount</label>
      <input type="text" name="Amount" class="form-control" id="Amount" placeholder="Enter Amount">
    </div>

    <div class="form-group col-md-4">
      <label for="Quality">Quality</label>
      <select id="inputState" class="form-control" name="Quality" id="Quality">
        <option selected>Select Quality</option>
        <option>Excellent</option>
        <option>Good</option>
        <option>Average</option>
        </select>
    </div>
        
        <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Price">Price</label>
      <input min="0" type="number" name="Price" class="form-control" id="Price" placeholder="Enter Price">
    </div>

    <div class="form-row">
    <div class="form-group">
    <input type="text" name="date" class="form-control datepicker" autocomplete="off">
            </div>

    <button type="submit" class="btn btn-primary">Submit</button>
      

  <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
</form>
      </div>
    
         
      
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>


<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>



<!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css"> -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
        <!-- <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->


<script language="javascript">
$('.datepicker').datepicker({ 

startDate: new Date()

});
</script>


@endsection