<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRONOS AEROSPACE | Space Situational Awareness & Satellite Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { mono: ['"JetBrains Mono"', 'monospace'] },
                    colors: {
                        radar: { 950: '#01050a', 900: '#030b14', 800: '#0a192f' },
                        neon: { cyan: '#00f0ff', green: '#00ff41', red: '#ff003c', amber: '#ffaa00' }
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
        ::selection { background: #00f0ff; color: #000; }
        
        /* Filtro Matrix Militare per le immagini */
        .tactical-matrix {
            filter: grayscale(100%) contrast(160%) brightness(65%) sepia(80%) hue-rotate(150deg);
        }
        .tactical-matrix:hover {
            filter: grayscale(100%) contrast(190%) brightness(80%) sepia(80%) hue-rotate(150deg);
        }

        /* Scrollbar Terminale */
        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #000; }
        ::-webkit-scrollbar-thumb { background: #00f0ff; }
    </style>
</head>
<body class="text-gray-400 font-mono antialiased min-h-screen flex flex-col selection:bg-neon-cyan selection:text-black">

    <nav class="border-b border-gray-800 bg-black sticky top-0 z-50 text-[11px] uppercase tracking-wider">
        <div class="max-w-[1600px] mx-auto px-4 py-3 flex flex-wrap justify-between items-center gap-4">
            <div class="flex items-center gap-6">
                <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-neon-green"></span>
                    <a href="#" class="text-white font-extrabold text-sm tracking-widest text-neon-cyan">KRONOS_AEROSPACE // SSA</a>
                </div>
                <span class="hidden xl:inline text-gray-600">|</span>
                <span class="hidden xl:inline text-gray-500">Core Network Status: <span class="text-neon-green">SECURE [NODES: 14/14]</span></span>
            </div>
            
            <div class="hidden lg:flex items-center gap-6 text-gray-400">
                <a href="#services" class="hover:text-neon-cyan transition-none">[ 01.SERVIZI_ORBITALI ]</a>
                <a href="#radar-section" class="hover:text-neon-cyan transition-none">[ 02.LIVE_TRACKING ]</a>
                <a href="#infrastructure" class="hover:text-neon-cyan transition-none">[ 03.STRUTTURA_TERRA ]</a>
                <a href="#compliance" class="hover:text-neon-cyan transition-none">[ 04.SICUREZZA_ITAR ]</a>
            </div>

            <div class="flex items-center gap-4 text-gray-500">
                <span class="hidden md:inline">LOC: <span id="local-clock" class="text-white">00:00:00</span></span>
                <span>SYS_UTC: <span id="sys-clock" class="text-neon-cyan font-bold">00:00:00 UTC</span></span>
                <button class="border border-neon-cyan text-neon-cyan px-3 py-1 font-bold text-[10px] hover:bg-neon-cyan hover:text-black transition-none">
                    TERMINAL_LOGIN
                </button>
            </div>
        </div>
    </nav>

    <header class="border-b border-gray-800 bg-radar-950 py-12 relative overflow-hidden">
        <div class="max-w-[1600px] mx-auto px-4 relative z-10">
            <div class="inline-flex items-center gap-3 border border-neon-red/40 bg-neon-red/5 px-3 py-1 text-[10px] text-neon-red uppercase tracking-widest mb-6">
                <span class="w-1.5 h-1.5 bg-neon-red animate-pulse"></span>
                CLASSIFIED: FOR INSTITUTIONAL, COMMERCE & DEFENSE USE ONLY // INTERNAL DATA REPLICATION PROTOCOL 09-C
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                <div class="lg:col-span-2">
                    <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase leading-none mb-4">
                        CONTROLLO ASSOLUTO.<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon-cyan to-blue-600">DOMINIO SPAZIALE INTEGRATO.</span>
                    </h1>
                    <p class="text-sm md:text-base text-gray-400 max-w-3xl leading-relaxed">
                        Forniamo consapevolezza situazionale spaziale (SSA) ed elaborazione telemetrica a latenza zero per agenzie governative, forze di difesa ed operatori di mega-costellazioni commerciali. Nessuna approssimazione. Tracciamento centimetrico garantito da rete radar phased-array proprietaria.
                    </p>
                </div>

                <div class="border border-gray-800 bg-black p-4 text-[11px] leading-tight flex flex-col gap-2">
                    <div class="text-white font-bold border-b border-gray-800 pb-1 uppercase text-xs text-neon-cyan">SYSTEM ARCHITECTURE METRICS</div>
                    <div>ENC_ALGORITHM: <span class="text-white">AES-256-GCM / RSA-4096</span></div>
                    <div>DATA LATENCY: <span class="text-neon-green">&lt; 8.4 MS (GLOBAL AVERAGED)</span></div>
                    <div>RADAR CROSS SECTION MIN: <span class="text-white">0.01 m² AT 2,000 KM</span></div>
                    <div class="pt-2 border-t border-gray-800 text-gray-500 flex justify-between">
                        <span>SIG_LEVEL: ALPHA-6</span>
                        <span class="text-neon-green">ACTIVE_NODE</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap gap-4 mt-8">
                <a href="#radar-section" class="bg-neon-cyan text-black px-6 py-3 text-xs font-bold uppercase tracking-widest hover:bg-white transition-none">
                    INIZIALIZZA TRACCIAMENTO LIVE
                </a>
                <button class="border border-gray-700 text-gray-300 px-6 py-3 text-xs font-bold uppercase tracking-widest hover:border-neon-cyan hover:text-neon-cyan transition-none">
                    DOWNLOAD CAPABILITY STATEMENT [PDF]
                </button>
            </div>
        </div>
    </header>

    <section id="radar-section" class="border-b border-gray-800 bg-black py-10">
        <div class="max-w-[1600px] mx-auto px-4">
            <div class="text-xs text-gray-500 uppercase tracking-widest mb-4 flex items-center gap-2">
                <span class="text-neon-cyan">&gt;&gt;</span> SECTION_02 // CENTRO DI RILEVAMENTO TATTICO ORBITALE LEO/MEO
            </div>
            
            <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
                <div class="xl:col-span-2 border border-gray-800 bg-black p-1 relative">
                    <div class="absolute top-4 left-4 text-xs text-neon-cyan z-10 font-bold bg-black/80 px-2 py-1 border border-neon-cyan/20">
                        SST MATRIX: DISTRIBUTED RADAR ECHOES
                    </div>
                    <canvas id="radarCanvas" class="w-full h-[520px] bg-black block" width="900" height="520"></canvas>
                </div>

                <div class="border border-gray-800 bg-radar-900 flex flex-col h-[528px]">
                    <div class="border-b border-gray-800 p-3 bg-black flex justify-between items-center">
                        <span class="text-xs text-white font-bold uppercase tracking-widest">STREAMING TELEMETRICO RAW (DECODIFICATO)</span>
                        <span class="text-[9px] text-neon-green border border-neon-green/30 px-1.5 py-0.5 bg-neon-green/5 animate-pulse">SYS_LIVE</span>
                    </div>
                    <div id="telemetry-log" class="p-4 text-[10px] text-gray-400 overflow-hidden flex-grow flex flex-col gap-1.5 font-mono">
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="border-b border-gray-800 bg-radar-950 py-16">
        <div class="max-w-[1600px] mx-auto px-4">
            
            <div class="mb-12 border-l-4 border-neon-cyan pl-4">
                <h2 class="text-2xl text-white font-bold uppercase tracking-tight">SERVIZI DI SORVEGLIANZA E PROTEZIONE ORBITALE</h2>
                <p class="text-xs text-gray-500 mt-1 uppercase">Specifiche operative del portafoglio di monitoraggio Kronos Aerospace</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="border border-gray-800 bg-black p-6 flex flex-col justify-between">
                    <div>
                        <div class="text-[10px] text-neon-cyan font-bold tracking-widest mb-2">KRN-01 // CO-LOCATION & SSA</div>
                        <h3 class="text-white font-bold text-lg mb-3 uppercase">Space Situational Awareness</h3>
                        <p class="text-xs text-gray-500 leading-relaxed mb-4">
                            Mappatura e tracciamento continuo di oggetti attivi e passivi. Generazione automatica di cataloghi orbitali privati ad alta precisione. Risoluzione centimetrica per l'identificazione di frammenti non catalogati dalle reti pubbliche.
                        </p>
                    </div>
                    <div class="border-t border-gray-900 pt-3 text-[10px] text-gray-400">DISPONIBILITÀ: <span class="text-neon-green">H24/365</span></div>
                </div>

                <div class="border border-gray-800 bg-black p-6 flex flex-col justify-between">
                    <div>
                        <div class="text-[10px] text-neon-amber font-bold tracking-widest mb-2">KRN-02 // THREAT ASSESSMENT</div>
                        <h3 class="text-white font-bold text-lg mb-3 uppercase">Analisi delle Congiunzioni (CA)</h3>
                        <p class="text-xs text-gray-500 leading-relaxed mb-4">
                            Algoritmi predittivi proprietari per il calcolo del Time of Closest Approach (TCA) e Probability of Collision (PoC). Invio di alert prioritari in formato militare automatizzato direttamente ai centri di comando (C2) del cliente.
                        </p>
                    </div>
                    <div class="border-t border-gray-900 pt-3 text-[10px] text-gray-400">ALERT RATE: <span class="text-neon-cyan">&lt; 60 SECONDI</span></div>
                </div>

                <div class="border border-gray-800 bg-black p-6 flex flex-col justify-between">
                    <div>
                        <div class="text-[10px] text-neon-cyan font-bold tracking-widest mb-2">KRN-03 // BALLISTIC REF_SYS</div>
                        <h3 class="text-white font-bold text-lg mb-3 uppercase">Determinazione d'Orbita (OD)</h3>
                        <p class="text-xs text-gray-500 leading-relaxed mb-4">
                            Calcolo e rifinitura dei vettori di stato orbitali attraverso dati osservativi multi-sensore (Ottici, Laser Ranging, Radar RF). Generazione istantanea di file Ephemeris (OEM/SP3) validati per manovre evasive immediate.
                        </p>
                    </div>
                    <div class="border-t border-gray-900 pt-3 text-[10px] text-gray-400">ACCURATEZZA: <span class="text-neon-green">METRICA / SUB-METRICA</span></div>
                </div>

                <div class="border border-gray-800 bg-black p-6 flex flex-col justify-between">
                    <div>
                        <div class="text-[10px] text-neon-red font-bold tracking-widest mb-2">KRN-04 // CYBER HARDENING</div>
                        <h3 class="text-white font-bold text-lg mb-3 uppercase">Space Cyber Defence</h3>
                        <p class="text-xs text-gray-500 leading-relaxed mb-4">
                            Monitoraggio dello spettro RF per l'identificazione di anomalie da interferenza, jamming intenzionale o spoofing dei segnali di telemetria e comando. Protezione attiva del canale uplink/downlink con tracking dei vettori di attacco a terra.
                        </p>
                    </div>
                    <div class="border-t border-gray-900 pt-3 text-[10px] text-gray-400">SICUREZZA: <span class="text-neon-red">MIL-STD-810H COMPLIANT</span></div>
                </div>
            </div>
        </div>
    </section>

    <section id="infrastructure" class="border-b border-gray-800 bg-black py-16">
        <div class="max-w-[1600px] mx-auto px-4">
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center mb-12">
                <div class="lg:col-span-1">
                    <div class="text-xs text-neon-cyan uppercase tracking-widest mb-2">&gt;&gt; ASSET_INFRASTRUCTURE</div>
                    <h2 class="text-2xl text-white font-bold uppercase tracking-tight mb-4">Rete di Rilevamento Globale Autonoma</h2>
                    <p class="text-xs text-gray-500 leading-relaxed">
                        I nostri servizi non dipendono da terze parti o da infrastrutture civili vulnerabili. Kronos coordina una rete planetaria di stazioni radar d'antenna Phased-Array e telescopi ottici a tracking rapido situati in zone geostrategiche ottimali.
                    </p>
                </div>

                <div class="lg:col-span-2 border border-gray-800 bg-radar-900 overflow-x-auto">
                    <table class="w-full text-left text-[11px] uppercase tracking-wide">
                        <thead class="bg-black text-white font-bold border-b border-gray-800">
                            <tr>
                                <th class="p-3">SENSORE ID</th>
                                <th class="p-3">TIPO TECNOLOGIA</th>
                                <th class="p-3">COPERTURA OPERATIVA</th>
                                <th class="p-3">STATO OPERATIVO</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-800/60 text-gray-400">
                            <tr>
                                <td class="p-3 text-white font-bold">RAD-NOD-01 (Nord Europa)</td>
                                <td class="p-3">Banda X Phased Array Radar</td>
                                <td class="p-3">Orbite LEO (Fino a 2000km)</td>
                                <td class="p-3 text-neon-green">ONLINE / ACTIVE</td>
                            </tr>
                            <tr>
                                <td class="p-3 text-white font-bold">OPT-TRACK-04 (Atacama, CL)</td>
                                <td class="p-3">Telescopio Ottico Fast-Slew 1.2m</td>
                                <td class="p-3">Orbite MEO / GEO Deep-Space</td>
                                <td class="p-3 text-neon-green">ONLINE / ACTIVE</td>
                            </tr>
                            <tr>
                                <td class="p-3 text-white font-bold">RAD-NOD-02 (Oceano Indiano)</td>
                                <td class="p-3">Radar ad Apertura Sintetica Spaziale</td>
                                <td class="p-3">Tracciamento Detriti Micro (SST)</td>
                                <td class="p-3 text-neon-cyan">CALIBRATION_PHASE</td>
                            </tr>
                            <tr>
                                <td class="p-3 text-white font-bold">CYB-NODE-09 (Riservato)</td>
                                <td class="p-3">RF Spectrum Analyzer Matrix</td>
                                <td class="p-3">Uplink Anti-Jamming Shield</td>
                                <td class="p-3 text-neon-green">ONLINE / LOCK</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="border border-gray-800 bg-black relative group">
                    <div class="h-44 overflow-hidden border-b border-gray-800">
                        <img src="https://images.unsplash.com/photo-1544377193-33dcf4d68fb5?auto=format&fit=crop&w=600&q=80" alt="Data Center Militare" class="w-full h-full object-cover tactical-matrix">
                    </div>
                    <div class="p-4">
                        <div class="text-[11px] font-bold text-white uppercase mb-1">Elaborazione Dati Calcolo Massivo</div>
                        <div class="text-[10px] text-gray-500">I supercomputer locali elaborano milioni di vettori orbitali al secondo su canali isolati dall'esterno.</div>
                    </div>
                </div>

                <div class="border border-gray-800 bg-black relative group">
                    <div class="h-44 overflow-hidden border-b border-gray-800">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=600&q=80" alt="Hardware RF Shielded" class="w-full h-full object-cover tactical-matrix">
                    </div>
                    <div class="p-4">
                        <div class="text-[11px] font-bold text-white uppercase mb-1">Elettronica Schermata EMP</div>
                        <div class="text-[10px] text-gray-500">I moduli di ricetrasmissione RF utilizzano componentistica indurita contro radiazioni solari ed impulsi elettromagnetici.</div>
                    </div>
                </div>

                <div class="border border-gray-800 bg-black relative group">
                    <div class="h-44 overflow-hidden border-b border-gray-800">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=600&q=80" alt="Orbital Tracking Vision" class="w-full h-full object-cover tactical-matrix">
                    </div>
                    <div class="p-4">
                        <div class="text-[11px] font-bold text-white uppercase mb-1">Mappatura Vettoriale Globale</div>
                        <div class="text-[10px] text-gray-500">Aggiornamento istantaneo del catalogo oggettuale globale per una protezione proattiva degli asset orbitali critici.</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="compliance" class="border-b border-gray-800 bg-radar-950 py-16">
        <div class="max-w-[1600px] mx-auto px-4 text-center md:text-left">
            <div class="border border-neon-cyan/20 bg-black p-8 max-w-5xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
                <div class="flex-grow">
                    <div class="text-xs text-neon-red font-bold uppercase tracking-widest mb-2">MILITARY & GOVERNMENT REQUISITES</div>
                    <h3 class="text-white text-xl font-bold uppercase mb-3">Conformità Rigida ITAR / EAR & Protocolli NATO</h3>
                    <p class="text-xs text-gray-500 leading-relaxed max-w-2xl">
                        Il trasferimento dei dati e l'accesso alle metriche di telemetria sono strettamente regolamentati dalle normative sul controllo delle esportazioni di tecnologie sensibili per la difesa. L'accesso è subordinato a verifica preliminare delle credenziali istituzionali e rilascio di chiavi crittografiche hardware.
                    </p>
                </div>
                <div class="flex flex-col gap-2 shrink-0 w-full md:w-auto">
                    <div class="border border-gray-800 px-4 py-2 bg-radar-900 text-[10px] text-white font-bold uppercase text-center">
                        COMPLIANCE LEVEL: TIER-1 SECURE
                    </div>
                    <div class="border border-neon-red/30 px-4 py-2 bg-neon-red/5 text-[10px] text-neon-red font-bold uppercase text-center">
                        ITAR RESTRICTED ENVIRONMENT
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="border-t border-gray-800 bg-black mt-auto text-[11px] uppercase tracking-wider text-gray-600">
        <div class="max-w-[1600px] mx-auto px-4 py-12">
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 mb-12 border-b border-gray-900 pb-12">
                <div>
                    <div class="text-white font-bold mb-3 text-[12px] text-neon-cyan">/root/sys_overview</div>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="hover:text-gray-400 transition-none">Monitoraggio LEO</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Deep Space Tracking (GEO)</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Space Debris Inventory</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">RF Anomalies Analysis</a></li>
                    </ul>
                </div>
                <div>
                    <div class="text-white font-bold mb-3 text-[12px] text-neon-cyan">/etc/protocols</div>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="hover:text-gray-400 transition-none">C2 Data Integration</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Ephemeris Formats (OEM)</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Conjunction Alerting Api</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">AES Key Distribution</a></li>
                    </ul>
                </div>
                <div>
                    <div class="text-white font-bold mb-3 text-[12px] text-neon-cyan">/var/log/nodes</div>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="hover:text-gray-400 transition-none">Radar Cluster Europe</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Optical Tracking Chile</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">RF Sensor Network Asia</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Space Sensor Uplinks</a></li>
                    </ul>
                </div>
                <div>
                    <div class="text-white font-bold mb-3 text-[12px] text-neon-cyan">/usr/share/legal</div>
                    <ul class="flex flex-col gap-2">
                        <li><a href="#" class="hover:text-gray-400 transition-none">ITAR Export Controls</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">NATO Security Clearance</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Non-Disclosure Clauses</a></li>
                        <li><a href="#" class="hover:text-gray-400 transition-none">Terms of Engagement</a></li>
                    </ul>
                </div>
                <div class="lg:col-span-1 border-l-2 border-gray-800 pl-4 md:pl-0 md:border-none flex flex-col justify-between">
                    <div>
                        <div class="text-white font-black tracking-widest text-xs">KRONOS SYSTEMS</div>
                        <div class="text-[9px] text-gray-500 mt-2 leading-tight">
                            AVVISO: OGNI ATTIVITÀ SU QUESTO PORTALE È REGISTRATA E MONITORATA DAI SISTEMI DI CONTROSPIONAGGIO INTERNO.
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-[10px]">
                <p>&copy; 2026 KRONOS AEROSPACE DEFENSE SYSTEMS INC. TUTTI I DIRITTI RISERVATI. CONFIDENZIALE LIVELLO 4.</p>
                <div class="flex gap-4">
                    <span>HOST_REPLICA: SECURE-NODE-DE-01</span>
                    <span class="text-neon-cyan">SHA-256 SIGNED</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Orologi Sincronizzati (Locale e UTC)
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

        // Generazione database satelliti realistici (LEO/MEO)
        const satellites = [];
        const satIDs = ['COSMOS-2543', 'USA-311', 'CHINASAT-1C', 'DEBRIS-LEO-83', 'ONEWEB-0142', 'STARLINK-5129', 'GLOBALSTAR-8', 'SL-4-R/B', 'METEOR-M2', 'ENVISAT_FRAG'];
        
        for (let i = 0; i < 40; i++) {
            const isDebris = Math.random() > 0.7;
            satellites.push({
                id: isDebris ? 'DEBRIS-' + Math.floor(Math.random() * 90000 + 10000) : (satIDs[i % satIDs.length] || 'SAT-' + Math.floor(Math.random() * 9000)),
                angle: Math.random() * Math.PI * 2,
                distance: (Math.random() * 0.75 + 0.15) * radius,
                speed: (Math.random() * 0.003) + 0.0008,
                direction: Math.random() > 0.4 ? 1 : -1,
                lastPing: 0,
                type: isDebris ? 'DEBRIS' : 'ACTIVE',
                inclination: (Math.random() * 90).toFixed(1),
                altitude: Math.floor(Math.random() * 1800 + 350) // KM reali LEO
            });
        }

        // Loop di Rendering Radar Tattico
        function renderRadar() {
            // Sfondo nero ad alto contrasto (no persistenza per performance istantanea)
            ctx.fillStyle = '#000000';
            ctx.fillRect(0, 0, width, height);

            // Disegno Griglia Polare Mil-Spec
            ctx.strokeStyle = '#051424';
            ctx.lineWidth = 1;
            for (let i = 1; i <= 5; i++) {
                ctx.beginPath();
                ctx.arc(cx, cy, (radius / 5) * i, 0, Math.PI * 2);
                ctx.stroke();
            }

            // Linee dei quadranti azimuth
            ctx.beginPath();
            ctx.moveTo(cx, cy - radius); ctx.lineTo(cx, cy + radius);
            ctx.moveTo(cx - radius, cy); ctx.lineTo(cx + radius, cy);
            ctx.stroke();

            // Aggiornamento posizioni angolari degli oggetti
            satellites.forEach(sat => {
                sat.angle += (sat.speed * sat.direction);
                if (sat.angle > Math.PI * 2) sat.angle -= Math.PI * 2;
                if (sat.angle < 0) sat.angle += Math.PI * 2;
            });

            // Disegno del cono d'ombra dello sweep (scansione radar hardware)
            ctx.save();
            ctx.translate(cx, cy);
            ctx.rotate(sweepAngle);
            const scanGradient = ctx.createConicGradient(0, 0, 0);
            scanGradient.addColorStop(0, 'rgba(0, 240, 255, 0.35)');
            scanGradient.addColorStop(0.08, 'rgba(0, 240, 255, 0.04)');
            scanGradient.addColorStop(1, 'rgba(0, 240, 255, 0)');
            
            ctx.fillStyle = scanGradient;
            ctx.beginPath();
            ctx.moveTo(0, 0);
            ctx.arc(0, 0, radius, 0, Math.PI * 2);
            ctx.fill();
            
            // Linea vettoriale dello sweep
            ctx.strokeStyle = '#00f0ff';
            ctx.lineWidth = 1.5;
            ctx.beginPath();
            ctx.moveTo(0, 0); ctx.lineTo(radius, 0);
            ctx.stroke();
            ctx.restore();

            // Disegno dei Target rilevati (Satelliti e Detriti)
            satellites.forEach(sat => {
                const sx = cx + Math.cos(sat.angle) * sat.distance;
                const sy = cy + Math.sin(sat.angle) * sat.distance;

                // Calcolo differenza d'angolo per l'effetto luminescenza al passaggio dello sweep
                let diff = sweepAngle - sat.angle;
                if (diff < 0) diff += Math.PI * 2;

                let opacity = 0.15; // Visibilità minima di fondo (tracciamento termico passivo)
                if (diff < 0.4) {
                    opacity = 1.0 - (diff * 2.5);
                    // Trigger del log telemetrico quando lo sweep colpisce l'oggetto
                    if (opacity > 0.85 && Date.now() - sat.lastPing > 1200) {
                        sat.lastPing = Date.now();
                        pushTelemetryLog(sat);
                    }
                }

                // Colore differenziato: Rosso = Detrito di collisione pericoloso, Verde = Satellite Attivo Controllato
                ctx.fillStyle = sat.type === 'DEBRIS' ? `rgba(255, 0, 60, ${opacity})` : `rgba(0, 255, 65, ${opacity})`;
                ctx.beginPath();
                ctx.arc(sx, sy, sat.type === 'DEBRIS' ? 2 : 3.5, 0, Math.PI * 2);
                ctx.fill();

                // Sovraimpressione ID Alpha-Numerico se illuminato dallo scanner grafico
                if (opacity > 0.6) {
                    ctx.fillStyle = `rgba(0, 240, 255, ${opacity * 0.9})`;
                    ctx.font = '10px "JetBrains Mono"';
                    ctx.fillText(sat.id, sx + 8, sy - 4);
                    
                    // Reticolo quadrato attorno al target attivo
                    ctx.strokeStyle = sat.type === 'DEBRIS' ? `rgba(255, 0, 60, ${opacity * 0.4})` : `rgba(0, 255, 65, ${opacity * 0.4})`;
                    ctx.lineWidth = 0.5;
                    ctx.strokeRect(sx - 6, sy - 6, 12, 12);
                }
            });

            // Incremento sweep ad alta frequenza fissa (senza rallentamenti)
            sweepAngle += 0.025;
            if (sweepAngle >= Math.PI * 2) sweepAngle = 0;

            requestAnimationFrame(renderRadar);
        }

        // Avvio motore radar grafico
        renderRadar();

        // Gestione del Log Telemetrico nel terminale laterale DOM
        const logContainer = document.getElementById('telemetry-log');
        const maxLogRows = 17;

        function pushTelemetryLog(sat) {
            const timeStr = new Date().toISOString().substring(11, 22);
            const azimuth = ((sat.angle * 180) / Math.PI).toFixed(1).padStart(5, '0');
            const rangeKM = Math.floor(sat.distance * 12.8 + sat.altitude); // Simulazione vettoriale coerente
            
            const logLine = document.createElement('div');
            logLine.className = "flex justify-between border-b border-gray-800/40 pb-1 font-mono tracking-tight";
            
            let idColor = sat.type === 'DEBRIS' ? 'text-neon-red font-bold' : 'text-neon-green font-bold';
            
            logLine.innerHTML = `
                <span class="text-gray-600">[${timeStr}]</span>
                <span class="${idColor} w-28 truncate ml-2">${sat.id}</span>
                <span class="text-gray-400">AZ:${azimuth}°</span>
                <span class="text-gray-400">ALT:${rangeKM}KM</span>
                <span class="text-neon-cyan hidden sm:inline">INC:${sat.inclination}°</span>
            `;

            logContainer.prepend(logLine);

            // Rilevamento memoria di sversamento log (Pulizia automatica righe in eccesso)
            if (logContainer.children.length > maxLogRows) {
                logContainer.removeChild(logContainer.lastChild);
            }
        }
    </script>
</body>
</html>