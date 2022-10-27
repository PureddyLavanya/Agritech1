<html>
  <head>
	<title>Rotary Tiller</title>
   <style>
* {
  box-sizing: border-box;
}

body {
 
  padding: 20px;
  font-family: Arial;
  background-color:skyblue;
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
 margin:38px;
  border-radius:7px;
  text-align:center;
display:flex;
 vertical-align: middle;
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
  width:430px;
  height:190px;
  border-radius:20px;
  border:7px solid grey;
  vertical-align: auto;
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
p{
font-size:24px;
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
	    <div class="content">
      <a href="https://ciae.icar.gov.in/">
		     <p>Website of Central Institute of Agricultural Engineering</p></a>
	   </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a href="https://srfmtti.dacnet.nic.in/">
      <p>Website of Southern Region Farm Machinery Training and Testing Institute</p>
    </a>
	     </div>
	   </div>
	</div>
	<div class="row">
	   <div class="column">
	     <div class="content">
		<a href="http://fmttibudni.gov.in/index.php/en/">
      <p>Farm Machinery Online</p>
    </a>
	     </div>
	   </div>
	   <div class="column">
	     <div class="content">
		<a href="https://agricoop.nic.in/guidelines-listing">
        <p>Schemes & Guidelines of Department of Agriculture and Farmers Welfare</p>
    </a>
	     </div>
	   </div>
	</div>
  </body>
</html>