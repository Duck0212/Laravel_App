<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600&amp;family=Montserrat:wght@400;500;600&amp;display=swap" rel="stylesheet" />
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
            font-size: 20px;
        }

        input:focus {
            outline: none;
            border-bottom-color: #000000 !important;
        }
    </style>
</head>

<body class="bg-surface text-on-surface font-body-md overflow-x-hidden">
    <!-- Suppression Logic: Navigation Shell is excluded because this is a focused transactional/onboarding page -->
    <main class="min-h-screen flex flex-col md:flex-row">
        <!-- Visual Editorial Column -->
        <div class="hidden md:block md:w-1/2 lg:w-3/5 h-screen sticky top-0 bg-surface-container-highest">
            <img class="w-full h-full object-cover" data-alt="A high-fashion editorial photograph featuring a model in architectural, minimalist clothing standing against a stark, high-contrast concrete background. The lighting is harsh and dramatic, casting deep shadows that emphasize the texture of the garments and the clean lines of the setting. The overall mood is sophisticated, quiet, and representative of luxury craftsmanship, following a monochromatic palette of blacks, whites, and soft greys." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC9YIA7TZwFy5bGgFl0Gar2sGkSrGtLHAsgcgEE4jqGUac9IktACpCzDFkA0uoIpjXOhBabqCfv1Z6afukfdD0tWU12Q8Fb4sETybtoGdabBkWDumTIGNIyyBkKLASFdi8UEw00xjEFc8cA_NJ7jWW7WsTktS2w3-RKb4HAuUmP0yHmv8oHCPifQ4TwICm5-Pa5Xk7OephKBE5IdNd4PpNlLaLbmK7aEx7GmGql09iLqnwN2KgtnU6wn5qbFwfd2T5DesmxpIerAPq4" />
            <div class="absolute inset-0 bg-primary/5"></div>
            <div class="absolute bottom-xl left-xl max-w-md text-on-primary-fixed">
                <h2 class="font-h1 text-h1 mb-md">ATELIER</h2>
                <p class="font-body-lg text-body-lg opacity-80">A curation of timeless pieces for the modern silhouette. Join our community of discerning collectors.</p>
            </div>
        </div>
        <!-- Form Column -->
        <div class="w-full md:w-1/2 lg:w-2/5 flex flex-col justify-center px-md lg:px-xl py-xl bg-surface">
            <!-- Mobile Brand Header -->
            <div class="md:hidden mb-lg flex justify-between items-center">
                <h1 class="font-h2 text-h2 text-primary">ATELIER</h1>
                <a class="text-on-surface-variant font-label-caps text-label-caps hover:text-primary transition-colors" href="/">BACK</a>
            </div>
            <div class="max-w-md w-full mx-auto">
                <header class="mb-lg">
                    <span class="font-label-caps text-label-caps tracking-widest text-on-surface-variant mb-xs block">MEMBERSHIP</span>
                    <h2 class="font-h2 text-h2 mb-sm">Create an Account</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant">Sign up to access exclusive collections, early launches, and editorial journals.</p>
                </header>
                <form class="space-y-md">
                    <!-- Name Input -->
                    <div class="group">
                        <label class="font-label-caps text-label-caps text-on-surface-variant group-focus-within:text-primary transition-colors">Full Name</label>
                        <input class="w-full bg-transparent border-t-0 border-x-0 border-b border-outline-variant py-md px-0 placeholder:text-outline focus:ring-0 transition-all font-body-md" placeholder="ELIAS VANCE" type="text" />
                    </div>
                    <!-- Email Input -->
                    <div class="group">
                        <label class="font-label-caps text-label-caps text-on-surface-variant group-focus-within:text-primary transition-colors">Email Address</label>
                        <input class="w-full bg-transparent border-t-0 border-x-0 border-b border-outline-variant py-md px-0 placeholder:text-outline focus:ring-0 transition-all font-body-md" placeholder="ELIAS@ATELIER.COM" type="email" />
                    </div>
                    <!-- Password Input -->
                    <div class="group">
                        <div class="flex justify-between items-end">
                            <label class="font-label-caps text-label-caps text-on-surface-variant group-focus-within:text-primary transition-colors">Password</label>
                        </div>
                        <div class="relative">
                            <input class="w-full bg-transparent border-t-0 border-x-0 border-b border-outline-variant py-md px-0 placeholder:text-outline focus:ring-0 transition-all font-body-md" placeholder="••••••••" type="password" />
                            <button class="absolute right-0 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-primary" type="button">
                                <span class="material-symbols-outlined" data-icon="visibility">visibility</span>
                            </button>
                        </div>
                    </div>
                    <!-- Terms -->
                    <div class="flex items-start gap-sm pt-sm">
                        <input class="mt-1 rounded-none border-outline-variant text-primary focus:ring-primary h-4 w-4" id="terms" type="checkbox" />
                        <label class="font-body-sm text-body-sm text-on-surface-variant" for="terms">
                            I agree to the <a class="underline hover:text-primary transition-colors" href="#">Terms of Service</a> and <a class="underline hover:text-primary transition-colors" href="#">Privacy Policy</a>.
                        </label>
                    </div>
                    <!-- Action Buttons -->
                    <div class="pt-md space-y-md">
                        <button class="w-full bg-primary text-on-primary font-button text-button py-md hover:bg-on-surface-variant transition-all active:scale-95 uppercase tracking-widest" type="submit">
                            CREATE ACCOUNT
                        </button>
                        <div class="relative py-sm">
                            <div class="absolute inset-0 flex items-center"><span class="w-full border-t border-outline-variant/30"></span></div>
                            <div class="relative flex justify-center text-xs uppercase"><span class="bg-surface px-md text-on-surface-variant font-label-caps">Or continue with</span></div>
                        </div>
                        <div class="grid grid-cols-2 gap-md">
                            <button class="flex items-center justify-center gap-sm border border-outline-variant py-md font-button text-button hover:bg-surface-container transition-all uppercase tracking-widest" type="button">
                                <span class="material-symbols-outlined" data-icon="google">google</span> GOOGLE
                            </button>
                            <button class="flex items-center justify-center gap-sm border border-outline-variant py-md font-button text-button hover:bg-surface-container transition-all uppercase tracking-widest" type="button">
                                <span class="material-symbols-outlined" data-icon="apple" data-weight="fill" style="font-variation-settings: 'FILL' 1;">ios</span> APPLE
                            </button>
                        </div>
                    </div>
                </form>
                <footer class="mt-xl text-center">
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        ALREADY HAVE AN ACCOUNT?
                        <a class="text-primary font-semibold hover:underline transition-all underline-offset-4 ml-xs" href="#">SIGN IN</a>
                    </p>
                </footer>
            </div>
        </div>
    </main>
    <!-- Contextual Mini Footer (Since the main shell is suppressed) -->
    <footer class="bg-surface border-t border-outline-variant/30 py-lg">
        <div class="max-w-container-max mx-auto px-md md:px-xl flex flex-col md:flex-row justify-between items-center gap-md">
            <div class="font-h3 text-h3 text-primary">ATELIER</div>
            <div class="flex gap-lg flex-wrap justify-center">
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Support</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Shipping</a>
                <a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors underline" href="#">Sustainability</a>
            </div>
            <div class="font-body-sm text-body-sm text-on-surface-variant opacity-60">
                © 2024 ATELIER MINIMALIST. ALL RIGHTS RESERVED.
            </div>
        </div>
    </footer>
</body>

</html>