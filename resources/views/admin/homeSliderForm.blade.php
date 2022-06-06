@extends('layouts.admin')
@section('body')
 <!-- partial -->
       
    <div class="content-wrapper" style="width: 100%">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Ajouter nouveau banner</h4>
              @if (Session::get('sucess'))
              <div class="alert alert-info">{{Session::get('sucess')}}</div>
                  
              @endif
              @if (Session::get('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  
              @endif
              <form action="{{route('addSlider')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="Nom">Titre 1</label>
                  <input type="text" class="form-control"  name="firstTitre" placeholder="ajouter titre 1">
                  <span class="text-danger">@error('firstTitre'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="Nom">Titre 2</label>
                    <input type="text" class="form-control"  name="secondeTitre" placeholder="ajouter titre 2">
                    <span class="text-danger">@error('secondeTitre'){{$message}} @enderror</span>
                  </div>           
                <div class="form-group">
                  <label>Ajouter Nouveau banner (size: 950 x 470)</label>
                  <input type="file" class="custom-file-input" name="slider">
                  <span class="text-danger">@error('slider'){{$message}} @enderror</span>

                </div>
               
              
               
                <button type="submit" class="btn btn-primary me-2">Submit</button>         
              </form>
            </div>
          </div>
        </div>
    </div>
</div>


@endsection