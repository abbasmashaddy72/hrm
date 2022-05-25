@wire('debounce.200ms')
<x-form-input name="name" label="Name" type="text" />

<x-form-input name="level" label="Level" type="number" />

<x-form-select name="status" label="Status" :options="Helper::getEnum('departments', 'status')" />
@endwire
