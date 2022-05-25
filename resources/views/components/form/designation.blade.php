@wire('debounce.200ms')
<x-form-input name="name" label="Name" type="text" />

<x-form-select name="department_id" label="Department Name"
    :options="Helper::getKeyValues('Designation','name','id')" />

<x-form-select name="role_permission_id" label="Role Name"
    :options="Helper::getKeyValues('RolePermissions','name','id')" />

<x-form-select name="status" label="Status" :options="Helper::getEnum('designations', 'status')" />
@endwire
