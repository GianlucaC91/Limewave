
<form class="d-inline" action="{{ route('setLocale', $lang) }}" method="post">
@csrf
    <button type="submit" class="btn">
        <img src="{{ asset('vendor/blade-flags/language-' . $lang . '.svg') }}" width="25" height="25" alt="">
    </button>
</form>






