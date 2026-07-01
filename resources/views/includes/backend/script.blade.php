<script src="{{ asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.js') }}"></script>
<script src="{{ asset('backend/assets/js/pages/dashboard.js') }}"></script>

<script src="{{ asset('backend/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{ asset('backend/assets/vendors/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendors/summernote/summernote-lite.min.js') }}"></script>

<script src="{{ asset('backend/assets/js/main.js') }}"></script>

<script src="{{ asset('backend/assets/vendors/simple-datatables/simple-datatables.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // Simple Datatable
    let table1 = document.querySelector('#table1');
    let dataTable = new simpleDatatables.DataTable(table1);
</script>
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true
    });
</script>

<style>
    .colored-toast.swal2-icon-success {
        background-color: #198754 !important;
    }

    .colored-toast.swal2-icon-error {
        background-color: #dc3545 !important;
    }

    .colored-toast.swal2-icon-warning {
        background-color: #ffc107 !important;
    }

    .colored-toast.swal2-icon-info {
        background-color: #0dcaf0 !important;
    }

    .colored-toast .swal2-title,
    .colored-toast .swal2-close,
    .colored-toast .swal2-html-container {
        color: white;
    }
</style>
@if (session('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
        });
    </script>
@endif

@if (session('error'))
    <script>
        Toast.fire({
            icon: 'error',
            title: '{{ session('error') }}'
        });
    </script>
@endif

@if (session('warning'))
    <script>
        Toast.fire({
            icon: 'warning',
            title: '{{ session('warning') }}'
        });
    </script>
@endif

@if (session('info'))
    <script>
        Toast.fire({
            icon: 'info',
            title: '{{ session('info') }}'
        });
    </script>
@endif
