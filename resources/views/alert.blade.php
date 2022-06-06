@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has('alert-' . $msg))
          <div class="alert alert-solid alert-{{ $msg }}" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
             {{ Session::get('alert-' . $msg) }}
            </div><!-- alert -->
    @endif
  @endforeach
</div>