<?php
if (!function_exists('cms_image_alt')) {
    /**
     * Alt text from CMS (same keys site-wide): media_alt_text → image_alt → image_alt_text, then fallback.
     *
     * @param array|null 
     * @param string 
     */
    function cms_image_alt($row, $fallback = 'Image')
    {
        if (!is_array($row)) {
            return htmlspecialchars((string) $fallback, ENT_QUOTES, 'UTF-8');
        }
        $t = trim((string) ($row['media_alt_text'] ?? $row['image_alt'] ?? $row['image_alt_text'] ?? ''));
        if ($t === '') {
            $t = (string) $fallback;
        }
        return htmlspecialchars($t, ENT_QUOTES, 'UTF-8');
    }
}
