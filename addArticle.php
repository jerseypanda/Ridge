<?php   
//create document root   
$doc = domxml_new_doc("1.0");   
$root = $doc->create_element("article");   
$root = $doc->append_child($root);
