// カウントアップアニメーション
function animateCounter(element, target, suffix = '+', duration = 2000) {
    const start = 0;
    const increment = target / (duration / 16); // 60fps
    let current = start;
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        
        // 数値のフォーマット
        element.textContent = Math.floor(current) + suffix;
    }, 16);
}

// Intersection Observerで実績数値セクションを監視
function initCounterAnimation() {
    const statsSection = document.querySelector('.stats');
    if (!statsSection) return;
    
    const statNumbers = document.querySelectorAll('.stat-number');
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                statNumbers.forEach(statNumber => {
                    const target = parseInt(statNumber.dataset.target);
                    
                    if (target && !statNumber.dataset.animated) {
                        statNumber.dataset.animated = 'true';
                        const suffix = statNumber.textContent.includes('%') ? '%' : '+';
                        statNumber.textContent = '0' + suffix;
                        animateCounter(statNumber, target, suffix);
                    }
                });
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    observer.observe(statsSection);
}

// スクロールアニメーション（フェードイン）
function initScrollAnimation() {
    const animatedElements = document.querySelectorAll('.service-card, .case-card, .stat-card, .section-title, .section-subtitle');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    animatedElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(element);
    });
}

// スクロール時のヘッダー変化
function initScrollHeader() {
    const header = document.querySelector('.header');
    if (!header) return;
    
    let lastScroll = 0;
    
    window.addEventListener('scroll', () => {
        const currentScroll = window.pageYOffset;
        
        if (currentScroll > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScroll = currentScroll;
    });
}

// ハンバーガーメニュー
function initMobileMenu() {
    const nav = document.querySelector('.nav');
    const navList = document.querySelector('.nav-list');
    if (!nav || !navList) return;
    
    // ハンバーガーボタンを作成
    const hamburger = document.createElement('button');
    hamburger.className = 'hamburger';
    hamburger.setAttribute('aria-label', 'メニューを開く');
    hamburger.innerHTML = '<span></span><span></span><span></span>';
    
    // ハンバーガーボタンをナビゲーションの前に挿入
    nav.insertBefore(hamburger, navList);
    
    // オーバーレイを作成
    const overlay = document.createElement('div');
    overlay.className = 'menu-overlay';
    
    // クリックイベント
    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        navList.classList.toggle('active');
        document.body.classList.toggle('menu-open');
        
        if (navList.classList.contains('active')) {
            document.body.appendChild(overlay);
        } else {
            if (overlay.parentNode) {
                overlay.parentNode.removeChild(overlay);
            }
        }
    });
    
    // オーバーレイをクリックしたら閉じる
    overlay.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navList.classList.remove('active');
        document.body.classList.remove('menu-open');
        if (overlay.parentNode) {
            overlay.parentNode.removeChild(overlay);
        }
    });
    
    // メニューリンクをクリックしたら閉じる
    navList.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navList.classList.remove('active');
            document.body.classList.remove('menu-open');
            if (overlay.parentNode) {
                overlay.parentNode.removeChild(overlay);
            }
        });
    });
    
    // ウィンドウリサイズ時にメニューを閉じる
    window.addEventListener('resize', () => {
        if (window.innerWidth > 768) {
            hamburger.classList.remove('active');
            navList.classList.remove('active');
            document.body.classList.remove('menu-open');
            if (overlay.parentNode) {
                overlay.parentNode.removeChild(overlay);
            }
        }
    });
}

// ページ読み込み時に初期化
document.addEventListener('DOMContentLoaded', () => {
    initCounterAnimation();
    initScrollAnimation();
    initScrollHeader();
    initMobileMenu();
});

