@extends('template')

@section('stylings')
    <style>
        form{
            display: inline;
        }

        th, td{
            padding: 10px;
            border-bottom: 2px solid #ccc;
        }
    </style>
@endsection

@section('contents')
    <h1>Daftar Pertanyaan</h1>
    <a href="{{route('pertanyaan.create')}}"><button>Buat Pertanyaan Baru!</button></a>
    <table>
        <tr>
            <th>ID</th>
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
                <a href="{{ route('pertanyaan.show', ['pertanyaan' => $data->id]) }}"><button>Show</button></a>
                <a href="{{ route('pertanyaan.edit', ['pertanyaan' => $data->id]) }}"><button>Edit</button></a>
                <a href="">
                <form action="{{ route('pertanyaan.destroy', ['pertanyaan' => $data->id]) }}" method="POST">
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