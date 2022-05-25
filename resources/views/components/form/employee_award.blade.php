@wire('debounce.200ms')
<x-form-select name="employee_id" label="Employee" :options="Helper::getKeyValues('Employee', 'name', 'id')" />

<x-form-select name="award_id" label="Award" :options="Helper::getKeyValues('Award', 'name', 'id')" />
@endwire
