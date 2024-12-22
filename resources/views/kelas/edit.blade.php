@extends('layouts.main')

@section('content')

<form action="/kelas/{{ $kelas->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <table class="table">
        <tr>
            <td><label for="class_name">Nama Kelas :</label></td>
            <td><input type="text" id="class_name" name="class_name" class="form-control" value="{{ $kelas->class_name }}" required></td>
        </tr>
        <tr>
            <td><label for="class_teacher">Wali Kelas :</label></td>
            <td><input type="text" id="class_teacher" name="class_teacher" class="form-control" value="{{ $kelas->class_teacher }}" required></td>
        </tr>
        <tr>
            <td><label for="class_leader">Ketua Kelas :</label></td>
            <td><input type="text" id="class_leader" name="class_leader" class="form-control" value="{{ $kelas->class_leader }}" required></td>
        </tr>
        <tr>
            <td><label for="chair">Kursi :</label></td>
            <td><input type="number" id="chair" name="chair" class="form-control" value="{{ $kelas->chair }}" required></td>
        </tr>
        <tr>
            <td><label for="desk">Meja :</label></td>
            <td><input type="number" id="desk" name="desk" class="form-control" value="{{ $kelas->desk }}" required></td>
        </tr>
        <tr>
            <td>Gambar :</td>
            <td>
                @if ($kelas->image)
                    <img src="{{ asset('class_image/' . $kelas->image) }}" alt="{{ $kelas->class_name }}" width="100" height="100">
                @else
                    <p>Tidak ada gambar saat ini</p>
                @endif
            </td>
        </tr>
        <tr>
            <td><label for="class_image">Ganti gambar :</label></td>
            <td><input type="file" id="class_image" name="class_image" class="form-control" accept="image/*"></td>
        </tr>
    </table>
    <button type="submit">Submit</button>
</form>
<form action="/kelas">
    @csrf
    <button type="submit">Back</button>
</form>

@endsection
