<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Livewire\Component;

class Form extends Component
{
    public $disabled = true;
    public $step = 1;
    public $total_steps = 3;


    public function previousStep(): Void
    {
        $this->step--;
    }

    public function nextStep(): Void
    {
        $this->step++;
    }

    public function submit(Request $request): Void
    {
        dd($request);
    }

    public function render(): View
    {
        $this->disabled = $this->step !== 1 ? false : true;
        return view('livewire.form');
    }
}
