<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Student;

use Livewire\WithFileUploads;

class StoreStudent extends Component
{
    use WithFileUploads;

    public $name;

    public $email;

    public $image;

    public $imageup;

    public $s_id;

    public $update=false;

    public function render()
    {
        return view('livewire.store-student');
    }

    public function savedata()
    {
        $student=new student;

        $student->name=$this->name;

        $student->email=$this->email;

        $imagename=$this->image->store('photos','public');

        $student->image=$imagename;


        $student->save();

        $this->resetdata();

    }

    public function resetdata()
    {
        $this->reset(['name','email']);
    }

    public function mount()
    {
        $this->student=student::all();
    }

    public function deletestudent($id)
    {
        $data=student::find($id);

        $data->delete();

        $this->mount();
    }

    public function updatestudent($id)
    {
        $student=student::find($id);

        $this->s_id=$student->id;

        $this->name=$student->name;

        $this->email=$student->email;

        $this->image=$student->image;

        $this->update=true;
    }

    public function updata()
    {
        $data=student::find($this->s_id);

        $data->name=$this->name;

        $data->email=$this->email;

        if($this->imageup)
        {
            $imagename=$this->imageup->store('photos','public');

            $data->image=$imagename;
        }

        $data->save();

        $this->imageup='';

        $this->mount();

        $this->update=false;

        $this->resetdata();
    }
}
