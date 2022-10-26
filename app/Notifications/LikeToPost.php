<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LikeToPost extends Notification
{
    use Queueable;
    public $comment,$like,$post;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($comment,$like,$post)
    {
       $this->comment=$comment;
       $this->like=$like;
       $this->post=$post;
       
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        
        return ['database'];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {
        return [
            'comment'=>$this->comment ,
            'user'=>auth()->user()->getUser,
            'like'=>$this->like,
            'post'=>$this->post
        ];
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
