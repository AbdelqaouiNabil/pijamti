@extends('layouts.admin')
@section('body')
   <!-- partial -->
     
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Liste des promo Code</h4>
                  
                  <div class="table-responsive">
                    <form action="{{route('del')}}" method="POST">
                        @csrf
                    <table class="table">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>Code</th>
                          <th>Value</th>
                          <th> supprimer</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach ($promo as $promo)
                       <tr>
                        <td><input type="checkbox" name="delid[]" class="checkBoxClass" value="{{$promo->id}}"></td>

                        <td>{{$promo->id}}</td>
                        <td>{{$promo->code}}</td>
                        <td>{{$promo->value}} %</td>
                     
                     
                        <td>
                        <a href="{{route('deletePromo',['id'=>$promo->id])}}" class="badge badge-danger">supprimer</a>
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