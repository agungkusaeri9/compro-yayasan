<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
            {{ Carbon\Carbon::now()->format('Y') }}
            {{ $setting->author }}. All rights reserved.</span>
    </div>
</footer>
