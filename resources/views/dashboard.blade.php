@extends("layouts.layout")

@section("content")

<table class = "table" id = "table"> 
    <thead> 
        <tr> 
            <th class = "text-center"> ID Paciente </th> 
            <th class = "text-center"> Nombre </th> 
            <th class = "text-center"> Apellido </th> 
            <th class = "text-center"> NSS </th> 
            <th class = "text-center"> Doctor </th> 
            <th class = "text-center"> Sexo </th> 
            <th class = "text-center"> Edad</th> 
            <th class = "text-center"> Telefono </th> 
            <th class = "text-center"> Unidad </th> 
            <th class = "text-center"> Resultados </th>  
        </tr> 
    </thead> 
    <tbody>
     @foreach ($patients as $item)
     <tr> 
        <td>{{$item->id}}</td> 
        <td>{{$item->name}}</td> 
        <td>{{$item->lastname}}</td> 
        <td>{{$item->nss}}</td> 
        <td>{{$item->doctor}}</td> 
        <td>{{$item->gender}}</td> 
        <td>{{$item->age}}</td> 
        <td>{{$item->phone}}</td> 
        <td>{{$item->unidad}}</td> 
        <td>
            <a href="{{ ('pdfResults/'.$item->id)}}" target="_blanc">
            <button class="edit-modal btn btn-info" type="submit">
            <span class="glyphicon glyphicon-edit"></span>Ver Resultados
             </button>
            </a>
        </td>
    </tr> 
     @endforeach   
    </tbody> 
</table>



@endSection