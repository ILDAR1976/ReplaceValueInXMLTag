<?php
 echo '<pre>'; 

 function replaceTag($who,$pat) {
   
   $datas = simplexml_load_file("./test.xml");
  
  foreach ($datas->books->book as $book) {
     if (preg_match('/'.$who.'/', $book->title)) {
       $book->title = $pat;
     }
  }
 $datas->asXML("./test.xml");

 }

 if (isset($_POST['who']) || isset($_POST['pat'])) {

    replaceTag($_POST['who'],$_POST['pat']);
 }

 ?>