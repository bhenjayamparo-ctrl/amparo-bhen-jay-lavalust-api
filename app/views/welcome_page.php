<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
// Landing page for the API root, styled with the Ember frontend's own stylesheet and overview preview.
// Generated from the frontend's own styles.css / Landing.jsx / Ember.jsx.
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title>Ember API &middot; Product studio</title>
<meta name="description" content="LavaLust API for Ember: JWT authentication and product CRUD.">
<meta name="theme-color" content="#14165a">
<link rel="icon" type="image/svg+xml" href="data:image/svg+xml,%3Csvg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22%3E%3Cdefs%3E%3ClinearGradient id=%22bg%22 x1=%220%22 y1=%220%22 x2=%221%22 y2=%221%22%3E%3Cstop offset=%220%22 stop-color=%22%234326e4%22/%3E%3Cstop offset=%221%22 stop-color=%22%230a0b26%22/%3E%3C/linearGradient%3E%3ClinearGradient id=%22sk%22 x1=%220%22 y1=%220%22 x2=%221%22 y2=%221%22%3E%3Cstop offset=%220%22 stop-color=%22%23FFB443%22/%3E%3Cstop offset=%22.55%22 stop-color=%22%23FF6B1F%22/%3E%3Cstop offset=%221%22 stop-color=%22%23F0254F%22/%3E%3C/linearGradient%3E%3CradialGradient id=%22rg%22 cx=%22.35%22 cy=%22.3%22 r=%22.9%22%3E%3Cstop offset=%220%22 stop-color=%22%23FFA544%22/%3E%3Cstop offset=%221%22 stop-color=%22%23F0552A%22/%3E%3C/radialGradient%3E%3CradialGradient id=%22ir%22 cx=%22.5%22 cy=%22.4%22 r=%22.7%22%3E%3Cstop offset=%220%22 stop-color=%22%23FFE27A%22/%3E%3Cstop offset=%221%22 stop-color=%22%23FF9E2A%22/%3E%3C/radialGradient%3E%3ClinearGradient id=%22fl%22 x1=%220%22 y1=%221%22 x2=%220%22 y2=%220%22%3E%3Cstop offset=%220%22 stop-color=%22%23FF4B2B%22/%3E%3Cstop offset=%22.55%22 stop-color=%22%23FF9A1F%22/%3E%3Cstop offset=%221%22 stop-color=%22%23FFE45C%22/%3E%3C/linearGradient%3E%3CclipPath id=%22c%22%3E%3Crect width=%22100%22 height=%22100%22 rx=%2226%22/%3E%3C/clipPath%3E%3C/defs%3E%3Cg clip-path=%22url(%23c)%22%3E%3Crect width=%22100%22 height=%22100%22 fill=%22url(%23bg)%22/%3E%3Csvg x=%227%22 y=%2210%22 width=%2286%22 height=%2284%22 viewBox=%2262 30 176 172%22%3E%3Cpath d=%22M72 150C72 100 104 80 150 80C196 80 228 100 228 150C228 182 210 200 150 200C90 200 72 182 72 150Z%22 fill=%22url(%23sk)%22/%3E%3Cellipse cx=%22150%22 cy=%22180%22 rx=%2241%22 ry=%2222%22 fill=%22%23FFE2BC%22/%3E%3Cpath d=%22M150 86C137 70 141 55 150 36C159 55 163 70 150 86Z%22 fill=%22url(%23fl)%22/%3E%3Cpath d=%22M139 88C129 78 131 66 137 56C141 67 148 74 147 88Z%22 fill=%22url(%23fl)%22/%3E%3Cpath d=%22M161 88C171 78 169 66 163 56C159 67 152 74 153 88Z%22 fill=%22url(%23fl)%22/%3E%3Cg fill=%22%23FF6F91%22 opacity=%22.75%22%3E%3Ccircle cx=%2297%22 cy=%22150%22 r=%2211%22/%3E%3Ccircle cx=%22203%22 cy=%22150%22 r=%2211%22/%3E%3C/g%3E%3Cpath d=%22M129 150Q150 168 171 150%22 fill=%22none%22 stroke=%22%237A2410%22 stroke-width=%226%22 stroke-linecap=%22round%22/%3E%3Cg transform=%22translate(104 92)%22%3E%3Ccircle r=%2231%22 fill=%22url(%23rg)%22/%3E%3Ccircle r=%2222%22 fill=%22%23fff%22/%3E%3Ccircle r=%2214%22 fill=%22url(%23ir)%22/%3E%3Ccircle r=%228%22 fill=%22%232B0F06%22/%3E%3Ccircle cx=%22-3.6%22 cy=%22-3.8%22 r=%223.4%22 fill=%22%23fff%22/%3E%3C/g%3E%3Cg transform=%22translate(196 92)%22%3E%3Ccircle r=%2231%22 fill=%22url(%23rg)%22/%3E%3Ccircle r=%2222%22 fill=%22%23fff%22/%3E%3Ccircle r=%2214%22 fill=%22url(%23ir)%22/%3E%3Ccircle r=%228%22 fill=%22%232B0F06%22/%3E%3Ccircle cx=%22-3.6%22 cy=%22-3.8%22 r=%223.4%22 fill=%22%23fff%22/%3E%3C/g%3E%3C/svg%3E%3C/g%3E%3C/svg%3E">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400..800&family=Sora:wght@600..800&display=swap" rel="stylesheet">
<script>try{var t=localStorage.getItem('theme');document.documentElement.dataset.theme=(t?t==='dark':window.matchMedia('(prefers-color-scheme: dark)').matches)?'dark':'light';}catch(e){}</script>
<style>
/* ==========================================================================
   Ember · Product studio
   Aurora glass UI. Violet is the action colour, ember orange is reserved for the mascot,
   highlights and "hero" moments. Type: Sora (display) + Inter (text).
   ========================================================================== */
