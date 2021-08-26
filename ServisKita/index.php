<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServisKita</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">


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

.banner-area {
	width: 100%;
	height: 500px;
	position: fixed;
	top: 100px;
	background-image: url('./image/header.jpg');
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
}
.banner-area h2{
	text-align: center;
	padding-top: 8%;
	font-size: 70px;
	font-family: poppins;
	text-transform: uppercase;
	color: #fff;
}

.banner-area input {
    margin-left: 550px;
    padding-left: 5px;
}

.content-area {
	margin:auto;
	overflow:auto;
	position: relative;
	top: 450px;
	background: #EAEAEA;
	height: 1800px;
}
.content-area h2 {
	text-align: center;
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
.content-area pre{
	text-align: center;
	padding: 2% 0px;
	font-family: Courier New;
	line-height: 30px;
	font-size:20px;

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
	background:#FFFFFF;
}
.gallery img {
	width:100%;
	height:auto;
}
.desc{
	top:10px;
	padding:10px;
	text-align:center;
}
</style>

<body>
<?php include_once('header.php');?>
    <div class="box-area">
		
        
		<div class="banner-area">

			<h2>At Your Service</h2>
            <input type="text" placeholder="Type here to search ">
		</div>
  

        </div>
		<div class="content-area">

			<div class="wrapper">
                
				<h2>Services</h2>
				<pre>"Find the service that you need"</pre>

				<div class="insider">

                    <div class ="gallery">
                    <a href="electrician.php">
                        <img src ="image/electrician.jpeg">
                        <div class ="desc">
                            <p><b>Electrician</b><br></p></a>
                        </div>
                    </div>

                    <div class ="gallery">
                        <img src ="image/repair laptop.jpg">
                        <div class ="desc">
                            <p><b>Electronics Technician</b><br></p>
                        </div>
                    </div>
                
                    <div class ="gallery">
                        <img src ="image/home tutor.jpg">
                        <div class ="desc">
                            <p><b>Home Tutor</b><br></p>
                        </div>
                    </div>

                    <div class ="gallery">
                        <img src ="image/delivery.jpg">
                        <div class ="desc">
                            <p><b>Delivery</b><br></p>
                        </div>
                    </div>

                    <div class ="gallery">
                        <img src ="image/gardening.jpg">
                        <div class ="desc">
                            <p><b>Gardening</b><br></p>
                        </div>
                    </div>

                    <div class ="gallery">
                        <img src ="image/medic.jpg">
                        <div class ="desc">
                            <p><b>Medical</b><br></p>
                        </div>
                    </div>

                </div>

		
			</div>
		</div>

		
	</div>

</body>
</html>
