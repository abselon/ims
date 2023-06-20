<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddCategory extends Component
{
    
    use LivewireAlert;
    public $name, $description;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'description' => 'required',
            'name' => 'required',
        ]);
    }


    public function storeCategory()
    {
        $this->validate([
            'description' => 'required',
            'name' => 'required',
        ]);


        $category = new Category();


        $category->description = $this->description;
        $category->name = $this->name;


        $category->save();


        $this->toast('Added', 'success', 'Category Added');


        $this->description = '';
        $this->name = '';
    }


    public function render()
    {
        return view('livewire.categorymodal');
    }

    public function toast($heading, $type, $text )
    {
        $this->alert($type, $heading, [
            'position' =>  'top-end',
            'timer' =>  '3000',
            'toast' =>  true,
            'text' =>  $text,
        ]);
    }
}
