<div class="container">
    <h1 class="heading">Signup</h1> 

    <form action="./server/requests.php" method="post">
    <div class="col-6 offset-sm-3 margin-bottom">
    <label for="username" class="form-label">User Name</label>
    <input type="text" name="username" class="form-control" id="username" placeholder="Enter user name">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom">
    <label for="email" class="form-label">User Email</label>
    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom">
    <label for="password" class="form-label">User Password</label>
    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom">
    <label for="user address" class="form-label">User Address</label>
    <input type="text" name="address" class="form-control" id="address" placeholder="Enter user address">
  </div>
  
  <div class="col-6 offset-sm-3 margin-bottom">
  <button type="submit" name="btn-submit" class="btn btn-primary">Submit</button>
  </div>
</form>

</div>