<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Checkout | ATELIER</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&amp;family=Montserrat:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        .font-label-caps {
            font-family: 'Montserrat', sans-serif;
        }

        .font-h1 {
            font-family: 'Playfair Display', serif;
        }

        .font-h2 {
            font-family: 'Playfair Display', serif;
        }

        .font-h3 {
            font-family: 'Playfair Display', serif;
        }

        .font-body-sm {
            font-family: 'Montserrat', sans-serif;
        }

        .font-body-md {
            font-family: 'Montserrat', sans-serif;
        }

        .font-body-lg {
            font-family: 'Montserrat', sans-serif;
        }

        .font-button {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
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
</head>

<body class="bg-surface text-on-surface selection:bg-primary selection:text-on-primary">
    <!-- Header Section (Suppressed Nav for Checkout Focus) -->
    <header class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md border-b border-outline-variant/30">
        <div class="max-w-container-max mx-auto px-md md:px-xl flex justify-between items-center h-20">
            <a class="font-h2 text-h2 tracking-tighter text-primary" href="#">ATELIER</a>
            <div class="flex items-center gap-md">
                <span class="font-label-caps text-label-caps tracking-widest text-on-surface-variant flex items-center gap-xs">
                    <span class="material-symbols-outlined text-[18px]">lock</span> SECURE CHECKOUT
                </span>
            </div>
        </div>
    </header>
    <main class="pt-20 min-h-screen">
        <div class="max-w-container-max mx-auto px-md md:px-xl py-lg">
            <!-- Breadcrumbs / Steps -->
            <nav class="flex items-center gap-sm mb-xl font-label-caps text-label-caps tracking-widest text-on-surface-variant">
                <span class="text-primary border-b border-primary pb-1">Information</span>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span class="opacity-50">Shipping</span>
                <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                <span class="opacity-50">Payment</span>
            </nav>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-xl">
                <!-- Left Column: Checkout Forms -->
                <div class="lg:col-span-7">
                    <form class="space-y-xl">
                        <!-- Contact Information -->
                        <section>
                            <div class="flex justify-between items-end mb-md">
                                <h2 class="font-h3 text-h3 text-primary">Contact Information</h2>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Already have an account? <a class="underline text-primary" href="#">Log in</a></p>
                            </div>
                            <div class="space-y-gutter">
                                <div class="relative">
                                    <input class="peer w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary placeholder-transparent font-body-md" id="email" placeholder=" " type="email" />
                                    <label class="absolute left-0 top-4 text-on-surface-variant font-body-md transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-2 peer-focus:text-xs" for="email">Email Address</label>
                                </div>
                                <div class="flex items-center gap-sm">
                                    <input class="w-4 h-4 rounded-none border-outline text-primary focus:ring-primary" id="newsletter" type="checkbox" />
                                    <label class="font-body-sm text-body-sm text-on-surface-variant" for="newsletter">Email me with news and offers</label>
                                </div>
                            </div>
                        </section>
                        <!-- Shipping Address -->
                        <section>
                            <h2 class="font-h3 text-h3 text-primary mb-md">Shipping Address</h2>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
                                <div class="relative">
                                    <input class="peer w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary placeholder-transparent font-body-md" id="fname" placeholder=" " type="text" />
                                    <label class="absolute left-0 top-4 text-on-surface-variant font-body-md transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-2 peer-focus:text-xs" for="fname">First Name</label>
                                </div>
                                <div class="relative">
                                    <input class="peer w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary placeholder-transparent font-body-md" id="lname" placeholder=" " type="text" />
                                    <label class="absolute left-0 top-4 text-on-surface-variant font-body-md transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-2 peer-focus:text-xs" for="lname">Last Name</label>
                                </div>
                                <div class="relative md:col-span-2">
                                    <input class="peer w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary placeholder-transparent font-body-md" id="address" placeholder=" " type="text" />
                                    <label class="absolute left-0 top-4 text-on-surface-variant font-body-md transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-2 peer-focus:text-xs" for="address">Address</label>
                                </div>
                                <div class="relative md:col-span-2">
                                    <input class="peer w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary placeholder-transparent font-body-md" id="apartment" placeholder=" " type="text" />
                                    <label class="absolute left-0 top-4 text-on-surface-variant font-body-md transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-2 peer-focus:text-xs" for="apartment">Apartment, suite, etc. (optional)</label>
                                </div>
                                <div class="relative">
                                    <input class="peer w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary placeholder-transparent font-body-md" id="city" placeholder=" " type="text" />
                                    <label class="absolute left-0 top-4 text-on-surface-variant font-body-md transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-2 peer-focus:text-xs" for="city">City</label>
                                </div>
                                <div class="relative">
                                    <select class="peer w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary font-body-md appearance-none" id="country">
                                        <option value="US">United States</option>
                                        <option value="FR">France</option>
                                        <option value="IT">Italy</option>
                                        <option value="UK">United Kingdom</option>
                                    </select>
                                    <label class="absolute left-0 -top-2 text-xs text-on-surface-variant" for="country">Country/Region</label>
                                </div>
                                <div class="relative">
                                    <input class="peer w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary placeholder-transparent font-body-md" id="zip" placeholder=" " type="text" />
                                    <label class="absolute left-0 top-4 text-on-surface-variant font-body-md transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-2 peer-focus:text-xs" for="zip">ZIP code</label>
                                </div>
                                <div class="relative">
                                    <input class="peer w-full bg-transparent border-0 border-b border-outline-variant py-4 focus:ring-0 focus:border-primary placeholder-transparent font-body-md" id="phone" placeholder=" " type="tel" />
                                    <label class="absolute left-0 top-4 text-on-surface-variant font-body-md transition-all peer-placeholder-shown:text-base peer-placeholder-shown:top-4 peer-focus:-top-2 peer-focus:text-xs" for="phone">Phone (optional)</label>
                                </div>
                            </div>
                        </section>
                        <!-- Action Buttons -->
                        <div class="flex flex-col md:flex-row items-center justify-between pt-md gap-md">
                            <a class="flex items-center gap-xs font-body-sm text-on-surface-variant hover:text-primary transition-colors" href="#">
                                <span class="material-symbols-outlined text-[18px]">chevron_left</span> Return to cart
                            </a>
                            <button class="w-full md:w-auto bg-primary text-on-primary px-xl py-4 font-button text-button uppercase tracking-widest hover:opacity-90 transition-opacity active:scale-[0.98]" type="submit">
                                Continue to Shipping
                            </button>
                        </div>
                    </form>
                </div>
                <!-- Right Column: Order Summary -->
                <aside class="lg:col-span-5">
                    <div class="bg-surface-container-low p-md md:p-lg sticky top-28">
                        <h2 class="font-h3 text-h3 text-primary mb-lg">Order Summary</h2>
                        <!-- Cart Items -->
                        <div class="space-y-md mb-lg">
                            <!-- Item 1 -->
                            <div class="flex gap-md">
                                <div class="relative w-20 h-24 bg-surface-container-highest shrink-0">
                                    <img class="w-full h-full object-cover" data-alt="A premium, high-contrast fashion photograph of a structured charcoal wool overcoat hanging against a stark white background in a minimalist studio setting. The lighting is crisp and editorial, emphasizing the fine texture of the fabric and the precision of the tailoring. The overall mood is sophisticated, quiet luxury, aligning with a high-end designer aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBjXP3H7J7TfoTklLe8tx6vENK45gah4razPv8EfIIjmsZ_LEtL0ZUx4r3eLMJQSiSbgkV1H9VG1vchls1LzftBHFlpQqnEi5Qxp8KRKFO5kx46IUi4pE5Up79KuixD5tx2KMA2PjfFUUugvtw_H5eiDyktr3nSNic-J79P-16dbAGNs7SyEyPe1VaCiprnkObqA9FVXntaZzCRDbi6CRFccZEX_-hKv71dfSfM_oA3Bkh3T2uc_lY5J5ncV6cJyaqaQW2JfVpDtDZ" />
                                    <span class="absolute -top-2 -right-2 bg-secondary text-on-primary text-[10px] w-5 h-5 flex items-center justify-center rounded-full font-bold">1</span>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="font-body-md font-medium text-primary uppercase text-sm">Sculpted Wool Overcoat</h3>
                                    <p class="font-body-sm text-on-surface-variant text-xs mt-1">Charcoal / Medium</p>
                                </div>
                                <span class="font-body-md text-primary">$1,250.00</span>
                            </div>
                            <!-- Item 2 -->
                            <div class="flex gap-md">
                                <div class="relative w-20 h-24 bg-surface-container-highest shrink-0">
                                    <img class="w-full h-full object-cover" data-alt="Detailed close-up of a luxury leather accessory, featuring smooth grain calfskin in a deep obsidian black. The object rests on a polished stone surface under soft, diffused side-lighting that highlights the subtle sheen of the premium material. The composition is clean and minimalist, evoking a sense of enduring craftsmanship and high-fashion elegance." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDg85OssyY7kWeClzNvFFk7aVUhzaZOD9F4IqhuHT5B-GwZzBDd4wiN2wvvAS0XOXtY_Gkc6HncCedbPrUe0gvmpX35DZiJnYvfNg_6v5QnMLY_jPrvPML8a1cV1dx8ht_3t7rjUmPSTM2rjkZDskd9Cl6Gd7YSLeNNSUXJbIYVYPdmZc22cjn_dVTeveBqNGNIb4Ags0UYETPyh-yxR5kuCT7RMLE2npHBCza0DVIq9zQ6uxSwqQDqISt4llwGcJZ2RFyTsaKsGjGN" />
                                    <span class="absolute -top-2 -right-2 bg-secondary text-on-primary text-[10px] w-5 h-5 flex items-center justify-center rounded-full font-bold">1</span>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="font-body-md font-medium text-primary uppercase text-sm">Minimalist Leather Tote</h3>
                                    <p class="font-body-sm text-on-surface-variant text-xs mt-1">Obsidian Black</p>
                                </div>
                                <span class="font-body-md text-primary">$850.00</span>
                            </div>
                        </div>
                        <!-- Discount Code -->
                        <div class="flex gap-sm py-md border-y border-outline-variant/30 mb-md">
                            <input class="flex-grow bg-transparent border-0 border-b border-outline-variant py-2 focus:ring-0 focus:border-primary placeholder:text-on-surface-variant/50 font-body-sm" placeholder="Discount code" type="text" />
                            <button class="bg-secondary-container text-on-secondary-container px-md py-2 font-button text-[12px] uppercase tracking-wider hover:bg-outline-variant transition-colors">Apply</button>
                        </div>
                        <!-- Totals -->
                        <div class="space-y-sm font-body-md">
                            <div class="flex justify-between">
                                <span class="text-on-surface-variant">Subtotal</span>
                                <span class="text-primary">$2,100.00</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-on-surface-variant">Shipping</span>
                                <span class="text-primary italic text-sm">Calculated at next step</span>
                            </div>
                            <div class="flex justify-between border-t border-outline-variant/30 pt-md mt-md">
                                <span class="font-h3 text-h3 text-primary">Total</span>
                                <div class="text-right">
                                    <span class="text-xs text-on-surface-variant mr-1">USD</span>
                                    <span class="font-h3 text-h3 text-primary">$2,100.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <!-- Footer Component -->
    <footer class="w-full pt-xl pb-lg border-t border-outline-variant/30 bg-surface">
        <div class="max-w-container-max mx-auto px-md md:px-xl grid grid-cols-1 md:grid-cols-4 gap-lg">
            <div class="md:col-span-1">
                <span class="font-h3 text-h3 text-primary block mb-md">ATELIER</span>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">
                    Defining contemporary elegance through the lens of minimalist architecture and timeless craftsmanship.
                </p>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps tracking-widest text-primary mb-md">Client Services</h4>
                <ul class="space-y-sm">
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline" href="#">Contact</a></li>
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline" href="#">Shipping</a></li>
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline" href="#">Returns</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps tracking-widest text-primary mb-md">Legal</h4>
                <ul class="space-y-sm">
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline" href="#">Privacy</a></li>
                    <li><a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary underline" href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps tracking-widest text-primary mb-md">Newsletter</h4>
                <div class="relative">
                    <input class="w-full bg-transparent border-0 border-b border-outline-variant py-2 focus:ring-0 focus:border-primary font-body-sm" placeholder="Email Address" type="email" />
                    <button class="absolute right-0 top-2 text-primary">
                        <span class="material-symbols-outlined">arrow_forward</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-md md:px-xl mt-xl pt-md border-t border-outline-variant/10">
            <p class="font-body-sm text-[10px] tracking-widest text-on-surface-variant/60 uppercase">© 2024 ATELIER MINIMALIST. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>
</body>

</html>