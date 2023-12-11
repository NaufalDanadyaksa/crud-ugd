<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    public $search = "";
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $user = User::where('name', 'like', '%' . $this->search . '%')->paginate(5);

        
       

        return view('livewire.search', [
            'mahasiswa' => $user,

        ]);
    }
    

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
