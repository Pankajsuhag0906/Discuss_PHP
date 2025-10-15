<div class="container">
    <h1 class="heading">Ask a Question</h1> 

    <form action="./Server/requests.php" method="post">
 

  <div class="col-6 offset-sm-3 margin-bottom">
    <label for="title" class="form-label">Title</label>
    <input type="title" name="title" class="form-control" id="title" placeholder="Enter Question">
  </div>

  <div class="col-6 offset-sm-3 margin-bottom">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Enter Question Title"></textarea>
  </div>

  <div class="col-6 offset-sm-3 margin-bottom">
    <label for="category" class="form-label">Category</label>
   <?php include("category.php") ?>
    <!-- <select name="category" class="form-control" id="category" >    
        <option>Mobile</option>
        <option>General</option>
        <option>Coding</option>
    </select> -->
  </div>
  <div class="col-6 offset-sm-3 margin-bottom">
  <button type="submit" name="btn-ask" class="btn btn-primary">Ask Question</button>
  </div>
</form>

</div>