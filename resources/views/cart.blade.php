<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
        }
    </style>
</head>

<body class="font-body-md text-on-surface">
    <!-- TopNavBar -->
    <header class="fixed top-0 w-full z-50 bg-surface/90 dark:bg-surface-container-highest/90 backdrop-blur-md border-b border-outline-variant/30 dark:border-outline/20">
        <div class="flex justify-between items-center h-20 px-md md:px-xl max-w-container-max mx-auto">
            <div class="flex-1 flex gap-md items-center hidden md:flex">
                <nav class="flex gap-md">
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">New In</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">Collections</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">Designers</a>
                </nav>
            </div>
            <div class="flex-none">
                <h1 class="font-h2 text-h2 tracking-tighter text-primary dark:text-on-primary-fixed">ATELIER</h1>
            </div>
            <div class="flex-1 flex justify-end items-center gap-md">
                <div class="hidden md:flex gap-md">
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">Journal</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">Archive</a>
                </div>
                <div class="flex items-center gap-sm">
                    <span class="material-symbols-outlined cursor-pointer active:scale-95 transition-transform text-primary dark:text-on-primary-fixed">search</span>
                    <span class="material-symbols-outlined cursor-pointer active:scale-95 transition-transform text-primary dark:text-on-primary-fixed">person</span>
                    <div class="relative cursor-pointer active:scale-95 transition-transform">
                        <span class="material-symbols-outlined text-primary dark:text-on-primary-fixed">shopping_bag</span>
                        <span class="absolute -top-1 -right-1 flex h-4 w-4 items-center justify-center rounded-full bg-primary text-[8px] text-on-primary">2</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="pt-32 pb-xl px-md md:px-xl max-w-container-max mx-auto">
        <div class="mb-xl text-center md:text-left">
            <h2 class="font-h1 text-h1 text-primary mb-base">Your Bag</h2>
            <p class="font-body-sm text-on-surface-variant">2 items currently in your selection.</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-xl">
            <!-- Items List -->
            <div class="lg:col-span-8">
                <div class="border-t border-outline-variant/30">
                    <!-- Item 1 -->
                    <div class="flex flex-col md:flex-row py-lg border-b border-outline-variant/30 gap-md">
                        <div class="w-full md:w-40 aspect-[3/4] bg-surface-container overflow-hidden">
                            <img alt="Model in charcoal wool coat" class="w-full h-full object-cover" data-alt="A high-fashion editorial photograph of a minimalist charcoal grey wool coat on a sleek mannequin in a bright, sun-drenched architectural studio. The lighting is soft and diffused, highlighting the luxurious texture of the heavy fabric and clean stitching. The background is a simple off-white wall with subtle shadows, embodying a quiet luxury aesthetic with deep contrast and a professional, calm mood." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBWSBu2IHi7EaHdo0gVFlLwWHkIuo2tMOjUfHGjtrGsneGeD8YmIvtn80pvskPJBMHLcIK8THAif_ewqkis2sWoR3ifFb24YsZ6aa37AhXy1cyc-ecsMB65X_yUaB5y58fCj1bZfGVxa8L5cEAv7Wwwi830H8dYLdFbQ_studucNZ7jzIce6hjFOEhIcR9AX4HiJszudWzIaErygTUCxjNzu2AhEIXzi5DmHXB1zwvOHxEQyMY2hoop4z93PCRROnL5ObF1wVCoSWQG" />
                        </div>
                        <div class="flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-h3 text-h3 text-primary">Sculptural Wool Coat</h3>
                                        <p class="font-body-sm text-on-surface-variant mt-xs">Charcoal Melange | Size 40</p>
                                    </div>
                                    <p class="font-body-md font-medium">$1,250.00</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-end mt-md">
                                <div class="flex items-center border border-outline-variant w-fit">
                                    <button class="px-md py-sm hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-[16px]">remove</span></button>
                                    <span class="px-md font-body-sm">1</span>
                                    <button class="px-md py-sm hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-[16px]">add</span></button>
                                </div>
                                <button class="font-label-caps text-label-caps text-on-surface-variant hover:text-error underline transition-colors uppercase">Remove</button>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex flex-col md:flex-row py-lg border-b border-outline-variant/30 gap-md">
                        <div class="w-full md:w-40 aspect-[3/4] bg-surface-container overflow-hidden">
                            <img alt="Silk midi dress in ivory" class="w-full h-full object-cover" data-alt="A professional close-up shot of an ivory silk midi dress draped elegantly in a high-end fashion boutique. The fabric has a subtle, pearlescent sheen under soft gallery-style spotlighting. The composition is clean and minimalist, focusing on the fluid silhouette and the delicate weight of the material against a neutral, warm background. The overall tone is sophisticated, serene, and exquisitely crafted." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZEA5sa-bZUIXeO2olT8z_7xBP-NeWJhXiVYo0PEvE9tq_0TSrjorNJr3qqJfpfTtbfbj2BE7ve90f46G2GwbESDTq9s53Tl0UJMFsWakhjGV9fxBIaP1Qbusf-q5JizDtJ6gQoIeCbJWfjMyEmkFF50SdtuKF_UM7dMeajqg7_nJTWiQiFSVgMBwkdXsOVRkKMj_CLIocxlFDQFz0QUPo14m_ko6RPCwoOPw6MM_UkluY4KqDcRJ4bSdyFVxm8VF_aLq6ZtpkKETu" />
                        </div>
                        <div class="flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="font-h3 text-h3 text-primary">Biased-Cut Silk Dress</h3>
                                        <p class="font-body-sm text-on-surface-variant mt-xs">Ivory | Size 38</p>
                                    </div>
                                    <p class="font-body-md font-medium">$680.00</p>
                                </div>
                            </div>
                            <div class="flex justify-between items-end mt-md">
                                <div class="flex items-center border border-outline-variant w-fit">
                                    <button class="px-md py-sm hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-[16px]">remove</span></button>
                                    <span class="px-md font-body-sm">1</span>
                                    <button class="px-md py-sm hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-[16px]">add</span></button>
                                </div>
                                <button class="font-label-caps text-label-caps text-on-surface-variant hover:text-error underline transition-colors uppercase">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-lg">
                    <button class="flex items-center gap-sm group">
                        <span class="material-symbols-outlined text-primary group-hover:-translate-x-1 transition-transform">arrow_back</span>
                        <span class="font-label-caps text-label-caps uppercase tracking-widest">Continue Shopping</span>
                    </button>
                </div>
            </div>
            <!-- Summary Section -->
            <div class="lg:col-span-4">
                <div class="bg-surface-container-low p-md md:p-lg sticky top-32">
                    <h3 class="font-label-caps text-label-caps uppercase tracking-[0.2em] mb-lg border-b border-outline-variant pb-base">Order Summary</h3>
                    <div class="space-y-md">
                        <div class="flex justify-between">
                            <span class="font-body-sm text-on-surface-variant">Subtotal</span>
                            <span class="font-body-md">$1,930.00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-body-sm text-on-surface-variant">Shipping</span>
                            <span class="font-body-sm text-on-surface-variant uppercase">Calculated at checkout</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-body-sm text-on-surface-variant">Tax</span>
                            <span class="font-body-sm text-on-surface-variant uppercase">Calculated at checkout</span>
                        </div>
                        <div class="pt-md border-t border-outline-variant flex justify-between items-baseline">
                            <span class="font-label-caps text-label-caps uppercase tracking-widest font-bold">Total</span>
                            <span class="font-h3 text-h3">$1,930.00</span>
                        </div>
                    </div>
                    <div class="mt-xl space-y-md">
                        <button class="w-full bg-primary text-on-primary py-md font-button text-button uppercase tracking-widest hover:bg-on-surface-variant transition-colors active:scale-95 duration-200">
                            Proceed to Checkout
                        </button>
                        <p class="text-center font-body-sm text-on-surface-variant text-[10px] uppercase tracking-tighter">
                            Secure payment processing powered by Atelier.
                        </p>
                    </div>
                    <div class="mt-lg border-t border-outline-variant pt-lg">
                        <details class="group">
                            <summary class="list-none flex justify-between items-center cursor-pointer font-label-caps text-label-caps uppercase tracking-widest">
                                Add a promo code
                                <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
                            </summary>
                            <div class="mt-md flex gap-base">
                                <input class="flex-1 bg-transparent border-0 border-b border-outline focus:ring-0 focus:border-primary px-0 font-body-sm placeholder:text-outline-variant" placeholder="CODE" type="text" />
                                <button class="font-label-caps text-label-caps uppercase underline">Apply</button>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="bg-surface dark:bg-surface-container-highest w-full pt-xl pb-lg border-t border-outline-variant/30 dark:border-outline/20">
        <div class="max-w-container-max mx-auto px-md md:px-xl grid grid-cols-1 md:grid-cols-4 gap-lg">
            <div class="md:col-span-1">
                <h3 class="font-h3 text-h3 text-primary dark:text-on-primary-fixed mb-md">ATELIER</h3>
                <p class="font-body-sm text-on-surface-variant tracking-wide max-w-[240px]">Redefining modern luxury through sustainable craftsmanship and timeless design.</p>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps uppercase mb-md tracking-widest">Shop</h4>
                <ul class="space-y-base">
                    <li><a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">New In</a></li>
                    <li><a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">Collections</a></li>
                    <li><a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">Designers</a></li>
                    <li><a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">Archive</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps uppercase mb-md tracking-widest">About</h4>
                <ul class="space-y-base">
                    <li><a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">Sustainability</a></li>
                    <li><a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">Care</a></li>
                    <li><a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">Shipping</a></li>
                    <li><a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-label-caps text-label-caps uppercase mb-md tracking-widest">Newsletter</h4>
                <p class="font-body-sm text-on-surface-variant mb-md">Sign up for early access and seasonal updates.</p>
                <div class="flex border-b border-outline py-xs">
                    <input class="bg-transparent border-0 focus:ring-0 w-full font-body-sm placeholder:text-outline-variant" placeholder="Email Address" type="email" />
                    <button class="font-label-caps text-label-caps uppercase">Join</button>
                </div>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-md md:px-xl mt-xl pt-lg border-t border-outline-variant/10 flex flex-col md:flex-row justify-between items-center gap-md">
            <span class="font-body-sm text-on-surface-variant tracking-wide">© 2024 ATELIER MINIMALIST. ALL RIGHTS RESERVED.</span>
            <div class="flex gap-md">
                <a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">Privacy</a>
                <a class="font-body-sm text-on-surface-variant hover:text-primary underline transition-all duration-300" href="#">Terms</a>
            </div>
        </div>
    </footer>
</body>

</html>