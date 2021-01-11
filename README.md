# NosMestPHP

``` php

//Some Examples

// jsAlert test
echo jsAlert("Kayıt Başarılı.");
		


//dbSelect test
foreach (dbSelect($db,"sifre") as $key) {
echo $key["txt"]."<br>";
}


//dbSelectWhere test
foreach (dbSelectWhere($db,"sifre","txt","DSDS") as $key) {
	echo "<hr>".$key["txt"]."<br>";
}


//sessionControl test
sessionControl($db,"users","id","oturum","login.php");


//sessionControl2 test
sessionControl($db,"users","query1","session1","query2","session2","login.php");


//filterHtml TEST
echo filterHtml("<h1>sfgfs</h1>")."<hr>";


//sef link Test
echo sefUrl("github ahmet baki memis ğ ş ç")."<hr>";

//shorter string
echo shorterString("gksjfgl sfkgjsfkg sfkgj fskg sf",10)."<hr>";


// random string gen
echo stringGen();


//sweatAlert2
echo sweatAlert("success","success login","success");
```
