<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad: {{$curso}}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="{{ asset('css/uaeh.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
 </head>
<body>
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <img src="http://www.anuies.mx/img/noticias_ies/339_1.jpg" alt="">
                            <center><h1>Actividad: {{$curso}}</h1></center>
                            <center><h2>Dirección: {{$direccion}}</h2></center>
                            <center><h3>Dependencia: {{$dependencia}}</h3></center>
                            <h4 align="center">Participante: {{$name}}</h4>
                        </div>
                        <div class="card-body">

                            <table id="kami" class="table table-hover table-striped" border="1">
                                <tbody>
                                <tr>
                                    <th align="right">¿Cómo se sintió durante el desarrollo de la actividad?</th>
                                    <td>{{$quiz1}}</td>
                                </tr>
                                <tr>
                                    <th align="right">¿Qué le pareció la actividad?</th>
                                    <td>{{$quiz2}}</td>
                                </tr>
                                <tr>
                                    <th align="right">¿Cuál es su opinión de la actividad?</th>
                                    <td>{{$quiz3}}</td>
                                </tr>
                                <tr>
                                    <th align="right">¿Considera que esta actividad genera valor para la institución?</th>
                                    <td>{{$quiz4}}</td>
                                    <th>¿Porque?</th>
                                    <td>{{$quiz5}}</td>
                                </tr>
                                <tr>
                                    <th align="right">¿Puede aplicar lo aprendido en su área de desarrollo/trabajo?</th>
                                    <td>{{$quiz6}}</td>
                                </tr>
                                <tr>
                                    <th align="right">¿Cómo va a aplicar los conocimientos adquiridos para mejorar los procesos de su dependencia?</th>
                                    <td>{{$quiz7}}</td>
                                </tr>
                                <tr>
                                    <th align="right">¿Cómo le podríamos ayudar para aplicar los conocimientos adquiridos de forma exitosa en su dependencia?</th>
                                    <td>{{$quiz8}}</td>
                                    <th>Proporcione una fecha a partir de la cual podramos darle seguimiento</th>
                                    <td><h5>{{$quiz9}}</h5></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer">
                            <p align="center">Favor de contactar a {{$name}} para darle seguimiento</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
