<? 
class Triangle {

    protected $a;
    protected $b;
    protected $c;
    protected $v;

    public function __construct($a, $b, $c, $v) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->v = $v;
    }

    public function getArea() {
        return  ($this->a * $this->v) / 2;
    }

    public function getPerimeter() {
        return $this->a + $this->b + $this->c;
    }
}

?>