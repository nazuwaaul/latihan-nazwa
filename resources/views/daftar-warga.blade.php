@php
    $warga = \App\Models\Warga::all();
@endphp

<h1>Daftar Warga</h1>
@foreach ($warga as $data)
    ID Warga : {{$data->id}} <br>
    Nama Warga : {{$data->nama}} <br>
    NIK : {{$data->Ktp->nik}} <br>
    Jenis Kelamin : {{$data->jenis_kelamin}} <br>
    Alamat : {{$data->alamat}}
    <hr>
@endforeach
