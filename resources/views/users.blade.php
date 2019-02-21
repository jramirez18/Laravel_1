{{-- @include('header') esta era una forma para llamar los archivos--}} 
@extends('layout')

@section('content')
<h1>{{$title}}</h1><!-- El titulo va ser dinamico proveniente de la bd, si son datos dinamcos estos se deben de escapar-->
{{-- @if (!empty($users)) --}} 
@unless(empty($users))
<ul>
  @foreach ($users as $user)
  <li>{{$user}}</li> <!--FUNCION HELPER e() lo pasa a texto ESCAPADO-->
  @endforeach
  </ul>
@else
    <p><h3>No hay usuarios registrados</h3></p>
@endif   
@endsection

    
  <!--BLADE nos protege automaticamente de ataques xcsss ESCAPADO....BLADE ES UN SISTEMA DE PLANTILLA-->
{{-- @include('footer') --}}
<!--SINTAXIS MAS CORTA PARA ECHO ?=  -->
<!--PARA USAR BLADE, el archivo tiene que tener la extenecion .blade.php-->