<?php

namespace App\Livewire;
use App\Models\Customers;

use Livewire\Component;
use App\Livewire\CreateCustomer;

class CustomerIndex extends Component
{
   
    public $phone='';
    public $member_code='';
    public $showCustomerModal=false;
    public function render()
    {
        return view('livewire.customer-index',
        ['customers' => Customers::paginate(),]
    );
    }
    public function save(){
        
        Customers::create([
            'member_code'=>$this->member_code,
            'phone'=>$this->phone,
            'password'=>$this->password,
            'last_active_at'=>$this->last_active_at,
        ]);
    }

    public function delete($customerId)
    {
        Customers::find($customerId)->delete();
        return redirect()->to('/admin/customers');
    }

    public function showCreateCustomer(){
        return redirect()->to('/admin/user');
    }
    
}
