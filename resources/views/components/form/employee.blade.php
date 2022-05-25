@wire('debounce.200ms')
<x-form-input name="name" label="Name" type="text" />

<x-form-select name="gender" label="Gender" :options="Helper::getEnum('employees', 'gender')" />

<x-form-input name="phone" label="Phone No." type="number" />

<x-form-input name="email" label="Email Id" type="email" />

<x-form-input name="father_name" label="Father Name" type="text" />

<x-form-input name="mother_name" label="Mother Name" type="text" />

<x-form-input name="date_of_birth" label="Date of Birth" type="date" />

<x-form-textarea name="present_address" label="Present Address" />

<x-form-textarea name="permanent_address" label="Permanent Address" />

<x-form-input name="date_of_joining" label="Date of Joining" type="date" />

<x-form-input name="date_of_reliving" label="Date of Reliving" type="date" />

<x-form-select name="payment_type" label="Payment Type" :options="Helper::getEnum('employees', 'payment_type')" />

<x-form-input name="salary" label="Salary" type="number" />

<x-form-input name="bank_name" label="Bank Name" type="text" />

<x-form-input name="branch_name" label="Branch Name" type="text" />

<x-form-input name="account_number" label="Account No." type="text" />

<x-form-input name="ifsc_code" label="IFSC Code" type="text" />

<x-form-input name="pan_number" label="PAN Number" type="text" />

<x-form-input name="aadhaar_number" label="Aadhar Number" type="number" />

<x-form-select name="documents" label="Documents" :options="Helper::getEnum('employees', 'documents')" />

<x-form-select name="designation_id" label="Designation" :options="Helper::getKeyValues('Designation', 'name', 'id')" />

<x-form-select name="role_permission_id" label="Role & Permissions"
    :options="Helper::getKeyValues('Training', 'title', 'id')" />

<x-form-select name="status" label="Status" :options="Helper::getEnum('employees', 'status')" />
@endwire
