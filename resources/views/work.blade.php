<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AprilStudio: {{ $work->title }}</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            * {font-family: "Helvetica Neue", Helvetica, Arial, sans-serif; }
            .full-width-image {width: 100%}
            .img-bg-filler {width: 100%; height: 100%; background: #eee;}
            .blockquote {
                font-weight: bold;
                font-size: 35px;
                line-height: 40px;
            }

            .blockquote:before {
                left: 0;
                display: block;
                position: absolute;
                content: open-quote;
            }

            .blockquote:after {
                content: close-quote;
            }
        </style>
    </head>
    <body>
        <header class="container-fluid p-4">
            <div class="row">
                <div class="col-md-6">
                    <h1>{{ $work->title }}</h1>
                </div>
                <div class="col-md-6">
                    <h3>{{ $work->description}}</h3>
                </div>
            </div>
        </header>
        <main class="py-4">
            {!! $renderedBlocks !!}
        </main>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
