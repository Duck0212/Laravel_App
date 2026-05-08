<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&amp;family=Playfair+Display:wght@500;600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
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
                            "letterSpacing": "0.15em",
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
            font-size: 20px;
        }

        body {
            background-color: #fdf8f8;
            color: #1c1b1b;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 2px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #f1edec;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #000000;
        }
    </style>
</head>

<body class="font-body-md selection:bg-primary selection:text-on-primary">
    <!-- TopNavBar -->
    <header class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md border-b border-outline-variant/30">
        <div class="max-w-container-max mx-auto flex justify-between items-center h-20 px-md md:px-xl">
            <div class="flex items-center gap-lg">
                <a class="font-h2 text-h2 tracking-tighter text-primary" href="#">ATELIER</a>
                <nav class="hidden md:flex gap-md">
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-primary border-b border-primary pb-1" href="#">New In</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Collections</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Designers</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Journal</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Archive</a>
                </nav>
            </div>
            <div class="flex items-center gap-md">
                <button class="cursor-pointer active:scale-95 transition-transform hover:opacity-70">
                    <span class="material-symbols-outlined" data-icon="search">search</span>
                </button>
                <button class="cursor-pointer active:scale-95 transition-transform hover:opacity-70">
                    <span class="material-symbols-outlined" data-icon="person">person</span>
                </button>
                <button class="cursor-pointer active:scale-95 transition-transform hover:opacity-70 relative">
                    <span class="material-symbols-outlined" data-icon="shopping_bag">shopping_bag</span>
                    <span class="absolute -top-1 -right-1 text-[8px] bg-primary text-on-primary w-3 h-3 flex items-center justify-center rounded-full">0</span>
                </button>
            </div>
        </div>
    </header>
    <main class="pt-20">
        <div class="max-w-container-max mx-auto px-md md:px-xl py-lg">
            <div class="flex flex-col md:flex-row gap-lg">
                <!-- Product Gallery -->
                <div class="w-full md:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-base">
                    <div class="aspect-[3/4] bg-surface-container overflow-hidden">
                        <img alt="Main Product view" class="w-full h-full object-cover grayscale" data-alt="A high-resolution, editorial fashion photograph of a structured charcoal wool blazer. The garment is displayed against a stark, minimalist white studio background with soft, diffused top-lighting that highlights the intricate fabric texture and precise tailoring. The overall mood is sophisticated, professional, and reflects a quiet luxury aesthetic with deep blacks and clean whites." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDriaCWvQoNLERGf5k5Ms_iMrkAeDoV_-nKATatfwHVVHxtGiygpUlIgoDwfM3bKjUyKqdUbPCLYeAmDj-W8o55dnpaqUBcLhpCHEKKbzp8M0zCxtm9dZAHnKpk6HmLvP8FXk71rFoPQggD52p8gVHHeyA17y-d4iCKwfV4fujjBVAhp0SjW-mTPJdNJGN1LAVz5jFRN6rCPlHpFeJ42Y2RDTKz-QFZJCEwMs0mRruaQF55cGh0d7WqPVoYA8iF_zSS2ZNxXfLOuUxB" />
                    </div>
                    <div class="aspect-[3/4] bg-surface-container overflow-hidden">
                        <img alt="Detail Product view" class="w-full h-full object-cover grayscale" data-alt="Close-up detail of a charcoal wool coat showcasing the fine stitching and premium horn buttons. The lighting is low-key and dramatic, casting gentle shadows that emphasize the high-end craftsmanship. The color palette is monochromatic, sticking to deep charcoals and soft off-whites, perfectly capturing the essence of minimalist luxury fashion." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDW_Cz7ZAr-GQHrJ0CS5wZmUAn729DSdwTL18FYdTPKXTlNR0hs1C8QICPRERUc-lmIeklEbNyqn8M1jNI2vB4r9w5ngxqREr55HpmBg10YEa1666eTgdTeYgBYtdcfOHPZG3d168-XmeF8NFecYwaynBZoxyU7u2xfte2yvew6hJj8eVg2UBU7euw-GDE3k7b-4e--fdJQqZFxHcisN8DVlrABrKxYG5pW1OG88Q4AW8zMpiHwYIJZoyajUzDH7MD1L4ky5tqdLADH" />
                    </div>
                    <div class="aspect-[3/4] bg-surface-container overflow-hidden">
                        <img alt="Back Product view" class="w-full h-full object-cover grayscale" data-alt="A full-length back profile of a model wearing a minimalist wool blazer in a spacious, sun-drenched architectural gallery. The setting features clean lines and smooth concrete textures that complement the garment's structure. The lighting is bright and airy, creating a serene and modern atmosphere that highlights the elegant silhouette and drape of the piece." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIE_dzVJYVVGCEgyI8Pt7Wsk9XNufY22fGh18a6ZT9O_906rqV6UbzpxkqvVZ7fOE-xsPRbWPqfGI2_RXDk3QoAE0SRLO9KN0pt0FlA0t2snFi8qFnqv3hTFgMBrxb5WN_4lGi3pwt4bxyaLeh9a2P8zt5nIW9Sx0GUJazE0gbIo885D83NI9i0OHAhjyOG3QeNSD0ede8mzzdUxVEL7Nnk5beAK0yeva1wPWw0li0AZhhkXcbpmYI3MEEhwFpewlbLmxlVl_6YXHw" />
                    </div>
                    <div class="aspect-[3/4] bg-surface-container overflow-hidden">
                        <img alt="Styling view" class="w-full h-full object-cover grayscale" data-alt="An artistic, slightly out-of-focus shot of a curated outfit featuring the charcoal wool blazer paired with wide-leg trousers. The composition is reminiscent of a high-end fashion magazine spread, with plenty of negative space and a focus on form and texture. The lighting is soft and natural, emphasizing the professional confidence and curated elegance of the brand." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOKbw1ypINUwPxZJ4ZlBKLMWt-h0ndSLhn5HIjaR2jyE1076md4wyxrIhTCDytajI4jJMRJfDQkw2csTFG6MXEvK55XbCy9FxxIIciNyViLwiFLhonmY6hA12So9SOTvLs04rxA9ggLZDedQ0ZoTAfDv6fO2NlD0Wc6nIoCJiawKOs2eEONNykVLktyG5wPX1vNgrZqa5Kuw6_58RkPTE8LS7kc0vh8z82Xxv6UsfdwnrW9kk0bg59mx4A-i1U7KQSt9sW3WQwsica" />
                    </div>
                </div>
                <!-- Product Selection Sidebar -->
                <div class="w-full md:w-1/3 md:sticky md:top-32 self-start flex flex-col gap-lg">
                    <section>
                        <div class="flex justify-between items-baseline mb-xs">
                            <h1 class="font-h1 text-h1 tracking-tighter">Sculptural Wool Blazer</h1>
                        </div>
                        <p class="font-body-lg text-body-lg text-on-surface-variant mb-md">$1,250.00 USD</p>
                        <p class="font-body-md text-body-md text-on-surface leading-relaxed">
                            A masterclass in precision tailoring. This sculptural piece is crafted from ethically sourced virgin wool, featuring structured shoulders and a clean, single-breasted silhouette that redefines modern professional wear.
                        </p>
                    </section>
                    <section class="flex flex-col gap-sm">
                        <div class="flex justify-between items-center">
                            <label class="font-label-caps text-label-caps uppercase text-on-surface">Select Size</label>
                            <button class="font-label-caps text-label-caps uppercase text-on-surface-variant underline hover:text-primary transition-colors">Size Guide</button>
                        </div>
                        <div class="grid grid-cols-4 gap-xs">
                            <button class="py-sm border border-primary bg-primary text-on-primary font-label-caps text-center">36</button>
                            <button class="py-sm border border-outline-variant hover:border-primary transition-colors font-label-caps text-center">38</button>
                            <button class="py-sm border border-outline-variant hover:border-primary transition-colors font-label-caps text-center">40</button>
                            <button class="py-sm border border-outline-variant hover:border-primary transition-colors font-label-caps text-center opacity-40 cursor-not-allowed">42</button>
                        </div>
                    </section>
                    <section class="flex flex-col gap-sm">
                        <button class="w-full bg-primary text-on-primary py-md font-button uppercase tracking-widest hover:opacity-90 transition-opacity active:scale-[0.98]">
                            Add to Bag
                        </button>
                        <button class="w-full border border-primary text-primary py-md font-button uppercase tracking-widest hover:bg-surface-container transition-colors active:scale-[0.98]">
                            Wishlist
                        </button>
                    </section>
                    <!-- Accordion Details -->
                    <div class="border-t border-outline-variant/30">
                        <details class="group border-b border-outline-variant/30 py-md" open="">
                            <summary class="flex justify-between items-center cursor-pointer list-none font-label-caps text-label-caps uppercase">
                                Details
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <div class="pt-sm font-body-sm text-on-surface-variant space-y-base">
                                <p>— 100% Virgin Wool, Lined in Cupro</p>
                                <p>— Interior pockets for modern utility</p>
                                <p>— Peak lapel with hand-finished stitching</p>
                                <p>— Responsibly made in our Paris atelier</p>
                            </div>
                        </details>
                        <details class="group border-b border-outline-variant/30 py-md">
                            <summary class="flex justify-between items-center cursor-pointer list-none font-label-caps text-label-caps uppercase">
                                Fit &amp; Sizing
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <div class="pt-sm font-body-sm text-on-surface-variant">
                                <p>Designed for a structured, slightly oversized silhouette. We recommend taking your true size for the intended look, or sizing down for a more classic fit.</p>
                                <p class="mt-base">Model is 178cm and wears a size 36.</p>
                            </div>
                        </details>
                        <details class="group border-b border-outline-variant/30 py-md">
                            <summary class="flex justify-between items-center cursor-pointer list-none font-label-caps text-label-caps uppercase">
                                Sustainability
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <div class="pt-sm font-body-sm text-on-surface-variant">
                                <p>Our wool is sourced from certified regenerative farms in Italy. We use a circular production model, ensuring minimal waste and fair wages for all artisans involved in the process.</p>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Products / Editorial Section -->
        <section class="max-w-container-max mx-auto px-md md:px-xl py-xl border-t border-outline-variant/30">
            <h2 class="font-h3 text-h3 mb-lg text-center">Complete the Silhouette</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                <!-- Related 1 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] bg-surface-container overflow-hidden mb-md">
                        <img alt="Related item 1" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105" data-alt="A minimalist fashion portrait of high-waisted wide-leg charcoal trousers hanging against a white gallery wall. The lighting is clean and architectural, highlighting the crisp center crease and the luxurious texture of the wool blend. The aesthetic is strictly minimalist and high-end, focusing on form and monochromatic tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCNkrzjBIuQTkgkydv7cHWOy04EGlZ3WqYSn3Rh7U1LslUuK9MJsWrRlR2GvHJfKPow9bdpO-pAp9PIEq0-CQT1dfpmKy5PhVMh1tENm5mtnrzPliFj7kdCyrD73P9rBMszQevc3jo2vkbHI3RHzpN3oTaY2FllolbVP3X0xc1S6HmMDVGDSqmgt_B9OOFhYcgQIQvTdfX7Y7nnQrzrPuj5tVj75EE1lCMWjczpjhG1ZM_PvScjHKoO_Mh0hBW6HS0U_vRx7CRvZhgQ" />
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <h4 class="font-h3 text-body-md font-semibold">Tapered Wool Trouser</h4>
                            <p class="font-body-sm text-on-surface-variant">Charcoal</p>
                        </div>
                        <span class="font-body-md">$680.00</span>
                    </div>
                </div>
                <!-- Related 2 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] bg-surface-container overflow-hidden mb-md">
                        <img alt="Related item 2" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105" data-alt="Close-up of minimalist black leather ankle boots with a square toe and sculptural heel, set on a smooth concrete floor. The lighting is moody and focused, picking up the subtle sheen of the premium calf leather. The environment is a clean, modern space that reflects the quiet luxury brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC8_qqhVxYOAuZ00St-eQtWOFKMMYpiPnEbDZXgfI_0OyQ-8hbaGTwUpNLl8pbFHOrkUcOyKWwB6hsnjDCOoJHjSqZRmncSsf3hsUri9mwK2o0DdyJ-KylwNKWgygGF-7I_Iw_xaY-bC01w2Ps1JAKo2rJm96p1usqRP0msOK0XAG1JBZkK1cY-o5zeeM0JiGZcgM3rSX626Vii21Z5tvF_oju9-PPL6v9r7SWJ7RSodXSNG3pBm7dN_pFnzjdZZgTpW6PVoQ0GRm2m" />
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <h4 class="font-h3 text-body-md font-semibold">Sculptural Leather Boot</h4>
                            <p class="font-body-sm text-on-surface-variant">Onyx</p>
                        </div>
                        <span class="font-body-md">$850.00</span>
                    </div>
                </div>
                <!-- Related 3 -->
                <div class="group cursor-pointer">
                    <div class="aspect-[3/4] bg-surface-container overflow-hidden mb-md">
                        <img alt="Related item 3" class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-105" data-alt="An editorial shot of a sheer white silk blouse styled under a blazer, draped elegantly over a minimalist wooden chair. The lighting is soft and warm, creating a high-contrast interaction between the delicate silk and the dark wood. The scene is tranquil and evokes a sense of artisanal quality and timeless style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxbE8BKjCoPpWM678hzgjuFGbaqMOLkQpX6Z2sJBibb36L9VV4Pb_FL329uTjfYBMNBdsFHPEaDfDW6rphwr-RNT9qA0lXWBnJfV0ikRIbwWY3JjXV5-IuK7LkOGR8TQdyO8NItJFq_QZvN-0D-KzwHaYuvbEuryyHfjqrPci5OKmEc5CHcuK3V8ilyAR0Jm-fybK_wMA7r-3M3Hq6u8F_ffoq_9PyBIz-1Ks1mHjIQadoP4pwrH55wJPotiYIa2jt25z4a-q5k3vz" />
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <h4 class="font-h3 text-body-md font-semibold">Fine Silk Blouse</h4>
                            <p class="font-body-sm text-on-surface-variant">Ivory</p>
                        </div>
                        <span class="font-body-md">$420.00</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer -->
    <footer class="bg-surface border-t border-outline-variant/30 w-full pt-xl pb-lg">
        <div class="max-w-container-max mx-auto px-md md:px-xl grid grid-cols-1 md:grid-cols-4 gap-lg">
            <div class="md:col-span-1">
                <h3 class="font-h3 text-h3 text-primary mb-md">ATELIER</h3>
                <p class="font-body-sm text-on-surface-variant max-w-[200px]">Curating timeless wardrobes through the lens of minimalist architecture and high-craft tailoring.</p>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps uppercase mb-md text-primary">Shop</h4>
                <ul class="flex flex-col gap-xs font-body-sm text-on-secondary-fixed-variant">
                    <li><a class="hover:text-primary transition-colors underline" href="#">New Arrivals</a></li>
                    <li><a class="hover:text-primary transition-colors underline" href="#">Bestsellers</a></li>
                    <li><a class="hover:text-primary transition-colors underline" href="#">Archive</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps uppercase mb-md text-primary">Information</h4>
                <ul class="flex flex-col gap-xs font-body-sm text-on-secondary-fixed-variant">
                    <li><a class="hover:text-primary transition-colors underline" href="#">Sustainability</a></li>
                    <li><a class="hover:text-primary transition-colors underline" href="#">Care Guide</a></li>
                    <li><a class="hover:text-primary transition-colors underline" href="#">Shipping</a></li>
                    <li><a class="hover:text-primary transition-colors underline" href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps uppercase mb-md text-primary">Newsletter</h4>
                <p class="font-body-sm text-on-surface-variant mb-md">Join the circle for seasonal releases and exclusive updates.</p>
                <form class="flex border-b border-primary py-xs">
                    <input class="bg-transparent border-none focus:ring-0 w-full font-body-sm placeholder:text-outline/50" placeholder="Email Address" type="email" />
                    <button class="font-label-caps text-label-caps uppercase text-primary" type="submit">Join</button>
                </form>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-md md:px-xl mt-xl pt-md border-t border-outline-variant/10 flex flex-col md:flex-row justify-between gap-md items-center">
            <p class="font-body-sm text-body-sm tracking-wide text-on-secondary-fixed-variant">© 2024 ATELIER MINIMALIST. ALL RIGHTS RESERVED.</p>
            <div class="flex gap-md">
                <a class="font-body-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Privacy</a>
                <a class="font-body-sm text-on-secondary-fixed-variant hover:text-primary transition-colors" href="#">Terms</a>
            </div>
        </div>
    </footer>
</body>

</html>