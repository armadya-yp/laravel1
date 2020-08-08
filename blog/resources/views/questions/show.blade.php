@extends('adminlte.master')

@section ('content')
    <h4>{{$question->judul}}</h4>
    <p>{{$question->isi}}</p>
@endsection