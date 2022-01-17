<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name') }} | Penggajihan Karyawan</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('dataTable/style.css') }}">
</head>

<body x-data="sidebar()" class=" text-gray-700" @resize.window="handleResize()">
    <div class="lg:flex print:contents">
        <x-sidebar />
        @include('layouts.navigation')

    </div>


    <script src="{{ asset('dataTable/style.js') }}"></script>
    <script>
        var myTable = document.querySelector("#myTable");
        var dataTable = new DataTable(myTable);

        function sidebar() {
            const breakpoint = 1280
            return {
                open: {
                    above: true,
                    below: false,
                },
                isAboveBreakpoint: window.innerWidth > breakpoint,

                handleResize() {
                    this.isAboveBreakpoint = window.innerWidth > breakpoint
                },

                isOpen() {
                    console.log(this.isAboveBreakpoint)
                    if (this.isAboveBreakpoint) {
                        return this.open.above
                    }
                    return this.open.below
                },
                handleOpen() {
                    if (this.isAboveBreakpoint) {
                        this.open.above = true
                    }
                    this.open.below = true
                },
                handleClose() {
                    if (this.isAboveBreakpoint) {
                        this.open.above = false
                    }
                    this.open.below = false
                },
                handleAway() {
                    if (!this.isAboveBreakpoint) {
                        this.open.below = false
                    }
                },
            }
        }
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
