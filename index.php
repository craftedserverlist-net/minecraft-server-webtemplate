<?php
// index.php
require_once __DIR__ . '/header.php';
?>

<main class="flex-grow">
    <!-- Hero Section -->
    <section class="relative pt-24 pb-20 overflow-hidden border-b border-zinc-800/60">
        <!-- Ambient radial glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[350px] bg-emerald-500/10 blur-[130px] rounded-full pointer-events-none -z-10"></div>

        <div class="max-w-4xl mx-auto px-6 text-center">
            <!-- Server Status Badge -->
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-900/90 border border-zinc-800 text-xs font-medium text-zinc-400 mb-8">
                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                <span>Supported: <?= htmlspecialchars($config['server']['version']) ?></span>
                <span class="text-zinc-600">•</span>
                <span id="player-count">Online: 48 players</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-[1.1] mb-6">
                Redefining the classic <br class="hidden sm:block" />
                <span class="bg-gradient-to-r from-emerald-400 via-teal-300 to-emerald-500 bg-clip-text text-transparent">survival multiplayer</span>.
            </h1>

            <p class="text-base sm:text-lg text-zinc-400 max-w-2xl mx-auto mb-10 leading-relaxed">
                <?= htmlspecialchars($config['server']['tagline']) ?>
            </p>

            <!-- Click to Copy IP Box -->
            <div class="inline-flex flex-col sm:flex-row items-center gap-3 p-2 rounded-xl bg-zinc-900/90 border border-zinc-800 shadow-xl backdrop-blur-sm">
                <div class="flex items-center gap-3 px-4 py-2 font-mono text-sm text-zinc-200">
                    <i data-lucide="terminal" class="w-4 h-4 text-emerald-400"></i>
                    <span id="ip-address"><?= htmlspecialchars($config['server']['ip']) ?></span>
                </div>
                <button 
                    onclick="copyServerIp()" 
                    id="copy-btn" 
                    class="w-full sm:w-auto px-5 py-2.5 rounded-lg bg-zinc-800 hover:bg-zinc-700 text-xs font-semibold text-white tracking-wide transition-all flex items-center justify-center gap-2 active:scale-95"
                >
                    <i data-lucide="copy" class="w-3.5 h-3.5"></i>
                    <span>Copy IP</span>
                </button>
            </div>

            <?php if(!empty($config['server']['bedrock_ip'])): ?>
                <p class="text-xs text-zinc-500 mt-4">
                    Bedrock port: <span class="font-mono text-zinc-400"><?= htmlspecialchars($config['server']['bedrock_port']) ?></span> | IP: <span class="font-mono text-zinc-400"><?= htmlspecialchars($config['server']['bedrock_ip']) ?></span>
                </p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 max-w-6xl mx-auto px-6">
        <div class="text-center max-w-lg mx-auto mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">Engineered for pure gameplay</h2>
            <p class="text-sm text-zinc-400">Everything you love about Minecraft without artificial paywalls or bloat.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php foreach ($config['features'] as$feature): ?>
                <div class="p-7 rounded-2xl bg-zinc-900/50 border border-zinc-800/80 hover:border-zinc-700 hover:bg-zinc-900/80 transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <span class="p-2.5 rounded-xl bg-zinc-800/80 text-emerald-400 border border-zinc-700/60 inline-flex">
                                <i data-lucide="<?= htmlspecialchars($feature['icon']) ?>" class="w-5 h-5"></i>
                            </span>
                            <span class="text-[11px] font-mono font-medium px-2.5 py-1 rounded bg-zinc-800 text-zinc-400 border border-zinc-700/40">
                                <?= htmlspecialchars($feature['badge']) ?>
                            </span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2"><?= htmlspecialchars($feature['title']) ?></h3>
                        <p class="text-sm text-zinc-400 leading-relaxed"><?= htmlspecialchars($feature['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Rules Section -->
    <section id="rules" class="py-20 bg-zinc-950/40 border-y border-zinc-800/50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight mb-2">Server Guidelines</h2>
                <p class="text-sm text-zinc-400">Keep it fair, clean, and fun for all crafters.</p>
            </div>

            <div class="space-y-3">
                <?php foreach ($config['rules'] as $i =>$rule): ?>
                    <div class="p-4 rounded-xl bg-zinc-900/40 border border-zinc-800/60 flex items-start gap-4">
                        <span class="font-mono text-xs font-bold text-emerald-400/80 mt-0.5"><?= sprintf('%02d', $i + 1) ?>.</span>
                        <p class="text-sm text-zinc-300"><?= htmlspecialchars($rule) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Staff Team Section -->
    <section id="team" class="py-24 max-w-6xl mx-auto px-6">
        <div class="text-center max-w-lg mx-auto mb-16">
            <h2 class="text-2xl sm:text-3xl font-bold text-white tracking-tight mb-3">Meet the Team</h2>
            <p class="text-sm text-zinc-400">The developers and moderators keeping the realm running.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 max-w-3xl mx-auto">
            <?php foreach ($config['staff'] as$member): ?>
                <div class="p-5 rounded-2xl bg-zinc-900/40 border border-zinc-800/80 text-center flex flex-col items-center">
                    <img 
                        src="https://mc-heads.net/avatar/<?= htmlspecialchars($member['uuid']) ?>/72" 
                        alt="<?= htmlspecialchars($member['name']) ?>" 
                        class="w-16 h-16 rounded-xl shadow-md mb-3 border border-zinc-700/60"
                        loading="lazy"
                    />
                    <h4 class="font-bold text-white text-base"><?= htmlspecialchars($member['name']) ?></h4>
                    <span class="text-xs font-mono text-zinc-400 mt-0.5"><?= htmlspecialchars($member['role']) ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<script>
    // Copy IP to Clipboard with Feedback
    function copyServerIp() {
        const ip = "<?= addslashes($config['server']['ip']) ?>";
        navigator.clipboard.writeText(ip).then(() => {
            const btn = document.getElementById('copy-btn');
            const originalHTML = btn.innerHTML;
            btn.innerHTML = `<i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i><span class="text-emerald-400">Copied!</span>`;
            lucide.createIcons();
            
            setTimeout(() => {
                btn.innerHTML = originalHTML;
                lucide.createIcons();
            }, 2000);
        });
    }
</script>

<?php require_once __DIR__ . '/footer.php'; ?>