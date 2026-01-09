export function initThreeGrid(containerId = 'three-container', options = {}) {
    const container = document.getElementById(containerId);
    const { THREE } = window;
    if (!container || !THREE) {
        return;
    }
    const { enableCeilingPlanes = false } = options;

    const width = container.clientWidth;
    const height = container.clientHeight;
    if (!width || !height) {
        return;
    }

    const scene = new THREE.Scene();

    const camera = new THREE.PerspectiveCamera(55, width / height, 0.1, 200);
    camera.position.set(0, 11, 28);
    camera.lookAt(0, -7, -40);

    const renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(width, height);
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setClearColor(0x050506);
    container.appendChild(renderer.domElement);

    const gridSize = 62;
    const divisions = 14;
    const step = gridSize / divisions;

    const frontWidth = 4;
    const backWidth = 0.6;

    const frontCurveStrength = -200;
    const frontCurveDepth = 18;

    const baseGrey = new THREE.Color(0x8a8a8a);
    const purpleGlow = new THREE.Color(0xb26cff);

    const ceilingLines = [];
    const starLength = 4.5;
    const starStartZ = 18;
    const starEndZ = -40;
    const starFadeStartZ = -5;
    const starFadeRange = Math.abs(starFadeStartZ - starEndZ);

    function getCurveY(z) {
        const t = THREE.MathUtils.clamp(1 - Math.abs(z) / frontCurveDepth, 0, 1);
        return -Math.pow(t, 3.6) * frontCurveStrength;
    }

    function getZFactor(z) {
        const clampedZ = THREE.MathUtils.clamp(z, -gridSize / 2, gridSize / 2);
        return THREE.MathUtils.mapLinear(clampedZ, -gridSize / 2, gridSize / 2, frontWidth, backWidth);
    }

    function updateStarGeometry(star) {
        const baseX = star.userData.baseX;
        const zStart = star.userData.z;
        const zEnd = zStart + starLength;
        const positions = star.geometry.attributes.position;

        positions.setXYZ(0, baseX * getZFactor(zEnd), getCurveY(zEnd), zEnd);
        positions.setXYZ(1, baseX * getZFactor(zStart), getCurveY(zStart), zStart);
        positions.needsUpdate = true;
        star.geometry.computeBoundingSphere();
    }

    function createFloorGrid() {
        const group = new THREE.Group();

        for (let i = 0; i <= divisions; i++) {
            const p = -gridSize / 2 + i * step;

            const depthFactor = THREE.MathUtils.mapLinear(
                p,
                -gridSize / 2,
                gridSize / 2,
                frontWidth,
                backWidth
            );

            const material = new THREE.LineBasicMaterial({
                color: baseGrey,
                transparent: true,
                opacity: 0.2
            });

            const hPts = [];
            for (let x = -gridSize / 2; x <= gridSize / 2; x++) {
                const t = THREE.MathUtils.clamp(1 - Math.abs(p) / frontCurveDepth, 0, 1);
                const y = -Math.pow(t, 3.6) * frontCurveStrength;
                hPts.push(x * depthFactor, y, p);
            }

            const hGeo = new THREE.BufferGeometry();
            hGeo.setAttribute('position', new THREE.Float32BufferAttribute(hPts, 3));
            group.add(new THREE.Line(hGeo, material));

            const vPts = [];
            for (let z = -gridSize / 2; z <= gridSize / 2; z++) {
                const zFactor = THREE.MathUtils.mapLinear(
                    z,
                    -gridSize / 2,
                    gridSize / 2,
                    frontWidth,
                    backWidth
                );
                const t = THREE.MathUtils.clamp(1 - Math.abs(z) / frontCurveDepth, 0, 1);
                const y = -Math.pow(t, 3.6) * frontCurveStrength;
                vPts.push(p * zFactor, y, z);
            }

            const vGeo = new THREE.BufferGeometry();
            vGeo.setAttribute('position', new THREE.Float32BufferAttribute(vPts, 3));
            group.add(new THREE.Line(vGeo, material));
        }

        group.rotation.x = -Math.PI / 1.07;
        group.position.y = -18;
        group.position.z = -8;

        return group;
    }

    function createCeilingGrid() {
        const group = new THREE.Group();

        for (let i = 0; i <= divisions; i++) {
            const p = -gridSize / 2 + i * step;

            const depthFactor = THREE.MathUtils.mapLinear(
                p,
                -gridSize / 2,
                gridSize / 2,
                frontWidth,
                backWidth
            );

            const material = new THREE.LineBasicMaterial({
                color: baseGrey.clone(),
                transparent: true,
                opacity: 0.15
            });

            const hPts = [];
            for (let x = -gridSize / 2; x <= gridSize / 2; x++) {
                const t = THREE.MathUtils.clamp(1 - Math.abs(p) / frontCurveDepth, 0, 1);
                const y = Math.pow(t, 3.6) * frontCurveStrength;
                hPts.push(x * depthFactor, y, p);
            }

            const hGeo = new THREE.BufferGeometry();
            hGeo.setAttribute('position', new THREE.Float32BufferAttribute(hPts, 3));
            const hLine = new THREE.Line(hGeo, material.clone());
            group.add(hLine);
            ceilingLines.push(hLine);

            const vPts = [];
            for (let z = -gridSize / 2; z <= gridSize / 2; z++) {
                const zFactor = THREE.MathUtils.mapLinear(
                    z,
                    -gridSize / 2,
                    gridSize / 2,
                    frontWidth,
                    backWidth
                );
                const t = THREE.MathUtils.clamp(1 - Math.abs(z) / frontCurveDepth, 0, 1);
                const y = Math.pow(t, 3.6) * frontCurveStrength;
                vPts.push(p * zFactor, y, z);
            }

            const vGeo = new THREE.BufferGeometry();
            vGeo.setAttribute('position', new THREE.Float32BufferAttribute(vPts, 3));
            const vLine = new THREE.Line(vGeo, material.clone());
            group.add(vLine);
            ceilingLines.push(vLine);
        }

        group.rotation.x = Math.PI / 1.07;
        group.position.y = 23;
        group.position.z = -20;

        return group;
    }

    const floorGrid = createFloorGrid();
    scene.add(floorGrid);
    const ceilingGrid = createCeilingGrid();
    scene.add(ceilingGrid);
    floorGrid.updateMatrixWorld(true);
    ceilingGrid.updateMatrixWorld(true);

    let ceilingPlanes = [];
    let ceilingPlaneZ = 0;
    let ceilingPlaneDirection = -1;
    const planeSpeed = 0.1;
    const planeFrontZ = 28;
    const planeBackZ = -130;

    if (enableCeilingPlanes) {
        const planeCount = 2;
        const geometry = new THREE.PlaneGeometry(0.8, 6);
        geometry.rotateX(Math.PI / 2);

        const material = new THREE.ShaderMaterial({
            transparent: true,
            depthWrite: false,
            blending: THREE.AdditiveBlending,
            uniforms: {
                opacity: { value: 0.5 }
            },
            vertexShader: `
                varying vec2 vUv;
                void main() {
                    vUv = uv;
                    gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
                }
            `,
            fragmentShader: `
                varying vec2 vUv;
                uniform float opacity;

                void main() {
                    float gradient = smoothstep(1.0, 0.0, vUv.y);
                    gl_FragColor = vec4(vec3(1.0), gradient * opacity);
                }
            `
        });

        const group = new THREE.Group();
        for (let i = 0; i < planeCount; i++) {
            const plane = new THREE.Mesh(geometry, material);
            plane.position.x = (i == 0 ? -1 : 1) * 2;
            plane.position.y = 0;
            plane.position.z = planeFrontZ;
            plane.userData.speed = planeSpeed;
            group.add(plane);
            ceilingPlanes.push(plane);

        }

        group.rotation.x = Math.PI / 1.09;
        group.position.z = -5;
        scene.add(group);

        ceilingPlaneZ = planeFrontZ;
        ceilingPlaneDirection = -1;
    }

    const starLanes = [3, 6, 9, 12];
    const stars = [];

    starLanes.forEach((laneIndex) => {
        const baseX = -gridSize / 2 + laneIndex * step;
        const geo = new THREE.BufferGeometry();
        geo.setAttribute('position', new THREE.BufferAttribute(new Float32Array(6), 3));

        const mat = new THREE.LineBasicMaterial({
            color: 0xffffff,
            transparent: true,
            opacity: 0.95
        });

        const star = new THREE.Line(geo, mat);
        star.visible = false;
        star.userData.baseX = baseX;
        star.userData.z = starStartZ;
        star.userData.y = 0;
        star.userData.speed = 0.09;
        updateStarGeometry(star);

        floorGrid.add(star);
        stars.push(star);
    });

    let time = 0;
    let activeStarIndex = 0;
    const flowSpeed = 0.03;
    const flowDuration = Math.PI * 2;
    const pauseDuration = 180;
    let pauseCounter = 0;

    function animate() {
        requestAnimationFrame(animate);

        if (pauseCounter > 0) {
            pauseCounter--;
        } else {
            time += flowSpeed;
            if (time >= flowDuration) {
                time = 0;
                pauseCounter = pauseDuration;
            }
        }

        ceilingLines.forEach((line, i) => {
            const wave = Math.sin(time - i * 0.1);
            const intensity = THREE.MathUtils.clamp((wave + 1) / 2, 0, 1);

            line.material.color.copy(baseGrey).lerp(purpleGlow, intensity * 0.85);
            line.material.opacity = 0.18 + intensity * 0.35;
        });

        if (enableCeilingPlanes && ceilingPlanes.length) {
            ceilingPlaneZ += planeSpeed * ceilingPlaneDirection;
            if (ceilingPlaneDirection < 0 && ceilingPlaneZ <= planeBackZ) {
                ceilingPlaneZ = planeBackZ;
                ceilingPlaneDirection = 1;
            } else if (ceilingPlaneDirection > 0 && ceilingPlaneZ >= planeFrontZ) {
                ceilingPlaneZ = planeFrontZ;
                ceilingPlaneDirection = -1;
            }

            ceilingPlanes.forEach((plane) => {
                plane.position.z = ceilingPlaneZ;
            });
        }

        const star = stars[activeStarIndex];

        if (!star.visible) {
            star.visible = true;
            star.userData.z = starStartZ;
            star.material.opacity = 0.95;
            updateStarGeometry(star);
        }

        star.userData.z -= star.userData.speed;
        updateStarGeometry(star);

        if (star.userData.z < starFadeStartZ) {
            const t = THREE.MathUtils.clamp(
                (starFadeStartZ - star.userData.z) / starFadeRange,
                0,
                1
            );
            star.material.opacity = 1 - t;
        }

        if (star.userData.z < starEndZ) {
            star.visible = false;
            activeStarIndex = (activeStarIndex + 1) % stars.length;
        }

        renderer.render(scene, camera);
    }

    animate();

    window.addEventListener('resize', () => {
        const w = container.clientWidth;
        const h = container.clientHeight;
        if (!w || !h) {
            return;
        }
        camera.aspect = w / h;
        camera.updateProjectionMatrix();
        renderer.setSize(w, h);
    });
}


function fixButtonBorder() {
  const btn  = document.querySelector('.btn');
  const svg  = btn.querySelector('.svg');
  const rect = btn.querySelector('.path');

  const w = btn.offsetWidth;
  const h = btn.offsetHeight;
  const r = h / 2;

  svg.setAttribute('viewBox', `0 0 ${w} ${h}`);

  rect.setAttribute('x', 0.5);
  rect.setAttribute('y', 0.5);
  rect.setAttribute('width', w - 1);
  rect.setAttribute('height', h - 1);
  rect.setAttribute('rx', r);
  rect.setAttribute('ry', r);

  const length = rect.getTotalLength();
  const dash   = length * 0.06;
  const gap    = length - dash;

  rect.style.strokeDasharray  = `${dash} ${gap}`;
  rect.style.strokeDashoffset = 0;

  rect.animate(
    [
      { strokeDashoffset: 0 },
      { strokeDashoffset: -length }
    ],
    {
      duration: 2500,
      iterations: Infinity,
      easing: "linear"
    }
  );
}

fixButtonBorder();
window.addEventListener('resize', fixButtonBorder);