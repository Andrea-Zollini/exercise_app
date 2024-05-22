<?php

namespace App\Livewire;

use App\Models\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class Form extends Component
{
    public $disabled = true;
    public $step = 1;
    public $total_steps = 3;
    public $goals;
    public $selected_goal = null;
    public $age = '';
    public $height = '';
    public $initial_weight = '';
    public $target_weight = '';

    public function setGoal($id): Void
    {
        $this->selected_goal = $id;
        $this->step = 2;
    }

    public function mount(): Void
    {
        $this->goals = Goal::all();
    }


    public function previousStep(): Void
    {
        $this->step--;
    }

    public function nextStep(): Void
    {
        $this->step++;
    }

    public function submit()
    {
        $user = Auth::user();
        $user->goal_id = $this->selected_goal;
        $user->age = $this->age;
        $user->height = $this->height;
        $user->initial_weight = $this->initial_weight;
        $user->target_weight = $this->target_weight;
        $user->save();
        return redirect()->route('dashboard');
    }

    public function render(): View
    {
        $this->disabled = $this->step !== 1 ? false : true;
        return view('livewire.form');
    }
}
