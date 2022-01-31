<?php

namespace App\Http\Livewire\Form\Inventory;

use App\Models\Inventory;
use Livewire\Component;

class Edit extends Component
{
    public $inventory;

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

    public function submit()
    {
        $this->validate([
            'name' => 'required'
        ]);

        Inventory::where('id', $this->inventory)->update([
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
        return view('livewire.form.inventory.edit');
    }
}
