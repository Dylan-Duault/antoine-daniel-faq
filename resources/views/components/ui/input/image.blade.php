@props([
    'src' => '',
    'accept' => 'image/*',
])

<div {!! $attributes->except(['wire:model']) !!} x-data="{
    imageUrl: '{{ $src }}',
    imageFile: null,
    imageInput: null,
    initFileInput() {
        this.imageInput = this.$el.querySelector('input[type=file]')

        this.imageInput.addEventListener('change', () => {
            this.imageFile = this.imageInput.files[0]
            this.imageUrl = URL.createObjectURL(this.imageFile)
        })
    },
    destroyFileInput() {
        this.imageInput.removeEventListener('change')
    },
    remove() {
        if (!confirm('Are you sure?')) return

        this.imageUrl = ''
        this.imageFile = null
        this.imageInput.value = ''

        this.$dispatch('removed')
    }
}" x-init="initFileInput" x-on:destroy.window="destroyFileInput">
    <div class="mb-2">

        {{-- Show the image --}}
        <template x-if="imageUrl">
            <img @click.stop="imageInput.click()" :src="imageUrl" class="object-cover rounded border border-gray-200 w-36 h-36 cursor-pointer bg-gray-50 hover:opacity-75 transition duration-100 ease-in-out">
        </template>

        {{-- Show the gray box when image is not available --}}
        <template x-if="!imageUrl">
            <div @click.stop="imageInput.click()" class="object-cover rounded border border-gray-200 w-36 h-36 cursor-pointer bg-gray-50 hover:opacity-75 transition duration-100 ease-in-out"></div>
        </template>

        {{-- Image file selector --}}
        <input style="display: none;" type="file" accept="{{ $accept }}" {!! $attributes->only([ 'wire:model']) !!}>

        {{-- Upload and remove buttons --}}
        <div>
            <button type="button" class="p-0.5 px-1 text-xs border border-gray-200 rounded hover:bg-gray-200" @click.stop="imageInput.click()">Upload</button>
            <button type="button" class="p-0.5 px-1 text-xs border border-gray-200 rounded hover:bg-gray-200" x-show="imageUrl" @click.stop="remove()">Remove</button>
        </div>
    </div>
</div>