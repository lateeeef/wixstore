<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/cd01be9631.js" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link rel="shortcut icon" href="images/logo/wix.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</head>

<style>
    iconify-icon{
        cursor: pointer;
    }
    .sticky{
        position: sticky;
        top: 90px;
    }
    .link{
        cursor: pointer;
    }
    .remover{
        text-decoration: none;
        color: black;
        margin-left: 24px;
    }
    .remover:hover{
        color: red;
    }
    footer{
    background-color: rgb(50,50,50);
    }
    footer header{
    background-color: rgb(40,40,40);
    }
    footer a{
        color: rgba(245, 245, 245, 0.596);
        text-decoration: none;
    }
    footer a:hover{
    color: rgba(245, 245, 245, 0.596);
    text-decoration: underline;
    }
    footer h6{
        color: white;
        font-size: small;
    }
    footer .fa{
    font-size: 20px;
    }
</style>

<body style="background-color: #f5f5f5ab;">
    <div class="">

        <nav class="d-flex justify-content-around bg-white py-3 px-5 align-items-center sticky-top">
            <div class="w-5 h-50">
                <a href="index.php"><img src="images/logo/wix.png" alt="logo" width="100%" height="40px"></a>
            </div>
            <div class="col-6">
                <form class="d-flex" action="">
                    <input class="form-control me-2 px-4 " type="search" name="" id=""
                        placeholder="Search products, brands and categories">
                    <button class="btn btn-outline-dark">SEARCH</button>
                </form>
            </div>
            <div class="pt-3">
                <ul class="text-decoration-none ">
                    <li class="d-inline mx-2 fw-bold dropdown show position-relative">
                        <a href="" class="text-decoration-none text-black " id="dropdownMenuLink" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-o fd" aria-hidden="true"></i>
                            <span class="mx-1">Account</span> 
                            <i class="fa fa-angle-down fa-sm"></i>
                        </a>

                        <div class="dropdown-menu shadow px-1 position-absolute top-0" aria-labelledby="dropdownMenuLink">
                            <a href="signin.php" class="btn btn-outline-dark d-block">SIGN IN</a>
                            <div class="dropdown-divider"></div>
                            <a href="signup.php" class="dropdown-item">
                                <i class="fa-light fa-user me-1"></i>
                                <span class="small">My Account</span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fa fa-floppy-o fd me-1" aria-hidden="true"></i>
                                <span class="small">Orders</span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="fa-regular fa-heart fd me-1"></i>
                                <span class="small">Saved Items</span>
                            </a>
                        </div>    
                    </li>

                    <li class="d-inline mx-2 fw-bold dropdown show position-relative">
                        <a href="#" class="text-decoration-none text-black" id="dropdownMenuLink" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-question-circle-o fd" aria-hidden="true"></i>
                            <span class="mx-1">Help</span> 
                            <i class="fa fa-angle-down fa-sm"></i>
                        </a>

                        <div class="dropdown-menu position-static shadow px-1 position-absolute top-0" aria-labelledby="dropdownMenuLink">
                            <a href="#" class="dropdown-item small">Help Center</a>
                            <a href="#" class="dropdown-item small">Place Oeder</a>
                            <a href="#" class="dropdown-item small">Order Cancellation</a>
                            <a href="#" class="dropdown-item small">Returns & Refunds</a>
                            <a href="#" class="dropdown-item small">Wix Account</a>
                            <div class="dropdown-divider"></div>
                            <a href="" class="btn btn-outline-dark w-100" type="">
                                <i class="fa fa-commenting-o fs-5 me-1" aria-hidden="true" style="margin-top: 2px;"></i>
                                <div class="d-inline small">LIVE CHAT</div>
                            </a>
                        </div> 
                    </li>
                    <li class="d-inline mx-2 fw-bold"><a href="cart.php" class="text-decoration-none text-black"><i class="fa fa-shopping-cart fd" aria-hidden="true"></i>
                        <span class="mx-1">Cart</span></a></li>
                </ul>
            </div>
        </nav>

        <main class="container position-relative ">
            <div class="d-flex justify-content-between mt-2"> 
                <div class="col-8">
                    <table class="table bg-white col-12 px-3 py-5 m-0">
                        <thead>
                            <tr>
                                <th scope="col" class="" colspan="3">CART (<span>3</span>)</th>
                            </tr>
                        </thead>
                    </table>
        
                    <div class="wrapper">
                        <div class="bg-white pt-4 " id="row">
                            <table class="table-borderless bg-white px-3 m-0">
                                <tr class="link">
                                    <td class="text-center ">
                                        <img src="images/fashion/sneaker.jpg"  height="100px" width="100px"
                                        alt="...">
                                    </td>
                                    <td class="col-8 p-0">
                                        <div>Women's leather shoe instinged to the development of the culture encapsulated at the bridge of humour and ellepsed tp initiate</div>
                                    </td>
                                    <td>
                                        <div class="p-0">
                                            <div class="fs-5 fw-bold">&#8358; 29,756</div>
                                            <div><del>&#8358; 53,756</del></div>    
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table class="table bg-white m-0">
                                <tr>
                                    <td>
                                        <div>
                                            <a href="#" class="small remover ">
                                                <i class="fa fa-trash me-2"></i> REMOVE
                                            </a>
                                        </div>
                                    </td>
                                    <td class="col-6"></td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-around quantity">
                                            <iconify-icon id="subtract" inline icon="bxs:minus-square" width="30" height="30"></iconify-icon>
                                            <input class="border-0 text-center " disabled value="1" type="number" name="" id="result" style="width: 35px;">
                                            <iconify-icon id="add" inline icon="pajamas:file-addition-solid" width="30" height="30"></iconify-icon>
                                        </div>    
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
        
                    <div class="wrapper">
                        <div class="bg-white pt-4">
                            <table class="table-borderless bg-white px-3 m-0">
                                <tr class="link">
                                    <td class="text-center ">
                                        <img src="images/fashion/handbag2.png"  height="100px" width="100px" alt="..." class="mb-4">
                                    </td>
                                    <td class="col-8 p-0">
                                        <div>Women's leather shoe instinged to the development of the culture encapsulated at the bridge of humour and ellepsed tp initiate</div>
                                    </td>
                                    <td>
                                        <div class="p-0">
                                            <div class="fs-5 fw-bold">&#8358; 29,756</div>
                                            <div><del>&#8358; 53,756</del></div>    
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table class="table bg-white m-0">
                                <tr>
                                    <td>
                                        <div>
                                            <a href="#" class="small remover">
                                                <i class="fa fa-trash me-2"></i> REMOVE
                                            </a>
                                        </div>
                                    </td>
                                    <td class="col-6"></td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-around ">
                                            <iconify-icon id="add" inline icon="bxs:minus-square" width="30" height="30"></iconify-icon>
                                            <input class="border-0 text-center " disabled value="1" type="number" name="" id="result" style="width: 35px;">
                                            <iconify-icon id="subtract" inline icon="pajamas:file-addition-solid" width="30" height="30"></iconify-icon>
                                        </div>    
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
        
                    <div class="wrapper">
                        <div class="bg-white pt-4">
                            <table class="table-borderless bg-white px-3 m-0">
                                <tr class="link">
                                    <td class="text-center ">
                                        <img src="images/food/nestlemilo.jpg" class="card-img-top mt-2" height="130px" width="100px"
                                            alt="...">
                                    </td>
                                    <td class="col-8 p-0">
                                        <div>Women's leather shoe instinged to the development of the culture encapsulated at the bridge of humour and ellepsed tp initiate</div>
                                    </td>
                                    <td>
                                        <div class="p-0">
                                            <div class="fs-5 fw-bold">&#8358; 29,756</div>
                                            <div><del>&#8358; 53,756</del></div>    
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table class="table bg-white m-0">
                                <tr>
                                    <td>
                                        <div>
                                            <a href="#" class="small remover">
                                                <i class="fa fa-trash me-2"></i> REMOVE
                                            </a>
                                        </div>
                                    </td>
                                    <td class="col-6"></td>
                                    <td>
                                        <div class="d-flex align-items-center justify-content-around ">
                                            <iconify-icon id="add" inline icon="bxs:minus-square" width="30" height="30"></iconify-icon>
                                            <input class="border-0 text-center " disabled value="1" type="number" name="" id="result" style="width: 35px;">
                                            <iconify-icon id="subtract" inline icon="pajamas:file-addition-solid" width="30" height="30"></iconify-icon>
                                        </div>    
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
        
        
                </div>
        
                <div class="d-flex flex-column ms-4 ">
                    <div class="sticky ">
                        <div class="mb-2 bg-white p-3  ">
                            <h6>CART SUMMARY</h6>
                            <div class="dropdown-divider"></div>
                            <div class="d-flex justify-content-between">
                                <div>Subtotal</div>
                                <div class="fs-5">&#8358;29,756</div>
                            </div>
                            <p style="font-size: small;">Delivery fee not included yet.</p>
                            <button class="btn btn-outline-dark w-100">CHECKOUT (&#8358; 29,756)</button>
                        </div>
            
                        <div class="bg-white p-3">
                            <h6>Returns are easy</h6>
                            <p class="small">Free return within 15 days for Official Store items and 7 days for other eligible items See more</p>
                        </div>    
                    </div>
                </div>
            </div>
        </main>
    
        <footer class="text-white mt-5  pb-5 small">
            <header class="container-fluid">
                <div class="container small d-flex justify-content-between align-items- py-4">
                    <div class="bg col-3">
                        <img src="images/logo/wixwait.png" alt="" style="height: 40px; width: 40%;">
                    </div>
                    <div class="col-6 " style="padding-right: 90px;">
                        <h6 class="text-white fw-bold">NEW TO WIX?</h6>
                        <p>Subscribe to our newsletter to get updates on our latest offers!</p>
                        <form class="d-flex">
                            <input class="form-control px-3 me-2" type="email" name="" id="" placeholder="Enter Email-address" required>
                            <button class="btn p-3 border rounded me-2 text-white fa-sm">MALE</button>
                            <button class="btn p-3 border rounded text-white fa-sm">FEMALE</button>
                        </form>
                    </div> 
                    <div class="w-100"> 
                        <div class="d-flex">
                            <div class="text-center me-1"><iconify-icon icon="game-icons:dripping-star" width="40" height="40"></iconify-icon></div>
                            <div>
                                <h6>DOWNLOAD WIX FREE APP</h6>
                                <p>Get access to exclusive offers!</p>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="border border-white rounded px-1 w- me-2">
                                <a href="#" class="d-flex align-items-center text-decoration-none text-white" style="font-size: 10px;">
                                    <iconify-icon icon="ic:twotone-apple" width="32" height="32"></iconify-icon>
                                    <div class="small lh-1">
                                        Download on the <span class="d-block" style="font-size: 15px;">App Store</span>
                                    </div>
                                </a>      
                            </div>
                            <div class="border border-white rounded px-1 w-">
                                <a href="#" class="d-flex align-items-center text-decoration-none text-white" style="font-size: 10px;">
                                    <iconify-icon icon="ion:logo-google-playstore" width="30" height="30"></iconify-icon>
                                    <div class="small lh-1">
                                        GET IT ON <span class="d-block" style="font-size: 15px;">Google Play</span>
                                    </div>
                                </a>      
                            </div>    
                        </div>
                    </div>
                </div>
            </header>
            <article class="container d-flex ">
                <div class="col-3 ">
                    <h6 class="mt-3">LET US HELP YOU</h6>
                    <ul class="list-unstyled small ">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">How to Shop on Wix</a></li>
                        <li><a href="#">Delivery options and timelines</a></li>
                        <li><a href="#">How to return a product on Wix</a></li>
                        <li><a href="#">Corporate and bulk purchases</a></li>
                        <li><a href="#">Return a product</a></li>
                        <li><a href="#">Ship your package anywhere in Nigeria</a></li>
                        <li><a href="#">Dispute resolution policy</a></li>
                        <li><a href="#"></a></li>
                    </ul><br>
    
                </div>
        
                <div class="col-3 ">
                    <h6 class="mt-3">ABOUT WIX</h6>
                    <ul class="list-unstyled small ">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Wix career</a></li>
                        <li><a href="#">Wix express</a></li>
                        <li><a href="#">Terms annd Conditions</a></li>
                        <li><a href="#">Privacy and cookie notice</a></li>
                        <li><a href="#">Wix prime</a></li>
                        <li><a href="#">Wix Global</a></li>
                        <li><a href="#">Official Stores</a></li>
                        <li><a href="#">Flash Sales</a></li>
                    </ul>
    
                    <!-- <h6>PAYMENT MRTHODS AND DELIVERY PARTNERS</h6> -->
                </div>
                <div class="col-3 ">
                    <h6 class="mt-3">MAKE MONEY WITH WIX</h6>
                    <ul class="list-unstyled small ">
                        <li><a href="#">Sale on Wix</a></li> 
                        <li><a href="#">Become a Sale Consultant</a></li>
                        <li><a href="#">Become a Wix Vendor Service Provider</a></li>
                        <li><a href="#">Become a Logistics Service Partner</a></li>
                        <li><a href="#">Join the Wix DA Acadeny</a></li>
                        <li><a href="#">Join the Wix KOL Programme</a></li>
                    </ul>
                </div>
                <div class="col-3 ">
                    <h6 class="mt-3">WIX INTERNATIONAL</h6>
                    <div class="d-flex  ">
                        <div>
                            <ul class="small list-unstyled me-3">
                                <li> <a href="#">Algeria</a></li>
                                <li> <a href="#">Egypt</a></li>
                                <li> <a href="#">Ghana</a></li>
                                <li> <a href="#">Ivory Coast</a></li>
                                <li> <a href="#">Saudi Arabia</a></li>
                                <li> <a href="#">Tunisia</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="small list-unstyled">
                                <li><a href="#">South Africa</a></li>
                                <li><a href="#">Uganda</a></li>
                                <li><a href="#">Egypt</a></li>
                                <li><a href="#">Zambia</a></li>
                                <li><a href="#">Cameroon</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
    
            </article>
    
            <article class="container d-flex">
                <div class="col-3">
                    <h6 class="mb-3"> 
                        JOIN US ON
                    </h6>
                    <a href="#" class="me-3" title="Facebook Wix Nigeria"><i class="text-white fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="Instagram Wix Nigeria"><i class="text-white fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="Twitter Wix Nigeria"><i class="text-white fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="Youtubr Wix Nigeria"><i class="text-white fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="Github"><i class="text-white fa fa-github" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="gnail"><i class="text-white fa fa-google" aria-hidden="true"></i></a>
                </div>
                <div>
                    <h6 class="mb-3">
                        PAYMENT METHODS & DELIVERY PARTNERS
                    </h6>
                    <a href="#" class="me-3" title="Paypal"><i class="text-white fa fa-paypal" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="Credit Card"><i class="text-white fa fa-credit-card" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="Google Wallet"><i class="text-white fa fa-google-wallet" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="Visa"><i class="text-white fa fa-cc-visa" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="CC-discover"><i class="text-white fa fa-cc-discover" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="CC-amex"><i class="text-white fa fa-cc-amex" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="CC-JCB"><i class="text-white fa fa-cc-jcb" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="Mastercard"><i class="text-white fa fa-cc-mastercard" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="CC-paypal"><i class="text-white fa fa-cc-paypal" aria-hidden="true"></i></a>
                    <a href="#" class="me-3" title="BTC"><i class="text-white fa fa-btc" aria-hidden="true"></i></a>
    
                </div>
            </article>
            <hr class="my-5 container border-secondary w-75 mx-auto">
            <div class="text-center"><iconify-icon icon="game-icons:dripping-star" width="63" height="63"></iconify-icon></div>
        </footer>

    </div>

    
    <script src="js/cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>