import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach((item) => {
        const header = item.querySelector('.faq-item__header');
        if (!header) return;
        header.addEventListener('click', () => {
            item.classList.toggle('is-open');
        });
    });

    // Canvas-based hero grid (pure JS/CSS, no images).
    const gridHost = document.querySelector('.hero-grid-anim');
    if (gridHost && !gridHost.dataset.jsGridAttached) {
        gridHost.dataset.jsGridAttached = 'true';
        gridHost.style.position = 'absolute';
        gridHost.style.inset = '0';
        gridHost.style.pointerEvents = 'none';
        gridHost.style.zIndex = '0';

        gridHost.innerHTML = '';

        // Glow under the grid
        const glow = document.createElement('div');
        glow.style.position = 'absolute';
        glow.style.left = '50%';
        glow.style.bottom = '-10%';
        glow.style.width = '180%';
        glow.style.height = '70%';
        glow.style.transform = 'translateX(-50%)';
        glow.style.background =
            'radial-gradient(ellipse at center, rgba(115,70,255,0.55) 0%, rgba(115,70,255,0.08) 35%, rgba(115,70,255,0) 65%)';
        glow.style.filter = 'blur(22px)';
        glow.style.opacity = '0.9';
        gridHost.appendChild(glow);

        // Canvas for the grid
        const canvas = document.createElement('canvas');
        canvas.style.position = 'absolute';
        canvas.style.inset = '0';
        canvas.style.width = '100%';
        canvas.style.height = '100%';
        canvas.style.mixBlendMode = 'screen';
        gridHost.appendChild(canvas);

        const ctx = canvas.getContext('2d');
        let width = 0;
        let height = 0;
        const vanish = { x: 0, y: 0 };
        let animationFrame;

        const resize = () => {
            width = gridHost.offsetWidth;
            height = gridHost.offsetHeight;
            const dpr = window.devicePixelRatio || 1;
            canvas.width = width * dpr;
            canvas.height = height * dpr;
            canvas.style.width = `${width}px`;
            canvas.style.height = `${height}px`;
            ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
            vanish.x = width / 2;
            vanish.y = height * 0.32;
        };

        const drawGrid = (t) => {
            ctx.clearRect(0, 0, width, height);

            const bottomY = height * 0.98;
            const leftEdge = { x: width * -0.2, y: bottomY };
            const rightEdge = { x: width * 1.2, y: bottomY };

            // base fading overlay to soften towards the horizon
            const fade = ctx.createLinearGradient(0, vanish.y, 0, bottomY);
            fade.addColorStop(0, 'rgba(0,0,0,0)');
            fade.addColorStop(1, 'rgba(0,0,0,0.35)');
            ctx.fillStyle = fade;
            ctx.fillRect(0, 0, width, bottomY);

            ctx.lineWidth = 1.1;
            ctx.strokeStyle = 'rgba(210,196,255,0.7)';
            ctx.shadowColor = 'rgba(124,80,255,0.45)';
            ctx.shadowBlur = 8;

            // Vertical lines
            const spacing = 120;
            const count = Math.ceil((width * 1.4) / spacing);
            for (let i = -count; i <= count; i++) {
                const xBottom = width / 2 + i * spacing;
                ctx.beginPath();
                ctx.moveTo(xBottom, bottomY);
                ctx.lineTo(vanish.x, vanish.y);
                ctx.stroke();
            }

            // Horizontal lines (animated drift upward)
            const prefersReduced =
                window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            const drift = prefersReduced ? 0 : (t / 1000) * 0.18;
            const lines = 18;
            for (let i = 0; i < lines; i++) {
                const progress = ((i + drift) % lines) / lines;
                const eased = Math.pow(progress, 1.35);
                const yPos = vanish.y + (bottomY - vanish.y) * eased;

                const leftPoint = {
                    x: vanish.x + (leftEdge.x - vanish.x) * eased,
                    y: yPos,
                };
                const rightPoint = {
                    x: vanish.x + (rightEdge.x - vanish.x) * eased,
                    y: yPos,
                };

                ctx.beginPath();
                ctx.moveTo(leftPoint.x, leftPoint.y);
                ctx.lineTo(rightPoint.x, rightPoint.y);
                ctx.stroke();
            }

            // Subtle ceiling wires
            ctx.save();
            ctx.shadowBlur = 0;
            ctx.strokeStyle = 'rgba(120,120,140,0.18)';
            const topVanishY = height * 0.12;
            const topBottomY = height * 0.08;
            const topLeft = { x: width * -0.15, y: topBottomY };
            const topRight = { x: width * 1.15, y: topBottomY };
            const topSpacing = 140;
            const topCount = Math.ceil((width * 1.3) / topSpacing);
            for (let i = -topCount; i <= topCount; i++) {
                const xBottom = width / 2 + i * topSpacing;
                ctx.beginPath();
                ctx.moveTo(xBottom, topBottomY);
                ctx.lineTo(width / 2, topVanishY);
                ctx.stroke();
            }
            ctx.restore();

            animationFrame = requestAnimationFrame(drawGrid);
        };

        resize();
        window.addEventListener('resize', resize);
        animationFrame = requestAnimationFrame(drawGrid);

        const cleanup = () => {
            cancelAnimationFrame(animationFrame);
            window.removeEventListener('resize', resize);
        };
        window.addEventListener('beforeunload', cleanup);
    }
});
