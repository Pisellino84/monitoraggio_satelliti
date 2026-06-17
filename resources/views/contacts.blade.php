<x-layout>

    <header class="relative border-b border-gray-800 bg-black py-16 md:py-24 overflow-hidden min-h-[70vh] flex items-center">
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=1920&q=80" 
             alt="Encrypted Uplink Terminal" 
             class="w-full h-full object-cover object-center opacity-30 filter brightness-50 saturate-100 scale-105">
        
    </div>

    <div class="max-w-[1600px] mx-auto px-4 relative z-20 w-full">
        <div class="inline-flex items-center gap-3 border border-neon-red/40 bg-neon-red/10 backdrop-blur-sm px-3 py-1 text-[10px] text-neon-red uppercase tracking-widest mb-6">
            <span class="w-1.5 h-1.5 bg-neon-red animate-pulse"></span>
            SECURE COMMS // DIRECT END-TO-END ENCRYPTED UPLINK
        </div>

        <h1 class="text-4xl md:text-6xl font-black text-white tracking-tighter uppercase leading-none mb-6">
            STABILISCI UN CONTATTO.<br>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon-red to-red-500 drop-shadow-[0_5px_20px_rgba(239,68,68,0.3)]">
                CANALE CANALIZZATO SICURO.
            </span>
        </h1>
        <p class="text-sm md:text-base text-gray-300 max-w-2xl leading-relaxed font-light mb-8">
            Sia per richieste governative ad alta sicurezza che per integrazioni commerciali di tracciamento asset, il nostro team risponde tramite canali protetti entro 12 ore operative. Usa il modulo sottostante per avviare il protocollo di comunicazione.
        </p>
    </div>
