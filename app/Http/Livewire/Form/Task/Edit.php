<?php

namespace App\Http\Livewire\Form\Task;

use Livewire\Component;

class Edit extends Component
{
    public $employee_id;
    public $task;
    public $start_date;
    public $due_date;
    public $estimated_hour;
    public $description;
    public $progress;
    public $status;

    public function mount()
    {
        //
    }

    public function submit()
    {
        return $this->redirectRoute('');
    }

    public function render()
    {
        return view('livewire.form.task.edit');
    }
}
