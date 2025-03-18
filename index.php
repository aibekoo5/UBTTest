<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include "common/included.php"; ?>
</head>
<body>
<?php 

    session_start();
    
    if(isset($_SESSION['status'])){
        if($_SESSION['status'] == 'logError'){
            if (isset($_SESSION['message'])) {
                echo '<div class="error-text"><span>' . $_SESSION['message'] . '  </span><i class="fas fa-close" onclick="this.parentElement.remove()"></i></div>';
            }
        }
    }

    if (isset($_SESSION['show_login_form'])) {
        echo "<script>sessionStorage.setItem('show_login_form', 'true');</script>";
        
    } elseif (isset($_SESSION['show_register_form'])) {
        echo "<script>sessionStorage.setItem('show_register_form', 'true');</script>";
       
    }
?>

<!-- ------------------------Navbar----------------------------------- -->
  <nav class="navbar">
      <span class="logo">UBT test</span>    
      <ul class="nav-menu">
          <li class="nav-item">
              <a href="" class="nav-link">About site</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">Our features</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">Exam types</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">Experts</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">Courses</a>
          </li>
          <li class="nav-item">
              <a href="#" class="nav-link">Contact</a>
          </li>
      </ul>
      <div class="right-menu">
          <select class="language-select">
              <option value="kz">kz</option>
              <option value="ru">ru</option>
              <option value="en">en</option>
          </select>
      <div class="css-line"></div>
            <?php if(isset($_SESSION['user'])){ ?>
                <a class="login-btn" href="main.php"><?= $_SESSION['user']['name'] ?></a>
                <a class="register-btn" href="common/logout.php">Logout</a>
            <?php }else{?>
                <button class="login-btn" onclick="showLoginForm()">Sign in</button>
                <button class="register-btn" onclick="showRegisterForm()">Sign up</button>
            <?php }?>    
      </div>
  </nav>

  <div style="height: 5rem;"></div>

