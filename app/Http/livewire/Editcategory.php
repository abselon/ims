<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Editcategory extends Component
{
    //use LivewireAlert;
    // public $id, $name, $description, $category_edit_id;


    // public function mount($id)
    // {
    //     $category = Category::where('id', $id)->first();


    //     $this->id = $category->id;
    //     $this->name = $category->name;
    //     $this->description = $category->description;

    //     $this->category_edit_id = $category->id;
    // }


    // public function updated($fields)
    // {
    //     $this->validateOnly($fields, [
    //         // 'id' => 'required|unique:categories,id,'.$this->category_edit_id.'',
    //         'name' => 'required',
    //         'description' => 'required|text|unique:categories,description,'.$this->category_edit_id.'',
    //     ]);
    // }


    // public function updateCategory()
    // {
    //     $this->validate([
    //         // 'id' => 'required|unique:categories,id,'.$this->category_edit_id.'',
    //         'name' => 'required',
    //         'description' => 'required|text|unique:categories,description,'.$this->category_edit_id.'',
    //     ]);


    //     $category = Category::where('id', $this->category_edit_id)->first();


    //     // $category->id = $this->id;
    //     $category->name = $this->name;
    //     $category->description = $this->description;

    //     $category->save();


    //     $this->toast('Success', 'success', 'Category Edited');
    // }


    // public function render()
    // {
    //     return view('livewire.editcategory');
    // }

    // public function toast($heading, $type, $text )
    // {
    //     $this->alert($type, $heading, [
    //         'position' =>  'top-end',
    //         'timer' =>  '3000',
    //         'toast' =>  true,
    //         'text' =>  $text,
    //     ]);
    // }
    use LivewireAlert;
    public $name, $description, $category_edit_id;

    public function mount($id)
    {
        $category = Category::where('id', $id)->first();

        $this->name = $category->name;
        $this->description = $category->description;

        $this->category_edit_id = $category->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'description' => 'required|unique:categories,description,'.$this->category_edit_id.'',
        ]);
    }

    public function updateCategory()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required|unique:categories,description,'.$this->category_edit_id.'',
        ]);

        $category = Category::where('id', $this->category_edit_id)->first();

        $category->name = $this->name;
        $category->description = $this->description;

        $category->save();

        $this->toast('Success', 'success', 'Category Edited');
    }

    public function render()
    {
        return view('livewire.editcategory');
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
