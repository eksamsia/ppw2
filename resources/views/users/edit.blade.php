<html>

<head>
    <title>Edit User</title>

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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Update User') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('users.edit', $data_users->id) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $data_users->name }}" required autocomplete="name"
                                        autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ $data_users->email }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Level') }}</label>

                                <div class="col-md-6">
                                    <!-- <input id="level" type="text" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ old('level') }}" required autocomplete="level"> -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="level1"
                                            value="admin" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Admin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="level" id="level"
                                            value="data_users" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Users
                                        </label>
                                    </div>
                                    @error('level')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <table>
                                <tr>
                                    <td>Name: </td>
                                    <td><input type="text" name="name" value="{{ $data_users->name }}"></td>

                                </tr>
                                <tr>
                                    <td>Email: </td>
                                    <td><input type="email" name="email" value="{{ $data_users->email }}"></td>
                                </tr>
                                <tr>
                                    <td>Password: </td>
                                    <td><input type="password" name="password" value="{{ $data_users->password }}">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Level: </td>
                                    <td>
                                        <div class="form-check">
                                            <!-- <div class="col-md-6"> -->
                                            <!-- <input id="level" type="text" class="form-control @error('level') is-invalid @enderror" name="level" value="{{ old('level') }}" required autocomplete="level"> -->
                                            <div class="col-md-4 col-form-label">
                                                @if ($data_users->level == 'admin')
                                                    <input class="form-check-input" type="radio" name="level"
                                                        id="level1" value="Admin" checked>
                                                @else
                                                    <input class="form-check-input" type="radio" name="level"
                                                        id="level1" value="Admin">
                                                @endif
                                                <label class="form-check-label" for="exampleRadios1">
                                                    Admin
                                                </label>
                                            </div>
                                            <div class="col-md-4 col-form-label">
                                                @if ($data_users->level == 'user')
                                                    <input class="form-check-input" type="radio" name="level"
                                                        id="level2" value="User" checked>
                                                @else
                                                    <input class="form-check-input" type="radio" name="level"
                                                        id="level2" value="User">
                                                @endif
                                                <label class="form-check-label" for="exampleRadios1">
                                                    User
                                                </label>
                                            </div>
                                        </div> --}}
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                            </td>
                            </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>
