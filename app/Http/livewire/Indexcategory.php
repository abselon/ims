<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Indexcategory extends Component
{
    use LivewireAlert;
    public function delete($id)
    {
        $category = Category::where('id', $id)->first();
        $category->delete();

        $this->toast('Deleted', 'success', 'Category deleted successfully');
    }
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
}
