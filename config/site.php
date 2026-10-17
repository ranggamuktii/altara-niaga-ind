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
        'name'            => 'Vanguard Maritime & Trade Corp',
        'short_name'      => 'Vanguard Trade',
        'tagline'         => 'Global Trade & Logistics Solutions',
        'slogan'          => 'Direct Sourcing, Certified Compliance, Seamless Global Transit',
        'email'           => 'trade-desk@vanguardtrade.com',
        'phone'           => '+62 21 5088 9200',
        'address'         => 'Financial Club Jakarta, 27th Floor, Jl. Jend. Sudirman Kav. 52-53, SCBD, Jakarta 12190',
        'registration_no' => 'NIB / SIUP: 9120004812391',
        'customs_code'    => 'EDI IDJKT / Kep-Dirjen BC 441/BC/2022',
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation
    |--------------------------------------------------------------------------
    */

    'navigation' => [
        ['label' => 'Home',        'href' => '#home'],
        ['label' => 'About',       'href' => '#about'],
        ['label' => 'Services',    'href' => '#services'],
        ['label' => 'Commodities', 'href' => '#commodities'],
        ['label' => 'Incoterms',   'href' => '#incoterms'],
        ['label' => 'Global Reach','href' => '#reach'],
        ['label' => 'RFQ / Quote', 'href' => '#rfq'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Hero Section
    |--------------------------------------------------------------------------
    */

    'hero' => [
        'headline'    => 'Premier Gateway for Cross-Border Bulk Trade & Logistics',
        'subheadline' => 'Connecting verified producers with global buyers across 40+ maritime trade corridors. Institutional-grade freight forwarding, customs clearance, and structured commodity trade execution.',
        'cta_primary' => [
            'label' => 'Request Quotation (RFQ)',
            'href'  => '#rfq',
        ],
        'cta_secondary' => [
            'label' => 'Trading Divisions',
            'href'  => '#commodities',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | About Section
    |--------------------------------------------------------------------------
    */

    'about' => [
        'label'       => 'Corporate Profile',
        'headline'    => 'Built on Integrity, Verified by Global Customs Standards',
        'description' => 'Operating at the crossroads of international trade finance and multi-modal logistics, Vanguard Trade bridges bilateral supply chains with uncompromising risk mitigation. We manage end-to-end import-export lifecycles—from farmgate and minehead sourcing to international port handling, surveyor assay verification, and direct door-to-door delivery.',
        'features'    => [
            [
                'title'       => 'Accredited Authorized Economic Operator (AEO)',
                'description' => 'Expedited priority green-lane customs clearance with automated electronic data interchange (EDI) across key regional sea and air ports.',
            ],
            [
                'title'       => 'Rigorous Surveyor & Lab Assay Oversight',
                'description' => 'Pre-shipment verification partnered with SGS, Sucofindo, and Bureau Veritas to guarantee Grade A specification conformity and phytosanitary safety.',
            ],
            [
                'title'       => 'Comprehensive Risk & Trade Finance Structuring',
                'description' => 'Full Institute Cargo Clauses (A) all-risk maritime insurance and streamlined Letter of Credit (L/C, SBLC, TT) documentation workflows.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Services Section
    |--------------------------------------------------------------------------
    */

    'services' => [
        'label'    => 'Full-Scope Capabilities',
        'headline' => 'Engineered for Flawless Trade Execution',
        'items'    => [
            [
                'icon'        => 'export',
                'title'       => 'Direct Export Management',
                'description' => 'Full handling of export declaration (PEB), Certificate of Origin (COO Form D, E, AK), surveyor assays, and bill of lading (B/L) issuance for outbound ocean vessels.',
            ],
            [
                'icon'        => 'import',
                'title'       => 'Import & Customs Brokerage',
                'description' => 'Specialized import duty classification (HS code optimization), quarantine compliance, Masterlist clearance, and bonded logistics park deconsolidation.',
            ],
            [
                'icon'        => 'logistics',
                'title'       => 'Multi-Modal Freight Forwarding',
                'description' => 'Contracted vessel space with top global carriers (Maersk, MSC, Evergreen) for FCL (Full Container Load), LCL, bulk breakbulk, and charter air cargo.',
            ],
            [
                'icon'        => 'compliance',
                'title'       => 'Trade Law & Tariff Compliance',
                'description' => 'Proactive regulatory auditing ensuring compliance with WTO, ASEAN Free Trade Area (AFTA), RCEP guidelines, and anti-dumping regulations.',
            ],
            [
                'icon'        => 'warehouse',
                'title'       => 'Bonded Warehousing & Storage',
                'description' => 'Temperature-controlled and dry bonded storage facilities located strategically within 15 km of major container terminals with automated WMS tracking.',
            ],
            [
                'icon'        => 'consulting',
                'title'       => 'Structured Trade Procurement',
                'description' => 'Targeted commodity supplier matching, price benchmarking, contract escrow drafting, and quality-risk distribution strategies.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Trading Divisions & Commodity Categories (Products Placeholder)
    |--------------------------------------------------------------------------
    | Modular structure for business products before finalized inventory.
    */

    'commodities' => [
        'label'       => 'Product Divisions',
        'headline'    => 'Core Commodity & Manufactured Sectors',
        'description' => 'We broker and supply high-demand commercial goods with guaranteed assay certificates, standardized packaging, and flexible Incoterms.',
        'items'       => [
            [
                'sector'      => 'Agri-Commodities & Food Ingredients',
                'code'        => 'HS CHAPTER 07 - 18',
                'description' => 'Specialty Arabica & Robusta coffee, dried spices (cinnamon, cloves, nutmeg), fermented cacao beans, desiccated coconut, and refined palm derivatives.',
                'packaging'   => 'Jute Bags (60 kg) / Flexibag / Bulk Dry Containers',
                'inspections' => 'Phytosanitary, Organic EU/USDA, SGS Assay',
            ],
            [
                'sector'      => 'Minerals, Metal Ores & Energy',
                'code'        => 'HS CHAPTER 25 - 28',
                'description' => 'High-grade silica sand, metallurgical coal, calcined bauxite, nickel matte, and refined industrial minerals for foundry and metallurgy applications.',
                'packaging'   => 'Jumbo Bags (1.0 - 1.5 MT) / Bulk Handymax Vessel',
                'inspections' => 'Sucofindo / CCIC / Bureau Veritas Assay',
            ],
            [
                'sector'      => 'Chemicals & Bio-Industrial Inputs',
                'code'        => 'HS CHAPTER 29 - 38',
                'description' => 'Oleochemicals (glycerine, fatty acids, stearic acid), natural rubber grades (SIR 20), bio-fertilizers, and technical resins.',
                'packaging'   => 'Steel Drums (200L) / ISO Tank / IBC Tote Containers',
                'inspections' => 'MSDS Compliance, REACH Ready, Certificate of Analysis (COA)',
            ],
            [
                'sector'      => 'Manufactured Goods & Industrial Components',
                'code'        => 'HS CHAPTER 60 - 84',
                'description' => 'OEM precision industrial fasteners, sustainable corrugated packaging solutions, functional technical textiles, and structural architectural hardware.',
                'packaging'   => 'Palletized Euro-Crates / 20ft & 40ft High Cube Container',
                'inspections' => 'ISO 9001:2015, Pre-Shipment Inspection (PSI)',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Incoterms 2020 Framework
    |--------------------------------------------------------------------------
    | Builds immense credibility with buyers and freight partners.
    */

    'incoterms' => [
        'label'       => 'Contract Standards',
        'headline'    => 'Supported Incoterms 2020 Delivery Terms',
        'description' => 'Transparent allocation of freight cost, insurance risk, and customs liability between buyer and seller.',
        'terms'       => [
            [
                'code'        => 'FOB',
                'name'        => 'Free On Board',
                'risk_point'  => 'Vessel Rail at Port of Origin',
                'description' => 'We deliver goods loaded onboard the buyer-designated vessel. Seller clears export customs.',
            ],
            [
                'code'        => 'CIF',
                'name'        => 'Cost, Insurance & Freight',
                'risk_point'  => 'Onboard Origin, Risk to Destination Port',
                'description' => 'We contract ocean freight and provide Institute Cargo Clauses marine insurance up to destination port.',
            ],
            [
                'code'        => 'CFR',
                'name'        => 'Cost and Freight',
                'risk_point'  => 'Port of Loading',
                'description' => 'We cover all ocean carriage freight costs to the named port of discharge. Buyer arranges own cargo insurance.',
            ],
            [
                'code'        => 'EXW / FCA',
                'name'        => 'Ex Works / Free Carrier',
                'risk_point'  => 'Factory Gate or Inland Carrier Hub',
                'description' => 'Optimal for multinational buyers with existing preferred shipping line volume contracts.',
            ],
            [
                'code'        => 'DDP',
                'name'        => 'Delivered Duty Paid',
                'risk_point'  => 'Buyer Door / Destination Warehouse',
                'description' => 'Turnkey service where Vanguard handles export, ocean transit, import tariffs, customs clearance, and local trucking.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Stats / Numbers Section
    |--------------------------------------------------------------------------
    */

    'stats' => [
        'headline' => 'Institutional Scale & Reliability',
        'items'    => [
            ['value' => '40+',    'label' => 'Maritime Ports & Hubs'],
            ['value' => '250K+',  'label' => 'Metric Tons Moved'],
            ['value' => '100%',   'label' => 'AEO Customs Compliance'],
            ['value' => '24 Hrs', 'label' => 'Target RFQ Response'],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Global Reach Section
    |--------------------------------------------------------------------------
    */

    'reach' => [
        'label'       => 'Trade Corridors',
        'headline'    => 'Active Trade Routes Across 5 Continents',
        'description' => 'Our liner agency contracts and customs bonded partners ensure direct transit across major deep-water ports.',
        'regions'     => [
            [
                'name'      => 'Southeast Asia Hub',
                'countries' => 'Tanjung Priok (ID), Port Klang (MY), Jurong Port (SG), Laem Chabang (TH), Haiphong (VN)',
            ],
            [
                'name'      => 'East Asia Corridor',
                'countries' => 'Shanghai, Ningbo-Zhoushan, Busan, Yokohama, Kaohsiung',
            ],
            [
                'name'      => 'European Maritime Hubs',
                'countries' => 'Rotterdam, Antwerp-Bruges, Hamburg, Felixstowe, Genoa',
            ],
            [
                'name'      => 'Middle East & Arabian Gulf',
                'countries' => 'Jebel Ali (Dubai), Dammam, Hamad Port, Khalifa Port (Abu Dhabi)',
            ],
            [
                'name'      => 'North & South Americas',
                'countries' => 'Los Angeles / Long Beach, Houston, Santos (BR), Manzanillo (MX)',
            ],
            [
                'name'      => 'Sub-Saharan & North Africa',
                'countries' => 'Durban, Port Said, Mombasa, Tangier Med',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Why Choose Us
    |--------------------------------------------------------------------------
    */

    'why_us' => [
        'label'    => 'Our Strategic Advantage',
        'headline' => 'Why Multinational Traders Entrust Their Cargo To Us',
        'items'    => [
            [
                'title'       => 'Zero Hidden Port Charges & Transparent Demurrage Terms',
                'description' => 'Upfront itemized pro-forma quotes detailing ocean freight, THC (Terminal Handling Charge), documentation, and detention buffer days.',
            ],
            [
                'title'       => 'Direct Booking with Tier-1 Shipping Alliances',
                'description' => 'Guaranteed container slots and space allocation even during peak season maritime congestion.',
            ],
            [
                'title'       => 'Strict Quarantine & Phytosanitary Traceability',
                'description' => 'Real-time lab testing traceability preventing cargo quarantine rejection or costly fumigation delays at destination.',
            ],
            [
                'title'       => 'Digital Tracking & Automated EDI Document Flow',
                'description' => 'Instant access to non-negotiable B/L copies, packing lists, commercial invoices, and real-time container GPS milestones.',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | RFQ / Interactive Inquiry Section
    |--------------------------------------------------------------------------
    */

    'inquiry' => [
        'label'       => 'Request for Quotation (RFQ)',
        'headline'    => 'Initiate Cargo Inquiries with Our Trade Desk',
        'description' => 'Submit your cargo volume, port of loading/discharge, and target delivery term. Our trade desk will review your specifications and furnish a comprehensive CIF/FOB pro-forma quotation.',
        'trade_types' => [
            'export'      => 'Export Shipment (Outbound)',
            'import'      => 'Import Shipment (Inbound)',
            'freight_only'=> 'Freight Forwarding Only',
            'consulting'  => 'Trade Compliance & Brokerage',
        ],
        'incoterms_options' => ['FOB', 'CIF', 'CFR', 'EXW', 'DDP', 'FCA', 'CIP', 'DAP'],
        'commodity_divisions' => [
            'Agri-Commodities & Food Ingredients',
            'Minerals, Metal Ores & Energy',
            'Chemicals & Bio-Industrial Inputs',
            'Manufactured Goods & Industrial Components',
            'Other Custom Commodities',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | CTA Section
    |--------------------------------------------------------------------------
    */

    'cta' => [
        'headline'    => 'Ready to Scale Your Cross-Border Trade Operations?',
        'description' => 'Whether you need chartered bulk vessel logistics or containerized FCL freight, our specialists are ready to architect your supply chain.',
        'button'      => [
            'label' => 'Submit RFQ Now',
            'href'  => '#rfq',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Footer
    |--------------------------------------------------------------------------
    */

    'footer' => [
        'description' => 'Vanguard Maritime & Trade Corp is an institutional trading house and multi-modal logistics forwarder providing certified commodity sourcing, customs clearance, and ocean freight forwarding.',
        'links'       => [
            'Core Divisions' => [
                ['label' => 'Agri-Commodities',     'href' => '#commodities'],
                ['label' => 'Minerals & Energy',    'href' => '#commodities'],
                ['label' => 'Chemicals & Polymers', 'href' => '#commodities'],
                ['label' => 'Manufactured Goods',   'href' => '#commodities'],
            ],
            'Trade Solutions' => [
                ['label' => 'Export Operations',    'href' => '#services'],
                ['label' => 'Customs Brokerage',    'href' => '#services'],
                ['label' => 'Incoterms Guide',      'href' => '#incoterms'],
                ['label' => 'Global Port Network',  'href' => '#reach'],
            ],
            'Governance & Compliance' => [
                ['label' => 'AEO Certification',    'href' => '#about'],
                ['label' => 'Surveyor Protocols',   'href' => '#about'],
                ['label' => 'Anti-Bribery Policy',  'href' => '#why-us'],
                ['label' => 'Terms of Carriage',    'href' => '#'],
            ],
        ],
        'socials' => [
            ['platform' => 'linkedin',  'href' => 'https://linkedin.com'],
            ['platform' => 'twitter',   'href' => 'https://x.com'],
            ['platform' => 'instagram', 'href' => 'https://instagram.com'],
        ],
    ],

];
