<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <script src="{{ asset('js/main.js') }}"></script>
</head>

<body>

    <div class="navbar navbar-default navbar-truffle" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <a class="btn-menu navbar-truffle-toggle" href="#">
                    <span class="small-nav">
                        <font face="Comic sans MS" size="2" color="white">Closed</font>
                    </span>
                    <span class="full-nav">
                        <font face="Comic sans MS" size="6" color="white">Opened</font>
                    </span>
                </a>
            </div>
            <div class="">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="#">
                            <span class="small-nav" data-toggle="tooltip" data-placement="right" title="Home">
                                <span class="glyphicon glyphicon-home"></span>
                            </span>
                            <span class="full-nav"> Home </span>
                        </a>
                    </li>
                    <li>
                        <a href="#about-us">
                            <span class="small-nav" data-toggle="tooltip" data-placement="right" title="About Us">
                                <span class="fa fa-users"></span>
                            </span>
                            <span class="full-nav"> About Us </span>
                        </a>
                    </li>
                    <li>
                        <a href="#contact-us">
                            <span class="small-nav" data-toggle="tooltip" data-placement="right" title="Contact Us">
                                <span class="glyphicon glyphicon-comment"></span>
                            </span>
                            <span class="full-nav"> Contact Us </span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
