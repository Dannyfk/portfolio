<?php
// I create my text in an assoicative array so i can just call the key to get the value and depending on language selected it will get the value from the correct language pack
        $danish = array("introBtn"=>"Udforsk","portfolio_Intro"=>"Mit portfolio","about_Intro"=>"Om mig", "about_Content"=>"Hej, mit navn er Danny Fogh Kristensen. 
        Jeg studerer i øjeblikket multimediedesigner på 3rd semester med speciale i Frontend Developer. Jeg kan godt lide at programmere fordi det føles godt at bringe ting
        til livs og få ting til at fungere via kode. Jeg har ikke noget imod at støde på problemer engang imellem, da det giver mig mulighed for at lære af mine fejl
         og måske enddag finde en bedre løsning til problemet", "fromMe_Intro"=>"Hvad kan du forvente fra mig", "fromMe_Content"=>"En lærenem programmør der ikke er bange for at sætte mig
        ind i nye ting og forbedre min kodning. Jeg forsøger altid at have en vis struktur i min kodning og sigter efter at færdiggøre mine ting med en god kvalitet.", 
        "competences_Intro"=>"Mine kompetenser", "contact_Intro"=>"Kontakt & links");

        $english = array("introBtn"=>"Explore","portfolio_Intro"=>"My portfolio","about_Intro"=>"A bit about me", "about_Content"=>"Hi, my name is Danny Fogh Kristensen. 
        I'm currently studying multimedia designer on 3rd semester with speciality in Frontend Development. I like coding because it feels good to create something
        and get it to work by using code. I don't mind problems sometimes because it gives me an oppertunity to learn from my mistakes and maybe even improve 
        my solution to the problem", "fromMe_Intro"=>"What can you expect from me", "fromMe_Content"=>"A quick learner who isn't afraid to learn new thing and work to 
        improve my coding skills. I always try to keep a certain structure in my code and aim to complete my things with good quality", 
        "competences_Intro"=>"My Competences", "contact_Intro"=>"Contact & links");
        $languageArray = array();
        
        if($_SESSION["language"] === "English"){
            $languageArray = $english;
        }else {
            $languageArray = $danish;
        }
    ?>






