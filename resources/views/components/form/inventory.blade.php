@wire('debounce.200ms')
<x-form-input name="name" label="Item Name" type="text" />

<x-form-input name="vendor_name" label="Vendor Name" type="text" />

<x-form-input name="invoice_number" label="Invoice Number" type="text" />

<x-form-input name="price" label="Price" type="text" />

<x-form-select name="payment_mode" label="Payment Mode" :options="$payment_mode" />

<x-form-input name="stock" label="Stock" type="number" />

<x-form-input name="defective" label="Defective" type="number" />

<x-form-input name="trashed" label="Trashed" type="number" />

<x-form-textarea name="description" label="Description" required />
@endwire
