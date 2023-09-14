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
    '<div class="card m-3 row">
        <div class="col-12">
        <img class="card-img-top " src="'.$imgItem.'" alt="'.$imgItem.'" />
        </div>
        <div class="col-12">
        <h5 class="card-title mb-5 mt-4">'.$titleItem.'</h5>
        </div>
        <div class="card-body col-12">
            <div class="row justify-content-end">
                <div class="col-12">
                    <p>('.$date.')</p>
                </div>
                <div class="col-12"> 
                    <p>'.$descriptionItem.'</p>
                </div>
                <div class="buttonCard mt-5 col-12 d-flex justify-content-end"> 
                    <a href="' . $item->link . '"class="btn btn-primary" target="blank">Accèder à l\'article</a>
                </div>
            </div>
        </div>
    </div>';
    $display++;
    
    }
}
