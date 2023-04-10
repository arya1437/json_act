<?php
header('Access-Control-Allow-Origin: *');
$religion = array(
    array(
        "religionname" => "Catholic",
        "history" => "Roman Catholicism traces its history to Jesus during the period of Roman occupation in the early 30s of the Common Era.",
        "location" => "Mostly concentrated in the northern part of the Philippines, but can be found throughout the country.",
        "holy_book" => "Bible",
        "leader" => "Pope Francis",
        "image" => "https://catholicparishchurch.files.wordpress.com/2017/05/800px-quiapo_church.jpg?w=750"
    ),

    array(
        "religionname" => "Iglesia ni Cristo",
        "history" => "In 1913, Felix Manalo founded one such independent Christian church called Iglesia ni Cristo.",
        "location" => "Can be found throughout the country, with a significant number of adherents in Luzon and Metro Manila.",
        "holy_book" => "Pasugo",
        "leader" => "Eduardo V. Manalo",
        "image" => "https://cdn.catholic.com/wp-content/uploads/AdobeStock_402756222-900x900.jpeg"
    ),

    array(
        "religionname" => "Islam",
        "history" => "Islam started in Mecca, in modern-day Saudi Arabia, during the time of the prophet Muhammad's life.",
        "location" => "Concentrated in Mindanao, but can also be found in other parts of the country.",
        "holy_book" => "Quran",
        "leader" => "Muhammad Khalifa",
        "image" => "https://www.kjreports.com/wp-content/uploads/2017/08/pink-mosque.jpg"
    ),

    array(
        "religionname" => "Buddhism",
        "history" => "When Gautama passed away around 483 B.C., his followers began to organize a religious movement.",
        "location" => "Concentrated in urban areas such as Manila and Cebu.",
        "holy_book" => "Tipitaka",
        "leader" => "Ven. Thich Nhat Hanh",
        "image" => "https://i0.wp.com/tulay.ph/wp-content/uploads/2021/07/Hwa-Chong-Temple.jpg?fit=1024%2C768&amp;ssl=1"
    ),

    array(
        "religionname" => "Protestantism",
        "history" => "a movement that began seeking to reform the Catholic Church from within in the 16th century against errors, abuses, and discrepancies",
        "location" => "Can be found throughout the country, with a significant number of adherents in the Visayas and Mindanao regions.",
        "holy_book" => "Bible",
        "leader" => "Bishop Ted Bacani",
        "image" => "https://farm1.static.flickr.com/142/342136312_de20689ff9.jpg"
    ),
);

echo json_encode(array("religion" => $religion));
?>