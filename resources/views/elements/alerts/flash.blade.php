@inject('session', "\Illuminate\Support\Facades\Session")
@foreach (['error', 'warning', 'success', 'info'] as $flashKey)
    @if($session::has($flashKey))
        @php($alertType = $flashKey == 'error' ? 'danger' : $flashKey)
        <div class="alert alert-{{$alertType}}">
            <span class="alert-closebtn" onclick="this.parentElement.style.display='none';" style="cursor: pointer">&times;</span>
            <strong>{{ucfirst($flashKey)}}!</strong> {{strlen($session::get($flashKey)) > 1 ? $session::get($flashKey) : $constants::$flashMessages[$flashKey]}}
        </div>
    @endif
@endforeach

