<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="page-breadcrumbs">
        <h1 class="text-center" >Divya</h1>
        <p>About/Divya</p>
    </div>

    <div class="text-center page-image">
        <img class=" mt-3" src="<?php echo base_url() ?>application/assets/img/divya.png" alt="divya">
    </div>

    <div class="page-content-section">

        <div class="mt-3 page-content">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis veniam eveniet! Minima ex omnis et deserunt optio cum aperiam perferendis! Dignissimos, non. Quisquam illo atque repellat ex distinctio aut sit ipsum excepturi beatae? Ab quibusdam quod saepe earum nisi suscipit laudantium dolores eligendi deleniti incidunt! Asperiores veritatis nostrum atque. Officia necessitatibus sit laboriosam archiLorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis veniam eveniet! Minima ex omnis et deserunt optio cum aperiam perferendis! Dignissimos, non. Quisquam illo atque repellat ex distinctio aut sit ipsum excepturi beatae?  Ab quibusdam quod saepe earum nisi suscipit laudantium dolores eligendi deleniti incidunt! Asperiores veritatis nostrum atque. Officia necessitatibus sit laboriosam architecto pariatur delectus, nobis amet officiis doloribus voluptas a ipsa. Saepe, accusantium nisi dignissimos temporibus alias ut dolore asperiores maxime velit vitae! Ipsa ullam laudantium est tenetur, quae quam
            </p>
            
            <p>
                
                delectus nulla natus, suscipit, asperiores vero voluptatem! Qui error dolorem distinctio dolore unde consequuntur ducimus exercitationem voluptate.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod omnis veniam eveniet! Minima ex omnis et deserunt optio cum aperiam perferendis!
            </p>
            
            <p>
                
                Dignissimos, non. Quisquam illo atque repellat ex distinctio aut sit ipsum excepturi beatae? Ab quibusdam quod saepe earum nisi suscipit laudantium dolores eligendi deleniti incidunt! Asperiores veritatis nostrum atque. Officia necessitatibus sit laboriosam architecto pariatur delectus, nobis amet officiis doloribus voluptas a ipsa. Saepe, accusantium nisi dignissimos temporibus alias ut dolore asperiores maxime velit vitae! Ipsa ullam laudantium est tenetur, quae quam delectus nulla natus, suscipit, asperiores vero voluptatem!
            </p>
            
            <p>
                Qui error dolorem distinctio dolore unde consequuntur ducimus exercitationem voluptate.tecto pariatur delectus, nobis amet officiis doloribus voluptas a ipsa. Saepe, accusantium nisi dignissimos temporibus alias ut dolore asperiores maxime velit vitae! Ipsa ullam laudantium est tenetur, quae quam delectus nulla natus, suscipit, asperiores vero voluptatem! Qui error dolorem distinctio dolore unde consequuntur ducimus exercitationem voluptate.
            </p>
        </div>

        <div class="page-sidebar" style="margin-left:3rem;">
            <h2> <?= $title ?> </h2>
        <?php foreach($categories as $view): ?>
            
            
                <p class="d-block"><?php echo $view->category_name ?></p>
            
            <?php endforeach ; ?>
<hr>
            <!-- recent post -->

            <h2> <?= $recent ?> </h2>
            
            <?php foreach($recentpost as $recentpost): ?>
                <div>
                    
                    
                    <p class=""><?php echo $recentpost->blog_title ?></p>
                    <span><?php echo $recentpost->created_at ?></span>
                    <hr>
                    
                </div>
                    <?php endforeach ; ?>

        </div>
    </div>

    </body>
    </html>