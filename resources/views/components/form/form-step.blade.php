@props(['heading', 'step', 'goals'])

<div>
    <h3 class="mb-10 text-3xl text-center">{{ $heading }}</h3>
    @if ($this->step === 1)
        @foreach ($this->goals as $goal)
            <button wire:click.prevent="setGoal('{{ $goal->id }}')"
                class="p-6 m-3 bg-white/10 rounded-xl">{{ ucfirst($goal->label) }}</button>
        @endforeach
    @elseif ($this->step === 2)
        <div class="flex flex-col px-10 space-y-3">
            <input 
                wire:model='age'
                type="text" 
                placeholder="Age"
                class="px-2 py-3 bg-transparent border-none outline-none appearance-none rounded-xl" 
                required
                >
            <input 
                wire:model='initial_weight' 
                type="text" 
                placeholder="Weight (in Kg)"
                class="px-2 py-3 bg-transparent border-none outline-none appearance-none rounded-xl" 
                required
                >
        </div>
    @elseif ($this->step === 3)
            <input 
            wire:model='target_weight' 
            type="text" 
            placeholder="Target Weight (in Kg)"
            class="px-2 py-3 bg-transparent border-none outline-none appearance-none rounded-xl" 
            required
            >
    @endif
</div>
