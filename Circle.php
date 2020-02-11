<? 
class Circle {

    protected $r;

    public function __construct($r) {
        $this->r = $r;
    }

    public function getArea() {
        return  $this->r * $this->r * pi();
    }

    public function getPerimeter() {
        return 2 * $this->r * pi();
    }
}

$circle = new Circle(4);

echo $circle->getArea(); 

?>