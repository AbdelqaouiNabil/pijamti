@extends('layouts.admin')
@section('body')
   <!-- partial -->
     
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Nom de Categorie : {{$cat[0]->name}}</h4>
                  
                  <div class="table-responsive">
                    <form action="{{route('del')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger mb-5" id="deleteAllSelectedProducts">Supprimer</button>
                    <table class="table">
                      <thead>
                        <tr>

                          <th><input type="checkbox" id="checkAll"></th>
                          <th>id</th>
                          <th>nom</th>
                          <th>description</th>
                          <th>prix</th>
                          <th>prix barré</th>
                          <th>image principale</th>
                          <th>image effet</th>
                          <th>Les couleurs</th>
                          <th>Les Tailles</th>
                          <th> pijama special</th>
                          <th> Modifier Pijama</th>
                          <th> Modifier Prix</th>
                          <th> Modifier Les images</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($pijama as $pijama)
                       <tr>
                        <td><input type="checkbox" name="delid[]" class="checkBoxClass" value="{{$pijama->id}}"></td>

                        <td>{{$pijama->id}}</td>
                        <td>{{$pijama->name}}</td>
                        <td>{{$pijama->description}}</td>
                        <td>{{$pijama->price}}</td>
                        <td>{{$pijama->BarredPrice}}</td>
                        <td ><img src="{{Storage::disk('local')->url('images/'.$pijama->image)}}" alt="{{$pijama->image}}"></td>
                        <td ><img src="{{Storage::disk('local')->url('images/'.$pijama->imageHover)}}" alt="{{$pijama->imageHover}}"></td>
                     
                     
                        <td style="text-transform:capitalize">  
                           @foreach (json_decode($pijama->color, true) as $color)
                            {{$color}} -&nbsp
                           @endforeach
                            
                            </td>
                            <td style="text-transform:uppercase">  
                                @foreach (json_decode($pijama->size, true) as $size)
                                 {{$size}} -&nbsp
                                @endforeach
                                 
                                 </td>
                     
                        <td class="text-center">
                            @if ($pijama->special == 1)
                            <label class="badge badge-success"> Spécial </label>
                            @else
                            <label class="badge badge-success"> Non Spécial </label>
                            @endif
                        </td>
                        <td>
                          <a href="{{route('editPijama',['id'=>$pijama->id])}}" class="badge badge-warning">Modifier</a>
                        </td>
                        <td>
                          <a href="{{route('editPijamaPrice',['id'=>$pijama->id])}}" class="badge badge-warning">Modifier</a>
                        </td>
                        
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
        <!-- content-wrapper ends -->
      
    
@endsection