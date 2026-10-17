@props(['company', 'data'])

<footer class="bg-[#1B2A4A] text-white">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-16">
        {{-- Top Section: 4-Column Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-8">
            {{-- Column 1: Company Info --}}
            <div class="lg:col-span-1">
                <h3 class="text-xl font-bold text-white tracking-tight">
                    {{ $company['name'] ?? 'TradeCorp' }}
                </h3>
                <div class="w-10 h-0.5 bg-[#C8A962] mt-4 mb-5"></div>
                <p class="text-white/60 text-sm leading-relaxed">
                    {{ $data['description'] ?? 'Bridging global markets with integrity and precision.' }}
                </p>

                {{-- Social Links --}}
                @if (!empty($data['socials']))
                    <div class="flex items-center gap-4 mt-6">
                        @foreach ($data['socials'] as $social)
                            @php
                                $platform = $social['platform'] ?? $social['name'] ?? '';
                                $href = $social['href'] ?? '#';
                            @endphp
                            <a href="{{ $href }}"
                               target="_blank"
                               rel="noopener noreferrer"
                               aria-label="{{ ucfirst($platform) }}"
                               class="text-white/40 hover:text-[#C8A962] transition duration-200">
                                @if ($platform === 'linkedin')
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                    </svg>
                                @elseif ($platform === 'twitter')
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                    </svg>
                                @elseif ($platform === 'instagram')
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                                    </svg>
                                @endif
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Columns 2-3: Link Groups --}}
            @if (!empty($data['links']))
                @foreach ($data['links'] as $key => $value)
                    @php
                        $groupTitle = is_string($key) ? $key : ($value['title'] ?? 'Links');
                        $groupItems = is_array($value) && isset($value['items']) ? $value['items'] : (is_array($value) ? $value : []);
                    @endphp
                    <div>
                        <h4 class="text-xs uppercase tracking-widest text-[#C8A962] font-semibold mb-4">
                            {{ $groupTitle }}
                        </h4>
                        <ul class="space-y-3">
                            @foreach ($groupItems as $link)
                                <li>
                                    <a href="{{ $link['href'] ?? '#' }}"
                                       class="text-white/60 hover:text-[#C8A962] text-sm transition duration-150">
                                        {{ $link['label'] ?? '' }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            @endif

            {{-- Column 4: Contact Info --}}
            <div>
                <h4 class="text-xs uppercase tracking-widest text-[#C8A962] font-semibold mb-4">
                    Headquarters
                </h4>
                <ul class="space-y-3 text-white/60 text-sm">
                    @if (!empty($company['email']))
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-[#C8A962]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                            </svg>
                            <a href="mailto:{{ $company['email'] }}" class="hover:text-[#C8A962] transition duration-150">
                                {{ $company['email'] }}
                            </a>
                        </li>
                    @endif
                    @if (!empty($company['phone']))
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-[#C8A962]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/>
                            </svg>
                            <a href="tel:{{ $company['phone'] }}" class="hover:text-[#C8A962] transition duration-150">
                                {{ $company['phone'] }}
                            </a>
                        </li>
                    @endif
                    @if (!empty($company['address']))
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 mt-0.5 flex-shrink-0 text-[#C8A962]" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                            </svg>
                            <span>{{ $company['address'] }}</span>
                        </li>
                    @endif
                </ul>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="border-t border-white/10 mt-12 pt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="text-white/40 text-xs">
                &copy; {{ date('Y') }} {{ $company['name'] ?? 'TradeCorp' }}. All rights reserved.
            </p>
            <div class="flex items-center gap-6 text-white/40 text-xs">
                <a href="#" class="hover:text-white transition">Privacy Policy</a>
                <span class="text-white/20">|</span>
                <a href="#" class="hover:text-white transition">Terms of Service</a>
                <span class="text-white/20">|</span>
                <a href="#" class="hover:text-white transition">Trade Compliance</a>
            </div>
        </div>
    </div>
</footer>
