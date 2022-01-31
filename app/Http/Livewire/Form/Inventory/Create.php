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

    public function submit()
    {
        $this->validate([
            'name' => 'required'
        ]);

        Inventory::create([
            'name' => $this->name,
            'vendor_name' => $this->vendor_name,
            'invoice_number' => $this->invoice_number,
            'price' => $this->price,
            'payment_mode' => $this->payment_mode,
            'stock' => $this->stock,
            'defective' => $this->defective,
            'trashed' => $this->trashed,
            'description' => $this->description,
        ]);

        return $this->redirectRoute('inventory.index');
    }

    public function render()
    {
        return view('livewire.form.inventory.create');
    }
}
