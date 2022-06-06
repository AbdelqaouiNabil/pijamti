@extends('layouts.admin')
@section('body')
   <!-- partial -->
     
      
           @if ($contact->count() > 0)
           <div class="content-wrapper">
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
           <div class="card">
            <div class="card-body">
              <h4 class="card-title"> Messagerie :</h4>
              @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}

                    </div>
                        
                    @endif
                    @if (Session::get('sucess'))
                    <div class="alert alert-info">
                        {{Session::get('sucess')}}

                    </div>
                        
                    @endif
              <div class="table-responsive">
                <form action="{{route('delMessage')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger mb-5" id="deleteAllSelectedProducts">Supprimer</button>
                <table class="table">
                  <thead>
                    <tr>

                      <th><input type="checkbox" id="checkAll"></th>
                      <th>id</th>
                      <th>nom</th>
                      <th>email</th>
                      <th>telephone</th>
                      <th>sujet</th>
                      <th>Message</th>
                      
                  
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($contact as $contact)
                   <tr>
                    <td><input type="checkbox" name="delid[]" class="checkBoxClass" value="{{$contact->id}}"></td>

                    <td>{{$contact->id}}</td>
                    <td>{{$contact->nom}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->tel}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->message}}</td>
                            
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
              <div class="col-lg-12 m-auto">
                <h3 class="m-auto">Aucun message pour le momment</h3>
              </div>
              </div>
              </div>
           @endif
             
        <!-- content-wrapper ends -->
      
    
@endsection