<!DOCTYPE html>
<html lang="en">
 
<head>
    <script defer src="js/script.js"></script>
    <script defer src="js/search.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/40ad289a3a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <title>UGame?</title>

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
 
<body class = "all">
    <header>
        <div class = "slogan">
            <h6 id = "phrase"> <!--<marquee width="130%" text-align='center' >--> <img class = "white_logo" src = "images/UGAME logo (white).png" width = "100" height = "25"> Discover our latest releases.<!--</marquee>--></h6>
        </div>

        <div id = "about_contact">
                <ul id = "about_contact_txt">
                    <li><a id="about_us" href="about">ABOUT</a></li>
                    <li><a id="contact" href="contact">CONTACT</a></li>
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
                    <li><a id="playstation" href="playstation">PLAYSTATION</a></li>
                    <li><a id="xbox" href="xbox">XBOX</a></li>
                    <li><a id="nintendo" href="nintendo">NINTENDO</a></li>
                    <li><a id="deals" href="deals">DEALS</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <img class = "sales_banner_img" src = "images/UGAME AMAZING DEALS Banner.png" width = "1280" height = "350">
    <div class = "top_selling_sect">
        <h4 id = "top_selling_title"> Top Selling </h4>
        <h6 id = "top_selling_slogan"> View all top selling games. </h6>
    </div>

    <div class = "game_collection">
        <div class = "game_section">
            <div class = "single_box">
            </div>
            <h4 class = "game_price"> £19.99 </h4>
            <h6 class = "game_name"> Red Dead Redemption 2 <br> [PlayStation 4]</h4>
            <p id = "game_attributes">(Action Adventure/18+)</p>
            <button  class = "atb_button" type="button">Add to Basket</button>
        </div>

        <div class = "game_section">
            <div class = "single_box">
            </div>
            <h4 class = "game_price"> £44.99 </h4>
            <h6 class = "game_name"> Super Mario 3D World <br> [Nintendo Switch]</h4>
            <p id = "game_attributes">(Platformer/7+)</p>
            <button  class = "atb_button" type="button">Add to Basket</button>
        </div>

        <div class = "game_section">
            <div class = "single_box">
            </div>
            <h4 class = "game_price"> £21.99 </h4>
            <h6 class = "game_name"> Grand Theft Auto 5 <br> [PlayStation 5]</h4>
            <p id = "game_attributes">(Action Adventure/18+)</p>
            <button  class = "atb_button" type="button">Add to Basket</button>
        </div>

        <div class = "game_section">
            <div class = "single_box">
            </div>
            <h4 class = "game_price"> £26.99 </h4>
            <h6 class = "game_name"> Far Cry 5 <br> [PlayStation 4]</h4>
            <p id = "game_attributes">(Shooter/18+)</p>
            <button  class = "atb_button" type="button">Add to Basket</button>
        </div>

        <div class = "game_section">
            <div class = "single_box">
            </div>
            <h4 class = "game_price"> £24.99 </h4>
            <h6 class = "game_name"> Yakuza 0 <br> [PlayStation 4]</h4>
            <p id = "game_attributes">(Action Adventure/18+)</p>
            <button  class = "atb_button" type="button">Add to Basket</button>
        </div>

        <div class = "game_section">
            <div class = "single_box">
            </div>
            <h4 class = "game_price"> £44.99 </h4>
            <h6 class = "game_name"> Super Mario Odessey <br> [Nintendo Switch]</h4>
            <p id = "game_attributes">(Platformer/7+)</p>
            <button  class = "atb_button" type="button">Add to Basket</button>
        </div>

        <div class = "game_section">
            <div class = "single_box">
            </div>
            <h4 class = "game_price"> £19.99 </h4>
            <h6 class = "game_name"> Ghost of Tshumima <br> [PlayStation 5]</h4>
            <p id = "game_attributes">(Action Adventure/18+)</p>
            <button  class = "atb_button" type="button">Add to Basket</button>
        </div>

        <div class = "game_section">
            <div class = "single_box">
            </div>
            <h4 class = "game_price"> £19.99 </h4>
            <h6 class = "game_name"> Spider-Man <br> [PlayStation 4]</h4>
            <p id = "game_attributes">(Action Adventure/16+)</p>
            <button  class = "atb_button" type="button">Add to Basket</button>
        </div>
    </div>     

    <div id = "cart_window">
        <div class = "cart_sect">
            <h1 id = "basket_title">Your basket</h1>
            <h1 id = "total_title">Subtotal: </h1>
            <table class = "basket_table_"></table>
            <button id = "checkout_button">Checkout</button>
            <button id = "close_button">Close</button>
        </div>
    </div>  

    <script src="js/script.js"></script>

</body>
</html>
