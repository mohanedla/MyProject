<li class="nav-item dropdown">

    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-bell"></i>
        <span class="badge bg-primary badge-number" id="count_Notification1">{{$notifications->count()}}</span>
    </a><!-- End Notification Icon -->

    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
       
            @if ($notifications->count()>0)
                <li class="dropdown-header">
                    لديك  <span id="count_Notification">{{$notifications->count()}}</span> اشعارات جديدة
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <a href="{{route('notifications.index')}}"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                </li>
            @else
                <li class="dropdown-header">
                     {{ __('You have no new notifications') }} &nbsp;&nbsp;&nbsp;&nbsp;
                </li>

            @endif
        <li>
            <hr class="dropdown-divider">
        </li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <div id="div-notification">
            @forelse ($notifications as $notification)
                <li class="notification-item">
                    @switch($notification->type)  
                        @case('login')   
                            <i class="bi bi-person-plus-fill  text-blue mr-3"></i>
                            @break
                        @case('new_order')
                            <i class="bi bi-receipt text-purple mr-3"></i>
                            @break
                        @case('new_report')
                            <i class="bi bi-file-earmark-plus-fill text-primary mr-3"></i>
                            @break
                        @case('new_notice')
                            <i class="bi bi-exclamation-triangle text-danger mr-3"></i>
                            @break
    
                    @endswitch
                    <div>
                        <h4>{{$notification->user->name}}</h4>
                        <p>{{$notification->data}}</p>
                        <p>{{$notification->created_at}}</p>
                    </div>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>
            @empty
                <li class="notification-item">
                    <div>
                        <h4>  {{ __('There are no notifications') }}</h4>

                    </div>
                </li>
            @endforelse
            
        </div>

        {{-- <a href="{{route('notifications.index')}}"><span class="badge rounded-pill bg-primary p-2 ms-2 m">View all</span></a> --}}

    </ul><!-- End Notification Dropdown Items -->

</li>


<script>
  $('#count_Notification1').hide();
  getNotifications();

var intervalId = window.setInterval(function(){
  // call your function here
  getNotifications();
}, 10000);


function getNotifications() {
    $('#div-notification').empty();
    $.get("{{route('notifications.api')}}", function(data){
        console.log(data,data.length);
        if (data.length <= 0) {
            $('#count_Notification1').hide();
        } else {
            $('#count_Notification1').show();
            document.getElementById('count_Notification').innerHTML=data.length;
            document.getElementById('count_Notification1').innerHTML=data.length;
            data.forEach(notification => {
                var x= createNotifications(notification);
                $('#div-notification').append(x);

            });
        }
        // alert('Successfully not posted.');
    }); 
}
function createNotifications(notification) {
    var i="";
    switch (notification.type) {
        case 'login':
            i='<i class="bi bi-person-plus-fill  text-blue mr-3"></i>'
        break;
        case 'new_order':
            i='<i class="bi bi-receipt text-purple mr-3"></i>'
        break;
        case 'new_report':
            i='<i class="bi bi-file-earmark-plus-fill text-primary mr-3"></i>'
        break;
        case 'new_notice':
            i=' <i class="bi bi-exclamation-triangle text-danger mr-3"></i>'
        break;

    }
    var html=`
        <li class="notification-item">
            `+i+`
            <div>
                <h4>`+notification.user.name+`</h4>
                <p>`+notification.data+`</p>
                <p>`+notification.created_at+`</p>
            </div>
        </li>

        <li>
            <hr class="dropdown-divider">
        </li>
    `;
    return html;
}

</script>