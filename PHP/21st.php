<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            class Book{
                //Properties
                var $title;
                var $author;
                var $pages;

                function __construct($title,$author,$pages){
                    $this->title = $title;
                    $this->author = $author;
                    $this->pages = $pages;
                }

                function book_heavy(){
                    if($this->pages >= 500){
                        return $this->title." is a heavy Book<br>";
                    }else{
                        return $this->title." is not that heavy<br>";
                    }
                }
            }

            $book1 = new Book("Harry Potter", "JK Rowling", 400);
            echo "Details of Book-1:<br>";
            echo $book1->title."<br>";
            echo $book1->author."<br>";
            echo $book1->pages."<br>";
            echo $book1->book_heavy();

            $book2 = new Book("Lord of the Rings", "Tolkien", 700);
            echo "Details of Book-2:<br>";
            echo $book2->title."<br>";
            echo $book2->author."<br>";
            echo $book2->pages."<br>";
            echo $book2->book_heavy();
        ?>
    </body>
</html>
