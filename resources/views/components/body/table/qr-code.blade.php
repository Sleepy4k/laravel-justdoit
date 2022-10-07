{{ $slot }}
<div class="mt-3">
    <button class="btn btn-primary">
        <a href="{{ asset('images/qrcode/qrcode_'.request()->segment(4).'.png') }}" download>
            Download
        </a>
    </button>
</div>