<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRONOS AEROSPACE | Space Situational Awareness & Satellite Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700;800&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        mono: ['"JetBrains Mono"', 'monospace']
                    },
                    colors: {
                        radar: {
                            950: '#01050a',
                            900: '#030b14',
                            800: '#0a192f'
                        },
                        neon: {
                            cyan: '#00f0ff',
                            green: '#00ff41',
                            red: '#ff003c',
                            amber: '#ffaa00'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #000000;
            background-image:
                linear-gradient(rgba(0, 240, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 240, 255, 0.02) 1px, transparent 1px);
            background-size: 32px 32px;
        }

        ::selection {
            background: #00f0ff;
            color: #000;
        }

        /* Filtro Matrix Militare per le immagini */
        .tactical-matrix {
            filter: grayscale(100%) contrast(160%) brightness(65%) sepia(80%) hue-rotate(150deg);
        }

        .tactical-matrix:hover {
            filter: grayscale(100%) contrast(190%) brightness(80%) sepia(80%) hue-rotate(150deg);
        }

        /* Scrollbar Terminale */
        ::-webkit-scrollbar {
            width: 6px;
            height: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #000;
        }

        ::-webkit-scrollbar-thumb {
            background: #00f0ff;
        }
    </style>
</head>

<body
    class="text-gray-400 font-mono antialiased min-h-screen flex flex-col selection:bg-neon-cyan selection:text-black">
    <nav class="border-b border-gray-800 bg-black sticky top-0 z-50 text-[11px] uppercase tracking-wider">
    <div class="max-w-[1600px] mx-auto px-4 py-3 flex flex-wrap justify-between items-center gap-4">
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-2">
                <span class="w-2 h-2 bg-neon-green"></span>
                <a href="/" class="text-white font-extrabold text-sm tracking-widest text-neon-cyan">KRONOS_AEROSPACE // SSA</a>
            </div>
            <span class="hidden xl:inline text-gray-600">|</span>
            <span class="hidden xl:inline text-gray-500">Core Network Status: <span class="text-neon-green">SECURE [NODES: 14/14]</span></span>
        </div>

        <div class="hidden lg:flex items-center gap-6 text-gray-400">
            <a href="/" class="hover:text-neon-cyan transition-none">[ HOME ]</a>
            <a href="/technology" class="hover:text-neon-cyan transition-none">[ 01.TECHNOLOGY ]</a>
            <a href="/about" class="hover:text-neon-cyan transition-none">[ 02.ABOUT ]</a>
            <a href="/career" class="hover:text-neon-cyan transition-none">[ 03.CAREER ]</a>
            <a href="/contacts" class="hover:text-neon-cyan transition-none">[ 04.CONTACTS ]</a>
        </div>

        <div class="flex items-center gap-4 text-gray-500">
            <span class="hidden md:inline">LOC: <span id="local-clock" class="text-white">00:00:00</span></span>
            <span>SYS_UTC: <span id="sys-clock" class="text-neon-cyan font-bold">00:00:00 UTC</span></span>
            <a href="/admin">
                <button class="border border-neon-cyan text-neon-cyan px-3 py-1 font-bold text-[10px] hover:bg-neon-cyan hover:text-black transition-none">
                    TERMINAL_LOGIN
                </button>
            </a>
        </div>
    </div>
</nav>
    {{ $slot }}
    <footer class="border-t border-gray-800 bg-black mt-auto text-[11px] uppercase tracking-wider text-gray-600">
        <div class="max-w-[1600px] mx-auto px-4 py-12">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12 border-b border-gray-900 pb-12">
                <div>
                    <div class="text-white font-bold mb-3 text-[12px] text-neon-cyan">/root/sys_overview</div>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="hover:text-gray-400 transition-none">Monitoraggio LEO</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Deep Space Tracking
                                (GEO)</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Space Debris Inventory</a>
                        </li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">RF Anomalies Analysis</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="text-white font-bold mb-3 text-[12px] text-neon-cyan">/etc/protocols</div>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="hover:text-gray-400 transition-none">C2 Data Integration</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Ephemeris Formats (OEM)</a>
                        </li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Conjunction Alerting Api</a>
                        </li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">AES Key Distribution</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="text-white font-bold mb-3 text-[12px] text-neon-cyan">/var/log/nodes</div>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="hover:text-gray-400 transition-none">Radar Cluster Europe</a>
                        </li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Optical Tracking Chile</a>
                        </li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">RF Sensor Network Asia</a>
                        </li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Space Sensor Uplinks</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="text-white font-bold mb-3 text-[12px] text-neon-cyan">/usr/share/legal</div>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="hover:text-gray-400 transition-none">ITAR Export Controls</a>
                        </li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">NATO Security Clearance</a>
                        </li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Non-Disclosure Clauses</a>
                        </li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Terms of Engagement</a></li>
                    </ul>
                </div>
                <div
                    class="lg:col-span-1 border-l-2 border-gray-800 pl-4 md:pl-0 md:border-none flex flex-col justify-between">
                    <div>
                        <div class="text-white font-black tracking-widest text-xs">KRONOS SYSTEMS</div>
                        <div class="text-[9px] text-gray-500 mt-2 leading-tight">
                            AVVISO: OGNI ATTIVITÀ SU QUESTO PORTALE È REGISTRATA E MONITORATA DAI SISTEMI DI
                            CONTROSPIONAGGIO INTERNO.
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-[10px]">
                <p>&copy; 2026 KRONOS AEROSPACE DEFENSE SYSTEMS INC. TUTTI I DIRITTI RISERVATI. CONFIDENZIALE LIVELLO 4.
                </p>
                <div class="flex gap-4">
                    <span>HOST_REPLICA: SECURE-NODE-DE-01</span>
                    <span class="text-neon-cyan">SHA-256 SIGNED</span>
                </div>
            </div>
        </div>
    </footer>
    <script>
        function updateClocks() {
            const now = new Date();
            document.getElementById('local-clock').innerText = now.toTimeString().substring(0, 8);
            document.getElementById('sys-clock').innerText = now.toISOString().substring(11, 19) + ' UTC';
        }
        setInterval(updateClocks, 1000);
        updateClocks();

        // Setup Canvas Radar ad alte prestazioni
        const canvas = document.getElementById('radarCanvas');
        const ctx = canvas.getContext('2d');
        let width = canvas.width;
        let height = canvas.height;
        let cx = width / 2;
        let cy = height / 2;
        let radius = Math.min(cx, cy) - 30;

        function resizeCanvas() {
            const container = canvas.parentElement.getBoundingClientRect();
            canvas.width = container.width;
            canvas.height = container.height;
            width = canvas.width;
            height = canvas.height;
            cx = width / 2;
            cy = height / 2;
            radius = Math.min(cx, cy) - 30;
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        let sweepAngle = 0;
    </script>
</body>

</html>
