<div class="d-grid">

    
    <?php echo validation_errors(); ?>
    <?php echo form_open('categories/create'); ?>
    <div class="mb-3">
      <h2 class="text-center m-3"> <?=  $title ?> </h2>
    <label for="exampleInputEmail1" class="form-label">Add a  Categories</label>
    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">The name is how it appears on your site.</div>
    
</div>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Slug</label>
    <input type="text" name="category_slug" class="form-control" id="exampleInputPassword1">
    <div id="emailHelp" class="form-text">The “slug” is the URL-friendly version of the name. It is usually all lowercase and contains only letters, numbers, and hyphens.</div>
</div>

<label for="floatingTextarea">Description</label>
<div class="form-floating">
  <textarea name="category_description"  class="form-control" placeholder="Add a Description here" id="floatingTextarea"></textarea>
</div>

  <div class="m-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<!-- view category section -->





</div>

