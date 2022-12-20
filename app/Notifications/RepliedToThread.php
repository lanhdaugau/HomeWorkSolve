<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class RepliedToThread extends Notification
{
    use Queueable;
    public $post,$comment;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($post,$comment)
    {
       $this->post=$post;
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
        
        return[
            
            'post'=>$this->post ,
            'user'=>auth()->user()->getUser,
            'comment'=>$this->comment
            
           
            
        ];
    }
    // public function toBroadcast($notifiable)
    // {
        
    //     return new BroadcastMessage( [
            
    //         'post'=>$this->post ,
    //         'user'=>$notifiable
    //     ]);
    // }
   
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
