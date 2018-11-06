<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/template.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <title>Jonne Okkonen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <div class="navbar responsive" id="TopNav">
            <a href="index.html" class="navbarTitle">Navbar Title</a>
            <a href="login.php" class="navbarItem">Login</a>
            <a href="#" class="navbarItem">Item 2</a>
            <a href="applications.html" class="navbarItem">Applications</a>
            <a href="javascript:void(0);" class="icon" onclick="collapseNavbar()"><i class="fa fa-bars"></i></a>
        </div>
        <div class="headerContent">
            <p id="description">Login</p>
            <form method="post">
                <input type="text" class="textField" placeholder="username" name="username"><br>
                <input type="password" class="textField" placeholder="password" name="password"><br>
                <br>
                <input type="submit" class="button" value="Login" name="login">
            </form>
        </div>
    </div>
    <div class="footer">
        <p>© 2018 Jonne Okkonen</p>
    </div>
    <script>
        function collapseNavbar() {
            var x = document.getElementById("TopNav");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>
</body>
</html>