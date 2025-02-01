<!-- Libs JS -->
<script src="{{ asset("/dist/libs/apexcharts/dist/apexcharts.min.js?1737581035") }}" defer></script>
<script src="{{ asset("/dist/libs/jsvectormap/dist/jsvectormap.min.js?1737581035") }}" defer></script>
<script src="{{ asset("/dist/libs/jsvectormap/dist/maps/world.js?1737581035") }}" defer></script>
<script src="{{ asset("/dist/libs/jsvectormap/dist/maps/world-merc.js?1737581035") }}" defer></script>
<!-- Tabler Core -->
<script src="{{ asset("/dist/js/tabler.min.js?1737581035") }}" defer></script>
<script src="{{ asset("/dist/js/demo.min.js?1737581035") }}" defer></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"907949ee5a950d86","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.1.0","token":"84cae67e72b342399609db8f32d1c3ff"}' crossorigin="anonymous"></script>
{{-- custom files additional --}}
@stack("scripts_dashboard")