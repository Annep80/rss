<section class="container-fluid">
    <div class="row justify-content-center">
        <div class="subject col-12 col-md-8">
            <h2 class="text-center"><?=$choice?></h2>
                <?php
                foreach ($rss->channel->item as $item) {
                    // var_dump($item);
                    // die;
                    $titleItem = $item->title;
                    $imgItem = $item->enclosure['url'];
                    $descriptionItem = $item->description;
                    $descriptionItem = preg_replace("/<img[^>]+\>/i", "", $descriptionItem);
                    // echo($imgItem); 
                    // die; 
                    $datetime = date_create($item->pubDate);
                    $date = date_format($datetime, 'd M Y, H\hi');
                    echo    
                    '<div class="card mt-3">
                        <img class="card-img-top col-6" src="'.$imgItem.'" alt="'.$imgItem.'" />
                        <h5 class="card-title mb-5 mt-4">'.$titleItem.'</h5>
                        <div class="card-body">
                            ('.$date.') 
                            <p>'.$descriptionItem.'</p>
                            <div class="buttonCard mt-5"> 
                            <a href="' . $item->link . '"class="btn btn-primary" target="blank">Accèder à l\'article</a>
                            </div>
                        </div>
                    </div>';
                }
                ?>
        </div>
    </div>
</section>