</header>

    <!-- CONTACT FORM & INFO -->
    <section class="border-b border-gray-800 bg-black py-16">
        <div class="max-w-[1600px] mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12">
                
                <!-- FORM -->
                <div>
                    <div class="text-xs text-neon-cyan uppercase tracking-widest mb-6">&gt;&gt; TRANSMISSION_FORM</div>
                    
                    <form class="space-y-6">
                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-[10px] text-gray-500 uppercase mb-2 block">IDENTIFICATIVO NOMINALE *</label>
                                <input type="text" placeholder="Nome e Cognome" class="w-full bg-slate-800 px-4 py-3 text-sm" required>
                            </div>
                            <div>
                                <label class="text-[10px] text-gray-500 uppercase mb-2 block">AFFILIAZIONE ORGANIZZATIVA</label>
                                <input type="text" placeholder="Azienda / Ente / Agenzia" class="w-full bg-slate-800 px-4 py-3 text-sm">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="text-[10px] text-gray-500 uppercase mb-2 block">CANALE EMAIL SICURO *</label>
                                <input type="email" placeholder="email@dominio.com" class="w-full bg-slate-800 px-4 py-3 text-sm" required>
                            </div>
                            <div>
                                <label class="text-[10px] text-gray-500 uppercase mb-2 block">LINEA TELEFONICA</label>
                                <input type="tel" placeholder="+39 XXX XXX XXXX" class="w-full bg-slate-800  px-4 py-3 text-sm">
                            </div>
                        </div>

                        <div>
                            <label class="text-[10px] text-gray-500 uppercase mb-2 block">CATEGORIA RICHIESTA *</label>
                            <select class="w-full px-4 py-3 text-sm bg-slate-800" required>
                                <option value="">-- Seleziona Tipologia --</option>
                                <option value="commercial">Servizi Commerciali (TIER I-II)</option>
                                <option value="defense">Contratti Difesa / Governo</option>
                                <option value="partnership">Partnership Strategica</option>
                                <option value="press">Media / Press Inquiry</option>
                                <option value="careers">Opportunità di Carriera</option>
                                <option value="support">Supporto Tecnico Clienti</option>
                                <option value="other">Altro</option>
                            </select>
                        </div>

                        <div>
                            <label class="text-[10px] text-gray-500 uppercase mb-2 block">LIVELLO DI CLASSIFICAZIONE</label>
                            <div class="flex gap-4 text-xs">
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="classification" value="public" checked class="accent-neon-cyan">
                                    <span class="text-gray-400">PUBBLICO</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="classification" value="confidential" class="accent-neon-amber">
                                    <span class="text-gray-400">CONFIDENZIALE</span>
                                </label>
                                <label class="flex items-center gap-2 cursor-pointer">
                                    <input type="radio" name="classification" value="restricted" class="accent-neon-red">
                                    <span class="text-gray-400">RISTRETTO</span>
                                </label>
                            </div>
                        </div>

                        <div>
                            <label class="text-[10px] text-gray-500 uppercase mb-2 block">CONTENUTO MESSAGGIO *</label>
                            <textarea rows="6" placeholder="Descrivi la tua richiesta in dettaglio..." class="w-full bg-slate-800 px-4 py-3 text-sm resize-none" required></textarea>
                        </div>

                        <div class="flex items-start gap-3">
                            <input type="checkbox" id="consent" class="mt-1 accent-neon-cyan" required>
                            <label for="consent" class="text-[10px] text-gray-500">
                                Autorizzo il trattamento dei dati personali ai sensi del GDPR e delle normative sulla sicurezza dei dati classificati. 
                                Sono consapevole che le comunicazioni false verso enti di difesa sono perseguibili penalmente.
                            </label>
                        </div>

                        <button type="submit" class="bg-neon-cyan text-black px-8 py-4 text-xs font-bold uppercase tracking-widest hover:bg-white transition-none w-full md:w-auto">
                            TRASMETTI RICHIESTA SICURA
                        </button>
                    </form>
                </div>

                <!-- CONTACT INFO -->
                <div>
                    <div class="text-xs text-neon-green uppercase tracking-widest mb-6">&gt;&gt; NETWORK_ENDPOINTS</div>

                    <div class="space-y-6">
                        <!-- HQ -->
                        <div class="border border-gray-800 bg-radar-950 p-6">
                            <div class="text-neon-cyan text-[10px] font-bold mb-2">HEADQUARTERS // ROMA, ITALIA</div>
                            <div class="text-white font-bold mb-3">Centro Comando Europeo</div>
                            <div class="space-y-2 text-xs text-gray-400">
                                <p>Via della Tecnica Aerospaziale, 42</p>
                                <p>00144 Roma EUR - Italia</p>
                                <p class="pt-2 border-t border-gray-800 mt-3">
                                    <span class="text-gray-600">TEL:</span> +39 06 XXX XXXX
                                </p>
                                <p>
                                    <span class="text-gray-600">EMAIL:</span> 
                                    <span class="text-neon-cyan">hq@kronos-aerospace.com</span>
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-gray-800 text-[10px] text-gray-600">
                                ORARI: LUN-VEN 08:00-18:00 CET
                            </div>
                        </div>

                        <!-- OPERATIONS CENTER -->
                        <div class="border border-gray-800 bg-radar-950 p-6">
                            <div class="text-neon-green text-[10px] font-bold mb-2">OPERATIONS CENTER // 24/7</div>
                            <div class="text-white font-bold mb-3">Centro Operazioni Spaziali</div>
                            <div class="space-y-2 text-xs text-gray-400">
                                <p>Servizio emergenze e alerting attivo H24.</p>
                                <p class="pt-2 border-t border-gray-800 mt-3">
                                    <span class="text-gray-600">HOTLINE:</span> 
                                    <span class="text-neon-green">+39 800 KRONOS</span>
                                </p>
                                <p>
                                    <span class="text-gray-600">SECURE:</span> 
                                    <span class="text-neon-cyan">ops@kronos-aerospace.mil</span>
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-gray-800 text-[10px] text-neon-green">
                                STATUS: ALWAYS ONLINE
                            </div>
                        </div>

                        <!-- DEFENSE INQUIRIES -->
                        <div class="border border-neon-red/30 bg-neon-red/5 p-6">
                            <div class="text-neon-red text-[10px] font-bold mb-2">DEFENSE & GOVERNMENT // RESTRICTED</div>
                            <div class="text-white font-bold mb-3">Divisione Difesa e Istituzioni</div>
                            <div class="space-y-2 text-xs text-gray-400">
                                <p>Accesso riservato a personale con clearance verificata.</p>
                                <p class="pt-2 border-t border-gray-800/50 mt-3">
                                    <span class="text-gray-600">SECURE CHANNEL:</span> 
                                    <span class="text-neon-red">defense@kronos-aerospace.gov</span>
                                </p>
                            </div>
                            <div class="mt-4 pt-3 border-t border-gray-800/50 text-[10px] text-neon-red">
                                ITAR CONTROLLED COMMUNICATIONS
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GLOBAL PRESENCE MAP -->
    <section class="border-b border-gray-800 bg-radar-950 py-16">
        <div class="max-w-[1600px] mx-auto px-4">
            <div class="mb-10 border-l-4 border-neon-cyan pl-4">
                <h2 class="text-2xl text-white font-bold uppercase">Presenza Globale</h2>
                <p class="text-xs text-gray-500 uppercase">Uffici regionali e centri operativi</p>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <div class="border border-gray-800 bg-black p-5">
                    <div class="text-neon-cyan text-xs mb-2">EUROPA</div>
                    <div class="text-white font-bold">Roma, IT</div>
                    <div class="text-gray-500 text-xs mt-1">HQ Principale</div>
                </div>
                <div class="border border-gray-800 bg-black p-5">
                    <div class="text-neon-green text-xs mb-2">NORD AMERICA</div>
                    <div class="text-white font-bold">Washington D.C., US</div>
                    <div class="text-gray-500 text-xs mt-1">Liaison Difesa</div>
                </div>
                <div class="border border-gray-800 bg-black p-5">
                    <div class="text-neon-amber text-xs mb-2">ASIA-PACIFICO</div>
                    <div class="text-white font-bold">Singapore</div>
                    <div class="text-gray-500 text-xs mt-1">Hub Operativo APAC</div>
                </div>
                <div class="border border-gray-800 bg-black p-5">
                    <div class="text-neon-red text-xs mb-2">SUD AMERICA</div>
                    <div class="text-white font-bold">Santiago, CL</div>
                    <div class="text-gray-500 text-xs mt-1">Centro Ottico Atacama</div>
                </div>
            </div>
        </div>
    </section>



</body>
</html>

</x-layout>