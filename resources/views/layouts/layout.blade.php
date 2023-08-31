<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Find Mails</title>
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="">

    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <script src="{{url('/js/jquery3.6.4.js')}}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.js"></script> -->
    <script src="{{url('/js/circle-progress.min.js')}}"></script>
    <script src="{{url('/js/script.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js" integrity="sha512-Wt1bJGtlnMtGP0dqNFH1xlkLBNpEodaiQ8ZN5JLA5wpc1sUlk/O5uuOMNgvzddzkpvZ9GLyYNa8w2s7rqiTk5Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            if ($('.graph').length) {
                var ctx = document.getElementById("graph").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'doughnut',
                    legend: {
                        display: false
                    },
                    data: {
                        labels: ["Verified", "Accept-all", "Unknown"],
                        datasets: [{
                            backgroundColor: [
                                "#629B81",
                                "#FEB75B",
                                "#F4F4F5"
                            ],
                            data: [82, 147, 40]
                        }]
                    },
                    options: {
                        events: [],
                        hover: {
                            mode: null
                        },
                        cutout: 36,
                        plugins: {
                            legend: {
                                display: false,
                            }
                        },
                        tooltips: {
                            enabled: false
                        },
                        elements: {
                            arc: {
                                borderWidth: 0
                            }
                        }
                    }
                });
            }
        });
    </script>
    <!-- <script src="{{url('/js/findersearch-search.js')}}"></script> -->

</body>

</html>