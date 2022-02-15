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
        $this->rental = $rental;
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
    <div>
        <?php echo $movies->getTitle() ?>
    </div>
</body>
</html>