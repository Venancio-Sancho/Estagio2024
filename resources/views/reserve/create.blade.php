@extends('main')

@section('content')
<div class="main-panel">        
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Bem-vindo ao novo Cadastro</h4>
            <p class="card-description">
              Por favor, preencha todos os campos!
            </p>

            <form class="forms-sample" method="post" action="{{ route('reserve.store') }}">
              @csrf
              <div class="form-group">
                <label for="customer_id">Cliente</label>
                <select name="customer_id" id="customer_id" class="form-control" required>
                  <option value="">Selecione</option>
                  @foreach ($customer as $customer)
                  <option value="{{ $customer->id }}">{{ $customer->customer }}</option>
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
                <label for="date">Hora</label>
                <input type="text" name="time" class="form-control">
              </div>

              <div class="form-group">
                <label for="value">Valor</label>
                <input class="form-control @error('value') is-invalid @enderror" type="number" name="value" placeholder="Obs" min="500" required value="{{ old('value') }}">
                @error('value')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>

              <button type="submit" class="btn btn-primary me-2">Guardar</button>
              <button class="btn btn-light">Cancelar</button>
            </form>
          </div>
        </div>
      </div>  
    </div>
  </div>
</div>
@endsection
