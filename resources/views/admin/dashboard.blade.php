@extends('main')


@section('content')





<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                
            </div>
            <h4 class="page-title">Resultados</h4>
        </div>
    </div>
</div>     
<!-- fim título da página --> 

<div class="row">
    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campanhas Enviadas">Campanhas Enviadas</h5>
                        <h3 class="my-2 py-1">9.184</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3,27%</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <div id="campaign-sent-chart" data-colors="#727cf5"></div>
                        </div>
                    </div>
                </div> <!-- fim row-->
            </div> <!-- fim card-body -->
        </div> <!-- fim card -->
    </div> <!-- fim col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Novos Leads">Novos Leads</h5>
                        <h3 class="my-2 py-1">3.254</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 5,38%</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <div id="new-leads-chart" data-colors="#0acf97"></div>
                        </div>
                    </div>
                </div> <!-- fim row-->
            </div> <!-- fim card-body -->
        </div> <!-- fim card -->
    </div> <!-- fim col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Negócios">Negócios</h5>
                        <h3 class="my-2 py-1">861</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4,87%</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <div id="deals-chart" data-colors="#727cf5"></div>
                        </div>
                    </div>
                </div> <!-- fim row-->
            </div> <!-- fim card-body -->
        </div> <!-- fim card -->
    </div> <!-- fim col -->

    <div class="col-lg-6 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-6">
                        <h5 class="text-muted fw-normal mt-0 text-truncate" title="Receita Reservada">Receita Reservada</h5>
                        <h3 class="my-2 py-1">$253k</h3>
                        <p class="mb-0 text-muted">
                            <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11,7%</span>
                        </p>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <div id="booked-revenue-chart" data-colors="#0acf97"></div>
                        </div>
                    </div>
                </div> <!-- fim row-->
            </div> <!-- fim card-body -->
        </div> <!-- fim card -->
    </div> <!-- fim col -->
</div>
<!-- fim row -->

<div class="row">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Hoje</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Ontem</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Última Semana</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Último Mês</a>
                    </div>
                </div>

                <h4 class="header-title mb-1">Estatistica</h4>

                <div id="dash-campaigns-chart" class="apex-charts" data-colors="#ffbc00,#727cf5,#0acf97"></div>

                <div class="row text-center mt-2">
                    <div class="col-md-4">
                        <i class="mdi mdi-send widget-icon rounded-circle bg-light-lighten text-muted"></i>
                        <h3 class="fw-normal mt-3">
                            <span>6.510</span>
                        </h3>
                        <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Total</p>
                    </div>
                    <div class="col-md-4">
                        <i class="mdi mdi-flag-variant widget-icon rounded-circle bg-light-lighten text-muted"></i>
                        <h3 class="fw-normal mt-3">
                            <span>3.487</span>
                        </h3>
                        <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Alcançados</p>
                    </div>
                    <div class="col-md-4">
                        <i class="mdi mdi-email-open widget-icon rounded-circle bg-light-lighten text-muted"></i>
                        <h3 class="fw-normal mt-3">
                            <span>1.568</span>
                        </h3>
                        <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Abertos</p>
                    </div>
                </div>
            </div>
            <!-- fim card body-->
        </div>
        <!-- fim card -->
    </div>
    <!-- fim col-->

    <div class="col-lg-7">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Hoje</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Ontem</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Última Semana</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Último Mês</a>
                    </div>
                </div>
                
                <h4 class="header-title mb-3">Receita</h4>

                <div class="chart-content-bg">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <p class="text-muted mb-0 mt-3">Mês Atual</p>
                            <h2 class="fw-normal mb-3">
                                <span>$42.025</span>
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted mb-0 mt-3">Mês Anterior</p>
                            <h2 class="fw-normal mb-3">
                                <span>$74.651</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div dir="ltr">
                    <div id="dash-revenue-chart" class="apex-charts" data-colors="#0acf97,#fa5c7c"></div>
                </div>

            </div>
            <!-- fim card body-->
        </div>
        <!-- fim card -->
    </div>
    <!-- fim col-->
</div>
<!-- fim row-->


<div class="row">
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-end">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Configurações</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Ação</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Melhores Performances</h4>

                <div class="table-responsive">
                    <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Usuário</th>
                                <th>Tarefas</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 fw-normal">venancio Sancho</h5>
                                    <span class="text-muted font-13">administrador</span>
                                </td>
                                <td>1</td>
                                <td class="table-action">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                               
                             
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- fim table-responsive-->

            </div> <!-- fim card-body-->
        </div> <!-- fim card-->
    </div>
    <!-- fim col- -->
</div>
<!-- fim row-->

            
                                  
 @endsection                                     
