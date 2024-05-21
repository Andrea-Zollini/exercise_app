<div class="p-8 bg-white/10 rounded-2xl">
    <form wire:submit="submit" class="flex flex-col">
        @if ($step === 1)
            Step 1
        @elseif ($step === 2)
            Step 2
        @elseif ($step === 3)
            Step 3
        @endif


        <div class="mt-10">
            @if ($step !== $total_steps)
            <button
                class="{{ $disabled ? 'opacity-50 pointer-events-none' : '' }} px-4 py-2 font-bold text-gray-200 transition-all bg-gray-600 rounded shadow-md hover:bg-gray-800"
                wire:click.prevent='previousStep'>
                Previous
            </button>
                <button class="px-4 py-2 font-bold text-gray-200 bg-gray-600 rounded shadow-md hover:bg-gray-800"
                    wire:click.prevent='nextStep'>
                    Next
                </button>
            @endif
            @if ($step === $total_steps)
                <button class="px-4 py-2 font-bold text-gray-200 bg-gray-600 rounded shadow-md hover:bg-gray-800"
                    type="submit">
                    Submit
                </button>
            @endif
        </div>
    </form>
</div>
