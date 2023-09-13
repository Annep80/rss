<?php 
foreach ($rss->channel->item as $item){
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
        <h5 class="card-title mb-3">'.$titleItem.'</h5>
        <img class="col-6" src="'.$imgItem.'" alt="'.$imgItem.'" />
        <div class="card-body">
            <p class="card-text">'.$descriptionItem.'</p>
            <a href="'.$item->link.'">'.mb_convert_encoding($item->title,'UTF-8').'</a> ('.$date.')

    '<div class="col-12 col-md-4 card mt-3">
        <img class="card-img-top col-6" src="'.$imgItem.'" alt="'.$imgItem.'" />
        <h5 class="mt-3 card-title">'.$titleItem.'</h5>
        <div class="card-body">
            ('.$date.')
            <p>'.$descriptionItem.'</p>
            <div class="buttonCard mt-5"> 
            <a href="'.$item->link.'"class="btn btn-primary">Accèder à l\'article</a>
            </div>

        </div>
    </div>';
}

?>