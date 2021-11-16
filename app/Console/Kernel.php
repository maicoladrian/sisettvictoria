<?php

namespace App\Console;

use App\Http\Controllers\Acta_PerfilController;
use App\Http\Controllers\Tecnica_CoachingController;
use App\Models\Notificacion_Temporal;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
        echo nl2br("Entrando a schedule ...\n");
        $schedule->call(function() {
            echo nl2br("Procesando envio...\n");
            $notificaciones = Notificacion_Temporal::all();
            if(count($notificaciones) > 0) {
                echo nl2br("Revisando lista...\n");
                foreach ($notificaciones as $notificacion) {
                    if($notificacion->estado != 1){
                        $hoy = Carbon::now()->toDateString();
                        echo "Hoy:".$hoy;
                        echo nl2br("\n");
                        echo "Fecha enviar:".$notificacion->fecha_enviar;
                        echo nl2br("\n");
                        if($notificacion->fecha_enviar == $hoy){
                            echo nl2br("Entrando if fechas iguales...\n");

                            // $acta_perfil = Acta_PerfilController::buscarActa($notificacion->nt_id_acta_perfil);
                            // $tecnica_coaching = Tecnica_CoachingController::buscarTecnicaCoaching($notificacion->nt_id_tecnica_coaching);

                            // $email = $acta_perfil[0]['correo'];

                            // echo nl2br("Email:\n").$email;
                            

                            Mail::to('victoria123123lora@gmail.com')->send(new \App\Mail\EnviarCorreo($notificacion));

                            echo nl2br("Correo enviado\n");
                        }
                        
                    }
                    
                }
            }
        })->dailyAt('23:03');
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
