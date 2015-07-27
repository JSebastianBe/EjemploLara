@if (count($errors) > 0)
<div class="alert alert-danger">
  <strong>¡Cuidado!</strong> Por favor corrige los siguientes errores:<br><br>
  <ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif