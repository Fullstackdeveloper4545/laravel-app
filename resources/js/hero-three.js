import { initThreeGrid } from './three-grid';

window.addEventListener('load', () => {
    initThreeGrid('three-container', { enableCeilingPlanes: true });
});
