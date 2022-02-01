<?php

namespace App\Http\Livewire\Form\Task;

use App\Models\Task;
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

        Task::create($validatedData);

        return $this->redirectRoute('task.index');
    }

    public function render()
    {
        return view('livewire.form.task.create');
    }
}
