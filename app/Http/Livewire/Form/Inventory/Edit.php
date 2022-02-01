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

        Inventory::where('id', $this->inventory)->update($validatedData);

        return $this->redirectRoute('inventory.index');
    }

    public function render()
    {
        return view('livewire.form.inventory.edit');
    }
}
