<!doctype html>
<html lang="en" dir="rtl">
    <head>
        @include('dashboard.layouts.partials.head')
    </head>
    <body>
        <script src="{{ asset("/dist/js/demo-theme.min.js?1737581035") }}"></script>
        @yield("body")
        @include('dashboard.errors.errors')
        @include('dashboard.layouts.partials.scripts')
    </body>
</html>