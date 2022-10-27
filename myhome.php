<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTh38Kv_3_PYeO3EUth426acbPj4079T-npMA&usqp=CAU">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color:black;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}



/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width:340px;
  padding:5px;
 margin:5px;
  border-radius:70px;
  text-align:center;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Content */
.content {
  background-color: white;
  padding:4px;
  border-radius:1000px;
  text-align:center;
}
@media screen and (max-width: 900px) {
  .column {
    width:33%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width:33%;
  }
}
img{
 width:150px;
 height:120px;
 float:center;
 border-radius:48%;
}
h3{
text-align:center;
}
h4{
text-align:center;
}
</style>
<body>
	<div class="row">
	  <div class="column">
	   <div class="content">
		<a href="apple.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhIZtG_xPhvRgo7RSl2_LnAspLy_MD_057jQ&usqp=CAU">
</a>
		 <h3>Apple</h3>
		 <h4>21°c-24°c</h4>
	   </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a href="mango.php"><img src="https://thumbs.dreamstime.com/b/freshly-picked-single-mango-green-leaf-freshly-picked-single-mango-isolated-white-clipping-path-144024908.jpg"></a>
		<h3>Mango</h3>
		<h4>23.9°c-26.7°c</h4>
	     </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a href="banana.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNaiOyavK4V_I3dnglyD1SR5_a5JhbDGj3Lg&usqp=CAU"></a>
		<h3>Banana</h3>
		<h4>13°c-38°c</h4>
	     </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a href="cotton.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdXj5twDRMTObcfdXOtqnPxPB4kwZ_Y_MgQQ&usqp=CAU"></a>
		<h3>Cotton</h3>
		<h4>21°c-37°c</h4>
	     </div>
	   </div>
	</div>
	<div class="row">
	  <div class="column">
	     <div class="content">
		<a href="bringal.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgk78lwRjwY_X4oU-cuJceCb-4zfV57mF0jg&usqp=CAU"></a>
		<h2>Bringal</h2>
		<h4>13°c-21°c</h4>
	     </div>
	   </div>
	  <div class="column">
	     <div class="content">
		<a href="cabbage.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmBPEKmGB4FyKXc_gs4PuGCzZQkCUh9ePEaA&usqp=CAU"></a>
		<h2>Cabbage</h2>
		<h4>15°c-21°c</h4>
	     </div>
	   </div>
	  <div class="column">
	     <div class="content">
		<a href="capsicum.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoOr3gLfH878uZEPsaZzke2YIfKjjiT7ZxkA&usqp=CAU"></a>
		<h2>Capsicum</h2>
		<h4>25°c-30°c</h4>
	     </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a href="ginger.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO0NAm064qZf9rkzBCyWQxBL5LLAHV21dFmQ&usqp=CAU"></a>
		<h2>Ginger</h2>
		<h4>28°c-35°c</h4>
	     </div>
	   </div>
	</div>
	<div class="row">
	   <div class="column">
	     <div class="content">
		<a href="citrus.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRo5h2iqLVCqUGY2ShXdk_wRTr-QuTlSvy-5w&usqp=CAU"></a>
		<h2>Citrus</h2>
		<h4>13°c-37°c</h4>
	     </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a href="tamota.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAUCd81aBywjTgKndIB5EQ1bNC64vf1OlWpg&usqp=CAU"></a>
		 <h2>Tamota</h2>
		 <h4>21°c-24°c</h4>
	      </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a  href="paddy.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQsDdZySgXggG_fHFENvCcRGy9I7Z69pTseLg&usqp=CAU"></a>
		<h2>Paddy</h2>
		<h4>21°c-37°c</h4>
	     </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a  href="bean.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRta9pkXJ-dDM12rHd51NyxuCCwkSdSSXTAoA&usqp=CAU"></a>
		<h2>Bean</h2>
		<h4>65°c-85°c</h4>
	     </div>
	   </div>

	</div>
	
</body>
</html>