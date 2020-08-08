@extends('template')

@section('stylings')
    <style>
        form{
            display: inline;
        }
    </style>
@endsection

@section('contents')
    <h1>Daftar Pertanyaan</h1>
    <a href="/pertanyaan/create"><button>Buat Pertanyaan Baru!</button></a>
    <table>
        <tr>
            <th>No</th>
            <th>Pertanyaan</th>
            <th>Isi</th>
            <th>Action</th>
        </tr>
        @foreach($datas as $no => $data)
        <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->judul }}</td>
            <td>{{ $data->isi }}</td>
            <td>
                <a href="/pertanyaan/{{ $data->id }}"><button>Show</button></a>
                <a href="/pertanyaan/{{ $data->id }}/edit"><button>Edit</button></a>
                <a href="">
                <form action="/pertanyaan/{{ $data->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form></a>
            </td> 
        </tr>
        @endforeach
    </table>
@endsection

@push('scripts')
<script>
    
</script>