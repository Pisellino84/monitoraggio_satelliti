<x-layout>
    <header class="border-b border-gray-800 bg-radar-950 py-12">
        <div class="max-w-[1600px] mx-auto px-4">
            <div class="inline-flex items-center gap-3 border border-neon-cyan/40 bg-neon-cyan/5 px-3 py-1 text-[10px] text-neon-cyan uppercase tracking-widest mb-6">
                <span class="w-1.5 h-1.5 bg-neon-cyan"></span>
                TECHNICAL DOCUMENTATION // DECLASSIFIED OVERVIEW
            </div>
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase leading-none mb-4">
                TECNOLOGIA<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon-cyan to-blue-600">ARCHITETTURA DEI SISTEMI</span>
            </h1>
            <p class="text-sm text-gray-400 max-w-3xl">
                Una panoramica declassificata delle tecnologie proprietarie che alimentano la rete di sorveglianza 
                spaziale più avanzata al mondo. Precisione. Velocità. Resilienza.
            </p>
        </div>
    </header>
    <!-- RADAR SYSTEMS -->
    <section class="border-b border-gray-800 bg-black py-16">
        <div class="max-w-[1600px] mx-auto px-4">
            <div class="text-xs text-neon-cyan uppercase tracking-widest mb-8">&gt;&gt; SENSOR_ARCHITECTURE</div>
            
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <div>
                    <h2 class="text-2xl text-white font-bold uppercase mb-6">Sistema Radar Phased-Array</h2>
                    <p class="text-gray-400 text-sm leading-relaxed mb-4">
                        I nostri radar a scansione elettronica attiva (AESA) operano in Banda X (8-12 GHz), 
                        permettendo il tracciamento simultaneo di migliaia di oggetti senza parti meccaniche in movimento.
                    </p>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6">
                        La tecnologia phased-array consente la formazione di fasci multipli indipendenti, 
                        riducendo drasticamente il tempo di rivisita e aumentando la probabilità di rilevamento 
                        di oggetti a bassa sezione radar (RCS).
                    </p>
                    
                    <div class="space-y-3">
                        <div class="flex justify-between border-b border-gray-800 pb-2">
                            <span class="text-gray-500 text-xs">FREQUENZA OPERATIVA</span>
                            <span class="text-white text-xs">8.0 - 12.0 GHz (BANDA X)</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-800 pb-2">
                            <span class="text-gray-500 text-xs">RAGGIO MASSIMO</span>
                            <span class="text-white text-xs">2,000 KM (LEO STANDARD)</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-800 pb-2">
                            <span class="text-gray-500 text-xs">RCS MINIMO RILEVABILE</span>
                            <span class="text-neon-green text-xs">0.01 m² @ 2,000 KM</span>
                        </div>
                        <div class="flex justify-between border-b border-gray-800 pb-2">
                            <span class="text-gray-500 text-xs">ELEMENTI ANTENNA</span>
                            <span class="text-white text-xs">16,384 T/R MODULES</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-500 text-xs">TEMPO RIVISITA</span>
                            <span class="text-neon-cyan text-xs">&lt; 10 SECONDI</span>
                        </div>
                    </div>
                </div>
                <div class="border border-gray-800 bg-radar-900 p-6">
                    <div class="text-white font-bold text-sm uppercase mb-4 border-b border-gray-800 pb-2">
                        SCHEMA ARCHITETTURALE RADAR
                    </div>
                    <div class="bg-black border border-gray-800 p-4 font-mono text-[10px] text-gray-400 leading-relaxed">
<pre class="text-neon-cyan">
┌─────────────────────────────────────┐
│         ANTENNA ARRAY (AESA)        │
│     ┌───┬───┬───┬───┬───┬───┐      │
│     │T/R│T/R│T/R│T/R│T/R│T/R│      │
│     ├───┼───┼───┼───┼───┼───┤      │
│     │T/R│T/R│T/R│T/R│T/R│T/R│      │
│     └───┴───┴───┴───┴───┴───┘      │
└─────────────┬───────────────────────┘
              │
              ▼
┌─────────────────────────────────────┐
│       BEAM FORMING COMPUTER         │
│    [FPGA-BASED SIGNAL PROCESSOR]    │
└─────────────┬───────────────────────┘
              │
              ▼
┌─────────────────────────────────────┐
│      TRACKING & CATALOGING          │
│    [AI/ML DEBRIS CLASSIFICATION]    │
└─────────────┬───────────────────────┘
              │
              ▼
