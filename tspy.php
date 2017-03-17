<?php
error_reporting(0);

// inputs
$url    = $_POST["url"];     
$button         = $_POST["search"];

if(isset($button ))
{

 


$get_content = @file_get_contents($url);

$fopen       = fopen("test.html","w");
$fwrite      = fwrite($fopen,$get_content);


$doc = new DOMDocument();
$doc->loadHTMLFile("test.html");
$url = $doc->getElementsByTagName('html'); //retrieve all cite tags

foreach ($url as $cite) { //loop url cite tag

	$citeurl    = $cite->nodeValue;
}

$pattern = '~[a-z]+://\S+~';
if($num_found = preg_match_all($pattern, $citeurl, $out))
{
   $implode_out = implode("",$out[0]);
   $folink      = fopen("link.html","w");
   $fwlink      = fwrite($folink,$implode_out);
   $folink_r    = fopen("link.html","r");
   $fread       = fread($folink_r,60);

   $sub_link = substr($fread,0,100);
   $explode_link = explode("/",$sub_link); 
   $full_profile_image_path = $explode_link[0]."//".$explode_link[2]."/".$explode_link[3]."/".$explode_link[4]."/".$explode_link[5]."/";    
   echo "<br/><center><img src='".$full_profile_image_path."1500x500' width='1000px' height='500px'/></center>";
   
}

 echo "<br/>";
 echo "<br/>";
 
 echo "<center><b style='color:white;font-weight:lighter !important;'>Cpy <span style='color:green'>Successful</span> ! </b></center>";

}
?>

<!DOCTYPE HTML>
<html>
 <head>
      <meta charset="UTF-8" />
	  <title>Tspy version 0.1 || Developed by mohammed yasein</title>
	  <style type="text/css">
	    body
		{
			background:black;
			margin  : 0px 0px 0px 0px;
			padding : 0px 0px 0px 0px;
			font-family:Arial;
			font-weight:lighter;
		}
		#intro-box 
		{
		   margin-top:25px;
		   margin-left:75px;
		}
		#intro-box h1
		{
		  color:white;
		}		
		#form-box 
		{
			margin-top:10px;
			margin-left:40px;
		}
		#form-box input[type=text]
		{
			background:black;
			border:1px solid green;
			padding:2px;
			color:green;
		}
		#form-box input[type=text]:focus
		{
            outline:0;
		}		
		#form-box input[type=submit]
		{
			background:black;
			border:1px solid red;
			padding:2px;
			color:#fff;
			cursor:pointer;
		}	
        #End-box
		{
			margin-top:20px;			
			margin-left:10px;
		}
        #End-box b
		{
		  color:white;
		  font-family:Arial;
		  font-weight:lighter;
		} 
        #End-box a
		{
		  color:blue;
		} 		
	  </style>
	  

 </head>
 <body>


 
    <div id="intro-box">
	 <div class="title"> <h1>Tspy V 0.1</h1> </div>
	</div>
  
    <div id="form-box">
	 <form action="<?php echo $PHP_SELF; ?>" method="POST">
	   <input type="text"   name="url" required placeholder="Enter url here ..." />
	   <input type="submit" name="search" value="Search ..."/>
	 </form>
	</div>
	
	<div id="End-box">
	 <div class="End-box"> 
	   <b>
	   
	   This tool developed by mohammed yasein 
	   </b> 
	   <br />
	   <b>
	    Follow mohammed yasein on <a href="https://twitter.com/mohammad_20098">twitter</a>
	   <br/>
	    Follow mohammed yasein on <a href="https://www.facebook.com/profile.php?id=100006691969074">faceook</a>
	   <br/>
	    Follow mohammed yasein on <a href="https://github.com/mohammedy2sein">github</a>		
	   </b>
	 </div>
	</div>
 <br /><br />
 </body> 
</html>