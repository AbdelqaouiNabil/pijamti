<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Checkout extends Component
{
    public $amount;
    public $ville;
    public $livraison;
     

    public function mount(){
    
       $this->livraison = $this->calculLivraison($this->ville);
    }

    public function render()
    {
        return view('livewire.checkout');
    }

  private function calculLivraison($ville){

             if($ville == "Casa"){
                 return  45 ;
             }else{
                 return 0;
             }
   }
 }
