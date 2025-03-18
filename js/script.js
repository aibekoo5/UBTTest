document.addEventListener('DOMContentLoaded', function() {
    // Banner functionality
    initializeBanner();

    // Login/Register modal functionality
    initializeModals();

    // Dropdown menu functionality
    initializeDropdownMenu();

    // Aside menu functionality
    initializeAsideMenu();

    checkFormStatus();

    // Add event listener for file input
    initializeFileInput();
});

function initializeBanner() {
    const bannerWrapper = document.querySelector('.banner-wrapper');
    const banners = document.querySelectorAll('.banner');
    const dotsContainer = document.querySelector('.dots');

    if (bannerWrapper && banners.length > 0 && dotsContainer) {
        let currentBanner = 0;
        const interval = 5000; // 5 seconds
    
        // Create dots
        banners.forEach((_, index) => {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            dot.addEventListener('click', () => goToBanner(index));
            dotsContainer.appendChild(dot);
        });
    
        const dots = document.querySelectorAll('.dot');
    
        function showBanner(index) {
            bannerWrapper.style.transform = `translateX(-${index * 100}%)`;
            dots.forEach((dot, i) => {
                dot.classList.toggle('active', i === index);
            });
        }
    
        function nextBanner() {
            currentBanner = (currentBanner + 1) % banners.length;
            showBanner(currentBanner);
        }
    
        function goToBanner(index) {
            currentBanner = index;
            showBanner(currentBanner);
            resetInterval();
        }
    
        function resetInterval() {
            clearInterval(bannerInterval);
            bannerInterval = setInterval(nextBanner, interval);
        }
    
        showBanner(currentBanner);
        let bannerInterval = setInterval(nextBanner, interval);
    }
}

function initializeModals() {
    const wrapperL = document.getElementById('wrapperL');
    const wrapperR = document.getElementById('wrapperR');
    const wrapperE = document.getElementById('wrapperE');

    if (wrapperL) {
        wrapperL.addEventListener('click', function(e) {
            if (e.target === this) hideModal('L');
        });
    }

    if (wrapperR) {
        wrapperR.addEventListener('click', function(e) {
            if (e.target === this) hideModal('R');
        });
    }

    if (wrapperE) {
        wrapperE.addEventListener('click', function(e) {
            if (e.target === this) hideModal('E');
        });
    }
}

function showLoginForm() {
    hideModal('R');
    showModal('L');
}

function showRegisterForm() {
    hideModal('L');
    showModal('R');
}

function showEditForm() {
    showModal('E');
}

function showModal(type) {
    const wrapper = document.getElementById(`wrapper${type}`);
    if (wrapper) wrapper.style.display = 'flex';
}

function hideModal(type) {
    const wrapper = document.getElementById(`wrapper${type}`);
    if (wrapper) wrapper.style.display = 'none';
}

function hideModalL(){
    const wrapper = document.getElementById(`wrapperL`);
    if (wrapper) wrapper.style.display = 'none';
}

function hideModalR(){
    const wrapper = document.getElementById(`wrapperR`);
    if (wrapper) wrapper.style.display = 'none';
}

function hideModalE(){
    const wrapper = document.getElementById(`wrapperE`);
    if (wrapper) wrapper.style.display = 'none';
}

function togglePassword(inputId) {
    const passInput = document.getElementById(inputId);

    if (passInput) {
        passInput.type = passInput.type === 'password' ? 'text' : 'password';
    }
}

function checkFormStatus() {
    if (sessionStorage.getItem('show_login_form') === 'true') {
        showLoginForm();
        sessionStorage.removeItem('show_login_form');
    } else if (sessionStorage.getItem('show_register_form') === 'true') {
        showRegisterForm();
        sessionStorage.removeItem('show_register_form');
    }
    else if (sessionStorage.getItem('show_edit_form') === 'true') {
        showEditForm();
        sessionStorage.removeItem('show_edit_form');
    }
}

function initializeDropdownMenu() {
    const profileHeader = document.getElementById('profileHeader');
    const dropdownMenu = document.getElementById('dropdownMenu');

    if (profileHeader && dropdownMenu) {
        profileHeader.addEventListener('click', () => {
            dropdownMenu.style.display = 'block';
        });
    
        document.addEventListener('click', (event) => {
            if (!profileHeader.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.style.display = 'none';
            }
        });
    }
}

function initializeAsideMenu() {
    const menuBtn = document.querySelector('.menu-btn');
    const logo = document.querySelector('.logo');
    const closeBtn = document.querySelector('.close-btn');
    const nav = document.querySelector('.sidebar');
    const container = document.querySelector('.mainPage');
    const header = document.querySelector('.header');

    if (menuBtn && logo && closeBtn && nav && container && header) {
        menuBtn.addEventListener('click', () => {
            toggleAsideMenu(true);
        });
    
        closeBtn.addEventListener('click', () => {
            toggleAsideMenu(false);
        });
    }

    function toggleAsideMenu(open) {
        nav.classList.toggle('active', open);
        container.classList.toggle('nav-open', open);
        header.classList.toggle('nav-open', open);
        menuBtn.style.display = open ? 'none' : 'flex';
        logo.style.display = open ? 'none' : 'flex';
        closeBtn.style.display = open ? 'flex' : 'none';
    }
}

function initializeFileInput() {
    const avatarInput = document.getElementById('avatar');
    if (avatarInput) {
        avatarInput.addEventListener('change', function() {
            var fileName = this.value.split('\\').pop();
            var fileText = document.querySelector('.input-file-text');
            if (fileText) {
                fileText.textContent = fileName || 'No file chosen';
            }
        });
    }
}