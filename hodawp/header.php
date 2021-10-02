
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Fav Icon -->
    <link rel="icon" href="<?php echo Asset::css('img/icone/logo.png');?>" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="<?php echo Asset::css('bootstrap.min.css');?>" />
    <!-- Manual css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/asset/css/scss/style.css';?>" />
    <title>Home Page</title>
</head>

<body>
<header>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light"><button class="navbar-toggler" type="button"
                                                                               data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                                                                               aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <p class="welcome">به اورگانیک هاب خوش آمدید!</p>
                <img src="<?php echo get_template_directory_uri().'/asset/img/logo.png';?>" alt="logo" id="navbar-logo">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#">صفحه اصلی <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#">پیگیری خرید</a>
                        <a class="nav-item nav-link" href="#">سوالات متداول</a>
                        <a class="nav-item nav-link" href="#">درباره ما</a>
                        <a class="nav-item nav-link" href="#">تماس با ما</a>
                        <a class="nav-item nav-link" href="#">فرم درخواست فروشندگی</a>
                        <a class="nav-item nav-link number-nav-item" href="#"><img src="<?php echo get_template_directory_uri().'/assests/img/icone/phone.png';?>"
                                                                                   class="pl-2">09195704521</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row logo-search-container">
            <div class="col-md-2" id="main-logo">
                <img src="asset/img/logo.png" alt="logo">
            </div>
            <div class="col-md-8 col-12 search-login-holder">
                <div id="search">
                    <input id="input" placeholder="جستجو  بر اساس نام کالا و دسته بندی ها" />
                    <button id="button"><img src="asset/img/icone/search.png"></button>
                </div>
                <div class="login">
                    <div class="d-flex">
                        <a href="#"><img src="<?php echo get_template_directory_uri().'/assests/img/icone/Profile-picture.png';?>"></a>
                        <p>خوش آمدید
                            <br><span><a href="#">ورود به حساب کاربری</a></span>
                        </p>
                    </div>
                    <a href="#" class="mr-3"><img src="asset/img/icone/basket.png"></a>
                </div>
            </div>
        </div>
        <div class="row second-menu-section mt-1">
            <ul class="second-menu-ul">
                <a href="#">
                    <li class="second-menu-item"><img src="asset/img/icone/nuts.png" class="pl-2">خشکبار</li>
                </a>
                <a href="#">
                    <li class="second-menu-item"><img src="asset/img/icone/tea.png" class="pl-2">دمنوش</li>
                </a>
                <a href="#">
                    <li class="second-menu-item"><img src="asset/img/icone/fruits.png" class="pl-2">میوه</li>
                </a>
                <a href="#">
                    <li class="second-menu-item"><img src="asset/img/icone/tree.png" class="pl-2">گیاهان دارویی</li>
                </a>
                <a href="#">
                    <li class="second-menu-item"><img src="asset/img/icone/drink.png" class="pl-2">نوشیدنی ها</li>
                </a>
            </ul>
            <ul class="second-menu-package">
                <a href="#">
                    <li class="second-menu-package-item">پکیج های ویژه</li>
                </a>
            </ul>
        </div>
    </div>
</header>