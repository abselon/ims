<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategorymodel;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Subcategory extends Component
{
    use LivewireAlert;
    public $categories;
    public $name, $description, $categories_id;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'description' => 'required',
            'name' => 'required',
        ]);
    }

    public function storeSubcategory()
{
    $this->validate([
        'description' => 'required',
        'name' => 'required',
        'categories_id' => 'required|exists:categories,id', // ensure the category exists
    ]);

    $subcategory = new Subcategorymodel();

    $subcategory->description = $this->description;
    $subcategory->name = $this->name;
    $subcategory->categories_id = $this->categories_id; // assign the category id

    $subcategory->save();

    $this->toast('Added', 'success', 'Subcategory Added');

    $this->description = '';
    $this->name = '';
    $this->categories_id = null; // reset the category id

    // $this->dispatchBrowserEvent('close-model');
}


    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        $subcategories = Subcategorymodel::all();
        return view('livewire.subcategory', ['subcategories'=>$subcategories]);
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
