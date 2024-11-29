@extends('main')

@section('content')

<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white me-2">
      <i class="mdi mdi-home"></i>
    </span> Editar Mesa
  </h3>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
      </li>
    </ul>
  </nav>
</div>

<div class="card">
  <div class="card-body">
    <form class="form-sample" method="post" action="{{ route('table.update', $table->id) }}">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label">Numero</label>
            <input type="text" name="number" class="form-control" value="{{ $table->number }}" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label">Capacidade</label>
            <input type="text" name="capacity" class="form-control" value="{{ $table->capacity }}" />
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label class="col-form-label">Estado</label>
            <select name="status" class="form-control">
              <option value="disponivel">Disponível</option>
              <option value="indisponivel">Indisponível</option>
            </select>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <button class="btn btn-primary">Concluir</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
