@extends('template')

@section('contents')
    <h2>{{ $data->judul }}</h2>
    <p>{{ $data->isi }}</p>
    <a href="/pertanyaan"><button>Back to Home >></button></a>
@endsection