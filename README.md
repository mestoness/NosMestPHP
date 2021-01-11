# NosMestPHP
Functions =>
``` php

//Some Examples

// jsAlert Examples
echo jsAlert("Kayıt Başarılı.");
		


//dbSelect Examples
foreach (dbSelect($db,"sifre") as $key) {
echo $key["txt"]."<br>";
}


//dbSelectWhere Examples
foreach (dbSelectWhere($db,"sifre","txt","DSDS") as $key) {
echo "<hr>".$key["txt"]."<br>";
}


//sessionControl Examples
sessionControl($db,"users","id","oturum","login.php");


//sessionControl2 Examples
sessionControl2($db,"users","query1","session1","query2","session2","login.php");


//filterHtml Examples
echo filterHtml("<h1>sfgfs</h1>")."<hr>";


//sef link Test
echo sefUrl("github ahmet baki memis ğ ş ç")."<hr>";

//shorter string Examples
echo shorterString("gksjfgl sfkgjsfkg sfkgj fskg sf",10)."<hr>";


// random string gen Examples
echo stringGen();


//sweatAlert2 Examples
echo sweatAlert("success","success login","success");
```


``` html

<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.12.6/sweetalert2.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

```
