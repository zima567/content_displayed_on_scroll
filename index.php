<!DOCTYPE html>
<html>
<head>
  <title>Display content on scroll</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
</head>
<body>

<div class="container">

<?php

 include "config.php";

 // Row per page
 $rowperpage = 5;

 // counting total number of posts
 $allcount_query = "SELECT count(*) as allcount FROM posts";
 $allcount_result = mysqli_query($con,$allcount_query);
 $allcount_fetch = mysqli_fetch_array($allcount_result);
 $allcount = $allcount_fetch['allcount'];

 // select first 3 posts
 $query = "select * from posts order by id asc limit 0,$rowperpage ";
 $result = mysqli_query($con,$query);

 while($row = mysqli_fetch_array($result)){

   $id = $row['id'];
   $title = $row['title'];
   $content = $row['description'];
   $shortcontent = substr($content, 0, 160)."...";
   $link = $row['link'];
 ?>

   <div class="post" id="post_<?php echo $id; ?>">
     <h1><?php echo $title; ?></h1>
     <p>
       <?php echo $shortcontent; ?>
     </p>
     <a href="<?= $link ?>" target="_blank" class="more">More</a>
   </div>

 <?php
 }
 ?>

 <input type="hidden" id="row" value="0">
 <input type="hidden" id="all" value="<?php echo $allcount; ?>">

</div>

</body>
</html>