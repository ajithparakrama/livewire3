<div>
    {{-- Do your work, then step back. --}}
    <div>
        <label for="" class="flex">
            <input type="checkbox" wire:model.lazy="showEmail" value="show" id="">
            Show email on profile</label>
    </div>

    <br/> Email : 
    {{ var_export($showEmail) }}
    <br/>

    <div>
        <h1>Grouped checkbox</h1>

        <label for="Cording"> <input type="checkbox" wire:model.lazy="hobies" value="Cording" id="Cording" >Cording</label>
       <br/> <label for="Sailing"> <input type="checkbox" wire:model.lazy="hobies" value="Sailing" id="">Sailing</label>
    <br/>    <label for="Camping"> <input type="checkbox" wire:model.lazy="hobies" value="Camping" id="">Camping</label>
    </div>

    {{ var_export($hobies) }}
</div>
