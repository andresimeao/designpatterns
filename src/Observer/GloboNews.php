<?php
namespace App\Observer;

use Carbon\Carbon;

class GloboNews implements \SplObserver
{
    public function update(\SplSubject $weather): void
    {
        echo 'Agora sao '.  Carbon::now() . ' e aqui na GloboNews a temperatura e de ' . $weather->temperature . '</br>';
    }
}