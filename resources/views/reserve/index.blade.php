@extends('main')

@section('content')
<div class="page-header">
  <h3 class="page-title">
    <span class="page-title-icon bg-gradient-primary text-white me-2">
      <i class="mdi mdi-home"></i>
    </span> Faça sua reserva
  </h3>
  <nav aria-label="breadcrumb">
    <ul class="breadcrumb">
      <li class="breadcrumb-item active" aria-current="page">
        <span></span><i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
      </li>
    </ul>
  </nav>  
</div>
<style>
  #print {
    text-align: right;
  }
</style>

<div class="table-responsive">
  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Lista das Tabelas</h4>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-modal">
          Reservar
        </button>

        <div id="print">
          <a href="http://127.0.0.1:8000/pdf-export">
            <button type="button" class="btn btn-danger btn-rounded">Relatorio</button>
          </a>
        </div>

        <table class="table mg-b-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Cliente</th>
              <th>Mesas</th>
              <th>Hora</th>
              <th>Data</th>
              <th>Valor</th> 
              <th>Pagamento</th>
              <th>Ação</th>
            </tr>
          </thead>
          <tbody>
            @if($reserve->count() > 0)
              @foreach($reserve as $rs)
                @if($rs->user_id == auth()->user()->id) <!-- Verifica se a reserva pertence ao usuário logado -->
                  <tr>
                    <td>{{ $rs->id }}</td>
                    <td>{{ $rs->user->name }}</td>
                    <td>{{ $rs->table_id }}</td>
                    <td>{{ $rs->time }}</td>
                    <td>{{ $rs->date }}</td>
                    <td>{{ $rs->value }}</td>
                    <td> <a class="btn btn-outline-info" href="http://127.0.0.1:8000/checkout">pagar</a></td>
                    <td>
                      <a class="btn btn-outline-info" href="{{ route('reserve.edit', $rs->id) }}">Editar</a>
                      <form action="{{ route('reserve.destroy', $rs->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                      </form>
                    </td>
                  </tr>
                @endif
              @endforeach
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Adicionar -->
<div class="modal fade" id="add-modal" tabindex="-1" aria-labelledby="add-modal-label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-modal-label">Adicionar Mesa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="forms-sample" method="post" action="{{ route('reserve.store') }}">
          @csrf
          <div class="form-group">
            <label for="user_id">Cliente</label>
            <select name="user_id" id="user_id" class="form-control" required>
              <option value="">Selecione</option>
              @foreach ($user as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="table_id">Mesas</label>
            <select name="table_id" id="table_id" class="form-control" required>
              <option value="">Selecione</option>
              @foreach ($table as $table)
                <option value="{{ $table->id }}">{{ $table->id }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="time">Hora</label>
            <input type="time" name="time" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="time">Data</label>
            <input type="date" name="date" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="value">Valor</label>
            <input class="form-control @error('value') is-invalid @enderror" type="number" name="value" placeholder="Obs" min="500" readonly value="500">
            @error('value')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <button type="submit" class="btn btn-primary me-2">Guardar</button>
          <button class="btn btn-light" data-bs-dismiss="modal">Cancelar</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
