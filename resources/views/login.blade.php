<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet" />
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

        .form-underline-input {
            border: none;
            border-bottom: 1px solid #1A1A1A;
            padding: 12px 0;
            background: transparent;
            width: 100%;
        }

        .form-underline-input:focus {
            outline: none;
            border-bottom: 2px solid #000000;
            box-shadow: none;
        }
    </style>
</head>

<body class="bg-surface text-on-surface selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopNavBar Section -->
    <header class="fixed top-0 w-full z-50 bg-surface/90 backdrop-blur-md border-b border-outline-variant/30">
        <nav class="flex justify-between items-center h-20 px-md md:px-xl max-w-container-max mx-auto">
            <div class="flex items-center space-x-md">
                <a class="font-h2 text-h2 tracking-tighter text-primary" href="#">ATELIER</a>
            </div>
            <div class="hidden md:flex space-x-md items-center">
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">New In</a>
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Collections</a>
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Designers</a>
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Journal</a>
                <a class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors duration-300" href="#">Archive</a>
            </div>
            <div class="flex items-center space-x-md">
                <button class="material-symbols-outlined text-primary cursor-pointer active:scale-95 transition-transform" data-icon="search">search</button>
                <button class="material-symbols-outlined text-primary cursor-pointer active:scale-95 transition-transform" data-icon="person">person</button>
                <button class="material-symbols-outlined text-primary cursor-pointer active:scale-95 transition-transform" data-icon="shopping_bag">shopping_bag</button>
            </div>
        </nav>
    </header>
    <main class="min-h-screen flex items-center justify-center pt-20 px-md">
        <div class="max-w-[1440px] w-full grid grid-cols-1 lg:grid-cols-2 gap-xl items-center">
            <!-- Left Side: Editorial Image/Brand Story -->
            <div class="hidden lg:block relative h-[800px] overflow-hidden">
                <img alt="Editorial" class="w-full h-full object-cover" data-alt="A high-fashion editorial portrait of a model in a minimalist, sculptural ivory architectural setting. The lighting is soft and directional, creating long, elegant shadows. The mood is quiet luxury and sophisticated confidence. The overall color palette is a clean monochromatic spectrum of whites and deep charcoal tones, perfectly aligning with a minimalist fashion brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC6Ur5poR8OkSipZTdsBmUfrQnkWkZEXfSJv4dLbJkRtkH6s-Y-JtNh21gFhc-dWHdZHNyY1KkJ8mACbV9GqQqhir0yCZxVg15MxWtQx6XWyRQ6qA7C8oq4W88EtRvpSb3M4LLKCrodn1tq1jFUhuf82LhQxXmjxozLWbkM3rfgz7ivkpcgn5Xat-nYteSuwpTfm16alif60aMklkp8KibgzqeDaauO9LHNb9kCcmh-EVoAqe0qLGZqr9REFF6wFprmgiW1flIlc8NC" />
                <div class="absolute bottom-lg left-lg right-lg text-white">
                    <p class="font-label-caps text-label-caps tracking-widest uppercase mb-base">The Archive</p>
                    <h2 class="font-h1 text-h1 max-w-md leading-tight">Quietly redefining modern essentials.</h2>
                </div>
            </div>
            <!-- Right Side: Login Form -->
            <div class="flex flex-col items-center justify-center py-xl">
                <div class="w-full max-w-md">
                    <div class="mb-xl text-center lg:text-left">
                        <h1 class="font-h1 text-h2 md:text-h1 mb-sm text-primary">Welcome back</h1>
                        <p class="font-body-md text-body-md text-on-surface-variant">Please enter your details to access your account.</p>
                    </div>
                    <form class="space-y-lg">
                        <div class="space-y-xs">
                            <label class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant" for="email">Email Address</label>
                            <input class="form-underline-input font-body-md" id="email" name="email" placeholder="email@example.com" required="" type="email" />
                        </div>
                        <div class="space-y-xs">
                            <div class="flex justify-between items-center">
                                <label class="font-label-caps text-label-caps tracking-widest uppercase text-on-surface-variant" for="password">Password</label>
                                <a class="font-label-caps text-[10px] tracking-widest uppercase text-on-surface-variant hover:text-primary transition-colors underline decoration-outline-variant underline-offset-4" href="#">Forgot Password</a>
                            </div>
                            <input class="form-underline-input font-body-md" id="password" name="password" placeholder="••••••••" required="" type="password" />
                        </div>
                        <div class="pt-md">
                            <button class="w-full bg-primary text-on-primary py-md font-button text-button uppercase tracking-widest hover:opacity-90 active:scale-[0.98] transition-all duration-300" type="submit">
                                Sign In
                            </button>
                        </div>
                        <div class="flex items-center space-x-md py-md">
                            <div class="h-[1px] bg-outline-variant/30 flex-grow"></div>
                            <span class="font-label-caps text-label-caps text-on-surface-variant">OR</span>
                            <div class="h-[1px] bg-outline-variant/30 flex-grow"></div>
                        </div>
                        <div class="grid grid-cols-2 gap-md">
                            <button class="flex items-center justify-center space-x-sm border border-outline-variant/50 py-sm font-button text-button uppercase tracking-widest hover:bg-surface-container-low transition-colors" type="button">
                                <span class="material-symbols-outlined text-[18px]" data-icon="google">mail</span>
                                <span>Google</span>
                            </button>
                            <button class="flex items-center justify-center space-x-sm border border-outline-variant/50 py-sm font-button text-button uppercase tracking-widest hover:bg-surface-container-low transition-colors" type="button">
                                <span class="material-symbols-outlined text-[18px]" data-icon="apple">ios</span>
                                <span>Apple</span>
                            </button>
                        </div>
                        <div class="pt-lg text-center">
                            <p class="font-body-sm text-body-sm text-on-surface-variant">
                                Don't have an account?
                                <a class="text-primary font-semibold underline underline-offset-4 hover:opacity-70 transition-opacity" href="#">Create Account</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer Section -->
    <footer class="w-full pt-xl pb-lg border-t border-outline-variant/30 bg-surface">
        <div class="max-w-container-max mx-auto px-md md:px-xl grid grid-cols-1 md:grid-cols-4 gap-lg">
            <div class="col-span-1 md:col-span-1">
                <h3 class="font-h3 text-h3 text-primary mb-md">ATELIER</h3>
                <p class="font-body-sm text-body-sm text-on-surface-variant leading-relaxed">Curating timeless pieces for the modern aesthetic. Built on the principles of quality, sustainability, and minimalist luxury.</p>
            </div>
            <div class="flex flex-col space-y-sm">
                <span class="font-label-caps text-label-caps tracking-widest text-primary mb-xs">Shop</span>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">New In</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Collections</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Designers</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Archive</a>
            </div>
            <div class="flex flex-col space-y-sm">
                <span class="font-label-caps text-label-caps tracking-widest text-primary mb-xs">Information</span>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">About</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Sustainability</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Care</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Shipping</a>
            </div>
            <div class="flex flex-col space-y-sm">
                <span class="font-label-caps text-label-caps tracking-widest text-primary mb-xs">Support</span>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Contact</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Privacy</a>
                <div class="pt-md">
                    <p class="font-body-sm text-body-sm text-on-surface-variant mb-sm">Join our newsletter</p>
                    <div class="flex border-b border-primary pb-xs">
                        <input class="bg-transparent border-none focus:ring-0 text-label-caps w-full uppercase" placeholder="EMAIL" type="email" />
                        <button class="material-symbols-outlined text-primary" data-icon="arrow_forward">arrow_forward</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-container-max mx-auto px-md md:px-xl mt-xl pt-md border-t border-outline-variant/10">
            <p class="font-body-sm text-body-sm tracking-wide text-on-surface-variant text-center md:text-left">© 2024 ATELIER MINIMALIST. ALL RIGHTS RESERVED.</p>
        </div>
    </footer>
</body>

</html>