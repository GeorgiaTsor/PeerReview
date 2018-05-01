<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="test.css" type="text/css" />
    <title>Peer Assessment App</title>
    <!--suppress XmlDuplicatedId -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!--suppress XmlDuplicatedId -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</head>
<body>
<div id="logo">
    <h1><a href="test.html" id="logoLink">Peer Assessment App</a></h1>
</div>
<div class="sidebar-nav">
    <div class="well" style="width:300px; padding: 8px 0; margin-left: 1350px">
        <ul class="nav nav-list">
            <li class="nav-header">Admin Menu</li>
            <li class="active"><a href="#"><i class="icon-user"></i> Tutors</a></li>
            <li class="active"><a href="#"><i class="icon-user"></i> Students</a></li>
            <li class="active"><a href="#"><i class="icon-user"></i> Modules</a></li>
            <li class="divider"></li>
            <li><a href="https://campusmoodle.rgu.ac.uk/login/index.php"><i class="glyphicon glyphicon-pushpin"></i> Moodle</a></li>
            <li><a href="test.html"><i class="icon-share"></i> Logout</a></li>
        </ul>
    </div>
</div>

<div class="container">
    <form class="form-horizontal" role="form" style="margin-top: auto; background: #cccccc ">
        <h2>Registration Form</h2>
        <div class="form-group">
            <label for="firstName" class="col-sm-3 control-label">Full Name</label>
            <div class="col-sm-9">
                <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Email</label>
            <div class="col-sm-9">
                <input type="email" id="email" placeholder="Email" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-3 control-label">Password</label>
            <div class="col-sm-9">
                <input type="password" id="password" placeholder="Password" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="course" class="col-sm-3 control-label">Course</label>
            <div class="col-sm-9">
                <select id="course" class="form-control">
                    <option>IT for the O&G industry</option>
                    <option>IT with BI</option>
                    <option>IT with CS</option>
                    <option>IT with NM</option>
                    <option>Information Technology</option>
                </select>
            </div>
        </div> <!-- /.form-group -->

        <div class="form-group">
            <label class="control-label col-sm-3">User type</label>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="tutorRadio" value="Tutor">Tutor
                        </label>
                    </div>
                    <div class="col-sm-4">
                        <label class="radio-inline">
                            <input type="radio" id="studentRadio" value="Student">Student
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <br>
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
        </div>
    </form> <!-- /form -->
</div> <!-- ./container -->

</body>
<div id="footer">
    Webpage made by <a href="/" target="_blank">Georgia Ts</a>

</div>
</body>
</html>
