<div class="p-8 bg-white/10 rounded-2xl">
    <form wire:submit.prevent="submit" class="flex flex-col">
        @if ($step === 1)
            <x-form.form-step heading="What's your goal?" step="{{$step}}" goals="{{$goals}}"/>
        @elseif ($step === 2)
            <x-form.form-step heading="Insert your age, height and weight" step="{{$step}}"/>
        @elseif ($step === 3)
            <x-form.form-step heading="What's your target weight?" step="{{$step}}"/>
        @endif


        <div class="flex justify-center mt-10 space-x-3">
            @if ($step !== $total_steps)
                <button
                    @if ($step === 1)
                        disabled
                    @endif
                    class="{{ $disabled ? 'opacity-50 pointer-events-none' : '' }} px-4 py-3 font-bold text-gray-200 transition duration-150 ease-out hover:ease-in bg-gray-600 rounded-full shadow-md hover:bg-gray-800"
                    wire:click.prevent='previousStep'>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="px-4 py-3 font-bold text-gray-200 transition duration-150 ease-out bg-gray-600 rounded-full shadow-md hover:ease-in hover:bg-gray-800"
                    wire:click.prevent='nextStep'>
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            @endif
            @if ($step === $total_steps)
                <button class="px-4 py-2 font-bold text-gray-200 transition duration-150 ease-out bg-gray-600 rounded shadow-md hover:ease-in hover:bg-gray-800"
                    type="submit">
                    Submit
                </button>
            @endif
        </div>
    </form>
</div>
