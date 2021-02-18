<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script type="text/javascript" src="../js/home.js"></script>
    <script type="text/javascript" src="../predefined js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../predefined js/jquery.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>EduOne</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <!--Open_Nav_Button-->
        <a href="#" class="navbar-brand text-decoration-none"><span class="navbar-toggler-icon"></span></a>
        <a href="#" class="navbar-brand text-decoration-none text-center">EduOne</a>
    </nav>
    <div class="container-fluid bg-light">
        <div class="container w-50 bg-light border border-primary" id="nav_slide">
            <!--navigation tab-->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab2">Tab1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab2">Tab2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tab3">Tab3</a>
                </li>
            </ul>
            <!--Tab Panel-->
            <div class="tab-content">
                <div id="home" class="container tab-pane active">
                    <h2>Home</h2>
                </div>
                <div id="tab1" class="container tab-pane fade">
                    <h2>Tab 1</h2>
                </div>
                <div id="tab2" class="container tab-pane fade">
                    <h2>Tab 2</h2>
                </div>
                <div id="tab3" class="container tab-pane fade">
                    <h2>Tab 3</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
