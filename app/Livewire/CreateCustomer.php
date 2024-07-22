<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\CustomerIndex;
use App\Models\Customers;

class CreateCustomer extends Component
{
    public $member_code='';
    public $phone='';
    public $password='';
    public $last_active_at='';
    
    public function save(){
        Customers::create([
            'member_code'=>$this->member_code,
            'phone'=>$this->phone,
            'password'=>$this->password,
            'last_active_at'=>$this->last_active_at,
        ]);
        return redirect()->to('/admin/customers');
    }
    public function render()
    {
        return view('livewire.create-customer',
        ['customers' => Customers::paginate(5),]
    );
    }
}
