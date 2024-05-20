<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <style type="text/css">
        body {
            padding-top: 50px;
        }
    </style>
    <title>Document</title>
</head>

<body class="container">
@php
    $mahasiswa = \App\Models\Mahasiswa::all();
@endphp
    <div class="col-sm-8 col-sm-offset-2">
        @foreach ($mahasiswa as $data)
            <h3> <small>[{{$data->nama}}]</small></h3>
            <h5>Hobi :
                @foreach ($data->hobi as $result)
                    <small>{{$result->hobi}}</small>
                @endforeach
            </h5>
            <h4>
                <li>Nama Wali : <strong>{{$data->wali->nama}}</strong></li>
                <li>Dosen Pembimbing : <strong>{{$data->dosen->nama}}</strong></li>
            </h4>
            <hr />
        @endforeach
    </div>
</body>

</html>
