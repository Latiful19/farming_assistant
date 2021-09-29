@extends('frontend.master')
@section('contents')
<br>  </br>
<br>  </br>
<br>  </br>
<br>  </br>

@foreach($details as $det)

{{$det->description}}

@endforeach

@endsection