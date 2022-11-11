<?php
	include_once('connect.php');
?>

<?php
if(!empty($_GET['shoes'])){
  $shoes_name=$_GET['shoes']; 
  $sql="SELECT * FROM shoes_table Where name='$shoes_name'";
  $ro=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($ro);
  $total=mysqli_num_rows($ro);
  if($total==1){
     $_SESSION['ID']=$row['id'];
     $_SESSION['BRAND']=$row['brand'];
     $_SESSION['NAME']=$row['name'];
     $_SESSION['MONEY']=$row['price'];
     $_SESSION['INFO']=$row['intro'];
}else{
    echo "<script> {window.alert('ㄚㄚㄚㄚ！'); </script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>商品頁</title>
	<link rel="stylesheet" href="css/goods.css">
</head>

<body>
    <header>
        <div id="header-content" class="header-content">
            <div class="header_left">
            	<a href="index.html">
            		<img src="images/logo3.png" height="70px">
            	</a>
            </div>
			<div id="hamburger" class="wrapper-hamburger">
            	<div class="cross-button-top cross-button"></div>
            	<div class="cross-button-bottom cross-button"></div>
        	</div>
            <nav class="header-nav">
                <a href="merchant.html" class="link_text">合作商家</a>
                <a href="shoe_info.html" class="link_text">鞋子資訊</a>
                <a href="goods.html" class="link_text">找球鞋！</a>
        </div>
    </header>

   
    	
    <section class="section-selected-works">
    <div class="secondary-content wrapper-content">
       
        <div class="wrapper-selected-works">
            <div class="wrapper-work">
			    <div class="wrapper-work-text">
			    	<a href="https://news.ltn.com.tw/news/society/breakingnews/1953658">
			        <img src="images/pic26.jpg">
			        
			    	</a>
			    </div>
            </div>
        
		  	
			     <div class="shadowbox">
			    
			        <div class="intro">
						<?php
						echo $_SESSION['BRAND'];
						echo "&nbsp";
						echo $_SESSION['NAME'];
						?>			        	
			    	</div>
			    	<div class="story">
			    		<?php
						echo $_SESSION['INFO'];
						?>	
			    	</div>
			    	<div class="price">
						<?php
						echo $_SESSION['MONEY'];
						echo "&nbsp NTD";
						?>

			    	</div>
			    </div>
			</div>     
       

	</section>
	<div class="footer">		
	</div>


	
<script src="js/script.js"></script>	
</body>
</html>   	
