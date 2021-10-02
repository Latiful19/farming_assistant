@extends('frontend.master')
@section('contents')


@foreach($details as $det)

{{$det->description}}

@endforeach

@endsection