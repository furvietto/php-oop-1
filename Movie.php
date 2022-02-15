<?php

class Movie 
{
    public $title;
    public $price;
    public $film_length;
    public $cover;
    public $cast;
    public $description;
    public $language;
    public $rental;
    
    public function __construct($title,$price,$language,$rental,$description)
    {
        $this->title = $title;
        $this->price = $price;
        $this->language = $language;
        if ($rental == true) {
            $this->rental = "true";
        }else{
            $this->rental = "false";
        }
        $this->description = $description;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }


    public function setFilmLength($film_length)
    {
        $this->film_length = $film_length;
    }
    public function getFilmLength()
    {
        return $this->film_length;
    }


    public function setCover($cover)
    {
        $this->cover = $cover;
    }
    public function getCover()
    {
        return $this->cover;
    }


    public function setCast($cast)
    {
        $this->cast = $cast;
    }
    public function getCast()
    {
        return $this->cast;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }


    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getLanguage()
    {
        return $this->language;
    }


    public function setRental($rental)
    {
        $this->rental = $rental;
    }
    public function getRental()
    {
        return $this->rental;
    }
 
}

$movies = new Movie("avengers" , 30, "turkish" , false, "eiufheiuvebqiuqb");
$movies->setTitle("Alice nel paese delle meraviglie");

$movies2 = new Movie("il Signore degli anelli", 20, "english", true, "iucewhfiuewh");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
       <li>
            <h1>TITOLO: <?php echo $movies->getTitle() ?></li> </h1> 
       <li>PREZZO: <?php echo $movies->getPrice() ?></li> 
       <li>LANGUAGE: <?php echo $movies->getLanguage() ?></li> 
       <li>RENTAL: <?php echo $movies->getRental() ?></li> 
       <li>DESCRIPTION: <?php echo $movies->getDescription() ?></li> 
    </ul>
    <ul>
       <li>
            <h1>TITOLO: <?php echo $movies2->getTitle() ?></li> </h1> 
       <li>PREZZO: <?php echo $movies2->getPrice() ?></li> 
       <li>LANGUAGE: <?php echo $movies2->getLanguage() ?></li> 
       <li>RENTAL: <?php echo $movies2->getRental() ?></li> 
       <li>DESCRIPTION: <?php echo $movies2->getDescription() ?></li> 
    </ul>
</body>
</html>