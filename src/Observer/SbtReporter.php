<?php
namespace App\Observer;

use Carbon\Carbon;

class SbtReporter implements \SplObserver
{
    public function update(\SplSubject $weather): void
    {
        echo 'Agora sao '.  Carbon::now() . ' e aqui na SbtReporter a temperatura e de ' . $weather->temperature . '</br>';
    }
}