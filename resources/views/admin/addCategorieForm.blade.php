@extends('layouts.admin')
@section('body')
 <!-- partial -->
     
    <div class="content-wrapper" style="width: 100%" >
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Ajouter Categorie</h4>
              <p class="card-description">
                Ajouter Une Nouvelle Categorie
              </p>
              @if (Session::get('sucess'))
              <div class="alert alert-info">{{Session::get('sucess')}}</div>
                  
              @endif
              @if (Session::get('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  
              @endif
              <form action="{{route('addCategorie')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="Nom">Nom de Ctaegorie</label>
                  <input type="text" class="form-control"  name="nom" placeholder="Nom">
                  <span class="text-danger">@error('nom'){{$message}} @enderror</span>
                </div>
                
                <div class="form-group">
                    <label>Ajouter images </label>
                    <input type="file" class="custom-file-input" name="image">
                    <span class="text-danger">@error('image'){{$message}} @enderror</span>

                </div>
          
                <button type="submit" class="btn btn-primary me-2">AJOUTER</button>
               
              </form>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection