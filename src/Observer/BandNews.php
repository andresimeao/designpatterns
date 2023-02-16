<?php
namespace App\Observer;

use Carbon\Carbon;

class BandNews implements \SplObserver
{
    public function update(\SplSubject $weather): void
    {
        echo 'Agora sao '.  Carbon::now() . ' e aqui na BandNews a temperatura e de ' . $weather->temperature . '</br>';
    }
}