<?php

class product extends DB {

    public function getCartItem() {
        $sql = "SELECT * FROM cart";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()){
            // echo $row['name'] . '<br>';
            $array[] = $row;
        }
        return $array;
    }

}