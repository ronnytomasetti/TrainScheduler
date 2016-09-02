<?php  ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ronny Tomasetti">
    <meta name="description" content="Train Scheduler">
    <meta name="keywords" content="train scheduler">
    <!-- <link rel="icon" href="assets/img/favicon.ico"> -->

    <title>Train Scheduler</title>

    <!-- CDN Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <!-- Global stylesheet -->
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>

    <nav class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">TRAIN SCHEDULER</a>
            </div>
            <button type="button" class="btn btn-default navbar-btn navbar-right">Sign Out</button>
        </div> <!--/.container -->
    </nav> <!--/.navbar -->

    <div class="jumbotron text-center">
        <div class="container">
            <h1>Welcome</h1>
            <h2>choo choo! chee chee!</h2>
        </div>
    </div>

    <div class="container">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Current Train Schedule</strong></h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-condensed table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Destination</th>
                                <th>Frequency (min)</th>
                                <th>Next Arrival</th>
                                <th>Minutes Away</th>
                            </tr>
                        </thead>
                        <tbody id="schedule-data">
                            <!-- TRAIN SCHEDULE DATA GOES HERE -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><strong>Add Train Form</strong></h3>
            </div>
            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <label for="add-name">Name</label>
                        <input type="text" class="form-control" id="add-name">
                    </div>
                    <div class="form-group">
                        <label for="add-destination">Destination</label>
                        <input type="text" class="form-control" id="add-destination">
                    </div>
                    <div class="form-group">
                        <label for="add-start-time">Start Time (hh:mm - military format)</label>
                        <input type="text" class="form-control" id="add-start-time">
                    </div>
                    <div class="form-group">
                        <label for="add-frequency">Frequency (minutes)</label>
                        <input type="text" class="form-control" id="add-frequency">
                    </div>
                    <button type="submit" class="btn btn-default" id="add-button">Submit</button>
                </form>
            </div>
        </div>

    </div> <!-- /.container -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p class="text-muted text-left">UCF Coding Bootcamp 2016</p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p class="text-muted text-center">Made with <span class="glyphicon glyphicon-heart" aria-hidden="true" style="color:red;"></span> by Ronny Tomasetti</p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <p class="text-muted text-right">Copyright &copy 2016. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- ======================================================== -->
    <!-- CDN jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"
            integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="
            crossorigin="anonymous"></script>
    <!-- CDN Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <!-- CDN Firebase Reference -->
    <script src="https://www.gstatic.com/firebasejs/3.2.1/firebase.js"></script>
    <!-- Moment.js -->
    <script src="js/moment.js"></script>
    <!-- Application JavaScript -->
    <script src="js/script.js"></script>
    <!-- ======================================================== -->
</body>
</html>
