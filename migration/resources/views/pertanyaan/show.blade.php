@extends('layouts.master')

@section('content')
<div class="mt-3 ml-3">
    <h4> {{$pertanyaan->judul}} </h4>
    <p> {{$pertanyaan->isi}} </p>
</div>
@endsection