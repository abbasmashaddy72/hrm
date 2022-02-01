<?php

namespace App\Http\Livewire\Form\Inventory;

use App\Models\Inventory;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $vendor_name;
    public $invoice_number;
    public $price;
    public $payment_mode;
    public $stock;
    public $defective;
    public $trashed;
    public $description;

    protected $rules = [
        'name' => '',
        'vendor_name' => '',
        'invoice_number' => '',
        'price' => '',
        'payment_mode' => '',
        'stock' => '',
        'defective' => '',
        'trashed' => '',
        'description' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Inventory::create($validatedData);

        return $this->redirectRoute('inventory.index');
    }

    public function render()
    {
        return view('livewire.form.inventory.create');
    }
}
