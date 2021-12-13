<html>

<head>
    <title>Edit Galeri</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <style>
        html,
        body {
            font-family: "Century Gothic";
            background: #EDEDED;
        }

        h2 {
            color: #e06fdb;
            font-weight: bold;
            margin-top: 100px;
        }

        .cancel {
            color: #e06fdb;
        }

        .content {
            margin-top: 100px;
        }

        .btn {
            background-color: #e06fdb;
            color: #FFFFFF;
        }

    </style>
</head>

<body>
    <form action="{{ route('galeri.update', $galeri->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="nama_galeri">Judul</label>
            <input type="text" class="form-control" name="nama_galeri" value="{{ $galeri->nama_galeri }}">
        </div>
        <div class="form-group">
            <label for="id_katalog">Katalog</label>
            <select name="id_katalog" class="form-control">
                <option value="" selected>--Pilih Brand--</option>
                @foreach ($katalog as $data)
                    <option value="{{ $data->id }}">{{ $data->nama_brand }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" class="form-control" value="{{ $galeri->keterangan }}"></textarea>
        </div>
        <div class="form-group">
            <label for="foto">Upload Foto</label>
            <input type="file" class="form-control" name="foto" value="{{ $galeri->foto }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="/galeri" class="btn btn-warning">Batal</a>
        </div>
    </form>


</body>

</html>
