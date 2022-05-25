@wire('debounce.200ms')
<x-form-select name="employee_id" label="Employee" :options="Helper::getKeyValues('Employee', 'name', 'id')" />

<x-form-input name="date" label="Date" type="date" />

<x-form-input name="clock_in" label="Clock In" type="time" />

<x-form-input name="clock_out" label="Clock Out" type="time" />

<x-form-input name="late" label="Late" type="number" />

<x-form-input name="early_leaving" label="Early Leaving" type="number" />

<x-form-input name="overtime" label="Overtime" type="number" />

<x-form-select name="status" label="Employee" :options="Helper::getEnum('attendances', 'status')" />
@endwire
