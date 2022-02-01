<?php

namespace App\Http\Livewire\Form\Task;

use Livewire\Component;

class Create extends Component
{
    public $employee_id;
    public $name;
    public $start_date;
    public $due_date;
    public $estimated_hour;
    public $description;
    public $progress;
    public $status;

    public function submit()
    {
        return $this->redirectRoute('task.index');
    }

    public function render()
    {
        return view('livewire.form.task.create');
    }
}
