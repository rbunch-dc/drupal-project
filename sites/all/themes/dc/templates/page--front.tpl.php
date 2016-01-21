

<?php

$query = "SELECT node.nid FROM node WHERE node.type = 'flexslider_image'";
$result = db_query($query);


print '<div class="slick">';
foreach($result as $node){
  $curr_node = node_load($node->nid);
  $uri = $curr_node->field_fleximage['und'][0]['uri'];
  print '<img src="' . file_create_url($uri) . '">';
}
print "</div>";
?>


<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<script type="text/javascript">

  $('.slick').slick({
    lazyLoad: 'ondemand',
    slidesToShow: 3,
    slidesToScroll: 1
  });

</script>
