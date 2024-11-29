@extends('main')


@section('content')




      
   </div><!-- az-content-left -->
   
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
          <div class="az-content-breadcrumb">
           
          </div>
          <div>
          <h2 class="az-content-title">Comprovativo</h2>
          <p>Por favor, deposite o valor no numero da conta!</p>

        
       
        <div class="table-responsive">
            <table class="table mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Cliente</th>
                  <th>Mesas</th>
                  <th>Hora</th>
                 
                  </tr>
              </thead>
              @if($reserve->count() > 0)
                          @foreach($reserve as $rs)

                        <tr>
                          <td>{{ $rs->id }}</td>
                          <td>{{ $rs->customer->customer }}</td>
                          <td>{{ $rs->tables_id }}</td>
                          <td>{{ $rs->time }}</td>
                          
                         
                          
						  <!--  redireciona o botao editar e apagar para os repectivos ficheiros  -->
						  <td>
						
              
                 
              </tbody>
            </table>
            
            
  </body>
          
                  
                 
          
               
                 
          </div><!-- table-responsive -->

          


   
</html>
@endsection