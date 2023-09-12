<?php 
echo '<div>';
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
    '<div class="card mt-3>
        <h5 class="card-title">'.$titleItem.'</h5>
        <img class="col-6" src="'.$imgItem.'" alt="'.$imgItem.'" />
        <div class="card-body">
            <p>'.$descriptionItem.'</p>
            <a href="'.$item->link.'">'.mb_convert_encoding($item->title,'UTF-8').'</a> ('.$date.')
        </div>
    </div>';
}
echo '</div>';
?>

            <!-- <div class="card mt-3">    
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Exemple de titre</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Lire</a>
                </div>
            </div> -->