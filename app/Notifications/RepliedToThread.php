<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;

use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;

class RepliedToThread extends Notification
{
    use Queueable;
    protected $thread;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($comment)
    {
        $this->comment=$comment;
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
            
            'thread'=>$this->thread,
            'user'=>$notifiable
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
