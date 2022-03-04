@inject('session', "\Illuminate\Support\Facades\Session")
@foreach (['error', 'warning', 'success', 'info'] as $flashKey)
    @if($session::has($flashKey))
        <div class="alert alert-{{$flashKey}}">
            <span class="alert-closebtn" onclick="this.parentElement.style.display='none';" style="cursor: pointer">&times;</span>
            <strong>{{ucfirst($flashKey)}}!</strong> {{strlen($session::get($flashKey)) > 1 ? $session::get($flashKey) : $constants::$flashMessages[$flashKey]}}
        </div>
    @endif
@endforeach

