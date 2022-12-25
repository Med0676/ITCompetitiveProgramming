<?php
// PROBLEM 02
echo ("<h3 style=color:red>PROBLEM 02 The result is: </h3>");
echo str_rot13("vgpSYNT{s6e0g_02rc0_9er_6zc5e29a2}");
echo "<br>";

?>

<?php
// PROBLEM 03
class Node {
    public $value;
    public $next;
    public function __construct($value) {
        $this->value = $value;
        $this->next = null;
    }
}
class LinkedList {
    public $head;
    public function __construct() {
        $this->head = null;
    }
    public function add($value) {
        $newNode = new Node($value);
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            $curr = $this->head;
            while ($curr->next != null) {
                $curr = $curr->next;
            }
            $curr->next = $newNode;
        }
    }
    public function remove() {
        $uniqueList = new LinkedList();
        $curr = $this->head;
        while ($curr != null) {
            if (!$uniqueList->contains($curr->value)) {
                $uniqueList->add($curr->value);
            }
            $curr = $curr->next;
        }
        return $uniqueList;
    }
    public function contains($value) {
        $curr = $this->head;
        while ($curr != null) {
            if ($curr->value == $value) {
                return true;
            }
            $curr = $curr->next;
        }
        return false;
    }
}
$list = new LinkedList();
$list->add(1);
$list->add(1);
$list->add(2);
$list->add(2);
$list->add(3);
$uniqueList = $list->remove();
$curr = $uniqueList->head;
echo ("<h3 style=color:red>PROBLEM 03 The result is: </h3>");
while ($curr != null) {
  echo "<pre>";  echo ($curr->value . " "); echo "</pre>";
    $curr = $curr->next;
}
?>

<?php
//PROBLEM 04
echo ("<h3 style=color:red>PROBLEM 04 The result is: </h3>");

 function merge($a, $b) {
    $lenA = count($a);
    $lenB = count($b);
    $newA = [];
    $newB = [];
    $total_arr = array_merge($a, $b);
    sort($total_arr);
    for ($i = 0; $i < $lenA; $i++) {
        $newA[] = $total_arr[$i];
    }
    for ($j = $lenA; $j < $lenA + $lenB; $j++) {
        $newB[] = $total_arr[$j];
    }
    echo "<pre>";

    echo("a = " . implode(",", $newA) . "\n");
    echo("b = " . implode(",", $newB) . "\n");
    echo "</pre>";
}
$a = [0, 2, 4, 6, 8];
$b = [1, 3, 5, 7];
merge($a, $b);

?>

