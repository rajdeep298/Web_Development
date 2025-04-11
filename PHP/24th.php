<html>
    <head>
        <title>24th Program</title>
    </head>
    <body>
        <?php
            class Book_1{
                //Properties
                var $title;
                var $author;
                var $pages;

                function __construct($title,$author,$pages){
                    $this->title = $title;
                    $this->author = $author;
                    $this->pages = $pages;
                }

                function good_book(){
                    echo $this->title." is a good book<br>";
                }
            }

            class Book_2 extends Book_1{
                function Bengali(){
                    echo $this->title." is a Bengali book<br>";
                }
            }

            $book1 = new Book_1("Harry Potter", "JK Rowling", 400);
            $book1->good_book();

            $book2 = new Book_2("Feluda Samagra", "Satyajit Roy", 2000);
            $book2->good_book();
            $book2->Bengali();
        ?>
    </body>
</html>
