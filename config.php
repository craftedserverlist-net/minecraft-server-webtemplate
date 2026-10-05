<?php
// config.php - Centralized Server Configuration

$config = [
    'server' => [
        'name'          => 'Your-Server SMP',
        'tagline'       => 'A modern survival & community-driven Minecraft experience.',
        'ip'            => 'play.yourserver.net',
        'bedrock_ip'    => 'bedrock.yourserver.net',
        'bedrock_port'  => '19132',
        'version'       => '1.20.4 - 1.21.x',
        'discord_url'   => 'https://discord.gg/yourserver',
        'store_url'     => 'https://store.yourserver.net',
        'dynmap_url'    => 'https://map.yourserver.net',
    ],

    'features' => [
        [
            'title'       => 'Semi-Vanilla Survival',
            'badge'       => 'Player Favorite',
            'description' => 'Grief prevention, chest sorting, and subtle quality-of-life perks without pay-to-win kits or broken economies.',
            'icon'        => 'pickaxe'
        ],
        [
            'title'       => 'Player-Driven Economy',
            'badge'       => 'Custom Shops',
            'description' => 'No infinite admin shops. Trade raw resources, artifacts, and services on a bustling custom player marketplace.',
            'icon'        => 'coins'
        ],
        [
            'title'       => 'Dungeons & Custom Mobs',
            'badge'       => 'PVE Event',
            'description' => 'Explore instanced ruins and face challenging custom bosses that yield unique cosmetic gear and relics.',
            'icon'        => 'shield'
        ]
    ],

    'rules' => [
        'Respect all players: no harassment, hate speech, or toxicity.',
        'No unapproved client modifications (X-ray, auto-clickers, baritone).',
        'No griefing or looting inside claimed land areas.',
        'Keep mob farms and redstone engines within lag-prevention limits.'
    ],

    'staff' => [
        ['name' => 'Eddie', 'role' => 'Owner / Sysadmin', 'uuid' => '853c80ef-3c37-49fd-aa49-938b674adae6'],
        ['name' => 'Slimey', 'role' => 'Lead Developer',   'uuid' => 'f1b95dc9-2169-42b7-8ccb-0ef8c34f9a0d'],
    ]
];