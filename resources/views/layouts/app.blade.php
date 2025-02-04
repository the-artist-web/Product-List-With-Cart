<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        @include("layouts.partials.head")
    </head>
    <body>
        @include("partials.navbar")
        <main class="main">
            <article>
                @yield("body")
            </article>
        </main>
        @include("partials.footer")
        @include("partials.errors")
        @include("layouts.partials.scripts")
    </body>
</html>