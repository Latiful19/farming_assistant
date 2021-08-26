@extends('backend.master')
@section('content')
<!DOCTYPE html>
<html>
<style>
    input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }

    input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    }

    input[type=submit]:hover {
    background-color: #45a049;
    }

    div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    }
</style>
<body>

<h1>create an account</h1>

<div>
  <form action="{{route('farmer.openaccount')}}" method="post">
    @csrf
    <div class="form-group">
    <label for="fname"> Name</label>
    <input type="text" id="fname" name="name" class="form-control" placeholder="name"></div>
    
    <div class="form-group">
    <label for="fname"> Phone</label>
    <input type="number" id="fname" name="phone" class="form-control" placeholder="phone"></div>
    
    <div class="form-group">
    <label for="fname"> Address</label>
    <input type="text" id="fname" name="address" class="form-control" placeholder="address"></div>


    <!-- <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select> -->
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
