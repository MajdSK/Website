<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\text;

class MessageSent extends Notification implements ShouldQueue
{
    use Queueable;

    public function __construct(protected text $message)
    {
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toDatabase(object $notifiable): array
    {
        return [
            'message_id' => $this->message->id,
            'username' => $notifiable->name,
            'message' => 'You have sent a message successfully!',
        ];
    }

    public function toMail(object $notifiable): MailMessage
    {
        $url = url("/editmessages/{$this->message->id}");
        return (new MailMessage)
            ->greeting("Hello, {$notifiable->name}!")
            ->line('you have sent a message successfully!')
            ->action('want to edit it? click here', $url)
            ->line('Thank you for using our website!');
    }

    public function toArray(object $notifiable): array
    {
        return [];
    }
}