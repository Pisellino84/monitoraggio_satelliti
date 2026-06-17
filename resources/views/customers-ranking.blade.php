<x-layout>
    <div class="bg-black min-h-screen text-white p-4 lg:p-6 font-mono selection:bg-neon-cyan selection:text-black">
        
        <header class="border-b border-gray-800 pb-4 mb-6 flex flex-col sm:flex-row justify-between items-start sm:items-end gap-2">
            <div>
                <div class="inline-flex items-center gap-3 border border-neon-cyan/40 bg-neon-cyan/5 px-3 py-1 text-[10px] text-neon-cyan uppercase tracking-widest mb-2">
                    <span class="w-1.5 h-1.5 bg-neon-cyan animate-pulse"></span>
                    SECURITY CLEARANCE: LEVEL-4 // GLOBAL ASSET DISTRIBUTION INDEX
                </div>
                <h1 class="text-2xl font-black text-white uppercase tracking-tighter leading-none">
                    KRONOS // <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon-cyan to-blue-600">CLIENT FLEET RANKING</span>
                </h1>
            </div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 text-center md:text-left">
            <div class="border border-gray-800 bg-radar-950 p-4">
                <div class="text-2xl text-neon-cyan font-black">{{ $customers->count() }}</div>
                <div class="text-[10px] text-gray-500 uppercase mt-1">Agenzie Accreditate Totali</div>
            </div>
            <div class="border border-gray-800 bg-radar-950 p-4">
                <div class="text-2xl text-neon-green font-black">
                    €{{ number_format($customers->sum('monthly_billing'), 0, ',', '.') }}
                </div>
                <div class="text-[10px] text-gray-500 uppercase mt-1">Volume Mensile Contrattualizzato (MRR)</div>
            </div>
            <div class="border border-gray-800 bg-radar-950 p-4">
                <div class="text-2xl text-white font-black">
                    {{ $customers->sum('satellites_count') }}
                </div>
                <div class="text-[10px] text-gray-500 uppercase mt-1">Asset Totali Sotto Custodia Radar</div>
            </div>
        </div>

        <div class="border border-gray-800 bg-black relative">
            <div class="border-b border-gray-800 p-4 bg-radar-950 flex justify-between items-center">
                <h2 class="text-xs font-bold text-white uppercase tracking-widest">MATRICE GERARCHICA DELLA COSTELLAZIONE</h2>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left text-[11px] uppercase tracking-wide whitespace-nowrap">
                    <thead class="bg-black text-gray-400 font-bold border-b border-gray-800">
                        <tr>
                            <th class="p-4 text-center w-16">RANK</th>
                            <th class="p-4">AGENCY_NAME</th>
                            <th class="p-4">CLASSIFICAZIONE TIPO</th>
                            <th class="p-4 text-center">SATELLITI TRACCIATI</th>
                            <th class="p-4">CANALE DI CONTATTO</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800/60 text-gray-400 font-mono">
                        @foreach ($customers as $index => $customer)
                            <tr class="hover:bg-radar-900/30 transition-colors">
                                <td class="p-4 text-center font-black border-r border-gray-800/40 
                                    {{ $index === 0 ? 'text-neon-cyan text-sm' : '' }}
                                    {{ $index === 1 ? 'text-neon-green' : '' }}
                                    {{ $index === 2 ? 'text-neon-amber' : '' }}
                                ">
                                    #{{ sprintf('%02d', $index + 1) }}
                                </td>
                                
                                <td class="p-4 text-white font-bold tracking-tight">
                                    {{ $customer->agency_name }}
                                </td>
                                
                                <td class="p-4">
                                    <span class="px-2 py-0.5 text-[10px] font-bold border
                                        {{ $customer->agency_type === 'military' ? 'border-neon-red/40 bg-neon-red/5 text-neon-red' : '' }}
                                        {{ $customer->agency_type === 'government' ? 'border-neon-cyan/40 bg-neon-cyan/5 text-neon-cyan' : '' }}
                                        {{ $customer->agency_type === 'commercial' ? 'border-gray-700 bg-gray-900 text-gray-400' : '' }}
                                    ">
                                        {{ $customer->agency_type }}
                                    </span>
                                </td>
                                
                                <td class="p-4 text-center">
                                    <div class="inline-flex items-center gap-2">
                                        <span class="text-white font-black text-xs">
                                            {{ $customer->satellites_count ?? $customer->satellites->count() }}
                                        </span>
                                        <span class="text-[9px] text-gray-600">UNITÀ</span>
                                    </div>
                                </td>
                                
                                
                                
                                <td class="p-4 text-gray-500 normal-case text-[10px]">
                                    <div class="flex flex-col gap-0.5">
                                        <span class="text-gray-400 font-sans font-medium">{{ $customer->email }}</span>
                                        <span>TEL: {{ $customer->cellphone }}</span>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <footer class="mt-8 border border-neon-red/20 bg-neon-red/5 p-4 text-[10px] text-gray-500 flex flex-col sm:flex-row justify-between gap-4 items-center">
            <div class="leading-relaxed uppercase">
                <span class="text-neon-red font-bold">ATTENZIONE:</span> L'estrazione di questo indice gerarchico è protetta da protocollo di crittografia asimmetrica. Qualsiasi esportazione non autorizzata viola le direttive interne di sicurezza interna Kronos.
            </div>
            <div class="shrink-0 border border-neon-red text-neon-red px-3 py-1 font-bold">
                ITAR CLASSIFIED INFRASTRUCTURE
            </div>
        </footer>

    </div>

    <script>
        function updateClock() {
            document.getElementById('sys-clock').innerText = new Date().toISOString().substring(11, 19) + ' UTC';
        }
        setInterval(updateClock, 1000); 
        updateClock();
    </script>
</x-layout>