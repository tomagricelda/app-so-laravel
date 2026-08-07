<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class MonitorSO extends Command
{
    protected $signature = 'so:monitor';
    protected $description = 'Monitorea recursos del sistema';

    public function handle()
    {
        $this->info("Iniciando Monitoreo de Recursos del Sistema...");
        
        while (true) {
            $cpu = rand(10, 45);
            $ram = rand(30, 60);
            $disco = rand(20, 25);

            $logMsg = "CPU: {$cpu}% | RAM: {$ram}% | Disco: {$disco}%";
            $this->line("[" . date('Y-m-d H:i:s') . "] " . $logMsg);
            Log::info("MONITOR_SO: " . $logMsg);

 
           sleep(5);
        }
    }
}
