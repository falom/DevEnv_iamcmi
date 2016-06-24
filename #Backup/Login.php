<!DOCTYPE html>
<html >
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
      <title>Home</title>
      <!-- <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
      <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" /> -->
<!--       <link rel="stylesheet" href="../js/jquery-ui-themes-1.12.0-rc.2/themes/smoothness/jquery-ui.css" /> -->
      <link rel="stylesheet" href="../config/bootstrap/css/iamStyle.css">
      <link rel="stylesheet" href="../config/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="../config/bootstrap/css/bootstrap-theme.min.css">
      <!-- END MAIN STYLE SECTION-->  
  </head>
  <body>
      <div class="container"> 
        <br><br><br><br>
          <div class="col-xs-6 col-sm-4"></div>
            <div class="col-xs-6 col-sm-4">  
              <!-- Add the extra clearfix for only the required viewport -->
              <div class="clearfix visible-xs-block"></div>         
              <form class="form-signin">       
                <h2 class="form-signin-heading">Please login</h2>
                <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
                <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
                <label class="checkbox">
                  <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
              </form>
            </div>
          <div class="col-xs-6 col-sm-4"></div>
      </div>  
  </body>
</html>
