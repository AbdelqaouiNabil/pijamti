@extends('layouts.admin')
@section('body')
 <!-- partial -->
       
    <div class="content-wrapper" style="width: 100%">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Ajouter code promo</h4>
              <p class="card-description">
                Ajouter Un nouveau code promo
              </p>
              @if (Session::get('saved'))
              <div class="alert alert-info">{{Session::get('saved')}}</div>
                  
              @endif
              <form action="{{route('addPromo')}}" method="POST" class="forms-sample">
              @csrf
                <div class="form-group">
                  <label for="Nom">Nom de code promo</label>
                  <input type="text" class="form-control"  name="nom" placeholder="Nom">
                  <span class="text-danger">@error('nom'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="Prix">Valeur de code promo en %</label>
                  <input type="text" class="form-control" name="codeValue" placeholder="valeur en %">
                  <span class="text-danger">@error('codeValue'){{$message}} @enderror</span>

                </div>
         
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>


@endsection