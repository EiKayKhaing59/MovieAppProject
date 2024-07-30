<?php

namespace App\Livewire\Customer;

use App\Models\Customers;

use Livewire\Component;

class CustomerIndex extends Component
{
    public $phone = '';
    public $member_code = '';
    public $showCustomerModal = false;
    public $customerId='';
    public function render()
    {
        return view(
            'livewire.customer.customer-index',
            ['customers' => Customers::paginate(),]
        );
    }
    public function save()
    {
        Customers::create([
            'member_code' => $this->member_code,
            'phone' => $this->phone,
            'password' => $this->password,
            'last_active_at' => $this->last_active_at,
        ]);
        $this->resetForm();
    }
    public function showeditModal($customerId){
        $this->customerId->$customerId;
        $cus=Customers::find($customerId);
        $this->member_code=$cus->member_code;
        return redirect()->to('/admin/customer-edit/{customerId}');
    }
    public function delete($customerId)
    {
        Customers::find($customerId)->delete();
        return redirect()->to('/admin/customers');
    }
    public function showCreateCustomer()
    {
        return redirect()->to('/admin/create-customer');
    }
}