<!-- ------------------Banner--------------------------- -->
  <div class="banner-container">
    <div class="banner-wrapper">
        <div class="banner b1">
            <div class="banner-text">
                <h1 class="banner-title">Мировой рейтинг</h1>
                <p class="banner-description">Наш университет поднялся на 163 место в мировом рейтинге.</p>
            </div>
            <div class="banner-image">
                <img src="img/загрузка.png" alt="Рейтинг университета">
            </div>
        </div>
        <div class="banner b2">
            <div class="banner-text">
                <h1 class="banner-title">Добро пожаловать в наш университет</h1>
                <p class="banner-description">Откройте для себя мир знаний и возможностей в нашем престижном учебном заведении.</p>
            </div>
            <div class="banner-image">
                <img src="https://farabi.university/storage/files/36262085816429246e6fb13006369009_27404d8b-3a10-43e1-b2b4-573e84d075f7.jpg" alt="Университетский кампус">
            </div>
        </div>
        <div class="banner b3">
            <div class="banner-text">
                <h1 class="banner-title">Новый научный кластер</h1>
                <p class="banner-description">В нашем университете открылся современный кластер Farabi Chem Science.</p>
            </div>
            <div class="banner-image">
                <img src="https://farabi.university/storage/files/335249583766726e91c5c1a573664605_01.jpeg" alt="Научный кластер">
            </div>
        </div>
        <div class="banner b4">
            <div class="banner-text">
                <h1 class="banner-title">90-летие университета</h1>
                <p class="banner-description">Мы отметили 90-летие нашего университета на высоком уровне.</p>
            </div>
            <div class="banner-image">
                <img src="https://farabi.university/storage/files/2018716376677b72c7e576c303197767_002.jpg" alt="Юбилей университета">
            </div>
        </div>
    </div>
    <div class="dots"></div>
  </div>

  <!-- ----------------About site------------------------- -->
    <div class="minBody">
        <div class="a-container">
            <div class="a-content">
                <h1 class="a-title">Болашағыңды <span>дұрыс</span> жоспарла!</h1>
                <p class="a-subtitle">Талапкерге керектің бәрі осы жерде!</p>
                <p class="download-text">Қосымшаны жүктеп ал</p>
                <div class="store-buttons">
                    <a href="#" aria-label="Download on App Store">
                        <img src="/placeholder.svg?height=40&width=135" alt="App Store" class="store-button">
                    </a>
                    <a href="#" aria-label="Get it on Google Play">
                        <img src="/placeholder.svg?height=40&width=135" alt="Google Play" class="store-button">
                    </a>
                    <a href="#" aria-label="Download on App Gallery">
                        <img src="/placeholder.svg?height=40&width=135" alt="App Gallery" class="store-button">
                    </a>
                </div>
            </div>
            <div class="illustration">
                <img src="img/Info-Man-2_06_06_10 (3).jpg" alt="Illustration of a person planning their future">
            </div>
        </div>
    </div>

    <!-- -------------------Features -->
     <div id="features" class="css-1gu3j3w">
        <div class="css-on2gx4">
            <h2 class="css-2pkk5f">Ерекшеліктеріміз</h2>
            <div class="css-h4zt34">
                <div class="css-wvfp0t">
                    <div class="css-1xp49t5">
                        <img src="" alt="img" class="f-img">
                        <h6 class="css-140kwsw">Тест анализі</h6>
                    </div>
                    <p class="css-7mb7lu">Емтиханнан кейін әр пән және тақырыптарды қаншалықты меңгергеніңізді салыстырмалы диаграммалармен көре аласыз.</p>
                </div>
                <div class="css-wvfp0t">
                    <div class="css-1xp49t5">
                        <img src="" alt="img" class="f-img">
                        <h6 class="css-140kwsw">Оқушы прогресі</h6>
                    </div>
                    <p class="css-7mb7lu">Емтихан, пән, тақырып, сынып, аудан және республика бойынша өз прогресіңізді көре аласыз.</p>
                </div>
                <div class="css-wvfp0t">
                    <div class="css-1xp49t5">
                        <img src="" alt="img" class="f-img">
                        <h6 class="css-140kwsw">Қатемен жұмыс</h6>
                    </div>
                    <p class="css-7mb7lu">Тестілеу аяқталғаннан кейін сіз сұрақтардың дұрыс жауаптарын және оның қай тақырыптан екенін көре аласыз.</p>
                </div>
                <div class="css-wvfp0t">
                    <div class="css-1xp49t5">
                        <img src="" alt="img" class="f-img">
                        <h6 class="css-140kwsw">Тақырыптық талдау</h6>
                    </div>
                    <p class="css-7mb7lu">Жасырын ақпаратты ашамыз, терең талдауды қамтамасыз етеміз және маңызды тенденцияларды анықтаймыз.</p>
                </div>
                <div class="css-wvfp0t">
                    <div class="css-1xp49t5">
                        <img src="" alt="img" class="f-img">
                        <h6 class="css-140kwsw">Топтық тест жазу</h6>
                    </div>
                    <p class="css-7mb7lu">Оқушылар промокод арқылы сынып немесе мектеп болып топтық тест тапсыра алады.</p>
                </div>
                <div class="css-wvfp0t">
                    <div class="css-1xp49t5">
                        <img src="" alt="img" class="f-img">
                        <h6 class="css-140kwsw">Прокторинг</h6>
                    </div>
                    <p class="css-7mb7lu">Біз алаяқтықтың алдын алу және нәтижелердің адалдығын қамтамасыз ету арқылы бақылау мен сенімділіктің жоғары деңгейін қамтамасыз етеміз.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- -----------------------Exam types--------------------- -->
     <div id="tests" class="css-1qn1caz">
        <div class="css-vla33a">
            <div class="css-7ta3g1">
                <h2 class="css-2pkk5f">Eмтихан түрлері</h2>
            </div>
            <div class="css-bu6jo4">
                <div color="rgba(15, 68, 117, 0.8)" class="css-yh6ffu">
                    <div class="css-2qz0x3">
                        <img alt="" src="/static/media/ENT.2107465e.jpg" style="width: 100px; height: 100px; border-radius: 16px; background: rgb(255, 255, 255);">
                        <h4 class="css-lib7v9">ҰБТ байқау сынағы</h4>
                    </div>
                    <hr class="MuiDivider-root">
                    <div class="css-11xwb7q">
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">120 Сұрақ</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">5 пән</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">240 минут</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">140 ұпай</p>
                        </div>
                    </div>
                    <div class="css-1jkciol">
                        <div class="css-1o9casj">
                            <p class="css-7mb7lu" style="color: white; padding: 8px; cursor: pointer; line-height: 100%;">Тест тапсыру</p>
                            <img alt="forward" src="/static/media/arrow-forward.55655b44.svg" style="height: 22px;">
                        </div>
                    </div>
                </div>
                <div color="rgba(37, 55, 123, 0.8)" class="css-yh6ffu">
                    <div class="css-2qz0x3">
                        <img alt="" src="/static/media/BIL.3391e1ab.png" style="width: 100px; height: 100px; border-radius: 16px; background: rgb(255, 255, 255);">
                        <h4 font-size="20" class="css-bnmnak">БИЛ дайындық тесті</h4>
                    </div>
                    <hr class="MuiDivider-root">
                    <div class="css-11xwb7q">
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">60 Сұрақ</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">2 пән</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">110 минут</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">240 ұпай</p>
                        </div>
                    </div>
                    <div class="css-1jkciol">
                        <div class="css-1o9casj">
                            <p class="css-7mb7lu" style="color: white; padding: 8px; cursor: pointer; line-height: 100%;">Тест тапсыру</p>
                            <img alt="forward" src="/static/media/arrow-forward.55655b44.svg" style="height: 22px;">
                        </div>
                    </div>
                </div>
                <div color="rgba(88, 35, 13, 0.8)" class="css-yh6ffu">
                    <div class="css-2qz0x3">
                        <img alt="" src="/static/media/NISH.0c3a791e.jpg" style="width: 100px; height: 100px; border-radius: 16px; background: rgb(255, 255, 255);">
                        <h4 font-size="20" class="css-bnmnak">НЗМ дайындық тесті</h4>
                    </div>
                    <hr class="MuiDivider-root">
                    <div class="css-11xwb7q">
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">180 Сұрақ</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">6 пән</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">240 минут</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">1500 ұпай</p>
                        </div>
                    </div>
                    <div class="css-1jkciol">
                        <div class="css-1o9casj">
                            <p class="css-7mb7lu" style="color: white; padding: 8px; cursor: pointer; line-height: 100%;">Тест тапсыру</p>
                            <img alt="forward" src="/static/media/arrow-forward.55655b44.svg" style="height: 22px;">
                        </div>
                    </div>
                </div>
                <div color="rgba(88, 35, 13, 0.8)" class="css-yh6ffu">
                    <div class="css-2qz0x3">
                        <img alt="" src="" style="width: 100px; height: 100px; border-radius: 16px; background: rgb(255, 255, 255);">
                        <h4 font-size="20" class="css-bnmnak">DOSTYQ олимпиадасы (5 сынып)</h4>
                    </div>
                    <hr class="MuiDivider-root">
                    <div class="css-11xwb7q">
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">60 Сұрақ</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">5 пән</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">80 минут</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">60 ұпай</p>
                        </div>
                    </div>
                    <div class="css-1jkciol">
                        <div class="css-1o9casj">
                            <p class="css-7mb7lu" style="color: white; padding: 8px; cursor: pointer; line-height: 100%;">Тест тапсыру</p>
                            <img alt="forward" src="/static/media/arrow-forward.55655b44.svg" style="height: 22px;">
                        </div>
                    </div>
                </div>
                <div color="rgba(88, 35, 13, 0.8)" class="css-yh6ffu">
                    <div class="css-2qz0x3">
                        <img alt="" src="" style="width: 100px; height: 100px; border-radius: 16px; background: rgb(255, 255, 255);">
                        <h4 font-size="20" class="css-bnmnak">SPT олимпиадасы 1 кезең байқау сынағы</h4>
                    </div>
                    <hr class="MuiDivider-root">
                    <div class="css-11xwb7q">
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">50 Сұрақ</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">1 пән</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">60 минут</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">50 ұпай</p>
                        </div>
                    </div>
                    <div class="css-1jkciol">
                        <div class="css-1o9casj">
                            <p class="css-7mb7lu" style="color: white; padding: 8px; cursor: pointer; line-height: 100%;">Тест тапсыру</p>
                            <img alt="forward" src="/static/media/arrow-forward.55655b44.svg" style="height: 22px;">
                        </div>
                    </div>
                </div>
                <div color="rgba(88, 35, 13, 0.8)" class="css-yh6ffu">
                    <div class="css-2qz0x3">
                        <img alt="" src="https://edutestblob.blob.core.windows.net/edutest-images/7843ffde-c495-4511-836e-fe76ec740adf-IMG_3640.png" style="width: 100px; height: 100px; border-radius: 16px; background: rgb(255, 255, 255);">
                        <h4 font-size="20" class="css-bnmnak">PISA 2025</h4>
                    </div>
                    <hr class="MuiDivider-root">
                    <div class="css-11xwb7q">
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">60 Сұрақ</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">5 пән</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">120 минут</p>
                        </div>
                        <div class="css-2k583y">
                            <img alt="" src="/static/media/checkmark.2853d58a.svg">
                            <p class="css-7mb7lu">1000 ұпай</p>
                        </div>
                    </div>
                    <div class="css-1jkciol">
                        <div class="css-1o9casj">
                            <p class="css-7mb7lu" style="color: white; padding: 8px; cursor: pointer; line-height: 100%;">Тест тапсыру</p>
                            <img alt="forward" src="/static/media/arrow-forward.55655b44.svg" style="height: 22px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include "loginForm.php";
        include "registerForm.php";
    ?>

    <?php
        if (isset($_SESSION['status'])) {
            unset($_SESSION['status']);
            unset($_SESSION['message']);
            unset($_SESSION['mainError']);
            unset($_SESSION['logError']);
            unset($_SESSION['errors']);
            unset($_SESSION['show_login_form']);
            unset($_SESSION['show_register_form']);
        }
    ?>
    <script src="http://localhost:8080/UBTTest/js/script.js"></script>
</body>
</html>