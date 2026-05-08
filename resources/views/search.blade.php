<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased selection:bg-primary-fixed selection:text-on-primary-fixed">
    <nav class="fixed top-0 w-full z-50 bg-surface/90 dark:bg-surface-container-highest/90 backdrop-blur-md border-b border-outline-variant/30 dark:border-outline/20">
        <div class="flex justify-between items-center h-20 px-md md:px-xl max-w-container-max mx-auto">
            <div class="flex items-center gap-lg">
                <a class="font-h2 text-h2 tracking-tighter text-primary dark:text-on-primary-fixed" href="#">ATELIER</a>
                <div class="hidden md:flex gap-md">
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">New In</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">Collections</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">Designers</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">Journal</a>
                    <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors duration-300" href="#">Archive</a>
                </div>
            </div>
            <div class="flex items-center gap-md">
                <button class="material-symbols-outlined text-primary hover:opacity-70 transition-opacity duration-300 cursor-pointer active:scale-95" data-icon="search">search</button>
                <button class="material-symbols-outlined text-primary hover:opacity-70 transition-opacity duration-300 cursor-pointer active:scale-95" data-icon="person">person</button>
                <button class="material-symbols-outlined text-primary hover:opacity-70 transition-opacity duration-300 cursor-pointer active:scale-95" data-icon="shopping_bag">shopping_bag</button>
            </div>
        </div>
    </nav>
    <main class="pt-40 pb-xl max-w-container-max mx-auto px-md md:px-xl">
        <header class="mb-lg space-y-md">
            <div class="flex items-center gap-xs text-on-surface-variant font-label-caps text-[10px] tracking-widest uppercase">
                <a class="hover:text-primary" href="#">Home</a>
                <span class="material-symbols-outlined text-[10px]" style="font-variation-settings: 'wght' 300;">chevron_right</span>
                <span>Search</span>
            </div>
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-md border-b border-outline-variant/30 pb-md">
                <div>
                    <h1 class="font-h1 text-h1 text-primary">Search: <span class="italic font-normal">Linen</span></h1>
                    <p class="font-body-md text-on-surface-variant mt-xs">12 products found for your query</p>
                </div>
                <div class="flex items-center gap-md">
                    <div class="relative group">
                        <button class="flex items-center gap-base font-label-caps text-label-caps tracking-widest uppercase border border-outline-variant/30 px-md py-sm hover:border-primary transition-colors">
                            Sort By: Featured
                            <span class="material-symbols-outlined text-[16px]">expand_more</span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <section class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-x-gutter gap-y-xl">
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] overflow-hidden bg-surface-container-low mb-md relative">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A high-end studio photograph of a premium off-white linen shirt hanging on a minimalist dark wood clothes rack. The background is a soft, warm gray with subtle architectural shadows. The lighting is soft and diffused, highlighting the delicate texture of the natural linen fabric. The overall mood is serene and sophisticated, embodying the quiet luxury aesthetic with neutral tones." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAUSIP_Mko2xxEXk-yH76k4ezbqtFPlUyd5uZgFVsC2fuVFDw4nwoPC0N_kJsvC08iRlgIRbTuJLM93mq-avhTKyxFiZ5pRxgpD7UkA3Rbg7B2tSZYbCwXVfeSh8MpLGOw4p7cnPhzupdToPvXYPSRSZxTPsJwZfV-cGl_xvXd0GYVAnfgoCyXZRyGnwuLFwH2b6uF2RMWc4uvEFZ5tXCSutDT_vVMz9kkZ4p-mJuNG_KtDUsDuQO2reD8q3lSqW4qlJ_5T6aSvgHGm" />
                    <div class="absolute inset-x-0 bottom-0 p-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-white/60 backdrop-blur-sm">
                        <button class="w-full bg-primary text-on-primary font-button text-button py-sm uppercase tracking-widest">Quick Add</button>
                    </div>
                </div>
                <div class="space-y-xs">
                    <p class="font-label-caps text-[10px] tracking-widest uppercase text-on-surface-variant">Essential</p>
                    <h3 class="font-h3 text-body-lg text-primary">Raw Edge Linen Shirt</h3>
                    <p class="font-body-md text-on-surface">$220</p>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] overflow-hidden bg-surface-container-low mb-md relative">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A full-length editorial shot of wide-leg linen trousers in a deep charcoal color. The garment is draped elegantly against a minimalist stone wall in a brightly lit studio. Soft directional lighting creates gentle highlights on the fabric's matte finish. The composition is clean and focused on the garment's silhouette and superior craftsmanship, following a modern minimalist fashion palette." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEVn36frLHxjvheF11gMi7-Z38ciHIp6g_Xb674AEAMuDqh4g6bz_8YoHbKSxpXQvYN3-YrAqlHwq3_bJVVV9Mw1cjcrNrSS0gXgvanjGwVEOZkzLTYPwYUDDZAkBRPUdBdmPLtIpcb7-O14WlkR1hSqZNHnlL510zA7Kha8EglHe0JRRo7821b8kV14DHBPU6bneaRKiH10CfowGZN1iWJP0uLPUtzEAVIfOCwnvNFx-9uKQ92X2PzdlReznl1MohZ_F3ioBaSW3W" />
                    <div class="absolute inset-x-0 bottom-0 p-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-white/60 backdrop-blur-sm">
                        <button class="w-full bg-primary text-on-primary font-button text-button py-sm uppercase tracking-widest">Quick Add</button>
                    </div>
                </div>
                <div class="space-y-xs">
                    <p class="font-label-caps text-[10px] tracking-widest uppercase text-on-surface-variant">Collections</p>
                    <h3 class="font-h3 text-body-lg text-primary">Tailored Linen Trouser</h3>
                    <p class="font-body-md text-on-surface">$340</p>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] overflow-hidden bg-surface-container-low mb-md relative">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Close-up detail of a structured sand-colored linen blazer. The focus is on the lapel and the unique slub texture of the high-quality flax fibers. The lighting is bright and airy, mimicking natural sunlight filtered through a window. The color palette is composed of warm beiges and soft whites, creating an atmosphere of professional confidence and understated elegance." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDMmbmNmtsiWKjFEI4sHQR2OZp2F7NJdzQipby4XuuW_j3_fTlYDDLgmfcFGZPd8ttM-UzD7HXLa-W6WxSe1Wo93JJHsJ1zTDJrdan_8vTBj578cSYVCJkOrzAsujtfuAq4mXEHv8WCtnvdYLTLxxwhpz56bE8Nz_viZcjmXQPArXEQTy6j-ozDHL3CFORDUn8ZxI9VrAb5FnQHbuSHQj8QcR6mAFGEHhnu3mW4aRvoBk7ASXlCDiPIFSZFKglwlgszgKG8RYizEcrM" />
                    <div class="absolute inset-x-0 bottom-0 p-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-white/60 backdrop-blur-sm">
                        <button class="w-full bg-primary text-on-primary font-button text-button py-sm uppercase tracking-widest">Quick Add</button>
                    </div>
                </div>
                <div class="space-y-xs">
                    <p class="font-label-caps text-[10px] tracking-widest uppercase text-on-surface-variant">Seasonal</p>
                    <h3 class="font-h3 text-body-lg text-primary">Unstructured Linen Blazer</h3>
                    <p class="font-body-md text-on-surface">$480</p>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] overflow-hidden bg-surface-container-low mb-md relative">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A minimalist fashion portrait featuring a model wearing a sleeveless black linen maxi dress. The model stands in a stark, white gallery space with long, geometric shadows stretching across the floor. High-contrast lighting emphasizes the crisp lines of the garment. The image maintains a quiet luxury feel through its simple composition, monochrome color scheme, and focus on form." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBq59KvTUSQsHdzUbb2N_k-2x7ACCfidYcECpjlHGs6mhB2P_fodcvmDcuq_rki9eULGhzrg2outLtQ5rW3o1I1J638ldidfnsmLroNm-AEntdw8-gwcarIv4Vf9Mbtmu17XjvFV08h0SelYyJN8LkTLDHQg3XiAHnTX5PtvltyHPvyT-FPZfQ-Nw3aq4xBNVvd0H46lLt00zVwhPndbLqDSOkYFnTig8ibl1GdEOesSi0tZjcUa4trDHIae6IDmN6pqN5buuwy6fAl" />
                    <div class="absolute inset-x-0 bottom-0 p-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-white/60 backdrop-blur-sm">
                        <button class="w-full bg-primary text-on-primary font-button text-button py-sm uppercase tracking-widest">Quick Add</button>
                    </div>
                </div>
                <div class="space-y-xs">
                    <p class="font-label-caps text-[10px] tracking-widest uppercase text-on-surface-variant">Archive</p>
                    <h3 class="font-h3 text-body-lg text-primary">Belted Linen Column Dress</h3>
                    <p class="font-body-md text-on-surface">$290</p>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] overflow-hidden bg-surface-container-low mb-md relative">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="Editorial lifestyle photography of ivory linen shorts arranged on a textured plaster surface. The scene is illuminated by soft, side-lit afternoon sun, casting gentle, organic shadows. The focus is sharp on the stitching details and the natural drape of the heavy-weight linen. The aesthetic is clean, modern, and deeply focused on the materiality of the product." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqxP2BldNpTsRv3HX3IK_22uoxMSTxjqLjE9jpJ16ZehcQYDShUYbwfl6zvVfRBsQuYYpSwvbS_9_ocW6EJyUaqzK-pd6hjn7BQcankXq_p6G3QFZUrbZIM88OaKQtnvi3aKHZ82RItCrGFhLqJ1NtXZqB7GNLO05tQYkKmcCuwHhS7wU46ItujLafc2D4tc-1qU5ATxz5D2bF7JeXl9dco6UuydyEqRvWle8kjVwx-7GbwQ0so06icQW5ROkFvfkrqEG0cwUsoj4x" />
                    <div class="absolute inset-x-0 bottom-0 p-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-white/60 backdrop-blur-sm">
                        <button class="w-full bg-primary text-on-primary font-button text-button py-sm uppercase tracking-widest">Quick Add</button>
                    </div>
                </div>
                <div class="space-y-xs">
                    <p class="font-label-caps text-[10px] tracking-widest uppercase text-on-surface-variant">Essential</p>
                    <h3 class="font-h3 text-body-lg text-primary">Relaxed Linen Short</h3>
                    <p class="font-body-md text-on-surface">$160</p>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] overflow-hidden bg-surface-container-low mb-md relative">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A macro shot of a loosely woven gray linen scarf draped over a modern concrete sculpture. The lighting is moody and high-key, emphasizing the tactile quality of the fibers. The background is a clean, neutral studio setting that allows the subtle textures and tonal variations of the gray linen to stand out. The image follows a strict minimalist grid and aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4HzWypPkwuV2s7jbNF_iADYlzPmG9PSBnQBlLzLjlsnz5QhDjlFQx7KHpzVFn5e8asQPq12HhVcGCFQVizKY_kkCi9ueHWqFiS2eA52Czh0PnCMgIKuGF1sPuxCNxLsFjiO5Iu3hki_k4voJdSj_PTZ2eUTOZA6cr4elhXSW7I8UkvPuC3bXN3Dq1CJ_7_GXBHmKv0WxuEZt04RfL68gCYRl_4VUw_yWcCj8PxxGp5sR1pMR9mB0zWMbXbykw7XLYVor-wmDwuotW" />
                    <div class="absolute inset-x-0 bottom-0 p-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-white/60 backdrop-blur-sm">
                        <button class="w-full bg-primary text-on-primary font-button text-button py-sm uppercase tracking-widest">Quick Add</button>
                    </div>
                </div>
                <div class="space-y-xs">
                    <p class="font-label-caps text-[10px] tracking-widest uppercase text-on-surface-variant">Accessories</p>
                    <h3 class="font-h3 text-body-lg text-primary">Woven Linen Scarf</h3>
                    <p class="font-body-md text-on-surface">$95</p>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] overflow-hidden bg-surface-container-low mb-md relative">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A clean, studio fashion shot of a model from the shoulders down, wearing a tailored linen vest in a slate blue hue. The model's hands are placed in the pockets, showing the ease of the garment. The background is a neutral eggshell white. The lighting is crisp and modern, highlighting the precision of the tailoring and the richness of the linen's natural color." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAIDbbMaBUtjPmfIXo46f73nizym0FPSbHGqz6POSaDUD99njRpYFg6caA2_wQkpbVDCYB8OwoGnYRSqsr1ron7E2MqkWRwpDVK5DQketddJ5j3WZBWtWgy7hl81yul0DHAwqEXx86uZSQ83A6ur02yepofkr8_dYPdnGopTHNofJKtMQHRYbOeTm4VXX2xsqvrZIAIsB-5BLeGCheSiDqSp9JblHR9HB8YDMgQvibmCKvYz1txcU07PpqX4AEBEgRIRNNQjux3sJ9b" />
                    <div class="absolute inset-x-0 bottom-0 p-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-white/60 backdrop-blur-sm">
                        <button class="w-full bg-primary text-on-primary font-button text-button py-sm uppercase tracking-widest">Quick Add</button>
                    </div>
                </div>
                <div class="space-y-xs">
                    <p class="font-label-caps text-[10px] tracking-widest uppercase text-on-surface-variant">Designers</p>
                    <h3 class="font-h3 text-body-lg text-primary">Minimalist Linen Vest</h3>
                    <p class="font-body-md text-on-surface">$260</p>
                </div>
            </div>
            <div class="group cursor-pointer">
                <div class="aspect-[3/4] overflow-hidden bg-surface-container-low mb-md relative">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="An artistic fashion photograph of a long, lightweight linen duster coat in a deep espresso brown. The coat is caught in a slight breeze, showing its fluid movement. The setting is a minimalist courtyard with clean architectural lines and a bright, overcast sky. The lighting is flat and even, creating a calm, high-end editorial feel that emphasizes the garment's length and fabric quality." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAT41QP8s3ZN1skSChCd2Ide3rfXKJfVB-xOFPSI8ao5P897NTroEq2kHa-br3GYWQMIzRg156bRNRNr2dhor_xdiwI1Iy3n23dQl6SC6Dk7Zs0Gmc8t-_arO-ChXK25logVzQunbLx5OITOg_faZ3AMR8-tjuh7f9NkMebbiR_PTHNHFPw465cyFrIb3711JV3UwFN2lfbuv8K_AwCDpKOp_-ANQbWF1z-cFOTSS1epKJgyH04NwFsAzUAal_vvyqURTlunC94zGsZ" />
                    <div class="absolute inset-x-0 bottom-0 p-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-white/60 backdrop-blur-sm">
                        <button class="w-full bg-primary text-on-primary font-button text-button py-sm uppercase tracking-widest">Quick Add</button>
                    </div>
                </div>
                <div class="space-y-xs">
                    <p class="font-label-caps text-[10px] tracking-widest uppercase text-on-surface-variant">Outerwear</p>
                    <h3 class="font-h3 text-body-lg text-primary">Light Linen Duster</h3>
                    <p class="font-body-md text-on-surface">$520</p>
                </div>
            </div>
        </section>
        <div class="mt-xl flex justify-center border-t border-outline-variant/30 pt-lg">
            <button class="border border-primary px-xl py-md font-button text-button tracking-widest uppercase hover:bg-primary hover:text-on-primary transition-all duration-300">Load More</button>
        </div>
    </main>
    <footer class="w-full pt-xl pb-lg bg-surface dark:bg-surface-container-highest border-t border-outline-variant/30 dark:border-outline/20">
        <div class="max-w-container-max mx-auto px-md md:px-xl grid grid-cols-1 md:grid-cols-4 gap-lg">
            <div class="md:col-span-1 space-y-md">
                <h3 class="font-h3 text-h3 text-primary dark:text-on-primary-fixed">ATELIER</h3>
                <p class="font-body-sm text-body-sm tracking-wide text-on-surface-variant dark:text-on-secondary-fixed-variant leading-relaxed">
                    A curated space for the modern minimalist. We believe in pieces that endure beyond the season.
                </p>
            </div>
            <div class="flex flex-col gap-sm">
                <p class="font-label-caps text-label-caps tracking-widest uppercase text-primary mb-xs">Explore</p>
                <a class="font-body-sm text-body-sm tracking-wide text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors underline decoration-transparent hover:decoration-current" href="#">About</a>
                <a class="font-body-sm text-body-sm tracking-wide text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors underline decoration-transparent hover:decoration-current" href="#">Sustainability</a>
                <a class="font-body-sm text-body-sm tracking-wide text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors underline decoration-transparent hover:decoration-current" href="#">Care</a>
            </div>
            <div class="flex flex-col gap-sm">
                <p class="font-label-caps text-label-caps tracking-widest uppercase text-primary mb-xs">Support</p>
                <a class="font-body-sm text-body-sm tracking-wide text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors underline decoration-transparent hover:decoration-current" href="#">Shipping</a>
                <a class="font-body-sm text-body-sm tracking-wide text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors underline decoration-transparent hover:decoration-current" href="#">Contact</a>
                <a class="font-body-sm text-body-sm tracking-wide text-on-surface-variant dark:text-on-secondary-fixed-variant hover:text-primary dark:hover:text-on-primary-fixed transition-colors underline decoration-transparent hover:decoration-current" href="#">Privacy</a>
            </div>
            <div class="flex flex-col gap-sm">
                <p class="font-label-caps text-label-caps tracking-widest uppercase text-primary mb-xs">Newsletter</p>
                <div class="flex border-b border-primary pb-xs">
                    <input class="bg-transparent border-none focus:ring-0 w-full font-body-sm text-body-sm placeholder:text-outline-variant" placeholder="Email Address" type="email" />
                    <button class="material-symbols-outlined text-primary" data-icon="arrow_forward">arrow_forward</button>
                </div>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-md md:px-xl mt-xl">
            <p class="font-body-sm text-body-sm tracking-wide text-on-surface-variant dark:text-on-secondary-fixed-variant opacity-60">
                © 2024 ATELIER MINIMALIST. ALL RIGHTS RESERVED.
            </p>
        </div>
    </footer>
</body>

</html>