<?php
include("order.php");
?>
<!DOCTYPTE html>
    <html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/food.css">
        <link rel="stylesheet" href="css/style.css">


    </head>

    <body>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="acc1">
                        Breakfast
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Coffee</h5>
                                        <img src="images/coffee.jpg" class="card-image" />
                                        <p class="card-text" id="coffee"><em>Quantity: <b id="qtCoffee"> <?php Quantity("Coffee") ?> </b>cups<br>Cost: Ksh<b id="priceCoffee"><?php Order("Coffee") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" id="btnCoffee" onclick="buyItem('qtCoffee','priceCoffee')">Order Coffee</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Cocoa</h5>
                                        <img src="images/cocoa.jpg" class="card-image" />
                                        <p class="card-text" id="cocoa"><em>Quantity: <b id="qtCocoa"> <?php Quantity("Cocoa") ?> </b>cups<br>Cost: Ksh<b id="priceCocoa"><?php Order("Cocoa") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtCocoa','priceCocoa')">Order Cocoa</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Hot Chocolate</h5>
                                        <img src="images/chocolate.jpeg" class="card-image" />
                                        <p class="card-text" id="chocolate"><em>Quantity: <b id="qtChocolate"> <?php Quantity("Chocolate") ?> </b>cups<br>Cost: Ksh<b id="priceChocolate"><?php Order("Chocolate") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtChocolate','priceChocolate')">Order Chocolate</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="acc2">
                        Beverages
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Fanta</h5>
                                        <img src="images/fanta.jpeg" class="card-image" />
                                        <p class="card-text" id="coffee"><em>Quantity: <b id="qtFanta"> <?php quantityBev("Fanta") ?> </b>bottles<br>Cost: Ksh<b id="priceFanta"><?php orderBeverages("Fanta") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" id="btnFanta" onclick="buyItem('qtFanta','priceFanta')">Order Fanta</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Coca Cola</h5>
                                        <img src="images/coke.jpg" class="card-image" />
                                        <p class="card-text" id="cocoa"><em>Quantity: <b id="qtCoke"> <?php quantityBev("Coca Cola") ?> </b>bottles<br>Cost: Ksh<b id="priceCoke"><?php orderBeverages("Fanta") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtCoke','priceCoke')">Order CocaCola</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Mirinda</h5>
                                        <img src="images/mirinda.jpeg" class="card-image" />
                                        <p class="card-text" id="chocolate"><em>Quantity: <b id="qtMirinda"> <?php quantityBev("Mirinda") ?> </b>bottles<br>Cost: Ksh<b id="priceMirinda"><?php orderBeverages("Mirinda") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtMirinda','priceMirinda')">Order Mirinda</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Diet Coke</h5>
                                        <img src="images/diet_coke.jpg" class="card-image" />
                                        <p class="card-text" id="coffee"><em>Quantity: <b id="qtDiet"> <?php quantityBev("Diet coke") ?> </b>cans<br>Cost: Ksh<b id="priceDiet"><?php orderBeverages("Diet coke") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" id="btnDiet" onclick="buyItem('qtDiet','priceDiet')">Order Diet Coke</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">RedBull Energy Drink</h5>
                                        <img src="images/redbull.jpg" class="card-image" />
                                        <p class="card-text" id="cocoa"><em>Quantity: <b id="qtRed"> <?php quantityBev("RedBull") ?> </b>cans<br>Cost: Ksh<b id="priceRed"><?php orderBeverages("RedBull") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtRed','priceRed')">Order Red Bull</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Red Wine</h5>
                                        <img src="images/wine.jpg" class="card-image" />
                                        <p class="card-text" id="chocolate"><em>Quantity: <b id="qtWine"> <?php quantityBev("Wine") ?> </b>bottles<br>Cost: Ksh<b id="priceWine"><?php orderBeverages("Wine") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtWine','priceWine')">Order Wine</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="acc3">
                        Lunch
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ugali</h5>
                                        <img src="images/ugali.jpeg" class="card-image" />
                                        <p class="card-text" id="coffee"><em>Quantity: <b id="qtUgali"> <?php quantityFood("Ugali") ?> </b>plates<br>Cost: Ksh<b id="priceUgali"><?php orderFood("Ugali") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" id="btnUgali" onclick="buyItem('qtUgali','priceUgali')">Order Ugali</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Chapati</h5>
                                        <img src="images/chapati.jpg" class="card-image" />
                                        <p class="card-text" id="cocoa"><em>Quantity: <b id="qtChapati"> <?php quantityFood("Chapati") ?> </b>plates<br>Cost: Ksh<b id="priceChapati"><?php orderFood("Chapati") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtChapati','priceChapati')">Order Chapati</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Potato Chips</h5>
                                        <img src="images/chips.jpg" class="card-image" />
                                        <p class="card-text" id="chocolate"><em>Quantity: <b id="qtPotato"> <?php quantityFood("Chips") ?> </b>plates<br>Cost: Ksh<b id="pricePotato"><?php orderFood("Chips") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtPotato','pricePotato')">Order Chips</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pilau</h5>
                                        <img src="images/pilau.jpg" class="card-image" />
                                        <p class="card-text" id="coffee"><em>Quantity: <b id="qtPilau"> <?php quantityFood("Pilau") ?> </b>plates<br>Cost: Ksh<b id="pricePilau"><?php orderFood("Chapati") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" id="btnPilau" onclick="buyItem('qtPilau','pricePilau')">Order Pilau</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="acc4">
                        Supper
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Ugali</h5>
                                        <img src="images/ugali.jpeg" class="card-image" />
                                        <p class="card-text" id="coffee"><em>Quantity: <b id="qtUgali"> <?php quantityFood("Ugali") ?> </b>plates<br>Cost: Ksh<b id="priceUgali"><?php orderFood("Ugali") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" id="btnUgali" onclick="buyItem('qtUgali','priceUgali')">Order Ugali</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Chapati</h5>
                                        <img src="images/chapati.jpg" class="card-image" />
                                        <p class="card-text" id="cocoa"><em>Quantity: <b id="qtChapati"> <?php quantityFood("Chapati") ?> </b>plates<br>Cost: Ksh<b id="priceChapati"><?php orderFood("Chapati") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtChapati','priceChapati')">Order Chapati</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Potato Chips</h5>
                                        <img src="images/chips.jpg" class="card-image" />
                                        <p class="card-text" id="chocolate"><em>Quantity: <b id="qtPotato"> <?php quantityFood("Chips") ?> </b>plates<br>Cost: Ksh<b id="pricePotato"><?php orderFood("Chips") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" onclick="buyItem('qtPotato','pricePotato')">Order Chips</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pilau</h5>
                                        <img src="images/pilau.jpg" class="card-image" />
                                        <p class="card-text" id="coffee"><em>Quantity: <b id="qtPilau"> <?php quantityFood("Pilau") ?> </b>plates<br>Cost: Ksh<b id="pricePilau"><?php orderFood("Chapati") ?></b></em></p>
                                        <a href="#" class="btn btn-primary" id="btnPilau" onclick="buyItem('qtPilau','pricePilau')">Order Pilau</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow. -->
                    </div>
                </div>
            </div>
        </div>

        <script>
            let buyItem = (item, price) => {
                let amount = Number(prompt("Enter amount to buy: ", '1'));
                let itemAmount = document.querySelector(`#${item}`).innerHTML;
                let itemPrice = document.querySelector(`#${price}`).innerHTML;

                if (amount > itemAmount) {
                    alert("Sorry we don't have that much");
                } else {


                    let name = this.item;
                    if(name=="qtCoffee"){
                        name_of_item = "Coffee";
                    }else if(name=="qtCocoa"){
                        name_of_item = "Cocoa";
                    }else if(name=="qtChocolate"){
                        name_of_item = "Chocolate";
                    }
                    var quantity = itemAmount - amount;
                    var cost = itemPrice * amount;

                    alert("This will cost you Ksh " + String(cost));

                }
            }
            
            

        </script>





        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.min.js"></script>
    </body>

    </html>
