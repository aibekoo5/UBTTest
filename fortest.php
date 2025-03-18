<!DOCTYPE html>
<html lang="kk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDU TEST</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fe;
        }

        .container {
            transition: margin-left 0.3s ease;
        }

        .container.nav-open {
            margin-left: 280px;
        }

        .header {
            background-color: #3f51b5;
            padding: 15px;
            display: flex;
            align-items: center;
            position: fixed;
            width: 100%;
            height: 5rem;
            top: 0;
            z-index: 100;
            transition: width 0.3s ease;
        }

        .header.nav-open {
            width: calc(100% - 280px);
        }

        .logo {
            color: white;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .logo span {
            background-color: #1a237e;
            padding: 2px 8px;
            margin-left: 5px;
        }

        .menu-btn {
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
            margin-right: 15px;
        }

        .nav {
            position: fixed;
            top: 0;
            left: -280px;
            width: 280px;
            height: 100vh;
            background-color: white;
            transition: left 0.3s ease;
            z-index: 200;
        }

        .nav.active {
            left: 0;
        }

        .nav-header {
            background-color:rgb(255, 255, 255);
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 5rem;
        }

        .nav-logo {
            text-decoration: none;
            color: white;
            font-size: 24px;
            font-weight: bold;
            color: #1a237e;
        }

        .nav-logo span {
            background-color: #1a237e;
            color: white;
            padding: 2px 8px;
            margin-left: 5px;
        }

        .close-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
            padding: 10px;
        }

        .nav-title {
            padding: 20px 15px;
            color: #666;
            font-size: 14px;
        }

        .nav-menu {
            list-style: none;
        }

        .nav-item {
            display: flex;
            align-items: center;
            padding: 15px;
            color: #333;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .nav-item:hover {
            background-color: #f5f5f5;
        }

        .nav-item i {
            margin-right: 15px;
            font-size: 20px;
        }

        .main-content {
            margin-top: 80px;
            padding: 20px;
        }

        .page-title {
            font-size: 24px;
            margin-bottom: 30px;
        }

        .action-button {
            display: flex;
            align-items: center;
            padding: 20px;
            margin-bottom: 20px;
            border: 2px dashed #20c997;
            border-radius: 8px;
            color: #20c997;
            text-decoration: none;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .action-button:hover {
            background-color: rgba(32, 201, 151, 0.1);
        }

        .action-button i {
            margin-right: 15px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="nav-header">
            <a href="#" class="nav-logo">EDU<span>TEST</span></a>
        </div>
        <hr>
        <div class="nav-title">ЕМТИХАНДАР</div>
        <div class="nav-menu">
            <a href="#" class="nav-item">
                <i>📋</i>
                Менің емтихандарым
            </a>
            <a href="#" class="nav-item">
                <i>📊</i>
                Нәтижелер
            </a>
            <a href="#" class="nav-item">
                <i>🛒</i>
                Емтихан сатып алу
            </a>
            <a href="#" class="nav-item">
                <i>⚙️</i>
                Параметрлер
            </a>
            <a href="#" class="nav-item">
                <i>↪️</i>
                Шығу
            </a>
        </div>
    </nav>

    <div class="container">
        <header class="header">
            <button class="menu-btn">☰</button>
            <button class="close-btn">×</button>
            <a href="#" class="logo">EDU<span>TEST</span></a>
        </header>

        <main class="main-content">
            <h1 class="page-title">Менің емтихандарым</h1>
            
            <a href="#" class="action-button">
                <i>➕</i>
                Емтихан сатып алу
            </a>
            
            <a href="#" class="action-button">
                <i>🎟️</i>
                Код енгіз
            </a>
        </main>
    </div>

    <script>
        const menuBtn = document.querySelector('.menu-btn');
        const logo = document.querySelector('.logo');
        const closeBtn = document.querySelector('.close-btn');
        const nav = document.querySelector('.nav');
        const container = document.querySelector('.container');
        const header = document.querySelector('.header');

        menuBtn.addEventListener('click', () => {
            nav.classList.add('active');
            container.classList.add('nav-open');
            header.classList.add('nav-open');
            menuBtn.style.display = 'none';
            logo.style.display = 'none';
            closeBtn.style.display = 'flex';
        });

        closeBtn.addEventListener('click', () => {
            nav.classList.remove('active');
            container.classList.remove('nav-open');
            header.classList.remove('nav-open');
            menuBtn.style.display = 'flex';
            logo.style.display = 'flex';
            closeBtn.style.display = 'none';
        });
    </script>
</body>
</html>