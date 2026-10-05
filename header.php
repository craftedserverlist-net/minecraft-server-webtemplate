<?php
// header.php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($config['server']['name']) ?> — Official Network</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=JetBrains+Mono:wght@500;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS (CDN for fast plug-and-play setup) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        brand: {
                            50: '#ecfdf5',
                            500: '#10b981',
                            600: '#059669',
                            DEFAULT: '#10b981',
                        }
                    }
                }
            }
        }
    </script>
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-[#0b0f17] text-zinc-300 font-sans antialiased selection:bg-brand selection:text-black min-h-screen flex flex-col">

    <!-- Sticky Navigation -->
    <header class="sticky top-0 z-50 backdrop-blur-md bg-[#0b0f17]/80 border-b border-zinc-800/80">
        <div class="max-w-6xl mx-auto px-6 h-16 flex items-center justify-between">
            
            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-3 group">
                <div class="w-9 h-9 rounded-lg bg-zinc-900 border border-zinc-700/80 flex items-center justify-center text-brand font-mono font-bold text-lg shadow-inner group-hover:border-brand/60 transition-colors">
                    <?= substr($config['server']['name'], 0, 1) ?>
                </div>
                <span class="font-bold text-lg text-zinc-100 tracking-tight group-hover:text-white transition-colors">
                    <?= htmlspecialchars($config['server']['name']) ?>
                </span>
            </a>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium text-zinc-400">
                <a href="#features" class="hover:text-zinc-100 transition-colors">Features</a>
                <a href="#rules" class="hover:text-zinc-100 transition-colors">Rules</a>
                <a href="#team" class="hover:text-zinc-100 transition-colors">Team</a>
                <?php if (!empty($config['server']['dynmap_url'])): ?>
                    <a href="<?= htmlspecialchars($config['server']['dynmap_url']) ?>" target="_blank" class="hover:text-zinc-100 transition-colors flex items-center gap-1.5">
                        Live Map <i data-lucide="external-link" class="w-3.5 h-3.5 text-zinc-500"></i>
                    </a>
                <?php endif; ?>
            </nav>

            <!-- Action Buttons -->
            <div class="flex items-center gap-3">
                <a href="<?= htmlspecialchars($config['server']['discord_url']) ?>" target="_blank" class="hidden sm:inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg text-xs font-semibold text-zinc-300 bg-zinc-900 border border-zinc-800 hover:bg-zinc-800 hover:text-white transition-all">
                    <i data-lucide="message-square" class="w-4 h-4 text-indigo-400"></i>
                    Discord
                </a>
                <a href="<?= htmlspecialchars($config['server']['store_url']) ?>" target="_blank" class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-lg text-xs font-semibold text-zinc-900 bg-brand hover:bg-emerald-400 shadow-[0_0_15px_rgba(16,185,129,0.2)] transition-all">
                    <i data-lucide="shopping-bag" class="w-4 h-4"></i>
                    Store
                </a>
            </div>
        </div>
    </header>