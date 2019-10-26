<?php

//Create Inventory Class
//There should be add item method which can add the new item and qty into the list property
//There should be a sale method which will reduce the qty of the item

class Inventory{
    private $item_list = []; 
    function additem (string $item_name, int $qty){
        $new_item = $this->buildItem($item_name, $qty);
        // var_dump($new_item);
        array_push($this->item_list, $new_item);
        var_dump($this->item_list);
    }
    private function buildItem(string $item_name, int $qty){
        return ['name'=>$item_name, 'qty'=>$qty];}

        function saleItem(string $item_name, int $sold_qty){

        
    
    $name_array = array_column($this->item_list,'name');
    $index = array_search($item_name, $name_array);
    if ($index !== false){
        $this->item_list[$index]['qty'].= $sold_qty;
    }
      
    }

}
$inventory = new Inventory();
$inventory->additem('orange',20);
$inventory->additem('apple',10);
$inventory->saleitem('apple',5);

