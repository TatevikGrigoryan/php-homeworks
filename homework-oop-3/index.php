<?php
/*1. • Create a Rectangle class and a method which calculates its area.
• Create a Square class which extends Rectangle. Do not create the
same method again, but it should work correctly.*/

class Rectangle
{
    protected int $height;
    protected int $width;

    public function __construct($height, $width)
    {
        $this->height = $this->set_height($height);
        $this->width = $this->set_width($width);
    }

    public function get_height(): int
    {
        return $this->height;
    }

    public function get_width(): int
    {
        return $this->width;
    }

    public function set_width($width): int
    {
        return $this->width = $width;
    }

    public function set_height($width): int
    {
        return $this->width = $width;
    }

    public function area(): int
    {
        return $this->get_width() * $this->get_height();
    }
}

class Square extends Rectangle
{
    public int $height;
    public int $width;

    public function __construct($height)
    {
        $this->height = $height;
        $this->width = $height;
    }
}

$rec = new Rectangle(5, 4);
echo $rec->area(); // 20
echo "<br>";
$sq = new Square(6);
echo $sq->area(); // 36
echo "<br>";

/*
 Exercise
1. Create an abstract class with the name of User, which has an abstract method with the name of stateYourRole().
2. Add to the class a protected variable with the name of $username, and public setter and getter methods to set and get the $username.
3. Create an Admin class that inherits the abstract User class.
4. Define the method stateYourRole() in the child class and let it return the string "admin";
5. Create another class, Viewer that inherits the User abstract class. Define the method that should be defined in each child class of the User class.
6. Create an object from the Admin class, set the username to "Balthazar", and make it return the string "admin".
 * */

abstract class User
{
    protected $username;

    function __construct($username)
    {
        $this->set_username($username);
    }

    abstract function stateYourRole();

    public function set_username($username)
    {
        $this->username = $username;
    }

    public function get_username($username)
    {
        return $this->username;
    }
}

class Admin extends User
{
    function stateYourRole(): string
    {
        return "admin";
    }
}

class Viewer extends User
{
    function stateYourRole(): string
    {
        return "viewer";
    }
}

$admin = new Admin("Balthazar");
echo $admin->stateYourRole();

/*
 Exercise
1. Add to the User class concrete methods to set and get the number of articles:1. setNumberOfArticles($int)2. getNumberOfArticles()$int stands for an integer.
2. Add to the class the abstract method: calcScores(), that performs the scores calculations separately for each class.
3. Create an Author class that inherits from the User class. In the Author create a concrete calcScores() method that returns the number of scores from the following calculation:numberOfArticles * 10 + 20
4. Also create an Editor class that inherits from the User class. In
the Editor create a concrete calcScores() method that returns the
number of scores from the following calculation:
numberOfArticles * 6 + 15.
5. Create an object, $author1, from the Author class, set the number
of articles to 8, and echo the scores that the author gained. Expected
result: 100.
6. Create another object, $editor1, from the Editor class, set the
number of articles to 15, and echo the scores that the editor gained.
Expected result: 100 105
 * */

abstract class User_1
{
    protected int $articles;

    function __construct($articles)
    {
        $this->setNumberOfArticles($articles);
    }

    public function setNumberOfArticles($articles)
    {
        $this->articles = $articles;
    }

    public function getNumberOfArticles(): int
    {
        return $this->articles;
    }

    abstract function calcScores();
}

class Author extends User_1
{

    public function calcScores(): int
    {
        return parent::getNumberOfArticles() * 10 + 20;
    }
}

class Editor extends User_1
{

    public function calcScores(): int
    {
        return parent::getNumberOfArticles() * 6 + 15;
    }
}

$author1 = new Author(8);
echo "<br>";
echo $author1->calcScores();
$editor = new Editor(15);
echo "<br>";
echo $editor->calcScores();
