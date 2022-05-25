@wire('debounce.200ms')
<x-form-input name="title" label="Title" type="text" />

<x-form-textarea name="description" label="Description" />

<x-form-input name="start_date" label="Start Date" type="date" />

<x-form-input name="end_date" label="End Date" type="date" />

<x-form-select name="assigned_by" label="Employee" :options="Helper::getKeyValues('Employee', 'name', 'id')" />
@endwire
