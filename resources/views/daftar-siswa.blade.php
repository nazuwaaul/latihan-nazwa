@php

    $siswa = \App\Models\Siswa::all();
    $satusiswaawal = \App\Models\Siswa::first();
    $satusiswaakhir = \App\Models\Siswa::latest('id')->first();
    $siswasatu = \App\Models\Siswa::find(15);
    $siswalaki = \App\Models\Siswa::where('jenis_kelamin', 0)->get();
@endphp

{{--menampilkan data--}}
<h1 style="color: red"> Menampilkan Seluruh Siswa</h1>
@foreach ($siswa as $data)
    <br>
    Nama Siswa : {{ $data->nama }} <br>
    Jenis Kelamin : {{ $data->jenis_kelamin }} <br>
    Umur : {{ $data->umur }} <br>
    Alamat : {{ $data->alamat }} <br>
@endforeach

{{--menampilkan 1 siswa awal--}}
    <hr>
    <h1 style="color: green"> Menampilkan 1 Siswa Awal</h1>
    Nama Siswa : {{ $satusiswaawal->nama }} <br>
    Jenis Kelamin : {{ $satusiswaawal->jenis_kelamin }} <br>
    Umur : {{ $satusiswaawal->umur }} <br>
    Alamat : {{ $satusiswaawal->alamat }} <br>

{{--menampilkan 1 siswa akhir--}}
    <hr>
    <h1 style="color: yellow"> Menampilkan 1 Siswa Akhir</h1>
    Nama Siswa : {{ $satusiswaakhir->nama }} <br>
    Jenis Kelamin : {{ $satusiswaakhir->jenis_kelamin }} <br>
    Umur : {{ $satusiswaakhir->umur }} <br>
    Alamat : {{ $satusiswaakhir->alamat }} <br>

{{--menampilkan 1 siswa--}}
    <hr>
    <h1 style="color: blue"> Menampilkan 1 Siswa</h1>
    {{--menambahkan operator OR apabila tidak ditemukan--}}
    Nama Siswa : {{ $siswasatu->nama ?? '-' }} <br>
    Jenis Kelamin : {{ $siswasatu->jenis_kelamin ?? '-' }} <br>
    Umur : {{ $siswasatu->umur ?? '-' }} <br>
    Alamat : {{ $siswasatu->alamat ?? '-' }} <br>


{{--menampilkan siswa laki--}}
<h1 style="color: purple"> Menampilkan Siswa Laki-Laki</h1>
@foreach ($siswalaki as $laki)
    <hr>
    Nama Siswa : {{ $laki->nama }} <br>
    Jenis Kelamin : {{ $laki->jenis_kelamin }} <br>
    Umur : {{ $laki->umur }} <br>
    Alamat : {{ $laki->alamat }} <br>
@endforeach
