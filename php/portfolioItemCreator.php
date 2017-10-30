<?php 
    //First i create an array to contain all the portfolio items
    $portfolioArray = array();

    // $portfolioArray[] = array("title"=>"", "link"=>"", "img"=>"", "alt"=>"", "info"=>"",);
    //CC travel
    $tempInfo = "";
    if($_SESSION["language"] === "English"){
        $tempInfo = "This website was made for project 2.1 which was about a website with immersive experience as focus, The Project was made in cooperation with CC Travel, a traveling firm specialiseing in tailor made travels <br><br> <a href='https://github.com/Dannyfk/cctravel' target='blank'>Github link</a>";
    } else {
        $tempInfo = "Denne hjemmeside er lavet i forbindelse med projekt 2.1 der handlede om at lave en hjemmeside med fokus på immersive experience. Projektet er lavet i samarbejde med CC Travel
        der er et rejsefirma der specialisere i at skræddersy rejser.  <br><br> <a href='https://github.com/Dannyfk/cctravel' target='blank'>Github link</a>";
    }
    $portfolioArray[] = array("title"=>"CC Travel immersive experience", "link"=>"http://dfkwebdesign.com/cctravel/", "img"=>"images/ccTravel.png", "alt"=>"CC Travel", 
    "info"=>$tempInfo);

    //Burgershack aarhus
    if($_SESSION["language"] === "English"){
        $tempInfo = "This website was made for project 2.2 which was an exams project focusing on everything we've learned, The Project was made in cooperation with The Burger Shack Aarhus, a burgerjoin focusing on sustainability and ecology <br><br> <a href='https://github.com/Dannyfk/theburgershack' target='blank'>Github link</a>";
    } else {
        $tempInfo = "Denne hjemmeside er lavet i forbindelse med projekt 2.2 der var et multimedie designer projekt der omhandlede at bruge alt det vi havde lært. Projektet er lavet i samarbejde med The Burger Shack Aarhus, et burgerjoint der har fokus på bæredygtighed og økologi <br><br> <a href='https://github.com/Dannyfk/theburgershack' target='blank'>Github link</a>";
    }
    $portfolioArray[] = array("title"=>"The Burger Shack Aarhus", "link"=>"http://dfkwebdesign.com/theburgershack/", "img"=>"images/theBurgerShack.jpg", "alt"=>"The Burger Shack", 
    "info"=>$tempInfo);

    //Coding Playground
    if($_SESSION["language"] === "English"){
        $tempInfo = "This is a collection of my coding projects. Some are just small websites with a single focus, other are smaller projects";
    } else {
        $tempInfo = "Denne hjemmeside er en samling af mine kode projekter. Nogle er små hjemmesider med et enkelt fokus, andre er mindre projekter";
    }
    $portfolioArray[] = array("title"=>"Coding Playground", "link"=>"http://dfkwebdesign.com/smallCodingProjects", "img"=>"images/codingPlayground.PNG", "alt"=>"Coding Playground", 
    "info"=>$tempInfo);

    //Grundfos project
    if($_SESSION["language"] === "English"){
        $tempInfo = "This is a prototype made for project 3.2 in cooperation with Grundfos. We had to create a prototype to solve how they could distribute their marketing material online <br><br> <a href='https://github.com/Dannyfk/MarketingModuleGrundfos' target='blank'>Github link</a>";
    } else {
        $tempInfo = "Dette er en prototype lavet til projekt 3.2 i samarbejde med Grundfos. Det er prototype der er lavet for at give Grundfos et forslag til hvordan de kan præsentere deres marketing material online <br><br> <a href='https://github.com/Dannyfk/MarketingModuleGrundfos' target='blank'>Github link</a>";
    }
    $portfolioArray[] = array("title"=>"Grundfos Marketing material module", "link"=>"http://dfkwebdesign.com/projects/marketingModuleGrundfosPrototype/", "img"=>"images/marketingModuleGrundfos.PNG", "alt"=>"Marketing module Grundfos", 
    "info"=>$tempInfo);


    //I loop the array to create a container with each protfolio item 
    $id = 0;
foreach ($portfolioArray as $item) {
    if($id===3){
        ?>
        <article class="portfolioItem" id="porfolioItemWorkaround">
            <?php
    } else {
    ?>
<article class="portfolioItem">
    <?php 
    }
    ?>
    <h5><?php echo $item["title"] ?></h5>
    <a href=<?php echo $item["link"] ?> target="blank"><img class="portfolioImage" src=<?php echo $item["img"] ?> alt=<?php echo $item["alt"] ?>></a>
    <br>
    <input id="toggle<?php echo $id ?>" type="checkbox" >
    <label for="toggle<?php echo $id ?>">Info</label>
    <section id="expand<?php echo $id ?>">
        <p><?php echo $item["info"] ?>
        </p>
    </section>
</article>

<?php
    $id ++;
    }
?>