<html lang="en">
    <head>
        <title>PHP</title>
    </head>
    <body>
        <?php
            class Book{
                //Properties
                var $title;
                var $author;
                var $pages;
                private $rating;

                function __construct($title,$author,$pages,$rating){
                    $this->title = $title;
                    $this->author = $author;
                    $this->pages = $pages;
                    $this->rating = $rating;
                }

                function setRating($rating){
                    if($rating >= 0 && $rating <= 10){
                        $this->rating = $rating;
                    }else{
                        $this->rating = "Invalid Rating";
                    }
                }
                function __destruct(){
                    echo $this->title.",".$this->author.",".$this->pages.",".$this->rating."<br>";
                }
            }

            $book1 = new Book("Harry Potter", "JK Rowling", 400,7.8);
            $book1->setRating(8.5);

            $book2 = new Book("Lord of the Rings", "Tolkien", 700,5.8);
            $book2->setRating(11);
        ?>
    </body>
</html>