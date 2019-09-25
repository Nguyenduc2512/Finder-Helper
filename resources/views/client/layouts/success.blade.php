<script>
    @if( session('success') == true)
    toastr.success("{{ session('success') }}")
    @endif
</script>
