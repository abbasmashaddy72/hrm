<?php

namespace App\Http\Livewire\Form\Task;

use App\Models\Task;
use Livewire\Component;

class Edit extends Component
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

    protected $rules = [
        'employee_id' => '',
        'name' => '',
        'start_date' => '',
        'due_date' => '',
        'estimated_hour' => '',
        'description' => '',
        'progress' => '',
        'status' => '',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $validatedData = $this->validate();

        Task::where('id', $this->task)->update($validatedData);

        return $this->redirectRoute('task.index');
    }

    public function render()
    {
        return view('livewire.form.task.edit');
    }
}
