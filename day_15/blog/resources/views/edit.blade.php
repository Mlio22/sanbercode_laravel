@extends('template')

@section('stylings')
<style>
    form div{
        display: flex;
        padding: 20px;
        align-items: center;
        justify-content: center;
        width: 100%;
    }

    form div label{
        flex: 300px 0 0;
    }

    form div input{
        flex: 200px 1 1;
        padding: 20px;
        font-size: 16px;
    }

    button{
        padding: 10px;
        width: 100%;
        flex: 200px 1 1;
    }

    span{
        color: red;
    }
</style>
@endsection

@section('contents')
<h2>Mengubah pertanyaan</h2>
<form action="/pertanyaan/{{$data->id}}" method="post">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Judul: @error('title') <span >{{ $message }}</span> @enderror </label>
        <input type="text" value="{{old('title', $data->judul)}}" name="title" id="title" placeholder="Masukkan Judul Pertanyaan Anda" maxlength="255">
    </div>
    <div>
        <label for="body">Isi: @error('body') <span >{{ $message }}</span> @enderror </label>
        <input type="text"  value="{{old('body', $data->isi)}}" name="body" id="body" placeholder="Masukkan Isi Pertanyaan Anda" maxlength="65535">
    </div>
    <button type="submit">Buat!</button>
</form>
@endsection