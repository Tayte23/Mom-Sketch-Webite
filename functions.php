// --- Newleaf Landing: Tailwind + config ---
add_action('wp_enqueue_scripts', function () {
  // Tailwind Play CDN
  wp_enqueue_script(
    'tailwind-play',
    'https://cdn.tailwindcss.com',
    [],
    null,
    true
  );

  // Tailwind config + small helpers (runs after the CDN)
  $cfg = <<<JS
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          brand: { dark:'#0D8A3E', mid:'#1FA44C', light:'#2EC158', mint:'#E9F8EF' }
        },
        boxShadow: { soft:'0 10px 25px 0 rgba(0,0,0,.08)' },
        backgroundImage: { 'metal-green':'linear-gradient(135deg,#0f8f40 0%,#32c75e 40%,#0c7a3a 60%,#4edd82 100%)' }
      }
    }
  };
  JS;

  wp_add_inline_script('tailwind-play', $cfg);

  // Metallic text class (simple CSS)
  $css = <<<CSS
  .metallic{
    background:linear-gradient(90deg,#0f8f40 0%,#56e98e 35%,#0e7f3b 60%,#56e98e 90%);
    -webkit-background-clip:text;background-clip:text;color:transparent;
    text-shadow:0 1px 1px rgba(0,0,0,.08);
  }
  CSS;
  wp_register_style('newleaf-inline', false);
  wp_enqueue_style('newleaf-inline');
  wp_add_inline_style('newleaf-inline', $css);
});
