<?php
declare(strict_types=1);

function e(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function skill_icon_svg(mixed $icon): string
{
    return match ($icon) {
        'html5' => '<svg class="skill-icon" viewBox="0 0 40 40" focusable="false"><path fill="#e34f26" d="M5 3h30l-2.7 30.2L20 37 7.7 33.2z"/><path fill="#ef652a" d="M20 5.5v28.7l9.6-3.1L32 5.5z"/><text x="20" y="27" fill="#fff" font-family="Arial,sans-serif" font-size="18" font-weight="800" text-anchor="middle">5</text></svg>',
        'css3' => '<svg class="skill-icon" viewBox="0 0 40 40" focusable="false"><path fill="#1572b6" d="M5 3h30l-2.7 30.2L20 37 7.7 33.2z"/><path fill="#33a9dc" d="M20 5.5v28.7l9.6-3.1L32 5.5z"/><text x="20" y="27" fill="#fff" font-family="Arial,sans-serif" font-size="18" font-weight="800" text-anchor="middle">3</text></svg>',
        'javascript' => '<svg class="skill-icon" viewBox="0 0 40 40" focusable="false"><rect x="3" y="3" width="34" height="34" rx="5" fill="#f7df1e"/><text x="33" y="29" fill="#202124" font-family="Arial,sans-serif" font-size="13" font-weight="800" text-anchor="end">JS</text></svg>',
        'php' => '<svg class="skill-icon" viewBox="0 0 40 40" focusable="false"><ellipse cx="20" cy="20" rx="18" ry="12" fill="#777bb4"/><text x="20" y="24" fill="#fff" font-family="Arial,sans-serif" font-size="12" font-style="italic" font-weight="700" text-anchor="middle">php</text></svg>',
        'laravel' => '<svg class="skill-icon" viewBox="0 0 40 40" focusable="false"><path fill="#f05340" d="M20 2.5 36.5 12v16L20 37.5 3.5 28V12z"/><text x="20" y="28" fill="#fff" font-family="Georgia,serif" font-size="23" font-weight="700" text-anchor="middle">L</text></svg>',
        'audio' => '<svg class="skill-icon skill-icon-audio" viewBox="0 0 40 40" fill="none" focusable="false"><path d="M5 22h4l3-9 5 16 4-21 5 24 4-14 2 4h3" stroke="#ad835d" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></svg>',
        default => '',
    };
}

function safe_http_url(mixed $value): string
{
    if (!is_string($value) || trim($value) === '' || preg_match('/[\x00-\x20]/', $value)) {
        return '';
    }

    $parts = parse_url($value);
    if (!is_array($parts) || !isset($parts['scheme'], $parts['host'])) {
        return '';
    }

    $scheme = strtolower((string) $parts['scheme']);
    if (!in_array($scheme, ['http', 'https'], true) || filter_var($value, FILTER_VALIDATE_URL) === false) {
        return '';
    }

    return $value;
}

function safe_local_image(mixed $value): string
{
    if (!is_string($value) || preg_match('~^assets/images/[A-Za-z0-9._-]+\.(?:png|jpe?g|webp|svg)$~iD', $value) !== 1) {
        return '';
    }

    return is_file(__DIR__ . '/../' . $value) ? $value : '';
}

function safe_mailto(mixed $value): string
{
    if (!is_string($value) || filter_var(trim($value), FILTER_VALIDATE_EMAIL) === false) {
        return '';
    }

    return 'mailto:' . trim($value);
}

function external_link_attributes(): string
{
    return ' target="_blank" rel="noopener noreferrer"';
}
