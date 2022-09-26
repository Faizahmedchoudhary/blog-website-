
<div class="d-grid">

       
</div>


<div class="container">
  <div class="row">
    <div class="col m-3 p-3">
    <?php foreach($posts as $post): ?>
                
                <div class="m-3 p-3 card w-100" style="width: 18rem;">
                    <img src="<?php echo base_url() ?>application/assets/img/logo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $post->blog_title ; ?></h5>
                        <p class="card-text"><?php echo word_limiter($post->blog_paragraph , 40) ?></p>
                        <h6 class="card-text"><?php echo $post->category ?></h6>
                        <h6 class="card-text"><?php echo $post->created_at ?></h6>
                        <a href="<?php echo base_url() ?>post/<?php echo $post->slug ?>" class="btn btn-success">Read More</a>
                    </div>
                </div>
    
            <?php endforeach; ?>    
        </div>
   
  </div>
</div>
