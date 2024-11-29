@extends('main')

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bem-vindo à atualização</h4>
            <p class="card-description">
              Por favor, preencha todos os campos!
            </p>

            <form class="forms-sample" method="post" action="{{ route('reserve.update', $reserve->id) }}">
              @csrf
              @method('PUT')
              <div class="form-group">
                <label for="customer_id">Cliente</label>
                <select name="customer_id" id="customer_id" class="form-control" required>
                  <option value="">Selecione</option>
                  @foreach ($customer as $customer)
                  <option value="{{ $customer->id }}" {{ $reserve->customer_id == $customer->id ? 'selected' : '' }}>{{ $customer->customer }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="table_id">Mesas</label>
                <select name="table_id" id="table_id" class="form-control" required>
                  <option value="">Selecione</option>
                  @foreach ($table as $table)
                  <option value="{{ $table->id }}" {{ $reserve->table_id == $table->id ? 'selected' : '' }}>{{ $table->id }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="time">Hora</label>
                <input type="text" name="time" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="value">Valor</label>
                <input class="form-control @error('value') is-invalid @enderror" type="number" name="value" placeholder="Obs" min="500" required value="{{ $reserve->value }}">
                @error('value')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary me-2">Atualizar</button>
              <button class="btn btn-light">Cancelar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
