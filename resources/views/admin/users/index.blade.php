@extends('main')
@section('content')
 <div class="content-body">
 <div class="container-fluid">

    

    <div id="carouselExampleCaption" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{('assets/images/small/PE2.jpg') }}" alt="..." class="d-block img-fluid">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="#ff0000"></h3>
                    <p>Sua única preocupação vai ser qual prato escolher.</p>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{('assets/images/small/RE1.jpg') }}" alt="..." class="d-block img-fluid">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-white"></h3>
                    <p>Momentos especiais devem ser comemorados em lugares especiais.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{('assets/images/small/PE3.jpg') }}" alt="..." class="d-block img-fluid">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-white"></h3>
                    <p>Aqui temos o melhor atendimento.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
      

 @endsection