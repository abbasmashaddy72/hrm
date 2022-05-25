@wire('debounce.200ms')
<x-form-select name="employee_id" label="Employee" :options="Helper::getKeyValues('Employee', 'name', 'id')" />

<x-form-select name="training_id" label="Training" :options="Helper::getKeyValues('Training', 'title', 'id')" />

<x-form-textarea name="feedback" label="Feedback" />

<x-form-select name="status" label="Status" :options="Helper::getEnum('employee_trainings', 'status')" />
@endwire
