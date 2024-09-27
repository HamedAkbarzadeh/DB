<?php

require_once 'DB.php';

$sql = new DB();


//////  Example  //////

### Select
// $result = $sql->table('users')->select()->get();

### Select With Where
// $result = $sql->table('users')->select(["first_name" , "mobile"])->where("age" , ">" , 22)->get();

### Insert
// $result =  $sql->table('users')->insert(['first_name' , 'last_name'], ['hamed' , 'akbarzadeh']);


### Update
// $result =  $sql->table('users')->where("id" , 1)->update(['first_name' , 'HmD']);

### Delete
// $result =  $sql->table('users')->where("id" , 1)->delete();