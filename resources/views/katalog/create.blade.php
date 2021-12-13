<html>

<head>
    <title>Add Product</title>

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

    <div>
        <center>
            <h2>Tambah Produk</h2>
            <center>
                <form method="post" action="{{ route('katalog.store') }}" class="content"
                    enctype="multipart/form-data">
                    @csrf
                    <center>
                        <table>
                            <tr>
                                <td>Nama Produk : </td>
                                <td><input type=" text" class="form-control" name="nama_produk">
                                </td>
                            </tr>
                            <tr>
                                <td>Nama Brand: </td>
                                <td><input type="text" class="form-control" name="nama_brand"></td>
                            </tr>
                            <tr>
                                <td>Harga: </td>
                                <td><input type="text" class="form-control" name="harga"></td>
                            </tr>
                            <tr>
                                <td>Keterangan: </td>
                                <td><input type="text" class="form-control" name="keterangan"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Upload: </td>
                                <td><input id="datepicker" type="text" class="form-control" name="created_at"
                                        placeholder="yyyy/mm/dd">
                                </td>
                            </tr>

                            <script type="text/javascript">
                                $('#datepicker').datepicker({
                                    format: 'yyyy/mm/dd',
                                    autoclose: 'true',
                                    uiLibrary: 'bootstrap4',

                                    todayHighlight: true
                                });
                            </script>
                            <tr>
                                <td>Upload Foto: </td>
                                <td><input type="file" class="form-control" name="foto"></td>
                                </td>
                            </tr>
                        </table>
                    </center>
                    <br>
                    <br>
                    <center>
                        <div><button class="btn btn-success" type="submit">Save</button>
                            <a class="cancel" href="/katalog">Cancel</a>
                        </div>
                    </center>
                </form>
                @if (count($errors) > 0)
                    <div>
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $errors)
                                <li>{{ $errors }}</li>
                            @endforeach
                        </ul>
                @endif
    </div>
</body>

</html>
