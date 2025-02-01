<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        @include("layouts.partials.head")
    </head>
    <body>
        <main>
            <article>
                @yield("body")
            </article>
        </main>
        @include("layouts.partials.scripts")
    </body>
</html>