@wire('debounce.200ms')
<x-form-input name="name" label="Name" type="text" />

<x-form-input name="subject" label="Subject" type="text" />

<x-form-textarea class="description" name="description" label="Description" />

<x-form-select name="status" label="Status" :options="Helper::getEnum('email_templates', 'status')" />
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
