<?php
// footer.php
require_once __DIR__ . '/config.php';
?>
    <!-- Footer -->
    <footer class="border-t border-zinc-800/80 bg-[#070a0f] py-12">
        <div class="max-w-6xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
            
            <div class="flex items-center gap-3">
                <div class="w-7 h-7 rounded-lg bg-zinc-900 border border-zinc-800 flex items-center justify-center text-brand font-mono font-bold text-sm">
                    <?= substr($config['server']['name'], 0, 1) ?>
                </div>
                <p class="text-xs text-zinc-500">
                    &copy; <?= date('Y') ?> <?= htmlspecialchars($config['server']['name']) ?>. Not an official Minecraft product. Not approved by or associated with Mojang or Microsoft.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="flex items-center gap-6 text-xs text-zinc-400">
                <a href="<?= htmlspecialchars($config['server']['discord_url']) ?>" target="_blank" class="hover:text-zinc-200 transition-colors">Discord</a>
                <a href="<?= htmlspecialchars($config['server']['store_url']) ?>" target="_blank" class="hover:text-zinc-200 transition-colors">Webstore</a>
                <a href="#rules" class="hover:text-zinc-200 transition-colors">Terms & Rules</a>
            </div>

        </div>
    </footer>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>