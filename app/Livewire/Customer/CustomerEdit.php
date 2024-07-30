<?php

namespace App\Livewire\Customer;

use Livewire\Component;
use App\Models\Customers;
class CustomerEdit extends Component
{
    public $phone = '';
    public $member_code = '';
    public $password = '';
    public $last_active_at = '';
    public $customerId;

    public function mount($customerId)
    {
        $this->customerId = $customerId;
        $customer = Customers::find($customerId);
        $this->member_code = $customer->member_code;
        $this->phone = $customer->phone;
        $this->password = $customer->password;
        $this->last_active_at = $customer->last_active_at;
    }

    public function save()
    {
        $customer = Customers::find($this->customerId);
        $customer->update([
            'member_code' => $this->member_code,
            'phone' => $this->phone,
            'password' => $this->password,
            'last_active_at' => $this->last_active_at,
        ]);

        return redirect()->to('/admin/customers');
    }
    public function render()
    {
        return view('livewire.customer.customer-edit');
    }
}


    