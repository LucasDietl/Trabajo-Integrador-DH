<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <title>Sign In</title>
  </head>
  <body>
    <!-- NOTE: Header start -->
        <nav class="navbar navbar-default navbar-top" >
          <div class="container" role="navigation">
            <a class="navbar-brand" href="index.html">LOGO A DEF</a>
            <ul class="nav navbar-nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="signup.html">Sign Up</a></li>
              <li><a href="signin.html">Log In</a></li>
              <li><a href="faq.html">FAQ</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </nav>
    <!-- NOTE: Header end -->
    <div class="container">

      <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>

</div> <!-- /container -->

  </body>
</html>
