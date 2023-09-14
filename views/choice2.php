<?php
$display=0;
foreach ($rss2->channel->item as $item) {
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

    if($display < $displayChoice){
    echo 
    '<div class="card mt-3">
        <img class="card-img-top col-6" src="'.$imgItem.'" alt="'.$imgItem.'" />
        <h5 class="card-title mb-5 mt-4">'.$titleItem.'</h5>
        <div class="card-body">
            ('.$date.') 
            <p>'.$descriptionItem.'</p>
            <div class="buttonCard mt-5"> 
            <a href="' . $item->link . '"class="btn btn-primary target="blank">Accèder à l\'article</a>
            </div>
        </div>
    </div>';
    $display++;
    
    }
}
