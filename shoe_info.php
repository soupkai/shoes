<?php
  include_once('connect.php')  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>鞋子資訊</title>
	<link rel="stylesheet" href="css/shoe_info1.css">
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
                <a href="shoe_info.html" class="link_text">球鞋資訊</a>
                <a href="" class="link_text">找球鞋！</a>
            </nav>
        </div>
    </header>

    	

    <div class="secondary-content wrapper-content">
        <h2 class="secondary__title">球鞋資訊</h2>
    </div>
    
    <div class="third-content wrapper-content" >
        <div class="panel-group">
            <input type="radio" name="panel-radio" id="radio1" class="panel-control" checked>
            <input type="radio" name="panel-radio" id="radio2" class="panel-control">
            <input type="radio" name="panel-radio" id="radio3" class="panel-control">
            <input type="radio" name="panel-radio" id="radio4" class="panel-control">
            <input type="radio" name="panel-radio" id="radio5" class="panel-control">
            <input type="radio" name="panel-radio" id="radio6" class="panel-control">
 
            <div class="wrapper-selected-worksleft">
                <div class="tab-group">
                    <div class="left-text">
                        <label for="radio1" class="active">NIKE</label>
                    </div>
                    <div class="left-text">
                        <label for="radio2">ADIDAS</label>
                    </div>
                    <div class="left-text">
                        <label for="radio3">AIR JORDAN</label>
                    </div>
                    <div class="left-text">
                        <label for="radio4">VANS</label>
                    </div>
                    <div class="left-text">
                        <label for="radio5">NEW BALANCE</label>
                    </div>
                    <div class="left-text">
                        <label for="radio6">CONVERSE</label>
                    </div>
                </div>
            </div>                                            
            <div class="wrapper-selected-worksright">      
                <div class="content-group">
                    <div class="content content1">
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR FORCE 1 ">
                                    <input class="img" type="image" src="images/AIR FORCE 1 LOW D_6.jpg">
                                    <p class="text">AIR FORCE 1</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="kwondo 1">
                                    <input class="img" type="image" src="images/kwondo 1_1.jpg">
                                    <p class="text">kwondo</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR MAX 90">
                                    <input class="img" type="image" src="images/Air max 90_6.jpg">
                                    <p class="text">Air max 90</p>
                                </form>
                            </div>
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR MAX 95">
                                    <input class="img" type="image" src="images/Air max 95_9.jpg">
                                    <p class="text">Air max 95</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR MAX 1">
                                    <input class="img" type="image" src="images\Air max 1_18.jpg">
                                    <p class="text">AIR MAX 1</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="BLAZER High">
                                    <input class="img" type="image" src="images/BLAZER HIGH_6.jpg">        
                                    <p class="text">BLAZER HIGH</p>
                                </form>
                            </div>    
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="BLAZER Low">
                                    <input class="img" type="image" src="images/BLAZER LOW_1.jpg">      
                                    <p class="text">BLAZER LOW</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="Nike x Sacai Vaporwaffle">
                                    <input class="img" type="image" src="images/Nike x Sacai Vaporwaffle_10.jpg"> 
                                    <p class="text">Nike x SV</p>
                                </form>
                            </div>
                        </div>               
                    </div>
                    <div class="content content2">
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="SUPERSTAR">
                                    <input class="img" type="image" src="images/superstar_5.jpg"> 
                                    <p class="text">SUPERSTAR</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="STAN SMITH">
                                    <input class="img" type="image" src="images/stan smith_5.jpg"> 
                                    <p class="text">STAN SMITH</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="ULTRA BOOST19">
                                    <input class="img" type="image" src="images/ultra boost 19_1.jpg"> 
                                    <p class="text">ULTRA BOOST19</p>
                                </form>    
                            </div>         
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="ULTRA BOOST21">
                                    <input class="img" type="image" src="images/ultra boost 21_5.jpg"> 
                                    <p class="text">ULTRA BOOST21</p>
                                </form>   
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="YEEZY">
                                    <input class="img" type="image" src="images/yeezy 350 v2_4.jpg"> 
                                    <p class="text">YEEZY</p>
                                </form>
                            </div> 
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="ULTRA BOOST20">
                                    <input class="img" type="image" src="images/ultra boost 20_5.jpg"> 
                                    <p class="text">ULTRA BOOST20</p>
                                </form>
                            </div>                 
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="NMD">
                                    <input class="img" type="image" src="images/nmd r1_3.jpg"> 
                                    <p class="text">NMD</p>
                                </form>
                            </div>        
                        </div>
                    </div>
                    <div class="content content3">
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 1 low">
                                    <input class="img" type="image" src="images/Air_jordan_1_low_1.jpg"> 
                                    <p class="text">AIR JORDAN 1 low</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 1 mid">
                                    <input class="img" type="image" src="images\Air_jordan_1_mid_10.jpg"> 
                                    <p class="text">AIR JORDAN 1 mid</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 1 high">
                                    <input class="img" type="image" src="images\Air_jordan_1_high_4.jpg"> 
                                    <p class="text">AIR JORDAN 1 high</p>
                                </form>
                            </div>
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 2">
                                    <input class="img" type="image" src="images/Air_jordan_2_6.jpg"> 
                                    <p class="text">Air jordan 2</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 3">
                                    <input class="img" type="image" src="images/Air_jordan_3_5.jpg"> 
                                    <p class="text">Air jordan 3</p>
                                </form>
                            </div>      
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 4">
                                    <input class="img" type="image" src="images/Air_jordan_4_10.jpg"> 
                                    <p class="text">Air jordan 4</p>
                                </form>
                            </div>    
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 5">
                                    <input class="img" type="image" src="images\Air_jordan_5_9.jpg"> 
                                    <p class="text">AIR JORDAN 5</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 6">
                                    <input class="img" type="image" src="images\Air_jordan_6_3.jpg"> 
                                    <p class="text">AIR JORDAN 6</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 11">
                                    <input class="img" type="image" src="images\Air_jordan_11_3.jpg"> 
                                    <p class="text">AIR JORDAN 11</p>
                                </form>
                            </div>                 
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 12">
                                    <input class="img" type="image" src="images\Air_jordan_12_7.jpg"> 
                                    <p class="text">AIR JORDAN 12</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AIR JORDAN 13">
                                    <input class="img" type="image" src="images\Air_jordan_13_4.jpg"> 
                                    <p class="text">AIR JORDAN 13</p>
                                </form>
                            </div>
                        </div>        
                    </div>
                    <div class="content content4">
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="AUTHENTIC">
                                    <input class="img" type="image" src="images\VANS Authentic_1.jpg"> 
                                    <p class="text">AUTHENTIC</p>
                                </form>                                
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="OLD SKOOL">
                                    <input class="img" type="image" src="images\vans old skool_18.jpg"> 
                                    <p class="text">OLD SKOOL</p>
                                </form>          
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="SLIP-ON">
                                    <input class="img" type="image" src="images\vans slip on_2.jpg"> 
                                    <p class="text">SLIP-ON</p>
                                </form>   
                            </div>
                        </div>
                    </div>
                    <div class="content content5">
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="237">
                                    <input class="img" type="image" src="images\NB_237_17.jpg"> 
                                    <p class="text">NB 237</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="327">
                                    <input class="img" type="image" src="images\NB_327_3.jpg"> 
                                    <p class="text">NB 327</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="550">
                                    <input class="img" type="image" src="images\NB_550_5.jpg"> 
                                    <p class="text">NB 550</p>
                                </form>
                            </div>
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="990">
                                    <input class="img" type="image" src="images\NB_990_3.jpg"> 
                                    <p class="text">NB 990</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="991">
                                    <input class="img" type="image" src="images\NB_991_4.jpg"> 
                                    <p class="text">NB 991</p>
                                </form>
                            </div>      
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="992">
                                    <input class="img" type="image" src="images/NB_992_18.jpg"> 
                                    <p class="text">NB 992</p>
                                </form>
                            </div>    
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="993">
                                    <input class="img" type="image" src="images/NB_993_37.jpg"> 
                                    <p class="text">NB 993</p>
                                </form>    
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="995">
                                    <input class="img" type="image" src="images/NB_995_3.jpg"> 
                                    <p class="text">NB 995</p> 
                                </form>  
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="996">
                                    <input class="img" type="image" src="images/NB_996_34.jpg"> 
                                    <p class="text">NB 996</p>
                                </form>
                            </div>                 
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="997">
                                    <input class="img" type="image" src="images/NB_997_11.jpg"> 
                                    <p class="text">NB 997</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="1500">
                                    <input class="img" type="image" src="images/NB_1500_4.jpg"> 
                                    <p class="text">NB 1500</p>
                                </form>     
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="2002R">
                                    <input class="img" type="image" src="images/NB_2002R_7.jpg"> 
                                    <p class="text">NB 2002R</p>
                                </form>    
                            </div>
                        </div>
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="XC-72">
                                    <input class="img" type="image" src="images\NB_XC-72_16.jpg"> 
                                    <p class="text">NB XC-72</p>
                                </form>
                            </div>        
                        </div>
                    </div>    
                    <div class="content content6">
                        <div class="right-spot">
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="CHUCK TAYLOR 1970 LOW">
                                    <input class="img" type="image" src="images\chuck taylor 1970 low_3.jpg"> 
                                    <p class="text">CHUCK TAYLOR 1970 LOW</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="CHUCK TAYLOR 1970 HIGH">
                                    <input class="img" type="image" src="images\chuck taylor 1970 high_4.jpg"> 
                                    <p class="text">CHUCK TAYLOR 1970 HIGH</p>
                                </form>
                            </div>
                            <div class="right-block">
                                <form method="get" action="goods.php">
                                    <input type="hidden" name="shoes"  border="0" value="ONE STAR">
                                    <input class="img" type="image" src="images\converse one star_7.jpg"> 
                                    <p class="text">ONE STAR</p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    
        
	
    <div class="footer">        
    </div>


<script src="js/script.js"></script>	
</body>
</html>   	

	 	



















	 
      