@extends('layouts.admin')
@section('body')
   <!-- partial -->
     
        @if($slider->count() > 0)
        <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Acceuil Banners</h4>
                    
                    <div class="table-responsive">
                      <form action="{{route('delBanners')}}" method="POST">
                          @csrf
                          <button type="submit" class="btn btn-danger mb-5" id="deleteAllSelectedProducts">Supprimer</button>
                      <table class="table">
                        <thead>
                          <tr>
                            <th><input type="checkbox" id="checkAll"></th>
                            <th>id</th>
                            <th>banner</th>
                            <th>titre 1</th>
                            <th>sous titre</th>                      
                          </tr>
                        </thead>
                        <tbody>
                         @foreach ($slider as $slider)
                         <tr>
                          <td><input type="checkbox" name="delid[]" class="checkBoxClass" value="{{$slider->id}}"></td>                      
                          <td ><img src="{{Storage::disk('local')->url('images/slider'.$slider->slider)}}" alt="{{$slider->slider}}"></td>
                          <td>{{$slider->id}}</td>
                          <td>{{$slider->header}}</td>
                          <td>{{$slider->miniHeader}}</td>
                        </tr>
                             
                         @endforeach
  
                        </tbody>
                      </table>
                  </form>
                    </div>
                  </div>
                </div>
              </div>
              
          </div>



        @else
        <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body m-auto">
                    <h2 class="card-title">Aucune Banner à supprimer </h2>
                    
                    
                    </div>
                  </div>
                </div>
              </div>
              
          </div>
        @endif
        <!-- content-wrapper ends -->
      
    
@endsection