<div>
    Hello from livewire

    <br>

    {{strtoupper($name)}}

    <form action="#" wire:submit.prevent="resetname('Ronaldo')">

    <button> Reset Name </button>

    </form>


    <div>
        <input type="text" wire:model='name'>

        <input type="checkbox" wire:model='checkme'>

        @if($checkme)

        <p> I am checked </p>

        @endif

        <select wire:model='talk' multiple>

            <option> Goodbye </option>
            <option> See you again </option>
            <option> Have a nice day </option>

        </select>

        @if($talk)

        {{implode(',',$talk)}}

        @endif

    </div>

</div>
