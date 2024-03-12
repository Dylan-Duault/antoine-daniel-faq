@props([
    'src' => '',
    'accept' => '*',
])

<div {!! $attributes->except(['wire:model']) !!} x-data="{
    fileUrl: '{{ $src }}',
    file: null,
    fileInput: null,
    initFileInput() {
        this.fileInput = this.$el.querySelector('input[type=file]')

        this.fileInput.addEventListener('change', () => {
            this.file = this.fileInput.files[0]
            this.fileUrl = URL.createObjectURL(this.file)
        })
    },
    destroyFileInput() {
        this.fileInput.removeEventListener('change')
    },
    remove() {
        if (!confirm('Are you sure?')) return

        this.fileUrl = ''
        this.file = null
        this.fileInput.value = ''

        this.$dispatch('removed')
    }
}" x-init="initFileInput" x-on:destroy.window="destroyFileInput">
    <div class="mb-2">
        {{-- Show the filename --}}
        <template x-if="file">
            <div class="text-sm text-gray-500 p-1 rounded-sm bg-gray-50 border border-gray-200 mb-1" x-text="file.name"></div>
        </template>

        {{-- File selector --}}
        <input style="display: none;" type="file" accept="{{ $accept }}" {!! $attributes->only([ 'wire:model']) !!}>

        {{-- Upload and remove buttons --}}
        <div>
            <button type="button" class="p-0.5 px-1 text-xs border border-gray-200 rounded hover:bg-gray-200" @click.stop="fileInput.click()">Upload</button>
            <button type="button" class="p-0.5 px-1 text-xs border border-gray-200 rounded hover:bg-gray-200" x-show="fileUrl" @click.stop="remove()">Remove</button>
        </div>
    </div>
</div>