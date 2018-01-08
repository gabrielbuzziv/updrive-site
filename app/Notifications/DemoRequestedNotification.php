<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class DemoRequestedNotification extends Notification
{
    use Queueable;

    /**
     * Deal.
     *
     * @var
     */
    protected $deal;

    /**
     * DemoRequestedNotification constructor.
     *
     * @param $deal
     */
    public function __construct($deal)
    {
        $this->deal = $deal;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = "https://updrive.pipedrive.com/deal/{$this->deal}";

        return (new MailMessage)
                    ->subject('Uma nova demonstração do UP Drive foi solicitada')
                    ->line('Acabou de ser solicitada uma demonstração do UP Drive, os dados foram adicionados no Pipe Drive e uma nova atividade foi adicionada.')
                    ->action('Ver detalhes', $url);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
