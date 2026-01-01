// カウントアップアニメーション
function animateCounter(element, target, suffix = '', duration = 2000) {
    const start = 0;
    const increment = target / (duration / 16); // 60fps
    let current = start;
    
    const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
            current = target;
            clearInterval(timer);
        }
        
        // 数値のフォーマット（サフィックスなし）
        element.textContent = Math.floor(current);
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
                        statNumber.textContent = '0';
                        animateCounter(statNumber, target, '');
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

// ============================================
// サービスページ: インタラクティブタブシステム
// ============================================

function initServiceTabs() {
    const tabs = document.querySelectorAll('.service-tab');
    const contents = document.querySelectorAll('.service-content');
    const indicator = document.querySelector('.tab-indicator');
    
    if (!tabs.length || !indicator) return;
    
    // 初期位置を設定
    const activeTab = document.querySelector('.service-tab.active');
    if (activeTab) {
        updateTabIndicator(activeTab, indicator);
    }
    
    tabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const targetTab = tab.dataset.tab;
            const targetColor = tab.dataset.color;
            
            // タブのアクティブ状態を更新
            tabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            
            // コンテンツの表示を切り替え
            contents.forEach(content => {
                content.classList.remove('active');
                if (content.id === targetTab) {
                    content.classList.add('active');
                    content.classList.add('animated');
                }
            });
            
            // インジケーターをアニメーション
            updateTabIndicator(tab, indicator);
            
            // カードの背景色を変更（オプション）
            const card = document.querySelector(`.service-card-3d[data-service="${targetTab}"]`);
            if (card) {
                card.style.borderTop = `4px solid ${targetColor}`;
            }
        });
    });
}

function updateTabIndicator(tab, indicator) {
    const tabRect = tab.getBoundingClientRect();
    const containerRect = tab.closest('.service-tabs').getBoundingClientRect();
    const left = tabRect.left - containerRect.left;
    const width = tabRect.width;
    
    indicator.style.left = `${left}px`;
    indicator.style.width = `${width}px`;
}

// ============================================
// サービスページ: スクロールアニメーション
// ============================================

function initServiceScrollAnimation() {
    const animatedSections = document.querySelectorAll('.service-content, .industry-solutions, .implementation-flow');
    const animatedCards = document.querySelectorAll('.solution-card, .flow-step');
    
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    animatedSections.forEach(section => {
        observer.observe(section);
    });
    
    animatedCards.forEach(card => {
        observer.observe(card);
    });
}

// ============================================
// サービスページ: 3Dカードエフェクト
// ============================================

function init3DCardEffect() {
    const cards = document.querySelectorAll('.service-card-3d');
    
    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;
            
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
        });
    });
}

// ============================================
// サービスページ: パララックススクロール効果
// ============================================

function initParallax() {
    const parallaxElements = document.querySelectorAll('.card-bg-image img');
    
    if (!parallaxElements.length) return;
    
    let ticking = false;
    
    function updateParallax() {
        parallaxElements.forEach(element => {
            const card = element.closest('.service-card-3d');
            if (!card) return;
            
            const rect = card.getBoundingClientRect();
            const windowHeight = window.innerHeight;
            const elementTop = rect.top;
            const elementHeight = rect.height;
            
            // 要素がビューポート内にある場合のみパララックスを適用
            if (elementTop < windowHeight && elementTop + elementHeight > 0) {
                const scrolled = window.pageYOffset;
                const rate = scrolled * -0.3; // パララックスの速度
                element.style.transform = `translateY(${rate}px) scale(1.1)`;
            }
        });
        
        ticking = false;
    }
    
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(updateParallax);
            ticking = true;
        }
    });
    
    // 初期化
    updateParallax();
}

// ============================================
// サービスページ: スティッキーサイドバーナビゲーション
// ============================================

function initStickySidebarNav() {
    const sidebarNav = document.getElementById('stickyNav');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('#services, #solutions, #flow');
    
    if (!sidebarNav || !navLinks.length) return;
    
    // スクロール時に表示/非表示を切り替え
    function toggleSidebar() {
        if (window.scrollY > 300) {
            sidebarNav.classList.add('visible');
        } else {
            sidebarNav.classList.remove('visible');
        }
    }
    
    // アクティブなセクションをハイライト
    function updateActiveSection() {
        let currentSection = '';
        
        sections.forEach(section => {
            const rect = section.getBoundingClientRect();
            if (rect.top <= 200 && rect.bottom >= 200) {
                currentSection = section.id;
            }
        });
        
        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.dataset.section === currentSection) {
                link.classList.add('active');
            }
        });
    }
    
    // スムーズスクロール
    navLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const targetId = link.dataset.section;
            const targetSection = document.getElementById(targetId);
            
            if (targetSection) {
                const offsetTop = targetSection.offsetTop - 100;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    window.addEventListener('scroll', () => {
        toggleSidebar();
        updateActiveSection();
    });
    
    // 初期化
    toggleSidebar();
    updateActiveSection();
}

// ============================================
// サービスページ: インタラクティブタイムライン
// ============================================

function initTimeline() {
    const timelineSteps = document.querySelectorAll('.flow-step');
    const progressBars = document.querySelectorAll('.progress-bar');
    
    if (!timelineSteps.length) return;
    
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const step = entry.target;
                step.classList.add('animated');
                
                // プログレスバーをアニメーション
                const progressBar = step.querySelector('.progress-bar');
                if (progressBar) {
                    const progress = progressBar.dataset.progress;
                    setTimeout(() => {
                        progressBar.style.width = `${progress}%`;
                    }, 300);
                }
                
                observer.unobserve(step);
            }
        });
    }, observerOptions);
    
    timelineSteps.forEach(step => {
        observer.observe(step);
    });
    
    // 詳細ボタンのクリックイベント
    const detailButtons = document.querySelectorAll('.flow-step-detail-btn');
    detailButtons.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const modalId = btn.dataset.modal;
            // モーダル表示（将来的に実装可能）
            console.log(`詳細モーダルを表示: ${modalId}`);
        });
    });
}

// ページ読み込み時に初期化
document.addEventListener('DOMContentLoaded', () => {
    initCounterAnimation();
    initScrollAnimation();
    initScrollHeader();
    initMobileMenu();
    
    // サービスページ専用の初期化
    if (document.querySelector('.service-tabs')) {
        initServiceTabs();
        initServiceScrollAnimation();
        init3DCardEffect();
        initTimeline();
        initParallax();
        initStickySidebarNav();
    }
});

