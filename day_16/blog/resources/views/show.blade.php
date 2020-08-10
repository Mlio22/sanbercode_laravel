@extends('template')

@section('contents')
    <h2>{{ $data->judul }}</h2>
    <p>{{ $data->isi }}</p>
    <a href="{{ route('pertanyaan.index') }}"><button>Back to Home >></button></a>
@endsection