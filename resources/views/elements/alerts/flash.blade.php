@inject('session', "\Illuminate\Support\Facades\Session")
@foreach (['error', 'warning', 'success', 'info'] as $msg)
    @if($session::has($msg))
        <div class="alert alert-{{$msg}}">
            <span class="alert-closebtn" onclick="this.parentElement.style.display='none';" style="cursor: pointer">&times;</span>
            <strong>{{ucfirst($msg)}}!</strong> {{$session::get($msg)}}
        </div>
    @endif
@endforeach

