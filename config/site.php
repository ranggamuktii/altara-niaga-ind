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
        'name' => 'PT Altara Niaga Indonesia',
        'short_name' => 'Altara Niaga Indonesia',
        'tagline' => 'Global Trade & Logistics Solutions',
        'slogan' => 'Direct Sourcing, Certified Compliance, Seamless Global Transit',
        'email' => 'trade-desk@altaraniaga.com',
        'phone' => '+62 21 5088 9200',
        'address' => 'Financial Club Jakarta, 27th Floor, Jl. Jend. Sudirman Kav. 52-53, SCBD, Jakarta 12190',
        'registration_no' => 'NIB / SIUP: 9120004812391',
        'customs_code' => 'EDI IDJKT / Kep-Dirjen BC 441/BC/2022',
        'tax_id' => 'NPWP: 01.442.891.4-018.000',
        'founded_year' => '2014',
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    */

    'navigation' => [
        ['label' => 'Tentang',    'href' => '#about'],
        ['label' => 'Layanan',    'href' => '#services'],
        ['label' => 'Komoditas',  'href' => '#commodities'],
        ['label' => 'Armada',     'href' => '#fleet-dispatch'],
        ['label' => 'Jaringan',   'href' => '#reach'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Hero Section
    |--------------------------------------------------------------------------
    */

    'hero' => [
        'badge' => 'INTERNATIONAL TRADE & MARITIME LOGISTICS HOUSE',
        'headline' => 'Menghubungkan Komoditas Unggulan ke Pasar Internasional',
        'subheadline' => 'Mitra institusional terpercaya dalam tata kelola ekspor-impor komoditas, kepabeanan jalur hijau prioritas (AEO), dan manajemen logistik multimoda ke lebih dari 40 pelabuhan utama dunia.',
        'cta_primary' => [
            'label' => 'Konsultasi Ekspor Impor',
            'href' => '#rfq',
        ],
        'cta_secondary' => [
            'label' => 'Profil Perusahaan',
            'href' => '#about',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | About Section (Company Profile: Visi, Misi, Nilai)
    |--------------------------------------------------------------------------
    */

    'about' => [
        'label' => 'PROFIL PERUSAHAAN',
        'headline' => 'Membangun Reputasi Perdagangan Global dengan Integritas dan Standar Kepatuhan Tertinggi',
        'description' => 'Didirikan dengan visi memperkuat daya saing komoditas di rantai pasok dunia, PT Altara Niaga Indonesia beroperasi sebagai trading house dan integrator logistik maritim yang menghubungkan produsen lokal terverifikasi dengan pembeli skala institusi global.',
        'vision' => 'Menjadi perusahaan perdagangan internasional dan manajemen logistik ekspor-impor terkemuka di Asia Tenggara yang diakui atas keunggulan operasional, kepatuhan hukum, dan integritas tanpa kompromi.',
        'mission' => [
            'Memfasilitasi akses pasar ekspor yang adil, efisien, dan transparan bagi produk komoditas unggulan.',
            'Memberikan kepastian pengiriman tepat waktu dengan mitigasi risiko rantai pasok berstandar internasional.',
            'Mengintegrasikan teknologi data EDI pabean dan sertifikasi surveyor untuk jaminan mutu tanpa cela.',
        ],
        'values' => [
            ['title' => 'Integritas Mutlak', 'desc' => 'Menjunjung transparansi kontrak dan kepatuhan penuh regulasi perdagangan dunia.'],
            ['title' => 'Presisi & Ketepatan', 'desc' => 'Menjamin jadwal pengapalan yang konsisten tanpa biaya demurrage tak terduga.'],
            ['title' => 'Kualitas Terverifikasi', 'desc' => 'Pengawasan ketat bersama surveyor independen terakreditasi SGS & Sucofindo.'],
        ],
        'features' => [
            [
                'title' => 'Akreditasi Authorized Economic Operator (AEO)',
                'description' => 'Fasilitas kepabeanan jalur hijau prioritas dengan pertukaran data elektronik (EDI) langsung ke sistem pabean pelabuhan utama.',
            ],
            [
                'title' => 'Verifikasi Surveyor & Pengujian Lab Independen',
                'description' => 'Kerjasama resmi inspeksi pra-pengapalan bersama SGS, Sucofindo, dan Bureau Veritas guna memastikan kesesuaian spesifikasi kontrak.',
            ],
            [
                'title' => 'Struktur Pembiayaan & Asuransi Maritim Komprehensif',
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
        'label' => 'LAYANAN & KAPABILITAS KAMI',
        'headline' => 'Solusi Terpadu Rantai Pasok Ekspor Impor dari Hulu ke Destinasi Global',
        'items' => [
            [
                'icon' => 'export',
                'title' => 'Manajemen Ekspor Terpadu',
                'description' => 'Pengurusan lengkap Pemberitahuan Ekspor Barang (PEB), Surat Keterangan Asal (COO Form D, E, AK), inspeksi surveyor, dan penerbitan Bill of Lading (B/L).',
            ],
            [
                'icon' => 'import',
                'title' => 'Kepabeanan & Customs Clearance',
                'description' => 'Klasifikasi tarif HS Code akurat, izin impor khusus (PI), clearance jalur hijau pabean, dan pelepasan kargo pelabuhan yang cepat dan terukur.',
            ],
            [
                'icon' => 'logistics',
                'title' => 'Freight Forwarding Multimoda',
                'description' => 'Alokasi ruang kapal terjamin dengan aliansi pelayaran Tier-1 (Maersk, MSC, CMA CGM) untuk kontainer FCL, LCL, kargo curah, serta kargo udara carter.',
            ],
            [
                'icon' => 'compliance',
                'title' => 'Kepatuhan Hukum & Regulasi Perdagangan',
                'description' => 'Audit kepatuhan perjanjian perdagangan bebas (AFTA, RCEP, IEU-CEPA), regulasi karantina tumbuhan/hewan, serta ketentuan anti-dumping internasional.',
            ],
            [
                'icon' => 'warehouse',
                'title' => 'Pergudangan Berikat & Cold Chain',
                'description' => 'Fasilitas gudang berikat kering dan berpendingin (cold chain) dengan sistem manajemen gudang modern (WMS) yang terhubung ke terminal peti kemas.',
            ],
            [
                'icon' => 'consulting',
                'title' => 'Pengadaan & Kontrak Perdagangan Dagang',
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
        'label' => 'DIVISI KOMODITAS PERDAGANGAN',
        'headline' => 'Sektor Komoditas Ekspor & Impor Unggulan',
        'description' => 'Portofolio komoditas perdagangan dengan jaminan sertifikat surveyor independen, kemasan standar ekspor, dan fleksibilitas termin kontrak.',
        'items' => [
            [
                'sector' => 'Agrikultur, Rempah & Bahan Makanan',
                'code' => 'HS CHAPTER 07 - 18',
                'description' => 'Kopi Arabika & Robusta premium, rempah kering (kayu manis, cengkeh, pala), biji kakao fermentasi, kelapa parut kering, dan produk turunan sawit.',
                'packaging' => 'Jute Bags (60 kg) / Flexibag / Kontainer Kering Curah',
                'inspections' => 'Phytosanitary, Sertifikasi Organik, Uji Lab SGS',
            ],
            [
                'sector' => 'Mineral, Logam & Energi',
                'code' => 'HS CHAPTER 25 - 28',
                'description' => 'Pasir silika kualitas tinggi, batubara metalurgi, bauksit terklasifikasi, nikel matte, dan mineral industri untuk sektor manufaktur global.',
                'packaging' => 'Jumbo Bags (1.0 - 1.5 MT) / Kapal Curah Handymax',
                'inspections' => 'Sucofindo / CCIC / Bureau Veritas Assay Certificate',
            ],
            [
                'sector' => 'Bahan Kimia & Bio-Industri',
                'code' => 'HS CHAPTER 29 - 38',
                'description' => 'Oleokimia murni (gliserin, asam lemak, stearic acid), karet alam berspesifikasi (SIR 20), bio-fertilizer, dan resin teknis.',
                'packaging' => 'Steel Drums (200L) / ISO Tank / Wadah IBC Tote',
                'inspections' => 'Kepatuhan MSDS, Standar REACH, Certificate of Analysis (COA)',
            ],
            [
                'sector' => 'Produk Manufaktur & Komponen Industri',
                'code' => 'HS CHAPTER 60 - 84',
                'description' => 'Fastener presisi OEM, solusi kemasan berkelanjutan, tekstil teknis fungsional, dan perangkat keras arsitektural berbahan logam paduan.',
                'packaging' => 'Pallet Kayu Standar Ekspor ISPM-15 / Kontainer 20ft & 40ft HC',
                'inspections' => 'Sertifikasi ISO 9001:2015, Pre-Shipment Inspection (PSI)',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Fleet & Logistics Infrastructure
    |--------------------------------------------------------------------------
    */

    'fleet' => [
        'label' => 'INFRASTRUKTUR & KAPABILITAS ARMADA',
        'headline' => 'Kekuatan Armada Darat & Konektivitas Pelabuhan Berstandar Global',
        'description' => 'Menjamin kelancaran perpindahan kargo dari sentra industri hingga dermaga ekspor dengan dukungan lebih dari 150+ unit armada modern berstandar Euro 5/6, fasilitas pendingin presisi (Cold-Chain), pemantauan satelit 24/7, serta kepatuhan penuh regulasi pabean jalur hijau (AEO).',
        'stats' => [
            ['value' => '150+',  'label' => 'Unit Armada Siap Operasi',          'sub' => 'Prime mover, reefer & trailer'],
            ['value' => '99.4%', 'label' => 'Ketepatan Waktu (On-Time)',         'sub' => 'Tiba di dermaga sesuai jadwal'],
            ['value' => '100%',  'label' => 'Kepatuhan Standar Zero-ODOL',       'sub' => 'Uji jembatan timbang terkalibrasi'],
            ['value' => '24/7',  'label' => 'Pusat Pemantauan Control Tower',     'sub' => 'Telemetri satelit & segel E-Seal'],
        ],
        'primary_fleet' => [
            'category' => 'ANGKUTAN KONTAINER BERAT (FCL)',
            'title' => 'Traktor Kepala Gandeng 40ft High-Cube & Multi-Axle Chassis',
            'description' => 'Dirancang khusus untuk mengangkut kontainer ekspor-impor 20ft, 40ft High-Cube, serta kargo industri berbobot tinggi hingga 34 Metrik Ton. Dilengkapi mesin 540 HP berstandar Euro 6 dan suspensi udara (air-suspension) untuk menjaga integritas komoditas sensitif guncangan.',
            'specs' => [
                ['label' => 'Kapasitas Muat', 'value' => '34.0 Metrik Ton (High-Cube Ready)'],
                ['label' => 'Standar Mesin', 'value' => '540 HP Diesel Euro 6 Eco-Drive'],
                ['label' => 'Konfigurasi Gandar', 'value' => '3 Poros Tri-Axle ISO Twist-Lock'],
                ['label' => 'Koridor Operasional', 'value' => 'Sentra Industri ⇄ Pelabuhan Tanjung Priok & Tanjung Perak'],
            ],
            'badges' => ['Sertifikasi ODOL Valid', 'Jalur Prioritas AEO Pabean', 'Peredam Kejut Air-Ride'],
        ],
        'cards' => [
            [
                'badge' => 'RANTAI DINGIN TERINTEGRASI',
                'title' => 'Truk Box Reefer Suhu Presisi (-25°C s/d +15°C)',
                'description' => 'Solusi logistik berpendingin untuk komoditas sensitif (seafood beku, daging, buah segar, & produk farmasi) dengan pendingin Thermo King & Carrier micro-processor.',
                'features' => [
                    'Monitoring Suhu Real-Time IoT dengan alarm deviasi (<0.5°C)',
                    'Genset Mandiri (Undermount) untuk perjalanan darat jarak jauh',
                    'Sertifikasi Higienitas Food-Grade & Standar Ekspor HACCP',
                ],
            ],
            [
                'badge' => 'PEMASTIAN KEAMANAN REAL-TIME',
                'title' => 'Sistem Telemetri Satelit & E-Seal Terintegrasi',
                'description' => 'Setiap pergerakan kargo dipantau langsung dari Control Tower 24/7 dengan teknologi geofencing pabean dan segel elektronik (E-Seal RFID) anti-manipulasi.',
                'features' => [
                    'Pelacakan Posisi GPS Akurasi Tinggi Tiap 10 Detik',
                    'Geofencing Otomatis saat memasuki area buffer zone pelabuhan',
                    'Pertukaran data elektronik langsung dengan manifest pabean (EDI)',
                ],
            ],
            [
                'badge' => 'STANDAR K3 & KEPATUHAN PABEAN',
                'title' => 'Sertifikasi Zero-ODOL & Pengemudi Profesional',
                'description' => 'Operasi logistik yang patuh pada regulasi keselamatan jalan nasional dan internasional, memastikan muatan bebas tilang, aman, dan tanpa hambatan pelabuhan.',
                'features' => [
                    'Seluruh pengemudi memiliki sertifikasi BNSP & K3 Defensive Driving',
                    'Jaminan lolos jembatan timbang tol tanpa risiko pembongkaran muatan',
                    'Dilindungi polis asuransi pengangkutan darat All-Risk komprehensif',
                ],
            ],
            [
                'badge' => 'MULTIMODAL & SUSTAINABLE',
                'title' => 'Integrasi Dry Port Hub & Green Drayage',
                'description' => 'Kombinasi multimoda darat melalui jalur Kereta Api Logistik (Kalog) langsung ke dermaga, serta inisiatif transisi armada drayage listrik (EV) ramah lingkungan.',
                'features' => [
                    'Direct Rail Intermodal Drayage langsung ke container yard pelabuhan',
                    'Efisiensi waktu tempuh bebas kemacetan jalan tol hingga 40%',
                    'Laporan transparansi jejak karbon pengiriman untuk audit ESG mitra',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Incoterms 2020 Framework
    |--------------------------------------------------------------------------
    */

    'incoterms' => [
        'label' => 'STANDAR KONTRAK',
        'headline' => 'Kerangka Incoterms® 2020',
        'description' => 'Transparansi penetapan pembagian biaya angkut, asuransi, dan titik peralihan risiko berstandar ICC.',
        'terms' => [
            [
                'code' => 'FOB',
                'name' => 'Free On Board',
                'risk_point' => 'Geladak Kapal Asal',
                'description' => 'Risiko beralih di atas kapal muat; pengapalan laut dikelola pembeli.',
            ],
            [
                'code' => 'CIF',
                'name' => 'Cost, Insurance & Freight',
                'risk_point' => 'Pelabuhan Tujuan',
                'description' => 'Freight laut dan asuransi maritim dikelola hingga pelabuhan tujuan.',
            ],
            [
                'code' => 'CFR',
                'name' => 'Cost and Freight',
                'risk_point' => 'Pelabuhan Asal',
                'description' => 'Biaya angkut laut ditanggung penjual; asuransi ditutup pembeli.',
            ],
            [
                'code' => 'EXW',
                'name' => 'Ex Works (Pabrik)',
                'risk_point' => 'Pintu Pabrik Asal',
                'description' => 'Penyerahan di gudang asal; cocok bagi mitra dengan aliansi mandiri.',
            ],
            [
                'code' => 'DDP',
                'name' => 'Delivered Duty Paid',
                'risk_point' => 'Gudang Pembeli',
                'description' => 'Solusi turnkey mencakup seluruh bea masuk, pajak, hingga pintu gudang.',
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
        'items' => [
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
        'label' => 'JARINGAN GLOBAL',
        'headline' => 'Koridor Maritim & Konektivitas Pelabuhan Internasional',
        'description' => 'Kontrak keagenan resmi dan mitra pergudangan berikat kami menghubungkan arus komoditas secara langsung di pelabuhan tersibuk dunia.',
        'regions' => [
            [
                'name' => 'Hub Asia Tenggara',
                'countries' => 'Tanjung Priok (ID), Port Klang (MY), Jurong Port (SG), Laem Chabang (TH), Haiphong (VN)',
            ],
            [
                'name' => 'Koridor Asia Timur',
                'countries' => 'Shanghai, Ningbo-Zhoushan, Busan, Yokohama, Kaohsiung',
            ],
            [
                'name' => 'Pelabuhan Utama Eropa',
                'countries' => 'Rotterdam (NL), Antwerp-Bruges (BE), Hamburg (DE), Felixstowe (UK), Genoa (IT)',
            ],
            [
                'name' => 'Timur Tengah & Teluk Arab',
                'countries' => 'Jebel Ali (Dubai), Dammam, Hamad Port (Qatar), Khalifa Port (Abu Dhabi)',
            ],
            [
                'name' => 'Amerika Utara & Selatan',
                'countries' => 'Los Angeles / Long Beach, Houston, Santos (Brasil), Manzanillo (Meksiko)',
            ],
            [
                'name' => 'Afrika & Mediterania',
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
        'label' => 'KEUNGGULAN KOMPETITIF',
        'headline' => 'Mengapa Mitra Korporasi Mempercayakan Perdagangan Global Kepada Kami',
        'items' => [
            [
                'title' => 'Transparansi Biaya & Bebas Risiko Demurrage Tersembunyi',
                'description' => 'Kalkulasi pro-forma transparan mencakup ocean freight, Terminal Handling Charge (THC), dokumen pabean, serta buffer masa tinggal kontainer.',
            ],
            [
                'title' => 'Jaminan Slot Kontainer Bersama Jalur Pelayaran Tier-1',
                'description' => 'Alokasi ruang prioritas bahkan pada periode puncak musim ekspor melalui kontrak volume jangka panjang bersama operator pelayaran global.',
            ],
            [
                'title' => 'Ketertelusuran Uji Karantina & Sanitasi Lengkap',
                'description' => 'Pemeriksaan laboratorium resmi pra-pengapalan untuk mencegah penolakan karantina atau demurrage fumigasi di pelabuhan negara tujuan.',
            ],
            [
                'title' => 'Pertukaran Dokumen Digital & Pelacakan Kargo Real-Time',
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
        'label' => 'PERMINTAAN PENAWARAN (RFQ)',
        'headline' => 'Konsultasikan Kebutuhan Kargo Anda',
        'description' => 'Sampaikan spesifikasi komoditas, rute, dan volume. Tim trade desk kami merespons dalam 1x24 jam kerja.',
        'trade_types' => [
            'export' => 'Ekspor',
            'import' => 'Impor',
            'freight_only' => 'Freight',
            'consulting' => 'Konsultasi',
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
        'headline' => 'Siap Mengembangkan Ekpansi Perdagangan Ekspor Impor Anda?',
        'description' => 'Baik Anda memerlukan pengapalan kargo kontainer rutin maupun carter kapal curah untuk komoditas industri, tim ahli kami siap merancang rantai pasok yang andal.',
        'button' => [
            'label' => 'Hubungi Trade Desk Kami',
            'href' => '#rfq',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Footer
    |--------------------------------------------------------------------------
    */

    'footer' => [
        'description' => 'PT Altara Niaga Indonesia adalah badan usaha perdagangan internasional dan integrator logistik maritim multimoda yang menyediakan layanan sourcing komoditas terverifikasi, kepabeanan prioritas, dan freight forwarding global.',
        'links' => [
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
