<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

$jewelry = array(
    array(
        "id" => 1,
        "jewelriesType" => "Necklace",
        "brandName" => "Borsheims" ,
        "metalType" => "Gold",
        "price" => "$312.00",
        "description" => "Versatile and comfortable, this flat link chain necklace is great for layering or worn alone. Fashioned in 14K yellow gold, the high polish reflects light for the perfect amount of shine and sparkle. Measuring 16, this necklace is sure to be a staple in your wardrobe.  "
       
      
    ),
    array(
        "id" => 2,
        "jewelriesType" => "Earings",
        "brandName" => "Aresa" ,
        "metalType" => "White Gold",
        "price" => "$10,782.00",
        "description" => "Classical elements offer a timeless touch to these contemporary emerald cut diamond dangle earrings by Aresa. Slim white gold posts suspend strands of sparkling emerald cut diamonds ending in single round diamonds for a traditional final touch.."
    ),
    array(
        "id" => 3,
        "jewelriesType" => "Rings",
        "brandName" => "Doves" ,
        "metalType" => "Silver",
        "price" => "$3,295.00",
        "description" => "Designed to be noticed, this 18K white gold ring from Doves beautifully presents a 3.83 ct cool blue topaz gemstone."
    ),
    array(
        "id" => 4,
        "jewelriesType" => "Bracelet",
        "brandName" => "FREDERIC SAGE" ,
        "metalType" => "Yellow Gold",
        "price" => "$2,970.00",
        "description" => "The coil stretch design offers a stunning textured look and feel to this Frederic Sage diamond stretch bracelet."
    ),
    array(
        "id" => 5,
        "jewelriesType" => "Chain",
        "brandName" => "Alex Woo" ,
        "metalType" => "Silver",
        "price" => "$2,970.00",
        "description" => "Ball chains, also known as bead chains, are constructed of orbs connected by bars. Ball chains provide a casual, urban-chic look that pairs well with small pendants."
    )
);

echo json_encode($jewelry);
?>