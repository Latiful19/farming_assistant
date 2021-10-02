@extends('backend.master')
@section('content')
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
 Give A Solution
</button>
<table class="table">
 
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Complaint ID</th>
      
      <th scope="col">Image</th>
      <th scope="col">description</th>
      
      
      
    </tr>
  </thead>
  
<tbody>
 
    <tr>
      <td>{{$description->id}}</td>
     
      <td>
                <img src="{{url('/uploads/'.$description->Image)}}" width="100px" alt="problem_image">
            </td>
    <td>{{$description->Description}}</td>
    </tr>

    

</tbody>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Post a solution</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="{{route('solutions.solution')}}" method="post">
        @csrf
         
    
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Solution</label>
    <textarea class="form-control" name="solution" id="exampleFormControlTextarea1" placeholder="write solution" rows="3"></textarea>
  </div>

    <button type="submit" class="btn btn-primary">Post</button>

  </div>

  <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
</form>
      </div>
    
        
      
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>







@endsection
