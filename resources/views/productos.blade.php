<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TABLA DE PRODUCTOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @page {
            margin: 0cm 0cm;
            font-size: 1em;
        }
        body {
            margin: 3cm 2cm 2cm;
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 30px;
        }
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #46C66B;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
    <header>
        <br>
        <p><strong>LIBRERIA DOMPDF - LARAVEL 7</strong></p>
    </header>
    <main>
        <div class="container">
            <h5 style="text-align: center"><strong>TABLA DE PRODUCTOS</strong></h5>
            <table class="table table-striped text-center">
                <thead>
                    <tr> 
                        <th class = "text-center"> Nombre </th> 
                        <th class = "text-center"> Apellido </th> 
                        <th class = "text-center"> NSS </th> 
                        <th class = "text-center"> Doctor </th> 
                        <th class = "text-center"> Sexo </th> 
                        <th class = "text-center"> Edad</th> 
                        <th class = "text-center"> Telefono </th> 
                        <th class = "text-center"> Unidad </th> 
                        <th class = "text-center"> Editar </th> 
                        <th class = "text-center"> Eliminar </th> 
                    </tr> 
                </thead>
               <tbody>
                @foreach($patients as $item)
                <tr> 
                    <td>{{$item->name}}</td> 
                    <td>{{$item->lastname}}</td> 
                    <td>{{$item->nss}}</td> 
                    <td>{{$item->doctor}}</td> 
                    <td>{{$item->gender}}</td> 
                    <td>{{$item->age}}</td> 
                    <td>{{$item->phone}}</td> 
                    <td>{{$item->unidad}}</td> 
            
                </tr> 
                @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <p><strong>SUSCRIBETE - COMENTA - COMPARTE</strong></p>
    </footer>
</body>
</html>