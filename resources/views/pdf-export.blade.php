

<style>
  table {
      width: 100%;
      border-collapse: collapse;
      
  }

  th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: left;
  }
   
    </style>
<center>
<h1>Relatorio</h1>

</center>

  <div class="table-responsive">
    <div class="col-lg-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Lista das Tabelas</h4>
         
          <table class="table mg-b-0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Mesas</th>
                <th>Hora</th>
                <th>Data</th>
                <th>valor</th>
              
              </tr>
            </thead>
            <tbody>
              @if($reserve->count() > 0)
                @foreach($reserve as $rs)
                  <tr>
                    <td>{{ $rs->id }}</td>
                    <td>{{ $rs->user->name }}</td>
                    <td>{{ $rs->table_id }}</td>
                    <td>{{ $rs->time }}</td>
                    <td>{{ $rs->date }}</td>
                    <td>{{ $rs->value}}</td>
                  
                @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

