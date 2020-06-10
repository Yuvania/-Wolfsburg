@extends('layouts.app')

@section('content')

 <section class="jumbotron text-center">
    <div class="container">
      <h1 class="display-4">Nuestro menu</h1>
      <p class="lead text-muted">Bienvenido al sistema gestor de platillos del restaurante Wolfsburg.</p>
    </div>
  </section>

<div class="row">
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
      <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> -->
      <img src="https://picsum.photos/id/429/350/230" alt="Frambuesas">
      <div class="card-body">
        <p class="card-text">Este es un platillo de los que se puede presentar en el menú del Restaurante.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-dark">Details</button>
          </div>
          <small class="text-muted">2 min</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
      <img src="https://picsum.photos/id/431/350/230" alt="">
      <div class="card-body">
        <p class="card-text">Este es un platillo de los que se puede presentar en el menú del Restaurante.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-dark">Details</button>
          </div>
          <small class="text-muted">2 min</small>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card mb-4 shadow-sm">
      <img src="https://picsum.photos/id/312/350/230" alt="">
      <div class="card-body">
        <p class="card-text">Este es un platillo de los que se puede presentar en el menú del Restaurante.</p>
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <button type="button" class="btn btn-sm btn-outline-dark">Details</button>
          </div>
          <small class="text-muted">2 min</small>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection