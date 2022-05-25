@wire('debounce.200ms')
<x-form-select name="employee_id" label="Employee" :options="Helper::getKeyValues('Employee', 'name', 'id')" />

<x-form-select name="inventory_id" label="Inventory" :options="Helper::getKeyValues('Inventory', 'name', 'id')" />

<x-form-textarea class="description" name="description" label="Description" />

<x-form-select name="status" label="Status" :options="Helper::getEnum('employee_inventories', 'status')" />
@endwire
