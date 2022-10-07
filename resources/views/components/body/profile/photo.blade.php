<div class="profile-photo {{ $class }}">
    @if (!empty(file_exists(public_path('storage/images/'.$image))))
        <img src="{{ asset('storage/images/'.$image) }}" class="img-fluid rounded-circle" width="75%" height="75%" alt="{{ $image }}">
    @else
        <img src="{{ asset('images/profile/profile.png') }}" class="img-fluid rounded-circle" width="75%" height="75%"  alt="Benjamin4k">
    @endif
</div>