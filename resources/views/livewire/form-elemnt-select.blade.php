<div class="p-4 mx-auto max-x-md space-y-4"> 
    <div>
        <h2>T Shirt Size </h2>

        <select wire:model.lazy="size" >
            <option value="">Slect a Size </option>
            <option value="n" selected>none</option>
            <option value="s">small</option>
            <option value="m">Medium</option>
            <option value="l">Large</option>
        </select>
    </div>

    <div>Size :@json($size)</div>
    <div>
        <h2>Extra swag</h2>
        <select wire:model.lazy="extras" id="" multiple>
            <option value="bag">Bag</option>
            <option value="hat">Hat</option>
            <option value="mug">Mug</option>
            <option value="stickers"  >Stickers</option>
        </select>

        <div>Extras @json($extras)</div>
    </div>
</div>
