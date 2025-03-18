    <header class="header">
        <div class="left-menu">
            <i class="menu-btn fa fa-bars"></i>
            <button class="close-btn">×</button>
            <span class="logo">UBT test</span>    
        </div>

        <div class="right-menu">
            <select class="language-select">
                <option value="kz">kz</option>
                <option value="ru">ru</option>
                <option value="en">en</option>
            </select>
            
            <div class="css-line"></div>   
            
            <div class="dropdown-container">
                <div class="profile-header" id="profileHeader">
                  <p class="profile-name"><?= $_SESSION['user']['name'] ?></p>
                  <img class="profile-icon" src="http://localhost:8080/UBTTest/img/avatars/<?=$_SESSION['user']['avatar'] ?? 'default.jpg'?>" alt="no-avatar">
                </div>
                <div class="dropdown-menu" id="dropdownMenu">
                  <a href="profile.php" class="menu-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg> Profile</a>
                  <div class="divider"></div>
                  <a href="common/logout.php" class="menu-item"><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg> Logout</a>
                </div>
            </div>

        </div>
    </header>