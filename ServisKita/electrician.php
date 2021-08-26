<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electrician Services | ServisKita</title>
</head>

<style>

* {
	margin: 0;
	padding: 0;
}

.wrapper {
	width: 1180px;
	margin: 0 auto;
}

.content-area {
	margin:auto;
	overflow:auto;
	position: relative;
	top: 70px;
	background: #FFFFFF;
	height: 1800px;
}
.content-area h2 {
	font-family: monospace;
	letter-spacing: 4px;
	padding-top: 50px;
	font-size: 50px;
	margin: 0;
}
.content-area h3 {
	text-align: center;
	font-family: Courier New;
	letter-spacing: 3px;
	padding-top: 50px;
	font-size: 35px;
	margin: 0;
}

.content-area p{
	text-align: center;
	padding: 2% 0px;
	font-family: ittalic ;
	line-height: 15px;
	font-size:15px;

}

.insider{
    padding-left: 140px;
}

.gallery{
	margin :20px;
	border: 3px solid;
	float : left;
	width : 250px;
    height:300px;
	background:#EAEAEA;
}
.gallery img {
	width:100%;
	height:200px;
}
.desc{
	top:10px;
	padding:10px;
	text-align:center;
}
</style>

<body>

<?php include_once('header.php');?>

		<div class="content-area">

			<div class="wrapper">
                
				<h2>Electrician Services</h2>

				<div class="insider">

                <div class ="gallery">
                        <img src ="image/fan.jpg">
                        <div class ="desc">
                            <p><b>Install Fan</b><br>I can install and repair any types of fan</p>
                        </div>
                    </div>

                    <div class ="gallery">
                        <img src ="image/aircond.jpg">
                        <div class ="desc">
                            <p><b>Repair Aircond</b><br>Repair aircond area Kuala Kubu Bharu</p>
                        </div>
                    </div>

                    <div class ="gallery">
                        <img src ="image/socket.jpg">
                        <div class ="desc">
                            <p><b>Install plug socket</b><br>Install new plug socket</p>
                        </div>
                    </div>
                
                    </div>

                </div>

		
			</div>
		</div>

		
	</div>

    
</body>
</html>