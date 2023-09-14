<?php
$display=0;
foreach ($rss1->channel->item as $item) {
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
        <img class="card-img-top h-25 col-6" src="'.$imgItem.'" alt="'.$imgItem.'" />
        <h5 class="card-title mb-5 mt-4">'.$titleItem.'</h5>
        <div class="card-body h-50">
            ('.$date.') 
            <p class="h-50 overflow-hidden">'.$descriptionItem.'</p>
            <div class="buttonCard mt-5"> 
            <a href="' . $item->link . '"class="btn btn-primary" target="blank">Accèder à l\'article</a>
            </div>
        </div>
    </div>';
    $display++;
    
    }
}
