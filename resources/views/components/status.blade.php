<div>
    @if (session('status'))
        <div class="alert alert-success " id="status-msg">
            {{ session('status') }}
        </div>     
    @endif
</div>
