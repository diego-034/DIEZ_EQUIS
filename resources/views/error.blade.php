@extends('layouts.app')
@section('content')
<center>
    <h1>Hi! Ocurred an error.</h1>
    {{ $ex->getmessage()}}
</center>
@endsection