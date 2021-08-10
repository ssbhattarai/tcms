<!-- Bootstrap core JavaScript-->
<script src="{{ asset("assets/admin/vendor/jquery/jquery.min.js") }}"></script>
<script src="{{ asset("assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js") }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset("assets/admin/vendor/jquery-easing/jquery.easing.min.js") }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset("assets/admin/vendor/chart.js/Chart.min.js") }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset("assets/admin/js/demo/chart-area-demo.js") }}"></script>
<script src="{{ asset("assets/admin/js/demo/chart-pie-demo.js") }}"></script>
{{-- <script src="{{ mix('js/admin.js') }}"></script> --}}
@livewireScripts
<script>
    Livewire.on("deleteTriggered", (id, title) => {
   const proceed = confirm(`Are you sure you want to delete ${title}`);
   if (proceed) {
       Livewire.emit("delete", id);
   }
});


window.addEventListener("blog-deleted", (event) => {
   alert(`${event.detail.blog_title} was deleted!`);
});

</script>
