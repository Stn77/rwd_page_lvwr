<?php

namespace App\Livewire;

use App\Models\Soal as ModelsSoal;
use Livewire\Component;

class Soal extends Component
{

    public $soal, $soalCount;
    public $soalNumber, $soalText, $jawabanText;

    public function __construct()
    {
        $this->soalCount = ModelsSoal::all()->count();
        $this->soal = ModelsSoal::get();
        $this->soalNav(1);
    }

    public function soalNav($no)
    {
        $soal = ModelsSoal::find($no);
        $this->soalText = $soal->soal;
        $this->jawabanText = $soal->jawaban;
    }

    public function render()
    {
        return view('livewire.soal');
    }
}
