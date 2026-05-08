<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>ATELIER | Minimalist Luxury Fashion</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&amp;family=Playfair+Display:wght@500;600&amp;display=swap" rel="stylesheet" />
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
            -webkit-font-smoothing: antialiased;
        }
    </style>
</head>

<body class="text-on-surface">
    <!-- TopNavBar -->
    <nav class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md border-b border-outline-variant/30 transition-all duration-300">
        <div class="max-w-container-max mx-auto flex justify-between items-center h-20 px-md md:px-xl">
            <div class="flex-1 flex gap-md items-center">
                <div class="md:hidden">
                    <span class="material-symbols-outlined cursor-pointer">menu</span>
                </div>
                <div class="hidden md:flex gap-md">
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">New In</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Collections</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Designers</a>
                </div>
            </div>
            <div class="flex-shrink-0">
                <span class="font-h2 text-h2 tracking-tighter text-primary">ATELIER</span>
            </div>
            <div class="flex-1 flex justify-end items-center gap-md">
                <div class="hidden md:flex gap-md mr-md">
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Journal</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Archive</a>
                </div>
                <div class="flex items-center gap-md">
                    <span class="material-symbols-outlined cursor-pointer active:scale-95 transition-transform" data-icon="search">search</span>
                    <span class="material-symbols-outlined cursor-pointer active:scale-95 transition-transform" data-icon="person">person</span>
                    <span class="material-symbols-outlined cursor-pointer active:scale-95 transition-transform" data-icon="shopping_bag">shopping_bag</span>
                </div>
            </div>
        </div>
    </nav>
    <!-- Hero Section -->
    <section class="pt-20">
        <div class="relative h-[870px] w-full overflow-hidden">
            <img alt="Editorial Fashion" class="w-full h-full object-cover object-center" data-alt="A high-fashion editorial photograph featuring a model in a structured, oversized black wool coat standing against a stark, minimalist concrete wall. The lighting is soft and directional, creating deep shadows that emphasize the architectural lines of the garment. The overall aesthetic is one of quiet luxury, with a neutral color palette dominated by charcoal and ivory tones. The mood is sophisticated and avant-garde." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDev6rt7tQ8MgZnOQtu5Kpjjffoau0JaYf64XJpu4RM73P71VeSFQ-IzDZ6X4nIxXOBS2d4GhCptv3qwBgBcDykbkZYYI4fcT5LE1B3oe0xq6HjCsBYBm52lNwpL0rHly35HECsr5lcavIgEq8_cS1KtDLZ9UufkYa8JF_6G01MTbWaCQ_pipO0fh4JXHWI3dMQwWSH8Zpo-WFCv1nEJkLX_-JXXNsU0yOybOHLPHmmiya1z2vWrEDIyxUGKWESrevhTgWRpO0JjyhH" />
            <div class="absolute inset-0 bg-black/5"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-md">
                <span class="font-label-caps text-label-caps tracking-[0.3em] uppercase text-white mb-md">Autumn / Winter 2024</span>
                <h1 class="font-h1 text-h1 text-white max-w-2xl mb-lg leading-tight">The Art of Pure Form</h1>
                <button class="bg-white text-primary px-xl py-md font-button text-button uppercase tracking-widest hover:bg-primary hover:text-white transition-all duration-300">
                    Discover Collection
                </button>
            </div>
        </div>
    </section>
    <!-- Brand Philosophy -->
    <section class="py-xl max-w-container-max mx-auto px-md md:px-xl">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-xl items-center">
            <div class="order-2 md:order-1">
                <h2 class="font-h2 text-h2 mb-md">Quiet Sophistication</h2>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-lg mb-md leading-relaxed">
                    Atelier is founded on the belief that true luxury resides in the unspoken details. We prioritize exceptional fabrics, architectural silhouettes, and a palette of timeless neutrals.
                </p>
                <a class="font-label-caps text-label-caps border-b border-primary pb-1 inline-block hover:opacity-70 transition-opacity" href="#">Read Our Manifesto</a>
            </div>
            <div class="order-1 md:order-2 aspect-[4/5] bg-surface-container overflow-hidden">
                <img alt="Minimalist Texture" class="w-full h-full object-cover" data-alt="Close-up shot of high-quality cream-colored cashmere fabric draped elegantly over a minimalist wooden chair. The texture of the weave is visible, bathed in warm afternoon sunlight that creates a serene and tactile atmosphere. The color palette is composed of soft beige, warm whites, and light wood tones. The shot conveys a sense of high-end craftsmanship and material focus." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6ruRi0yLKRqcScLYVTAG2FboVow9u3aEjTlAZpugsOuYsFFkY8D2qkifshLAGzM6QgorMC04Dke6ZX9ssJQBLERXsNWXO-17X9yomcA_DMRCOwpw6w_yqNQv8wud8KiQsqNdl-qpaaubQjxspFIXRUe79a4mkMd1XDLeVWmn2cay-rsrtyYLcCb9xFZBpDei0d84jq_aPhPRh1IP0RAU1zhBCb7GSz-oXjqnWc1pYWlnjWvUEx_VvFoMGR2Bmu_wFAh70VOUtx7OC" />
            </div>
        </div>
    </section>
    <!-- New Arrivals Grid -->
    <section class="py-xl bg-surface-container-low">
        <div class="max-w-container-max mx-auto px-md md:px-xl">
            <div class="flex justify-between items-end mb-lg">
                <h2 class="font-h2 text-h2">New Arrivals</h2>
                <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#">View All</a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-gutter">
                <!-- Product 1 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] bg-white overflow-hidden relative mb-md">
                        <img alt="Structured Blazer" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A studio shot of a tailored, double-breasted blazer in a deep charcoal gray. The garment is shown on a minimalist model against a light gray background. The lighting is clean and professional, highlighting the sharp lapels and premium fabric quality. The overall aesthetic is minimalist and professional, perfectly capturing the quiet luxury brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJ7plvi5PYi4FS6UUFNAAxRmHvSa0yVyyHxXcJki6tS72YafnXyN2fH0cyvdCQ3NhyqiUPUo3-skdgLcVJJ4oyD1dJVhxBYyVdbd8fOybHvvj2wEjcgVHZp6eWGNzTdPnW26ifNl6S2NeQrLBBgIwS7aNc5w20vnce_XMdLW-U2tOEav_DIQyrmxBA-WoDeLqkGmojALLS7yHeicaTLKUQh5By28ajdKStjgsyaLO3zn5xrxo-BbQFZpXpgS1R8BH78XY-wL3pHlp7" />
                        <div class="absolute inset-x-0 bottom-0 p-md translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-white/80 backdrop-blur-sm">
                            <span class="font-button text-button uppercase w-full text-center block">Quick Add</span>
                        </div>
                    </div>
                    <h3 class="font-h3 text-h3 text-base mb-xs">Wool Gabardine Blazer</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">€540</p>
                </div>
                <!-- Product 2 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] bg-white overflow-hidden relative mb-md">
                        <img alt="Silk Trousers" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="An editorial shot of flowing wide-leg silk trousers in an ivory shade, paired with minimalist leather sandals. The model is captured in motion, emphasizing the fluid drape of the fabric. The setting is a bright, sunlit room with high ceilings and white walls, creating a clean, high-key lighting effect. The mood is effortless and elegant." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBf0j6C2F7fQEsJQCUC77eIId_GDzyEty0wz6ThznIBKwuZ2UnjUiHSg-P6MORt-0B-dncneG1-FsMvs_OZ3pYRS2RVAsRzF-cB58wUC4w0uOK1fwM13HoJ_jtJYxFBb92jEWBJ80cqA6ycHoOZ9wO2fUYo9bYScaVAapE2xtOyFhFT1OtkW9iizfixDFX5Ob59wZRa-O46FCUWxumLwAnr7T_frGWHn8NWSMdYLd1iY2U_onYVQUFz5OmJs3AnkFNuNygW1ODyWLnX" />
                        <div class="absolute inset-x-0 bottom-0 p-md translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-white/80 backdrop-blur-sm">
                            <span class="font-button text-button uppercase w-full text-center block">Quick Add</span>
                        </div>
                    </div>
                    <h3 class="font-h3 text-h3 text-base mb-xs">Fluid Silk Trousers</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">€320</p>
                </div>
                <!-- Product 3 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] bg-white overflow-hidden relative mb-md">
                        <img alt="Cashmere Knit" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A portrait shot of a model wearing a mock-neck cashmere sweater in a soft taupe color. The model has a neutral expression, looking directly at the camera. The background is a soft-focus interior with neutral tones. The lighting is soft and diffused, emphasizing the luxurious texture of the knitwear. The palette is muted and sophisticated." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIW2IO8Bp7kMNPo8qMRI8dhvGaKkiuFTM0nMsib27ufxyuoRT6liecJD6NhsEiD30Be0f514R3CsgXZuI50lq8lfMqPHqWx0kYP1F1uiIc4aKLunKaSWlF40PN3pslO-Am0AwNFggnjGhUzR-L-aTadC2k5Xs11yGinZTqvk4KlrZdRyBak87r8u2QkXkboPPGArCZ3DP7C1D-z8rPVXPu8iSWetCoqfsXIGrwc7dleEQnRvwIKsS7PIdhzvpxFPm9rBy2ZdrrUSEj" />
                        <div class="absolute inset-x-0 bottom-0 p-md translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-white/80 backdrop-blur-sm">
                            <span class="font-button text-button uppercase w-full text-center block">Quick Add</span>
                        </div>
                    </div>
                    <h3 class="font-h3 text-h3 text-base mb-xs">Essential Mock-Neck</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">€280</p>
                </div>
                <!-- Product 4 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] bg-white overflow-hidden relative mb-md">
                        <img alt="Leather Bag" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A still life shot of a minimalist black leather tote bag with subtle silver hardware. The bag is placed on a pristine white marble surface. The lighting is crisp and bright, creating sharp reflections and defining the smooth texture of the high-grade leather. The composition is clean and centered, embodying the brand's minimalist luxury ethos." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1EMxI19EJpMq0Q0_TKfN6VnKFSQhs_C4r-q7bTIBXo9DwTmrjDSVHvV_LkbXRTJWYSDEL5NfEowryb0sVYwVq2xqPYP6g5jNFj21urTNsjWd5LoCul1GCqahr84wRnKgwy4gPwyHJXvTgnNNKID9PZwi4x-FBhmytJuN6AOfxqTPWIrZDqbCziGKBU2SlX4Z9pzUhOA2cxR3dc2ewTgya9rmk5SVcRS6dr9uUTAF4K31L9fAxxeea5HvcCWMvaHduLLxd2r-qeG5m" />
                        <div class="absolute inset-x-0 bottom-0 p-md translate-y-full group-hover:translate-y-0 transition-transform duration-300 bg-white/80 backdrop-blur-sm">
                            <span class="font-button text-button uppercase w-full text-center block">Quick Add</span>
                        </div>
                    </div>
                    <h3 class="font-h3 text-h3 text-base mb-xs">Napa Leather Tote</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">€750</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Editorial Stories Section -->
    <section class="py-xl">
        <div class="max-w-container-max mx-auto px-md md:px-xl">
            <div class="mb-lg">
                <span class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant mb-base block text-center">Stories</span>
                <h2 class="font-h2 text-h2 text-center">The Atelier Journal</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-12 gap-gutter">
                <!-- Large Story -->
                <div class="md:col-span-8 group cursor-pointer overflow-hidden">
                    <div class="aspect-[16/9] mb-md overflow-hidden">
                        <img alt="Craftsmanship" class="w-full h-full object-cover grayscale transition-all duration-1000 group-hover:grayscale-0 group-hover:scale-105" data-alt="A documentary-style black and white photograph of an artisan's hands meticulously working on a garment in a bright, airy studio. Scattered on the large wooden table are spools of thread, measuring tapes, and fabric swatches. The lighting is natural and abundant, coming from large industrial windows. The mood is one of focused craftsmanship and timeless tradition." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEkifbNPr0mro3s5UuvVf1Td2WwBcRaC5NoQgby70qwpbZ6YQm-bUGy5lb9WP0XO_RjQ6x2o8DSIF4La_wteq3QmRV69KDNC682MBCEs7PjA_3tuqq6LmvGnddUDAJr95whhVSOkASUiD0kZ3JoiHd8DmDnUzZyezFeCklIZpS11LEe-KqfAklXbozFVOLMBrcs2XSdvue5HTtItvqOniBa0q7O5fClB0boplce4wp3SffGq6i3bxaE6ypzAJMHj--Nq4xgs9NzATd" />
                    </div>
                    <span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-widest">Process</span>
                    <h3 class="font-h2 text-h3 mt-base mb-md">Inside the Atelier: The Geometry of Tailoring</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-xl">Exploring the mathematical precision required to create our signature architectural silhouettes and why structure is the ultimate form of luxury.</p>
                </div>
                <!-- Small Story -->
                <div class="md:col-span-4 flex flex-col justify-end">
                    <div class="aspect-square mb-md bg-surface-container overflow-hidden group cursor-pointer">
                        <img alt="Materials" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" data-alt="A minimalist portrait of a man in a crisp white shirt against a neutral background. The lighting is soft and flattering, highlighting the impeccable fit of the shirt. The composition is balanced and serene, focusing on the simplicity and quality of basic wardrobe essentials. The palette is monochromatic and clean." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSJXLYv6ASCynDk1VC5WHsxadiLulMnYB6GHZ5GUVs20Oc5EgMr43maODXvfn8nEei8hxeu0XtYPwvLv9UhWlbmLg_icM3SEPE_nABJ5_YDosxf-U1Bl9RVWu8Y9fITyu_cH-kQTw7-TRlzX6d8s05R2wwSxnwaZYhGrt4PkBAfauG5RAgZrREOWyBgOBrmg4bVKRY3A60sQtk8JrCM28uxAnJRQfIqUqmUFF_GGtWRd0csCcoEHgpG1ENPz5yVyl8lDu8KS9sjkWw" />
                    </div>
                    <span class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-widest">Curation</span>
                    <h3 class="font-h2 text-h3 mt-base mb-md">The Neutral Palette</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">A guide to building a modular wardrobe using tonal layers and high-quality textures.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter -->
    <section class="py-xl bg-surface border-y border-outline-variant/20">
        <div class="max-w-container-max mx-auto px-md text-center">
            <h2 class="font-h2 text-h2 mb-md">Stay Informed</h2>
            <p class="font-body-md text-body-md text-on-surface-variant mb-lg max-w-md mx-auto">Receive curated updates on new collections and editorial stories from the Atelier.</p>
            <form class="max-w-lg mx-auto flex gap-base flex-col md:flex-row">
                <input class="flex-grow bg-transparent border-0 border-b border-primary py-md font-body-md focus:ring-0 focus:border-primary placeholder:text-on-surface-variant/50" placeholder="Email Address" type="email" />
                <button class="bg-primary text-white font-button text-button uppercase tracking-widest px-lg py-md active:scale-95 transition-transform" type="submit">Subscribe</button>
            </form>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-surface w-full pt-xl pb-lg border-t border-outline-variant/30">
        <div class="max-w-container-max mx-auto px-md md:px-xl grid grid-cols-1 md:grid-cols-4 gap-lg">
            <!-- Brand Column -->
            <div class="col-span-1 md:col-span-1">
                <span class="font-h3 text-h3 text-primary block mb-md">ATELIER</span>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed mb-md">
                    Curating a lifestyle of refined minimalism and enduring quality since 2024.
                </p>
                <div class="flex gap-md">
                    <span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors">public</span>
                    <span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors">alternate_email</span>
                    <span class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors">share</span>
                </div>
            </div>
            <!-- Links 1 -->
            <div>
                <h4 class="font-label-caps text-label-caps uppercase tracking-widest mb-md text-primary">Explore</h4>
                <ul class="space-y-sm">
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline transition-colors" href="#">About</a></li>
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Sustainability</a></li>
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Journal</a></li>
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Designers</a></li>
                </ul>
            </div>
            <!-- Links 2 -->
            <div>
                <h4 class="font-label-caps text-label-caps uppercase tracking-widest mb-md text-primary">Support</h4>
                <ul class="space-y-sm">
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline transition-colors" href="#">Care</a></li>
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Shipping</a></li>
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Contact</a></li>
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Privacy</a></li>
                </ul>
            </div>
            <!-- Branding / Logo large -->
            <div class="hidden md:flex flex-col justify-end items-end">
                <span class="font-h1 text-[64px] leading-none opacity-5 pointer-events-none select-none">ATELIER</span>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-md md:px-xl mt-xl pt-lg border-t border-outline-variant/10 flex flex-col md:flex-row justify-between items-center gap-md">
            <span class="font-body-sm text-body-sm text-on-surface-variant tracking-wide uppercase">© 2024 ATELIER MINIMALIST. ALL RIGHTS RESERVED.</span>
            <div class="flex gap-lg">
                <span class="font-label-caps text-label-caps text-on-surface-variant">Instagram</span>
                <span class="font-label-caps text-label-caps text-on-surface-variant">Pinterest</span>
                <span class="font-label-caps text-label-caps text-on-surface-variant">LinkedIn</span>
            </div>
        </div>
    </footer>
</body>

</html>