<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;


class Blogs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';




    public $sortField = 'title';   //default sort field
    public $sortAsc = true; // default sort direction
    public $search = '';



    protected $listeners = ['delete'];


    public function render()
    {
        return view('livewire.blog.blogs', [
            'blogs' => Blog::search($this->search)
                ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
                ->paginate(1),
        ]);
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }


    public function delete(Blog $blog)
    {
        $blog->delete();
        $this->dispatchBrowserEvent('blog-deleted', ['blog_title' => $blog->title]); // add this

    }
}
