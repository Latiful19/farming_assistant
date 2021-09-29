@extends('backend.master')
@section('content')
   



    @foreach($description as $des)

       {{$des->Description}}
@endforeach



@endsection