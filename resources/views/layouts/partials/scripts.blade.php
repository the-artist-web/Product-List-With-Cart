{{-- custom bootstrap bundle min js link --}}
<script src="{{ asset("/src/assets/bootstrap/bootstrap.bundle.min.js") }}"></script>
{{-- custom js link --}}
<script src="{{ asset("/src/main.js") }}"></script>
{{-- custom aos link --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
{{-- custom files additional --}}
@stack("scripts")