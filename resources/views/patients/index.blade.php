@extends("../layouts.layout")

@section("content")

<table class = "table" id = "table"> 
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
     @foreach ($patients as $item)
     <tr> 
        <td>{{$item->name}}</td> 
        <td>{{$item->lastname}}</td> 
        <td>{{$item->nss}}</td> 
        <td>{{$item->doctor}}</td> 
        <td>{{$item->gender}}</td> 
        <td>{{$item->age}}</td> 
        <td>{{$item->phone}}</td> 
        <td>{{$item->unidad}}</td> 
        <td>
            <a href="{{route('patients.edit', $item->id)}}">
            <button class="edit-modal btn btn-info" type="submit"
            {{-- data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}" --}}
            >
            <span class="glyphicon glyphicon-edit"></span> Editar
             </button>
            </a>
        </td>
        <td>
            <form action="">
            <button class="delete-modal btn btn-danger"
            {{-- data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}" --}}
            >
            <span class="glyphicon glyphicon-trash"></span> Eliminar
        </button>
            </form>
        </td>


    </tr> 
     @endforeach   
    </tbody> 
</table>



@endSection