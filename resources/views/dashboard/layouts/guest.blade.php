<!doctype html>
<html lang="en">
    <head>
        @include('dashboard.layouts.partials.head')
    </head>
    <body>
        <script src="{{ asset("/dist/js/demo-theme.min.js?1737581035") }}"></script>
        @yield("body")
        @include("dashboard.partials.errors")
        @include('dashboard.layouts.partials.scripts')
    </body>
</html>