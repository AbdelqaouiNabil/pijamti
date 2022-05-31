@extends('layouts.admin')

@section('body')
<div class="content-wrapper">
  @if (Session::get('noProduct'))
<div class="alert alert-success">
    {{Session::get('noProduct')}}
</div>
    
@endif
    <div class="row">
      <div class="col-sm-12">
        <div class="home-tab">
          <div class="d-sm-flex align-items-center justify-content-between border-bottom">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Aperçu</a>
              </li>
            </ul>
            <div>
              
            </div>
          </div>
          <div class="tab-content tab-content-basic">
            <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview"> 
              <div class="row">
                <div class="col-sm-12">
                  <div class="statistics-details d-flex align-items-center justify-content-between">
                    <div>
                      <p class="statistics-title">Produit mise en ligne </p>
                      <h3 class="rate-percentage">{{$productCount}} PROD</h3>       
                    </div>
                    <div>
                      <p class="statistics-title">Catégories mise en ligne</p>
                      <h3 class="rate-percentage">{{$categoriesCount}} CAT</h3>                    
                    </div>
                    <div>
                      <p class="statistics-title">Total Commandes</p>
                      <h3 class="rate-percentage">{{$orderCount}} CMD</h3>                     
                    </div>
                    <div class="d-none d-md-block">
                      <p class="statistics-title">Total Amount</p>
                      <h3 class="rate-percentage">{{$amount}} MAD</h3>         
                    </div>
                  </div>
                </div>
              </div> 
             
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row flex-grow">
      <div class="col-md-6 col-sm-12">

      <h3 class="p-3">{{ $chart1->options['chart_title'] }}</h3>
      {!! $chart1->renderHtml() !!}

      </div>
      <div class="col-md-6 col-sm-12">

        <h3 class="p-3">{{ $chart2->options['chart_title'] }}</h3>
        {!! $chart2->renderHtml() !!}
  
        </div>

        <div class="col-md-12 col-sm-12 mt-5">

          <h3 class="p-3">{{ $chart3->options['chart_title'] }}</h3>
          {!! $chart3->renderHtml() !!}
    
          </div>

    </div>
    {!! $chart1->renderChartJsLibrary() !!}
    {!! $chart1->renderJs() !!}
    {!! $chart2->renderChartJsLibrary() !!}
    {!! $chart2->renderJs() !!}
    {!! $chart3->renderChartJsLibrary() !!}
    {!! $chart3->renderJs() !!}
@endsection