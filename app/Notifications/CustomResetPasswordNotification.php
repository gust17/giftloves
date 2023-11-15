<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;

class CustomResetPasswordNotification extends Notification
{
    protected $token;

    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct($token)
    {
        //
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        $email = $notifiable->getEmailForPasswordReset();

        $resetUrl = 'http://lab.infoconsig.com.br/v2/#/reset-password/' . $this->token . '/' . $email;

        $logoPath = public_path('logo.png'); // Substitua pelo caminho da sua logo

        return (new MailMessage)
            ->subject('Solicitação de Redefinição de Senha')
            ->attach($logoPath, [
                'as' => 'logo.png',
                'mine' => 'image/png'
            ])
            ->view('auth.emails.custom_reset', [
                'resetUrl' => $resetUrl,
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