┌─────────────────────────────────────┐
│       SECURE DATA LINK (AES-256)    │
│    [TRANSMISSION TO HQ NODES]       │
└─────────────────────────────────────┘
</pre>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- OPTICAL SYSTEMS -->
    <section class="border-b border-gray-800 bg-radar-950 py-16">
        <div class="max-w-[1600px] mx-auto px-4">
            <div class="mb-10 border-l-4 border-neon-amber pl-4">
                <h2 class="text-2xl text-white font-bold uppercase">Telescopi Ottici Fast-Slew</h2>
                <p class="text-xs text-gray-500 uppercase">Deep Space Tracking per orbite MEO/GEO</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="border border-gray-800 bg-black p-6">
                    <div class="text-neon-amber text-xs font-bold mb-3">APERTURA</div>
                    <div class="text-4xl text-white font-black mb-2">1.2m</div>
                    <p class="text-gray-500 text-xs">Specchio primario in Zerodur a bassa espansione termica.</p>
                </div>
                <div class="border border-gray-800 bg-black p-6">
                    <div class="text-neon-cyan text-xs font-bold mb-3">VELOCITÀ SLEW</div>
                    <div class="text-4xl text-white font-black mb-2">20°/s</div>
                    <p class="text-gray-500 text-xs">Acquisizione rapida per oggetti in movimento veloce.</p>
                </div>
                <div class="border border-gray-800 bg-black p-6">
                    <div class="text-neon-green text-xs font-bold mb-3">SENSORE CCD</div>
                    <div class="text-4xl text-white font-black mb-2">4K×4K</div>
                    <p class="text-gray-500 text-xs">Sensore raffreddato a -80°C per massima sensibilità.</p>
                </div>
            </div>
            <div class="mt-8 border border-gray-800 bg-black p-6">
                <div class="text-white font-bold mb-4">Capacità di Rilevamento GEO</div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    I nostri telescopi ottici sono ottimizzati per il tracciamento di oggetti in orbita geostazionaria 
                    (36,000 km). Utilizzando tecniche di lucky imaging e stacking, siamo in grado di rilevare oggetti 
                    fino alla magnitudine 18, corrispondente a detriti di pochi centimetri a distanza GEO.
                </p>
            </div>
        </div>
    </section>
    <!-- DATA PROCESSING -->
    <section class="border-b border-gray-800 bg-black py-16">
        <div class="max-w-[1600px] mx-auto px-4">
            <div class="mb-10 border-l-4 border-neon-green pl-4">
                <h2 class="text-2xl text-white font-bold uppercase">Pipeline di Elaborazione Dati</h2>
                <p class="text-xs text-gray-500 uppercase">From sensor to decision in milliseconds</p>
            </div>
            <div class="grid lg:grid-cols-4 gap-6">
                <div class="border border-gray-800 bg-radar-950 p-6">
                    <div class="text-neon-cyan text-4xl font-black mb-4">01</div>
                    <h3 class="text-white font-bold uppercase mb-2">Acquisizione</h3>
                    <p class="text-gray-500 text-xs">Dati grezzi da sensori radar e ottici convergono in tempo reale.</p>
                    <div class="mt-4 text-[10px] text-neon-cyan">THROUGHPUT: 50 GB/s</div>
                </div>
                <div class="border border-gray-800 bg-radar-950 p-6">
                    <div class="text-neon-green text-4xl font-black mb-4">02</div>
                    <h3 class="text-white font-bold uppercase mb-2">Filtraggio</h3>
                    <p class="text-gray-500 text-xs">Eliminazione rumore atmosferico e interferenze RF mediante AI.</p>
                    <div class="mt-4 text-[10px] text-neon-green">NOISE REJECTION: 99.7%</div>
                </div>
                <div class="border border-gray-800 bg-radar-950 p-6">
                    <div class="text-neon-amber text-4xl font-black mb-4">03</div>
                    <h3 class="text-white font-bold uppercase mb-2">Correlazione</h3>
                    <p class="text-gray-500 text-xs">Matching delle osservazioni con il catalogo orbitale esistente.</p>
                    <div class="mt-4 text-[10px] text-neon-amber">ACCURACY: 99.99%</div>
                </div>
                <div class="border border-gray-800 bg-radar-950 p-6">
                    <div class="text-neon-red text-4xl font-black mb-4">04</div>
                    <h3 class="text-white font-bold uppercase mb-2">Alerting</h3>
                    <p class="text-gray-500 text-xs">Generazione automatica di avvisi di congiunzione per i clienti.</p>
                    <div class="mt-4 text-[10px] text-neon-red">LATENCY: &lt; 60s</div>
                </div>
            </div>
        </div>
    </section>
    <!-- ALGORITHMS -->
    <section class="border-b border-gray-800 bg-radar-950 py-16">
        <div class="max-w-[1600px] mx-auto px-4">
            <div class="mb-10 border-l-4 border-neon-red pl-4">
                <h2 class="text-2xl text-white font-bold uppercase">Algoritmi Proprietari</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-6">
                <div class="border border-gray-800 bg-black p-6">
                    <div class="text-neon-cyan text-[10px] font-bold mb-2">KRONOS-OD v4.2</div>
                    <h3 class="text-white font-bold text-lg uppercase mb-3">Orbit Determination Engine</h3>
                    <p class="text-gray-500 text-xs leading-relaxed mb-4">
                        Algoritmo avanzato di determinazione orbitale basato su filtri di Kalman estesi (EKF) 
                        con correzioni relativistiche. Integrazione multi-sensore per massima precisione.
                    </p>
                    <div class="border-t border-gray-800 pt-3 text-[10px]">
                        <span class="text-gray-600">OUTPUT:</span> 
                        <span class="text-white">TLE, OEM, SP3 FORMATS</span>
                    </div>
                </div>
                <div class="border border-gray-800 bg-black p-6">
                    <div class="text-neon-red text-[10px] font-bold mb-2">KRONOS-CA v3.8</div>
                    <h3 class="text-white font-bold text-lg uppercase mb-3">Collision Assessment Module</h3>
                    <p class="text-gray-500 text-xs leading-relaxed mb-4">
                        Sistema predittivo per il calcolo della Probability of Collision (PoC) mediante 
                        propagazione Monte Carlo con 10,000+ scenari per ogni coppia di oggetti.
                    </p>
                    <div class="border-t border-gray-800 pt-3 text-[10px]">
                        <span class="text-gray-600">PREDICTION WINDOW:</span> 
                        <span class="text-white">7 DAYS AHEAD</span>
                    </div>
                </div>
                <div class="border border-gray-800 bg-black p-6">
                    <div class="text-neon-green text-[10px] font-bold mb-2">KRONOS-ML v2.1</div>
                    <h3 class="text-white font-bold text-lg uppercase mb-3">Debris Classification AI</h3>
                    <p class="text-gray-500 text-xs leading-relaxed mb-4">
                        Rete neurale convoluzionale per la classificazione automatica di oggetti non catalogati. 
                        Distingue tra detriti, frammenti, e oggetti attivi con accuratezza del 97%.
                    </p>
                    <div class="border-t border-gray-800 pt-3 text-[10px]">
                        <span class="text-gray-600">TRAINING SET:</span> 
                        <span class="text-white">2.3M LABELED OBJECTS</span>
                    </div>
                </div>
                <div class="border border-gray-800 bg-black p-6">
                    <div class="text-neon-amber text-[10px] font-bold mb-2">KRONOS-RF v1.5</div>
                    <h3 class="text-white font-bold text-lg uppercase mb-3">Spectrum Anomaly Detector</h3>
                    <p class="text-gray-500 text-xs leading-relaxed mb-4">
                        Monitoraggio continuo dello spettro RF per identificare jamming, spoofing, 
                        e anomalie di segnale sui link satellitari. Integrazione con C2 per risposta immediata.
                    </p>
                    <div class="border-t border-gray-800 pt-3 text-[10px]">
                        <span class="text-gray-600">BANDWIDTH MONITORED:</span> 
                        <span class="text-white">100 MHz - 40 GHz</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECURITY -->
    <section class="border-b border-gray-800 bg-black py-16">
        <div class="max-w-[1600px] mx-auto px-4">
            <div class="mb-10 border-l-4 border-neon-red pl-4">
                <h2 class="text-2xl text-white font-bold uppercase">Sicurezza dei Sistemi</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="border border-neon-red/30 bg-neon-red/5 p-6">
                    <div class="text-neon-red text-2xl mb-4">🔒</div>
                    <h3 class="text-white font-bold uppercase mb-2">Crittografia</h3>
                    <p class="text-gray-500 text-xs">AES-256-GCM per dati at-rest, RSA-4096 per key exchange, TLS 1.3 per trasmissioni.</p>
                </div>
                <div class="border border-neon-amber/30 bg-neon-amber/5 p-6">
                    <div class="text-neon-amber text-2xl mb-4">⚡</div>
                    <h3 class="text-white font-bold uppercase mb-2">Hardening EMP</h3>
                    <p class="text-gray-500 text-xs">Tutti i nodi sono schermati contro impulsi elettromagnetici e tempeste solari.</p>
                </div>
                <div class="border border-neon-green/30 bg-neon-green/5 p-6">
                    <div class="text-neon-green text-2xl mb-4">🛡️</div>
                    <h3 class="text-white font-bold uppercase mb-2">Air-Gap Network</h3>
                    <p class="text-gray-500 text-xs">I dati classificati sono elaborati su reti fisicamente isolate da Internet.</p>
                </div>
            </div>
        </div>
    </section>
</x-layout>
