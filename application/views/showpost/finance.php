</div>
<div class="page-title" style="text-align:center;">
    <h3 style="text-align:center; margin-top:3rem;"><?=  $title ?></h3>
    <span >Blog/<?= $title?></span>
</div>
<!-- </div> -->

<div class="d-grid">
       
       </div>
       
       
       <div class="container">
         <div class="row">
           <div class="col m-3 p-3">
           <?php foreach($posts as $post): ?>
                       
                       <div class="m-3 p-3 card w-100" style="width: 18rem;">
                           <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($post->blog_image); ?>" class="card-img-top" alt="...">
                           <div class="card-body">
                               <h5 class="card-title"><?php echo $post->blog_title ; ?></h5>
                               
                               <p class="card-text"><?php echo word_limiter($post->blog_paragraph , 25) ?></p>
                               <h6 class="card-text"><?php echo $post->category ?></h6>
                               <h6 class="card-text"><?php echo $post->created_at ?></h6>
                               <a href="#" class="btn btn-success">Go somewhere</a>
                           </div>
                       </div>
           
                   <?php endforeach; ?>    
               </div>
          
         </div>
       </div>
       