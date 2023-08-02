<?php
/*1.
Exercise
Create a constructor and get methods using type declarations for the following class:
<?php
class User
{
    private $name;
    private $age;
    private $height; // in meters
    private $isMarried;
    private $childrenCount;
}
*/

class User
{
    private string $name;
    private int $age;
    private int $height; // in meters
    private bool $isMarried;
    private ?int $childrenCount;

    public function __construct( string $name, int $age, int $height, bool $isMarried, ?int $childrenCount)
    {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->isMarried = $isMarried;
        $this->childrenCount =$childrenCount;
    }

    public function get_name(): string
    {
        return $this->name;
    }

    public function get_age(): int
    {
        return $this->age;
    }

    public function get_height(): int
    {
        return $this->height;
    }

    public function get_isMarried(): bool
    {
        return $this->isMarried;
    }

    public function get_childrenCount(): ?int
    {
        return $this->childrenCount;
    }
}

/*2.
Exercise
1. Using a regular expression, check if a string can be used as a
variable name in PHP.
2. Write a PHP script that checks if a string contains another string.
3. Write a PHP script that removes the whitespaces from a string
*/
//1.
function isValidPhpVariableName($name): bool {
    return preg_match('/^[a-zA-Z_][a-zA-Z0-9_]*$/', $name) === 1;
}

//2.
function isContainsSubstring($string, $substring) {
    $pattern = '/'. preg_quote($substring, '/') .'/';

    return preg_match($pattern, $string) === 1;
}

//3.
function removeWhitespaces($inputString): string {
    return preg_replace('/\s+/', '', $inputString);
}

//4. Use try...catch...to handle requiring a non-existing file.
try {
    require 'non_existing_file.php';
} catch (ErrorException $e) {
    echo "An error occurred: " . $e->getMessage();
}