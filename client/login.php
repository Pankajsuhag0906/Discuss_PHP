<div class="container">
    <h1 class="heading">Login</h1> 

    <form action="./Server/requests.php" method="post">
 

  <div class="col-6 offset-sm-3 margin-bottom">
    <label for="email" class="form-label">User Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom">
    <label for="password" class="form-label">User Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
  </div>

  
  <div class="col-6 offset-sm-3 margin-bottom">
  <button type="submit" name="login" class="btn btn-primary">Login</button>
  </div>
</form>

</div>