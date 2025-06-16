<?php

namespace App\Livewire;

use App\Models\Soal as ModelsSoal;
use Livewire\Component;

class Soal extends Component
{

    public $soal, $soalCount;
    public $soalNumber, $soalText, $jawabanText;
    public $idSoal, $soalShow, $checkedTrue;

    public function __construct()
    {
        $this->soalCount = ModelsSoal::all()->count();
        $this->soal = ModelsSoal::get();
        $this->soalNav(1);
    }

    public function answer($id)
    {
        $soalAnswer = ModelsSoal::find($id);
        if($soalAnswer->status == 1){
            $soalAnswer->update(['confirmed' => 0]);
            $this->checkedTrue = 0;
        }else{
            $soalAnswer->update(['confirmed' => 1]);
            $this->checkedTrue = 1;
        }
    }

    public function soalNav($no)
    {
        $this->soalShow = ModelsSoal::find($no);
        $this->soalText = $this->soalShow->soal;
        $this->jawabanText = $this->soalShow->jawaban;
        $this->idSoal = $this->soalShow->id;

        if($this->soalShow->confirmend == 0){
            $this->checkedTrue = 0;
        }else{
            $this->checkedTrue = 1;
        }
    }

    public function render()
    {
        return view('livewire.soal');
    }
}
