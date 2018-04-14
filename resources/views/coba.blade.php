@extends('layouts.master')

@section('content')
  @for ($i=0; $i < 10; $i++)
    <p style="color:red;">Namaku adalaah {{$nama}}</p>
  @endfor
@endsection
