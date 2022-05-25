@wire('debounce.200ms')
<x-form-input name="title" label="Title" type="text" />

<x-form-input name="position" label="Position" type="text" />

<x-form-select name="type" label="Type" :options="Helper::getEnum('jobs', 'type')" />

<x-form-input name="experience" label="Experience" type="number" />

<x-form-input name="location" label="Location" type="text" />

<x-form-input name="salary_range" label="Salary Range" type="text" />

<x-form-textarea name="short_description" label="Short Description" />

<x-form-textarea class="description" name="description" label="Description" />

<x-form-input name="apply_date" label="Apply Date" type="date" />

<x-form-input name="close_date" label="Close Date" type="date" />

<x-form-select name="status" label="Status" :options="Helper::getEnum('jobs', 'status')" />
@endwire
@push('scripts')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea.description',
            width: 900,
            height: 300
        });
    </script>
@endpush
