# Usage
<hr>
### SELECT
```php
$result = $DB->table('users')->select()->get();
```

### Select With Where
```php
$result = $DB->table('users')->select(["first_name" , "mobile"])->where("age" , ">" , 22)->get();
```

### Insert
```php
$result =  $DB->table('users')->insert(['first_name' , 'last_name'], ['hamed' , 'akbarzadeh']);
```

### Update
```php
$result =  $DB->table('users')->where("id" , 1)->update(['first_name' , 'HmD']);
```
### Delete
```php
$result =  $DB->table('users')->where("id" , 1)->delete();
```
