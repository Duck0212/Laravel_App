<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ATELIER | Seasonal Essentials</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&amp;family=Montserrat:wght@400;500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-high": "#ebe7e6",
                        "secondary-container": "#dfe0e0",
                        "surface-variant": "#e5e2e1",
                        "surface": "#fdf8f8",
                        "surface-dim": "#ddd9d8",
                        "on-surface": "#1c1b1b",
                        "on-primary": "#ffffff",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed-variant": "#454747",
                        "on-tertiary-fixed": "#241a00",
                        "background": "#fdf8f8",
                        "surface-bright": "#fdf8f8",
                        "on-tertiary-fixed-variant": "#574500",
                        "secondary-fixed": "#e2e2e2",
                        "primary-fixed": "#e5e2e1",
                        "on-primary-container": "#858383",
                        "secondary-fixed-dim": "#c6c6c7",
                        "surface-tint": "#5f5e5e",
                        "outline": "#747878",
                        "on-secondary": "#ffffff",
                        "secondary": "#5d5f5f",
                        "on-background": "#1c1b1b",
                        "on-primary-fixed-variant": "#474746",
                        "primary": "#000000",
                        "surface-container": "#f1edec",
                        "tertiary-fixed-dim": "#e9c349",
                        "on-secondary-fixed": "#1a1c1c",
                        "tertiary-fixed": "#ffe088",
                        "on-tertiary-container": "#4f3e00",
                        "error": "#ba1a1a",
                        "on-tertiary": "#ffffff",
                        "on-secondary-container": "#616363",
                        "on-primary-fixed": "#1c1b1b",
                        "primary-fixed-dim": "#c8c6c5",
                        "tertiary-container": "#cca730",
                        "outline-variant": "#c4c7c7",
                        "surface-container-low": "#f7f3f2",
                        "primary-container": "#1c1b1b",
                        "on-error": "#ffffff",
                        "inverse-primary": "#c8c6c5",
                        "surface-container-lowest": "#ffffff",
                        "inverse-on-surface": "#f4f0ef",
                        "inverse-surface": "#313030",
                        "on-surface-variant": "#444748",
                        "error-container": "#ffdad6",
                        "surface-container-highest": "#e5e2e1",
                        "tertiary": "#735c00"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "md": "24px",
                        "lg": "48px",
                        "sm": "12px",
                        "gutter": "24px",
                        "xl": "80px",
                        "container-max": "1440px",
                        "xs": "4px",
                        "base": "8px"
                    },
                    "fontFamily": {
                        "h2": ["Playfair Display"],
                        "button": ["Montserrat"],
                        "h1": ["Playfair Display"],
                        "body-sm": ["Montserrat"],
                        "body-md": ["Montserrat"],
                        "body-lg": ["Montserrat"],
                        "label-caps": ["Montserrat"],
                        "h3": ["Playfair Display"]
                    },
                    "fontSize": {
                        "h2": ["32px", {
                            "lineHeight": "1.3",
                            "letterSpacing": "0em",
                            "fontWeight": "500"
                        }],
                        "button": ["14px", {
                            "lineHeight": "1.0",
                            "letterSpacing": "0.05em",
                            "fontWeight": "500"
                        }],
                        "h1": ["48px", {
                            "lineHeight": "1.2",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "1.5",
                            "letterSpacing": "0.02em",
                            "fontWeight": "400"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "1.6",
                            "letterSpacing": "0.01em",
                            "fontWeight": "400"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "1.6",
                            "letterSpacing": "0.01em",
                            "fontWeight": "400"
                        }],
                        "label-caps": ["12px", {
                            "lineHeight": "1.0",
                            "letterSpacing": "0.1em",
                            "fontWeight": "600"
                        }],
                        "h3": ["24px", {
                            "lineHeight": "1.4",
                            "letterSpacing": "0.01em",
                            "fontWeight": "500"
                        }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        body {
            background-color: #fdf8f8;
            color: #1c1b1b;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .product-card-hover:hover .quick-add {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body class="font-body-md selection:bg-primary-fixed selection:text-on-primary-fixed">
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md border-b border-outline-variant/30">
        <div class="max-w-container-max mx-auto flex justify-between items-center h-20 px-md md:px-xl">
            <div class="flex-1 hidden md:flex gap-md">
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">New In</a>
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-primary border-b border-primary pb-1" href="#">Collections</a>
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Designers</a>
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Journal</a>
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Archive</a>
            </div>
            <div class="flex-1 md:text-center">
                <h1 class="font-h2 text-h2 tracking-tighter text-primary">ATELIER</h1>
            </div>
            <div class="flex-1 flex justify-end items-center gap-md">
                <button class="material-symbols-outlined text-primary cursor-pointer active:scale-95 transition-transform" data-icon="search">search</button>
                <button class="material-symbols-outlined text-primary cursor-pointer active:scale-95 transition-transform" data-icon="person">person</button>
                <button class="material-symbols-outlined text-primary cursor-pointer active:scale-95 transition-transform" data-icon="shopping_bag">shopping_bag</button>
                <button class="md:hidden material-symbols-outlined text-primary" data-icon="menu">menu</button>
            </div>
        </div>
    </nav>
    <main class="pt-20">
        <!-- Hero Section -->
        <header class="py-xl px-md md:px-xl max-w-container-max mx-auto text-center">
            <span class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant block mb-sm">Summer 2024</span>
            <h2 class="font-h1 text-h1 text-primary mb-md">Seasonal Essentials</h2>
            <p class="max-w-2xl mx-auto font-body-lg text-body-lg text-on-surface-variant">
                A curated selection of timeless silhouettes, crafted from premium sustainable fabrics to endure through the seasons. Designed with meticulous attention to detail and a commitment to quiet luxury.
            </p>
        </header>
        <!-- Filter and Sort Bar -->
        <section class="border-y border-outline-variant/30 sticky top-20 bg-surface z-40">
            <div class="max-w-container-max mx-auto px-md md:px-xl h-16 flex items-center justify-between">
                <div class="flex items-center gap-lg overflow-x-auto hide-scrollbar">
                    <div class="flex items-center gap-xs cursor-pointer hover:opacity-70 transition-opacity">
                        <span class="font-label-caps text-label-caps uppercase">Color</span>
                        <span class="material-symbols-outlined text-sm" data-icon="expand_more">expand_more</span>
                    </div>
                    <div class="flex items-center gap-xs cursor-pointer hover:opacity-70 transition-opacity">
                        <span class="font-label-caps text-label-caps uppercase">Size</span>
                        <span class="material-symbols-outlined text-sm" data-icon="expand_more">expand_more</span>
                    </div>
                    <div class="flex items-center gap-xs cursor-pointer hover:opacity-70 transition-opacity">
                        <span class="font-label-caps text-label-caps uppercase">Price Range</span>
                        <span class="material-symbols-outlined text-sm" data-icon="expand_more">expand_more</span>
                    </div>
                    <div class="flex items-center gap-xs cursor-pointer hover:opacity-70 transition-opacity">
                        <span class="font-label-caps text-label-caps uppercase">Fabric</span>
                        <span class="material-symbols-outlined text-sm" data-icon="expand_more">expand_more</span>
                    </div>
                </div>
                <div class="flex items-center gap-sm">
                    <span class="hidden md:block font-body-sm text-body-sm text-on-surface-variant italic">Showing 42 Items</span>
                    <button class="flex items-center gap-xs cursor-pointer">
                        <span class="font-label-caps text-label-caps uppercase">Sort By</span>
                        <span class="material-symbols-outlined text-sm" data-icon="sort">sort</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- Product Grid -->
        <section class="max-w-container-max mx-auto px-md md:px-xl py-xl">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-x-gutter gap-y-xl">
                <!-- Product 1 -->
                <div class="group cursor-pointer product-card-hover">
                    <div class="relative overflow-hidden aspect-[3/4] bg-surface-container-low mb-md">
                        <img alt="Luxury linen dress" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A high-fashion studio shot of a woman wearing a floor-length minimalist cream linen dress. The lighting is soft and directional, creating gentle shadows that emphasize the premium fabric texture. The background is a clean, neutral off-white, maintaining a quiet luxury aesthetic. The mood is sophisticated and serene, capturing the essence of minimalist editorial fashion." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA_ZDFgCrwCLtJJIgP47Z-fHC1Len2ndbFm66NK0zoaA1X03rQfKIh_S2dXwL8n9HzVPRPgjmUCKqTFaFty3Rwo7TP3wy8LlbBOOtMCTrRofqd_EWzwNb4gDhZ8kgA4Lq6BXMvMsEZ-EbELMfAcUXQ6mMSUySvI01LKxd95JoZ0djxldg7fIO044-Rvc7-0moT4Qn10yobhtqNAdH03qwcAmspplr6y70tm-3F65y71IJntjpvgx8MgdhVBi-Mwjgk3h435zcG47f8A" />
                        <div class="quick-add absolute bottom-0 left-0 w-full bg-white/80 backdrop-blur-sm py-4 text-center translate-y-full opacity-0 transition-all duration-300 font-button text-button uppercase tracking-widest">
                            Quick Add
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-h3 text-h3 text-primary">Sculpted Linen Maxi</h3>
                        <p class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Raw Silk Blend</p>
                        <p class="font-body-md text-body-md text-primary mt-2">$420.00</p>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="group cursor-pointer product-card-hover">
                    <div class="relative overflow-hidden aspect-[3/4] bg-surface-container-low mb-md">
                        <img alt="Oversized tailored blazer" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A sophisticated editorial photograph of a tailored oversized blazer in deep charcoal black, draped over a minimalist mannequin against a soft gray architectural background. The image uses high-contrast lighting to highlight the precision of the stitching and the luxurious weight of the wool fabric. The aesthetic is modern, professional, and understated, reflecting a high-end fashion catalog style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJsXkSpE2_Biro7kLHlJCu5gBBd7BlIvAqo2jZBCYBxurYxC-SLmjQksz8sWImUf67SepQqBRlFLDJnGO5Gp85_nHqCZwINkJ_IAUlY-eRW_HP9659ixJay54H99b7I3dxF8JvL6Y0UwMyLj1OWZxOHlvz5af1JDvC6ExFXjCykEGNJadeezl7ADqFdy9uUFj4pEbji_jA8YX7C5Ag-qjb849_pEA4eQbE6zPR3dbx3ogKEXezyKs7dQY-DKbx8qgNAEe1vdwvx6MH" />
                        <div class="quick-add absolute bottom-0 left-0 w-full bg-white/80 backdrop-blur-sm py-4 text-center translate-y-full opacity-0 transition-all duration-300 font-button text-button uppercase tracking-widest">
                            Quick Add
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-h3 text-h3 text-primary">Architectural Blazer</h3>
                        <p class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Italian Merino Wool</p>
                        <p class="font-body-md text-body-md text-primary mt-2">$850.00</p>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="group cursor-pointer product-card-hover">
                    <div class="relative overflow-hidden aspect-[3/4] bg-surface-container-low mb-md">
                        <img alt="Minimalist leather sandals" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A close-up, artistic shot of handcrafted minimalist leather sandals placed on a smooth, sun-drenched stone surface. The lighting is warm and natural, evoking a summer morning in the Mediterranean. The focus is sharp on the grain of the fine black leather and the clean lines of the design. The overall composition is balanced and peaceful, emphasizing artisanal quality and quiet luxury." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDklOrLbArg0KIzQKSDgTLIaVyIQk7CATEVeNhkczJj8JlfWzSyMKYhDzhvL2YDgIVZjBGbqcx17AsJ6iLiR6h6rDWwHkgDGc5Wq9tynaS7iqDItzvyU1HNSImOj0mnufwvTVaG_y4End3V9WissBGGV7LJQiW2H-t4-7WMteVDU5Jcs3KEZ09nzCkCsru-5PWdufGuMzkGjwb2rU7ipPzfClu70xW98SHznC2ZKBkAiTdSx-xBop9Jb7JSpN1M83qSt0EbQeo-rjz" />
                        <div class="quick-add absolute bottom-0 left-0 w-full bg-white/80 backdrop-blur-sm py-4 text-center translate-y-full opacity-0 transition-all duration-300 font-button text-button uppercase tracking-widest">
                            Quick Add
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-h3 text-h3 text-primary">The Monolith Sandal</h3>
                        <p class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Calfskin Leather</p>
                        <p class="font-body-md text-body-md text-primary mt-2">$290.00</p>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="group cursor-pointer product-card-hover">
                    <div class="relative overflow-hidden aspect-[3/4] bg-surface-container-low mb-md">
                        <img alt="Wide leg trousers" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="An editorial full-body shot of a model wearing wide-leg fluid trousers in a soft taupe color. The trousers are styled with a simple white ribbed tank top, emphasizing the silhouette and the way the fabric moves. The setting is a minimalist concrete studio with soft, diffused daylight. The image conveys a sense of effortless elegance and modern comfort in a monochromatic color palette." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDQFqPXdwIpdi37urCh5jmv4gVZTNMgTk7viYl4bnzMMQ3wEpCN5BvUcWrA9396kV5MN5dY4x3_PiKTKPfdiDMEph2tDvjOX2DlwMB05WjifwibWKUCOlGLDYy2xCCtIe6Lnwi5SilN7EqQTDps6qh97eu1rp2jgTrBxBeEJjVwY4uFqyKkM-skpAD1O4i5CFsgzB65_qHssiXwAoT8IxrWPBYPzlbo60uqJIKxhQ--bWwG6hWk3-y75E--QnMfXJyBTwglsKpfT3B" />
                        <div class="quick-add absolute bottom-0 left-0 w-full bg-white/80 backdrop-blur-sm py-4 text-center translate-y-full opacity-0 transition-all duration-300 font-button text-button uppercase tracking-widest">
                            Quick Add
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-h3 text-h3 text-primary">Fluid Wide-Leg Trouser</h3>
                        <p class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Tencel Twill</p>
                        <p class="font-body-md text-body-md text-primary mt-2">$310.00</p>
                    </div>
                </div>
                <!-- Product 5 -->
                <div class="group cursor-pointer product-card-hover">
                    <div class="relative overflow-hidden aspect-[3/4] bg-surface-container-low mb-md">
                        <img alt="Silk slip top" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A delicate, close-up image of a shimmering silk camisole in a pearlescent white tone hanging on a thin wooden hanger against a dark charcoal background. The low-key lighting creates a dramatic contrast, highlighting the liquid-like sheen of the silk and the thin adjustable straps. The aesthetic is intimate, luxurious, and refined, focusing on material excellence." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC1v-x0LihJmuWpN9zRRQzhjhBAEDDjcGmDPdXjgXCb7pu1166KPS8V_dDpcwqvDgp6PImwDtPkhp0kjZt5ooEDbRJ_zpxsMskIBwta_CHYshZgCT4_2G79xe5ZG7kSFN6d1Z_U22p8rVIqcDwtjXpkeOTlTk-QHhYJm7Ele8C_aY16WwDpEMtkN26QRDEDZ2rzUjQ4ZtONrz7esFmYoHY0HcbeSLPEr13uDCNwcyHfRDXj6nmuxmzlYg5ixdDMYF5JgolKgESZimAJ" />
                        <div class="quick-add absolute bottom-0 left-0 w-full bg-white/80 backdrop-blur-sm py-4 text-center translate-y-full opacity-0 transition-all duration-300 font-button text-button uppercase tracking-widest">
                            Quick Add
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-h3 text-h3 text-primary">Liquid Silk Camisole</h3>
                        <p class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">100% Mulberry Silk</p>
                        <p class="font-body-md text-body-md text-primary mt-2">$185.00</p>
                    </div>
                </div>
                <!-- Product 6 -->
                <div class="group cursor-pointer product-card-hover">
                    <div class="relative overflow-hidden aspect-[3/4] bg-surface-container-low mb-md">
                        <img alt="Knitted wool sweater" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A beautiful detail shot of a chunky, hand-knitted oversized sweater in a deep oatmeal hue. The lighting is high-key and soft, showing the intricate cable knit patterns and the fuzzy texture of the wool. The background is a minimalist light wood surface. The mood is cozy yet high-end, representing a modern take on heritage knitwear in a clean, minimalist setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCCU1kXtivqqRCkfmX9-D4vMhCmIkHODOl3T8LK1ab59kb7Yb0E0VNit7S4ObwPKB_M0oSrzuMcZKT8pZAv1ccBThkMTAevtuyg2_73CT_hH-A4bkfIhNJRlrMqCBZ8Gr1F5ED6kXEoP4GbC8CzeV8ysCFjwTsDpStnbCVityNwlxLMYkef9suYJBohh5qX9MjBz3o_YuvvryGE50S_DdQ4QewXmvRkxNHWxvIH7CBbtIu3Ruslard09KLUHOZNbmK09I_GwKn9fL1C" />
                        <div class="quick-add absolute bottom-0 left-0 w-full bg-white/80 backdrop-blur-sm py-4 text-center translate-y-full opacity-0 transition-all duration-300 font-button text-button uppercase tracking-widest">
                            Quick Add
                        </div>
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-h3 text-h3 text-primary">Heritage Cable Knit</h3>
                        <p class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Organic Highland Wool</p>
                        <p class="font-body-md text-body-md text-primary mt-2">$540.00</p>
                    </div>
                </div>
            </div>
            <!-- Pagination -->
            <div class="mt-xl flex items-center justify-center gap-md border-t border-outline-variant/30 pt-lg">
                <button class="material-symbols-outlined text-on-surface-variant" data-icon="chevron_left">chevron_left</button>
                <div class="flex gap-md">
                    <span class="font-label-caps text-label-caps text-primary border-b border-primary">1</span>
                    <span class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary cursor-pointer transition-colors">2</span>
                    <span class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary cursor-pointer transition-colors">3</span>
                    <span class="font-label-caps text-label-caps text-on-surface-variant">...</span>
                    <span class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary cursor-pointer transition-colors">8</span>
                </div>
                <button class="material-symbols-outlined text-on-surface-variant hover:text-primary" data-icon="chevron_right">chevron_right</button>
            </div>
        </section>
        <!-- Newsletter / Editorial Component -->
        <section class="bg-surface-container py-xl">
            <div class="max-w-container-max mx-auto px-md md:px-xl grid grid-cols-1 md:grid-cols-2 items-center gap-xl">
                <div>
                    <h2 class="font-h2 text-h2 text-primary mb-md">The Journal: Designing Permanence</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant mb-lg">
                        Read our latest piece on the intersection of modern minimalism and ethical craftsmanship. Discover the stories behind our materials and the artisans who bring them to life.
                    </p>
                    <button class="font-button text-button uppercase tracking-widest px-xl py-4 bg-primary text-on-primary hover:opacity-90 transition-opacity">
                        Read More
                    </button>
                </div>
                <div class="aspect-video bg-surface-dim overflow-hidden">
                    <img alt="Behind the scenes at the atelier" class="w-full h-full object-cover grayscale" data-alt="A black and white cinematic photograph showing the hands of an artisan working with a vintage sewing machine in a sun-drenched studio. Dust particles dance in the light rays coming through large industrial windows. The scene is quiet and focused, emphasizing the slow fashion movement and the artisanal dedication to quality. The background shows rolls of premium fabric and minimalist sketches pinned to a wall." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDkGcR1rDi3TM_BlNid3VMnWjpDx6wbFePQr3ihQMkqE7n3MQ67XcZFcDLoQv2-Wna62US_kp-uYuylpQY5vz7Sz7eBrnAavGL3A2yN-DDme1UpGwjgGPmbfC_QiTCwPxAUatFmoO7_kIgOkkGpHaPwq9h2w-IxIyNEcy5SVNB1hjuocdWcQJvLGnxNj9AqTUC6olbJOLLV-jd7ffV-NLyy9tUc1M7eAbZZV3PiZ7q9OF-dbH0gN2nBLHLW525RokVeOHOPBBwExoi5" />
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="w-full pt-xl pb-lg border-t border-outline-variant/30 bg-surface">
        <div class="max-w-container-max mx-auto px-md md:px-xl grid grid-cols-1 md:grid-cols-4 gap-lg">
            <div class="md:col-span-1">
                <h3 class="font-h3 text-h3 text-primary mb-md">ATELIER</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant max-w-xs">
                    Curating a lifestyle of quiet luxury and enduring design. Follow our journey towards a more sustainable and considered future.
                </p>
            </div>
            <div class="flex flex-col gap-sm">
                <h4 class="font-label-caps text-label-caps uppercase tracking-widest text-primary mb-base">Shop</h4>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">New In</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">Collections</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">Designers</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">Archive</a>
            </div>
            <div class="flex flex-col gap-sm">
                <h4 class="font-label-caps text-label-caps uppercase tracking-widest text-primary mb-base">About</h4>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">About</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">Sustainability</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">Care</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">Contact</a>
            </div>
            <div class="flex flex-col gap-sm">
                <h4 class="font-label-caps text-label-caps uppercase tracking-widest text-primary mb-base">Support</h4>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">Shipping</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">Returns</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline transition-all duration-300" href="#">Privacy</a>
                <div class="flex gap-md mt-sm">
                    <span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer" data-icon="public">public</span>
                    <span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer" data-icon="brand_awareness">brand_awareness</span>
                </div>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-md md:px-xl mt-xl pt-lg border-t border-outline-variant/10 text-center">
            <p class="font-body-sm text-body-sm text-on-secondary-fixed-variant tracking-wide">
                © 2024 ATELIER MINIMALIST. ALL RIGHTS RESERVED.
            </p>
        </div>
    </footer>
</body>

</html>