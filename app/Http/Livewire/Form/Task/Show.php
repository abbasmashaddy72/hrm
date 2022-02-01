<?php

namespace App\Http\Livewire\Form\Task;

use App\Models\Task;
use Livewire\Component;

class Show extends Component
{
    public $task;

    public $employee_id;
    public $name;
    public $start_date;
    public $due_date;
    public $estimated_hour;
    public $description;
    public $progress;
    public $status;

    public function mount($task)
    {
        $data = Task::findOrFail($task);
        $this->employee_id = $data->employee_id;
        $this->name = $data->name;
        $this->start_date = $data->start_date;
        $this->due_date = $data->due_date;
        $this->estimated_hour = $data->estimated_hour;
        $this->description = $data->description;
        $this->progress = $data->progress;
        $this->status = $data->status;
    }

    public function render()
    {
        return view('livewire.form.task.show');
    }
}
