@extends('main')

@section('content')

<div class="page-header">
    <!-- Restante do código... -->
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Veja a mesa que deseja
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span><i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

<div class="col-lg-12 stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Lista das Mesas</h4>
            <a href="{{ route('table.create') }}">
                @can('excluir-noticias')
                <button type="button" class="btn btn-primary btn-rounded">Adicionar Tabelas</button>
                @endcan
            </a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Numero</th>
                        <th>Capacidade</th>
                        <th>Estado</th>
                        <th>Ação</th> 
                    </tr>
                </thead>
                <tbody>
                    @if($tables->count() > 0)
                        @foreach($tables as $table)
                            <tr>
                                <td>{{ $table->id }}</td>
                                <td>{{ $table->number }}</td>
                                <td>{{ $table->capacity }}</td>
                                <td>{{ $table->status }}</td>
                                <td>
                                    @can('excluir-noticias')
                                    <a class="btn btn-sm btn-info" href="{{ route('table.edit', $table->id) }}">Editar</a>
                                    @endcan
                                    @can('excluir-noticias')
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $table->id }}">Excluir</button>
                                    @endcan
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal{{ $table->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $table->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $table->id }}">Excluir Tabela</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Deseja realmente excluir a tabela: {{ $table->table }}?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                            <form action="{{ route('table.destroy', $table->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Excluir</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fim do Modal -->
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
