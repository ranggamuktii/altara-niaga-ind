<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Company Identity
    |--------------------------------------------------------------------------
    | Core corporate brand variables. Modify here to change company branding
    | across the entire landing page and email templates instantly.
    */

    'company' => [
        'name'            => 'PT Vanguard Maritime & Trade Corp',
        'short_name'      => 'Vanguard Trade',
        'tagline'         => 'Global Trade & Logistics Solutions',
        'slogan'          => 'Direct Sourcing, Certified Compliance, Seamless Global Transit',
        'email'           => 'trade-desk@vanguardtrade.com',
        'phone'           => '+62 21 5088 9200',
        'address'         => 'Financial Club Jakarta, 27th Floor, Jl. Jend. Sudirman Kav. 52-53, SCBD, Jakarta 12190',
        'registration_no' => 'NIB / SIUP: 9120004812391',
        'customs_code'    => 'EDI IDJKT / Kep-Dirjen BC 441/BC/2022',
        'tax_id'          => 'NPWP: 01.442.891.4-018.000',
        'founded_year'    => '2014',
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    */

    'navigation' => [
        ['label' => 'Profil Perusahaan', 'href' => '#about'],
        ['label' => 'Layanan Bisnis',    'href' => '#services'],
        ['label' => 'Divisi Komoditas',  'href' => '#commodities'],
        ['label' => 'Armada & Rute',     'href' => '#fleet-dispatch'],
        ['label' => 'Keunggulan',        'href' => '#why-us'],
        ['label' => 'Kontak & RFQ',      'href' => '#rfq'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Hero Section
    |--------------------------------------------------------------------------
    */

    'hero' => [
        'badge'       => 'INTERNATIONAL TRADE & MARITIME LOGISTICS HOUSE',
        'headline'    => 'Menghubungkan Komoditas Unggulan ke Pasar Internasional',
        'subheadline' => 'Mitra institusional terpercaya dalam tata kelola ekspor-impor komoditas, kepabeanan jalur hijau prioritas (AEO), dan manajemen logistik multimoda ke lebih dari 40 pelabuhan utama dunia.',
        'cta_primary' => [
            'label' => 'Konsultasi Ekspor Impor',
            'href'  => '#rfq',
        ],
        'cta_secondary' => [
            'label' => 'Profil Perusahaan',
            'href'  => '#about',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | About Section (Company Profile: Visi, Misi, Nilai)
    |--------------------------------------------------------------------------
    */

    'about' => [
        'label'       => 'PROFIL PERUSAHAAN',
        'headline'    => 'Membangun Reputasi Perdagangan Global dengan Integritas dan Standar Kepatuhan Tertinggi',
        'description' => 'Didirikan dengan visi memperkuat daya saing komoditas di rantai pasok dunia, PT Vanguard Maritime & Trade Corp beroperasi sebagai trading house dan integrator logistik maritim yang menghubungkan produsen lokal terverifikasi dengan pembeli skala institusi global.',
        'vision'      => 'Menjadi perusahaan perdagangan internasional dan manajemen logistik ekspor-impor terkemuka di Asia Tenggara yang diakui atas keunggulan operasional, kepatuhan hukum, dan integritas tanpa kompromi.',
        'mission'     => [
            'Memfasilitasi akses pasar ekspor yang adil, efisien, dan transparan bagi produk komoditas unggulan.',
            'Memberikan kepastian pengiriman tepat waktu dengan mitigasi risiko rantai pasok berstandar internasional.',
            'Mengintegrasikan teknologi data EDI pabean dan sertifikasi surveyor untuk jaminan mutu tanpa cela.',
        ],
        'values'      => [
            ['title' => 'Integritas Mutlak', 'desc' => 'Menjunjung transparansi kontrak dan kepatuhan penuh regulasi perdagangan dunia.'],
            ['title' => 'Presisi & Ketepatan', 'desc' => 'Menjamin jadwal pengapalan yang konsisten tanpa biaya demurrage tak terduga.'],
            ['title' => 'Kualitas Terverifikasi', 'desc' => 'Pengawasan ketat bersama surveyor independen terakreditasi SGS & Sucofindo.'],
        ],
        'features'    => [
            [
                'title'       => 'Akreditasi Authorized Economic Operator (AEO)',
                'description' => 'Fasilitas kepabeanan jalur hijau prioritas dengan pertukaran data elektronik (EDI) langsung ke sistem pabean pelabuhan utama.',
            ],
            [
                'title'       => 'Verifikasi Surveyor & Pengujian Lab Independen',
                'description' => 'Kerjasama resmi inspeksi pra-pengapalan bersama SGS, Sucofindo, dan Bureau Veritas guna memastikan kesesuaian spesifikasi kontrak.',
            ],
            [
                'title'       => 'Struktur Pembiayaan & Asuransi Maritim Komprehensif',
                'description' => 'Proteksi kargo all-risk Institute Cargo Clauses (A) serta pengelolaan dokumen L/C, SBLC, dan escrow perdagangan berstandar ICC.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Services Section
    |--------------------------------------------------------------------------
    */

    'services' => [
        'label'    => 'LAYANAN & KAPABILITAS KAMI',
        'headline' => 'Solusi Terpadu Rantai Pasok Ekspor Impor dari Hulu ke Destinasi Global',
        'items'    => [
            [
                'icon'        => 'export',
                'title'       => 'Manajemen Ekspor Terpadu',
                'description' => 'Pengurusan lengkap Pemberitahuan Ekspor Barang (PEB), Surat Keterangan Asal (COO Form D, E, AK), inspeksi surveyor, dan penerbitan Bill of Lading (B/L).',
            ],
            [
                'icon'        => 'import',
                'title'       => 'Kepabeanan & Customs Clearance',
                'description' => 'Klasifikasi tarif HS Code akurat, izin impor khusus (PI), clearance jalur hijau pabean, dan pelepasan kargo pelabuhan yang cepat dan terukur.',
            ],
            [
                'icon'        => 'logistics',
                'title'       => 'Freight Forwarding Multimoda',
                'description' => 'Alokasi ruang kapal terjamin dengan aliansi pelayaran Tier-1 (Maersk, MSC, CMA CGM) untuk kontainer FCL, LCL, kargo curah, serta kargo udara carter.',
            ],
            [
                'icon'        => 'compliance',
                'title'       => 'Kepatuhan Hukum & Regulasi Perdagangan',
                'description' => 'Audit kepatuhan perjanjian perdagangan bebas (AFTA, RCEP, IEU-CEPA), regulasi karantina tumbuhan/hewan, serta ketentuan anti-dumping internasional.',
            ],
            [
                'icon'        => 'warehouse',
                'title'       => 'Pergudangan Berikat & Cold Chain',
                'description' => 'Fasilitas gudang berikat kering dan berpendingin (cold chain) dengan sistem manajemen gudang modern (WMS) yang terhubung ke terminal peti kemas.',
            ],
            [
                'icon'        => 'consulting',
                'title'       => 'Pengadaan & Kontrak Perdagangan Dagang',
                'description' => 'Pencocokan pembeli-penjual institusional, penyusunan kontrak jual-beli internasional berbasis Incoterms, serta jaminan mutu pra-pengiriman.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Trading Divisions & Commodity Categories
    |--------------------------------------------------------------------------
    */

    'commodities' => [
        'label'       => 'DIVISI KOMODITAS PERDAGANGAN',
        'headline'    => 'Sektor Komoditas Ekspor & Impor Unggulan',
        'description' => 'Portofolio komoditas perdagangan dengan jaminan sertifikat surveyor independen, kemasan standar ekspor, dan fleksibilitas termin kontrak.',
        'items'       => [
            [
                'sector'      => 'Agrikultur, Rempah & Bahan Makanan',
                'code'        => 'HS CHAPTER 07 - 18',
                'description' => 'Kopi Arabika & Robusta premium, rempah kering (kayu manis, cengkeh, pala), biji kakao fermentasi, kelapa parut kering, dan produk turunan sawit.',
                'packaging'   => 'Jute Bags (60 kg) / Flexibag / Kontainer Kering Curah',
                'inspections' => 'Phytosanitary, Sertifikasi Organik, Uji Lab SGS',
            ],
            [
                'sector'      => 'Mineral, Logam & Energi',
                'code'        => 'HS CHAPTER 25 - 28',
                'description' => 'Pasir silika kualitas tinggi, batubara metalurgi, bauksit terklasifikasi, nikel matte, dan mineral industri untuk sektor manufaktur global.',
                'packaging'   => 'Jumbo Bags (1.0 - 1.5 MT) / Kapal Curah Handymax',
                'inspections' => 'Sucofindo / CCIC / Bureau Veritas Assay Certificate',
            ],
            [
                'sector'      => 'Bahan Kimia & Bio-Industri',
                'code'        => 'HS CHAPTER 29 - 38',
                'description' => 'Oleokimia murni (gliserin, asam lemak, stearic acid), karet alam berspesifikasi (SIR 20), bio-fertilizer, dan resin teknis.',
                'packaging'   => 'Steel Drums (200L) / ISO Tank / Wadah IBC Tote',
                'inspections' => 'Kepatuhan MSDS, Standar REACH, Certificate of Analysis (COA)',
            ],
            [
                'sector'      => 'Produk Manufaktur & Komponen Industri',
                'code'        => 'HS CHAPTER 60 - 84',
                'description' => 'Fastener presisi OEM, solusi kemasan berkelanjutan, tekstil teknis fungsional, dan perangkat keras arsitektural berbahan logam paduan.',
                'packaging'   => 'Pallet Kayu Standar Ekspor ISPM-15 / Kontainer 20ft & 40ft HC',
                'inspections' => 'Sertifikasi ISO 9001:2015, Pre-Shipment Inspection (PSI)',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Incoterms 2020 Framework
    |--------------------------------------------------------------------------
    */

    'incoterms' => [
        'label'       => 'STANDAR KONTRAK INTERNASIONAL',
        'headline'    => 'Kerangka Termin Penyerahan Barang (Incoterms® 2020)',
        'description' => 'Transparansi penetapan pembagian biaya angkut, asuransi muatan, dan titik peralihan risiko antara pihak eksportir dan importir.',
        'terms'       => [
            [
                'code'        => 'FOB',
                'name'        => 'Free On Board',
                'risk_point'  => 'Di Atas Geladak Kapal Pelabuhan Muat',
                'description' => 'Barang diserahkan setelah melewati rel kapal di pelabuhan muat. Eksportir menyelesaikan formalitas kepabeanan ekspor.',
            ],
            [
                'code'        => 'CIF',
                'name'        => 'Cost, Insurance & Freight',
                'risk_point'  => 'Di Pelabuhan Asal, Biaya & Asuransi ke Tujuan',
                'description' => 'Kami mengatur pengapalan laut serta menutup asuransi maritim hingga pelabuhan tujuan pembeli.',
            ],
            [
                'code'        => 'CFR',
                'name'        => 'Cost and Freight',
                'risk_point'  => 'Pelabuhan Asal Muat',
                'description' => 'Kami menanggung biaya angkut laut hingga pelabuhan bongkar yang disepakati. Pembeli menutup asuransi kargo sendiri.',
            ],
            [
                'code'        => 'EXW / FCA',
                'name'        => 'Ex Works / Free Carrier',
                'risk_point'  => 'Pintu Pabrik atau Hub Forwarder',
                'description' => 'Sangat ideal untuk importir multinasional yang telah memiliki kontrak alokasi ruang langsung dengan jalur pelayaran internasional.',
            ],
            [
                'code'        => 'DDP',
                'name'        => 'Delivered Duty Paid',
                'risk_point'  => 'Gudang Pembeli di Negara Tujuan',
                'description' => 'Solusi turnkey di mana Vanguard mengelola seluruh siklus ekspor, pengapalan laut, bea masuk impor, pabean lokal, hingga truk tiba di pintu gudang.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Stats / Numbers Section
    |--------------------------------------------------------------------------
    */

    'stats' => [
        'headline' => 'Skala Bisnis & Rekam Jejak Operasional',
        'items'    => [
            ['value' => '40+',    'label' => 'Jaringan Pelabuhan Dunia'],
            ['value' => '250K+',  'label' => 'Metrik Ton Komoditas Terkirim'],
            ['value' => '100%',   'label' => 'Kepatuhan Bea Cukai (AEO)'],
            ['value' => '24 Jam', 'label' => 'Respon Cepat Penawaran RFQ'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global Reach Section
    |--------------------------------------------------------------------------
    */

    'reach' => [
        'label'       => 'JARINGAN GLOBAL',
        'headline'    => 'Koridor Maritim & Konektivitas Pelabuhan Internasional',
        'description' => 'Kontrak keagenan resmi dan mitra pergudangan berikat kami menghubungkan arus komoditas secara langsung di pelabuhan tersibuk dunia.',
        'regions'     => [
            [
                'name'      => 'Hub Asia Tenggara',
                'countries' => 'Tanjung Priok (ID), Port Klang (MY), Jurong Port (SG), Laem Chabang (TH), Haiphong (VN)',
            ],
            [
                'name'      => 'Koridor Asia Timur',
                'countries' => 'Shanghai, Ningbo-Zhoushan, Busan, Yokohama, Kaohsiung',
            ],
            [
                'name'      => 'Pelabuhan Utama Eropa',
                'countries' => 'Rotterdam (NL), Antwerp-Bruges (BE), Hamburg (DE), Felixstowe (UK), Genoa (IT)',
            ],
            [
                'name'      => 'Timur Tengah & Teluk Arab',
                'countries' => 'Jebel Ali (Dubai), Dammam, Hamad Port (Qatar), Khalifa Port (Abu Dhabi)',
            ],
            [
                'name'      => 'Amerika Utara & Selatan',
                'countries' => 'Los Angeles / Long Beach, Houston, Santos (Brasil), Manzanillo (Meksiko)',
            ],
            [
                'name'      => 'Afrika & Mediterania',
                'countries' => 'Durban (Afrika Selatan), Port Said (Mesir), Mombasa (Kenya), Tangier Med (Maroko)',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Why Choose Us
    |--------------------------------------------------------------------------
    */

    'why_us' => [
        'label'    => 'KEUNGGULAN KOMPETITIF',
        'headline' => 'Mengapa Mitra Korporasi Mempercayakan Perdagangan Global Kepada Kami',
        'items'    => [
            [
                'title'       => 'Transparansi Biaya & Bebas Risiko Demurrage Tersembunyi',
                'description' => 'Kalkulasi pro-forma transparan mencakup ocean freight, Terminal Handling Charge (THC), dokumen pabean, serta buffer masa tinggal kontainer.',
            ],
            [
                'title'       => 'Jaminan Slot Kontainer Bersama Jalur Pelayaran Tier-1',
                'description' => 'Alokasi ruang prioritas bahkan pada periode puncak musim ekspor melalui kontrak volume jangka panjang bersama operator pelayaran global.',
            ],
            [
                'title'       => 'Ketertelusuran Uji Karantina & Sanitasi Lengkap',
                'description' => 'Pemeriksaan laboratorium resmi pra-pengapalan untuk mencegah penolakan karantina atau demurrage fumigasi di pelabuhan negara tujuan.',
            ],
            [
                'title'       => 'Pertukaran Dokumen Digital & Pelacakan Kargo Real-Time',
                'description' => 'Akses instan salinan Bill of Lading, packing list, faktur komersial terverifikasi, dan posisi kontainer melalui integrasi sistem EDI terpadu.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | RFQ / Interactive Inquiry Section
    |--------------------------------------------------------------------------
    */

    'inquiry' => [
        'label'       => 'KONSULTASI & PERMINTAAN PENAWARAN (RFQ)',
        'headline'    => 'Mulai Diskusi Kebutuhan Perdagangan & Pengapalan Kargo Anda',
        'description' => 'Sampaikan spesifikasi komoditas, estimasi volume, pelabuhan muat/bongkar, dan termin penyerahan yang diinginkan. Tim trade desk kami akan memverifikasi dan memberikan pro-forma kalkulasi terperinci.',
        'trade_types' => [
            'export'      => 'Ekspor Komoditas (Outbound)',
            'import'      => 'Impor & Customs Clearance (Inbound)',
            'freight_only'=> 'Jasa Freight Forwarding Multimoda',
            'consulting'  => 'Konsultasi Perdagangan & Pabean',
        ],
        'incoterms_options' => ['FOB', 'CIF', 'CFR', 'EXW', 'DDP', 'FCA', 'CIP', 'DAP'],
        'commodity_divisions' => [
            'Agrikultur, Rempah & Bahan Makanan',
            'Mineral, Logam & Energi',
            'Bahan Kimia & Bio-Industri',
            'Produk Manufaktur & Komponen Industri',
            'Komoditas Khusus Lainnya',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | CTA Section
    |--------------------------------------------------------------------------
    */

    'cta' => [
        'headline'    => 'Siap Mengembangkan Ekpansi Perdagangan Ekspor Impor Anda?',
        'description' => 'Baik Anda memerlukan pengapalan kargo kontainer rutin maupun carter kapal curah untuk komoditas industri, tim ahli kami siap merancang rantai pasok yang andal.',
        'button'      => [
            'label' => 'Hubungi Trade Desk Kami',
            'href'  => '#rfq',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Footer
    |--------------------------------------------------------------------------
    */

    'footer' => [
        'description' => 'PT Vanguard Maritime & Trade Corp adalah badan usaha perdagangan internasional dan integrator logistik maritim multimoda yang menyediakan layanan sourcing komoditas terverifikasi, kepabeanan prioritas, dan freight forwarding global.',
        'links'       => [
            'Divisi Komoditas' => [
                ['label' => 'Agrikultur & Rempah',     'href' => '#commodities'],
                ['label' => 'Mineral & Energi',        'href' => '#commodities'],
                ['label' => 'Bahan Kimia Industri',    'href' => '#commodities'],
                ['label' => 'Produk Manufaktur',       'href' => '#commodities'],
            ],
            'Layanan Ekspor Impor' => [
                ['label' => 'Tata Kelola Ekspor',      'href' => '#services'],
                ['label' => 'Customs Brokerage',       'href' => '#services'],
                ['label' => 'Panduan Incoterms',       'href' => '#incoterms'],
                ['label' => 'Jaringan Pelabuhan',      'href' => '#reach'],
            ],
            'Tata Kelola & Kepatuhan' => [
                ['label' => 'Sertifikasi AEO Pabean',  'href' => '#about'],
                ['label' => 'Protokol Surveyor Resmi', 'href' => '#about'],
                ['label' => 'Kebijakan Anti-Korupsi',  'href' => '#why-us'],
                ['label' => 'Syarat Penyerahan Kargo', 'href' => '#'],
            ],
        ],
        'socials' => [
            ['platform' => 'linkedin',  'href' => 'https://linkedin.com'],
            ['platform' => 'twitter',   'href' => 'https://x.com'],
            ['platform' => 'instagram', 'href' => 'https://instagram.com'],
        ],
    ],

];
