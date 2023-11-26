@extends('app')
@section('content')
home page
<h1>{{ $detail->title }}</h1>
<p>{{ $detail->content }}</p> 
@endsection