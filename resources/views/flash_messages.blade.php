<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $message)
        @if(Session::has('alert-' . $message))
            <p class="alert alert-{{ $message }} fade in">
                {{ Session::get('alert-' . $message) }}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </p>
        @endif
    @endforeach
</div>
