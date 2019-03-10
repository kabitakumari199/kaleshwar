<?php 


$arg = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14);
$count= 1;
foreach($arg as $item){
	if($count==1){
	 echo '<ul class="links">';	
	}
?>
<li><a href="category-1.html">Handmade Painting...<?php echo $i; ?></a></li>
	
<?php 
if($count==4){
	 echo '</ul>';	
	 $count=0;
	}
	$count++;
}

