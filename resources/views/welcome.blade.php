<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Buscador</h1>

                    <form>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ request('name') }}">
                            </div>
                            <div class="col">
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ request('email') }}">
                            </div>
                            <div class="col">
                                <input type="text" name="unity" class="form-control" placeholder="Unidad" value="{{ request('unity') }}">
                            </div>
                            <div class="col">
                                <input type="submit" class="btn btn-primary" value="Buscar..">
                            </div>
                        </div>
                    </form>

                    <hr>

                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">#</th>
                                <th>Nombre y Apellido</th>
                                <th>Email</th>
                                <th>Unidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->unity->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
