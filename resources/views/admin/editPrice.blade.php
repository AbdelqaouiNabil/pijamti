@extends('layouts.admin')
@section('body')
 <!-- partial -->
       
    <div class="content-wrapper" style="width: 100%">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Ajouter Produit</h4>
              <p class="card-description">
                Ajouter Une Nouvelle Pyjama
              </p>
              @if (Session::get('sucess'))
              <div class="alert alert-info">{{Session::get('sucess')}}</div>
                  
              @endif
              @if (Session::get('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  
              @endif
              <form action="{{route('editPrice',['id'=>$pijama->id])}}" method="POST" class="forms-sample">
              @csrf
               
                <div class="form-group">
                  <label for="Prix">Prix de produit</label>
                  <input type="text" class="form-control" name="prix" placeholder="Prix">
                  <span class="text-danger">@error('prix'){{$message}} @enderror</span>

                </div>
                <div class="form-group">
                  <label for="PrixBarre">Prix Barré</label>
                  <input type="text" class="form-control"  name="PrixBarre" placeholder="Prix Barré">
                  <span class="text-danger">@error('PrixBarre'){{$message}} @enderror</span>

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