:root{
  --font:'Inter',-apple-system,BlinkMacSystemFont,'Segoe UI',system-ui,sans-serif;
  --display:'Sora','Inter',system-ui,sans-serif;
  --bg:#f3f2fb;--solid:#fff;--card:rgba(255,255,255,.66);--raise:rgba(255,255,255,.6);
  --fg:#14102e;--mut:#5d587f;
  --line:rgba(40,28,110,.1);--line-2:rgba(40,28,110,.2);--rim:rgba(255,255,255,.9);
  --brand:#5b3df5;--brand-2:#9b4dff;--on-brand:#fff;
  --fire:#ff7a1a;--fire-2:#f0254f;--accent:#ff7a1a;
  --green:#0b9a69;--amber:#b86f00;--red:#e0344d;--blue:#5b3df5;
  --grad:linear-gradient(115deg,#4326e4 0%,#6f3df0 45%,#a33de6 100%);
  --fire-grad:linear-gradient(115deg,#ffb23f 0%,#ff7a1a 50%,#ff4d4d 100%);
  --ink-1:#2b1c86;--ink-2:#0c0828;
  --glass:rgba(255,255,255,.62);
  --sh:0 1px 1px rgba(30,20,90,.05),0 16px 36px -18px rgba(50,30,140,.34);
  --sh-lg:0 2px 4px rgba(30,20,90,.06),0 44px 80px -40px rgba(60,35,170,.55);
  --blur:blur(22px) saturate(170%);
  --spring:cubic-bezier(.34,1.56,.64,1);--ease:cubic-bezier(.2,.8,.2,1);
  --aur-a:rgba(255,150,80,.42);--aur-b:rgba(120,92,255,.36);--aur-c:rgba(255,92,150,.26);--aur-d:rgba(40,200,170,.24);
  color-scheme:light}
[data-theme=dark]{
  --bg:#08051a;--solid:#171230;--card:rgba(30,24,66,.55);--raise:rgba(40,32,88,.5);
  --fg:#f2efff;--mut:#a8a2d6;
  --line:rgba(190,180,255,.12);--line-2:rgba(190,180,255,.26);--rim:rgba(190,180,255,.16);
  --brand:#9783ff;--brand-2:#c08bff;--on-brand:#0e0830;
  --fire:#ff8a3d;--accent:#ff8a3d;
  --green:#3fd69b;--amber:#ffb84d;--red:#ff7088;--blue:#9783ff;
  --grad:linear-gradient(115deg,#5a3ff0 0%,#8350ff 50%,#b259f2 100%);
  --glass:rgba(16,12,40,.62);
  --sh:0 1px 1px rgba(0,0,0,.4),0 18px 38px -20px rgba(0,0,0,.85);
  --sh-lg:0 2px 4px rgba(0,0,0,.4),0 44px 80px -36px rgba(0,0,0,.95);
  --aur-a:rgba(255,120,50,.2);--aur-b:rgba(110,80,255,.3);--aur-c:rgba(255,70,140,.16);--aur-d:rgba(30,170,160,.14);
  color-scheme:dark}
:root{--foreground:var(--fg);--popover:var(--solid);--edge:var(--rim);--border:var(--line);--shadow:rgba(20,10,80,.35)}
[data-theme=dark]{--shadow:rgba(0,0,0,.7)}

*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;background:var(--bg);color:var(--fg);font:16px/1.55 var(--font);font-feature-settings:'cv11','ss01';-webkit-font-smoothing:antialiased;transition:background .4s,color .4s;min-height:100vh;overflow-x:hidden}
/* aurora: two slow-moving colour fields behind everything */
body::before,body::after{content:"";position:fixed;z-index:-1;pointer-events:none}
body::before{inset:-15%;background:radial-gradient(38% 34% at 12% 8%,var(--aur-a),transparent 70%),radial-gradient(36% 38% at 88% 10%,var(--aur-b),transparent 70%),radial-gradient(40% 40% at 78% 92%,var(--aur-c),transparent 70%),radial-gradient(34% 34% at 8% 88%,var(--aur-d),transparent 70%);animation:drift 26s ease-in-out infinite alternate}
body::after{inset:-20%;background:radial-gradient(30% 30% at 55% 40%,var(--aur-b),transparent 70%),radial-gradient(26% 26% at 30% 70%,var(--aur-a),transparent 70%);opacity:.7;animation:drift2 34s ease-in-out infinite alternate}
@keyframes drift{to{transform:translate3d(3%,-3%,0) scale(1.08)}}
@keyframes drift2{to{transform:translate3d(-6%,4%,0) rotate(18deg) scale(1.12)}}
h1,h2,h3,h4,p{margin:0}h1,h2,h3,h4,.heading{font-family:var(--display);letter-spacing:-.035em}
.mut{color:var(--mut)}.hint{font-weight:500;opacity:.75}
.wrap{max-width:1140px;margin:auto;padding:0 24px 72px}
.acts{display:flex;gap:10px;flex-wrap:wrap;align-items:center}
.sr-only{position:absolute;width:1px;height:1px;overflow:hidden;clip:rect(0 0 0 0);white-space:nowrap}
:focus-visible{outline:3px solid color-mix(in srgb,var(--brand) 60%,transparent);outline-offset:3px;border-radius:12px}
::selection{background:color-mix(in srgb,var(--brand) 30%,transparent)}
/* headline treatments */
.gtext{background:linear-gradient(180deg,var(--fg) 30%,color-mix(in srgb,var(--fg) 58%,transparent));-webkit-background-clip:text;background-clip:text;color:transparent}
.hl,.ab-grad{background:linear-gradient(90deg,#ff9a1f,#ff4d4d,#e43fa8,#ff9a1f);background-size:300% 100%;-webkit-background-clip:text;background-clip:text;color:transparent;animation:flow 6s linear infinite}
@keyframes flow{to{background-position:300% 0}}

/* ---- logo ---- */
.logo{display:inline-flex;align-items:center;gap:10px}.logo svg{display:block;flex:none;filter:drop-shadow(0 6px 10px rgba(30,15,110,.4));transition:transform .45s var(--spring)}
.logo:hover svg{transform:rotate(-10deg) scale(1.1)}
.logo-name{font:800 1.4rem var(--display);letter-spacing:-.05em}

/* ==========================================================================
   BUTTONS — one system, all solid surfaces (nothing see-through)
   sizes   sm 38 · md 46 · big 56
   variants  (default) violet primary · outline (gradient border on hover) · tonal · red (danger) · accent (ember) · ghost
   feel    cursor-following light · press squish · ripple · big buttons lean toward the cursor · arrow "orb"
   ========================================================================== */
.btn{--mx:50%;--my:50%;position:relative;overflow:hidden;isolation:isolate;display:inline-flex;align-items:center;justify-content:center;gap:9px;min-height:46px;padding:0 24px;border:0;border-radius:999px;font:700 .95rem/1 var(--font);letter-spacing:-.005em;cursor:pointer;text-decoration:none;white-space:nowrap;user-select:none;color:#fff;background:var(--grad);background-size:170% 100%;background-position:0 0;translate:var(--tx,0) var(--ty,0);
  box-shadow:inset 0 1px 0 rgba(255,255,255,.4),inset 0 -2px 0 rgba(10,0,70,.22),0 12px 24px -12px rgba(91,61,245,.95),0 2px 5px rgba(20,10,80,.28);
  transition:transform .25s var(--spring),box-shadow .25s,background-position .6s var(--ease),color .2s,border-color .2s,translate .2s ease-out}
.btn::before{content:"";position:absolute;inset:0;z-index:-1;background:radial-gradient(130px circle at var(--mx) var(--my),rgba(255,255,255,.42),transparent 62%);opacity:0;transition:opacity .25s}
.btn:hover::before{opacity:1}
.btn:hover{background-position:100% 0;transform:translateY(-3px);box-shadow:inset 0 1px 0 rgba(255,255,255,.45),inset 0 -2px 0 rgba(10,0,70,.22),0 20px 32px -12px rgba(91,61,245,1),0 2px 5px rgba(20,10,80,.28)}
.btn:active{transform:translateY(1px) scale(.96);transition-duration:.08s}
.btn:disabled,.btn[aria-disabled=true]{opacity:.5;cursor:not-allowed;transform:none;pointer-events:none;box-shadow:none}
.btn.sm{min-height:38px;padding:0 16px;font-size:.86rem;gap:7px}
.btn.big{min-height:56px;padding:0 30px;font-size:1.02rem}
/* idle shine on the big call-to-actions */
.btn.big::after{content:"";position:absolute;top:0;bottom:0;width:46%;left:-60%;z-index:-1;background:linear-gradient(105deg,transparent,rgba(255,255,255,.35),transparent);transform:skewX(-18deg);animation:shine 4.5s ease-in-out infinite}
@keyframes shine{0%,55%{left:-60%}100%{left:130%}}
/* arrow orb */
.btn .ico{flex:none;transition:transform .35s var(--spring)}
.btn.big .ico{width:34px;height:34px;padding:8px;border-radius:50%;background:rgba(255,255,255,.22);box-shadow:inset 0 1px 0 rgba(255,255,255,.3)}
.btn.big:has(.ico:last-child){padding-right:10px}.btn.big:has(.ico:first-child){padding-left:10px}
.btn:hover .ico-arrow{transform:translateX(4px)}.btn:hover .ico-back{transform:translateX(-4px)}.btn:hover .ico-plus{transform:rotate(180deg) scale(1.15)}.btn:hover .ico-out{transform:translateX(3px)}
.btn:hover .ico-pencil{transform:rotate(-16deg) translate(1px,-2px) scale(1.15)}.btn:hover .ico-refresh{transform:rotate(180deg)}.btn:hover .ico-sparkles{transform:rotate(20deg) scale(1.2)}
.btn:hover .ico-trash{animation:wiggle .55s ease-in-out}
@keyframes wiggle{20%{transform:rotate(-16deg)}45%{transform:rotate(14deg)}70%{transform:rotate(-9deg)}}
.rip{position:absolute;z-index:0;border-radius:50%;background:rgba(255,255,255,.5);transform:scale(0);animation:rip .65s ease-out forwards;pointer-events:none}
@keyframes rip{to{transform:scale(1);opacity:0}}

.btn.outline{color:var(--fg);border:2px solid transparent;background:linear-gradient(var(--solid),var(--solid)) padding-box,linear-gradient(var(--line-2),var(--line-2)) border-box;box-shadow:0 1px 2px rgba(30,20,90,.08),0 8px 18px -14px rgba(30,20,90,.4)}
.btn.outline::before{background:radial-gradient(130px circle at var(--mx) var(--my),color-mix(in srgb,var(--brand) 16%,transparent),transparent 62%)}
.btn.outline:hover{color:var(--brand);background:linear-gradient(var(--solid),var(--solid)) padding-box,var(--grad) border-box;box-shadow:0 14px 24px -14px rgba(91,61,245,.8)}
.btn.tonal{color:var(--brand);background:color-mix(in srgb,var(--brand) 12%,var(--solid));box-shadow:inset 0 0 0 1px color-mix(in srgb,var(--brand) 30%,transparent)}
.btn.tonal:hover{color:#fff;background:var(--grad);box-shadow:0 14px 22px -12px rgba(91,61,245,.95)}
.btn.red{color:var(--red);background:color-mix(in srgb,var(--red) 10%,var(--solid));box-shadow:inset 0 0 0 1px color-mix(in srgb,var(--red) 34%,transparent)}
.btn.red:hover{color:#fff;background:linear-gradient(115deg,#ff5a6e,#e0233f);box-shadow:0 14px 22px -12px rgba(224,35,63,.95)}
.btn.accent{color:#2a0d00;background:var(--fire-grad);background-size:170% 100%;box-shadow:inset 0 1px 0 rgba(255,255,255,.55),inset 0 -2px 0 rgba(150,40,0,.25),0 14px 28px -12px rgba(255,122,26,1),0 2px 5px rgba(60,20,0,.3)}
.btn.accent:hover{box-shadow:inset 0 1px 0 rgba(255,255,255,.55),inset 0 -2px 0 rgba(150,40,0,.25),0 22px 36px -12px rgba(255,122,26,1),0 2px 5px rgba(60,20,0,.3)}
.btn.accent.big .ico{background:rgba(42,13,0,.14);box-shadow:none}
.btn.ghost{color:var(--fg);background:var(--raise);box-shadow:inset 0 0 0 1px var(--line)}
.btn.ghost:hover{background:var(--solid);color:var(--brand)}

.icon{position:relative;overflow:hidden;display:inline-grid;place-items:center;width:44px;height:44px;border-radius:14px;border:2px solid transparent;background:linear-gradient(var(--solid),var(--solid)) padding-box,linear-gradient(var(--line-2),var(--line-2)) border-box;color:var(--fg);cursor:pointer;box-shadow:0 1px 2px rgba(30,20,90,.08);transition:transform .3s var(--spring),color .2s,background .2s,box-shadow .2s}
.icon:hover{color:var(--brand);transform:translateY(-2px) rotate(-4deg);background:linear-gradient(var(--solid),var(--solid)) padding-box,var(--grad) border-box;box-shadow:0 12px 20px -12px rgba(91,61,245,.8)}
.icon:active{transform:scale(.9)}.icon.sm{width:38px;height:38px;border-radius:12px}
.icon .ico{transition:transform .35s var(--spring)}.icon:hover .ico-x{transform:rotate(90deg)}

/* light / dark switch */
.tswitch{position:relative;overflow:hidden;width:68px;height:36px;padding:0;border-radius:99px;border:1px solid rgba(255,255,255,.7);cursor:pointer;background:linear-gradient(180deg,#6fbaff,#cfeaff);box-shadow:inset 0 2px 6px rgba(0,70,140,.3),0 8px 16px -10px rgba(40,25,120,.6);transition:background .5s,border-color .5s,transform .25s var(--spring)}
.tswitch:hover{transform:scale(1.06)}.tswitch:active{transform:scale(.94)}
[data-theme=dark] .tswitch{background:linear-gradient(180deg,#241a66,#0a0720);border-color:rgba(190,180,255,.28)}
.tt{position:absolute;top:3px;left:3px;width:28px;height:28px;border-radius:50%;background:radial-gradient(circle at 35% 32%,#fff9c9,#ffc83d);box-shadow:0 0 0 5px rgba(255,220,100,.3),0 0 18px rgba(255,200,60,.9);transition:transform .6s var(--spring),background .4s,box-shadow .4s}
.tt::before,.tt::after{content:"";position:absolute;border-radius:50%;background:rgba(110,110,190,.4);opacity:0;transition:opacity .4s}
.tt::before{width:8px;height:8px;top:5px;left:13px}.tt::after{width:5px;height:5px;top:16px;left:6px}
[data-theme=dark] .tt{transform:translateX(32px) rotate(-30deg);background:radial-gradient(circle at 35% 32%,#fff,#cdd1ff);box-shadow:0 0 0 5px rgba(200,200,255,.1),0 0 16px rgba(190,190,255,.55)}
[data-theme=dark] .tt::before,[data-theme=dark] .tt::after{opacity:1}
.tcloud{position:absolute;right:9px;bottom:7px;width:20px;height:8px;border-radius:9px;background:#fff;box-shadow:-9px -5px 0 -1px #fff,-2px -6px 0 0 #fff;transition:transform .6s var(--spring),opacity .4s}
[data-theme=dark] .tcloud{transform:translateY(24px);opacity:0}
.tstar{position:absolute;width:3px;height:3px;border-radius:50%;background:#fff;opacity:0;transform:scale(0);transition:opacity .4s .15s,transform .5s var(--spring) .15s}
.tstar.s1{left:10px;top:9px}.tstar.s2{left:20px;top:21px;width:2px;height:2px}.tstar.s3{left:30px;top:10px}
[data-theme=dark] .tstar{opacity:1;transform:scale(1);animation:twinkle 2.4s ease-in-out infinite}.tstar.s2{animation-delay:-.8s!important}.tstar.s3{animation-delay:-1.6s!important}
@keyframes twinkle{50%{opacity:.35}}

.link{background:none;border:0;color:var(--brand);font:700 inherit;font-family:inherit;cursor:pointer;padding:0;text-decoration:underline;text-decoration-color:color-mix(in srgb,var(--brand) 35%,transparent);text-underline-offset:4px;transition:text-decoration-color .2s}
.link:hover{text-decoration-color:var(--brand)}
.tag{display:inline-flex;align-items:center;padding:5px 12px;border-radius:99px;font-size:.8rem;font-weight:700;color:var(--brand);background:color-mix(in srgb,var(--brand) 12%,transparent)}

/* ---- form controls ---- */
label{display:grid;gap:7px;font-size:.84rem;font-weight:650;color:var(--mut)}
input,textarea,select{font:500 1rem var(--font);min-height:50px;padding:12px 16px;border-radius:14px;border:1.5px solid var(--line-2);background:var(--solid);color:var(--fg);width:100%;transition:box-shadow .25s,border-color .25s,transform .25s var(--spring)}
textarea{resize:vertical;min-height:92px}
input::placeholder,textarea::placeholder{color:color-mix(in srgb,var(--mut) 70%,transparent)}
input:hover,select:hover,textarea:hover{border-color:color-mix(in srgb,var(--brand) 55%,var(--line-2))}
input:focus,textarea:focus,select:focus{outline:0;border-color:var(--brand);box-shadow:0 0 0 5px color-mix(in srgb,var(--brand) 20%,transparent),0 10px 20px -14px var(--brand)}
.err{color:var(--red);font-size:.9rem;font-weight:650;padding:11px 14px;border-radius:14px;background:color-mix(in srgb,var(--red) 10%,var(--solid));border:1px solid color-mix(in srgb,var(--red) 30%,transparent);animation:nudge .45s}
@keyframes nudge{20%{transform:translateX(-7px)}50%{transform:translateX(6px)}80%{transform:translateX(-2px)}}
.two{display:grid;grid-template-columns:1fr 1fr;gap:12px}
/* segmented control with a sliding thumb */
.seg{position:relative;display:flex;background:color-mix(in srgb,var(--fg) 6%,var(--solid));border:1px solid var(--line);padding:4px;border-radius:16px;overflow:hidden}
.seg::before{content:"";position:absolute;top:4px;bottom:4px;left:4px;width:calc(50% - 4px);border-radius:12px;background:var(--grad);box-shadow:0 10px 18px -10px rgba(91,61,245,.95);transition:transform .45s var(--spring)}
.seg:has(button:nth-child(2).on)::before{transform:translateX(100%)}
.seg button{position:relative;z-index:1;flex:1;border:0;background:none;color:var(--mut);padding:12px 14px;border-radius:12px;font:700 .9rem var(--font);cursor:pointer;white-space:nowrap;overflow:hidden;transition:color .25s}
.seg .on{color:#fff}.seg button:hover:not(.on){color:var(--fg)}
.meter{display:grid;grid-template-columns:repeat(4,1fr);gap:5px;align-items:center;margin-top:-4px}
.meter i{height:5px;border-radius:9px;background:var(--line);transition:background .3s}
.meter small{grid-column:1/-1;font-size:.78rem;font-weight:650;color:var(--mut)}
.meter[data-s="1"] i:nth-child(-n+1){background:var(--red)}.meter[data-s="2"] i:nth-child(-n+2){background:var(--amber)}
.meter[data-s="3"] i:nth-child(-n+3){background:var(--brand)}.meter[data-s="4"] i:nth-child(-n+4){background:var(--green)}

/* ---- nav ---- */
.topnav{display:flex;justify-content:space-between;align-items:center;padding:18px 0}
.pill{position:sticky;top:12px;z-index:20;margin-top:14px;padding:9px 10px 9px 18px;border-radius:99px;background:var(--glass);border:1px solid var(--rim);-webkit-backdrop-filter:var(--blur);backdrop-filter:var(--blur);box-shadow:var(--sh)}
.pill .acts{gap:8px}

/* ---- glass surfaces ---- */
.tile,.steps div,.kpi,.panel,.win,.sheet,.alertbox,.preview,.health,.form,.hello{background:var(--card);border:1px solid var(--rim);box-shadow:var(--sh),inset 0 1px 0 var(--rim);-webkit-backdrop-filter:var(--blur);backdrop-filter:var(--blur)}
.av{display:grid;place-items:center;border-radius:50%;flex:none;font-weight:700;color:#fff;background:linear-gradient(135deg,hsl(var(--h) 75% 62%),hsl(calc(var(--h) + 40) 70% 46%));box-shadow:0 0 0 2px var(--solid),0 4px 10px -2px rgba(0,0,0,.3)}
.badge{display:inline-flex;align-items:center;gap:6px;font-size:.76rem;font-weight:750;padding:4px 11px 4px 9px;border-radius:99px;background:color-mix(in srgb,var(--green) 14%,var(--solid));color:var(--green);white-space:nowrap}
.badge::before{content:"";width:6px;height:6px;border-radius:50%;background:currentColor;box-shadow:0 0 0 0 currentColor;animation:ping 2.4s ease-out infinite}
@keyframes ping{70%,100%{box-shadow:0 0 0 7px transparent}0%{box-shadow:0 0 0 0 color-mix(in srgb,currentColor 60%,transparent)}}
.badge.out{background:color-mix(in srgb,var(--red) 13%,var(--solid));color:var(--red)}
.badge.low{background:color-mix(in srgb,var(--amber) 16%,var(--solid));color:var(--amber)}
.badge.neutral{background:var(--line);color:var(--mut)}.badge.neutral::before{animation:none}
.note{padding:11px 14px;border-radius:14px;font-size:.9rem;background:var(--line);font-weight:550}
.note.risk{background:color-mix(in srgb,var(--red) 10%,var(--solid));color:var(--red);border:1px solid color-mix(in srgb,var(--red) 30%,transparent)}
.row-note{display:flex;align-items:center;gap:10px;margin-bottom:14px}.row-note span{flex:1}
.rv{opacity:0;transform:translateY(16px);transition:opacity .7s ease var(--d,0ms),transform .7s var(--ease) var(--d,0ms)}.rv.in{opacity:1;transform:none}
.sparks{position:absolute;inset:0;overflow:hidden;pointer-events:none;z-index:0}
.sparks i{position:absolute;left:var(--x);bottom:-12px;width:var(--s);height:var(--s);border-radius:50%;background:radial-gradient(circle,#ffe27a,#ff7a1a);box-shadow:0 0 12px 2px rgba(255,122,26,.8);opacity:0;animation:spark var(--d) linear var(--dl) infinite}
@keyframes spark{0%{opacity:0;transform:translate(0,0)}10%{opacity:.9}100%{opacity:0;transform:translate(var(--sw),-70vh)}}

/* ==================== LANDING ==================== */
.lhero{position:relative;display:grid;grid-template-columns:1.1fr .9fr;align-items:center;gap:20px 40px;text-align:left;padding:48px 0 20px}
.lhero h1{font-size:clamp(2.9rem,6.4vw,5.5rem);line-height:1;font-weight:800;letter-spacing:-.06em;padding-bottom:.08em}
.lhero .htxt{display:grid;justify-items:start;gap:26px}
.lhero .htxt>p{color:var(--mut);font-size:1.16rem;max-width:44ch}
.flag{position:relative;display:grid;justify-items:center;align-content:center;padding-top:56px;min-height:440px}
.flag>.sparks{inset:-10% -5%}
.flag::before{content:"";position:absolute;left:50%;top:60%;width:min(420px,95%);aspect-ratio:1;border-radius:50%;transform:translate(-50%,-50%);background:radial-gradient(closest-side,color-mix(in srgb,var(--fire) 34%,transparent),transparent);filter:blur(6px);animation:breathe 5s ease-in-out infinite;pointer-events:none}
@keyframes breathe{50%{transform:translate(-50%,-50%) scale(1.12);opacity:.8}}
.orbit{position:absolute;left:50%;top:60%;border-radius:50%;border:1.5px dashed var(--line-2);transform:translate(-50%,-50%);pointer-events:none;animation:spin 40s linear infinite}
.orbit.o1{width:min(330px,76%);aspect-ratio:1}.orbit.o2{width:min(430px,98%);aspect-ratio:1;animation-duration:64s;animation-direction:reverse}
.orbit i{position:absolute;top:-6px;left:50%;width:12px;height:12px;margin-left:-6px;border-radius:50%;background:var(--fire-grad);box-shadow:0 0 14px var(--fire)}
.orbit.o2 i{background:var(--grad);box-shadow:0 0 14px var(--brand);top:auto;bottom:-6px}
@keyframes spin{to{transform:translate(-50%,-50%) rotate(360deg)}}
.flag .cham-stage{margin-bottom:0}
.stage2{grid-column:1/-1;justify-self:center;position:relative;width:min(920px,100%);margin-top:30px;padding-bottom:20px;transform:perspective(1100px) rotateX(calc(var(--rx,0)*1deg)) rotateY(calc(var(--ry,0)*1deg));transition:transform .25s ease-out}
.win{border-radius:26px;padding:16px 18px 56px;text-align:left;box-shadow:var(--sh-lg),inset 0 1px 0 var(--rim)}
.dots3{display:flex;gap:7px;margin-bottom:14px}.dots3 i{width:11px;height:11px;border-radius:50%;background:#ff5f57}.dots3 i:nth-child(2){background:#febc2e}.dots3 i:nth-child(3){background:#28c840}
.wk{display:grid;grid-template-columns:repeat(3,1fr);gap:10px;margin-bottom:14px}
.wk>div{background:var(--raise);border:1px solid var(--rim);border-radius:16px;padding:12px 14px;display:grid}.wk small{color:var(--mut)}.wk b{font:800 1.5rem var(--display);letter-spacing:-.04em}
.wc{display:grid;grid-template-columns:1.3fr 1fr;gap:12px}
.wc>div{background:var(--raise);border:1px solid var(--rim);border-radius:16px;padding:14px;min-width:0}
.wc svg{width:100%;height:auto;display:block}
.row.mini{display:grid;grid-template-columns:30px 1fr auto;align-items:center;gap:8px 10px;padding:8px 0;font-size:.78rem}
.row.mini b{display:grid;line-height:1.25;min-width:0}.row.mini b small{color:var(--mut);font-weight:500}
.chartline{fill:none;stroke:var(--brand);stroke-width:3;stroke-linecap:round;stroke-dasharray:900;animation:draw 2.2s ease-out both}
@keyframes draw{from{stroke-dashoffset:900}}.chartfill{fill:url(#cf)}
/* moving activity ticker */
.feed{display:block;overflow:hidden;padding:16px 0;margin-top:-46px;position:relative;z-index:3;-webkit-mask-image:linear-gradient(90deg,transparent,#000 9%,#000 91%,transparent);mask-image:linear-gradient(90deg,transparent,#000 9%,#000 91%,transparent)}
.ticker{display:flex;gap:12px;width:max-content;animation:tick 42s linear infinite}.feed:hover .ticker{animation-play-state:paused}
@keyframes tick{to{transform:translateX(calc(-50% - 6px))}}
.float{display:flex;align-items:center;gap:10px;padding:11px 16px;border-radius:16px;font-weight:650;font-size:.88rem;white-space:nowrap;background:var(--solid);border:1px solid var(--line);box-shadow:var(--sh);transition:transform .3s var(--spring)}
.ticker .float:nth-child(odd){animation:flt 5s ease-in-out infinite}.ticker .float:nth-child(3n){animation-delay:-2s}
@keyframes flt{50%{transform:translateY(-8px)}}
.float:hover{transform:translateY(-6px) scale(1.05)}
.float i{font-style:normal;display:grid;place-items:center;width:28px;height:28px;border-radius:9px;background:var(--green);color:#fff;font-size:.85rem}.float i.b{background:var(--brand);color:#fff}.float i.r{background:var(--red);color:#fff}.float i.g{background:#f5a524}
.sample{margin-top:14px;font-size:.78rem;color:var(--mut)}
.lstats{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin:48px 0 14px;text-align:center}.lstats b{display:block;font:800 3rem var(--display);letter-spacing:-.06em;background:linear-gradient(135deg,var(--brand),var(--fire-2) 70%,var(--fire));-webkit-background-clip:text;background-clip:text;color:transparent}.lstats span{color:var(--mut)}
.bento{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin:30px 0 56px}
.tile{position:relative;border-radius:26px;padding:28px;overflow:hidden;transition:transform .35s var(--spring),box-shadow .35s,border-color .35s}.tile.wide{grid-column:span 2}.tile h3{font-size:1.4rem;margin-bottom:8px}.tile p{color:var(--mut)}
.tile::after{content:"";position:absolute;width:240px;height:240px;right:-90px;top:-110px;border-radius:50%;background:radial-gradient(closest-side,color-mix(in srgb,var(--brand) 24%,transparent),transparent);transition:transform .6s var(--ease);pointer-events:none}
.tile:hover::after{transform:scale(1.5) translate(-10%,10%)}
.tile:hover,.steps div:hover{transform:translateY(-8px);border-color:color-mix(in srgb,var(--brand) 45%,var(--rim));box-shadow:var(--sh-lg)}
.bento .tile:nth-child(3){background:linear-gradient(160deg,var(--ink-1),var(--ink-2));border-color:transparent;color:#fff}.bento .tile:nth-child(3) p{color:rgba(255,255,255,.75)}
.bento .tile:nth-child(3)::after{background:radial-gradient(closest-side,rgba(255,122,26,.45),transparent)}
.bento .tile:nth-child(4)::after{background:radial-gradient(closest-side,rgba(255,122,26,.3),transparent)}
.gfx{margin-top:18px;display:grid;gap:9px;position:relative;z-index:1}
.gb{display:grid;grid-template-columns:96px 1fr;gap:10px;align-items:center;font-size:.78rem;color:var(--mut)}.gb i{display:block;height:10px;border-radius:9px;transform-origin:left;animation:grow 1.4s var(--ease) both}@keyframes grow{from{transform:scaleX(0)}}
.sms{padding:10px 14px;border-radius:18px 18px 18px 6px;background:var(--solid);border:1px solid var(--line);font-size:.84rem;max-width:90%;color:var(--fg);box-shadow:var(--sh)}.sms.me{justify-self:end;border-radius:18px 18px 6px 18px;background:var(--grad);border-color:transparent;color:#fff}
.lock{display:grid;place-items:center;width:84px;height:84px;border-radius:26px;color:#2a0d00;background:var(--fire-grad);box-shadow:0 18px 34px -12px var(--fire);transform:rotate(-5deg);transition:transform .45s var(--spring)}.tile:hover .lock{transform:rotate(5deg) scale(1.1)}
.how{text-align:center;display:grid;gap:28px;justify-items:center}.how h2{font-size:clamp(1.9rem,4vw,2.6rem)}
.steps{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;text-align:left;width:100%}
.steps div{border-radius:24px;padding:24px;transition:transform .35s var(--spring),box-shadow .35s,border-color .35s}
.steps span{display:grid;place-items:center;width:38px;height:38px;border-radius:50%;background:var(--grad);color:#fff;font:800 1rem var(--display);margin-bottom:12px;box-shadow:0 10px 18px -8px rgba(91,61,245,.9)}
.cta{position:relative;overflow:hidden;margin:56px 0 0;padding:68px 24px;border-radius:36px;text-align:center;display:grid;gap:24px;justify-items:center;color:#fff;background:radial-gradient(50% 80% at 85% 0%,rgba(255,122,26,.4),transparent 70%),radial-gradient(40% 60% at 0% 100%,rgba(163,61,230,.5),transparent 70%),linear-gradient(140deg,var(--ink-1),var(--ink-2));box-shadow:var(--sh-lg)}
.cta>*{position:relative;z-index:1}.cta>.sparks{position:absolute;z-index:0}
.cta h2{font-size:clamp(2rem,5vw,3.4rem);letter-spacing:-.05em;max-width:16ch;line-height:1.03}
footer{text-align:center;color:var(--mut);padding-top:48px;font-size:.9rem}

/* ==================== AUTH ==================== */
.auth{display:grid;grid-template-columns:1fr 1fr;min-height:100vh}
.brandpane{position:relative;overflow:hidden;color:#fff;padding:36px;display:grid;grid-template-rows:auto 1fr auto;justify-items:center;text-align:center;
  background:radial-gradient(circle at 50% 42%,rgba(255,122,26,.3),transparent 46%),radial-gradient(60% 40% at 100% 0%,rgba(163,61,230,.45),transparent 70%),linear-gradient(165deg,#2b1c86 0%,#150f52 48%,#080520 100%)}
.brandpane .logo{color:#fff;justify-self:start;position:relative;z-index:1}
.bp-body{position:relative;z-index:1;align-self:center;display:grid;gap:12px;justify-items:center;text-align:center;padding:10px 0}
.bp-stage{position:relative;display:grid;place-items:center;padding:34px 40px 10px;margin-bottom:10px}
.bp-stage .ring{position:absolute;left:50%;top:56%;border-radius:50%;transform:translate(-50%,-50%);border:1.5px solid rgba(255,255,255,.14)}
.bp-stage .r1{width:300px;height:300px;animation:pulse 4s ease-in-out infinite}
.bp-stage .r2{width:400px;height:400px;border-style:dashed;animation:spin 50s linear infinite}
.bp-stage .r3{width:500px;height:500px;border-color:rgba(255,255,255,.07);animation:pulse 4s ease-in-out -2s infinite}
@keyframes pulse{50%{transform:translate(-50%,-50%) scale(1.06);border-color:rgba(255,160,80,.4)}}
.bp-stage .cham-stage{margin:0 auto}
.bp-stage .cham-stage::after{content:"";position:absolute;left:50%;bottom:-14px;width:70%;height:20px;transform:translateX(-50%);background:radial-gradient(closest-side,rgba(0,0,0,.55),transparent);z-index:-1}
.bp-stage .cham-say{left:76%;top:2%}
.brandpane h2{font-size:clamp(2rem,3.2vw,2.8rem);line-height:1.05;max-width:15ch;color:#fff;letter-spacing:-.05em}.brandpane p{color:rgba(255,255,255,.78);max-width:38ch}
.chips{display:flex;gap:8px;flex-wrap:wrap;justify-content:center;margin-top:8px}.chips span{padding:8px 15px;border-radius:99px;font-size:.84rem;font-weight:650;background:rgba(255,255,255,.14);border:1px solid rgba(255,255,255,.24);transition:transform .3s var(--spring),background .2s}.chips span:hover{transform:translateY(-4px);background:rgba(255,255,255,.26)}
.brandpane>.btn{position:relative;z-index:1}

.formpane{display:grid;place-items:center;padding:30px;position:relative}
.theme-corner{position:absolute;top:22px;right:22px}
.form{display:grid;gap:16px;width:100%;max-width:460px;padding:36px;border-radius:30px;box-shadow:var(--sh-lg),inset 0 1px 0 var(--rim)}.form h1{font-size:2.3rem;font-weight:800;letter-spacing:-.055em}.form .sub{color:var(--mut);margin-top:-8px}
.backsm{display:none;justify-self:start}
.pw{position:relative;display:block}.pw input{padding-right:52px}
.eye{position:absolute;right:7px;top:50%;transform:translateY(-50%);width:38px;height:38px;border:0;background:none;color:var(--mut);cursor:pointer;border-radius:12px;display:grid;place-items:center;transition:background .2s,color .2s,transform .2s var(--spring)}.eye:hover{color:var(--brand);background:color-mix(in srgb,var(--brand) 12%,transparent)}.eye:active{transform:translateY(-50%) scale(.88)}
.switch{text-align:center;color:var(--mut);font-size:.92rem}

/* ==================== ABOUT PAGE ==================== */
@property --a{syntax:'<angle>';inherits:false;initial-value:0deg}
.ab-page{--ab:#ff7a1a;--ab2:#f0452c;--ab-ink:#c2410c}[data-theme=dark] .ab-page{--ab-ink:#ffb27a}
.ab-hero{text-align:center;padding:60px 0 20px;display:grid;justify-items:center;gap:16px}
.ab-hero h1{font-size:clamp(2.5rem,6.4vw,4.8rem);line-height:1.02;font-weight:800;letter-spacing:-.06em;max-width:15ch}
.ab-hero p{color:var(--mut);font-size:1.15rem;max-width:46ch}
.ab-pill{padding:6px 18px;border-radius:99px;background:color-mix(in srgb,var(--ab) 16%,var(--solid));color:var(--ab-ink);font-weight:750;font-size:.85rem;border:1px solid color-mix(in srgb,var(--ab) 40%,transparent)}
.ab-rv{opacity:0;transform:translateY(34px);transition:opacity .8s,transform .8s var(--ease)}.ab-rv.in{opacity:1;transform:none}
.ab-intro{display:grid;grid-template-columns:minmax(0,380px) 1fr;gap:56px;align-items:center;margin:40px 0 28px;perspective:1100px}
.ab-person{position:relative;text-align:center;padding:26px 24px 22px;border-radius:36px;background:var(--card);border:1px solid var(--rim);box-shadow:var(--sh-lg);-webkit-backdrop-filter:var(--blur);backdrop-filter:var(--blur);transform:rotateX(var(--rx,0deg)) rotateY(var(--ry,0deg));transition:transform .25s ease-out;transform-style:preserve-3d;outline:none;display:grid;justify-items:center;gap:12px;cursor:pointer;-webkit-tap-highlight-color:transparent}
.ab-person:focus-visible{outline:3px solid var(--ab)}
.ab-person small{color:var(--mut);opacity:.8}
.ab-ring{position:absolute;inset:-3px;border-radius:39px;background:conic-gradient(from var(--a),var(--ab),transparent 35%,var(--ab2) 65%,transparent);opacity:.35;filter:blur(14px);z-index:-1;transition:opacity .4s;animation:abspin 5s linear infinite}@keyframes abspin{to{--a:360deg}}
.ab-person:hover .ab-ring,.ab-person:focus-visible .ab-ring{opacity:.9}
.ab-frame{position:relative;width:100%;aspect-ratio:1;border-radius:28px;overflow:hidden;background:#e4e6f0;box-shadow:0 28px 44px -20px rgba(20,10,80,.7);transform:translateZ(40px) translateX(var(--mx,0px));transition:transform .25s ease-out;animation:abfloat 5s ease-in-out infinite}
@keyframes abfloat{50%{translate:0 -8px}}
.ab-frame img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:50% 16%;opacity:0;transform:scale(1.08);filter:blur(6px);transition:opacity .5s,transform .7s var(--ease),filter .5s}.ab-frame img.on{opacity:1;transform:none;filter:none}
.ab-sheen{position:absolute;inset:0;background:linear-gradient(110deg,transparent 35%,rgba(255,255,255,.5) 50%,transparent 65%);transform:translateX(-120%);transition:transform .9s;pointer-events:none}.ab-person:hover .ab-sheen{transform:translateX(120%)}
.looks{display:flex;gap:4px;padding:4px;border-radius:14px;background:color-mix(in srgb,var(--fg) 6%,var(--solid));border:1px solid var(--line)}
.looks span{padding:7px 14px;border-radius:10px;font-size:.8rem;font-weight:700;color:var(--mut);transition:background .3s,color .3s,box-shadow .3s,transform .3s var(--spring)}
.looks span.on{background:var(--fire-grad);color:#2a0d00;box-shadow:0 8px 14px -8px var(--fire);transform:scale(1.06)}
.ab-text{display:grid;gap:14px;align-content:center}
.ab-text h2{font-size:clamp(2.2rem,4vw,3.2rem);line-height:1.02;letter-spacing:-.055em}.ab-role{color:var(--ab-ink);font-weight:750;margin-top:-6px}
.ab-text p{color:var(--mut);max-width:50ch}
.ab-facts{margin:0;display:grid;gap:10px}.ab-facts div{display:grid;gap:1px;padding:13px 16px;border-radius:16px;background:var(--card);border:1px solid var(--rim);box-shadow:var(--sh);transition:transform .3s var(--spring)}.ab-facts div:hover{transform:translateX(6px)}
.ab-facts dt{font-size:.78rem;font-weight:700;color:var(--mut)}.ab-facts dd{margin:0;font-weight:700}
.ab-stats{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;margin-bottom:22px}
.ab-stats div{background:var(--card);border:1px solid var(--rim);border-radius:24px;padding:20px;text-align:center;display:grid;box-shadow:var(--sh);transition:transform .35s var(--spring),border-color .3s}
.ab-stats div:hover{transform:translateY(-8px) rotate(-1.5deg);border-color:color-mix(in srgb,var(--ab) 55%,transparent)}
.ab-stats b{font:800 2.5rem/1.1 var(--display);letter-spacing:-.05em;background:linear-gradient(135deg,var(--ab2),var(--ab));-webkit-background-clip:text;background-clip:text;color:transparent}.ab-stats span{color:var(--mut);font-weight:650}
.ab-grid3{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:34px}
.ab-tile{background:var(--card);border:1px solid var(--rim);border-radius:26px;padding:26px;box-shadow:var(--sh);display:grid;gap:6px;align-content:start;-webkit-backdrop-filter:var(--blur);backdrop-filter:var(--blur);transition:transform .35s var(--spring),border-color .3s,box-shadow .3s}
.ab-tile:hover{transform:translateY(-8px);border-color:color-mix(in srgb,var(--ab) 55%,transparent);box-shadow:var(--sh-lg)}
.ab-tile small{color:var(--ab-ink);font-weight:750}.ab-tile h3{font-size:1.25rem}.ab-tile p{color:var(--mut)}
.ab-h2{text-align:center;font-size:clamp(1.9rem,4vw,2.5rem);margin:10px 0 20px}
.ab-n{width:38px;height:38px;border-radius:50%;display:grid;place-items:center;background:var(--fire-grad);color:#2a0d00;font:800 1rem var(--display);margin-bottom:6px;box-shadow:0 10px 16px -8px var(--fire)}
.ab-marq{overflow:hidden;-webkit-mask-image:linear-gradient(90deg,transparent,#000 10%,#000 90%,transparent);mask-image:linear-gradient(90deg,transparent,#000 10%,#000 90%,transparent);margin:30px 0}
.ab-track{display:flex;gap:12px;width:max-content;animation:abmq 34s linear infinite}@keyframes abmq{to{transform:translateX(-50%)}}
.ab-marq:hover .ab-track{animation-play-state:paused}
.ab-track span{padding:10px 22px;border-radius:99px;background:var(--solid);border:1px solid var(--line);font-weight:650;white-space:nowrap;box-shadow:var(--sh);transition:transform .3s var(--spring),color .2s}.ab-track span:hover{transform:translateY(-4px);color:var(--brand)}
.ab-cta{display:grid;justify-items:center;gap:18px;text-align:center;padding:50px 0 10px}.ab-cta h2{font-size:clamp(1.9rem,4vw,2.6rem);max-width:18ch}
.ab-page .btn.accent{color:#2a0d00}
/* ============================================================
   Ember — the fire chameleon (shared by every page)
   ============================================================ */
.cham-stage{--w:200px;--sink:.1;position:relative;width:var(--w);z-index:6;transform-origin:50% 100%;animation:cham-pop 1s .3s cubic-bezier(.34,1.56,.64,1) both;cursor:pointer;-webkit-tap-highlight-color:transparent;user-select:none}
.cham-stage.flow{margin:0 auto 10px}
.cham-stage.perch{position:absolute;bottom:calc(100% - var(--w) * var(--sink))}
.cham-stage.perch.c{left:50%;margin-left:calc(var(--w) / -2)}
.cham-stage.perch.r{right:var(--pr,28px)}
.perch-host{position:relative}
.cta-host{position:relative;display:inline-block}
@keyframes cham-pop{from{opacity:0;transform:translateY(54px) scale(.7)}}
.cham-stage::before{content:"";position:absolute;left:50%;top:38%;width:130%;aspect-ratio:1;transform:translate(-50%,-50%);border-radius:50%;background:radial-gradient(closest-side,rgba(255,150,60,.30),transparent);z-index:-1;pointer-events:none}
.cham-tilt{transform:rotate(var(--tilt,0deg));transform-origin:50% 92%;transition:transform .5s cubic-bezier(.2,.9,.3,1.2)}
.cham{display:block;width:100%;height:auto;overflow:visible;animation:ch-chroma 9s ease-in-out infinite}
@keyframes ch-chroma{0%,100%{filter:hue-rotate(0deg) saturate(1)}30%{filter:hue-rotate(-20deg) saturate(1.08)}65%{filter:hue-rotate(11deg) saturate(1.05)}}
@keyframes ch-rainbow{from{filter:hue-rotate(0deg) saturate(1.2)}to{filter:hue-rotate(360deg) saturate(1.2)}}

/* idle life: breathing, tail sway, flame flicker, blinking, hovering fly */
.ch-bob{transform-box:fill-box;transform-origin:50% 100%;animation:ch-breathe 3.6s ease-in-out infinite}
@keyframes ch-breathe{50%{transform:scale(1.012,1.028)}}
.ch-tail{transform-box:view-box;transform-origin:216px 186px;animation:ch-sway 4.2s ease-in-out infinite}
@keyframes ch-sway{0%,100%{transform:rotate(-2.5deg)}50%{transform:rotate(3deg)}}
.ch-flame{transform-box:fill-box;transform-origin:50% 100%;animation:ch-flick .8s ease-in-out infinite alternate}
.ch-flame.b{animation-duration:1.1s;animation-delay:-.4s}
@keyframes ch-flick{from{transform:scale(calc(var(--fs,1) * .96),calc(var(--fs,1) * 1)) rotate(-2.5deg)}to{transform:scale(calc(var(--fs,1) * .9),calc(var(--fs,1) * 1.14)) rotate(3deg)}}
.ch-glow{animation:ch-glow 1.6s ease-in-out infinite alternate}
@keyframes ch-glow{from{opacity:.55}to{opacity:1}}
.lid{transform-box:fill-box;transform-origin:50% 0;transform:scaleY(0)}
.lid-blink{animation:ch-blink 5.3s infinite}
.ch-eye.r .lid-blink{animation-duration:6.4s;animation-delay:-1.7s}
@keyframes ch-blink{0%,92%,100%{transform:scaleY(0)}95.5%{transform:scaleY(1)}}
.lid-state{transition:transform .3s cubic-bezier(.3,1.4,.5,1)}
.ch-pupil{transition:transform .14s ease-out}
.ch-fly{animation:ch-fly 2.6s ease-in-out infinite;transition:opacity .2s}
@keyframes ch-fly{0%,100%{transform:translate(0,0)}25%{transform:translate(3px,-6px)}50%{transform:translate(-2px,-2px)}75%{transform:translate(2px,4px)}}
.ch-wing{transform-box:fill-box;transform-origin:50% 100%;animation:ch-wing .16s linear infinite alternate}
@keyframes ch-wing{to{transform:scaleY(.35)}}
.ch-ember{opacity:0;animation:ch-rise 2.6s ease-in infinite}
@keyframes ch-rise{0%{opacity:0;transform:translate(0,0) scale(.7)}15%{opacity:.95}100%{opacity:0;transform:translate(var(--ex,4px),-40px) scale(.3)}}

/* face states */
.ch-cheek{opacity:.5;transition:opacity .3s}
.m-grin,.m-frown{opacity:0}
.m-smile,.m-grin,.m-frown{transition:opacity .16s}
.ch-sweat{opacity:0}
.ch-lash{fill:none;stroke:#8F2A12;stroke-width:3;stroke-linecap:round;opacity:0;transition:opacity .25s .12s}
.is-hiding .ch-lash{opacity:.85}
.ch-tongue{opacity:0}
.ch-tongue .line{stroke-dasharray:96;stroke-dashoffset:96}

/* input-driven states (classes are toggled by the script below) */
.is-hiding .lid-state{transform:scaleY(1)}
.is-peek .lid-state{transform:scaleY(.42)}
.is-user .ch-cheek,.is-excited .ch-cheek,.is-joy .ch-cheek{opacity:.9}
.is-excited .m-smile,.is-joy .m-smile{opacity:0}
.is-excited .m-grin,.is-joy .m-grin{opacity:1}
.is-excited{--fs:1.28}
.is-excited .ch-bob{animation:ch-bounce .55s ease-in-out infinite}
@keyframes ch-bounce{50%{transform:translateY(-5px) scale(1.01,.99)}}
.is-joy .ch-bob{animation:ch-hop .6s cubic-bezier(.3,1.5,.5,1)}
@keyframes ch-hop{0%{transform:scale(1.06,.9)}45%{transform:translateY(-16px) scale(.96,1.06)}100%{transform:none}}
.is-rainbow .cham{animation:ch-rainbow 1s linear}
.is-flick .ch-tongue{animation:tg-vis .75s ease-out}
.is-flick .ch-tongue .line{animation:tg-line .75s ease-out}
.is-flick .ch-tongue .tip{animation:tg-tip .75s ease-out}
@keyframes tg-vis{0%{opacity:0}6%,88%{opacity:1}100%{opacity:0}}
@keyframes tg-line{0%{stroke-dashoffset:96}32%,62%{stroke-dashoffset:0}100%{stroke-dashoffset:96}}
@keyframes tg-tip{0%{transform:translate(0,0)}32%,62%{transform:translate(-92px,-4px)}100%{transform:translate(0,0)}}
.is-flick .ch-fly{opacity:0}
.is-error .cham{animation:none;filter:hue-rotate(158deg) saturate(.6) brightness(1.06);transition:filter .5s}
.is-error .m-smile,.is-error .m-grin{opacity:0}
.is-error .m-frown{opacity:1}
.is-error .ch-bob{animation:ch-shake .5s ease-in-out 3}
@keyframes ch-shake{0%,100%{transform:translateX(0) rotate(0)}25%{transform:translateX(-5px) rotate(-2deg)}75%{transform:translateX(5px) rotate(2deg)}}
.is-error .ch-sweat{animation:ch-sweat 1.4s ease-in 2}
@keyframes ch-sweat{0%{opacity:0;transform:translateY(-4px)}20%{opacity:1}100%{opacity:0;transform:translateY(16px)}}

/* speech bubble */
.cham-say{position:absolute;left:74%;top:1%;z-index:2;white-space:nowrap;padding:7px 13px;border-radius:14px;font-size:.8rem;font-weight:600;letter-spacing:-.005em;color:var(--foreground);background:var(--popover);-webkit-backdrop-filter:blur(18px) saturate(170%);backdrop-filter:blur(18px) saturate(170%);box-shadow:inset 0 1px 0 var(--edge),0 0 0 1px var(--border),0 14px 26px -12px var(--shadow);pointer-events:none;transform-origin:0 100%}
.cham-say::before{content:"";position:absolute;left:-4px;bottom:9px;width:10px;height:10px;background:inherit;transform:rotate(45deg);border-radius:2px;box-shadow:-1px 1px 0 var(--border)}
.cham-say.bump{animation:say-pop .45s var(--spring)}
@keyframes say-pop{from{opacity:0;transform:scale(.7) translateY(6px)}}
@media(max-width:760px){.cham-say{display:none}}

/* extra moods used around the app */
.is-glad .ch-cheek,.is-curious .ch-cheek{opacity:.9}
.is-glad .m-smile,.is-worried .m-smile,.is-lost .m-smile{opacity:0}
.is-glad .m-grin{opacity:1}
.is-worried .m-frown,.is-lost .m-frown{opacity:1}
.is-worried .ch-sweat,.is-lost .ch-sweat{animation:ch-sweat 1.7s ease-in infinite}
.is-lost .cham{animation:none;filter:hue-rotate(158deg) saturate(.6) brightness(1.06)}
.cham-say.l{left:auto;right:74%;transform-origin:100% 100%}
.cham-say.l::before{left:auto;right:-4px;box-shadow:1px -1px 0 var(--border)}
@media(max-width:720px){.cham-stage.hide-sm{display:none}}
@media(prefers-reduced-motion:reduce){
  .cham,.ch-bob,.ch-tail,.ch-flame,.ch-glow,.lid-blink,.ch-fly,.ch-wing,.ch-ember,.cham-stage{animation:none!important}
  .ch-ember{display:none}
}

.cham-say.t{left:50%;top:auto;bottom:calc(100% - 26px);translate:-50% 0;transform-origin:50% 100%}
.cham-say.t::before{left:50%;bottom:-5px;margin-left:-5px;box-shadow:1px 1px 0 var(--border)}
/* ==================== DASHBOARD ==================== */
.who{display:flex;align-items:center;gap:10px;padding:0 6px}.who-t{display:grid;line-height:1.15}.who-t b{font-size:.86rem}.who-t small{font-size:.72rem;color:var(--mut);text-transform:capitalize}
.heading{font-size:clamp(2.4rem,4.6vw,3.4rem);font-weight:800;letter-spacing:-.06em;line-height:1;background:linear-gradient(180deg,var(--fg) 30%,color-mix(in srgb,var(--fg) 55%,transparent));-webkit-background-clip:text;background-clip:text;color:transparent}

.hello{position:relative;display:flex;justify-content:space-between;align-items:flex-end;gap:24px;flex-wrap:wrap;margin:24px 0 14px;padding:26px 32px;border-radius:32px;min-height:200px;box-shadow:var(--sh-lg),inset 0 1px 0 var(--rim)}
.hello-bg{position:absolute;inset:0;border-radius:inherit;overflow:hidden;pointer-events:none}
.hello-bg::before,.hello-bg::after{content:"";position:absolute;border-radius:50%;filter:blur(8px)}
.hello-bg::before{width:380px;height:380px;right:-60px;top:-160px;background:radial-gradient(closest-side,color-mix(in srgb,var(--fire) 45%,transparent),transparent);animation:float2 11s ease-in-out infinite alternate}
.hello-bg::after{width:340px;height:340px;left:25%;bottom:-200px;background:radial-gradient(closest-side,color-mix(in srgb,var(--brand) 38%,transparent),transparent);animation:float2 14s ease-in-out -4s infinite alternate-reverse}
@keyframes float2{to{transform:translate(-60px,40px) scale(1.15)}}
.hello-txt{position:relative;display:grid;gap:8px;align-self:center}
.hello-hi{font-weight:700;color:var(--brand);display:flex;align-items:center;gap:9px}
.hello-hi::before{content:"";width:26px;height:3px;border-radius:3px;background:var(--fire-grad);animation:grow 1s var(--ease) both;transform-origin:left}
.cta-host{position:relative;display:inline-block}

.stats-grid{display:grid;grid-template-columns:2fr 1fr 1fr;gap:14px;margin-bottom:14px}.kpi{padding:18px 22px!important}
.kpi{position:relative;overflow:hidden;border-radius:26px;padding:22px 24px;display:flex;align-items:center;gap:16px;min-width:0;transition:transform .35s var(--spring),box-shadow .35s}.kpi:hover{transform:translateY(-5px);box-shadow:var(--sh-lg)}
.kpi strong{display:block;font:800 clamp(1.5rem,2.6vw,2.1rem)/1.1 var(--display);letter-spacing:-.05em;font-variant-numeric:tabular-nums;overflow-wrap:anywhere}.kpi small{color:var(--mut);font-weight:650}
.kpi::after{content:"";position:absolute;left:0;right:0;bottom:0;height:3px;background:linear-gradient(90deg,transparent,var(--brand),transparent);transform:translateX(-100%);animation:sweep 6s ease-in-out infinite}
.kpi:nth-child(2)::after{animation-delay:-2s}.kpi:nth-child(3)::after{animation-delay:-4s}
@keyframes sweep{50%,100%{transform:translateX(100%)}}
.kpi.hero{background:radial-gradient(70% 130% at 100% 0%,rgba(255,122,26,.42),transparent 65%),linear-gradient(140deg,var(--ink-1),var(--ink-2));border-color:transparent;color:#fff}.kpi.hero small{color:rgba(255,255,255,.75)}
.kpi.hero::after{background:linear-gradient(90deg,transparent,var(--fire),transparent)}
.stat-icon{display:grid;place-items:center;width:52px;height:52px;border-radius:17px;flex:none;color:var(--brand);background:color-mix(in srgb,var(--brand) 13%,var(--solid));transition:transform .4s var(--spring)}
.kpi:hover .stat-icon{transform:rotate(-10deg) scale(1.12)}
.kpi.hero .stat-icon{background:var(--fire-grad);color:#2a0d00;box-shadow:0 12px 22px -8px var(--fire)}
.stat-icon.t-green{color:var(--green);background:color-mix(in srgb,var(--green) 14%,var(--solid))}

.health{border-radius:26px;padding:20px 24px;margin-bottom:14px;display:grid;gap:14px}
.health-top{display:flex;justify-content:space-between;align-items:baseline;gap:12px;flex-wrap:wrap}.health-top h2{font-size:1.1rem}
.hbar{display:flex;gap:4px;height:14px;border-radius:99px;overflow:hidden}
.hbar.thin{height:8px;margin:0 2px 16px}.hbar i{display:block;min-width:0;border-radius:99px;transition:flex-grow .9s var(--ease);position:relative;overflow:hidden;animation:grow 1.2s var(--ease) both;transform-origin:left}
.hbar i:empty{flex-basis:0}.hbar i[style*="flex-grow: 0"]{display:none}
.hbar .ok,.d.ok{background:linear-gradient(90deg,#16c98d,#0b9a69)}.hbar .low,.d.low{background:linear-gradient(90deg,#ffc34d,#e69500)}.hbar .out,.d.out{background:linear-gradient(90deg,#ff7088,#e0344d)}
.hbar .ok::after{content:"";position:absolute;inset:0;background:linear-gradient(90deg,transparent,rgba(255,255,255,.55),transparent);transform:translateX(-100%);animation:shine2 3.2s ease-in-out infinite}
@keyframes shine2{60%,100%{transform:translateX(100%)}}
.hlegend{display:flex;gap:22px;flex-wrap:wrap;font-size:.88rem;color:var(--mut);font-weight:600}.hlegend b{color:var(--fg);margin-left:4px}
.d{display:inline-block;width:10px;height:10px;border-radius:50%;margin-right:8px}

.panel{border-radius:30px;padding:20px 20px 12px}
.toolbar{display:flex;gap:10px;align-items:center;flex-wrap:wrap;padding:2px 2px 14px}
.search{position:relative;flex:1;min-width:200px;display:block}.search .ico{position:absolute;left:16px;top:50%;transform:translateY(-50%);color:var(--mut);pointer-events:none;transition:color .2s,transform .3s var(--spring)}.search:focus-within .ico{color:var(--brand);transform:translateY(-50%) scale(1.15)}.search input{padding-left:44px;border-radius:99px}
.sort{width:auto;font-weight:650;font-size:.9rem;padding:11px 16px;cursor:pointer;border-radius:99px}
.vt{position:relative;display:flex;padding:4px;border-radius:99px;background:color-mix(in srgb,var(--fg) 6%,var(--solid));border:1px solid var(--line)}
.vt::before{content:"";position:absolute;top:4px;bottom:4px;left:4px;width:calc(50% - 4px);border-radius:99px;background:var(--grad);box-shadow:0 8px 14px -8px rgba(91,61,245,.95);transition:transform .45s var(--spring)}
.vt[data-v=list]::before{transform:translateX(100%)}
.vt button{position:relative;z-index:1;overflow:hidden;width:42px;height:42px;display:grid;place-items:center;border:0;background:none;color:var(--mut);border-radius:99px;cursor:pointer;transition:color .25s}.vt button.on{color:#fff}.vt button:not(.on):hover{color:var(--fg)}
.fchips{display:flex;gap:8px;flex-wrap:wrap;align-items:center;padding-bottom:16px}
.fchip{position:relative;overflow:hidden;display:inline-flex;align-items:center;gap:8px;min-height:38px;padding:0 8px 0 15px;border-radius:99px;border:1.5px solid var(--line-2);background:var(--solid);color:var(--fg);font:700 .85rem var(--font);cursor:pointer;transition:transform .25s var(--spring),background .2s,color .2s,border-color .2s,box-shadow .25s}
.fchip b{display:grid;place-items:center;min-width:24px;height:24px;padding:0 7px;border-radius:99px;font-size:.76rem;background:var(--line);color:var(--mut);transition:background .2s,color .2s}
.fchip:hover{transform:translateY(-2px);border-color:var(--brand);color:var(--brand)}.fchip:active{transform:scale(.95)}
.fchip.on{background:var(--grad);border-color:transparent;color:#fff;box-shadow:0 12px 20px -12px rgba(91,61,245,.95)}.fchip.on b{background:rgba(255,255,255,.25);color:#fff}
.fchip.low.on{background:linear-gradient(115deg,#ffc34d,#e69500);color:#2a1700}.fchip.out.on{background:linear-gradient(115deg,#ff7088,#e0233f)}.fchip.ok.on{background:linear-gradient(115deg,#16c98d,#0b9a69)}
.count{font-size:.86rem;font-weight:650;margin-left:auto}

/* product cards */
.pgrid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:18px;padding-bottom:10px;perspective:1200px}
.pcard{--rx:0deg;--ry:0deg;--gx:50%;--gy:0%;--glare:0;position:relative;display:grid;grid-template-rows:auto 1fr auto;border-radius:26px;overflow:hidden;background:var(--solid);border:1px solid var(--line);box-shadow:var(--sh);transform:rotateX(var(--rx)) rotateY(var(--ry));transform-style:preserve-3d;transition:transform .2s ease-out,box-shadow .35s,border-color .3s;animation:rise .6s var(--ease) calc(var(--i)*55ms) backwards}
@keyframes rise{from{opacity:0;transform:translateY(22px) scale(.97)}}
.pcard::after{content:"";position:absolute;inset:0;pointer-events:none;border-radius:inherit;background:radial-gradient(260px circle at var(--gx) var(--gy),rgba(255,255,255,.34),transparent 60%);opacity:var(--glare);transition:opacity .25s;mix-blend-mode:soft-light}
.pcard:hover{box-shadow:0 40px 60px -34px hsl(var(--h) 70% 30%/.8),var(--sh);border-color:hsl(var(--h) 70% 60%/.55)}
.pc-cover{position:relative;height:118px;display:flex;justify-content:flex-end;align-items:flex-start;padding:14px;overflow:hidden;background:linear-gradient(135deg,hsl(var(--h) 80% 62%),hsl(calc(var(--h) + 45) 75% 44%))}
.pc-cover::before,.pc-cover::after{content:"";position:absolute;border-radius:50%;border:2px solid rgba(255,255,255,.25)}
.pc-cover::before{width:170px;height:170px;left:-40px;top:-60px;transition:transform .7s var(--ease)}.pc-cover::after{width:110px;height:110px;right:20px;bottom:-70px;background:rgba(255,255,255,.14);border:0;transition:transform .7s var(--ease)}
.pcard:hover .pc-cover::before{transform:scale(1.25) translate(10px,6px)}.pcard:hover .pc-cover::after{transform:scale(1.4) translate(-10px,-8px)}
.pc-initial{position:absolute;left:18px;bottom:-14px;font:800 5.4rem/1 var(--display);letter-spacing:-.06em;color:rgba(255,255,255,.9);text-shadow:0 12px 24px rgba(0,0,0,.28);transform:translateZ(30px);transition:transform .5s var(--spring)}
.pcard:hover .pc-initial{transform:translateZ(50px) translateY(-6px) rotate(-5deg) scale(1.06)}
.pc-cover .badge{position:relative;z-index:1;box-shadow:0 8px 16px -8px rgba(0,0,0,.45)}
.pc-body{display:grid;gap:8px;align-content:start;padding:18px 18px 14px}
.pc-body h3{font-size:1.15rem;letter-spacing:-.03em;overflow-wrap:anywhere}
.pc-desc{color:var(--mut);font-size:.88rem;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical;overflow:hidden;min-height:2.6em}
.pc-price{display:flex;justify-content:space-between;align-items:baseline;gap:10px;margin-top:4px}.pc-price strong{font:800 1.5rem var(--display);letter-spacing:-.05em}.pc-price small{color:var(--mut);font-size:.76rem}
.sbar{height:8px;border-radius:99px;background:var(--line);overflow:hidden}.sbar i{display:block;height:100%;border-radius:99px;background:linear-gradient(90deg,#16c98d,#0b9a69);animation:grow 1.1s var(--ease) both;transform-origin:left;transition:width .8s var(--ease)}
.pcard.low .sbar i,.table .low~.sbar i{background:linear-gradient(90deg,#ffc34d,#e69500)}.pcard.out .sbar i{background:linear-gradient(90deg,#ff7088,#e0344d)}
.sbar.thin{height:5px;margin-top:6px;max-width:130px}
.pc-actions{display:grid;grid-template-columns:1fr 1fr;gap:10px;padding:0 18px 18px}.pc-actions .btn{width:100%}

/* list view */
.table-scroll{overflow-x:auto}
.table{width:100%;border-collapse:collapse}
.table th{text-align:left;font-size:.8rem;color:var(--mut);font-weight:700;padding:9px 14px;border-bottom:1px solid var(--line-2)}
.table td{padding:14px;border-bottom:1px solid var(--line);vertical-align:middle}
.table tbody tr{animation:rise .5s var(--ease) calc(var(--i)*40ms) backwards;transition:background .25s}.table tbody tr:hover{background:color-mix(in srgb,var(--brand) 6%,transparent)}.table tbody tr:last-child td{border-bottom:0}
.table tbody tr td:first-child{box-shadow:inset 0 0 0 var(--brand);transition:box-shadow .3s}.table tbody tr:hover td:first-child{box-shadow:inset 4px 0 0 var(--brand)}
.product-cell{display:flex;align-items:center;gap:14px;min-width:0}
.product-name{font-weight:750;letter-spacing:-.01em}
.description{color:var(--mut);font-size:.86rem;max-width:34ch;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}
.price{font-weight:750;font-variant-numeric:tabular-nums;white-space:nowrap}
.actions{display:flex;gap:8px;justify-content:flex-end}.actions.end{margin-top:20px}
.p-avatar{display:grid;place-items:center;width:60px;height:60px;border-radius:19px;flex:none;font:800 1.5rem var(--display);color:#fff;background:linear-gradient(135deg,hsl(var(--h) 80% 62%),hsl(calc(var(--h) + 45) 75% 44%));box-shadow:0 12px 20px -10px hsl(var(--h) 70% 34%);transition:transform .4s var(--spring)}
.table tr:hover .p-avatar{transform:rotate(-8deg) scale(1.1)}
.p-avatar.sm{width:46px;height:46px;border-radius:15px;font-size:1.15rem}
.no-match,.empty-state{text-align:center;color:var(--mut);padding:44px 20px}
.empty-state{display:grid;justify-items:center;gap:6px;padding:20px 20px 36px}.empty-state strong{color:var(--fg);font:800 1.4rem var(--display);letter-spacing:-.04em}.empty-state .btn{margin-top:14px}
.skeleton{display:grid;gap:14px;padding:8px 2px 18px}.skeleton.grid{grid-template-columns:repeat(auto-fill,minmax(260px,1fr))}
.skeleton i{display:block;height:64px;border-radius:20px;background:linear-gradient(90deg,var(--line),color-mix(in srgb,var(--fg) 10%,transparent),var(--line));background-size:200% 100%;animation:shimmer 1.3s linear infinite}.skeleton.grid i{height:290px;border-radius:26px}
@keyframes shimmer{to{background-position:-200% 0}}

/* ==================== MODALS / TOAST ==================== */
.scrim{position:fixed;inset:0;z-index:50;background:rgba(10,6,36,.5);-webkit-backdrop-filter:blur(8px);backdrop-filter:blur(8px);display:flex;align-items:flex-start;justify-content:center;overflow-y:auto;padding:24px 16px;animation:fade .25s}
.scrim.center{align-items:center}@keyframes fade{from{opacity:0}}
.modal-wrap{position:relative;width:100%;max-width:760px;margin:96px auto auto}.modal-wrap.narrow{max-width:390px;margin:auto}
.scrim.center .modal-wrap{margin-top:70px}
.sheet{border-radius:32px;padding:26px 28px 28px;box-shadow:var(--sh-lg),inset 0 1px 0 var(--rim);background:color-mix(in srgb,var(--solid) 90%,transparent);animation:pop .45s var(--spring)}
@keyframes pop{from{opacity:0;transform:scale(.92) translateY(14px)}}
.sheet-head{display:flex;justify-content:space-between;align-items:center;margin-bottom:18px}.sheet-head h2{font-size:1.6rem;letter-spacing:-.05em}
.sheet .note{margin-bottom:12px}
.pm-grid{display:grid;grid-template-columns:1.25fr 1fr;gap:24px;align-items:start}
.pm-fields{display:grid;gap:14px}
.prefixed{position:relative;display:block}.prefixed i{z-index:1;pointer-events:none;position:absolute;left:16px;top:50%;transform:translateY(-50%);font-style:normal;font-weight:700;color:var(--mut)}.prefixed input{padding-left:32px}
.preview{position:relative;overflow:hidden;border-radius:24px;padding:20px;display:grid;gap:8px;justify-items:start;background:var(--solid);border:1px solid var(--line);box-shadow:var(--sh)}
.preview::before{content:"";position:absolute;left:0;right:0;top:0;height:78px;background:linear-gradient(135deg,hsl(var(--h) 80% 62%),hsl(calc(var(--h) + 45) 75% 44%));transition:background .4s}
.preview>*{position:relative}.preview-title{font-size:.78rem;font-weight:750;color:#fff;margin-bottom:14px}
.preview .p-avatar{margin-top:-6px;box-shadow:0 0 0 4px var(--solid),0 12px 20px -10px hsl(var(--h) 70% 34%)}
.preview-name{font-size:1.2rem;overflow-wrap:anywhere}.preview-desc{color:var(--mut);font-size:.9rem;overflow-wrap:anywhere;display:-webkit-box;-webkit-line-clamp:3;-webkit-box-orient:vertical;overflow:hidden}.ph{opacity:.5}
.preview-foot{display:flex;align-items:center;justify-content:space-between;gap:10px;width:100%;margin-top:6px;padding-top:14px;border-top:1px solid var(--line)}.preview-price{font:800 1.3rem var(--display);letter-spacing:-.04em}
.alertbox{border-radius:30px;text-align:center;overflow:hidden;box-shadow:var(--sh-lg);background:color-mix(in srgb,var(--solid) 92%,transparent);animation:pop .4s var(--spring)}
.alertbox h3{padding:26px 22px 6px;font-size:1.25rem}.alertbox p{padding:0 24px 20px;color:var(--mut);font-size:.92rem;overflow-wrap:anywhere}
.alert-btns{display:grid;grid-template-columns:1fr 1fr;gap:10px;padding:0 18px 18px}
.ab{position:relative;overflow:hidden;min-height:50px;padding:0 12px;border:0;border-radius:99px;font:700 .95rem var(--font);cursor:pointer;color:var(--fg);background:var(--solid);box-shadow:inset 0 0 0 1.5px var(--line-2);transition:transform .25s var(--spring),color .2s,background .2s,box-shadow .25s}
.ab:hover{transform:translateY(-3px);color:var(--brand);box-shadow:inset 0 0 0 1.5px var(--brand),0 12px 20px -14px var(--brand)}
.ab:active{transform:scale(.95)}.ab:disabled{opacity:.5;pointer-events:none}
.ab.danger{color:#fff;background:linear-gradient(115deg,#ff5a6e,#e0233f);box-shadow:inset 0 1px 0 rgba(255,255,255,.4),0 12px 22px -10px rgba(224,35,63,.95)}
.ab.danger:hover{color:#fff;box-shadow:inset 0 1px 0 rgba(255,255,255,.4),0 18px 28px -10px rgba(224,35,63,1)}
.toast{position:fixed;bottom:28px;left:50%;transform:translateX(-50%);z-index:70;max-width:calc(100vw - 32px);padding:14px 24px;border-radius:99px;font-weight:700;font-size:.92rem;background:var(--fg);color:var(--bg);box-shadow:0 24px 44px -16px rgba(10,6,36,.7);animation:toast .5s var(--spring)}
@keyframes toast{from{opacity:0;transform:translate(-50%,28px) scale(.9)}}

/* ==================== RESPONSIVE ==================== */
@media(max-width:900px){
  .auth,.bento,.steps,.stats-grid,.pm-grid,.ab-intro,.ab-grid3{grid-template-columns:1fr}
  .tile.wide{grid-column:auto}.brandpane{display:none}.backsm{display:inline-flex}
  .wk,.wc,.lstats{grid-template-columns:1fr}
  .who-t{display:none}.ab-stats{grid-template-columns:1fr 1fr}.ab-intro{gap:30px}.ab-person{max-width:380px;justify-self:center;width:100%}
  .formpane{align-items:start;padding-top:76px}.form{padding:26px 22px}
  .lhero{grid-template-columns:1fr;gap:10px}.lhero h1{font-size:clamp(2.7rem,11vw,4rem)}
  .flag{min-height:0;padding-top:60px}.flag .cham-stage{--w:min(300px,72vw)!important}
}
@media(max-width:720px){
  .wrap{padding:0 14px 60px}
  .hello{padding:24px 20px;min-height:0;margin-top:18px}.cta-host,.cta-host .btn{width:100%}
  .count{margin-left:0;width:100%}.pgrid{grid-template-columns:1fr}
  .modal-wrap{margin-top:8px}.scrim.center .modal-wrap{margin-top:auto}
  .sheet{padding:18px 16px;border-radius:26px}
  .table-cards thead{display:none}
  .table-cards,.table-cards tbody,.table-cards tr,.table-cards td{display:block;width:100%}
  .table-cards tr{display:grid;grid-template-columns:1fr auto;gap:2px 10px;padding:14px 4px;border-bottom:1px solid var(--line)}
  .table-cards tr:last-child{border-bottom:0}.table-cards td{padding:2px 0;border:0}
  .table-cards .td-product{grid-column:1/-1}.table-cards .td-price{grid-column:1}.table-cards .td-stock{grid-column:2;grid-row:2;text-align:right}
  .table-cards .td-date{grid-column:1;font-size:.8rem}.table-cards .td-actions{grid-column:1/-1;margin-top:10px}.table-cards .actions{justify-content:flex-start}
  .table-cards .actions .btn{flex:1}.sbar.thin{margin-left:auto}
  .description{max-width:none;white-space:normal}
}
@media(max-width:640px){.pill .btn.outline:not(:last-of-type){display:none}.ab-stats{grid-template-columns:1fr 1fr}}
@media(max-width:480px){.pill{padding-left:12px}.pill .acts .btn.outline{display:none}.logo-text small{display:none}}
@media(prefers-reduced-motion:reduce){*{animation:none!important;transition:none!important}.rv,.ab-rv{opacity:1;transform:none}}


.lhero{align-items:start!important;padding-top:20px!important}.lhero .htxt{padding-top:clamp(0px,3vw,36px)}.lhero h1{font-size:clamp(2.6rem,4.6vw,4.3rem)}.lhero{grid-template-columns:minmax(0,1fr) minmax(0,1fr)}.lhero>*{min-width:0}
.inhero{grid-column:auto!important;width:100%!important;margin-top:0!important;padding-bottom:0!important}
.inhero .win{padding-bottom:52px}.inhero .wc{grid-template-columns:1fr}.inhero .wk b{font-size:1.3rem}
.apill{display:inline-flex;align-items:center;gap:8px;padding:6px 14px;border-radius:99px;background:var(--card);border:1px solid var(--rim);font:700 .78rem ui-monospace,Consolas,monospace;letter-spacing:.05em;text-transform:uppercase;color:var(--fire)}
.apill i{width:8px;height:8px;border-radius:50%;background:var(--green);box-shadow:0 0 0 4px color-mix(in srgb,var(--green) 25%,transparent);animation:apulse 2s infinite}
@keyframes apulse{50%{box-shadow:0 0 0 8px transparent}}
.lstats.small b{font-size:1.6rem;letter-spacing:-.04em}
.eps{margin-top:30px}.eps h2{font-size:1.9rem;margin-bottom:6px}.eps>p{color:var(--mut);margin-bottom:18px}
.eplist{border-radius:26px;overflow:hidden}
.ep{display:grid;grid-template-columns:78px 250px 1fr auto;gap:14px;align-items:center;padding:14px 22px;border-top:1px solid var(--line,var(--rim));transition:background .2s}
.ep:first-child{border-top:0}.ep:hover{background:color-mix(in srgb,var(--brand) 8%,transparent)}
.ep code{font:600 .88rem ui-monospace,Consolas,monospace}
.ep .m{font:700 .72rem ui-monospace,Consolas,monospace;text-align:center;padding:4px 0;border-radius:8px}
.m.GET{color:var(--green);background:color-mix(in srgb,var(--green) 14%,transparent)}
.m.POST{color:var(--amber);background:color-mix(in srgb,var(--amber) 16%,transparent)}
.m.PUT{color:var(--brand);background:color-mix(in srgb,var(--brand) 15%,transparent)}
.m.DELETE{color:var(--red);background:color-mix(in srgb,var(--red) 15%,transparent)}
.lk{font:700 .68rem ui-monospace,Consolas,monospace;padding:3px 10px;border-radius:99px;border:1px solid var(--rim);color:var(--mut)}
@media(max-width:820px){.lhero{grid-template-columns:minmax(0,1fr)}.ep{grid-template-columns:70px 1fr;row-gap:2px}.ep .mut{grid-column:1/-1}.lk{display:none}}

</style>
</head>
<body>

<svg width="0" height="0" style="position:absolute" aria-hidden="true" focusable="false"><defs>
<linearGradient id="ch-skin" x1="70" y1="60" x2="240" y2="205" gradientUnits="userSpaceOnUse">
        <stop offset="0" stop-color="#FFB443"/><stop offset=".5" stop-color="#FF6B1F"/><stop offset="1" stop-color="#F0254F"/>
      </linearGradient>
      <radialGradient id="ch-ring" cx=".35" cy=".3" r=".9">
        <stop offset="0" stop-color="#FFA544"/><stop offset="1" stop-color="#F0552A"/>
      </radialGradient>
      <linearGradient id="ch-belly" x1="0" y1="0" x2="0" y2="1">
        <stop offset="0" stop-color="#FFEBCE"/><stop offset="1" stop-color="#FFC58C"/>
      </linearGradient>
      <linearGradient id="ch-flame" x1="0" y1="1" x2="0" y2="0">
        <stop offset="0" stop-color="#FF4B2B"/><stop offset=".55" stop-color="#FF9A1F"/><stop offset="1" stop-color="#FFE45C"/>
      </linearGradient>
      <radialGradient id="ch-glow">
        <stop offset="0" stop-color="#FFB443" stop-opacity=".75"/><stop offset="1" stop-color="#FFB443" stop-opacity="0"/>
      </radialGradient>
      <radialGradient id="ch-iris" cx=".5" cy=".4" r=".7">
        <stop offset="0" stop-color="#FFE27A"/><stop offset="1" stop-color="#FF9E2A"/>
      </radialGradient>
      <clipPath id="ch-clip"><circle r="21"/></clipPath>
      </defs></svg>
<div id="root"><div class="wrap">
<nav class="topnav pill"><span class="logo"><svg width="34" height="34" viewBox="0 0 100 100" aria-hidden="true">
    <defs>
      <linearGradient id="mk-bg" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#4326e4" /><stop offset="1" stop-color="#0a0b26" /></linearGradient>
      <linearGradient id="mk-skin" x1="0" y1="0" x2="1" y2="1"><stop offset="0" stop-color="#FFB443" /><stop offset=".55" stop-color="#FF6B1F" /><stop offset="1" stop-color="#F0254F" /></linearGradient>
      <radialGradient id="mk-ring" cx=".35" cy=".3" r=".9"><stop offset="0" stop-color="#FFA544" /><stop offset="1" stop-color="#F0552A" /></radialGradient>
      <radialGradient id="mk-iris" cx=".5" cy=".4" r=".7"><stop offset="0" stop-color="#FFE27A" /><stop offset="1" stop-color="#FF9E2A" /></radialGradient>
      <linearGradient id="mk-flame" x1="0" y1="1" x2="0" y2="0"><stop offset="0" stop-color="#FF4B2B" /><stop offset=".55" stop-color="#FF9A1F" /><stop offset="1" stop-color="#FFE45C" /></linearGradient>
      <radialGradient id="mk-glow"><stop offset="0" stop-color="#FF9A3C" stop-opacity=".55" /><stop offset="1" stop-color="#FF9A3C" stop-opacity="0" /></radialGradient>
      <clipPath id="mk-clip"><rect width="100" height="100" rx="26" /></clipPath>
    </defs>
    <g clip-path="url(#mk-clip)">
      <rect width="100" height="100" fill="url(#mk-bg)" />
      <circle cx="50" cy="58" r="46" fill="url(#mk-glow)" />
      <svg x="7" y="10" width="86" height="84" viewBox="62 30 176 172">
        <path d="M72 150 C72 100 104 80 150 80 C196 80 228 100 228 150 C228 182 210 200 150 200 C90 200 72 182 72 150 Z" fill="url(#mk-skin)" />
        <ellipse cx="150" cy="180" rx="41" ry="22" fill="#FFE2BC" />
        <path d="M150 86 C137 70 141 55 150 36 C159 55 163 70 150 86Z" fill="url(#mk-flame)" />
        <path d="M139 88 C129 78 131 66 137 56 C141 67 148 74 147 88Z" fill="url(#mk-flame)" />
        <path d="M161 88 C171 78 169 66 163 56 C159 67 152 74 153 88Z" fill="url(#mk-flame)" />
        <g fill="#FF6F91" opacity=".75"><circle cx="97" cy="150" r="11" /><circle cx="203" cy="150" r="11" /></g>
        <path d="M129 150 Q150 168 171 150" fill="none" stroke="#7A2410" stroke-width="6" stroke-linecap="round" />
        <g transform="translate(104 92)"><circle r="31" fill="url(#mk-ring)"/><circle r="22" fill="#fff"/><circle r="14" fill="url(#mk-iris)"/><circle r="8" fill="#2B0F06"/><circle cx="-3.6" cy="-3.8" r="3.4" fill="#fff"/></g><g transform="translate(196 92)"><circle r="31" fill="url(#mk-ring)"/><circle r="22" fill="#fff"/><circle r="14" fill="url(#mk-iris)"/><circle r="8" fill="#2B0F06"/><circle cx="-3.6" cy="-3.8" r="3.4" fill="#fff"/></g>
      </svg>
    </g></svg><b class="logo-name">Ember</b></span><span class="acts">
<a class="btn sm outline" href="#endpoints">Endpoints</a>
<a class="btn sm outline" href="https://github.com/bhenjayamparo-ctrl/amparo-bhen-jay-lavalust-api" target="_blank" rel="noopener">GitHub</a>
<button class="tswitch" type="button" role="switch" aria-checked="false" id="theme" aria-label="Toggle dark mode" title="Toggle theme"><span class="tcloud"></span><span class="tstar s1"></span><span class="tstar s2"></span><span class="tstar s3"></span><span class="tt"></span></button>
<a class="btn sm" href="https://amparo-bhen-jay-lavalust-frontend.onrender.com" >Open the app</a>
</span></nav>
<header class="lhero">
<div class="htxt"><span class="apill"><i></i>API online</span>
<h1><span class="gtext">Products API,</span><br><span class="hl">fired up.</span></h1>
<p>The LavaLust backend behind Ember: JWT authentication and full product CRUD, served as JSON from a lightweight PHP MVC framework.</p>
<div class="acts c"><a class="btn big" href="https://amparo-bhen-jay-lavalust-frontend.onrender.com" >Launch Ember<svg class="ico ico-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a><a class="btn big outline" href="#endpoints">View endpoints</a></div></div>
<div class="stage2 inhero" id="stage2"><div class="win"><div class="dots3"><i></i><i></i><i></i></div>
<div class="wk"><div><small>Inventory value</small><b>₱48,250</b></div><div><small>Total products</small><b style="color:var(--brand)">12</b></div><div><small>Units in stock</small><b style="color:var(--green)">186</b></div></div>
<div class="wc"><div><small class="mut">Inventory value this month</small>
<svg viewBox="0 0 400 130" preserveAspectRatio="none"><defs><linearGradient id="cf" x1="0" y1="0" x2="0" y2="1"><stop offset="0" stop-color="#14a89a" stop-opacity=".38"/><stop offset="1" stop-color="#14a89a" stop-opacity="0"/></linearGradient></defs><path class="chartfill" d="M0 110C50 100 70 70 120 78S200 30 250 44 340 12 400 20V130H0z"/><path class="chartline" d="M0 110C50 100 70 70 120 78S200 30 250 44 340 12 400 20"/></svg></div>
<div><div class="row mini"><span class="av" style="width:30px;height:30px;--h:180">W</span><b>Wireless Mouse<small>₱899.00</small></b><span class="badge">42 in stock</span></div><div class="row mini"><span class="av" style="width:30px;height:30px;--h:279">M</span><b>Mechanical Keyboard<small>₱3,450.00</small></b><span class="badge">8 in stock</span></div><div class="row mini"><span class="av" style="width:30px;height:30px;--h:128">U</span><b>USB-C Cable<small>₱249.00</small></b><span class="badge out">Out of stock</span></div></div></div></div>
<div class="feed" aria-hidden="true"><div class="ticker"><div class="float"><i class="b">+</i>New product: Wireless Mouse</div><div class="float"><i class="">✎</i>Price updated to ₱3,450.00</div><div class="float"><i class="r">!</i>USB-C Cable is out of stock</div><div class="float"><i class="">✓</i>Restocked 40 units</div><div class="float"><i class="b">↗</i>Inventory value up 12%</div><div class="float"><i class="g">★</i>Catalog synced with the API</div><div class="float"><i class="b">+</i>New product: Wireless Mouse</div><div class="float"><i class="">✎</i>Price updated to ₱3,450.00</div><div class="float"><i class="r">!</i>USB-C Cable is out of stock</div><div class="float"><i class="">✓</i>Restocked 40 units</div><div class="float"><i class="b">↗</i>Inventory value up 12%</div><div class="float"><i class="g">★</i>Catalog synced with the API</div></div></div>
<p class="sample">Preview of the Ember app that uses this API. Sample data.</p></div>
</header>
<section class="lstats small">
<div class="rv"><b>LavaLust</b><span>PHP MVC framework</span></div>
<div class="rv"><b>Aiven MySQL</b><span>database</span></div>
<div class="rv"><b>JWT</b><span>access and refresh tokens</span></div></section>
<section id="endpoints" class="eps rv"><h2 class="gtext">Endpoints</h2><p>Routes marked <b>auth</b> need an <code>Authorization: Bearer &lt;token&gt;</code> header.</p><div class="tile eplist" style="padding:0"><div class="ep"><span class="m POST">POST</span><code>/api/register</code><span class="mut">Create an account</span><span></span></div><div class="ep"><span class="m POST">POST</span><code>/api/login</code><span class="mut">Sign in, receive JWT tokens</span><span></span></div><div class="ep"><span class="m POST">POST</span><code>/api/refresh</code><span class="mut">Refresh the access token</span><span></span></div><div class="ep"><span class="m POST">POST</span><code>/api/logout</code><span class="mut">Sign out</span><span></span></div><div class="ep"><span class="m GET">GET</span><code>/api/me</code><span class="mut">Current user profile</span><span class="lk">auth</span></div><div class="ep"><span class="m GET">GET</span><code>/api/products</code><span class="mut">List products</span><span class="lk">auth</span></div><div class="ep"><span class="m GET">GET</span><code>/api/products/{id}</code><span class="mut">Get one product</span><span class="lk">auth</span></div><div class="ep"><span class="m POST">POST</span><code>/api/products</code><span class="mut">Add a product</span><span class="lk">auth</span></div><div class="ep"><span class="m PUT">PUT</span><code>/api/products/{id}</code><span class="mut">Edit a product</span><span class="lk">auth</span></div><div class="ep"><span class="m DELETE">DELETE</span><code>/api/products/{id}</code><span class="mut">Delete a product</span><span class="lk">auth</span></div></div></section>
<section class="rv cta" style="margin-top:56px"><span class="sparks" aria-hidden="true"><i style="--x:7%;--d:7s;--dl:0s;--s:3px;--sw:-26px"></i><i style="--x:44%;--d:9.2s;--dl:-1.4s;--s:5px;--sw:0px"></i><i style="--x:81%;--d:11.4s;--dl:-2.8s;--s:7px;--sw:26px"></i><i style="--x:18%;--d:13.6s;--dl:-4.2s;--s:9px;--sw:-26px"></i><i style="--x:55%;--d:15.8s;--dl:-5.6s;--s:3px;--sw:0px"></i><i style="--x:92%;--d:7s;--dl:-7s;--s:5px;--sw:26px"></i><i style="--x:29%;--d:9.2s;--dl:-8.4s;--s:7px;--sw:-26px"></i><i style="--x:66%;--d:11.4s;--dl:-9.8s;--s:9px;--sw:0px"></i><i style="--x:3%;--d:13.6s;--dl:-11.2s;--s:3px;--sw:26px"></i><i style="--x:40%;--d:15.8s;--dl:-12.6s;--s:5px;--sw:-26px"></i><i style="--x:77%;--d:7s;--dl:-14s;--s:7px;--sw:0px"></i><i style="--x:14%;--d:9.2s;--dl:-15.4s;--s:9px;--sw:26px"></i><i style="--x:51%;--d:11.4s;--dl:-16.8s;--s:3px;--sw:-26px"></i><i style="--x:88%;--d:13.6s;--dl:-18.2s;--s:5px;--sw:0px"></i></span><h2>See it in action.</h2><a class="btn big accent" href="https://amparo-bhen-jay-lavalust-frontend.onrender.com" >Open the Ember app<svg class="ico ico-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg></a></section>
<footer>Ember API · Built by Bhen Jay Amparo · <a class="link" href="https://amparo-bhen-jay-lavalust-frontend.onrender.com">Open the app</a></footer>
</div></div>

<script>
// Pure UI effects (no app logic): cursor-lit buttons, ripples, magnetic CTA, 3D card tilt.
const reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const fine = window.matchMedia && window.matchMedia('(pointer: fine)').matches;
let tilted = null;

const untilt = (el) => {
  if (!el) return;
  el.style.setProperty('--rx', '0deg'); el.style.setProperty('--ry', '0deg'); el.style.setProperty('--glare', '0');
};

document.addEventListener('pointermove', (e) => {
  const t = e.target;
  if (!t || !t.closest) return;
  const b = t.closest('.btn');
  if (b) {
    const r = b.getBoundingClientRect();
    b.style.setProperty('--mx', e.clientX - r.left + 'px');
    b.style.setProperty('--my', e.clientY - r.top + 'px');
    if (b.classList.contains('big') && fine && !reduce) {
      b.style.setProperty('--tx', ((e.clientX - r.left) / r.width - 0.5) * 10 + 'px');
      b.style.setProperty('--ty', ((e.clientY - r.top) / r.height - 0.5) * 8 + 'px');
    }
  }
  const c = fine && !reduce ? t.closest('[data-tilt]') : null;
  if (c !== tilted) { untilt(tilted); tilted = c; }
  if (c) {
    const r = c.getBoundingClientRect(), x = (e.clientX - r.left) / r.width, y = (e.clientY - r.top) / r.height;
    c.style.setProperty('--ry', (x - 0.5) * 12 + 'deg');
    c.style.setProperty('--rx', -(y - 0.5) * 10 + 'deg');
    c.style.setProperty('--gx', x * 100 + '%'); c.style.setProperty('--gy', y * 100 + '%'); c.style.setProperty('--glare', '1');
  }
}, { passive: true });

document.addEventListener('pointerleave', () => { untilt(tilted); tilted = null; }, true);

document.addEventListener('pointerout', (e) => {
  const b = e.target.closest && e.target.closest('.btn.big');
  if (b && !b.contains(e.relatedTarget)) { b.style.setProperty('--tx', '0px'); b.style.setProperty('--ty', '0px'); }
}, { passive: true });

document.addEventListener('pointerdown', (e) => {
  if (reduce) return;
  const b = e.target.closest && e.target.closest('.btn,.ab,.icon,.seg button,.fchip,.vt button');
  if (!b || b.disabled) return;
  const r = b.getBoundingClientRect(), s = Math.max(r.width, r.height) * 2;
  const d = document.createElement('span');
  d.className = 'rip';
  d.style.cssText = `width:${s}px;height:${s}px;left:${e.clientX - r.left - s / 2}px;top:${e.clientY - r.top - s / 2}px`;
  b.appendChild(d);
  setTimeout(() => d.remove(), 700);
}, { passive: true });

</script>
<script>

(function(){
var reduce=window.matchMedia&&window.matchMedia('(prefers-reduced-motion: reduce)').matches;
var root=document.documentElement;
// theme
function getTheme(){try{var s=localStorage.getItem('theme');if(s)return s==='dark';}catch(e){}return window.matchMedia&&window.matchMedia('(prefers-color-scheme: dark)').matches;}
var dark=getTheme(),tb=document.getElementById('theme');
function applyTheme(){root.dataset.theme=dark?'dark':'light';tb.setAttribute('aria-checked',dark);try{localStorage.setItem('theme',dark?'dark':'light');}catch(e){}}
tb.addEventListener('click',function(){dark=!dark;applyTheme();});applyTheme();
// scroll reveal
var els=document.querySelectorAll('.rv');
if(!('IntersectionObserver' in window)){els.forEach(function(e){e.classList.add('in');});}
else{var o=new IntersectionObserver(function(es){es.forEach(function(x){if(x.isIntersecting){x.target.classList.add('in');o.unobserve(x.target);}});},{threshold:0.15});
 els.forEach(function(el,k){el.style.setProperty('--d',(k%4)*90+'ms');o.observe(el);});}
// count-up
document.querySelectorAll('[data-count]').forEach(function(el){var to=+el.dataset.count,done=false;
 function run(){if(done)return;done=true;if(reduce){el.textContent=to;return;}var t0;(function tick(t){t0=t0||t;var p=Math.min(1,(t-t0)/900);el.textContent=Math.round(to*(1-Math.pow(1-p,3)));if(p<1)requestAnimationFrame(tick);})(performance.now());}
 if(!('IntersectionObserver' in window)){run();return;}
 var io=new IntersectionObserver(function(a){if(a[0].isIntersecting){run();io.disconnect();}});io.observe(el);});
// preview window tilt
var st=document.getElementById('stage2');
st.addEventListener('mousemove',function(e){var b=st.getBoundingClientRect();st.style.setProperty('--ry',((e.clientX-b.left)/b.width-0.5)*8);st.style.setProperty('--rx',-((e.clientY-b.top)/b.height-0.5)*6);});
st.addEventListener('mouseleave',function(){st.style.setProperty('--ry',0);st.style.setProperty('--rx',0);});
})();

</script>
</body>
</html>