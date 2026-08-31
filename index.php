<?php
/**
 * Software People, Inc. — site data + icon set.
 */

function sp_icon(string $name): string {
    $stroke = 'stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round"';
    $navstroke = 'stroke="currentColor" stroke-width="1.4" fill="none" stroke-linecap="round" stroke-linejoin="round"';
    switch ($name) {
        case 'integration':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><rect x="3" y="3" width="13" height="13" rx="2"/><rect x="12" y="12" width="13" height="13" rx="2"/></svg>';
        case 'eai':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><circle cx="6" cy="6" r="3"/><circle cx="22" cy="6" r="3"/><circle cx="14" cy="22" r="3"/><path d="M8.6 7.6L11.5 19.6M19.4 7.6L16.5 19.6M9 6H19"/></svg>';
        case 'erp':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><rect x="4" y="17" width="7" height="7"/><rect x="10.5" y="10" width="7" height="7"/><rect x="17" y="4" width="7" height="7"/></svg>';
        case 'data':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><ellipse cx="14" cy="6" rx="9" ry="3.2"/><path d="M5 6v7c0 1.8 4 3.2 9 3.2s9-1.4 9-3.2V6"/><path d="M5 13v7c0 1.8 4 3.2 9 3.2s9-1.4 9-3.2v-7"/></svg>';
        case 'appdev':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><path d="M10 8L4 14l6 6M18 8l6 6-6 6"/></svg>';
        case 'healthcare':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><circle cx="14" cy="14" r="11"/><path d="M14 9v10M9 14h10"/></svg>';
        case 'financial':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><path d="M4 22V13M11 22V6M18 22v15M25 22V10"/><path d="M18 5l7 5-3 1"/></svg>';
        case 'insurance':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><path d="M14 3l9 3.4v6.3c0 6-3.8 10.4-9 12.3-5.2-1.9-9-6.3-9-12.3V6.4L14 3z"/><path d="M10 14l2.8 2.8L18 11.2"/></svg>';
        case 'telecom':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><path d="M14 5v18M9 25h10"/><path d="M8 10a8.5 8.5 0 0 1 12 0M5 6a13 13 0 0 1 18 0"/></svg>';
        case 'energy':
            return '<svg viewBox="0 0 28 28" '.$stroke.'><path d="M15.5 3L6 16h6.5L12.5 25 22 12h-6.5L15.5 3z"/></svg>';

        /* nav icons */
        case 'nav-about':
            return '<svg viewBox="0 0 20 20" '.$navstroke.'><circle cx="10" cy="10" r="7.2"/><path d="M10 9v4.4M10 6.6v.1"/></svg>';
        case 'nav-capabilities':
            return '<svg viewBox="0 0 20 20" '.$navstroke.'><rect x="2.5" y="2.5" width="6" height="6" rx="1"/><rect x="11.5" y="11.5" width="6" height="6" rx="1"/><path d="M8.5 8.5l3 3"/></svg>';
        case 'nav-industries':
            return '<svg viewBox="0 0 20 20" '.$navstroke.'><path d="M3 17V6l5-3 5 3v11M8 17V9.5"/><path d="M13 17v-6l4-2v8"/></svg>';
        case 'nav-why':
            return '<svg viewBox="0 0 20 20" '.$navstroke.'><path d="M10 2.6l2.1 4.5 4.9.6-3.6 3.4.9 4.9L10 13.6l-4.3 2.4.9-4.9L3 7.7l4.9-.6L10 2.6z"/></svg>';
        case 'nav-contract':
            return '<svg viewBox="0 0 20 20" '.$navstroke.'><path d="M5 2.5h7l3 3V17a.5.5 0 0 1-.5.5h-9A.5.5 0 0 1 5 17V2.5z"/><path d="M7.2 9.2l1.8 1.8 3.8-3.8"/></svg>';
        default:
            return '';
    }
}

$capabilities = [
    ['tag' => 'SYS-INT', 'title' => 'Systems Integration', 'icon' => 'integration',
     'desc' => "Connecting disparate platforms, databases, and legacy infrastructure into one working environment — without disrupting what already runs."],
    ['tag' => 'EAI', 'title' => 'Enterprise Application Integration', 'icon' => 'eai',
     'desc' => 'Middleware, messaging, and data-flow design that lets core business applications share information reliably at scale.'],
    ['tag' => 'ERP / CRM', 'title' => 'ERP &amp; CRM Implementation', 'icon' => 'erp',
     'desc' => "Consultants who understand both the software and the business process it's meant to run — from configuration through go-live."],
    ['tag' => 'DATA', 'title' => 'Business &amp; Data Warehousing', 'icon' => 'data',
     'desc' => 'Structured, governed data environments built for reporting and decisions your teams can actually trust.'],
    ['tag' => 'APP-DEV', 'title' => 'Custom Application Development', 'icon' => 'appdev',
     'desc' => "Purpose-built software for vertical-market requirements that off-the-shelf tools don't cover."],
];

$industries = [
    ['icon' => 'healthcare', 'label' => 'Healthcare'],
    ['icon' => 'financial',  'label' => 'Financial Services'],
    ['icon' => 'insurance',  'label' => 'Insurance'],
    ['icon' => 'telecom',    'label' => 'Telecommunications'],
    ['icon' => 'energy',     'label' => 'Energy'],
];

$founded_year = 1998;
$current_year = date('Y');
$years_active  = $current_year - $founded_year;

