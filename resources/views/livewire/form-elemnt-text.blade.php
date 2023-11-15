<div class="p-4 mx-auto max-w-md space-y-4">
    <label for="">Message</label>
    <input wire:model.lazy="message" type="text"  class=" block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">

<label for="">Input</label> {{ $message }}
</div>
