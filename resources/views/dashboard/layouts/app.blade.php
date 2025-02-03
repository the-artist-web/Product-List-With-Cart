<!doctype html>
<html lang="en">
    <head>
        @include('dashboard.layouts.partials.head')
    </head>
    <body>
        <script src="{{ asset("/dist/js/demo-theme.min.js?1737581035") }}"></script>
        <div class="page">
            @include("dashboard.partials.sidebar")
            @include("dashboard.partials.navbar")
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="container-xl">
                        @yield("body")
                    </div>
                </div>
                @include("dashboard.partials.footer")
            </div>
        </div>
        @include('dashboard.layouts.partials.scripts')
    </body>
</html>