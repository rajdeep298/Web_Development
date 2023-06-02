<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            class Book{
                var $title;
                var $author;
                var $pages;

                function set_credentials($title, $author, $pages){
                    $this->title = $title;
                    $this->author = $author;
                    $this->pages = $pages;
                }
                function get_credentials(){
                    return $this->title.",".$this->author.",".$this->pages;
                }
            }

            $book1 = new Book();
            $book1->set_credentials("Harry Potter", "JK Rowling", 400);
            echo $book1->get_credentials()."<br>";
        ?>
    </body>
</html>
