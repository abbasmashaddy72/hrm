@wire('debounce.200ms')
<x-form-select name="job_id" label="Job" :options="Helper::getKeyValues('Jobs', 'title', 'id')" />

<x-form-input name="name" label="Name" type="text" />

<x-form-input name="email" label="Email Id" type="email" />

<x-form-input name="phone" label="Phone No." type="number" />

<x-form-textarea name="about" label="About" />

<x-form-select name="status" label="Status" :options="Helper::getEnum('job_applicants', 'status')" />
@endwire
