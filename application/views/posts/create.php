<h3 class="text-center  mt-3">Create a Blog Post</h3>
<?php echo  form_open('posts/create'); ?>
<?php echo validation_errors(); ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Title</label>
    <input type="text" class="form-control" name="blog_title" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input type="file" name="blog_image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Paragraph</label>
  <textarea class="form-control" name="blog_paragraph" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

  

  <div class="mb-3">
        <select class="form-select" name="category" aria-label="Default select example">
            <option selected>Please Select a Category</option>
            <option value="Cricket">Cricket</option>
            <option value="Finance">Finance</option>
            <option value="Sports">Sports</option>
            <option value="Ipo">Ipo</option>
            <option value="FootBall">FootBall</option>
            <option value="Politics">Politics</option>
        </select>
</div>

<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

               
    
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


<!-- printing the success  -->
<?php if($this->session->flashdata('msg')): ?>
    <p><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>



