@include('header')
  
<h1>USUARIOS #{{$id}}</h1><!-- El titulo va ser dinamico proveniente de la bd, si son datos dinamcos estos se deben de escapar-->
    {{-- @if (!empty($users)) --}} 
   Mostrando detalle del usuario:{{$id}}
    
  <!--BLADE nos protege automaticamente de ataques xcsss ESCAPADO....BLADE ES UN SISTEMA DE PLANTILLA-->
@include('footer')
<!--SINTAXIS MAS CORTA PARA ECHO ?=  -->
<!--PARA USAR BLADE, el archivo tiene que tener la extenecion .blade.php-->