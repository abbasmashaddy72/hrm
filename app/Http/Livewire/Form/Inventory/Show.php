<?php

namespace App\Http\Livewire\Form\Inventory;

use App\Models\Inventory;
use Livewire\Component;

class Show extends Component
{
    public $inventory;

    public $data_id;
    public $name;
    public $vendor_name;
    public $invoice_number;
    public $price;
    public $payment_mode;
    public $stock;
    public $defective;
    public $trashed;
    public $description;

    public function mount($inventory)
    {
        $data = Inventory::findOrFail($inventory);
        $this->data_id = $data->id;
        $this->name = $data->name;
        $this->vendor_name = $data->vendor_name;
        $this->invoice_number = $data->invoice_number;
        $this->price = $data->price;
        $this->payment_mode = $data->payment_mode;
        $this->stock = $data->stock;
        $this->defective = $data->defective;
        $this->trashed = $data->trashed;
        $this->description = $data->description;
    }

    public function render()
    {
        return view('livewire.form.inventory.show');
    }
}
