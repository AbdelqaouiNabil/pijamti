@extends('layouts.admin')
@section('body')
 <!-- partial -->
 <div class="main-panel">        
    <div class="content-wrapper" style="width: 100%" >
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
              <form action="{{route('addProduct')}}" method="POST" class="forms-sample" enctype="multipart/form-data">
              @csrf
                <div class="form-group">
                  <label for="Nom">Nom de produit</label>
                  <input type="text" class="form-control"  name="nom" placeholder="Nom">
                  <span class="text-danger">@error('nom'){{$message}} @enderror</span>
                </div>
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
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description" placeholder="description">
                  <span class="text-danger">@error('description'){{$message}} @enderror</span>

                </div>
                <div class="form-group">
                  <label for="colors">Couleurs</label><br>
                    @foreach ($colors as $color)
                      <input class="form-check-input" type="checkbox"  name="checkColor[]" value="{{$color->value}}">
                      <label class="form-check-label" for="flexCheckDefault">
                        {{$color->value}}
                      </label>
                    @endforeach
                    <br>
                    <span class="text-danger">@error('checkColor'){{$message}} @enderror</span>

                </div>
                <div class="form-group">
                  <label for="colors">Sizes</label><br>
                    @foreach ($sizes as $size)
                      <input class="form-check-input" type="checkbox"  name="checkSize[]" value="{{$size->value}}">
                      <label class="form-check-label" for="flexCheckDefault">
                        {{$size->value}}
                      </label>
                    @endforeach
                    <br>
                    <span class="text-danger">@error('checkSize'){{$message}} @enderror</span>

                </div>

    
                <div class="form-group">
                    <label>Ajouter images principale</label>
                    <input type="file" class="custom-file-input" name="image">
                    <span class="text-danger">@error('image'){{$message}} @enderror</span>

                </div>
                <div class="form-group">
                  <label>Ajouter images On Hover</label>
                  <input type="file" class="custom-file-input" name="imageHover">
                  <span class="text-danger">@error('imageHover'){{$message}} @enderror</span>

                </div>
                 <div class="form-group">
                  <label>Categorie de pijama :</label>
                   <select name="categorie">
                  @foreach ($categorie as $cat)
                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                
                  @endforeach
                </select>
           
                </div>
                <div class="form-group">
                  <label for="colors">Spécial Pijama</label><br>
                 
                      <input class="form-check-input" type="checkbox"  name="special" value="1">
                      <label class="form-check-label" for="flexCheckDefault">Spécial Pijama</label>
                  
                    <br>
                    <span class="text-danger">@error('special'){{$message}} @enderror</span>

                </div>
                <div class="form-group">
                  <label>Tags:</label>
                  <br/>
                  <input data-role="tagsinput" type="text" name="tags" class="form-control">
                  <span class="text-danger">@error('tags'){{$message}} @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button type="reset" class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
</div>

@endsection