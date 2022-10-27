<html>
  <head>
	<title>Rotary Tiller</title>
   <style>
* {
  box-sizing: border-box;
}

body {
  background-image:url("https://images.unsplash.com/photo-1520052203542-d3095f1b6cf0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW5kaWFuJTIwYWdyaWN1bHR1cmV8ZW58MHx8MHx8&w=1000&q=80");
  padding: 20px;
  font-family: Arial;
 background-repeat:no-repeat;
 background-size:cover;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}
/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width:300px;
  height:200px;
  padding :5px;
 margin:50px;
  border-radius:7px;
  text-align:center;
display:flex;
 justify-content:center;
}
.row{
margin:10 318 10 318;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Content */
.content {
  background-color:white;
  padding:4px;
  width:270px;
  height:160px;
  border-radius:20px;
  border:7px solid grey;
  vertical-align:baseline;
 display:flex;
 justify-content:center;
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
h4{
font-size:36px;
border-radius:20px;
color:green;
font-family:Arial,Helvetica,Sans-Serif;
}
a{
text-decoration:none;
}
   </style>
  </head>
  <body>
	<div class="row">
	  <div class="column">
	    <a href="u3.php"><div class="content">
		<h4>USES</h4>
	   </div></a>
	   </div>
	   <div class="column">
	     <div class="content">
		<a href="i3.php"><h4>INFO</h4></a>
	     </div>
	   </div>
	</div>
	<div class="row">
	   <div class="column">
	     <div class="content">
		<a href="h3.php"><h4>HISTORY</h4></a>
	     </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a href="rn.php"><h4>Purchase</h4></a>
	     </div>
	   </div>
	</div>
  </body>
</html>