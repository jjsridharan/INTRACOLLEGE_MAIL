<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<title>CS MIT
		</title>
		<link rel="shortcut icon" href="favicon.ico"/>
		<style>
			body
			{
				background-color:#ECECEA;
				width:100%;
			}
			#scr
			{
				font-size:5em;
				color:#7D1935;
			}
			#dept
			{	
   				 margin: auto;
    				 width: 30%;
    				 padding: 10px;
                                 border-style: solid;
                                 border-color: #66aaff;
			}
			#l
                        {
                             font-size:150%;
 javascript:document.forms['EditForm'].state.value='browse'; document.forms['EditForm'].state2.value='main'; document.forms['EditForm'].submit();                            font-color:#001f3f;
                        }
                        #l1,#l2,#l3,#l4,#l5,#l6,#l7,#l8,#l9
                        {
                              
                              font-size:150%;  
                        }
                        #sub
			{
				width:35%;
				margin-left:30%;
				background:#7E8F7C;
			}	
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<div id="mar">
				<marquee id="scr">Computer Society of MIT</marquee>
			</div>
			<div id="dept">
			<label id="l">Enter Mail id</label><br><br>
                        <form action="specsreg.php" method="post" enctype="multipart/form-data">
				<input type="email" name="reg1" placeholder="Mail id"><br><br>
				<input type="email" name="reg2" placeholder="Mail id"><br><br>
				<input type="email" name="reg3" placeholder="Mail id"><br><br>
				<input type="email" name="reg4" placeholder="Mail id"><br><br>
				<input type="email" name="reg5" placeholder="Mail id"><br><br>
				<input type="email" name="reg6" placeholder="Mail id"><br><br>
				<input type="email" name="reg7" placeholder="Mail id"><br><br>
				<input type="email" name="reg8" placeholder="Mail id"><br><br>
				<input type="email" name="reg9" placeholder="Mail id"><br><br>
				<input type="email" name="reg0" placeholder="Mail id"><br><br>
				<textarea name="bo" placeholder="Paste Body of the Mail here.." cols="45" rows="10"></textarea><br><br>
                                <pre>Attach Files
                                <input type="file" name="fileToUpload" id="fileToUpload">
                                <input type="file" name="fileToUpload1" id="fileToUpload1">
                                <input type="file" name="fileToUpload2" id="fileToUpload2">
                                </pre>
				<input type="submit" name="submit" id="sub" class="btn btn-primary btn-lg" value="Send Mail"></input>	
			</form>
			</div>
		</div>
	</body>
</html>			