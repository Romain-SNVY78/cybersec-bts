/* ============================================================
   CYBERSEC BTS SIO — main.js
   ============================================================ */

/* --- Matrix rain effect ----------------------------------- */
function initMatrix(canvas) {
    if (!canvas) return;
    const ctx = canvas.getContext('2d');

    function resize() {
        canvas.width  = canvas.offsetWidth;
        canvas.height = canvas.offsetHeight;
    }
    resize();
    window.addEventListener('resize', resize);

    const chars  = '01アイウエオカキクケコサシスセソタチツテトナニヌネノ▓▒░█◆◈';
    const cols   = Math.floor(canvas.width / 16);
    const drops  = new Array(cols).fill(1);

    function draw() {
        ctx.fillStyle = 'rgba(7, 7, 15, 0.04)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        ctx.fillStyle = '#00ff88';
        ctx.font = '13px Consolas, monospace';

        drops.forEach((y, i) => {
            const char = chars[Math.floor(Math.random() * chars.length)];
            ctx.fillText(char, i * 16, y * 16);
            if (y * 16 > canvas.height && Math.random() > 0.975) drops[i] = 0;
            drops[i]++;
        });
    }

    setInterval(draw, 55);
}

/* --- Accordion -------------------------------------------- */
function initAccordion() {
    document.querySelectorAll('.tc-head').forEach(head => {
        head.addEventListener('click', () => {
            const card = head.closest('.tc');
            card.classList.toggle('open');
        });
    });
}

/* --- Mobile sidebar --------------------------------------- */
function initMobileSidebar() {
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const togBtn  = document.getElementById('mob-tog');

    if (!sidebar || !togBtn) return;

    togBtn.addEventListener('click', () => {
        sidebar.classList.toggle('open');
        overlay.classList.toggle('show');
    });

    overlay.addEventListener('click', () => {
        sidebar.classList.remove('open');
        overlay.classList.remove('show');
    });
}

/* --- Scroll reveal ---------------------------------------- */
function initReveal() {
    const targets = document.querySelectorAll('.tc, .sec-card');
    if (!targets.length) return;

    // Reset opacity so animation plays
    targets.forEach(el => { el.style.opacity = '0'; });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.style.opacity = '';
                e.target.classList.add('fade-up');
                observer.unobserve(e.target);
            }
        });
    }, { threshold: 0.08 });

    targets.forEach(el => observer.observe(el));
}

/* --- Init ------------------------------------------------- */
document.addEventListener('DOMContentLoaded', () => {
    initMatrix(document.getElementById('matrix-canvas'));
    initAccordion();
    initMobileSidebar();
    initReveal();
});
