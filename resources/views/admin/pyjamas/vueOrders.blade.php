@extends('layouts.admin')
@section('body')
   <!-- partial -->
     
        @if($orders->count() > 0)
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Liste des Cammandes </h4>
                  
                  <div class="table-responsive">
                    <form action="{{route('delMultipleOrder')}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger mb-5" id="deleteAllSelectedProducts">Supprimer</button>
                    <table class="table">
                      <thead>
                        <tr>

                          <th><input type="checkbox" id="checkAll"></th>
                          <th>id</th>
                          <th>nom</th>
                          <th>tel</th>
                          <th>ville</th>
                          <th>adress</th>
                          <th>Nom De produit</th>
                          <th>size</th>
                          <th>color</th>
  <th>prix</th>
  <th>Quantity</th>
  <th>subtotal</th>
  <th>promo value</th>
  <th>livraison</th>
  <th>Total</th>
  <th>Supprimer</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $order)
                       <tr>
                        <td><input type="checkbox" name="delid[]" class="checkBoxClass" value="{{$order->id}}"></td>

                        <td>{{$order->id}}</td>
                        <td>{{$order->nom}}</td>
                        <td>{{$order->tel}}</td>
                        <td>{{$order->adress}}</td>
                        <td>{{$order->city}}</td>
                        
                        <td> @foreach ($items as $item)
                          @if ($item->orderId == $order->id)
                          {{$item->productName}} <br> <hr>
                          @endif
                         
                          
                          @endforeach</td>
                          <td> @foreach ($items as $item)
                            @if ($item->orderId == $order->id)
                            {{$item->color}} <br> <hr>
                            @endif
                           
                            
                            @endforeach</td>
                     
                            <td> @foreach ($items as $item)
                              @if ($item->orderId == $order->id)
                              {{$item->size}} <br> <hr>
                              @endif
                             
                              
                              @endforeach</td>

                              <td> @foreach ($items as $item)
                                @if ($item->orderId == $order->id)
                                {{$item->price}} <br> <hr>
                                @endif
                               
                                
                                @endforeach</td>

                                <td> @foreach ($items as $item)
                                  @if ($item->orderId == $order->id)
                                  {{$item->qty}} <br> <hr>
                                  @endif
                                 
                                  
                                  @endforeach</td>

                                  <td> @foreach ($items as $item)
                                    @if ($item->orderId == $order->id)
                                    {{$item->subtotal}} dh <br> <hr>
                                    @endif
                                    @endforeach</td>

                                    <td> 


                                      @foreach ($items as $item)
                                      @if ($item->orderId == $order->id)
                                        @if ($item->codepromo)
                                        {{$item->codepromo}} %<br>
                                        @break
                                        @else
                                            0 %<br>
                                        @endif
                                        @endif
                                        
                                        @endforeach
                                    </td>
                                       
                                    <td> 


                                      @foreach ($items as $item)
                                      @if ($item->orderId == $order->id)
                                        {{$item->livraison}} dh<br>
                                        @break
                                        @endif
                                        
                                        @endforeach
                                    </td>
                                    <td> 


                                      @foreach ($items as $item)
                                      @if ($item->orderId == $order->id)
                                        {{$item->total}} dh<br>
                                        @break
                                        @endif
                                        
                                        @endforeach
                                    </td>
                                    <td><a href="{{route('removeorder',['id'=> $order->id ])}}" class="btn btn-danger">Supprimer</a></td>  


                           
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
        @else
        <div class="m-auto">
          <h3 class="text-center "> Pas de commande pour le momment</h3>
        </div>
        @endif
      
    
@endsection