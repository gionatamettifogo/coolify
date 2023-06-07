<div>
    <h1>Create a new Server</h1>
    <div class="pb-5 text-sm breadcrumbs">
        <ul>
            <li>
                Servers are the main blocks of your infrastructure.
            </li>
        </ul>
    </div>
    <form class="flex flex-col gap-2" wire:submit.prevent='submit'>
        <div class="flex gap-2">
            <x-forms.input id="name" label="Name" required />
            <x-forms.input id="description" label="Description" />
        </div>
        <div class="flex gap-2">
            <x-forms.input id="ip" label="IP Address" required
                helper="Could be IP Address (127.0.0.1) or Domain Name (duckduckgo.com)." />
            <x-forms.input id="user" label="User" required />
            <x-forms.input type="number" id="port" label="Port" required />
        </div>
        <x-forms.select label="Private Key" wire:model.defer="private_key_id">
            <option disabled>Select a private key</option>
            @foreach ($private_keys as $key)
                @if ($loop->first)
                    <option selected value="{{ $key->id }}">{{ $key->name }}</option>
                @else
                    <option value="{{ $key->id }}">{{ $key->name }}</option>
                @endif
            @endforeach
        </x-forms.select>
        <x-forms.checkbox class="pb-8" disabled instantSave noDirty id="is_part_of_swarm"
            label="Is it part of a Swarm cluster?" />
        <x-forms.button type="submit">
            Save Server
        </x-forms.button>
    </form>
</div>