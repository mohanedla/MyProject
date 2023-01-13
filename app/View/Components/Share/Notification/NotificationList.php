<?php

namespace App\View\Components\Share\Notification;

use App\Models\Notification;
use Illuminate\View\Component;

class NotificationList extends Component
{
    public $notifications;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
       $this->notifications=Notification::where('read_at',null)->take(4)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.share.notification.notification-list');
    }
}
