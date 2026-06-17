<x-layout>
    <div class="bg-black min-h-screen text-white p-4 lg:p-6 font-mono selection:bg-neon-cyan selection:text-black">
        
        <header class="border-b border-gray-800 pb-4 mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-end gap-2">
            <div>
                <div class="inline-flex items-center gap-2 px-2 py-0.5 border border-neon-cyan/30 bg-neon-cyan/5 text-[9px] text-neon-cyan uppercase tracking-widest mb-1 animate-pulse">
                    <span class="w-1 h-1 bg-neon-cyan rounded-full"></span> LIVE TELEMETRY STREAM
                </div>
                <h1 class="text-2xl font-black text-white uppercase tracking-tighter leading-none">
                    KRONOS // <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon-cyan to-blue-500">ORBITAL TARGETING MATRIX</span>
                </h1>
            </div>
        </header>

        <div class="grid grid-cols-1 xl:grid-cols-4 gap-6 items-start">
            
            <div class="xl:col-span-1 border border-gray-800 bg-radar-950 flex flex-col h-[600px]">
                <div class="bg-black p-3 border-b border-gray-800 text-[10px] font-bold text-gray-400 tracking-wider uppercase flex justify-between">
                    <span>STRATO ORBITALE // CATALOGO</span>
                    <span class="text-neon-cyan">TOTAL: {{ $satellites->count() }}</span>
                </div>
                
                <div class="overflow-y-auto p-2 space-y-1.5 flex-grow custom-scrollbar">
                    @foreach ($satellites as $satellite)
                        <div onclick="selectSatellite('{{ $satellite->norad }}')" 
                             id="card-{{ $satellite->norad }}"
                             class="sat-card border border-gray-800/80 p-2.5 bg-black/40 hover:bg-radar-900/60 hover:border-neon-cyan/40 cursor-pointer transition-all duration-150">
                            <div class="flex justify-between items-start gap-2">
                                <div class="truncate">
                                    <h3 class="text-[11px] font-bold text-white uppercase truncate tracking-wide">{{ $satellite->name }}</h3>
                                    <p class="text-[9px] text-gray-500 mt-0.5">NORAD: <span class="text-gray-400 font-mono">{{ $satellite->norad }}</span></p>
                                </div>
                                <span class="text-[8px] font-bold px-1.5 py-0.5 uppercase tracking-wide border shrink-0
                                    {{ $satellite->status === 'active' ? 'border-neon-green/30 bg-neon-green/5 text-neon-green' : '' }}
                                    {{ $satellite->status === 'in_alarm' ? 'border-neon-red/40 bg-neon-red/5 text-neon-red animate-pulse' : '' }}
                                    {{ $satellite->status === 'inactive' ? 'border-gray-700 bg-gray-900 text-gray-500' : '' }}
                                    {{ $satellite->status === 'under_maintenance' ? 'border-neon-amber/30 bg-neon-amber/5 text-neon-amber' : '' }}
                                ">
                                    {{ str_replace('_', ' ', $satellite->status) }}
                                </span>
                            </div>
                            
                            <div class="mt-2.5 flex justify-between items-center text-[9px] text-gray-500 border-t border-gray-900 pt-2">
                                <div>TYP: <span class="text-white font-medium">{{ $satellite->orbit_type }}</span></div>
                                <div>INC: <span class="text-neon-cyan">{{ $satellite->inclination }}°</span></div>
                                <div>ALT: <span class="text-white">{{ max($satellite->apogee, $satellite->perigee) }}KM</span></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="xl:col-span-3 space-y-6">
                
                <div class="border border-gray-800 bg-black h-[600px] relative overflow-hidden group">
                    <div class="absolute top-3 left-3 z-10 bg-black/80 border border-gray-800 px-2 py-1 text-[9px] tracking-widest text-gray-400 uppercase">
                        SST MATRIX // RADAR BEAM ACTIVE
                    </div>
                    <canvas id="liveRadarCanvas" class="w-full h-full block"></canvas>
                </div>
                
                <div class="bg-radar-950 border border-gray-800 p-4 relative">
                    <div class="border-b border-gray-800 pb-2 mb-3 flex justify-between items-center">
                        <h2 class="text-[10px] font-bold text-neon-cyan uppercase tracking-widest">REGISTRO STRUMENTALE VETTORIALE</h2>
                        <span class="text-[9px] text-gray-600">SECURE DATA NODE // LOCK-ON READY</span>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-[10px] tracking-wide whitespace-nowrap">
                            <thead class="bg-black text-gray-400 font-bold border-b border-gray-800 uppercase">
                                <tr>
                                    <th class="p-2.5">DESIGNATORE TARGET</th>
                                    <th class="p-2.5">COSPAR ID</th>
                                    <th class="p-2.5">MODELLO</th>
                                    <th class="p-2.5">APOGEO / PERIGEO</th>
                                    <th class="p-2.5">DATA LANCIO</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-950 text-gray-400 font-mono">
                                @foreach ($satellites as $satellite)
                                    <tr id="row-{{ $satellite->norad }}" class="telemetry-row hover:bg-gray-900/40 transition-colors">
                                        <td class="p-2.5 text-white font-bold">{{ $satellite->name }}</td>
                                        <td class="p-2.5 text-gray-500">{{ $satellite->cospair ?? 'N/A' }}</td>
                                        <td class="p-2.5 text-neon-cyan">{{ $satellite->model }}</td>
                                        <td class="p-2.5 font-semibold text-right pr-6">{{ $satellite->apogee }} / {{ $satellite->perigee }} <span class="text-[8px] text-gray-600">KM</span></td>
                                        <td class="p-2.5 text-gray-500">{{ $satellite->lauch_date ? $satellite->lauch_date->format('Y-m-d H:i') : 'N/A' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: #000; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #1f2937; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #00f0ff; }
        .selected-sat { border-color: #00f0ff !important; background-color: rgba(0, 240, 255, 0.04) !important; }
        .selected-row { background-color: rgba(0, 240, 255, 0.08) !important; color: #fff !important; }
    </style>

    <script>
        // Orologio UTC
        function updateClock() {
            document.getElementById('sys-clock').innerText = new Date().toISOString().substring(11, 19) + ' UTC';
        }
        setInterval(updateClock, 1000); updateClock();

        // Configurazione Radar Canvas
        const canvas = document.getElementById('liveRadarCanvas');
        const ctx = canvas.getContext('2d');
        let width, height, cx, cy, radius;

        function resizeCanvas() {
            const box = canvas.parentElement.getBoundingClientRect();
            canvas.width = box.width;
            canvas.height = box.height;
            width = canvas.width;
            height = canvas.height;
            cx = width / 2;
            cy = height / 2;
            radius = Math.min(cx, cy) - 40;
        }
        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        let sweepAngle = 0;
        let selectedNorad = null;

        // PARSING DEI DATI DA BLADE A JAVASCRIPT
        // Generiamo matematicamente un'orbita fittizia ma coerente basata su Apogeo/Perigeo e Inclinazione reali del DB
        const satellitesData = [
            @foreach($satellites as $satellite)
            {
                norad: '{{ $satellite->norad }}',
                name: '{{ $satellite->name }}',
                status: '{{ $satellite->status }}',
                orbitType: '{{ $satellite->orbit_type }}',
                // Normalizziamo la distanza sul radar in base al tipo di orbita
                distance: '{{ $satellite->orbit_type }}' === 'LEO' ? (Math.random() * 0.25 + 0.15) : 
                          '{{ $satellite->orbit_type }}' === 'MEO' ? (Math.random() * 0.25 + 0.45) : (Math.random() * 0.15 + 0.75),
                angle: Math.random() * Math.PI * 2,
                // Velocità proporzionale all'altezza (più sono vicini, più corrono - Terza Legge di Keplero simulata)
                speed: '{{ $satellite->orbit_type }}' === 'LEO' ? 0.004 : '{{ $satellite->orbit_type }}' === 'MEO' ? 0.002 : 0.0005,
                inc: parseFloat('{{ $satellite->inclination }}')
            },
            @endforeach
        ];

        // Seleziona un satellite (da click su card o riga)
        function selectSatellite(norad) {
            selectedNorad = norad;
            
            // Reset grafici classi di selezione
            document.querySelectorAll('.sat-card').forEach(c => c.classList.remove('selected-sat'));
            document.querySelectorAll('.telemetry-row').forEach(r => r.classList.remove('selected-row'));
            
            // Applica focus visivo
            const card = document.getElementById(`card-${norad}`);
            const row = document.getElementById(`row-${norad}`);
            if(card) { card.classList.add('selected-sat'); card.scrollIntoView({ behavior: 'smooth', block: 'nearest' }); }
            if(row) { row.classList.add('selected-row'); row.scrollIntoView({ behavior: 'smooth', block: 'nearest' }); }
        }

        // MOTORE DI RENDERING RADAR AD ALTA FREQUENZA
        function animateRadar() {
            // Sfondo scuro profondo
            ctx.fillStyle = '#000000';
            ctx.fillRect(0, 0, width, height);

            // Disegno i cerchi concentrici della griglia radar
            ctx.strokeStyle = '#051622';
            ctx.lineWidth = 1;
            for (let i = 1; i <= 4; i++) {
                ctx.beginPath();
                ctx.arc(cx, cy, (radius / 4) * i, 0, Math.PI * 2);
                ctx.stroke();
                
                // Testo della quota radar
                ctx.fillStyle = '#032c3d';
                ctx.font = '8px monospace';
                ctx.fillText(`${i * 9000} KM`, cx + (radius / 4) * i + 4, cy + 3);
            }

            // Assi cartesiani principali di azimuth
            ctx.beginPath();
            ctx.moveTo(cx, cy - radius); ctx.lineTo(cx, cy + radius);
            ctx.moveTo(cx - radius, cy); ctx.lineTo(cx + radius, cy);
            ctx.stroke();

            // Calcolo e disegno dello sweep del fascio radar (Cono rotante)
            ctx.save();
            ctx.translate(cx, cy);
            ctx.rotate(sweepAngle);
            const beam = ctx.createConicGradient(0, 0, 0);
            beam.addColorStop(0, 'rgba(0, 240, 255, 0.25)');
            beam.addColorStop(0.1, 'rgba(0, 240, 255, 0.02)');
            beam.addColorStop(1, 'rgba(0, 240, 255, 0)');
            ctx.fillStyle = beam;
            ctx.beginPath();
            ctx.moveTo(0, 0);
            ctx.arc(0, 0, radius, 0, Math.PI * 2);
            ctx.fill();
            ctx.restore();

            // AGGIORNAMENTO E RENDERING TARGETS (SATELLITI)
            satellitesData.forEach(sat => {
                // Aggiorna posizione orbitale angolare
                sat.angle += sat.speed;
                if (sat.angle > Math.PI * 2) sat.angle -= Math.PI * 2;

                // Coordinate cartesiane sul canvas basate sull'angolo orbitale mappato
                // Utilizziamo una lieve deformazione ellittica per simulare l'inclinazione
                const orbitRadiusX = sat.distance * radius;
                const orbitRadiusY = sat.distance * radius * Math.cos(sat.inc * Math.PI / 180);
                
                const sx = cx + Math.cos(sat.angle) * orbitRadiusX;
                const sy = cy + Math.sin(sat.angle) * orbitRadiusY;

                // Calcolo persistenza visiva basata sul passaggio del fascio radar sweep
                let angleDiff = sweepAngle - sat.angle;
                if (angleDiff < 0) angleDiff += Math.PI * 2;
                
                let alpha = 0.15; // Visibilità minima di base (Tracciamento passivo termico)
                if (angleDiff < 0.5) {
                    alpha = 1.0 - (angleDiff * 2);
                }

                const isSelected = sat.norad === selectedNorad;
                if (isSelected) alpha = 1.0; // Se cliccato, resta illuminato al 100%

                // Impostazione colore in base allo stato reale
                if (sat.status === 'in_alarm') ctx.fillStyle = `rgba(255, 0, 60, ${alpha})`;
                else if (sat.status === 'active') ctx.fillStyle = `rgba(0, 255, 65, ${alpha})`;
                else if (sat.status === 'under_maintenance') ctx.fillStyle = `rgba(245, 158, 11, ${alpha})`;
                else ctx.fillStyle = `rgba(107, 114, 128, ${alpha})`;

                // Disegno il punto geometrico del satellite
                ctx.beginPath();
                ctx.arc(sx, sy, isSelected ? 5 : 3, 0, Math.PI * 2);
                ctx.fill();

                // Elementi HUD aggiuntivi se agganciato o illuminato dallo scanner
                if (alpha > 0.5 || isSelected) {
                    ctx.font = '9px monospace';
                    ctx.fillStyle = isSelected ? '#00f0ff' : `rgba(0, 240, 255, ${alpha * 0.8})`;
                    ctx.fillText(sat.name, sx + 8, sy - 4);

                    // Reticolo di puntamento quadrato (Lock-On box)
                    ctx.strokeStyle = isSelected ? '#00f0ff' : `rgba(0, 240, 255, ${alpha * 0.4})`;
                    ctx.lineWidth = isSelected ? 1 : 0.5;
                    ctx.strokeRect(sx - 6, sy - 6, 12, 12);

                    if (isSelected) {
                        // Linea di collegamento vettoriale tra centro di tracciamento terrestre e target
                        ctx.strokeStyle = 'rgba(0, 240, 255, 0.2)';
                        ctx.lineWidth = 0.5;
                        ctx.beginPath(); ctx.moveTo(cx, cy); ctx.lineTo(sx, sy); ctx.stroke();
                    }
                }
            });

            // Rotazione continua del raggio radar
            sweepAngle += 0.02;
            if (sweepAngle >= Math.PI * 2) sweepAngle = 0;

            requestAnimationFrame(animateRadar);
        }

        // Avvio simulazione grafica al caricamento della pagina
        animateRadar();
    </script>
</x-layout>