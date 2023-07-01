<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Indexcategory extends Component
{
    use LivewireAlert;

    public $delete_id;

    protected $listeners = ['deleteConfirmed' => 'deleteCategory'];

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string',
    ];
    public function deleteConfirmation($id)
    {
        $this->delete_id = $id;
        $this->dispatchBrowserEvent('show-delete-confirmation');
    }

    public function deleteCategory()
    {
        $category = Category::where('id', $this->delete_id)->first();
        $category->delete();

        $this->dispatchBrowserEvent('categoryDeleted');
    }
    // public function delete($id)
    // {
    //     $category = Category::where('id', $id)->first();
    //     $category->delete();

    //     $this->toast('Deleted', 'success', 'Category deleted successfully');
    // }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.indexcategory', ['categories'=>$categories]);
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

    public $name, $description, $categories_id;

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

        $this->dispatchBrowserEvent('close-model');
    }

    public function  editCategory($category_id = null)
    {
        $categories = Category::find($category_id);
        if($categories)
        {
            $this->categories_id = $categories->id;
            $this->name = $categories->name;
            $this->description = $categories->description;
            $this->dispatchBrowserEvent('show-edit-category-modal');

        }
        else
        {
            return redirect()->to('/categories');
        }
    }

    public function closeModal()
    {
        $this->description = '';
        $this->name = '';
    }

    public function updateCategory()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        Category::where('id', $this->categories_id)->update(
            [
                'name'=>$validatedData['name'],
                'description' => $validatedData['description'],
            ]
        );

        $this->toast('Updated', 'success', 'Category Updated');


        $this->description = '';
        $this->name = '';

        $this->dispatchBrowserEvent('close-model');
    }

}

