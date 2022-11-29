<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Responsive Contact Us Page UI Design | Html CSS</title>
		<link rel="stylesheet" href="s">
	</head>
	<body>
		<section>
			<div class="container">
				<div class="contact-Infomation">
					<div>
						<h2>Contact Info</h2>
						<ul class="information">
							<li>
								<span><img src=""></span>
								<span>location <b><br>
									</span>
							</li>
							<li>
								<span><img src=""></span>
								<span>U-Games</span>
							</li>
							<li>
								<span><img src=""></span>
								<span>number</span>
							</li>
						</ul>
					</div>
					<ul class="sci">
						<li><a href="#"><img src=""></a></a></li>
						<li><a href="#"><img src=""></a></a></li>
						<li><a href="#"><img src=""></a></a></li>
						<li><a href="#"><img src=""></a></a></li>
						<li><a href="#"><img src=""></a></a></li>
					</ul>
				</div>
				<div class="contactus-Form">
					<h2>Send a Message</h2>
					<div class="contactus-Box">
						<div class="inputBox w60">
							<input type="text" name="" required>
							<span>First Name</span>
						</div>
						<div class="inputBox w60">
							<input type="text" name="" required>
							<span>Last Name</span>
						</div>
						<div class="inputBox w60">
							<input type="text" name="" required>
							<span>Email Address</span>
						</div>
						<div class="inputBox w60">
							<input type="text" name="" required>
							<span>Mobile Number</span>
						</div>
						<div class="inputBox w120">
							<textarea name="" required></textarea>
							<span>Write your message here...</span>
						</div>
						<div class="inputBox w120">
							<input type="submit" value="Send">
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

<<<<<<< Updated upstream
    <script>
        function del_item(e){
            let items = []
            JSON.parse(localStorage.getItem('game_items')).map(data =>{
                if (data.id != e.parentElement.parentElement.children[0].textContent){
                    items.push(data);
                }
            });
            localStorage.setItem('game_items', JSON.stringify(items));
            window.location.reload();
        }
    </script>
</head>

<div class = "all">
    <body>
    <header>
        <div class = "slogan">
            <h6 id = "phrase"> <!--<marquee width="130%" text-align='center' >--> <img class = "white_logo" src = "images/UGAME logo (white).png" width = "100" height = "25"> Discover our latest releases.<!--</marquee>--></h6>
        </div>

        <div id = "about_contact">
                <ul id = "about_contact_txt">
                    <li><a id="about_us" href="about">ABOUT</a></li>
                    <li><a id="contact" href="contact">CONTACT</a></li>
                    <li><a id="admin" href="admin">ADMIN</a></li>
                </ul>
            </div>

        <div class = "top_section">

            <a class = "logo" href="index"> <img class = "logo" src = "images/UGAME logo.png" width = "200" height = "50"> </a>
            <input id = search type="text" placeholder="Search games..." name="search"> 
            <button id = "search_button" type="button">Go</button>


            <ul id=register_basket>
                <li><a id="sign_register" href="register"> Sign in or Register </a></li>
                <!--<li><a class="basket" id = "basket_link" href="basket"><i class="fa-solid fa-basket-shopping"></i> Basket</a></li>-->
                <button id = "basket_link" type="button">Basket</button><p id = "item_num_noti">0</p>
            </ul>
        </div>

        <div class="nav_bar">
            <nav>
                <ul id=links>
                    <li><a id="deals" href="index">HOME</a></li>
                    <li><a id="playstation" href="playstation">PLAYSTATION</a></li>
                    <li><a id="xbox" href="xbox">XBOX</a></li>
                    <li><a id="nintendo" href="nintendo">NINTENDO</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!--SHARI START HTML HERE-->
    <!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Responsive Contact Us Page UI Design | Html CSS</title>
		<link rel="stylesheet" href="s">
	</head>
	<body>
		<section>
			<div class="container">
				<div class="contact-Infomation">
					<div>
						<h2>Contact Info</h2>
						<ul class="information">
							<li>
								<span><img src=""></span>
								<span>location <b><br>
									</span>
							</li>
							<li>
								<span><img src=""></span>
								<span>U-Games</span>
							</li>
							<li>
								<span><img src=""></span>
								<span>number</span>
							</li>
						</ul>
					</div>
					<ul class="sci">
						<li><a href="#"><img src=""></a></a></li>
						<li><a href="#"><img src=""></a></a></li>
						<li><a href="#"><img src=""></a></a></li>
						<li><a href="#"><img src=""></a></a></li>
						<li><a href="#"><img src=""></a></a></li>
					</ul>
				</div>
				<div class="contactus-Form">
					<h2>Send a Message</h2>
					<div class="contactus-Box">
						<div class="inputBox w60">
							<input type="text" name="" required>
							<span>First Name</span>
						</div>
						<div class="inputBox w60">
							<input type="text" name="" required>
							<span>Last Name</span>
						</div>
						<div class="inputBox w60">
							<input type="text" name="" required>
							<span>Email Address</span>
						</div>
						<div class="inputBox w60">
							<input type="text" name="" required>
							<span>Mobile Number</span>
						</div>
						<div class="inputBox w120">
							<textarea name="" required></textarea>
							<span>Write your message here...</span>
						</div>
						<div class="inputBox w120">
							<input type="submit" value="Send">
						</div>
					</div>
				</div>
			</div>
            <html/>



    <div id = "cart_window">
        <div class = "cart_sect">
            <button id = "close_button">Close Basket</button>
            <h1 id = "basket_title">Your basket</h1>
            <h1 id = "total_title">Subtotal: </h1>
            <table class = "basket_table_"></table>
            <button id = "checkout_button">Checkout</button>
        </div>
    </div>
    <script src="js/script.js"></script>
</div>
<body>  
</div>
=======
>>>>>>> Stashed changes
