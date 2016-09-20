<!doctype html>
<html lang="sv">
<meta charset="utf-8" />
<title>Arrayer och listor</title>

<!-- Mithril HTML Slideshow styles -->
<link href="../css/mithril-slideshow.css" rel="stylesheet" />

<!-- Code formatting using highlight.js -->
<link rel="stylesheet" href="../css/default.css">
<link rel="stylesheet" href="../css/tomorrow.css">
<script src="../js/highlight.pack.js"></script>

<!-- Text formatting using Markdown through showdown.js -->
<script src="../js/showdown.min.js"></script>



<!-- Here comes the slides in order -->
<script data-role="slide" data-markdown type="text/html">
#Arrayer och listor
##PHP, Python
###Mikael Roos, dbwebb
</script>


<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Agenda

* PHP och arrayer
* Python och listor

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#PHP array

```
$mumin1 = ["Mumintrollet", "är", 7, "år", true, false, null];
$mumin2 = [
    "Mumintrollet",
    "är",
    7,
    "år",
    true,
    false,
    null
];

var_dump($mumin1);
print_r($mumin2);
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#PHP array...

```
array(5) {                  
  [0] =>                    
  string(12) "Mumintrollet" 
  [1] =>                    
  string(3) "är"            
  [2] =>                    
  int(7)                    
  [3] =>                    
  string(3) "år"            
  [4] =>                    
  bool(true)                
}                           
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#PHP array...

```
Array                       
(                           
    [0] => Mumintrollet     
    [1] => är               
    [2] => 7                
    [3] => år               
    [4] => 1                
)                           
```

</script>


<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Python lista

```
mumin1 = ["Mumintrollet", "är", 7, "år", True, False, None]
mumin2 = [
    "Mumintrollet",
    "är",
    7,
    "år",
    True,
    False,
    None
]

print(mumin1)
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Python lista...

```
['Mumintrollet', 'är', 7, 'år', True, False, None]
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Loop och print

```
foreach ($mumin1 as $part) {
    echo "$part ";
}
```

```
Mumintrollet är 7 år 1
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Loop och print

```
for part in mumin1:
    print(part, end=" ")
```

```
Mumintrollet är 7 år True False None
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Antal items

```
$items = count($mumin1);
print($items);
```

```
items = len(mumin1)
print(items)
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Mutable array

```
$mumin1[2] = 42;
$mumin1[10] = "Muminhuset";
$items = count($mumin1);
print($items);
var_dump($mumin1);
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Mutable array...

```
array(8) {                  
  [0] =>                     
  string(12) "Mumintrollet"  
  [1] =>                     
  string(3) "är"             
  [2] =>                     
  int(42)                    
  [3] =>                     
  string(3) "år"             
  [4] =>                     
  bool(true)                 
  [5] =>                     
  bool(false)                
  [6] =>                     
  NULL                       
  [10] =>                    
  string(10) "Muminhuset"    
}                            
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Mutable list

```
mumin1[2] = 42
mumin1.append("Muminhuset")
items = len(mumin1)
print(items)
print(mumin1)
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Mutable list...

```
8
['Mumintrollet', 'är', 42, 'år', True, False, None, 'Muminhuset']
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Array med array

```
$pelle = ["Pelle", 22];
$mats  = ["Mats", 25];
$eva   = ["Eva", 25];
$klass = [$pelle, $mats, $eva];
var_dump($klass);
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Array med array...

```
array(3) {             
  [0] =>               
  array(2) {           
    [0] =>             
    string(5) "Pelle"  
    [1] =>             
    int(22)            
  }                    
  [1] =>               
  array(2) {           
    [0] =>             
    string(4) "Mats"   
    [1] =>             
    int(25)            
  }                    
  [2] =>               
  array(2) {           
    [0] =>             
    string(3) "Eva"    
    [1] =>             
    int(25)            
  }                    
}                      
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Lista med lista

```
pelle = ["Pelle", 22]
mats = ["Mats", 25]
eva = ["Eva", 25]
klass = [pelle, mats, eva]
print(klass)
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Lista med lista

```
[['Pelle', 22], ['Mats', 25], ['Eva', 25]]
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Två dimensioner

```
$klass[1][1] = 42;
var_dump($klass);
```

```
klass[1][1] = 42
print(klass)
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Två dimensioner...

```
[1] =>            
array(2) {        
  [0] =>          
  string(4) "Mats"
  [1] =>          
  int(42)         
}                 
```

```
[['Pelle', 22], ['Mats', 42], ['Eva', 25]]
```

</script>




<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Funderingar

* Hur representera en luffarshacksplan i array/lista?

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Enkel array 0-8

```
$game = [
    " ", "O", "X",
    " ", "X", "O",
    "X", "O", " ",
];
var_dump($game);
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Enkel lista 0-8

```
game = [
    " ", "O", "X",
    " ", "X", "O",
    "X", "O", " ",
]
print(game)
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Array av array

```
$game = [
    [" ", "O", "X",],
    [" ", "X", "O",],
    ["X", "O", " ",],
];
var_dump($game);
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Lista av lista

```
game = [
    [" ", "O", "X"],
    [" ", "X", "O"],
    ["X", "O", " "],
]
print(game)
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Funderingar

* Hur skriva ut luffarshacksplanen?

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Utskrift

```
-------
| |O|X|
-------
| |X|O|
-------
|X|O| |
-------
```
</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Utskrift array

```
echo <<<EOD
-------
|$game[0]|$game[1]|$game[2]|
-------
|$game[3]|$game[4]|$game[5]|
-------
|$game[6]|$game[7]|$game[8]|
-------
EOD;
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Utskrift lista

```
printGame = """
-------
|{}|{}|{}|
-------
|{}|{}|{}|
-------
|{}|{}|{}|
-------
""".format(*game)
print(printGame)
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Utskrift 2 array

```
echo <<<EOD
-------
|{$game[0][0]}|{$game[0][1]}|{$game[0][2]}|
-------
|{$game[1][0]}|{$game[1][1]}|{$game[1][2]}|
-------
|{$game[2][0]}|{$game[2][1]}|{$game[2][2]}|
-------
EOD;
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Utskrift 2 lista

```
printGame = """
-------
|{}|{}|{}|
-------
|{}|{}|{}|
-------
|{}|{}|{}|
-------
""".format(*sum(game, []))
print(printGame)
```

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Funderingar

* Om du vill loopa igenom spelplanen?
* Testa om någon vunnit?

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Allt samverkar

* Vald lagrinsstruktur påverkar kodstrukturen

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Exempelkod

* PHP [funktioner](example/functions-php.php), [array](example/array-php.php)
* Python [funktioner](example/functions-python.py), [array](example/list-python.py)

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
#Avslutningsvis

* Frågor på det?

</script>



<!-- Slide -->
<script data-role="slide" data-markdown type="text/html">
</script>



<!-- include essential js-script -->
<script src="../js/mithril.min.js"></script>
<script src="../js/mithril-slideshow.js"></script>
