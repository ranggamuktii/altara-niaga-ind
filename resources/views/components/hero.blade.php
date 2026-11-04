@props(['data' => []])

@php
$company = $data['company'] ?? 'Altara Niaga Indonesia';
$primary = $data['cta_primary'] ?? ['label' => 'Konsultasi Ekspor Impor', 'href' => '#rfq'];
$secondary = $data['cta_secondary'] ?? ['label' => 'Profil Perusahaan', 'href' => '#about'];

$trust = [
['icon' => 'shield-check', 'title' => 'Kepabeanan', 'value' => 'AEO Jalur Hijau'],
['icon' => 'globe', 'title' => 'Pelayaran', 'value' => 'Aliansi Tier-1'],
['icon' => 'file-text', 'title' => 'Kontrak dagang', 'value' => 'Incoterms® 2020'],
['icon' => 'badge-check', 'title' => 'Jaminan mutu', 'value' => 'SGS & Sucofindo'],
];
@endphp

<section id="home" class="relative isolate min-h-[90vh] overflow-hidden bg-black pt-32 pb-24 text-white">
    <style>
        .anj-hero-mask {
            -webkit-mask-image: linear-gradient(to bottom, #000 0%, #000 50%, transparent 100%);
            mask-image: linear-gradient(to bottom, #000 0%, #000 50%, transparent 100%);
        }

        .anj-hero-veil {
            background: radial-gradient(ellipse 58% 42% at 50% 36%, rgba(0, 0, 0, .88), rgba(0, 0, 0, 0) 72%);
        }

        .anj-comet {
            stroke-dasharray: 14 220;
            filter: drop-shadow(0 0 3px #38bdf8);
            animation: anj-comet 8s cubic-bezier(.45, 0, .55, 1) infinite;
        }

        .anj-ping {
            transform-box: fill-box;
            transform-origin: center;
            animation: anj-ping 3.2s ease-out infinite;
        }

        @keyframes anj-comet {
            0% {
                stroke-dashoffset: 14;
            }

            70%,
            100% {
                stroke-dashoffset: -100;
            }
        }

        @keyframes anj-ping {
            0% {
                transform: scale(1);
                opacity: .7;
            }

            80%,
            100% {
                transform: scale(7);
                opacity: 0;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .anj-comet {
                display: none;
            }

            .anj-ping {
                animation: none;
                opacity: 0;
            }
        }
    </style>

    {{-- Peta dunia dot-matrix: satu-satunya elemen "wow" di halaman. Kapal berangkat dari Tanjung Priok. --}}
    <div aria-hidden="true" class="anj-hero-mask pointer-events-none absolute inset-x-0 top-14 -z-10 h-[640px] overflow-hidden">
        <svg viewBox="0 0 1000 380" fill="none" class="absolute left-1/2 top-0 w-[1100px] max-w-none -translate-x-[80%] sm:left-0 sm:w-full sm:translate-x-0">
            <path d="M305 5h.01M315 5h.01M325 5h.01M335 5h.01M345 5h.01M355 5h.01M365 5h.01M375 5h.01M385 5h.01M395 5h.01M405 5h.01M415 5h.01M425 5h.01M435 5h.01M775 5h.01M785 5h.01M325 15h.01M335 15h.01M345 15h.01M355 15h.01M365 15h.01M375 15h.01M385 15h.01M395 15h.01M405 15h.01M415 15h.01M425 15h.01M435 15h.01M715 15h.01M725 15h.01M735 15h.01M745 15h.01M755 15h.01M765 15h.01M775 15h.01M785 15h.01M795 15h.01M805 15h.01M815 15h.01M825 15h.01M835 15h.01M55 25h.01M65 25h.01M75 25h.01M85 25h.01M95 25h.01M105 25h.01M115 25h.01M125 25h.01M135 25h.01M145 25h.01M155 25h.01M165 25h.01M175 25h.01M215 25h.01M225 25h.01M235 25h.01M245 25h.01M255 25h.01M265 25h.01M335 25h.01M345 25h.01M355 25h.01M365 25h.01M375 25h.01M385 25h.01M395 25h.01M405 25h.01M415 25h.01M425 25h.01M435 25h.01M555 25h.01M565 25h.01M575 25h.01M585 25h.01M595 25h.01M675 25h.01M685 25h.01M695 25h.01M705 25h.01M715 25h.01M725 25h.01M735 25h.01M745 25h.01M755 25h.01M765 25h.01M775 25h.01M785 25h.01M795 25h.01M805 25h.01M815 25h.01M825 25h.01M835 25h.01M845 25h.01M855 25h.01M865 25h.01M875 25h.01M885 25h.01M895 25h.01M905 25h.01M915 25h.01M925 25h.01M935 25h.01M945 25h.01M955 25h.01M965 25h.01M975 25h.01M985 25h.01M35 35h.01M45 35h.01M55 35h.01M65 35h.01M75 35h.01M85 35h.01M95 35h.01M105 35h.01M115 35h.01M125 35h.01M135 35h.01M145 35h.01M155 35h.01M165 35h.01M175 35h.01M185 35h.01M195 35h.01M205 35h.01M215 35h.01M225 35h.01M235 35h.01M245 35h.01M255 35h.01M275 35h.01M285 35h.01M345 35h.01M355 35h.01M365 35h.01M375 35h.01M385 35h.01M395 35h.01M405 35h.01M415 35h.01M445 35h.01M455 35h.01M535 35h.01M545 35h.01M555 35h.01M565 35h.01M575 35h.01M585 35h.01M595 35h.01M605 35h.01M615 35h.01M625 35h.01M635 35h.01M645 35h.01M655 35h.01M665 35h.01M675 35h.01M685 35h.01M695 35h.01M705 35h.01M715 35h.01M725 35h.01M735 35h.01M745 35h.01M755 35h.01M765 35h.01M775 35h.01M785 35h.01M795 35h.01M805 35h.01M815 35h.01M825 35h.01M835 35h.01M845 35h.01M855 35h.01M865 35h.01M875 35h.01M885 35h.01M895 35h.01M905 35h.01M915 35h.01M925 35h.01M935 35h.01M945 35h.01M955 35h.01M965 35h.01M975 35h.01M985 35h.01M995 35h.01M45 45h.01M55 45h.01M65 45h.01M75 45h.01M85 45h.01M95 45h.01M105 45h.01M115 45h.01M125 45h.01M135 45h.01M145 45h.01M155 45h.01M165 45h.01M175 45h.01M185 45h.01M195 45h.01M205 45h.01M215 45h.01M225 45h.01M235 45h.01M285 45h.01M295 45h.01M305 45h.01M355 45h.01M365 45h.01M375 45h.01M385 45h.01M515 45h.01M525 45h.01M535 45h.01M545 45h.01M555 45h.01M565 45h.01M575 45h.01M585 45h.01M595 45h.01M605 45h.01M615 45h.01M625 45h.01M635 45h.01M645 45h.01M655 45h.01M665 45h.01M675 45h.01M685 45h.01M695 45h.01M705 45h.01M715 45h.01M725 45h.01M735 45h.01M745 45h.01M755 45h.01M765 45h.01M775 45h.01M785 45h.01M795 45h.01M805 45h.01M815 45h.01M825 45h.01M835 45h.01M845 45h.01M855 45h.01M865 45h.01M875 45h.01M885 45h.01M895 45h.01M905 45h.01M915 45h.01M925 45h.01M935 45h.01M945 45h.01M955 45h.01M965 45h.01M975 45h.01M55 55h.01M65 55h.01M125 55h.01M135 55h.01M145 55h.01M155 55h.01M165 55h.01M175 55h.01M185 55h.01M195 55h.01M205 55h.01M215 55h.01M225 55h.01M235 55h.01M285 55h.01M295 55h.01M305 55h.01M315 55h.01M525 55h.01M535 55h.01M545 55h.01M555 55h.01M565 55h.01M575 55h.01M585 55h.01M595 55h.01M605 55h.01M615 55h.01M625 55h.01M635 55h.01M645 55h.01M655 55h.01M665 55h.01M675 55h.01M685 55h.01M695 55h.01M705 55h.01M715 55h.01M725 55h.01M735 55h.01M745 55h.01M755 55h.01M765 55h.01M775 55h.01M785 55h.01M795 55h.01M805 55h.01M815 55h.01M825 55h.01M835 55h.01M845 55h.01M855 55h.01M865 55h.01M875 55h.01M885 55h.01M915 55h.01M925 55h.01M935 55h.01M945 55h.01M145 65h.01M155 65h.01M165 65h.01M175 65h.01M185 65h.01M195 65h.01M205 65h.01M215 65h.01M225 65h.01M235 65h.01M245 65h.01M255 65h.01M285 65h.01M295 65h.01M305 65h.01M315 65h.01M325 65h.01M335 65h.01M495 65h.01M525 65h.01M535 65h.01M545 65h.01M555 65h.01M565 65h.01M575 65h.01M585 65h.01M595 65h.01M605 65h.01M615 65h.01M625 65h.01M635 65h.01M645 65h.01M655 65h.01M665 65h.01M675 65h.01M685 65h.01M695 65h.01M705 65h.01M715 65h.01M725 65h.01M735 65h.01M745 65h.01M755 65h.01M765 65h.01M775 65h.01M785 65h.01M795 65h.01M805 65h.01M815 65h.01M825 65h.01M835 65h.01M845 65h.01M855 65h.01M865 65h.01M875 65h.01M935 65h.01M155 75h.01M165 75h.01M175 75h.01M185 75h.01M195 75h.01M205 75h.01M215 75h.01M225 75h.01M235 75h.01M245 75h.01M255 75h.01M265 75h.01M275 75h.01M285 75h.01M295 75h.01M305 75h.01M315 75h.01M325 75h.01M335 75h.01M495 75h.01M515 75h.01M525 75h.01M535 75h.01M545 75h.01M555 75h.01M565 75h.01M575 75h.01M585 75h.01M595 75h.01M605 75h.01M615 75h.01M625 75h.01M635 75h.01M645 75h.01M655 75h.01M665 75h.01M675 75h.01M685 75h.01M695 75h.01M705 75h.01M715 75h.01M725 75h.01M735 75h.01M745 75h.01M755 75h.01M765 75h.01M775 75h.01M785 75h.01M795 75h.01M805 75h.01M815 75h.01M825 75h.01M835 75h.01M845 75h.01M855 75h.01M865 75h.01M875 75h.01M885 75h.01M155 85h.01M165 85h.01M175 85h.01M185 85h.01M195 85h.01M205 85h.01M215 85h.01M225 85h.01M235 85h.01M245 85h.01M255 85h.01M265 85h.01M275 85h.01M285 85h.01M295 85h.01M305 85h.01M315 85h.01M325 85h.01M495 85h.01M505 85h.01M515 85h.01M525 85h.01M535 85h.01M545 85h.01M555 85h.01M565 85h.01M575 85h.01M585 85h.01M595 85h.01M605 85h.01M615 85h.01M625 85h.01M635 85h.01M645 85h.01M655 85h.01M665 85h.01M675 85h.01M685 85h.01M695 85h.01M705 85h.01M715 85h.01M725 85h.01M735 85h.01M745 85h.01M755 85h.01M765 85h.01M775 85h.01M785 85h.01M795 85h.01M805 85h.01M815 85h.01M825 85h.01M835 85h.01M845 85h.01M855 85h.01M865 85h.01M875 85h.01M885 85h.01M165 95h.01M175 95h.01M185 95h.01M195 95h.01M205 95h.01M215 95h.01M225 95h.01M235 95h.01M245 95h.01M255 95h.01M265 95h.01M275 95h.01M285 95h.01M295 95h.01M305 95h.01M505 95h.01M515 95h.01M535 95h.01M545 95h.01M555 95h.01M565 95h.01M575 95h.01M615 95h.01M625 95h.01M655 95h.01M665 95h.01M675 95h.01M685 95h.01M695 95h.01M705 95h.01M715 95h.01M725 95h.01M735 95h.01M745 95h.01M755 95h.01M765 95h.01M775 95h.01M785 95h.01M795 95h.01M805 95h.01M815 95h.01M825 95h.01M835 95h.01M845 95h.01M855 95h.01M865 95h.01M875 95h.01M895 95h.01M165 105h.01M175 105h.01M185 105h.01M195 105h.01M205 105h.01M215 105h.01M225 105h.01M235 105h.01M245 105h.01M255 105h.01M265 105h.01M275 105h.01M285 105h.01M295 105h.01M475 105h.01M485 105h.01M495 105h.01M545 105h.01M565 105h.01M575 105h.01M585 105h.01M595 105h.01M605 105h.01M615 105h.01M625 105h.01M635 105h.01M655 105h.01M665 105h.01M675 105h.01M685 105h.01M695 105h.01M705 105h.01M715 105h.01M725 105h.01M735 105h.01M745 105h.01M755 105h.01M765 105h.01M775 105h.01M785 105h.01M795 105h.01M805 105h.01M815 105h.01M825 105h.01M835 105h.01M845 105h.01M855 105h.01M165 115h.01M175 115h.01M185 115h.01M195 115h.01M205 115h.01M215 115h.01M225 115h.01M235 115h.01M245 115h.01M255 115h.01M265 115h.01M275 115h.01M285 115h.01M485 115h.01M525 115h.01M585 115h.01M595 115h.01M605 115h.01M615 115h.01M625 115h.01M635 115h.01M645 115h.01M655 115h.01M665 115h.01M675 115h.01M685 115h.01M695 115h.01M705 115h.01M715 115h.01M725 115h.01M735 115h.01M745 115h.01M755 115h.01M765 115h.01M775 115h.01M785 115h.01M795 115h.01M805 115h.01M815 115h.01M825 115h.01M835 115h.01M855 115h.01M885 115h.01M175 125h.01M185 125h.01M195 125h.01M205 125h.01M215 125h.01M225 125h.01M235 125h.01M245 125h.01M255 125h.01M265 125h.01M275 125h.01M485 125h.01M495 125h.01M505 125h.01M515 125h.01M525 125h.01M605 125h.01M615 125h.01M625 125h.01M635 125h.01M645 125h.01M655 125h.01M665 125h.01M675 125h.01M685 125h.01M695 125h.01M705 125h.01M715 125h.01M725 125h.01M735 125h.01M745 125h.01M755 125h.01M765 125h.01M775 125h.01M785 125h.01M795 125h.01M805 125h.01M815 125h.01M825 125h.01M865 125h.01M185 135h.01M195 135h.01M205 135h.01M215 135h.01M225 135h.01M235 135h.01M265 135h.01M275 135h.01M475 135h.01M485 135h.01M495 135h.01M505 135h.01M515 135h.01M525 135h.01M535 135h.01M545 135h.01M555 135h.01M565 135h.01M575 135h.01M585 135h.01M605 135h.01M615 135h.01M625 135h.01M645 135h.01M655 135h.01M665 135h.01M675 135h.01M685 135h.01M695 135h.01M705 135h.01M715 135h.01M725 135h.01M735 135h.01M745 135h.01M755 135h.01M765 135h.01M775 135h.01M785 135h.01M795 135h.01M805 135h.01M815 135h.01M825 135h.01M835 135h.01M205 145h.01M215 145h.01M225 145h.01M455 145h.01M465 145h.01M475 145h.01M485 145h.01M495 145h.01M505 145h.01M515 145h.01M525 145h.01M535 145h.01M545 145h.01M555 145h.01M565 145h.01M575 145h.01M585 145h.01M595 145h.01M605 145h.01M615 145h.01M625 145h.01M635 145h.01M665 145h.01M675 145h.01M685 145h.01M695 145h.01M705 145h.01M715 145h.01M725 145h.01M735 145h.01M745 145h.01M755 145h.01M765 145h.01M775 145h.01M785 145h.01M795 145h.01M805 145h.01M815 145h.01M825 145h.01M205 155h.01M215 155h.01M225 155h.01M455 155h.01M465 155h.01M475 155h.01M485 155h.01M495 155h.01M505 155h.01M515 155h.01M525 155h.01M535 155h.01M545 155h.01M555 155h.01M565 155h.01M575 155h.01M585 155h.01M595 155h.01M615 155h.01M625 155h.01M635 155h.01M645 155h.01M655 155h.01M705 155h.01M715 155h.01M725 155h.01M735 155h.01M745 155h.01M755 155h.01M765 155h.01M775 155h.01M785 155h.01M795 155h.01M805 155h.01M815 155h.01M225 165h.01M235 165h.01M245 165h.01M255 165h.01M455 165h.01M465 165h.01M475 165h.01M485 165h.01M495 165h.01M505 165h.01M515 165h.01M525 165h.01M535 165h.01M545 165h.01M555 165h.01M565 165h.01M575 165h.01M585 165h.01M595 165h.01M605 165h.01M615 165h.01M625 165h.01M635 165h.01M645 165h.01M655 165h.01M705 165h.01M715 165h.01M725 165h.01M765 165h.01M775 165h.01M785 165h.01M795 165h.01M245 175h.01M255 175h.01M265 175h.01M455 175h.01M465 175h.01M475 175h.01M485 175h.01M495 175h.01M505 175h.01M515 175h.01M525 175h.01M535 175h.01M545 175h.01M555 175h.01M565 175h.01M575 175h.01M585 175h.01M595 175h.01M605 175h.01M625 175h.01M635 175h.01M705 175h.01M715 175h.01M775 175h.01M785 175h.01M795 175h.01M835 175h.01M265 185h.01M305 185h.01M315 185h.01M465 185h.01M475 185h.01M485 185h.01M495 185h.01M505 185h.01M515 185h.01M525 185h.01M535 185h.01M545 185h.01M555 185h.01M565 185h.01M575 185h.01M585 185h.01M595 185h.01M605 185h.01M615 185h.01M625 185h.01M635 185h.01M715 185h.01M775 185h.01M785 185h.01M795 185h.01M845 185h.01M275 195h.01M295 195h.01M305 195h.01M315 195h.01M325 195h.01M335 195h.01M465 195h.01M475 195h.01M485 195h.01M495 195h.01M505 195h.01M515 195h.01M525 195h.01M535 195h.01M545 195h.01M555 195h.01M565 195h.01M575 195h.01M585 195h.01M595 195h.01M605 195h.01M615 195h.01M625 195h.01M635 195h.01M775 195h.01M845 195h.01M285 205h.01M295 205h.01M305 205h.01M315 205h.01M325 205h.01M335 205h.01M345 205h.01M355 205h.01M525 205h.01M535 205h.01M545 205h.01M555 205h.01M565 205h.01M575 205h.01M585 205h.01M595 205h.01M605 205h.01M615 205h.01M625 205h.01M765 205h.01M825 205h.01M285 215h.01M295 215h.01M305 215h.01M315 215h.01M325 215h.01M335 215h.01M345 215h.01M355 215h.01M535 215h.01M545 215h.01M555 215h.01M565 215h.01M575 215h.01M585 215h.01M595 215h.01M605 215h.01M615 215h.01M775 215h.01M805 215h.01M815 215h.01M825 215h.01M835 215h.01M285 225h.01M295 225h.01M305 225h.01M315 225h.01M325 225h.01M335 225h.01M345 225h.01M355 225h.01M365 225h.01M375 225h.01M385 225h.01M535 225h.01M545 225h.01M555 225h.01M565 225h.01M575 225h.01M585 225h.01M595 225h.01M605 225h.01M785 225h.01M815 225h.01M835 225h.01M885 225h.01M285 235h.01M295 235h.01M305 235h.01M315 235h.01M325 235h.01M335 235h.01M345 235h.01M355 235h.01M365 235h.01M375 235h.01M385 235h.01M395 235h.01M535 235h.01M545 235h.01M555 235h.01M565 235h.01M575 235h.01M585 235h.01M595 235h.01M605 235h.01M795 235h.01M805 235h.01M885 235h.01M895 235h.01M905 235h.01M285 245h.01M295 245h.01M305 245h.01M315 245h.01M325 245h.01M335 245h.01M345 245h.01M355 245h.01M365 245h.01M375 245h.01M385 245h.01M395 245h.01M545 245h.01M555 245h.01M565 245h.01M575 245h.01M585 245h.01M595 245h.01M605 245h.01M295 255h.01M305 255h.01M315 255h.01M325 255h.01M335 255h.01M345 255h.01M355 255h.01M365 255h.01M375 255h.01M385 255h.01M545 255h.01M555 255h.01M565 255h.01M575 255h.01M585 255h.01M595 255h.01M605 255h.01M635 255h.01M865 255h.01M875 255h.01M895 255h.01M305 265h.01M315 265h.01M325 265h.01M335 265h.01M345 265h.01M355 265h.01M365 265h.01M375 265h.01M385 265h.01M535 265h.01M545 265h.01M555 265h.01M565 265h.01M575 265h.01M585 265h.01M595 265h.01M605 265h.01M625 265h.01M635 265h.01M845 265h.01M855 265h.01M865 265h.01M875 265h.01M885 265h.01M895 265h.01M305 275h.01M315 275h.01M325 275h.01M335 275h.01M345 275h.01M355 275h.01M365 275h.01M375 275h.01M385 275h.01M545 275h.01M555 275h.01M565 275h.01M575 275h.01M585 275h.01M595 275h.01M625 275h.01M825 275h.01M835 275h.01M845 275h.01M855 275h.01M865 275h.01M875 275h.01M885 275h.01M895 275h.01M905 275h.01M305 285h.01M315 285h.01M325 285h.01M335 285h.01M345 285h.01M355 285h.01M365 285h.01M545 285h.01M555 285h.01M565 285h.01M575 285h.01M585 285h.01M595 285h.01M625 285h.01M825 285h.01M835 285h.01M845 285h.01M855 285h.01M865 285h.01M875 285h.01M885 285h.01M895 285h.01M905 285h.01M915 285h.01M305 295h.01M315 295h.01M325 295h.01M335 295h.01M345 295h.01M355 295h.01M545 295h.01M555 295h.01M565 295h.01M575 295h.01M585 295h.01M825 295h.01M835 295h.01M845 295h.01M855 295h.01M865 295h.01M875 295h.01M885 295h.01M895 295h.01M905 295h.01M915 295h.01M305 305h.01M315 305h.01M325 305h.01M335 305h.01M345 305h.01M355 305h.01M555 305h.01M565 305h.01M575 305h.01M825 305h.01M835 305h.01M845 305h.01M855 305h.01M865 305h.01M875 305h.01M885 305h.01M895 305h.01M905 305h.01M915 305h.01M305 315h.01M315 315h.01M325 315h.01M335 315h.01M345 315h.01M885 315h.01M895 315h.01M905 315h.01M915 315h.01M305 325h.01M315 325h.01M325 325h.01M905 325h.01M985 325h.01M295 335h.01M305 335h.01M315 335h.01M975 335h.01M295 345h.01M305 345h.01M315 345h.01M295 355h.01M305 355h.01" stroke="rgba(255,255,255,0.15)" stroke-width="3" stroke-linecap="round" />

            {{-- Jalur rute (statis, redup) --}}
            <g stroke="rgba(56,189,248,0.30)" stroke-width="1">
                <path d="M797 234Q845 190 837 130" />
                <path d="M797 234Q748 150 653 147" />
                <path d="M797 234Q688 92 512 73" />
                <path d="M797 234Q660 124 484 117" />
                <path d="M797 234Q681 234 586 300" />
                <path d="M797 234Q577 199 371 283" />
                <path d="M797 234Q900 175 1000 168" />
                <path d="M0 168Q90 160 172 123" />
            </g>

            {{-- Kapal (komet cahaya) yang bergerak di sepanjang rute --}}
            <g stroke="#7dd3fc" stroke-width="1.8" stroke-linecap="round">
                <path class="anj-comet" pathLength="100" d="M797 234Q845 190 837 130" style="animation-delay:-1s" />
                <path class="anj-comet" pathLength="100" d="M797 234Q748 150 653 147" style="animation-delay:-3.4s" />
                <path class="anj-comet" pathLength="100" d="M797 234Q688 92 512 73" style="animation-delay:-5.2s" />
                <path class="anj-comet" pathLength="100" d="M797 234Q660 124 484 117" style="animation-delay:-2.2s" />
                <path class="anj-comet" pathLength="100" d="M797 234Q681 234 586 300" style="animation-delay:-6.4s" />
                <path class="anj-comet" pathLength="100" d="M797 234Q577 199 371 283" style="animation-delay:-4.2s" />
                <path class="anj-comet" pathLength="100" d="M797 234Q900 175 1000 168" style="animation-delay:-6s" />
                <path class="anj-comet" pathLength="100" d="M0 168Q90 160 172 123" style="animation-delay:-0.4s" />
            </g>

            {{-- Pelabuhan tujuan --}}
            <g fill="#e0f2fe">
                <circle cx="837" cy="130" r="2.5" />
                <circle cx="653" cy="147" r="2.5" />
                <circle cx="512" cy="73" r="2.5" />
                <circle cx="484" cy="117" r="2.5" />
                <circle cx="586" cy="300" r="2.5" />
                <circle cx="371" cy="283" r="2.5" />
                <circle cx="172" cy="123" r="2.5" />
            </g>

            {{-- Hub: Tanjung Priok --}}
            <circle class="anj-ping" cx="797" cy="234" r="4" fill="#38bdf8" />
            <circle cx="797" cy="234" r="4" fill="#38bdf8" />
            <g fill="#a3a3a3" font-size="13" font-weight="600" class="hidden md:inline">
                <text x="797" y="254" text-anchor="middle">Tanjung Priok</text>
                <text x="512" y="60" text-anchor="middle">Rotterdam</text>
            </g>
        </svg>
    </div>
    <div aria-hidden="true" class="anj-hero-veil pointer-events-none absolute inset-0 -z-10"></div>

    <div class="relative z-10 mx-auto max-w-5xl px-6 text-center">

        {{-- Identitas perusahaan --}}
        <div data-animate class="mb-8 inline-flex flex-wrap items-center justify-center gap-x-2.5 gap-y-1 rounded-full border border-white/10 bg-black/60 px-4 py-2 text-sm backdrop-blur">
            <span class="relative flex h-2 w-2">
                <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-sky-400 opacity-60"></span>
                <span class="relative inline-flex h-2 w-2 rounded-full bg-sky-400"></span>
            </span>
            <span class="font-semibold text-white">{{ $company }}</span>
            <span class="hidden text-neutral-600 sm:inline">|</span>
            <span class="hidden text-neutral-400 sm:inline">{{ config('site.company.tagline', 'Global Trade & Logistics Solutions') }}</span>
        </div>

        {{-- Headline --}}
        <h1 data-animate class="font-display mx-auto max-w-4xl text-4xl font-extrabold leading-[1.05] tracking-tight text-white [font-stretch:112%] sm:text-6xl lg:text-7xl">
            {{ $data['headline'] ?? 'Menghubungkan Komoditas Unggulan ke Pasar Internasional' }}
        </h1>

        <p data-animate class="mx-auto mt-7 max-w-2xl text-lg leading-relaxed text-neutral-400 sm:text-xl">
            {{ $data['subheadline'] ?? 'Mitra institusional terpercaya dalam tata kelola ekspor-impor komoditas, pabean jalur hijau prioritas (AEO), dan pengapalan ke 40+ pelabuhan utama dunia.' }}
        </p>

        {{-- Tombol aksi --}}
        <div data-animate class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
            <a href="{{ $primary['href'] ?? '#rfq' }}"
                class="group inline-flex w-full items-center justify-center gap-2 rounded-full bg-white px-8 py-4 text-sm font-bold text-black transition hover:bg-neutral-200 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300 focus-visible:ring-offset-2 focus-visible:ring-offset-black active:scale-95 sm:w-auto">
                <span>{{ $primary['label'] ?? 'Konsultasi Ekspor Impor' }}</span>
                <x-icon name="arrow-right" class="h-4 w-4 transition-transform group-hover:translate-x-1" />
            </a>
            <a href="{{ $secondary['href'] ?? '#about' }}"
                class="inline-flex w-full items-center justify-center rounded-full border border-white/15 bg-black/50 px-8 py-4 text-sm font-semibold text-neutral-200 backdrop-blur transition hover:border-white/30 hover:text-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-sky-300 focus-visible:ring-offset-2 focus-visible:ring-offset-black active:scale-95 sm:w-auto">
                {{ $secondary['label'] ?? 'Profil Perusahaan' }}
            </a>
        </div>

        {{-- 4 poin kredibilitas: bilah kaca terintegrasi di bawah tombol aksi --}}
        <div data-animate class="mx-auto mt-14 grid max-w-4xl grid-cols-2 gap-px overflow-hidden rounded-2xl border border-white/10 bg-white/10 text-left shadow-2xl backdrop-blur-md sm:grid-cols-4">
            @foreach ($trust as $t)
            <div class="flex items-center gap-3.5 bg-black/80 p-4 sm:p-5">
                <div class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-xl border border-white/10 bg-white/5 text-sky-300">
                    <x-icon :name="$t['icon']" class="h-4 w-4" />
                </div>
                <div>
                    <span class="block text-[11px] font-medium uppercase tracking-wider text-neutral-400">{{ $t['title'] }}</span>
                    <span class="block text-xs font-bold text-white sm:text-sm">{{ $t['value'] }}</span>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>