@props(['id', 'name', 'value' => ''])

<input
    type="hidden"
    name="{{ $name }}"
    id="{{ $id }}_input"
    value="{{ $value }}"
/>

<trix-toolbar
    class="[&_.trix-button]:bg-white [&_.trix-button.trix-active]:bg-gray-300"
    id="{{ $id }}_toolbar"
></trix-toolbar>

<trix-editor
    id="{{ $id }}"
    toolbar="{{ $id }}_toolbar"
    input="{{ $id }}_input"
    {{ $attributes->merge(['class' => 'trix-content bg-white border-white dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:ring-1 focus:border-indigo-100 dark:focus:border-indigo-600 focus:ring-indigo-300 dark:focus:ring-indigo-600 rounded-md shadow-sm dark:[&_pre]:!bg-gray-700 dark:[&_pre]:rounded dark:[&_pre]:!text-white']) }}
    x-data="{
        upload(event) {
            const data = new FormData();
            data.append('attachment', event.attachment.file);
            window.axios.post('{{ route('admin.attachment.store') }}', data, {
                onUploadProgress(progressEvent) {
                    event.attachment.setUploadProgress(progressEvent.loaded / progressEvent.total * 100);
                }
            }).then(({ data }) => {
                event.attachment.setAttributes({
                    url: data.image_url,
                });
            });
        },
    }"
    x-on:trix-attachment-add="upload(event)"
></trix-editor>