/* ---- contact form handling ---- */
$form_sent = false;
$form_errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cf_submit'])) {
    if (!empty($_POST['cf_hp'])) {
        $form_sent = true; 
    } else {
        $name = trim($_POST['cf_name'] ?? '');
        $org  = trim($_POST['cf_org'] ?? '');
        $msg  = trim($_POST['cf_msg'] ?? '');

        if ($name === '') $form_errors[] = 'Please enter your name.';
        if ($msg === '')  $form_errors[] = 'Let us know what you need staffed.';

        if (empty($form_errors)) {
            $to      = 'Info@softwarepeople.us';
            $subject = 'New inquiry from softwarepeople.us';
            $body    = "Name: $name\nOrganization: $org\n\nMessage:\n$msg\n";
            $headers = 'Reply-To: ' . filter_var($name, FILTER_SANITIZE_STRING);
            @mail($to, $subject, $body, $headers);
            $form_sent = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Software People, Inc. — IT Staffing &amp; Systems Integration Since <?= $founded_year ?></title>
<link rel="icon" href="Logo.png" type="image/png">
<meta name="description" content="Software People, Inc. delivers specialized IT staffing, systems integration, and application development for healthcare, financial services, insurance, telecommunications, and energy — since 1998.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=IBM+Plex+Sans:wght@400;500;600&family=IBM+Plex+Mono:wght@400;500&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#0f1730;
    --ink-soft:#525a7d;
    --line:#e2e0d6;
    --line-strong:#cfccbd;
    --paper:#ffffff;
    --panel:#f7f6f1;
    --accent-green:#0f6e1f;
    --accent-green-deep:#0a5417;
    --accent-red:#a3221f;
    --radius-s:2px;
    --radius-m:4px;
    --maxw:1180px;
    --font-display:'Space Grotesk', sans-serif;
    --font-body:'IBM Plex Sans', sans-serif;
    --font-mono:'IBM Plex Mono', monospace;
    
    /* Button Vars */
    --btn-rad: 4px;
    --btn-color-bg: var(--accent-green-deep);
    --btn-color-text: #fff;
    --btn-layer-a: rgba(255,255,255,0.4);
    --btn-layer-b: var(--accent-green);
  }
  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    margin:0;
    font-family:var(--font-body);
    color:var(--ink);
    background:
      radial-gradient(1200px 500px at 85% -10%, rgba(15,110,31,0.035), transparent 60%),
      var(--paper);
    -webkit-font-smoothing:antialiased;
    overflow-x: hidden; /* Prevent scroll from loader */
  }
  
  /* ---------- PRELOADER ---------- */
  #preloader {
    position: fixed;
    inset: 0;
    z-index: 9999;
    background: var(--paper);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 24px;
    transition: opacity 0.6s ease, visibility 0.6s ease;
  }
  body.loaded #preloader {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
  }
  .loader-logo {
    height: 60px;
    width: auto;
    margin-bottom: 10px;
  }
  /* Loader Text Animation */
  .loader {
    --ANIMATION-DELAY-MULTIPLIER: 70ms;
    padding: 0; margin: 0;
    display: flex; flex-direction: row;
    justify-content: center; align-items: center;
    overflow: hidden;
  }
  .loader span {
    padding: 0; margin: 0;
    letter-spacing: -0.2rem; /* Adjusted from -5rem for better readability at this size */
    animation-delay: 0s;
    transform: translateY(4rem);
    animation: hideAndSeek 1s alternate infinite cubic-bezier(0.86, 0, 0.07, 1);
  }
  .loader .l { animation-delay: calc(var(--ANIMATION-DELAY-MULTIPLIER) * 0); }
  .loader .o { animation-delay: calc(var(--ANIMATION-DELAY-MULTIPLIER) * 1); }
  .loader .a { animation-delay: calc(var(--ANIMATION-DELAY-MULTIPLIER) * 2); }
  .loader .d { animation-delay: calc(var(--ANIMATION-DELAY-MULTIPLIER) * 3); }
  .loader .ispan { animation-delay: calc(var(--ANIMATION-DELAY-MULTIPLIER) * 4); }
  .loader .n { animation-delay: calc(var(--ANIMATION-DELAY-MULTIPLIER) * 5); }
  .loader .g { animation-delay: calc(var(--ANIMATION-DELAY-MULTIPLIER) * 6); }
  .letter { width: fit-content; height: 2rem; fill: var(--ink); }
  .i { margin-inline: 2px; }
  @keyframes hideAndSeek {
    0% { transform: translateY(4rem); }
    100% { transform: translateY(0rem); }
  }

  h1,h2,h3{font-family:var(--font-display); margin:0; font-weight:600; letter-spacing:-0.01em;}
  p{margin:0;}
  a{color:inherit;}
  img,svg{display:block; max-width:100%;}
  .wrap{max-width:var(--maxw); margin:0 auto; padding:0 40px;}
  ::selection{background:var(--accent-green); color:#fff;}
  a:focus-visible, button:focus-visible, input:focus-visible, textarea:focus-visible{
    outline:2px solid var(--accent-green); outline-offset:3px;
  }

  /* ---------- NAV ---------- */
  header.site-nav{
    position:fixed; top:0; left:0; right:0; z-index:100;
    background:rgba(255,255,255,0.86);
    backdrop-filter:blur(10px);
    border-bottom:1px solid var(--line);
  }
  .nav-inner{
    max-width:var(--maxw); margin:0 auto; padding:0 40px; height:66px;
    display:flex; align-items:center; justify-content:space-between;
  }
  .mark{
    display:flex; align-items:center; gap:10px; color:var(--ink);
    text-decoration:none; font-family:var(--font-display); font-weight:600; font-size:15px;
  }
  .mark-logo{height:38px; width:auto; flex:none; display:block;}
  .navlinks{display:flex; align-items:center; gap:34px; list-style:none; margin:0; padding:0;}
  .navlinks a{
    display:inline-flex; align-items:center; gap:7px;
    color:var(--ink-soft); text-decoration:none; font-size:14px; position:relative; padding:4px 0;
    transition:color .25s ease;
  }
  .navlinks a svg{width:14px; height:14px; flex:none; color:var(--accent-green-deep); opacity:0.7; transition:opacity .25s ease;}
  .navlinks a:hover{color:var(--ink);}
  .navlinks a:hover svg{opacity:1;}
  .navlinks a::after{
    content:""; position:absolute; left:0; bottom:0; width:0; height:1px; background:var(--accent-green);
    transition:width .25s ease;
  }
  .navlinks a:hover::after{width:100%;}
  
  /* Nav CTA - Simplified version of gradient button for header */
  .nav-cta{
    display:inline-flex; align-items:center; gap:8px; background:var(--ink); border:1px solid var(--ink);
    color:#fff; font-family:var(--font-body); font-size:13.5px; padding:9px 18px; border-radius:var(--radius-s);
    text-decoration:none; transition:background .25s ease, border-color .25s ease;
  }
  .nav-cta:hover{background:var(--accent-green-deep); border-color:var(--accent-green-deep);}

  /* ---------- HERO ---------- */
  .hero{padding:158px 0 90px; position:relative; overflow:hidden;}
  
  /* Grid Background for Hero */
  .grid-background {
    position: absolute;
    top: 0; right: 0; bottom: 0; left: 0;
    z-index: -1;
    background-image: linear-gradient(to right, var(--line-strong) 1.5px, transparent 1.5px),
      linear-gradient(to bottom, var(--line-strong) 1.5px, transparent 1.5px);
    background-size: 40px 40px;
    opacity: 0.7;
    mask-image: radial-gradient(ellipse 80% 60% at 50% 40%, #000 40%, transparent 100%);
    -webkit-mask-image: radial-gradient(ellipse 80% 60% at 50% 40%, #000 40%, transparent 100%);
  }

  .hero-grid{display:grid; grid-template-columns:1.05fr 0.95fr; gap:40px; align-items:center;}
  .eyebrow-line{
    display:flex; align-items:center; gap:10px; font-family:var(--font-mono); font-size:12.5px;
    color:var(--accent-red); margin-bottom:26px;
  }
  .eyebrow-line .dot{width:6px; height:6px; border-radius:50%; background:var(--accent-red); box-shadow:0 0 0 3px rgba(163,34,31,0.15);}
  .hero h1{font-size:clamp(34px, 4.6vw, 55px); line-height:1.06; max-width:11.4em; color:var(--ink);}
  .hero h1 em{font-style:normal; color:var(--accent-green-deep);}
  .hero-sub{margin-top:26px; font-size:17px; line-height:1.65; color:var(--ink-soft); max-width:46ch;}
  
  .hero-actions{display:flex; align-items:center; gap:22px; margin-top:38px; flex-wrap:wrap;}
  
  /* ---------- GRADIENT BUTTON (Uiverse Adaptation) ---------- */
  .btn-wrapper {
    --rad: var(--radius-s);
    --color-wrapper-border: var(--line-strong);
    --color-btn-bg: var(--btn-color-bg);
    --color-btn-text: var(--btn-color-text);
    --color-btn-text-shadow: rgba(0,0,0,0.3);
    --color-btn-inset-shadow: rgba(0,0,0,0.2);
    --color-layer-a: var(--btn-layer-a);
    --color-layer-b: var(--btn-layer-b);
    --color-overlay-text: #fff;
    --color-overlay-glow: rgba(255,255,255,0.4);
    --color-overlay-shadow: rgba(0,0,0,0.2);
    --color-overlay-highlight: rgba(255,255,255,0.2);
    
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    overflow: clip;
    overflow-clip-margin: 4px;
    border: 1px solid var(--color-wrapper-border);
    border-radius: var(--rad);
    font-family: var(--font-body);
    font-size: 15px;
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    filter: saturate(0.8) brightness(1.1);
    transition: transform 0.2s ease, filter 0.2s ease;
  }
  .btn-wrapper:hover {
    transform: translateY(-2px);
    filter: saturate(1) brightness(1.2);
  }
  .gradient-btn {
    position: relative;
    z-index: 0;
    padding: 14px 28px;
    border: none;
    border-radius: var(--rad);
    font-family: inherit;
    font-size: inherit;
    font-weight: inherit;
    letter-spacing: 0.02em;
    color: var(--color-btn-text);
    background-color: var(--color-btn-bg);
    background-size: 200% 200%;
    box-shadow: inset 0 0 10px 4px var(--color-btn-inset-shadow);
    text-shadow: 0 1px 2px var(--color-btn-text-shadow);
    mix-blend-mode: color-dodge;
    transition: color 0.3s ease, text-shadow 0.3s ease;
    pointer-events: none; /* Let wrapper handle clicks */
  }
  .gradient-layer {
    position: absolute;
    pointer-events: none;
    left: -160px;
    width: 500%;
    aspect-ratio: 1;
    background: radial-gradient(
      ellipse at 65% 180%,
      var(--color-layer-a),
      var(--color-layer-b),
      var(--color-layer-a),
      var(--color-layer-b),
      var(--color-layer-a)
    );
    mix-blend-mode: difference;
    animation: rotate 8s linear infinite;
    z-index: 0;
  }
  .gradient-layer:last-of-type {
    mix-blend-mode: color-dodge;
  }
  @keyframes rotate {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  .text-overlay {
    position: absolute;
    pointer-events: none;
    z-index: 2;
    padding: 14px 28px;
    border-radius: var(--rad);
    font-family: inherit;
    font-size: inherit;
    font-weight: inherit;
    letter-spacing: 0.02em;
    color: var(--color-overlay-text);
    text-shadow: 0 0 4px var(--color-overlay-glow);
    box-shadow:
      inset 0 -2px 4px 0 var(--color-overlay-shadow),
      inset 0 2px 4px 0 var(--color-overlay-highlight);
    mix-blend-mode: multiply;
    transition: transform 0.3s ease;
    animation: opacityPulse 5s ease infinite;
  }
  .light {
    position: absolute;
    pointer-events: none;
    z-index: 1;
    border-radius: 50px;
    width: 80%;
    height: 1.9rem;
    aspect-ratio: 1;
    background-color: rgba(255,255,255,0.15);
    filter: blur(5px);
    animation: pulse 3s ease-in-out infinite;
  }
  @keyframes pulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.1; } }
  @keyframes opacityPulse { 0%, 100% { opacity: 1; } 50% { opacity: 0.8; } }

  /* Ghost Button */
  .btn-ghost{
    color:var(--ink); text-decoration:none; font-size:14.5px; border-bottom:1px solid var(--line-strong);
    padding-bottom:2px; transition:border-color .2s ease, color .2s ease;
  }
  .btn-ghost:hover{border-color:var(--accent-green-deep); color:var(--accent-green-deep);}
  
  .hero-meta{margin-top:54px; display:flex; gap:44px; flex-wrap:wrap; font-family:var(--font-mono);}
  .hero-meta div{border-left:1px solid var(--line-strong); padding-left:14px;}
  .hero-meta .num{font-size:22px; color:var(--ink); font-family:var(--font-display); font-weight:600;}
  .hero-meta .lbl{font-size:11.5px; color:var(--ink-soft); margin-top:4px;}

  .js-anim .hero-anim-target{opacity:0;}

  .hero-diagram{position:relative; aspect-ratio:1/1;}
  .hero-diagram svg{width:100%; height:auto; transition:opacity .8s ease;}
  .three-mount{
    position:absolute; inset:0; opacity:0; pointer-events:none;
    transition:opacity 1s ease;
  }
  .three-mount canvas{width:100% !important; height:100% !important; display:block;}
  .hero-diagram.three-active svg{opacity:0;}
  .hero-diagram.three-active .three-mount{opacity:1;}
  .node-line{stroke:var(--line-strong); stroke-width:1.2; fill:none; stroke-dasharray:260; stroke-dashoffset:260; animation:draw 1.4s ease forwards;}
  .node-line.signal{stroke:rgba(163,34,31,0.55);}
  .pulse-dot{r:2.6; fill:var(--accent-green); opacity:0; animation:pulseTravel 5.5s ease-in-out infinite;}
  .node-circle{fill:#fff; stroke:var(--line-strong); stroke-width:1.2;}
  .node-hub{fill:#fff; stroke:var(--accent-green); stroke-width:1.6;}
  .node-label{font-family:var(--font-mono); font-size:9.5px; fill:var(--ink-soft); letter-spacing:0.03em;}
  .hub-label{font-family:var(--font-display); font-size:11.5px; font-weight:600; fill:var(--ink);}
  @keyframes draw{ to{ stroke-dashoffset:0; } }
  @keyframes pulseTravel{ 0%{opacity:0;} 8%{opacity:1;} 46%{opacity:1;} 54%{opacity:0;} 100%{opacity:0;} }

  /* ---------- SPINE ---------- */
  .spine-section{position:relative;}
  .spine-section .wrap{position:relative;}
  .spine{position:absolute; left:40px; top:0; bottom:0; width:1px; background:var(--line);}
  .spine-fill{
    position:absolute; left:40px; top:0; width:1px; height:0;
    background:var(--accent-green); transform-origin:top;
    transition:height .1s linear;
  }
  .spine-node{
    position:absolute; left:40px; transform:translate(-50%,-50%);
    width:9px; height:9px; border-radius:50%; background:#fff; border:1.5px solid var(--accent-green);
    z-index:1;
  }
  .spine-node.lit{background:var(--accent-green);}

  .scroll-progress{
    position:fixed; top:65px; left:0; height:2px; width:0%;
    background:var(--accent-green); z-index:101; transition:width .08s linear;
  }

  section{padding:100px 0;}
  .alt-panel{background:var(--panel); position:relative;}
  .section-head{max-width:640px; margin-bottom:52px; padding-left:56px;}
  .section-head h2{font-size:clamp(26px, 3vw, 35px); line-height:1.15;}
  .section-head p{margin-top:16px; font-size:16px; line-height:1.65; color:var(--ink-soft);}

  /* ---------- ABOUT ---------- */
  .about-body{padding-left:56px; display:grid; grid-template-columns:1.3fr 0.9fr; gap:64px;}
  .about-body p{font-size:16.5px; line-height:1.75; color:var(--ink-soft);}
  .about-body p + p{margin-top:18px;}
  .about-figures{display:flex; flex-direction:column; gap:26px; border-left:1px solid var(--line); padding-left:28px;}
  .about-figures .fig-num{font-family:var(--font-display); font-size:30px; font-weight:600; color:var(--ink);}
  .about-figures .fig-lbl{font-size:13.5px; color:var(--ink-soft); margin-top:4px; line-height:1.4;}

  /* ---------- CAPABILITIES ---------- */
  .cap-list{padding-left:56px;}
  .cap-row{display:grid; grid-template-columns:52px 150px 1fr; gap:26px; padding:28px 0; border-top:1px solid var(--line); align-items:start;}
  .cap-row:last-child{border-bottom:1px solid var(--line);}
  .cap-icon{
    width:52px; height:52px; border:1px solid var(--line-strong); border-radius:var(--radius-m);
    display:flex; align-items:center; justify-content:center; color:var(--accent-green-deep); background:#fff;
    transition:border-color .2s ease, transform .2s ease;
  }
  .cap-row:hover .cap-icon{border-color:var(--accent-green); transform:translateY(-2px);}
  .cap-icon svg{width:26px; height:26px;}
  .cap-tag{font-family:var(--font-mono); font-size:12.5px; color:var(--accent-red); padding-top:4px;}
  .cap-row h3{font-size:19px; color:var(--ink); font-weight:600; margin-bottom:8px;}
  .cap-row p{font-size:15px; line-height:1.6; color:var(--ink-soft); max-width:56ch;}

  /* ---------- INDUSTRIES ---------- */
  .industry-wrap{padding-left:56px;}
  .industry-grid{display:flex; flex-wrap:wrap; gap:14px;}
  .chip{
    display:flex; align-items:center; gap:10px; border:1px solid var(--line-strong); padding:13px 20px 13px 14px;
    border-radius:var(--radius-s); font-size:15px; color:var(--ink); background:#fff;
    transition:border-color .2s ease, transform .2s ease;
  }
  .chip svg{width:20px; height:20px; color:var(--accent-green-deep); flex:none;}
  .chip:hover{border-color:var(--accent-green); transform:translateY(-2px);}

  /* ---------- WHY ---------- */
  .why-grid{padding-left:56px; display:grid; grid-template-columns:1fr 1fr; gap:0; border-top:1px solid var(--line);}
  .why-col{padding:34px 34px 34px 0;}
  .why-col:first-child{border-right:1px solid var(--line);}
  .why-col h3{font-size:14px; font-family:var(--font-mono); font-weight:400; color:var(--accent-red); margin-bottom:18px;}
  .why-col ul{list-style:none; margin:0; padding:0;}
  .why-col li{font-size:15.5px; line-height:1.6; color:var(--ink-soft); padding:12px 0; border-top:1px solid var(--line);}
  .why-col li:first-child{border-top:none;}

  /* ---------- CONTRACT ---------- */
  .contract-panel{
    margin-left:56px; border:1px solid var(--line-strong); background:#fff; border-radius:var(--radius-m);
    padding:40px 44px; display:grid; grid-template-columns:1fr auto; gap:30px; align-items:center;
  }
  .contract-panel .k{font-family:var(--font-mono); font-size:12.5px; color:var(--accent-green-deep); margin-bottom:10px; display:block;}
  .contract-panel h3{font-size:22px; margin-bottom:10px;}
  .contract-panel p{color:var(--ink-soft); font-size:15px; line-height:1.6; max-width:52ch;}
  .contract-link{
    white-space:nowrap; font-size:14.5px; font-weight:600; color:var(--ink); text-decoration:none;
    border:1px solid var(--ink); padding:12px 22px; border-radius:var(--radius-s);
    transition:background .2s ease, color .2s ease;
  }
  .contract-link:hover{background:var(--ink); color:#fff;}

  /* ---------- CONTACT ---------- */
  .contact{border-top:1px solid var(--line); border-bottom:1px solid var(--line);}
  .contact .wrap{display:grid; grid-template-columns:1.1fr 0.9fr; gap:60px; align-items:start; padding-top:96px; padding-bottom:96px;}
  .contact h2{font-size:clamp(28px, 4vw, 42px); line-height:1.12; max-width:12em;}
  .contact .lead{margin-top:16px; font-size:16px; color:var(--ink-soft); max-width:44ch; line-height:1.6;}
  .direct-email{
    margin-top:30px; display:inline-block; font-size:15px; color:var(--ink); text-decoration:none;
    border-bottom:1px solid var(--line-strong); padding-bottom:2px;
  }
  .direct-email:hover{color:var(--accent-green-deep); border-color:var(--accent-green-deep);}

  .contact-form{display:flex; flex-direction:column; gap:16px;}
  .contact-form label{font-family:var(--font-mono); font-size:12px; color:var(--ink-soft);}
  .contact-form input, .contact-form textarea{
    background:#fff; border:1px solid var(--line-strong); border-radius:var(--radius-s);
    color:var(--ink); font-family:var(--font-body); font-size:15.5px; padding:11px 13px;
    outline:none; transition:border-color .2s ease;
  }
  .contact-form input:focus, .contact-form textarea:focus{border-color:var(--accent-green);}
  .contact-form textarea{resize:vertical; min-height:70px;}
  .hp-field{position:absolute; left:-9999px; opacity:0;}
  .contact-submit{
    align-self:flex-start; margin-top:6px; background:var(--ink); color:#fff; border:none;
    font-family:var(--font-body); font-weight:600; font-size:14.5px; padding:13px 24px;
    border-radius:var(--radius-s); cursor:pointer; transition:background .2s ease, transform .2s ease;
  }
  .contact-submit:hover{background:var(--accent-green-deep); transform:translateY(-1px);}
  .form-note{font-size:13.5px; padding:12px 14px; border-radius:var(--radius-s); margin-bottom:4px;}
  .form-note.ok{background:#eef5ee; color:#2f6b3a; border:1px solid #cfe6cf;}
  .form-note.err{background:#fbeeee; color:#9a3030; border:1px solid #f0cccc;}

  /* ---------- FOOTER ---------- */
  footer{padding:26px 0 40px; font-size:13px; color:var(--ink-soft);}
  footer .wrap{display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:12px;}
  footer a{color:var(--ink-soft); text-decoration:none; margin-left:20px;}
  footer a:hover{color:var(--accent-green-deep);}
  .foot-links a:first-child{margin-left:0;}
  .foot-brand{display:inline-flex; align-items:center; gap:8px;}
  .footer-logo{height:20px; width:auto; opacity:0.7;}

  /* ---------- SCROLL ANIMATIONS (jQuery) ---------- */
  .anim-fade-up{opacity:0; transform:translateY(40px);}
  .anim-fade-down{opacity:0; transform:translateY(-40px);}
  .anim-fade-left{opacity:0; transform:translateX(-60px);}
  .anim-fade-right{opacity:0; transform:translateX(60px);}
  .anim-scale{opacity:0; transform:scale(0.9);}
  .anim-fade-up.in,.anim-fade-down.in,.anim-fade-left.in,.anim-fade-right.in,.anim-scale.in{opacity:1; transform:none;}
  .anim-stagger-1{transition-delay:.05s;}
  .anim-stagger-2{transition-delay:.12s;}
  .anim-stagger-3{transition-delay:.19s;}
  .anim-stagger-4{transition-delay:.26s;}
  .anim-stagger-5{transition-delay:.33s;}

  @media (prefers-reduced-motion: reduce){
    html{scroll-behavior:auto;}
    .node-line{animation:none; stroke-dashoffset:0;}
    .pulse-dot{animation:none; opacity:0;}
    .reveal,.anim-fade-up,.anim-fade-down,.anim-fade-left,.anim-fade-right,.anim-scale{opacity:1; transform:none; transition:none;}
    .btn-wrapper:hover, .chip:hover, .contact-submit:hover, .cap-row:hover .cap-icon{transform:none;}
    .gradient-layer, .light, .text-overlay { animation: none; }
  }

  @media (max-width: 980px){
    .wrap{padding:0 24px;}
    .nav-inner{padding:0 24px;}
    .navlinks{display:none;}
    .hero{padding:130px 0 60px;}
    .hero-grid{grid-template-columns:1fr; gap:50px;}
    .hero-diagram{max-width:420px; margin:0 auto;}
    .about-body{grid-template-columns:1fr; gap:34px; padding-left:0;}
    .section-head{padding-left:0;}
    .cap-list, .industry-wrap, .why-grid{padding-left:0;}
    .cap-row{grid-template-columns:1fr; gap:12px; padding:24px 0;}
    .cap-row .cap-tag{grid-column:1; padding-top:0;}
    .cap-row .cap-icon{width:44px; height:44px;}
    .cap-row h3{font-size:18px; margin-bottom:6px;}
    .cap-row p{font-size:15px; line-height:1.7; max-width:none;}
    .why-grid{grid-template-columns:1fr;}
    .why-col:first-child{border-right:none; border-bottom:1px solid var(--line);}
    .contract-panel{margin-left:0; grid-template-columns:1fr; text-align:left;}
    .contact .wrap{grid-template-columns:1fr; gap:44px; padding-top:70px; padding-bottom:70px;}
    .spine, .spine-node{display:none;}
  }
  @media (max-width: 560px){
    .hero-meta{gap:26px;}
    .hero-actions{gap:16px;}
  }
</style>
</head>
<body>

<!-- PRELOADER -->
<div id="preloader">
  <img src="Logo.png" alt="Software People" class="loader-logo">
  <div class="loader">
    <span class="l"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 11 18" height="18" width="11" class="letter"><path fill="black" d="M0.28 16.14V0.94L3.7 0.64L5.7 1.64V12.3L8.5 12.06L10.5 13.06V16.44L2.28 17.14L0.28 16.14ZM3.5 12.7V0.859999L0.48 1.12V15.94L8.3 15.26V12.28L3.5 12.7Z"></path></svg></span>
    <span class="o"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18" height="18" width="16" class="letter"><path fill="black" d="M8.94 17.24C8.84667 17.2533 8.74667 17.26 8.64 17.26C8.54667 17.26 8.45333 17.26 8.36 17.26C7.66667 17.26 7.02667 17.16 6.44 16.96C5.86667 16.7733 5.30667 16.5533 4.76 16.3C3.33333 15.5933 2.28667 14.6 1.62 13.32C0.966667 12.0267 0.64 10.4933 0.64 8.72C0.64 7.68 0.766667 6.67333 1.02 5.7C1.28667 4.71333 1.68 3.82667 2.2 3.04C2.72 2.24 3.36667 1.58667 4.14 1.08C4.92667 0.573332 5.84667 0.273333 6.9 0.18C7.00667 0.166666 7.10667 0.159999 7.2 0.159999C7.29333 0.159999 7.38667 0.159999 7.48 0.159999C8.14667 0.159999 8.74 0.246666 9.26 0.419999C9.78 0.579999 10.3067 0.766666 10.84 0.979999C11.8 1.36667 12.6 1.94 13.24 2.7C13.88 3.46 14.36 4.35333 14.68 5.38C15 6.39333 15.16 7.48 15.16 8.64C15.16 9.72 15.0333 10.7533 14.78 11.74C14.5267 12.7267 14.14 13.62 13.62 14.42C13.1133 15.2067 12.4667 15.8467 11.68 16.34C10.9067 16.8467 9.99333 17.1467 8.94 17.24ZM6.92 16.04C7.94667 15.96 8.84 15.68 9.6 15.2C10.36 14.7067 10.9867 14.0733 11.48 13.3C11.9733 12.5133 12.34 11.64 12.58 10.68C12.8333 9.70667 12.96 8.69333 12.96 7.64C12.96 6.68 12.8467 5.76667 12.62 4.9C12.4067 4.02 12.0733 3.24 11.62 2.56C11.1667 1.88 10.5933 1.34667 9.9 0.959999C9.22 0.559999 8.41333 0.359999 7.48 0.359999C7.38667 0.359999 7.29333 0.359999 7.2 0.359999C7.12 0.359999 7.02667 0.366666 6.92 0.38C5.89333 0.473333 5 0.766666 4.24 1.26C3.48 1.74 2.84667 2.37333 2.34 3.16C1.83333 3.93333 1.45333 4.8 1.2 5.76C0.96 6.70667 0.84 7.69333 0.84 8.72C0.84 9.72 0.953333 10.6667 1.18 11.56C1.40667 12.44 1.74667 13.22 2.2 13.9C2.65333 14.5667 3.22667 15.0933 3.92 15.48C4.61333 15.8667 5.42 16.06 6.34 16.06C6.44667 16.06 6.54667 16.06 6.64 16.06C6.73333 16.06 6.82667 16.0533 6.92 16.04ZM6.92 12.94C6.86667 12.94 6.81333 12.9467 6.76 12.96C6.72 12.96 6.67333 12.96 6.62 12.96C5.82 12.96 5.18667 12.6133 4.72 11.92C4.26667 11.2267 4.04 10.0667 4.04 8.44C4.04 7.28 4.16667 6.34667 4.42 5.64C4.67333 4.93333 5.02 4.41333 5.46 4.08C5.9 3.73333 6.38667 3.54 6.92 3.5C6.97333 3.5 7.02667 3.5 7.08 3.5C7.13333 3.48667 7.18667 3.48 7.24 3.48C8.02667 3.48 8.64 3.82 9.08 4.5C9.52 5.16667 9.74 6.31333 9.74 7.94C9.74 9.67333 9.47333 10.9267 8.94 11.7C8.42 12.46 7.74667 12.8733 6.92 12.94ZM6.86 12.74C7.64667 12.6733 8.28667 12.2733 8.78 11.54C9.28667 10.8067 9.54 9.60667 9.54 7.94C9.54 7.18 9.49333 6.53333 9.4 6C9.30667 5.46667 9.16667 5.03333 8.98 4.7C8.91333 4.68667 8.84667 4.68 8.78 4.68C8.71333 4.66667 8.64667 4.66 8.58 4.66C7.79333 4.66 7.20667 5.07333 6.82 5.9C6.43333 6.71333 6.24 7.89333 6.24 9.44C6.24 10.2133 6.29333 10.8733 6.4 11.42C6.50667 11.9533 6.66 12.3933 6.86 12.74Z"></path></svg></span>
    <span class="a"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 15 18" height="18" width="15" class="letter"><path fill="black" d="M9.28 15.76L8.54 13.38L6.96 13.52L5.98 17.02L2.58 17.32L0.58 16.32L4.96 0.699999L8.26 0.419999L10.26 1.42L14.72 16.48L11.28 16.76L9.28 15.76ZM5.12 0.899999L0.88 16.08L3.8 15.84L4.8 12.34L8.36 12.02L9.42 15.56L12.44 15.3L8.1 0.64L5.12 0.899999ZM5.5 9.42C5.75333 8.59333 5.96 7.80667 6.12 7.06C6.29333 6.31333 6.44 5.56667 6.56 4.82H6.64C6.74667 5.55333 6.88 6.27333 7.04 6.98C7.21333 7.67333 7.42 8.42 7.66 9.22L5.5 9.42Z"></path></svg></span>
    <span class="d"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 18" height="18" width="14" class="letter"><path fill="black" d="M0.28 16.24V1.04L4.44 0.679999C4.61333 0.666666 4.78 0.66 4.94 0.66C5.1 0.646666 5.24667 0.64 5.38 0.64C6.11333 0.64 6.76667 0.726666 7.34 0.899999C7.92667 1.07333 8.56667 1.32667 9.26 1.66C10.1933 2.08667 10.9533 2.61333 11.54 3.24C12.1267 3.85333 12.56 4.61333 12.84 5.52C13.12 6.41333 13.26 7.50667 13.26 8.8C13.26 10.4933 12.9733 11.92 12.4 13.08C11.84 14.24 11.0667 15.1333 10.08 15.76C9.09333 16.3733 7.95333 16.74 6.66 16.86L2.28 17.24L0.28 16.24ZM4.64 15.68C5.89333 15.5733 7 15.2133 7.96 14.6C8.93333 13.9867 9.69333 13.1133 10.24 11.98C10.7867 10.8467 11.06 9.45333 11.06 7.8C11.06 5.53333 10.5733 3.80667 9.6 2.62C8.64 1.43333 7.21333 0.84 5.32 0.84C5.18667 0.84 5.04667 0.846666 4.9 0.859999C4.75333 0.859999 4.60667 0.866666 4.46 0.879999L0.48 1.22V16.02L4.64 15.68ZM3.5 3.9L4.08 3.86C4.22667 3.84667 4.36 3.84 4.48 3.84C4.61333 3.82667 4.74667 3.82 4.88 3.82C5.57333 3.82 6.14 3.94667 6.58 4.2C7.03333 4.45333 7.36667 4.88667 7.58 5.5C7.80667 6.11333 7.92 6.97333 7.92 8.08C7.92 9.65333 7.59333 10.8067 6.94 11.54C6.28667 12.26 5.4 12.6667 4.28 12.76L3.5 12.82V3.9ZM5.7 12.2C6.38 11.9067 6.88667 11.4333 7.22 10.78C7.55333 10.1133 7.72 9.21333 7.72 8.08C7.72 6.66667 7.52 5.65333 7.12 5.04C7.06667 5.02667 7.01333 5.02 6.96 5.02C6.90667 5.02 6.85333 5.02 6.8 5.02C6.68 5.02 6.56 5.02667 6.44 5.04C6.33333 5.04 6.22 5.04667 6.1 5.06L5.7 5.08V12.2Z"></path></svg></span>
    <span class="ispan"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 17" height="18" width="6" class="letter i"><path fill="black" d="M0.38 15.96V0.76L3.86 0.439999L5.86 1.44V16.64L2.38 16.94L0.38 15.96ZM0.58 0.94V15.74L3.66 15.46V0.66L0.58 0.94Z"></path></svg></span>
    <span class="n"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 13 18" height="18" width="13" class="letter"><path fill="black" d="M7.22 15.82L5.72 12.44V16.92L2.28 17.22L0.28 16.22V1.02L3.52 0.74L5.52 1.74L7 4.94V0.64L10.48 0.319999L12.48 1.32V16.54L9.22 16.82L7.22 15.82ZM7.2 0.819999V6.42C7.2 6.56667 7.20667 6.80667 7.22 7.14C7.23333 7.46 7.24667 7.8 7.26 8.16C7.28667 8.50667 7.30667 8.80667 7.32 9.06C7.33333 9.3 7.34 9.42 7.34 9.42L7.28 9.46C7.28 9.46 7.26 9.38667 7.22 9.24C7.19333 9.09333 7.14667 8.92 7.08 8.72C7.01333 8.50667 6.94 8.31333 6.86 8.14L3.4 0.959999L0.48 1.2V16L3.52 15.76V10.52C3.52 10.36 3.51333 10.0867 3.5 9.7C3.48667 9.31333 3.47333 8.90667 3.46 8.48C3.46 8.05333 3.45333 7.69333 3.44 7.4C3.42667 7.09333 3.42 6.94 3.42 6.94L3.48 6.92C3.48 6.92 3.51333 7.05333 3.58 7.32C3.66 7.57333 3.76667 7.84 3.9 8.12L7.4 15.62L10.28 15.36V0.539999L7.2 0.819999Z"></path></svg></span>
    <span class="g"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 15 18" height="18" width="15" class="letter"><path fill="black" d="M14.04 13.72C13.64 14.6533 12.9933 15.44 12.1 16.08C11.22 16.72 10.1333 17.0933 8.84 17.2C8.72 17.2133 8.6 17.22 8.48 17.22C8.36 17.22 8.24 17.22 8.12 17.22C7.12 17.22 6.16667 17.0467 5.26 16.7C4.36667 16.3533 3.57333 15.8333 2.88 15.14C2.18667 14.4333 1.64 13.54 1.24 12.46C0.84 11.38 0.64 10.1 0.64 8.62C0.64 7.48667 0.78 6.42667 1.06 5.44C1.34 4.44 1.74667 3.55333 2.28 2.78C2.82667 2.00667 3.48667 1.38667 4.26 0.92C5.03333 0.453333 5.90667 0.179999 6.88 0.0999997C6.96 0.0866657 7.04 0.0799987 7.12 0.0799987C7.2 0.0799987 7.28 0.0799987 7.36 0.0799987C8.33333 0.0799987 9.28 0.299999 10.2 0.74C11.1333 1.18 11.9467 1.78 12.64 2.54C13.3467 3.3 13.8467 4.16 14.14 5.12L11.76 6.46L12.04 6.44L14.04 7.44V13.72ZM5.9 7.16V10L8.98 9.74V11.46C8.80667 11.8067 8.52667 12.1067 8.14 12.36C7.76667 12.6 7.37333 12.7333 6.96 12.76C6.90667 12.7733 6.84667 12.78 6.78 12.78C6.72667 12.78 6.66667 12.78 6.6 12.78C5.73333 12.78 5.08 12.4333 4.64 11.74C4.2 11.0467 3.98 9.92 3.98 8.36C3.98 6.94667 4.20667 5.82 4.66 4.98C5.11333 4.14 5.84 3.68 6.84 3.6H7.06C7.60667 3.6 8.07333 3.76 8.46 4.08C8.86 4.4 9.14667 4.86667 9.32 5.48L11.9 4.02C11.6733 3.38 11.36 2.78 10.96 2.22C10.5733 1.64667 10.0867 1.18 9.5 0.819999C8.91333 0.459999 8.2 0.28 7.36 0.28C7.29333 0.28 7.22 0.28 7.14 0.28C7.06 0.28 6.98 0.286666 6.9 0.299999C5.63333 0.406666 4.54667 0.846666 3.64 1.62C2.73333 2.38 2.04 3.37333 1.56 4.6C1.08 5.81333 0.84 7.15333 0.84 8.62C0.84 10.14 1.06 11.4533 1.5 12.56C1.94 13.6667 2.56667 14.52 3.38 15.12C4.19333 15.72 5.16 16.02 6.28 16.02C6.37333 16.02 6.46 16.02 6.54 16.02C6.63333 16.02 6.72667 16.0133 6.82 16C8.07333 15.8933 9.12667 15.54 9.98 14.94C10.8467 14.3267 11.4733 13.5733 11.86 12.68V6.66L5.9 7.16ZM9.2 5.78C9.14667 5.59333 9.08667 5.42 9.02 5.26C8.95333 5.08667 8.88 4.93333 8.8 4.8C8.2 4.85333 7.70667 5.06667 7.32 5.44C6.94667 5.8 6.66667 6.29333 6.48 6.92L10.8 6.56L9.2 5.78ZM7.8 11.26L6.24 10.46C6.26667 10.9933 6.32 11.4133 6.4 11.72C6.49333 12.0133 6.62667 12.3 6.8 12.58C6.84 12.5667 6.88667 12.56 6.94 12.56C7.28667 12.5333 7.63333 12.4267 7.98 12.24C8.32667 12.04 8.59333 11.8067 8.78 11.54V11.14L7.8 11.26Z"></path></svg></span>
  </div>
</div>

<link rel="preconnect" href="https://code.jquery.com">
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>document.documentElement.classList.add('js-anim');</script>

<header class="site-nav">
  <div class="nav-inner">
    <a href="#top" class="mark">
      <img src="Logo.png" alt="Software People logo" class="mark-logo">
      Software People
    </a>
    <ul class="navlinks">
      <li><a href="#about"><?= sp_icon('nav-about') ?><span>About</span></a></li>
      <li><a href="#capabilities"><?= sp_icon('nav-capabilities') ?><span>Capabilities</span></a></li>
      <li><a href="#industries"><?= sp_icon('nav-industries') ?><span>Industries</span></a></li>
      <li><a href="#why"><?= sp_icon('nav-why') ?><span>Why Us</span></a></li>
      <li><a href="#contract"><?= sp_icon('nav-contract') ?><span>DIR Contract</span></a></li>
    </ul>
    <a href="#contact" class="nav-cta">Talk to us</a>
  </div>
  <div class="scroll-progress" id="scrollProgress"></div>
</header>

<main id="top">

  <!-- HERO -->
  <section class="hero">
    <div class="grid-background"></div>
    <div class="wrap hero-grid">
      <div>
        <div class="eyebrow-line hero-anim-target"><span class="dot"></span>IT staffing &amp; systems integration since <?= $founded_year ?></div>
        <h1 class="hero-anim-target">The technology talent behind systems that <em>actually connect</em>.</h1>
        <p class="hero-sub hero-anim-target">Software People places the consultants and project managers who make ERP, CRM, EAI, and data-warehousing initiatives work in the real world — for healthcare, finance, insurance, telecom, and energy organizations that can't afford to get integration wrong.</p>
        
        <div class="hero-actions hero-anim-target">
          <!-- Gradient Button Component -->
          <a href="#contact" class="btn-wrapper">
            <div class="light"></div>
            <div class="gradient-layer" style="animation-delay: 0s; animation-duration: 25s;"></div>
            <div class="gradient-layer" style="animation-delay: 0.15s; animation-duration: 15.9s;"></div>
            <div class="gradient-layer" style="animation-delay: 0.53s; animation-duration: 26.4s;"></div>
            <div class="gradient-layer" style="animation-delay: 0.45s; animation-duration: 17.8s;"></div>
            <div class="gradient-layer" style="animation-delay: 1.6s; animation-duration: 19.2s;"></div>
            <div class="gradient-btn">Start a conversation</div>
            <div class="text-overlay">Start a conversation</div>
          </a>
          
          <a href="#capabilities" class="btn-ghost">See what we deliver</a>
        </div>
        <div class="hero-meta hero-anim-target">
          <div><div class="num"><?= $years_active ?></div><div class="lbl">years in IT staffing</div></div>
          <div><div class="num"><?= count($capabilities) ?></div><div class="lbl">core disciplines</div></div>
          <div><div class="num"><?= count($industries) ?></div><div class="lbl">vertical markets served</div></div>
        </div>
      </div>

      <div class="hero-diagram" id="heroDiagram" aria-hidden="true">
        <svg id="heroSvg" viewBox="0 0 460 460">
          <g>
            <line class="node-line" x1="230" y1="230" x2="230" y2="70"/>
            <line class="node-line signal" x1="230" y1="230" x2="368" y2="150"/>
            <line class="node-line" x1="230" y1="230" x2="368" y2="310"/>
            <line class="node-line signal" x1="230" y1="230" x2="230" y2="390"/>
            <line class="node-line" x1="230" y1="230" x2="92" y2="310"/>
            <line class="node-line signal" x1="230" y1="230" x2="92" y2="150"/>
          </g>
          <circle class="pulse-dot" style="animation-delay:.2s" cx="230" cy="70"><animateMotion dur="5.5s" repeatCount="indefinite" path="M0,0 L0,160"/></circle>
          <circle class="pulse-dot" style="animation-delay:1s" cx="368" cy="150"><animateMotion dur="5.5s" repeatCount="indefinite" path="M0,0 L-138,80"/></circle>
          <circle class="pulse-dot" style="animation-delay:1.8s" cx="368" cy="310"><animateMotion dur="5.5s" repeatCount="indefinite" path="M0,0 L-138,-80"/></circle>
          <circle class="pulse-dot" style="animation-delay:2.6s" cx="230" cy="390"><animateMotion dur="5.5s" repeatCount="indefinite" path="M0,0 L0,-160"/></circle>
          <circle class="pulse-dot" style="animation-delay:3.4s" cx="92" cy="310"><animateMotion dur="5.5s" repeatCount="indefinite" path="M0,0 L138,-80"/></circle>
          <circle class="pulse-dot" style="animation-delay:4.2s" cx="92" cy="150"><animateMotion dur="5.5s" repeatCount="indefinite" path="M0,0 L138,80"/></circle>

          <g><circle class="node-circle" cx="230" cy="70" r="34"/><text class="node-label" x="230" y="74" text-anchor="middle">ERP</text></g>
          <g><circle class="node-circle" cx="368" cy="150" r="34"/><text class="node-label" x="368" y="147" text-anchor="middle">CRM</text></g>
          <g><circle class="node-circle" cx="368" cy="310" r="34"/><text class="node-label" x="368" y="307" text-anchor="middle">EAI</text></g>
          <g><circle class="node-circle" cx="230" cy="390" r="34"/><text class="node-label" x="230" y="387" text-anchor="middle">SYS</text><text class="node-label" x="230" y="398" text-anchor="middle">INTEGRATION</text></g>
          <g><circle class="node-circle" cx="92" cy="310" r="34"/><text class="node-label" x="92" y="307" text-anchor="middle">DATA</text><text class="node-label" x="92" y="318" text-anchor="middle">WAREHOUSE</text></g>
          <g><circle class="node-circle" cx="92" cy="150" r="34"/><text class="node-label" x="92" y="147" text-anchor="middle">APP</text><text class="node-label" x="92" y="158" text-anchor="middle">DEV</text></g>

          <circle class="node-hub" cx="230" cy="230" r="52"/>
          <text class="hub-label" x="230" y="226" text-anchor="middle">SOFTWARE</text>
          <text class="hub-label" x="230" y="241" text-anchor="middle">PEOPLE</text>
        </svg>
        <div class="three-mount" id="threeMount"></div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="spine-section">
    <div class="wrap">
      <div class="spine"></div>
      <div class="spine-fill"></div>
      <div class="spine-node" style="top:0;"></div>
      <div class="section-head anim-fade-up">
        <h2>Total consulting, not just resumes.</h2>
      </div>
      <div class="about-body">
        <div class="anim-fade-left">
          <p>Software People is an IT consulting and staffing firm built around one idea: technology projects succeed or fail on the strength of the people running them. We combine deep technical expertise with the discipline of full project delivery, so our clients get more than a list of candidates — they get consultants and project managers who can own outcomes.</p>
          <p>We work across Systems Integration, EAI, ERP, CRM, Business and Data Warehousing, and custom application development for organizations that operate in regulated, high-stakes environments. Whether it's a single contract placement or an ongoing program, our consultants arrive ready to work inside your systems, your compliance requirements, and your timeline.</p>
        </div>
        <div class="about-figures anim-fade-right">
          <div>
            <div class="fig-num"><?= $founded_year ?></div>
            <div class="fig-lbl">Founded — <?= $years_active ?> years placing IT talent for public and private sector clients.</div>
          </div>
          <div>
            <div class="fig-num">Contract &amp; ongoing</div>
            <div class="fig-lbl">Staffing models built around how your project is actually funded and run.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CAPABILITIES -->
  <section id="capabilities" class="alt-panel spine-section">
    <div class="grid-background"></div>
    <div class="wrap">
      <div class="spine"></div>
      <div class="spine-fill"></div>
      <div class="spine-node" style="top:0;"></div>
      <div class="section-head anim-fade-up">
        <h2>What we staff and deliver</h2>
        <p>Five disciplines, one accountable team. Each engagement is staffed by consultants who have shipped this exact kind of work before.</p>
      </div>
      <div class="cap-list">
        <?php foreach ($capabilities as $i => $cap): ?>
        <div class="cap-row anim-fade-up anim-stagger-<?= $i + 1 ?>">
          <div class="cap-icon"><?= sp_icon($cap['icon']) ?></div>
          <div class="cap-tag"><?= $cap['tag'] ?></div>
          <div>
            <h3><?= $cap['title'] ?></h3>
            <p><?= $cap['desc'] ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- INDUSTRIES -->
  <section id="industries" class="spine-section">
    <div class="wrap">
      <div class="spine"></div>
      <div class="spine-fill"></div>
      <div class="spine-node" style="top:0;"></div>
      <div class="section-head anim-fade-up">
        <h2>Built for regulated, high-stakes industries</h2>
        <p>Our consultants are placed into environments where compliance, uptime, and data integrity aren't optional.</p>
      </div>
      <div class="industry-wrap">
        <div class="industry-grid">
          <?php foreach ($industries as $i => $ind): ?>
          <div class="chip anim-scale anim-stagger-<?= $i + 1 ?>"><?= sp_icon($ind['icon']) ?><span><?= $ind['label'] ?></span></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY -->
  <section id="why" class="alt-panel spine-section">
    <div class="grid-background"></div>
    <div class="wrap">
      <div class="spine"></div>
      <div class="spine-fill"></div>
      <div class="spine-node" style="top:0;"></div>
      <div class="section-head anim-fade-up">
        <h2>Why outsource, why Software People</h2>
        <p>Bringing in outside talent is only as good as the firm sourcing it. Here's what that looks like in practice.</p>
      </div>
      <div class="why-grid">
        <div class="why-col anim-fade-left">
          <h3>Why outsourcing works</h3>
          <ul>
            <li>Scale project teams up or down without carrying permanent headcount risk.</li>
            <li>Bring in specialized skills for a defined initiative, then redeploy your core team.</li>
            <li>Shift execution risk to a partner who staffs this kind of work full-time.</li>
            <li>Move faster on time-sensitive integration and compliance deadlines.</li>
          </ul>
        </div>
        <div class="why-col anim-fade-right">
          <h3>Why Software People</h3>
          <ul>
            <li>Nearly three decades of management experience as a full-spectrum IT talent source.</li>
            <li>Consultants vetted for the specific discipline and vertical, not generalists.</li>
            <li>Both contract placements and ongoing program staffing, on one contract vehicle.</li>
            <li>A single point of accountability across sourcing, delivery, and project management.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTRACT -->
  <section id="contract" class="spine-section">
    <div class="wrap">
      <div class="spine"></div>
      <div class="spine-fill"></div>
      <div class="spine-node" style="top:0;"></div>
      <div class="section-head anim-fade-up">
        <h2>Approved for government procurement</h2>
      </div>
      <div class="contract-panel anim-scale">
        <div>
          <span class="k">TEXAS DIR CONTRACT VEHICLE</span>
          <h3>DIR IT Staffing Contract</h3>
          <p>Software People is an approved vendor on the Texas DIR IT Staffing contract, giving public sector agencies a pre-vetted, compliant path to bring on our consultants directly.</p>
        </div>
        <a href="#contact" class="contract-link">Request contract details</a>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="contact">
    <div class="wrap">
      <div class="anim-fade-left">
        <h2>Tell us what you're building. We'll tell you who you need.</h2>
        <p class="lead">Send a short note on the role or project and we'll follow up with next steps — or reach us directly by email.</p>
        <a class="direct-email" href="mailto:Info@softwarepeople.us">Info@softwarepeople.us</a>
      </div>

      <form class="contact-form anim-fade-right" method="post" action="#contact">
        <?php if ($form_sent): ?>
          <div class="form-note ok">Thanks — your message is in. We'll be in touch shortly.</div>
        <?php elseif (!empty($form_errors)): ?>
          <div class="form-note err"><?= implode(' ', array_map('htmlspecialchars', $form_errors)) ?></div>
        <?php endif; ?>

        <input type="text" name="cf_hp" class="hp-field" tabindex="-1" autocomplete="off">

        <div>
          <label for="cf-name">Name</label>
          <input id="cf-name" name="cf_name" type="text" required value="<?= htmlspecialchars($_POST['cf_name'] ?? '') ?>">
        </div>
        <div>
          <label for="cf-org">Organization</label>
          <input id="cf-org" name="cf_org" type="text" value="<?= htmlspecialchars($_POST['cf_org'] ?? '') ?>">
        </div>
        <div>
          <label for="cf-msg">What are you looking to staff?</label>
          <textarea id="cf-msg" name="cf_msg" rows="3" required><?= htmlspecialchars($_POST['cf_msg'] ?? '') ?></textarea>
        </div>
        <button class="contact-submit" type="submit" name="cf_submit" value="1">Send message</button>
      </form>
    </div>
  </section>

</main>

<footer>
  <div class="wrap">
    <span class="foot-brand"><img src="Logo.png" alt="Software People" class="footer-logo"> <?= $founded_year ?>–<?= $current_year ?> Software People, Inc. All rights reserved.</span>
    <span class="foot-links">
      <a href="#">Terms of Use</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Anti-Discrimination Policy</a>
    </span>
  </div>
</footer>

<script>
  // Preloader Logic
  window.addEventListener('load', () => {
    document.body.classList.add('loaded');
  });

  /* Legacy reveal observer */
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
  }, {threshold:0.2});
  document.querySelectorAll('.reveal').forEach(el=>io.observe(el));

  /* ---------- jQuery Scroll Animations ---------- */
  $(function(){
    if(window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      $('.anim-fade-up, .anim-fade-down, .anim-fade-left, .anim-fade-right, .anim-scale').css({opacity:1, transform:'none'});
      return;
    }

    // Initial state via jQuery
    $('.anim-fade-up').css({opacity:0, transform:'translateY(40px)'});
    $('.anim-fade-down').css({opacity:0, transform:'translateY(-40px)'});
    $('.anim-fade-left').css({opacity:0, transform:'translateX(-60px)'});
    $('.anim-fade-right').css({opacity:0, transform:'translateX(60px)'});
    $('.anim-scale').css({opacity:0, transform:'scale(0.9)'});

    // Animate in on scroll using jQuery
    var animObserver = new IntersectionObserver(function(entries){
      entries.forEach(function(e){
        if(e.isIntersecting){
          var $el = $(e.target);
          var duration = $el.data('duration') || 800;
          var delay = $el.data('delay') || 0;
          setTimeout(function(){
            $el.animate({opacity:1}, {
              duration: duration,
              step: function(now, fx){
                // Animate transform along with opacity
                var base = $el.hasClass('anim-fade-up') ? 'translateY(0px)'
                  : $el.hasClass('anim-fade-down') ? 'translateY(0px)'
                  : $el.hasClass('anim-fade-left') ? 'translateX(0px)'
                  : $el.hasClass('anim-fade-right') ? 'translateX(0px)'
                  : 'scale(1)';
                $el.css('transform', base);
              },
              complete: function(){
                $el.css({opacity:1, transform:'none'}).addClass('in');
              }
            });
          }, delay);
          animObserver.unobserve(e.target);
        }
      });
    }, {threshold: 0.15});
    $('.anim-fade-up, .anim-fade-down, .anim-fade-left, .anim-fade-right, .anim-scale').each(function(){
      animObserver.observe(this);
    });

    // Smooth parallax on hero elements while scrolling
    $(window).on('scroll', function(){
      var st = $(this).scrollTop();
      $('.hero-anim-target').each(function(i){
        var speed = 0.03 * (i + 1);
        $(this).css('transform', 'translateY(' + (st * speed) + 'px)');
      });
    });
  });

  function placeSpineNodes(){
    document.querySelectorAll('.spine-section').forEach(sec=>{
      const node = sec.querySelector('.spine-node');
      const head = sec.querySelector('.section-head');
      if(node && head){ node.style.top = head.offsetTop + 14 + 'px'; }
    });
  }
  window.addEventListener('load', placeSpineNodes);
  window.addEventListener('resize', placeSpineNodes);

  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const progressBar = document.getElementById('scrollProgress');
  const spineSections = Array.from(document.querySelectorAll('.spine-section'));
  const navHeight = 66;
  let ticking = false;

  function updateScrollEffects(){
    ticking = false;
    if (reduceMotion) return;

    const doc = document.documentElement;
    const scrollable = doc.scrollHeight - window.innerHeight;
    const pageProgress = scrollable > 0 ? Math.min(1, Math.max(0, window.scrollY / scrollable)) : 0;
    if (progressBar) progressBar.style.width = (pageProgress * 100) + '%';

    spineSections.forEach(sec=>{
      const fill = sec.querySelector('.spine-fill');
      const node = sec.querySelector('.spine-node');
      if(!fill) return;
      const rect = sec.getBoundingClientRect();
      const total = rect.height || 1;
      const progress = Math.min(1, Math.max(0, (navHeight - rect.top) / total));
      fill.style.height = (progress * 100) + '%';
      if(node) node.classList.toggle('lit', progress > 0.03);
    });
  }

  function requestScrollUpdate(){
    if(!ticking){ requestAnimationFrame(updateScrollEffects); ticking = true; }
  }

  window.addEventListener('scroll', requestScrollUpdate, {passive:true});
  window.addEventListener('resize', requestScrollUpdate);
  window.addEventListener('load', updateScrollEffects);
  updateScrollEffects();
</script>

<script type="module">
(async () => {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const root = document.documentElement;
  const revealHeroInstantly = () => root.classList.remove('js-anim');
  let animeApi = null;

  try {
    animeApi = await import('https://esm.sh/animejs');
    const { animate, stagger, utils } = animeApi;

    if (reduceMotion) {
      revealHeroInstantly();
    } else {
      const heroTargets = utils.$('.hero-anim-target');
      if (heroTargets.length) {
        utils.set(heroTargets, { opacity: 0, translateY: 18 });
        revealHeroInstantly();
        animate(heroTargets, {
          opacity: [0, 1],
          translateY: [18, 0],
          duration: 900,
          delay: stagger(90, { start: 150 }),
          ease: 'outExpo',
        });
      } else {
        revealHeroInstantly();
      }
      // Removed btn-primary hover effect as we replaced it with btn-wrapper
    }
  } catch (err) {
    console.warn('Entrance animation library unavailable:', err);
    revealHeroInstantly();
  }

  if (reduceMotion) return;

  try {
    const THREE = await import('https://esm.sh/three');
    const { animate, createTimer } = animeApi || await import('https://esm.sh/animejs');

    const heroDiagram = document.getElementById('heroDiagram');
    const mount = document.getElementById('threeMount');
    if (!heroDiagram || !mount) throw new Error('mount points missing');

    const width = mount.clientWidth || 460;
    const height = mount.clientHeight || 460;

    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(width, height);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio || 1, 2));
    mount.appendChild(renderer.domElement);

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(42, width / height, 0.1, 100);
    camera.position.set(0, 0, 7.4);
    scene.add(camera);

    scene.add(new THREE.AmbientLight(0xffffff, 0.8));
    const pointLight = new THREE.PointLight(0x0f6e1f, 10, 24, 1.4);
    pointLight.position.set(3, 3, 5);
    scene.add(pointLight);
    const rimLight = new THREE.PointLight(0xa3221f, 5, 24, 1.4);
    rimLight.position.set(-4, -2, 3);
    scene.add(rimLight);

    const network = new THREE.Group();
    scene.add(network);

    const hub = new THREE.Mesh(
      new THREE.IcosahedronGeometry(0.85, 1),
      new THREE.MeshStandardMaterial({ color: 0x0f1730, roughness: 0.4, metalness: 0.15, wireframe: true })
    );
    network.add(hub);

    const hubCore = new THREE.Mesh(
      new THREE.IcosahedronGeometry(0.36, 2),
      new THREE.MeshStandardMaterial({ color: 0x0f6e1f, roughness: 0.25, metalness: 0.4 })
    );
    network.add(hubCore);

    const nodeGeo = new THREE.SphereGeometry(0.22, 24, 24);
    const nodeCount = 6;
    for (let i = 0; i < nodeCount; i++) {
      const theta = (i / nodeCount) * Math.PI * 2;
      const phi = Math.PI / 2.4;
      const radius = 3;
      const x = radius * Math.sin(phi) * Math.cos(theta);
      const y = (i % 2 === 0 ? 1 : -1) * 0.6;
      const z = radius * Math.sin(phi) * Math.sin(theta);
      const tint = i % 2 === 0 ? 0xa3221f : 0x0f6e1f;

      const node = new THREE.Mesh(nodeGeo, new THREE.MeshStandardMaterial({ color: tint, roughness: 0.4, metalness: 0.2 }));
      node.position.set(x, y, z);
      network.add(node);

      const lineGeo = new THREE.BufferGeometry().setFromPoints([
        new THREE.Vector3(0, 0, 0),
        new THREE.Vector3(x, y, z),
      ]);
      const line = new THREE.Line(lineGeo, new THREE.LineBasicMaterial({ color: tint, transparent: true, opacity: 0.4 }));
      network.add(line);
    }

    heroDiagram.classList.add('three-active');

    animate(network, {
      rotateY: { to: 360, duration: 9000 },
      rotateX: { to: 360, duration: 12000 },
      loop: true,
      ease: 'inOutQuad',
    });
    animate(hubCore.scale, {
      x: [1, 1.18], y: [1, 1.18], z: [1, 1.18],
      duration: 1900,
      loop: true,
      alternate: true,
      ease: 'inOutSine',
    });
    animate(pointLight, {
      intensity: [5, 15],
      duration: 2400,
      loop: true,
      loopDelay: 300,
      alternate: true,
      ease: 'inOutQuad',
    });

    createTimer({ onUpdate: () => renderer.render(scene, camera) });

    function handleResize(){
      const w = mount.clientWidth, h = mount.clientHeight;
      if (!w || !h) return;
      camera.aspect = w / h;
      camera.updateProjectionMatrix();
      renderer.setSize(w, h);
    }
    window.addEventListener('resize', handleResize);

  } catch (err) {
    console.warn('3D hero visualization skipped:', err);
  }
})();
</script>

</body>
</html>