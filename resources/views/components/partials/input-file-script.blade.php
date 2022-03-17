@push('bottomChildJs')
    <script src="{{asset('admin-panel/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
@endpush
