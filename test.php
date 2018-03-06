<!DOCTYPE html>
<html>
<head style="background-color: antiquewhite">

    <!-- your webpage info goes here -->

    <title>Peer Assessment App</title>

    <meta name="author" content="Georgia" />
    <meta name="description" content="" />

    <!-- you should always add your stylesheet (css) in the head tag so that it starts loading before the page html is being displayed -->
    <link rel="stylesheet" href="test.css" type="text/css" />

</head>
<body>

<!-- webpage content goes here in the body -->

<div id="page">
    <div id="logo">
        <h1 style="font-style: italic"><a href="/" id="logoLink">Peer Assessment App</a></h1>
    </div>
<p style="font-size: xx-large">
    This is an application for students and tutors. <br> Via the application students can enter, complete and upload a peer review form.
    <br> Tutors can then access the system to view the uploaded files from every student from every team.<br>
    Please log in to continue.
</p>
        <div id="form">
            <br><br><br><br><br><br><br><br>
            <label><b> User name:</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="username" required><br><br>
            <label><b>User password:</b></label>
            <input type="password" name="psw" required> <br><br>
           <form action="Home.html"> <input type="submit" value="Log in"></form>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <br><br>
                <span class="psw">Forgot <a href="#">password?</a></span>

        </div>

    <div id="footer">
        <p>
            <br><br><br><br><br>
            Webpage made by <a href="/" target="_blank">Georgia Ts</a>
        </p>
    </div>
</div>
</body>
</html>
