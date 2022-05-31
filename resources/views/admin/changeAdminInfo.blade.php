@extends('layouts.admin')
@section('body')
 <!-- partial -->
       
    <div class="content-wrapper" style="width: 100%">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Changer Admin Info</h4>
              <p class="card-description">
                Ajouter des nouvelles Information
              </p>
              @if (Session::get('sucess'))
              <div class="alert alert-info">{{Session::get('sucess')}}</div>
                  
              @endif
              @if (Session::get('fail'))
              <div class="alert alert-danger">{{Session::get('fail')}}</div>
                  
              @endif
              <form action="{{route('changeAdminInfo')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="Nom">Nom de produit</label>
                  <input type="text" class="form-control"  name="username" placeholder="Nom d'utilisateur">
                  <span class="text-danger">@error('username'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                  <label for="password">Mot de Passe</label>
                  <input type="text" class="form-control" name="password" placeholder="Prix">
                  <span class="text-danger">@error('password'){{$message}} @enderror</span>

                </div>
        
                <div class="form-group">
                    <label>Ajouter photo de profile</label>
                    <input type="file" class="custom-file-input" name="image">

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