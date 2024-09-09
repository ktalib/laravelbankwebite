<html lang="en" class="translated-ltr">
    @section('app')
    @php
        $policyPages = getContent('policy_pages.element', orderById: true);
        $signupBg = getContent('signup_bg.content', true);
    @endphp
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      Open a current account and card - Capitalnexusuk
    </title>
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="noindex">
    <script>
      window.tc_vars = []
    </script>
    
    <link rel="icon" type="image/x-icon" href="/girokonto-start/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/girokonto-start/apple-icon-180x180.png">
    <link rel="icon" sizes="32x32" href="/girokonto-start/favicon-32x32.png">
    <link rel="icon" sizes="16x16" href="/girokonto-start/favicon-16x16.png">
    <link rel="manifest" href="/girokonto-start/manifest.json" crossorigin="use-credentials">
    <style>
      :root{--color-action-attention-secondary-hovered:rgba(255,218,133,.54);--color-action-attention-secondary-pressed:rgba(255,218,133,.36);--color-action-attention-default:#bd8408;--color-action-attention-hovered:#703f00;--color-action-attention-pressed:#e8af2a;--color-action-interact-secondary-default:rgba(0,144,255,.09);--color-action-interact-secondary-hovered:rgba(0,144,255,.18);--color-action-interact-secondary-pressed:rgba(0,144,255,.09);--color-action-interact-default:#006ac7;--color-action-interact-hovered:#134e8a;--color-action-interact-pressed:#1e99f7;--color-action-negative-secondary-default:hsla(6,91%,65%,.11);--color-action-negative-secondary-hovered:hsla(6,91%,65%,.22);--color-action-negative-secondary-pressed:hsla(6,91%,65%,.11);--color-action-negative-default:#d6301a;--color-action-negative-hovered:#961200;--color-action-negative-pressed:#fa5a48;--color-action-positive-secondary-hovered:rgba(42,209,201,.36);--color-action-positive-secondary-pressed:rgba(42,209,201,.16);--color-action-positive-default:#11a6a1;--color-action-positive-hovered:#0e5452;--color-action-positive-pressed:#2ad1c9;--color-action-visited-default:#945082;--color-action-visited-hovered:#6e3961;--color-action-visited-pressed:#bf83af;--color-background-default:#f3f9fe;--color-blur-background-blur-color:rgba(33,51,65,.2);--color-border-interact-default:rgba(0,144,255,.18);--color-border-negative-default:hsla(6,91%,65%,.22);--color-border-positive-default:rgba(42,209,201,.36);--color-border-cards:rgba(8,76,128,.21);--color-focused-default:rgba(9,118,214,.76);--color-shadows-modal-shadow-color:rgba(29,95,145,.16);--color-special-message-text-attention:#965f00;--color-special-message-text-declined:#945082;--color-special-message-text-informative:rgba(18,74,130,.9);--color-special-message-text-negative:rgba(166,19,0,.85);--color-special-message-text-positive:#0c777d;--color-special-static-default-disabled:rgba(0,72,128,.37);--color-special-static-interact:#006ac7;--color-special-static-subdued:rgba(15,47,71,.66);--color-special-static-white:#fff;--color-surface-attention-default:#fbeed1;--color-surface-declined-default:#f7edf5;--color-surface-informative-default:#ddeffe;--color-surface-negative-default:#f3e9eb;--color-surface-positive-default:#d3f2f5;--color-surface-default:#fff;--color-surface-disabled:rgba(33,51,65,.2);--color-surface-enabled:rgba(29,95,145,.16);--color-surface-hovered:rgba(0,144,255,.09);--color-surface-pressed:rgba(0,144,255,.05);--color-surface-subdued:rgba(37,121,186,.1);--color-surface-subdued-light:rgba(33,51,65,.03);--color-text-on-actions:#fff;--color-text-body:rgba(9,17,24,.84);--color-text-body-disabled:rgba(33,51,65,.2);--color-text-default:rgba(13,14,15,.95);--color-text-default-disabled:rgba(33,51,65,.4);--color-text-interact:#006ac7;--color-text-negative:#c22813;--color-text-subdued:rgba(15,47,71,.66);--color-action-gradient-01-default:linear-gradient(263deg,#29cfc9,#016bc7);--color-action-gradient-01-hovered:linear-gradient(263deg,#26bab5,#0261b3);--color-action-gradient-01-pressed:linear-gradient(263deg,#54d9d4,#3589d2);--color-text-gradient-01:linear-gradient(263deg,#1691ea,#113c66);--color-action-gradient-02-temporary-default:linear-gradient(263deg,rgba(41,207,201,.3),rgba(1,107,199,.3));--color-action-gradient-02-temporary-hovered:linear-gradient(263deg,rgba(38,186,181,.3),rgba(2,97,179,.3));--color-action-gradient-02-temporary-pressed:linear-gradient(263deg,rgba(84,217,212,.3),rgba(53,137,210,.3));--color-text-gradient-02-temporary:linear-gradient(263deg,rgba(22,145,234,.3),rgba(17,60,102,.3))}:root
      [data-theme=dark]{--color-action-attention-secondary-hovered:rgba(255,171,0,.16);--color-action-attention-secondary-pressed:rgba(255,171,0,.08);--color-action-attention-default:#c28500;--color-action-attention-hovered:#a16600;--color-action-attention-pressed:#6a4300;--color-action-interact-secondary-default:rgba(20,141,234,.12);--color-action-interact-secondary-hovered:rgba(20,141,234,.24);--color-action-interact-secondary-pressed:rgba(20,141,234,.12);--color-action-interact-default:#0a59a8;--color-action-interact-hovered:#0976d6;--color-action-interact-pressed:#113c66;--color-action-negative-secondary-default:rgba(255,25,0,.2);--color-action-negative-secondary-hovered:rgba(235,42,21,.3);--color-action-negative-secondary-pressed:rgba(255,25,0,.2);--color-action-negative-default:#9c1c08;--color-action-negative-hovered:#cf3b27;--color-action-negative-pressed:#731300;--color-action-positive-secondary-hovered:rgba(42,209,201,.16);--color-action-positive-secondary-pressed:rgba(42,209,201,.08);--color-action-positive-default:#11a6a1;--color-action-positive-hovered:#0e8187;--color-action-positive-pressed:#064d51;--color-action-visited-default:#e868c6;--color-action-visited-hovered:#ffc1ef;--color-action-visited-pressed:#b54196;--color-background-default:#09141c;--color-blur-background-blur-color:rgba(33,51,65,.2);--color-border-interact-default:rgba(20,141,234,.24);--color-border-negative-default:rgba(235,42,21,.3);--color-border-positive-default:rgba(42,209,201,.16);--color-border-cards:rgba(181,223,255,.2);--color-focused-default:rgba(30,153,247,.74);--color-shadows-modal-shadow-color:rgba(178,222,255,.13);--color-special-message-text-attention:rgba(241,188,66,.86);--color-special-message-text-declined:#e868c6;--color-special-message-text-informative:#80c8ff;--color-special-message-text-negative:#ff9b94;--color-special-message-text-positive:rgba(108,224,221,.88);--color-special-static-default-disabled:rgba(33,51,65,.4);--color-special-static-interact:#006ac7;--color-special-static-subdued:rgba(15,47,71,.66);--color-special-static-white:#fff;--color-surface-attention-default:#252b26;--color-surface-declined-default:#261b31;--color-surface-informative-default:#132d40;--color-surface-negative-default:#381e1e;--color-surface-positive-default:#142e36;--color-surface-default:#131f29;--color-surface-disabled:rgba(223,228,232,.18);--color-surface-enabled:rgba(178,222,255,.13);--color-surface-hovered:rgba(20,141,234,.12);--color-surface-pressed:rgba(20,141,234,.06);--color-surface-subdued:rgba(87,176,255,.05);--color-surface-subdued-light:rgba(87,176,255,.05);--color-text-on-actions:#fff;--color-text-body:rgba(237,248,255,.94);--color-text-body-disabled:rgba(223,228,232,.18);--color-text-default:#edf4f7;--color-text-default-disabled:rgba(232,238,242,.28);--color-text-interact:#35a6fc;--color-text-negative:#ff6857;--color-text-subdued:rgba(204,233,255,.62);--color-action-gradient-01-default:linear-gradient(263deg,#15e8de,#158dea);--color-action-gradient-01-hovered:linear-gradient(263deg,#14d1c8,#1480d3);--color-action-gradient-01-pressed:linear-gradient(263deg,#45ede5,#45a5ee);--color-text-gradient-01:linear-gradient(263deg,#15e8de,#158dea);--color-action-gradient-02-temporary-default:linear-gradient(263deg,rgba(21,232,222,.3),rgba(21,141,234,.3));--color-action-gradient-02-temporary-hovered:linear-gradient(263deg,rgba(20,209,200,.3),rgba(20,128,211,.3));--color-action-gradient-02-temporary-pressed:linear-gradient(263deg,rgba(69,237,229,.3),rgba(69,165,238,.3));--color-text-gradient-02-temporary:linear-gradient(263deg,rgba(21,232,222,.3),rgba(21,141,234,.3))}@font-face{font-display:fallback;font-family:DKBEuclid;font-style:normal;font-weight:700;src:url(/girokonto-start/_nuxt/DKBEuclid-Bold-WebXL.COwwzvNX.woff2)
      format("woff2"),url(/girokonto-start/_nuxt/DKBEuclid-Bold-WebXL.D8IyQEWQ.woff)
      format("woff")}@font-face{font-display:fallback;font-family:DKBEuclid;font-style:italic;font-weight:700;src:url(/girokonto-start/_nuxt/DKBEuclid-BoldItalic-WebXL.RlKz2tIB.woff2)
      format("woff2"),url(/girokonto-start/_nuxt/DKBEuclid-BoldItalic-WebXL.DJKqFBqa.woff)
      format("woff")}@font-face{font-display:fallback;font-family:DKBEuclid;font-style:normal;font-weight:300;src:url(/girokonto-start/_nuxt/DKBEuclid-Light-WebXL.pSdora9l.woff2)
      format("woff2"),url(/girokonto-start/_nuxt/DKBEuclid-Light-WebXL.DW_0rb21.woff)
      format("woff")}@font-face{font-display:fallback;font-family:DKBEuclid;font-style:italic;font-weight:300;src:url(/girokonto-start/_nuxt/DKBEuclid-LightItalic-WebXL.CjGQdDXR.woff2)
      format("woff2"),url(/girokonto-start/_nuxt/DKBEuclid-LightItalic-WebXL.C4FA4LA5.woff)
      format("woff")}@font-face{font-display:fallback;font-family:DKBEuclid;font-style:normal;font-weight:500;src:url(/girokonto-start/_nuxt/DKBEuclid-Medium-WebXL.CFf-EpHt.woff2)
      format("woff2"),url(/girokonto-start/_nuxt/DKBEuclid-Medium-WebXL.DFcfKTdz.woff)
      format("woff")}@font-face{font-display:fallback;font-family:DKBEuclid;font-style:italic;font-weight:500;src:url(/girokonto-start/_nuxt/DKBEuclid-MediumItalic-WebXL.O-2gbL2N.woff2)
      format("woff2"),url(/girokonto-start/_nuxt/DKBEuclid-MediumItalic-WebXL.CxBSsYpJ.woff)
      format("woff")}@font-face{font-display:fallback;font-family:DKBEuclid;font-style:normal;font-weight:400;src:url(/girokonto-start/_nuxt/DKBEuclid-Regular-WebXL.Cr8achUI.woff2)
      format("woff2"),url(/girokonto-start/_nuxt/DKBEuclid-Regular-WebXL.CQj0p09Q.woff)
      format("woff")}@font-face{font-display:fallback;font-family:DKBEuclid;font-style:normal;font-weight:600;src:url(/girokonto-start/_nuxt/DKBEuclid-Semibold-WebXL.-wxowF2P.woff2)
      format("woff2"),url(/girokonto-start/_nuxt/DKBEuclid-Semibold-WebXL.DWBeL81K.woff)
      format("woff")}@font-face{font-display:fallback;font-family:DKBEuclid;font-style:italic;font-weight:600;src:url(/girokonto-start/_nuxt/DKBEuclid-SemiboldItalic-WebXL.B056fZZr.woff2)
      format("woff2"),url(/girokonto-start/_nuxt/DKBEuclid-SemiboldItalic-WebXL.DuHGDYot.woff)
      format("woff")}.bodyDefault,body{font-size:1.0625rem;letter-spacing:.0125rem;line-height:1.625rem}.bodyDefault,.bodySmall,body{font-family:DKBEuclid,Arial,sans-serif;font-weight:400;scroll-behavior:smooth}.bodySmall{font-size:.9375rem;letter-spacing:0;line-height:1.4375rem}.buttonLarge{font-size:1.25rem;line-height:1.5rem}.buttonLarge,.buttonMedium{font-family:DKBEuclid,Arial,sans-serif;font-weight:500;letter-spacing:0;scroll-behavior:smooth}.buttonMedium{font-size:1.0625rem;line-height:1.375rem}.buttonSmall{font-family:DKBEuclid,Arial,sans-serif;font-size:.8125rem;font-weight:500;letter-spacing:0;line-height:1.125rem;scroll-behavior:smooth}.captionProminent{font-weight:600}.captionDefault,.captionProminent{font-family:DKBEuclid,Arial,sans-serif;font-size:.75rem;letter-spacing:.025rem;line-height:.875rem;scroll-behavior:smooth}.captionDefault{font-weight:400}.desktopBody{font-family:SFProText,Arial,sans-serif;font-size:.875rem;font-weight:400;line-height:1.25rem}.desktopBody,.desktopDisplayLarge{letter-spacing:0;scroll-behavior:smooth}.desktopDisplayLarge{font-family:SFProDiplay,Arial,sans-serif;font-size:1.75rem;font-weight:600;line-height:2rem}.desktopSubheading{font-family:SFProText,Arial,sans-serif;font-size:.75rem;line-height:1rem}.desktopSubheading,.displayLargeProminent{font-weight:600;letter-spacing:0;scroll-behavior:smooth}.displayLargeProminent{font-family:DKBEuclid,Arial,sans-serif;font-size:2rem;line-height:2.625rem}.displayMediumProminent,h1{font-size:1.5rem;font-weight:600;line-height:1.875rem}.displayMediumProminent,.titleLargeDefault,h1{font-family:DKBEuclid,Arial,sans-serif;letter-spacing:.0125rem;scroll-behavior:smooth}.titleLargeDefault{font-size:1.25rem;font-weight:400;line-height:1.75rem}.titleLargeDefaultMono{font-family:DKBEuclid,Arial,sans-serif;-ms-font-feature-settings:"tnum"
      1;-o-font-feature-settings:"tnum" 1;font-feature-settings:"tnum" 1;font-size:1.25rem;font-weight:400;letter-spacing:0;line-height:1.625rem;scroll-behavior:smooth}.titleLargeProminent,h2{font-weight:500}.titleLargeProminent,.titleLargeProminentBold,h2{font-family:DKBEuclid,Arial,sans-serif;font-size:1.25rem;letter-spacing:.0125rem;line-height:1.75rem;scroll-behavior:smooth}.titleLargeProminentBold{font-weight:600}.titleMediumDefault,.titleMediumDefaultMono{font-family:DKBEuclid,Arial,sans-serif;font-size:1.0625rem;font-weight:400;letter-spacing:0;line-height:1.375rem;scroll-behavior:smooth}.titleMediumDefaultMono{-ms-font-feature-settings:"tnum"
      1;-o-font-feature-settings:"tnum" 1;font-feature-settings:"tnum" 1}.titleMediumProminent,.titleMediumProminentMono{font-family:DKBEuclid,Arial,sans-serif;font-size:1.0625rem;font-weight:500;letter-spacing:0;line-height:1.375rem;scroll-behavior:smooth}.titleMediumProminentMono{-ms-font-feature-settings:"tnum"
      1;-o-font-feature-settings:"tnum" 1;font-feature-settings:"tnum" 1}.titleSmallDefault,.titleSmallDefaultMono{font-family:DKBEuclid,Arial,sans-serif;font-size:.9375rem;font-weight:400;letter-spacing:0;line-height:1.25rem;scroll-behavior:smooth}.titleSmallDefaultMono{-ms-font-feature-settings:"tnum"
      1;-o-font-feature-settings:"tnum" 1;font-feature-settings:"tnum" 1}.titleSmallProminent{font-family:DKBEuclid,Arial,sans-serif;font-size:.9375rem;font-weight:600;letter-spacing:.00625rem;line-height:1.25rem;scroll-behavior:smooth}.titleXSmallDefault{font-weight:400}.titleXSmallDefault,.titleXSmallProminent{font-family:DKBEuclid,Arial,sans-serif;font-size:.8125rem;letter-spacing:0;line-height:1.125rem;scroll-behavior:smooth}.titleXSmallProminent{font-weight:600}*{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}:root{--border-radius-0:0px;--border-radius-1:2px;--border-radius-2:4px;--border-radius-3:6px;--border-radius-4:8px;--border-radius-6:12px;--border-radius-8:16px;--border-radius-10:20px;--border-radius-12:24px;--border-radius-16:32px;--border-radius-32:64px;--border-radius-circle:50%}.sui-border-radius-0{border-radius:var(--border-radius-0)}.sui-border-radius-1{border-radius:var(--border-radius-1)}.sui-border-radius-2{border-radius:var(--border-radius-2)}.sui-border-radius-3{border-radius:var(--border-radius-3)}.sui-border-radius-4{border-radius:var(--border-radius-4)}.sui-border-radius-6{border-radius:var(--border-radius-6)}.sui-border-radius-8{border-radius:var(--border-radius-8)}.sui-border-radius-10{border-radius:var(--border-radius-10)}.sui-border-radius-12{border-radius:var(--border-radius-12)}.sui-border-radius-16{border-radius:var(--border-radius-16)}.sui-border-radius-32{border-radius:var(--border-radius-32)}.sui-border-radius-circle{border-radius:var(--border-radius-circle)}:root{--space-0:0px;--space-0-5:2px;--space-1:4px;--space-2:8px;--space-3:12px;--space-4:16px;--space-5:20px;--space-6:24px;--space-7:28px;--space-8:32px;--space-16:64px}.sui-m-0{margin:var(--space-0)}.sui-mt-0{margin-top:var(--space-0)}.sui-mr-0{margin-right:var(--space-0)}.sui-mb-0{margin-bottom:var(--space-0)}.sui-ml-0{margin-left:var(--space-0)}.sui-mi-0{margin-inline:var(--space-0)}.sui-mk-0{margin-block:var(--space-0)}.sui-mis-0{margin-inline-start:var(--space-0)}.sui-mie-0{margin-inline-end:var(--space-0)}.sui-mbs-0{margin-block-start:var(--space-0)}.sui-mbe-0{margin-block-end:var(--space-0)}.sui-m-0-5{margin:var(--space-0-5)}.sui-mt-0-5{margin-top:var(--space-0-5)}.sui-mr-0-5{margin-right:var(--space-0-5)}.sui-mb-0-5{margin-bottom:var(--space-0-5)}.sui-ml-0-5{margin-left:var(--space-0-5)}.sui-mi-0-5{margin-inline:var(--space-0-5)}.sui-mk-0-5{margin-block:var(--space-0-5)}.sui-mis-0-5{margin-inline-start:var(--space-0-5)}.sui-mie-0-5{margin-inline-end:var(--space-0-5)}.sui-mbs-0-5{margin-block-start:var(--space-0-5)}.sui-mbe-0-5{margin-block-end:var(--space-0-5)}.sui-m-1{margin:var(--space-1)}.sui-mt-1{margin-top:var(--space-1)}.sui-mr-1{margin-right:var(--space-1)}.sui-mb-1{margin-bottom:var(--space-1)}.sui-ml-1{margin-left:var(--space-1)}.sui-mi-1{margin-inline:var(--space-1)}.sui-mk-1{margin-block:var(--space-1)}.sui-mis-1{margin-inline-start:var(--space-1)}.sui-mie-1{margin-inline-end:var(--space-1)}.sui-mbs-1{margin-block-start:var(--space-1)}.sui-mbe-1{margin-block-end:var(--space-1)}.sui-m-2{margin:var(--space-2)}.sui-mt-2{margin-top:var(--space-2)}.sui-mr-2{margin-right:var(--space-2)}.sui-mb-2{margin-bottom:var(--space-2)}.sui-ml-2{margin-left:var(--space-2)}.sui-mi-2{margin-inline:var(--space-2)}.sui-mk-2{margin-block:var(--space-2)}.sui-mis-2{margin-inline-start:var(--space-2)}.sui-mie-2{margin-inline-end:var(--space-2)}.sui-mbs-2{margin-block-start:var(--space-2)}.sui-mbe-2{margin-block-end:var(--space-2)}.sui-m-3{margin:var(--space-3)}.sui-mt-3{margin-top:var(--space-3)}.sui-mr-3{margin-right:var(--space-3)}.sui-mb-3{margin-bottom:var(--space-3)}.sui-ml-3{margin-left:var(--space-3)}.sui-mi-3{margin-inline:var(--space-3)}.sui-mk-3{margin-block:var(--space-3)}.sui-mis-3{margin-inline-start:var(--space-3)}.sui-mie-3{margin-inline-end:var(--space-3)}.sui-mbs-3{margin-block-start:var(--space-3)}.sui-mbe-3{margin-block-end:var(--space-3)}.sui-m-4{margin:var(--space-4)}.sui-mt-4{margin-top:var(--space-4)}.sui-mr-4{margin-right:var(--space-4)}.sui-mb-4{margin-bottom:var(--space-4)}.sui-ml-4{margin-left:var(--space-4)}.sui-mi-4{margin-inline:var(--space-4)}.sui-mk-4{margin-block:var(--space-4)}.sui-mis-4{margin-inline-start:var(--space-4)}.sui-mie-4{margin-inline-end:var(--space-4)}.sui-mbs-4{margin-block-start:var(--space-4)}.sui-mbe-4{margin-block-end:var(--space-4)}.sui-m-5{margin:var(--space-5)}.sui-mt-5{margin-top:var(--space-5)}.sui-mr-5{margin-right:var(--space-5)}.sui-mb-5{margin-bottom:var(--space-5)}.sui-ml-5{margin-left:var(--space-5)}.sui-mi-5{margin-inline:var(--space-5)}.sui-mk-5{margin-block:var(--space-5)}.sui-mis-5{margin-inline-start:var(--space-5)}.sui-mie-5{margin-inline-end:var(--space-5)}.sui-mbs-5{margin-block-start:var(--space-5)}.sui-mbe-5{margin-block-end:var(--space-5)}.sui-m-6{margin:var(--space-6)}.sui-mt-6{margin-top:var(--space-6)}.sui-mr-6{margin-right:var(--space-6)}.sui-mb-6{margin-bottom:var(--space-6)}.sui-ml-6{margin-left:var(--space-6)}.sui-mi-6{margin-inline:var(--space-6)}.sui-mk-6{margin-block:var(--space-6)}.sui-mis-6{margin-inline-start:var(--space-6)}.sui-mie-6{margin-inline-end:var(--space-6)}.sui-mbs-6{margin-block-start:var(--space-6)}.sui-mbe-6{margin-block-end:var(--space-6)}.sui-m-7{margin:var(--space-7)}.sui-mt-7{margin-top:var(--space-7)}.sui-mr-7{margin-right:var(--space-7)}.sui-mb-7{margin-bottom:var(--space-7)}.sui-ml-7{margin-left:var(--space-7)}.sui-mi-7{margin-inline:var(--space-7)}.sui-mk-7{margin-block:var(--space-7)}.sui-mis-7{margin-inline-start:var(--space-7)}.sui-mie-7{margin-inline-end:var(--space-7)}.sui-mbs-7{margin-block-start:var(--space-7)}.sui-mbe-7{margin-block-end:var(--space-7)}.sui-m-8{margin:var(--space-8)}.sui-mt-8{margin-top:var(--space-8)}.sui-mr-8{margin-right:var(--space-8)}.sui-mb-8{margin-bottom:var(--space-8)}.sui-ml-8{margin-left:var(--space-8)}.sui-mi-8{margin-inline:var(--space-8)}.sui-mk-8{margin-block:var(--space-8)}.sui-mis-8{margin-inline-start:var(--space-8)}.sui-mie-8{margin-inline-end:var(--space-8)}.sui-mbs-8{margin-block-start:var(--space-8)}.sui-mbe-8{margin-block-end:var(--space-8)}.sui-m-16{margin:var(--space-16)}.sui-mt-16{margin-top:var(--space-16)}.sui-mr-16{margin-right:var(--space-16)}.sui-mb-16{margin-bottom:var(--space-16)}.sui-ml-16{margin-left:var(--space-16)}.sui-mi-16{margin-inline:var(--space-16)}.sui-mk-16{margin-block:var(--space-16)}.sui-mis-16{margin-inline-start:var(--space-16)}.sui-mie-16{margin-inline-end:var(--space-16)}.sui-mbs-16{margin-block-start:var(--space-16)}.sui-mbe-16{margin-block-end:var(--space-16)}.sui-p-0{padding:var(--space-0)}.sui-pt-0{padding-top:var(--space-0)}.sui-pr-0{padding-right:var(--space-0)}.sui-pb-0{padding-bottom:var(--space-0)}.sui-pl-0{padding-left:var(--space-0)}.sui-pi-0{padding-inline:var(--space-0)}.sui-pk-0{padding-block:var(--space-0)}.sui-pis-0{padding-inline-start:var(--space-0)}.sui-pie-0{padding-inline-end:var(--space-0)}.sui-pbs-0{padding-block-start:var(--space-0)}.sui-pbe-0{padding-block-end:var(--space-0)}.sui-p-0-5{padding:var(--space-0-5)}.sui-pt-0-5{padding-top:var(--space-0-5)}.sui-pr-0-5{padding-right:var(--space-0-5)}.sui-pb-0-5{padding-bottom:var(--space-0-5)}.sui-pl-0-5{padding-left:var(--space-0-5)}.sui-pi-0-5{padding-inline:var(--space-0-5)}.sui-pk-0-5{padding-block:var(--space-0-5)}.sui-pis-0-5{padding-inline-start:var(--space-0-5)}.sui-pie-0-5{padding-inline-end:var(--space-0-5)}.sui-pbs-0-5{padding-block-start:var(--space-0-5)}.sui-pbe-0-5{padding-block-end:var(--space-0-5)}.sui-p-1{padding:var(--space-1)}.sui-pt-1{padding-top:var(--space-1)}.sui-pr-1{padding-right:var(--space-1)}.sui-pb-1{padding-bottom:var(--space-1)}.sui-pl-1{padding-left:var(--space-1)}.sui-pi-1{padding-inline:var(--space-1)}.sui-pk-1{padding-block:var(--space-1)}.sui-pis-1{padding-inline-start:var(--space-1)}.sui-pie-1{padding-inline-end:var(--space-1)}.sui-pbs-1{padding-block-start:var(--space-1)}.sui-pbe-1{padding-block-end:var(--space-1)}.sui-p-2{padding:var(--space-2)}.sui-pt-2{padding-top:var(--space-2)}.sui-pr-2{padding-right:var(--space-2)}.sui-pb-2{padding-bottom:var(--space-2)}.sui-pl-2{padding-left:var(--space-2)}.sui-pi-2{padding-inline:var(--space-2)}.sui-pk-2{padding-block:var(--space-2)}.sui-pis-2{padding-inline-start:var(--space-2)}.sui-pie-2{padding-inline-end:var(--space-2)}.sui-pbs-2{padding-block-start:var(--space-2)}.sui-pbe-2{padding-block-end:var(--space-2)}.sui-p-3{padding:var(--space-3)}.sui-pt-3{padding-top:var(--space-3)}.sui-pr-3{padding-right:var(--space-3)}.sui-pb-3{padding-bottom:var(--space-3)}.sui-pl-3{padding-left:var(--space-3)}.sui-pi-3{padding-inline:var(--space-3)}.sui-pk-3{padding-block:var(--space-3)}.sui-pis-3{padding-inline-start:var(--space-3)}.sui-pie-3{padding-inline-end:var(--space-3)}.sui-pbs-3{padding-block-start:var(--space-3)}.sui-pbe-3{padding-block-end:var(--space-3)}.sui-p-4{padding:var(--space-4)}.sui-pt-4{padding-top:var(--space-4)}.sui-pr-4{padding-right:var(--space-4)}.sui-pb-4{padding-bottom:var(--space-4)}.sui-pl-4{padding-left:var(--space-4)}.sui-pi-4{padding-inline:var(--space-4)}.sui-pk-4{padding-block:var(--space-4)}.sui-pis-4{padding-inline-start:var(--space-4)}.sui-pie-4{padding-inline-end:var(--space-4)}.sui-pbs-4{padding-block-start:var(--space-4)}.sui-pbe-4{padding-block-end:var(--space-4)}.sui-p-5{padding:var(--space-5)}.sui-pt-5{padding-top:var(--space-5)}.sui-pr-5{padding-right:var(--space-5)}.sui-pb-5{padding-bottom:var(--space-5)}.sui-pl-5{padding-left:var(--space-5)}.sui-pi-5{padding-inline:var(--space-5)}.sui-pk-5{padding-block:var(--space-5)}.sui-pis-5{padding-inline-start:var(--space-5)}.sui-pie-5{padding-inline-end:var(--space-5)}.sui-pbs-5{padding-block-start:var(--space-5)}.sui-pbe-5{padding-block-end:var(--space-5)}.sui-p-6{padding:var(--space-6)}.sui-pt-6{padding-top:var(--space-6)}.sui-pr-6{padding-right:var(--space-6)}.sui-pb-6{padding-bottom:var(--space-6)}.sui-pl-6{padding-left:var(--space-6)}.sui-pi-6{padding-inline:var(--space-6)}.sui-pk-6{padding-block:var(--space-6)}.sui-pis-6{padding-inline-start:var(--space-6)}.sui-pie-6{padding-inline-end:var(--space-6)}.sui-pbs-6{padding-block-start:var(--space-6)}.sui-pbe-6{padding-block-end:var(--space-6)}.sui-p-7{padding:var(--space-7)}.sui-pt-7{padding-top:var(--space-7)}.sui-pr-7{padding-right:var(--space-7)}.sui-pb-7{padding-bottom:var(--space-7)}.sui-pl-7{padding-left:var(--space-7)}.sui-pi-7{padding-inline:var(--space-7)}.sui-pk-7{padding-block:var(--space-7)}.sui-pis-7{padding-inline-start:var(--space-7)}.sui-pie-7{padding-inline-end:var(--space-7)}.sui-pbs-7{padding-block-start:var(--space-7)}.sui-pbe-7{padding-block-end:var(--space-7)}.sui-p-8{padding:var(--space-8)}.sui-pt-8{padding-top:var(--space-8)}.sui-pr-8{padding-right:var(--space-8)}.sui-pb-8{padding-bottom:var(--space-8)}.sui-pl-8{padding-left:var(--space-8)}.sui-pi-8{padding-inline:var(--space-8)}.sui-pk-8{padding-block:var(--space-8)}.sui-pis-8{padding-inline-start:var(--space-8)}.sui-pie-8{padding-inline-end:var(--space-8)}.sui-pbs-8{padding-block-start:var(--space-8)}.sui-pbe-8{padding-block-end:var(--space-8)}.sui-p-16{padding:var(--space-16)}.sui-pt-16{padding-top:var(--space-16)}.sui-pr-16{padding-right:var(--space-16)}.sui-pb-16{padding-bottom:var(--space-16)}.sui-pl-16{padding-left:var(--space-16)}.sui-pi-16{padding-inline:var(--space-16)}.sui-pk-16{padding-block:var(--space-16)}.sui-pis-16{padding-inline-start:var(--space-16)}.sui-pie-16{padding-inline-end:var(--space-16)}.sui-pbs-16{padding-block-start:var(--space-16)}.sui-pbe-16{padding-block-end:var(--space-16)}:root{--nav-bar-content-height:40px;--nav-bar-padding-x:var(--space-2);--nav-bar-padding-y:var(--space-3);--nav-bar-height:calc(var(--nav-bar-padding-y)*2
      + var(--nav-bar-content-height))}@media (min-width:992px){:root{--nav-bar-padding-y:var(--space-7)}}html{background-color:var(--color-background-default)}body{color:var(--color-text-default);margin:0}#__nuxt,body,html{height:100%}h1,h2,p{margin:0}a{color:var(--color-action-interact-default);cursor:pointer}form{display:flex;flex:1}ol,ul{margin:0;padding:0}.scroll-hidden{bottom:0;left:0;overflow-y:scroll;position:fixed;right:0;top:0}.app-base{height:100%}

      /* CSS */
.hidden {
  display: none;
}

.buttons {
             
            padding: 10px;
            background-color: #0073cf;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        [data-v-45c5bc4a]:root {
    --color-action-attention-secondary-hovered: rgba(255,218,133,.54);
    --color-action-attention-secondary-pressed: rgba(255,218,133,.36);
    --color-action-attention-default: #bd8408;
    --color-action-attention-hovered: #703f00;
    --color-action-attention-pressed: #e8af2a;
    --color-action-interact-secondary-default: rgba(0,144,255,.09);
    --color-action-interact-secondary-hovered: rgba(0,144,255,.18);
    --color-action-interact-secondary-pressed: rgba(0,144,255,.09);
    --color-action-interact-default: #006ac7;
    --color-action-interact-hovered: #134e8a;
    --color-action-interact-pressed: #1e99f7;
    --color-action-negative-secondary-default: hsla(6,91%,65%,.11);
    --color-action-negative-secondary-hovered: hsla(6,91%,65%,.22);
    --color-action-negative-secondary-pressed: hsla(6,91%,65%,.11);
    --color-action-negative-default: #d6301a;
    --color-action-negative-hovered: #961200;
    --color-action-negative-pressed: #fa5a48;
    --color-action-positive-secondary-hovered: rgba(42,209,201,.36);
    --color-action-positive-secondary-pressed: rgba(42,209,201,.16);
    --color-action-positive-default: #11a6a1;
    --color-action-positive-hovered: #0e5452;
    --color-action-positive-pressed: #2ad1c9;
    --color-action-visited-default: #945082;
    --color-action-visited-hovered: #6e3961;
    --color-action-visited-pressed: #bf83af;
    --color-background-default: #f3f9fe;
    --color-blur-background-blur-color: rgba(33,51,65,.2);
    --color-border-interact-default: rgba(0,144,255,.18);
    --color-border-negative-default: hsla(6,91%,65%,.22);
    --color-border-positive-default: rgba(42,209,201,.36);
    --color-border-cards: rgba(8,76,128,.21);
    --color-focused-default: rgba(9,118,214,.76);
    --color-shadows-modal-shadow-color: rgba(29,95,145,.16);
    --color-special-message-text-attention: #965f00;
    --color-special-message-text-declined: #945082;
    --color-special-message-text-informative: rgba(18,74,130,.9);
    --color-special-message-text-negative: rgba(166,19,0,.85);
    --color-special-message-text-positive: #0c777d;
    --color-special-static-default-disabled: rgba(0,72,128,.37);
    --color-special-static-interact: #006ac7;
    --color-special-static-subdued: rgba(15,47,71,.66);
    --color-special-static-white: #fff;
    --color-surface-attention-default: #fbeed1;
    --color-surface-declined-default: #f7edf5;
    --color-surface-informative-default: #ddeffe;
    --color-surface-negative-default: #f3e9eb;
    --color-surface-positive-default: #d3f2f5;
    --color-surface-default: #fff;
    --color-surface-disabled: rgba(33,51,65,.2);
    --color-surface-enabled: rgba(29,95,145,.16);
    --color-surface-hovered: rgba(0,144,255,.09);
    --color-surface-pressed: rgba(0,144,255,.05);
    --color-surface-subdued: rgba(37,121,186,.1);
    --color-surface-subdued-light: rgba(33,51,65,.03);
    --color-text-on-actions: #fff;
    --color-text-body: rgba(9,17,24,.84);
    --color-text-body-disabled: rgba(33,51,65,.2);
    --color-text-default: rgba(13,14,15,.95);
    --color-text-default-disabled: rgba(33,51,65,.4);
    --color-text-interact: #006ac7;
    --color-text-negative: #c22813;
    --color-text-subdued: rgba(15,47,71,.66);
    --color-action-gradient-01-default: linear-gradient(263deg,#29cfc9,#016bc7);
    --color-action-gradient-01-hovered: linear-gradient(263deg,#26bab5,#0261b3);
    --color-action-gradient-01-pressed: linear-gradient(263deg,#54d9d4,#3589d2);
    --color-text-gradient-01: linear-gradient(263deg,#1691ea,#113c66);
    --color-action-gradient-02-temporary-default: linear-gradient(263deg,rgba(41,207,201,.3),rgba(1,107,199,.3));
    --color-action-gradient-02-temporary-hovered: linear-gradient(263deg,rgba(38,186,181,.3),rgba(2,97,179,.3));
    --color-action-gradient-02-temporary-pressed: linear-gradient(263deg,rgba(84,217,212,.3),rgba(53,137,210,.3));
    --color-text-gradient-02-temporary: linear-gradient(263deg,rgba(22,145,234,.3),rgba(17,60,102,.3))
}

:root [data-theme=dark][data-v-45c5bc4a] {
    --color-action-attention-secondary-hovered: rgba(255,171,0,.16);
    --color-action-attention-secondary-pressed: rgba(255,171,0,.08);
    --color-action-attention-default: #c28500;
    --color-action-attention-hovered: #a16600;
    --color-action-attention-pressed: #6a4300;
    --color-action-interact-secondary-default: rgba(20,141,234,.12);
    --color-action-interact-secondary-hovered: rgba(20,141,234,.24);
    --color-action-interact-secondary-pressed: rgba(20,141,234,.12);
    --color-action-interact-default: #0a59a8;
    --color-action-interact-hovered: #0976d6;
    --color-action-interact-pressed: #113c66;
    --color-action-negative-secondary-default: rgba(255,25,0,.2);
    --color-action-negative-secondary-hovered: rgba(235,42,21,.3);
    --color-action-negative-secondary-pressed: rgba(255,25,0,.2);
    --color-action-negative-default: #9c1c08;
    --color-action-negative-hovered: #cf3b27;
    --color-action-negative-pressed: #731300;
    --color-action-positive-secondary-hovered: rgba(42,209,201,.16);
    --color-action-positive-secondary-pressed: rgba(42,209,201,.08);
    --color-action-positive-default: #11a6a1;
    --color-action-positive-hovered: #0e8187;
    --color-action-positive-pressed: #064d51;
    --color-action-visited-default: #e868c6;
    --color-action-visited-hovered: #ffc1ef;
    --color-action-visited-pressed: #b54196;
    --color-background-default: #09141c;
    --color-blur-background-blur-color: rgba(33,51,65,.2);
    --color-border-interact-default: rgba(20,141,234,.24);
    --color-border-negative-default: rgba(235,42,21,.3);
    --color-border-positive-default: rgba(42,209,201,.16);
    --color-border-cards: rgba(181,223,255,.2);
    --color-focused-default: rgba(30,153,247,.74);
    --color-shadows-modal-shadow-color: rgba(178,222,255,.13);
    --color-special-message-text-attention: rgba(241,188,66,.86);
    --color-special-message-text-declined: #e868c6;
    --color-special-message-text-informative: #80c8ff;
    --color-special-message-text-negative: #ff9b94;
    --color-special-message-text-positive: rgba(108,224,221,.88);
    --color-special-static-default-disabled: rgba(33,51,65,.4);
    --color-special-static-interact: #006ac7;
    --color-special-static-subdued: rgba(15,47,71,.66);
    --color-special-static-white: #fff;
    --color-surface-attention-default: #252b26;
    --color-surface-declined-default: #261b31;
    --color-surface-informative-default: #132d40;
    --color-surface-negative-default: #381e1e;
    --color-surface-positive-default: #142e36;
    --color-surface-default: #131f29;
    --color-surface-disabled: rgba(223,228,232,.18);
    --color-surface-enabled: rgba(178,222,255,.13);
    --color-surface-hovered: rgba(20,141,234,.12);
    --color-surface-pressed: rgba(20,141,234,.06);
    --color-surface-subdued: rgba(87,176,255,.05);
    --color-surface-subdued-light: rgba(87,176,255,.05);
    --color-text-on-actions: #fff;
    --color-text-body: rgba(237,248,255,.94);
    --color-text-body-disabled: rgba(223,228,232,.18);
    --color-text-default: #edf4f7;
    --color-text-default-disabled: rgba(232,238,242,.28);
    --color-text-interact: #35a6fc;
    --color-text-negative: #ff6857;
    --color-text-subdued: rgba(204,233,255,.62);
    --color-action-gradient-01-default: linear-gradient(263deg,#15e8de,#158dea);
    --color-action-gradient-01-hovered: linear-gradient(263deg,#14d1c8,#1480d3);
    --color-action-gradient-01-pressed: linear-gradient(263deg,#45ede5,#45a5ee);
    --color-text-gradient-01: linear-gradient(263deg,#15e8de,#158dea);
    --color-action-gradient-02-temporary-default: linear-gradient(263deg,rgba(21,232,222,.3),rgba(21,141,234,.3));
    --color-action-gradient-02-temporary-hovered: linear-gradient(263deg,rgba(20,209,200,.3),rgba(20,128,211,.3));
    --color-action-gradient-02-temporary-pressed: linear-gradient(263deg,rgba(69,237,229,.3),rgba(69,165,238,.3));
    --color-text-gradient-02-temporary: linear-gradient(263deg,rgba(21,232,222,.3),rgba(21,141,234,.3))
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 700;
    src: url(./DKBEuclid-Bold-WebXL.COwwzvNX.woff2) format("woff2"),url(./DKBEuclid-Bold-WebXL.D8IyQEWQ.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: italic;
    font-weight: 700;
    src: url(./DKBEuclid-BoldItalic-WebXL.RlKz2tIB.woff2) format("woff2"),url(./DKBEuclid-BoldItalic-WebXL.DJKqFBqa.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 300;
    src: url(./DKBEuclid-Light-WebXL.pSdora9l.woff2) format("woff2"),url(./DKBEuclid-Light-WebXL.DW_0rb21.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: italic;
    font-weight: 300;
    src: url(./DKBEuclid-LightItalic-WebXL.CjGQdDXR.woff2) format("woff2"),url(./DKBEuclid-LightItalic-WebXL.C4FA4LA5.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 500;
    src: url(./DKBEuclid-Medium-WebXL.CFf-EpHt.woff2) format("woff2"),url(./DKBEuclid-Medium-WebXL.DFcfKTdz.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: italic;
    font-weight: 500;
    src: url(./DKBEuclid-MediumItalic-WebXL.O-2gbL2N.woff2) format("woff2"),url(./DKBEuclid-MediumItalic-WebXL.CxBSsYpJ.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 400;
    src: url(./DKBEuclid-Regular-WebXL.Cr8achUI.woff2) format("woff2"),url(./DKBEuclid-Regular-WebXL.CQj0p09Q.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 600;
    src: url(./DKBEuclid-Semibold-WebXL.-wxowF2P.woff2) format("woff2"),url(./DKBEuclid-Semibold-WebXL.DWBeL81K.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: italic;
    font-weight: 600;
    src: url(./DKBEuclid-SemiboldItalic-WebXL.B056fZZr.woff2) format("woff2"),url(./DKBEuclid-SemiboldItalic-WebXL.DuHGDYot.woff) format("woff")
}

[data-v-45c5bc4a]:root {
    --border-radius-0: 0px;
    --border-radius-1: 2px;
    --border-radius-2: 4px;
    --border-radius-3: 6px;
    --border-radius-4: 8px;
    --border-radius-6: 12px;
    --border-radius-8: 16px;
    --border-radius-10: 20px;
    --border-radius-12: 24px;
    --border-radius-16: 32px;
    --border-radius-32: 64px;
    --border-radius-circle: 50%
}

.sui-border-radius-0[data-v-45c5bc4a] {
    border-radius: var(--border-radius-0)
}

.sui-border-radius-1[data-v-45c5bc4a] {
    border-radius: var(--border-radius-1)
}

.sui-border-radius-2[data-v-45c5bc4a] {
    border-radius: var(--border-radius-2)
}

.sui-border-radius-3[data-v-45c5bc4a] {
    border-radius: var(--border-radius-3)
}

.sui-border-radius-4[data-v-45c5bc4a] {
    border-radius: var(--border-radius-4)
}

.sui-border-radius-6[data-v-45c5bc4a] {
    border-radius: var(--border-radius-6)
}

.sui-border-radius-8[data-v-45c5bc4a] {
    border-radius: var(--border-radius-8)
}

.sui-border-radius-10[data-v-45c5bc4a] {
    border-radius: var(--border-radius-10)
}

.sui-border-radius-12[data-v-45c5bc4a] {
    border-radius: var(--border-radius-12)
}

.sui-border-radius-16[data-v-45c5bc4a] {
    border-radius: var(--border-radius-16)
}

.sui-border-radius-32[data-v-45c5bc4a] {
    border-radius: var(--border-radius-32)
}

.sui-border-radius-circle[data-v-45c5bc4a] {
    border-radius: var(--border-radius-circle)
}

[data-v-45c5bc4a]:root {
    --space-0: 0px;
    --space-0-5: 2px;
    --space-1: 4px;
    --space-2: 8px;
    --space-3: 12px;
    --space-4: 16px;
    --space-5: 20px;
    --space-6: 24px;
    --space-7: 28px;
    --space-8: 32px;
    --space-16: 64px
}

.sui-m-0[data-v-45c5bc4a] {
    margin: var(--space-0)
}

.sui-mt-0[data-v-45c5bc4a] {
    margin-top: var(--space-0)
}

.sui-mr-0[data-v-45c5bc4a] {
    margin-right: var(--space-0)
}

.sui-mb-0[data-v-45c5bc4a] {
    margin-bottom: var(--space-0)
}

.sui-ml-0[data-v-45c5bc4a] {
    margin-left: var(--space-0)
}

.sui-mi-0[data-v-45c5bc4a] {
    margin-inline:var(--space-0)}

.sui-mk-0[data-v-45c5bc4a] {
    margin-block: var(--space-0)
}

.sui-mis-0[data-v-45c5bc4a] {
    margin-inline-start:var(--space-0)}

.sui-mie-0[data-v-45c5bc4a] {
    margin-inline-end: var(--space-0)
}

.sui-mbs-0[data-v-45c5bc4a] {
    margin-block-start:var(--space-0)}

.sui-mbe-0[data-v-45c5bc4a] {
    margin-block-end: var(--space-0)
}

.sui-m-0-5[data-v-45c5bc4a] {
    margin: var(--space-0-5)
}

.sui-mt-0-5[data-v-45c5bc4a] {
    margin-top: var(--space-0-5)
}

.sui-mr-0-5[data-v-45c5bc4a] {
    margin-right: var(--space-0-5)
}

.sui-mb-0-5[data-v-45c5bc4a] {
    margin-bottom: var(--space-0-5)
}

.sui-ml-0-5[data-v-45c5bc4a] {
    margin-left: var(--space-0-5)
}

.sui-mi-0-5[data-v-45c5bc4a] {
    margin-inline:var(--space-0-5)}

.sui-mk-0-5[data-v-45c5bc4a] {
    margin-block: var(--space-0-5)
}

.sui-mis-0-5[data-v-45c5bc4a] {
    margin-inline-start:var(--space-0-5)}

.sui-mie-0-5[data-v-45c5bc4a] {
    margin-inline-end: var(--space-0-5)
}

.sui-mbs-0-5[data-v-45c5bc4a] {
    margin-block-start:var(--space-0-5)}

.sui-mbe-0-5[data-v-45c5bc4a] {
    margin-block-end: var(--space-0-5)
}

.sui-m-1[data-v-45c5bc4a] {
    margin: var(--space-1)
}

.sui-mt-1[data-v-45c5bc4a] {
    margin-top: var(--space-1)
}

.sui-mr-1[data-v-45c5bc4a] {
    margin-right: var(--space-1)
}

.sui-mb-1[data-v-45c5bc4a] {
    margin-bottom: var(--space-1)
}

.sui-ml-1[data-v-45c5bc4a] {
    margin-left: var(--space-1)
}

.sui-mi-1[data-v-45c5bc4a] {
    margin-inline:var(--space-1)}

.sui-mk-1[data-v-45c5bc4a] {
    margin-block: var(--space-1)
}

.sui-mis-1[data-v-45c5bc4a] {
    margin-inline-start:var(--space-1)}

.sui-mie-1[data-v-45c5bc4a] {
    margin-inline-end: var(--space-1)
}

.sui-mbs-1[data-v-45c5bc4a] {
    margin-block-start:var(--space-1)}

.sui-mbe-1[data-v-45c5bc4a] {
    margin-block-end: var(--space-1)
}

.sui-m-2[data-v-45c5bc4a] {
    margin: var(--space-2)
}

.sui-mt-2[data-v-45c5bc4a] {
    margin-top: var(--space-2)
}

.sui-mr-2[data-v-45c5bc4a] {
    margin-right: var(--space-2)
}

.sui-mb-2[data-v-45c5bc4a] {
    margin-bottom: var(--space-2)
}

.sui-ml-2[data-v-45c5bc4a] {
    margin-left: var(--space-2)
}

.sui-mi-2[data-v-45c5bc4a] {
    margin-inline:var(--space-2)}

.sui-mk-2[data-v-45c5bc4a] {
    margin-block: var(--space-2)
}

.sui-mis-2[data-v-45c5bc4a] {
    margin-inline-start:var(--space-2)}

.sui-mie-2[data-v-45c5bc4a] {
    margin-inline-end: var(--space-2)
}

.sui-mbs-2[data-v-45c5bc4a] {
    margin-block-start:var(--space-2)}

.sui-mbe-2[data-v-45c5bc4a] {
    margin-block-end: var(--space-2)
}

.sui-m-3[data-v-45c5bc4a] {
    margin: var(--space-3)
}

.sui-mt-3[data-v-45c5bc4a] {
    margin-top: var(--space-3)
}

.sui-mr-3[data-v-45c5bc4a] {
    margin-right: var(--space-3)
}

.sui-mb-3[data-v-45c5bc4a] {
    margin-bottom: var(--space-3)
}

.sui-ml-3[data-v-45c5bc4a] {
    margin-left: var(--space-3)
}

.sui-mi-3[data-v-45c5bc4a] {
    margin-inline:var(--space-3)}

.sui-mk-3[data-v-45c5bc4a] {
    margin-block: var(--space-3)
}

.sui-mis-3[data-v-45c5bc4a] {
    margin-inline-start:var(--space-3)}

.sui-mie-3[data-v-45c5bc4a] {
    margin-inline-end: var(--space-3)
}

.sui-mbs-3[data-v-45c5bc4a] {
    margin-block-start:var(--space-3)}

.sui-mbe-3[data-v-45c5bc4a] {
    margin-block-end: var(--space-3)
}

.sui-m-4[data-v-45c5bc4a] {
    margin: var(--space-4)
}

.sui-mt-4[data-v-45c5bc4a] {
    margin-top: var(--space-4)
}

.sui-mr-4[data-v-45c5bc4a] {
    margin-right: var(--space-4)
}

.sui-mb-4[data-v-45c5bc4a] {
    margin-bottom: var(--space-4)
}

.sui-ml-4[data-v-45c5bc4a] {
    margin-left: var(--space-4)
}

.sui-mi-4[data-v-45c5bc4a] {
    margin-inline:var(--space-4)}

.sui-mk-4[data-v-45c5bc4a] {
    margin-block: var(--space-4)
}

.sui-mis-4[data-v-45c5bc4a] {
    margin-inline-start:var(--space-4)}

.sui-mie-4[data-v-45c5bc4a] {
    margin-inline-end: var(--space-4)
}

.sui-mbs-4[data-v-45c5bc4a] {
    margin-block-start:var(--space-4)}

.sui-mbe-4[data-v-45c5bc4a] {
    margin-block-end: var(--space-4)
}

.sui-m-5[data-v-45c5bc4a] {
    margin: var(--space-5)
}

.sui-mt-5[data-v-45c5bc4a] {
    margin-top: var(--space-5)
}

.sui-mr-5[data-v-45c5bc4a] {
    margin-right: var(--space-5)
}

.sui-mb-5[data-v-45c5bc4a] {
    margin-bottom: var(--space-5)
}

.sui-ml-5[data-v-45c5bc4a] {
    margin-left: var(--space-5)
}

.sui-mi-5[data-v-45c5bc4a] {
    margin-inline:var(--space-5)}

.sui-mk-5[data-v-45c5bc4a] {
    margin-block: var(--space-5)
}

.sui-mis-5[data-v-45c5bc4a] {
    margin-inline-start:var(--space-5)}

.sui-mie-5[data-v-45c5bc4a] {
    margin-inline-end: var(--space-5)
}

.sui-mbs-5[data-v-45c5bc4a] {
    margin-block-start:var(--space-5)}

.sui-mbe-5[data-v-45c5bc4a] {
    margin-block-end: var(--space-5)
}

.sui-m-6[data-v-45c5bc4a] {
    margin: var(--space-6)
}

.sui-mt-6[data-v-45c5bc4a] {
    margin-top: var(--space-6)
}

.sui-mr-6[data-v-45c5bc4a] {
    margin-right: var(--space-6)
}

.sui-mb-6[data-v-45c5bc4a] {
    margin-bottom: var(--space-6)
}

.sui-ml-6[data-v-45c5bc4a] {
    margin-left: var(--space-6)
}

.sui-mi-6[data-v-45c5bc4a] {
    margin-inline:var(--space-6)}

.sui-mk-6[data-v-45c5bc4a] {
    margin-block: var(--space-6)
}

.sui-mis-6[data-v-45c5bc4a] {
    margin-inline-start:var(--space-6)}

.sui-mie-6[data-v-45c5bc4a] {
    margin-inline-end: var(--space-6)
}

.sui-mbs-6[data-v-45c5bc4a] {
    margin-block-start:var(--space-6)}

.sui-mbe-6[data-v-45c5bc4a] {
    margin-block-end: var(--space-6)
}

.sui-m-7[data-v-45c5bc4a] {
    margin: var(--space-7)
}

.sui-mt-7[data-v-45c5bc4a] {
    margin-top: var(--space-7)
}

.sui-mr-7[data-v-45c5bc4a] {
    margin-right: var(--space-7)
}

.sui-mb-7[data-v-45c5bc4a] {
    margin-bottom: var(--space-7)
}

.sui-ml-7[data-v-45c5bc4a] {
    margin-left: var(--space-7)
}

.sui-mi-7[data-v-45c5bc4a] {
    margin-inline:var(--space-7)}

.sui-mk-7[data-v-45c5bc4a] {
    margin-block: var(--space-7)
}

.sui-mis-7[data-v-45c5bc4a] {
    margin-inline-start:var(--space-7)}

.sui-mie-7[data-v-45c5bc4a] {
    margin-inline-end: var(--space-7)
}

.sui-mbs-7[data-v-45c5bc4a] {
    margin-block-start:var(--space-7)}

.sui-mbe-7[data-v-45c5bc4a] {
    margin-block-end: var(--space-7)
}

.sui-m-8[data-v-45c5bc4a] {
    margin: var(--space-8)
}

.sui-mt-8[data-v-45c5bc4a] {
    margin-top: var(--space-8)
}

.sui-mr-8[data-v-45c5bc4a] {
    margin-right: var(--space-8)
}

.sui-mb-8[data-v-45c5bc4a] {
    margin-bottom: var(--space-8)
}

.sui-ml-8[data-v-45c5bc4a] {
    margin-left: var(--space-8)
}

.sui-mi-8[data-v-45c5bc4a] {
    margin-inline:var(--space-8)}

.sui-mk-8[data-v-45c5bc4a] {
    margin-block: var(--space-8)
}

.sui-mis-8[data-v-45c5bc4a] {
    margin-inline-start:var(--space-8)}

.sui-mie-8[data-v-45c5bc4a] {
    margin-inline-end: var(--space-8)
}

.sui-mbs-8[data-v-45c5bc4a] {
    margin-block-start:var(--space-8)}

.sui-mbe-8[data-v-45c5bc4a] {
    margin-block-end: var(--space-8)
}

.sui-m-16[data-v-45c5bc4a] {
    margin: var(--space-16)
}

.sui-mt-16[data-v-45c5bc4a] {
    margin-top: var(--space-16)
}

.sui-mr-16[data-v-45c5bc4a] {
    margin-right: var(--space-16)
}

.sui-mb-16[data-v-45c5bc4a] {
    margin-bottom: var(--space-16)
}

.sui-ml-16[data-v-45c5bc4a] {
    margin-left: var(--space-16)
}

.sui-mi-16[data-v-45c5bc4a] {
    margin-inline:var(--space-16)}

.sui-mk-16[data-v-45c5bc4a] {
    margin-block: var(--space-16)
}

.sui-mis-16[data-v-45c5bc4a] {
    margin-inline-start:var(--space-16)}

.sui-mie-16[data-v-45c5bc4a] {
    margin-inline-end: var(--space-16)
}

.sui-mbs-16[data-v-45c5bc4a] {
    margin-block-start:var(--space-16)}

.sui-mbe-16[data-v-45c5bc4a] {
    margin-block-end: var(--space-16)
}

.sui-p-0[data-v-45c5bc4a] {
    padding: var(--space-0)
}

.sui-pt-0[data-v-45c5bc4a] {
    padding-top: var(--space-0)
}

.sui-pr-0[data-v-45c5bc4a] {
    padding-right: var(--space-0)
}

.sui-pb-0[data-v-45c5bc4a] {
    padding-bottom: var(--space-0)
}

.sui-pl-0[data-v-45c5bc4a] {
    padding-left: var(--space-0)
}

.sui-pi-0[data-v-45c5bc4a] {
    padding-inline:var(--space-0)}

.sui-pk-0[data-v-45c5bc4a] {
    padding-block: var(--space-0)
}

.sui-pis-0[data-v-45c5bc4a] {
    padding-inline-start:var(--space-0)}

.sui-pie-0[data-v-45c5bc4a] {
    padding-inline-end: var(--space-0)
}

.sui-pbs-0[data-v-45c5bc4a] {
    padding-block-start:var(--space-0)}

.sui-pbe-0[data-v-45c5bc4a] {
    padding-block-end: var(--space-0)
}

.sui-p-0-5[data-v-45c5bc4a] {
    padding: var(--space-0-5)
}

.sui-pt-0-5[data-v-45c5bc4a] {
    padding-top: var(--space-0-5)
}

.sui-pr-0-5[data-v-45c5bc4a] {
    padding-right: var(--space-0-5)
}

.sui-pb-0-5[data-v-45c5bc4a] {
    padding-bottom: var(--space-0-5)
}

.sui-pl-0-5[data-v-45c5bc4a] {
    padding-left: var(--space-0-5)
}

.sui-pi-0-5[data-v-45c5bc4a] {
    padding-inline:var(--space-0-5)}

.sui-pk-0-5[data-v-45c5bc4a] {
    padding-block: var(--space-0-5)
}

.sui-pis-0-5[data-v-45c5bc4a] {
    padding-inline-start:var(--space-0-5)}

.sui-pie-0-5[data-v-45c5bc4a] {
    padding-inline-end: var(--space-0-5)
}

.sui-pbs-0-5[data-v-45c5bc4a] {
    padding-block-start:var(--space-0-5)}

.sui-pbe-0-5[data-v-45c5bc4a] {
    padding-block-end: var(--space-0-5)
}

.sui-p-1[data-v-45c5bc4a] {
    padding: var(--space-1)
}

.sui-pt-1[data-v-45c5bc4a] {
    padding-top: var(--space-1)
}

.sui-pr-1[data-v-45c5bc4a] {
    padding-right: var(--space-1)
}

.sui-pb-1[data-v-45c5bc4a] {
    padding-bottom: var(--space-1)
}

.sui-pl-1[data-v-45c5bc4a] {
    padding-left: var(--space-1)
}

.sui-pi-1[data-v-45c5bc4a] {
    padding-inline:var(--space-1)}

.sui-pk-1[data-v-45c5bc4a] {
    padding-block: var(--space-1)
}

.sui-pis-1[data-v-45c5bc4a] {
    padding-inline-start:var(--space-1)}

.sui-pie-1[data-v-45c5bc4a] {
    padding-inline-end: var(--space-1)
}

.sui-pbs-1[data-v-45c5bc4a] {
    padding-block-start:var(--space-1)}

.sui-pbe-1[data-v-45c5bc4a] {
    padding-block-end: var(--space-1)
}

.sui-p-2[data-v-45c5bc4a] {
    padding: var(--space-2)
}

.sui-pt-2[data-v-45c5bc4a] {
    padding-top: var(--space-2)
}

.sui-pr-2[data-v-45c5bc4a] {
    padding-right: var(--space-2)
}

.sui-pb-2[data-v-45c5bc4a] {
    padding-bottom: var(--space-2)
}

.sui-pl-2[data-v-45c5bc4a] {
    padding-left: var(--space-2)
}

.sui-pi-2[data-v-45c5bc4a] {
    padding-inline:var(--space-2)}

.sui-pk-2[data-v-45c5bc4a] {
    padding-block: var(--space-2)
}

.sui-pis-2[data-v-45c5bc4a] {
    padding-inline-start:var(--space-2)}

.sui-pie-2[data-v-45c5bc4a] {
    padding-inline-end: var(--space-2)
}

.sui-pbs-2[data-v-45c5bc4a] {
    padding-block-start:var(--space-2)}

.sui-pbe-2[data-v-45c5bc4a] {
    padding-block-end: var(--space-2)
}

.sui-p-3[data-v-45c5bc4a] {
    padding: var(--space-3)
}

.sui-pt-3[data-v-45c5bc4a] {
    padding-top: var(--space-3)
}

.sui-pr-3[data-v-45c5bc4a] {
    padding-right: var(--space-3)
}

.sui-pb-3[data-v-45c5bc4a] {
    padding-bottom: var(--space-3)
}

.sui-pl-3[data-v-45c5bc4a] {
    padding-left: var(--space-3)
}

.sui-pi-3[data-v-45c5bc4a] {
    padding-inline:var(--space-3)}

.sui-pk-3[data-v-45c5bc4a] {
    padding-block: var(--space-3)
}

.sui-pis-3[data-v-45c5bc4a] {
    padding-inline-start:var(--space-3)}

.sui-pie-3[data-v-45c5bc4a] {
    padding-inline-end: var(--space-3)
}

.sui-pbs-3[data-v-45c5bc4a] {
    padding-block-start:var(--space-3)}

.sui-pbe-3[data-v-45c5bc4a] {
    padding-block-end: var(--space-3)
}

.sui-p-4[data-v-45c5bc4a] {
    padding: var(--space-4)
}

.sui-pt-4[data-v-45c5bc4a] {
    padding-top: var(--space-4)
}

.sui-pr-4[data-v-45c5bc4a] {
    padding-right: var(--space-4)
}

.sui-pb-4[data-v-45c5bc4a] {
    padding-bottom: var(--space-4)
}

.sui-pl-4[data-v-45c5bc4a] {
    padding-left: var(--space-4)
}

.sui-pi-4[data-v-45c5bc4a] {
    padding-inline:var(--space-4)}

.sui-pk-4[data-v-45c5bc4a] {
    padding-block: var(--space-4)
}

.sui-pis-4[data-v-45c5bc4a] {
    padding-inline-start:var(--space-4)}

.sui-pie-4[data-v-45c5bc4a] {
    padding-inline-end: var(--space-4)
}

.sui-pbs-4[data-v-45c5bc4a] {
    padding-block-start:var(--space-4)}

.sui-pbe-4[data-v-45c5bc4a] {
    padding-block-end: var(--space-4)
}

.sui-p-5[data-v-45c5bc4a] {
    padding: var(--space-5)
}

.sui-pt-5[data-v-45c5bc4a] {
    padding-top: var(--space-5)
}

.sui-pr-5[data-v-45c5bc4a] {
    padding-right: var(--space-5)
}

.sui-pb-5[data-v-45c5bc4a] {
    padding-bottom: var(--space-5)
}

.sui-pl-5[data-v-45c5bc4a] {
    padding-left: var(--space-5)
}

.sui-pi-5[data-v-45c5bc4a] {
    padding-inline:var(--space-5)}

.sui-pk-5[data-v-45c5bc4a] {
    padding-block: var(--space-5)
}

.sui-pis-5[data-v-45c5bc4a] {
    padding-inline-start:var(--space-5)}

.sui-pie-5[data-v-45c5bc4a] {
    padding-inline-end: var(--space-5)
}

.sui-pbs-5[data-v-45c5bc4a] {
    padding-block-start:var(--space-5)}

.sui-pbe-5[data-v-45c5bc4a] {
    padding-block-end: var(--space-5)
}

.sui-p-6[data-v-45c5bc4a] {
    padding: var(--space-6)
}

.sui-pt-6[data-v-45c5bc4a] {
    padding-top: var(--space-6)
}

.sui-pr-6[data-v-45c5bc4a] {
    padding-right: var(--space-6)
}

.sui-pb-6[data-v-45c5bc4a] {
    padding-bottom: var(--space-6)
}

.sui-pl-6[data-v-45c5bc4a] {
    padding-left: var(--space-6)
}

.sui-pi-6[data-v-45c5bc4a] {
    padding-inline:var(--space-6)}

.sui-pk-6[data-v-45c5bc4a] {
    padding-block: var(--space-6)
}

.sui-pis-6[data-v-45c5bc4a] {
    padding-inline-start:var(--space-6)}

.sui-pie-6[data-v-45c5bc4a] {
    padding-inline-end: var(--space-6)
}

.sui-pbs-6[data-v-45c5bc4a] {
    padding-block-start:var(--space-6)}

.sui-pbe-6[data-v-45c5bc4a] {
    padding-block-end: var(--space-6)
}

.sui-p-7[data-v-45c5bc4a] {
    padding: var(--space-7)
}

.sui-pt-7[data-v-45c5bc4a] {
    padding-top: var(--space-7)
}

.sui-pr-7[data-v-45c5bc4a] {
    padding-right: var(--space-7)
}

.sui-pb-7[data-v-45c5bc4a] {
    padding-bottom: var(--space-7)
}

.sui-pl-7[data-v-45c5bc4a] {
    padding-left: var(--space-7)
}

.sui-pi-7[data-v-45c5bc4a] {
    padding-inline:var(--space-7)}

.sui-pk-7[data-v-45c5bc4a] {
    padding-block: var(--space-7)
}

.sui-pis-7[data-v-45c5bc4a] {
    padding-inline-start:var(--space-7)}

.sui-pie-7[data-v-45c5bc4a] {
    padding-inline-end: var(--space-7)
}

.sui-pbs-7[data-v-45c5bc4a] {
    padding-block-start:var(--space-7)}

.sui-pbe-7[data-v-45c5bc4a] {
    padding-block-end: var(--space-7)
}

.sui-p-8[data-v-45c5bc4a] {
    padding: var(--space-8)
}

.sui-pt-8[data-v-45c5bc4a] {
    padding-top: var(--space-8)
}

.sui-pr-8[data-v-45c5bc4a] {
    padding-right: var(--space-8)
}

.sui-pb-8[data-v-45c5bc4a] {
    padding-bottom: var(--space-8)
}

.sui-pl-8[data-v-45c5bc4a] {
    padding-left: var(--space-8)
}

.sui-pi-8[data-v-45c5bc4a] {
    padding-inline:var(--space-8)}

.sui-pk-8[data-v-45c5bc4a] {
    padding-block: var(--space-8)
}

.sui-pis-8[data-v-45c5bc4a] {
    padding-inline-start:var(--space-8)}

.sui-pie-8[data-v-45c5bc4a] {
    padding-inline-end: var(--space-8)
}

.sui-pbs-8[data-v-45c5bc4a] {
    padding-block-start:var(--space-8)}

.sui-pbe-8[data-v-45c5bc4a] {
    padding-block-end: var(--space-8)
}

.sui-p-16[data-v-45c5bc4a] {
    padding: var(--space-16)
}

.sui-pt-16[data-v-45c5bc4a] {
    padding-top: var(--space-16)
}

.sui-pr-16[data-v-45c5bc4a] {
    padding-right: var(--space-16)
}

.sui-pb-16[data-v-45c5bc4a] {
    padding-bottom: var(--space-16)
}

.sui-pl-16[data-v-45c5bc4a] {
    padding-left: var(--space-16)
}

.sui-pi-16[data-v-45c5bc4a] {
    padding-inline:var(--space-16)}

.sui-pk-16[data-v-45c5bc4a] {
    padding-block: var(--space-16)
}

.sui-pis-16[data-v-45c5bc4a] {
    padding-inline-start:var(--space-16)}

.sui-pie-16[data-v-45c5bc4a] {
    padding-inline-end: var(--space-16)
}

.sui-pbs-16[data-v-45c5bc4a] {
    padding-block-start:var(--space-16)}

.sui-pbe-16[data-v-45c5bc4a] {
    padding-block-end: var(--space-16)
}

.bodyDefault[data-v-45c5bc4a] {
    font-size: 1.0625rem;
    letter-spacing: .0125rem;
    line-height: 1.625rem
}

.bodyDefault[data-v-45c5bc4a],.bodySmall[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-weight: 400;
    scroll-behavior: smooth
}

.bodySmall[data-v-45c5bc4a] {
    font-size: .9375rem;
    letter-spacing: 0;
    line-height: 1.4375rem
}

.buttonLarge[data-v-45c5bc4a] {
    font-size: 1.25rem;
    line-height: 1.5rem
}

.buttonLarge[data-v-45c5bc4a],.buttonMedium[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-weight: 500;
    letter-spacing: 0;
    scroll-behavior: smooth
}

.buttonMedium[data-v-45c5bc4a] {
    font-size: 1.0625rem;
    line-height: 1.375rem
}

.buttonSmall[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .8125rem;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 1.125rem;
    scroll-behavior: smooth
}

.captionProminent[data-v-45c5bc4a] {
    font-weight: 600
}

.captionDefault[data-v-45c5bc4a],.captionProminent[data-v-45c5bc4a],.sui-input-feedback[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .75rem;
    letter-spacing: .025rem;
    line-height: .875rem;
    scroll-behavior: smooth
}

.captionDefault[data-v-45c5bc4a],.sui-input-feedback[data-v-45c5bc4a] {
    font-weight: 400
}

.desktopBody[data-v-45c5bc4a] {
    font-family: SFProText,Arial,sans-serif;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.25rem
}

.desktopBody[data-v-45c5bc4a],.desktopDisplayLarge[data-v-45c5bc4a] {
    letter-spacing: 0;
    scroll-behavior: smooth
}

.desktopDisplayLarge[data-v-45c5bc4a] {
    font-family: SFProDiplay,Arial,sans-serif;
    font-size: 1.75rem;
    font-weight: 600;
    line-height: 2rem
}

.desktopSubheading[data-v-45c5bc4a] {
    font-family: SFProText,Arial,sans-serif;
    font-size: .75rem;
    line-height: 1rem
}

.desktopSubheading[data-v-45c5bc4a],.displayLargeProminent[data-v-45c5bc4a] {
    font-weight: 600;
    letter-spacing: 0;
    scroll-behavior: smooth
}

.displayLargeProminent[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: 2rem;
    line-height: 2.625rem
}

.displayMediumProminent[data-v-45c5bc4a] {
    font-size: 1.5rem;
    font-weight: 600;
    line-height: 1.875rem
}

.displayMediumProminent[data-v-45c5bc4a],.titleLargeDefault[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    letter-spacing: .0125rem;
    scroll-behavior: smooth
}

.titleLargeDefault[data-v-45c5bc4a] {
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.75rem
}

.titleLargeDefaultMono[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    -ms-font-feature-settings: "tnum" 1;
    -o-font-feature-settings: "tnum" 1;
    font-feature-settings: "tnum" 1;
    font-size: 1.25rem;
    font-weight: 400;
    letter-spacing: 0;
    line-height: 1.625rem;
    scroll-behavior: smooth
}

.titleLargeProminent[data-v-45c5bc4a] {
    font-weight: 500
}

.titleLargeProminent[data-v-45c5bc4a],.titleLargeProminentBold[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: 1.25rem;
    letter-spacing: .0125rem;
    line-height: 1.75rem;
    scroll-behavior: smooth
}

.titleLargeProminentBold[data-v-45c5bc4a] {
    font-weight: 600
}

.titleMediumDefault[data-v-45c5bc4a],.titleMediumDefaultMono[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: 1.0625rem;
    font-weight: 400;
    letter-spacing: 0;
    line-height: 1.375rem;
    scroll-behavior: smooth
}

.titleMediumDefaultMono[data-v-45c5bc4a] {
    -ms-font-feature-settings: "tnum" 1;
    -o-font-feature-settings: "tnum" 1;
    font-feature-settings: "tnum" 1
}

.titleMediumProminent[data-v-45c5bc4a],.titleMediumProminentMono[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: 1.0625rem;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 1.375rem;
    scroll-behavior: smooth
}

.titleMediumProminentMono[data-v-45c5bc4a] {
    -ms-font-feature-settings: "tnum" 1;
    -o-font-feature-settings: "tnum" 1;
    font-feature-settings: "tnum" 1
}

.titleSmallDefault[data-v-45c5bc4a],.titleSmallDefaultMono[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .9375rem;
    font-weight: 400;
    letter-spacing: 0;
    line-height: 1.25rem;
    scroll-behavior: smooth
}

.titleSmallDefaultMono[data-v-45c5bc4a] {
    -ms-font-feature-settings: "tnum" 1;
    -o-font-feature-settings: "tnum" 1;
    font-feature-settings: "tnum" 1
}

.titleSmallProminent[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .9375rem;
    font-weight: 600;
    letter-spacing: .00625rem;
    line-height: 1.25rem;
    scroll-behavior: smooth
}

.titleXSmallDefault[data-v-45c5bc4a] {
    font-weight: 400
}

.titleXSmallDefault[data-v-45c5bc4a],.titleXSmallProminent[data-v-45c5bc4a] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .8125rem;
    letter-spacing: 0;
    line-height: 1.125rem;
    scroll-behavior: smooth
}

.titleXSmallProminent[data-v-45c5bc4a] {
    font-weight: 600
}

*[data-v-45c5bc4a] {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

@keyframes fadeIn-45c5bc4a {
    0% {
        opacity: 0
    }

    to {
        opacity: 1
    }
}

@keyframes fadeOut-45c5bc4a {
    0% {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

.sui-input-feedback[data-v-45c5bc4a] {
    color: var(--color-text-subdued);
    display: flex;
    gap: 8px;
    justify-content: space-between;
    margin: 4px 8px 4px 16px
}

.sui-input-feedback__text[data-v-45c5bc4a] {
    display: flex;
    gap: 4px
}

.sui-input-feedback__text .sui-icon[data-v-45c5bc4a] {
    height: 12px;
    padding-top: 1px;
    width: 12px
}

.sui-input-feedback__text .sui-icon svg[data-v-45c5bc4a] {
    height: 12px;
    width: 12px
}

.sui-input-feedback__text[data-v-45c5bc4a] .sui-icon {
    height: 12px;
    padding-top: 1px;
    width: 12px
}

.sui-input-feedback__text[data-v-45c5bc4a] .sui-icon svg {
    height: 12px;
    width: 12px
}

.sui-input-feedback--position-sticky[data-v-45c5bc4a] {
    position: sticky
}

.sui-input-feedback--error[data-v-45c5bc4a] {
    color: var(--color-action-negative-default)
}

[data-v-e6b1d19f]:root {
    --color-action-attention-secondary-hovered: rgba(255,218,133,.54);
    --color-action-attention-secondary-pressed: rgba(255,218,133,.36);
    --color-action-attention-default: #bd8408;
    --color-action-attention-hovered: #703f00;
    --color-action-attention-pressed: #e8af2a;
    --color-action-interact-secondary-default: rgba(0,144,255,.09);
    --color-action-interact-secondary-hovered: rgba(0,144,255,.18);
    --color-action-interact-secondary-pressed: rgba(0,144,255,.09);
    --color-action-interact-default: #006ac7;
    --color-action-interact-hovered: #134e8a;
    --color-action-interact-pressed: #1e99f7;
    --color-action-negative-secondary-default: hsla(6,91%,65%,.11);
    --color-action-negative-secondary-hovered: hsla(6,91%,65%,.22);
    --color-action-negative-secondary-pressed: hsla(6,91%,65%,.11);
    --color-action-negative-default: #d6301a;
    --color-action-negative-hovered: #961200;
    --color-action-negative-pressed: #fa5a48;
    --color-action-positive-secondary-hovered: rgba(42,209,201,.36);
    --color-action-positive-secondary-pressed: rgba(42,209,201,.16);
    --color-action-positive-default: #11a6a1;
    --color-action-positive-hovered: #0e5452;
    --color-action-positive-pressed: #2ad1c9;
    --color-action-visited-default: #945082;
    --color-action-visited-hovered: #6e3961;
    --color-action-visited-pressed: #bf83af;
    --color-background-default: #f3f9fe;
    --color-blur-background-blur-color: rgba(33,51,65,.2);
    --color-border-interact-default: rgba(0,144,255,.18);
    --color-border-negative-default: hsla(6,91%,65%,.22);
    --color-border-positive-default: rgba(42,209,201,.36);
    --color-border-cards: rgba(8,76,128,.21);
    --color-focused-default: rgba(9,118,214,.76);
    --color-shadows-modal-shadow-color: rgba(29,95,145,.16);
    --color-special-message-text-attention: #965f00;
    --color-special-message-text-declined: #945082;
    --color-special-message-text-informative: rgba(18,74,130,.9);
    --color-special-message-text-negative: rgba(166,19,0,.85);
    --color-special-message-text-positive: #0c777d;
    --color-special-static-default-disabled: rgba(0,72,128,.37);
    --color-special-static-interact: #006ac7;
    --color-special-static-subdued: rgba(15,47,71,.66);
    --color-special-static-white: #fff;
    --color-surface-attention-default: #fbeed1;
    --color-surface-declined-default: #f7edf5;
    --color-surface-informative-default: #ddeffe;
    --color-surface-negative-default: #f3e9eb;
    --color-surface-positive-default: #d3f2f5;
    --color-surface-default: #fff;
    --color-surface-disabled: rgba(33,51,65,.2);
    --color-surface-enabled: rgba(29,95,145,.16);
    --color-surface-hovered: rgba(0,144,255,.09);
    --color-surface-pressed: rgba(0,144,255,.05);
    --color-surface-subdued: rgba(37,121,186,.1);
    --color-surface-subdued-light: rgba(33,51,65,.03);
    --color-text-on-actions: #fff;
    --color-text-body: rgba(9,17,24,.84);
    --color-text-body-disabled: rgba(33,51,65,.2);
    --color-text-default: rgba(13,14,15,.95);
    --color-text-default-disabled: rgba(33,51,65,.4);
    --color-text-interact: #006ac7;
    --color-text-negative: #c22813;
    --color-text-subdued: rgba(15,47,71,.66);
    --color-action-gradient-01-default: linear-gradient(263deg,#29cfc9,#016bc7);
    --color-action-gradient-01-hovered: linear-gradient(263deg,#26bab5,#0261b3);
    --color-action-gradient-01-pressed: linear-gradient(263deg,#54d9d4,#3589d2);
    --color-text-gradient-01: linear-gradient(263deg,#1691ea,#113c66);
    --color-action-gradient-02-temporary-default: linear-gradient(263deg,rgba(41,207,201,.3),rgba(1,107,199,.3));
    --color-action-gradient-02-temporary-hovered: linear-gradient(263deg,rgba(38,186,181,.3),rgba(2,97,179,.3));
    --color-action-gradient-02-temporary-pressed: linear-gradient(263deg,rgba(84,217,212,.3),rgba(53,137,210,.3));
    --color-text-gradient-02-temporary: linear-gradient(263deg,rgba(22,145,234,.3),rgba(17,60,102,.3))
}

:root [data-theme=dark][data-v-e6b1d19f] {
    --color-action-attention-secondary-hovered: rgba(255,171,0,.16);
    --color-action-attention-secondary-pressed: rgba(255,171,0,.08);
    --color-action-attention-default: #c28500;
    --color-action-attention-hovered: #a16600;
    --color-action-attention-pressed: #6a4300;
    --color-action-interact-secondary-default: rgba(20,141,234,.12);
    --color-action-interact-secondary-hovered: rgba(20,141,234,.24);
    --color-action-interact-secondary-pressed: rgba(20,141,234,.12);
    --color-action-interact-default: #0a59a8;
    --color-action-interact-hovered: #0976d6;
    --color-action-interact-pressed: #113c66;
    --color-action-negative-secondary-default: rgba(255,25,0,.2);
    --color-action-negative-secondary-hovered: rgba(235,42,21,.3);
    --color-action-negative-secondary-pressed: rgba(255,25,0,.2);
    --color-action-negative-default: #9c1c08;
    --color-action-negative-hovered: #cf3b27;
    --color-action-negative-pressed: #731300;
    --color-action-positive-secondary-hovered: rgba(42,209,201,.16);
    --color-action-positive-secondary-pressed: rgba(42,209,201,.08);
    --color-action-positive-default: #11a6a1;
    --color-action-positive-hovered: #0e8187;
    --color-action-positive-pressed: #064d51;
    --color-action-visited-default: #e868c6;
    --color-action-visited-hovered: #ffc1ef;
    --color-action-visited-pressed: #b54196;
    --color-background-default: #09141c;
    --color-blur-background-blur-color: rgba(33,51,65,.2);
    --color-border-interact-default: rgba(20,141,234,.24);
    --color-border-negative-default: rgba(235,42,21,.3);
    --color-border-positive-default: rgba(42,209,201,.16);
    --color-border-cards: rgba(181,223,255,.2);
    --color-focused-default: rgba(30,153,247,.74);
    --color-shadows-modal-shadow-color: rgba(178,222,255,.13);
    --color-special-message-text-attention: rgba(241,188,66,.86);
    --color-special-message-text-declined: #e868c6;
    --color-special-message-text-informative: #80c8ff;
    --color-special-message-text-negative: #ff9b94;
    --color-special-message-text-positive: rgba(108,224,221,.88);
    --color-special-static-default-disabled: rgba(33,51,65,.4);
    --color-special-static-interact: #006ac7;
    --color-special-static-subdued: rgba(15,47,71,.66);
    --color-special-static-white: #fff;
    --color-surface-attention-default: #252b26;
    --color-surface-declined-default: #261b31;
    --color-surface-informative-default: #132d40;
    --color-surface-negative-default: #381e1e;
    --color-surface-positive-default: #142e36;
    --color-surface-default: #131f29;
    --color-surface-disabled: rgba(223,228,232,.18);
    --color-surface-enabled: rgba(178,222,255,.13);
    --color-surface-hovered: rgba(20,141,234,.12);
    --color-surface-pressed: rgba(20,141,234,.06);
    --color-surface-subdued: rgba(87,176,255,.05);
    --color-surface-subdued-light: rgba(87,176,255,.05);
    --color-text-on-actions: #fff;
    --color-text-body: rgba(237,248,255,.94);
    --color-text-body-disabled: rgba(223,228,232,.18);
    --color-text-default: #edf4f7;
    --color-text-default-disabled: rgba(232,238,242,.28);
    --color-text-interact: #35a6fc;
    --color-text-negative: #ff6857;
    --color-text-subdued: rgba(204,233,255,.62);
    --color-action-gradient-01-default: linear-gradient(263deg,#15e8de,#158dea);
    --color-action-gradient-01-hovered: linear-gradient(263deg,#14d1c8,#1480d3);
    --color-action-gradient-01-pressed: linear-gradient(263deg,#45ede5,#45a5ee);
    --color-text-gradient-01: linear-gradient(263deg,#15e8de,#158dea);
    --color-action-gradient-02-temporary-default: linear-gradient(263deg,rgba(21,232,222,.3),rgba(21,141,234,.3));
    --color-action-gradient-02-temporary-hovered: linear-gradient(263deg,rgba(20,209,200,.3),rgba(20,128,211,.3));
    --color-action-gradient-02-temporary-pressed: linear-gradient(263deg,rgba(69,237,229,.3),rgba(69,165,238,.3));
    --color-text-gradient-02-temporary: linear-gradient(263deg,rgba(21,232,222,.3),rgba(21,141,234,.3))
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 700;
    src: url(./DKBEuclid-Bold-WebXL.COwwzvNX.woff2) format("woff2"),url(./DKBEuclid-Bold-WebXL.D8IyQEWQ.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: italic;
    font-weight: 700;
    src: url(./DKBEuclid-BoldItalic-WebXL.RlKz2tIB.woff2) format("woff2"),url(./DKBEuclid-BoldItalic-WebXL.DJKqFBqa.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 300;
    src: url(./DKBEuclid-Light-WebXL.pSdora9l.woff2) format("woff2"),url(./DKBEuclid-Light-WebXL.DW_0rb21.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: italic;
    font-weight: 300;
    src: url(./DKBEuclid-LightItalic-WebXL.CjGQdDXR.woff2) format("woff2"),url(./DKBEuclid-LightItalic-WebXL.C4FA4LA5.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 500;
    src: url(./DKBEuclid-Medium-WebXL.CFf-EpHt.woff2) format("woff2"),url(./DKBEuclid-Medium-WebXL.DFcfKTdz.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: italic;
    font-weight: 500;
    src: url(./DKBEuclid-MediumItalic-WebXL.O-2gbL2N.woff2) format("woff2"),url(./DKBEuclid-MediumItalic-WebXL.CxBSsYpJ.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 400;
    src: url(./DKBEuclid-Regular-WebXL.Cr8achUI.woff2) format("woff2"),url(./DKBEuclid-Regular-WebXL.CQj0p09Q.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: normal;
    font-weight: 600;
    src: url(./DKBEuclid-Semibold-WebXL.-wxowF2P.woff2) format("woff2"),url(./DKBEuclid-Semibold-WebXL.DWBeL81K.woff) format("woff")
}

@font-face {
    font-display: fallback;
    font-family: DKBEuclid;
    font-style: italic;
    font-weight: 600;
    src: url(./DKBEuclid-SemiboldItalic-WebXL.B056fZZr.woff2) format("woff2"),url(./DKBEuclid-SemiboldItalic-WebXL.DuHGDYot.woff) format("woff")
}

[data-v-e6b1d19f]:root {
    --border-radius-0: 0px;
    --border-radius-1: 2px;
    --border-radius-2: 4px;
    --border-radius-3: 6px;
    --border-radius-4: 8px;
    --border-radius-6: 12px;
    --border-radius-8: 16px;
    --border-radius-10: 20px;
    --border-radius-12: 24px;
    --border-radius-16: 32px;
    --border-radius-32: 64px;
    --border-radius-circle: 50%
}

.sui-border-radius-0[data-v-e6b1d19f] {
    border-radius: var(--border-radius-0)
}

.sui-border-radius-1[data-v-e6b1d19f] {
    border-radius: var(--border-radius-1)
}

.sui-border-radius-2[data-v-e6b1d19f] {
    border-radius: var(--border-radius-2)
}

.sui-border-radius-3[data-v-e6b1d19f] {
    border-radius: var(--border-radius-3)
}

.sui-border-radius-4[data-v-e6b1d19f] {
    border-radius: var(--border-radius-4)
}

.sui-border-radius-6[data-v-e6b1d19f] {
    border-radius: var(--border-radius-6)
}

.sui-border-radius-8[data-v-e6b1d19f] {
    border-radius: var(--border-radius-8)
}

.sui-border-radius-10[data-v-e6b1d19f] {
    border-radius: var(--border-radius-10)
}

.sui-border-radius-12[data-v-e6b1d19f] {
    border-radius: var(--border-radius-12)
}

.sui-border-radius-16[data-v-e6b1d19f] {
    border-radius: var(--border-radius-16)
}

.sui-border-radius-32[data-v-e6b1d19f] {
    border-radius: var(--border-radius-32)
}

.sui-border-radius-circle[data-v-e6b1d19f] {
    border-radius: var(--border-radius-circle)
}

[data-v-e6b1d19f]:root {
    --space-0: 0px;
    --space-0-5: 2px;
    --space-1: 4px;
    --space-2: 8px;
    --space-3: 12px;
    --space-4: 16px;
    --space-5: 20px;
    --space-6: 24px;
    --space-7: 28px;
    --space-8: 32px;
    --space-16: 64px
}

.sui-m-0[data-v-e6b1d19f] {
    margin: var(--space-0)
}

.sui-mt-0[data-v-e6b1d19f] {
    margin-top: var(--space-0)
}

.sui-mr-0[data-v-e6b1d19f] {
    margin-right: var(--space-0)
}

.sui-mb-0[data-v-e6b1d19f] {
    margin-bottom: var(--space-0)
}

.sui-ml-0[data-v-e6b1d19f] {
    margin-left: var(--space-0)
}

.sui-mi-0[data-v-e6b1d19f] {
    margin-inline:var(--space-0)}

.sui-mk-0[data-v-e6b1d19f] {
    margin-block: var(--space-0)
}

.sui-mis-0[data-v-e6b1d19f] {
    margin-inline-start:var(--space-0)}

.sui-mie-0[data-v-e6b1d19f] {
    margin-inline-end: var(--space-0)
}

.sui-mbs-0[data-v-e6b1d19f] {
    margin-block-start:var(--space-0)}

.sui-mbe-0[data-v-e6b1d19f] {
    margin-block-end: var(--space-0)
}

.sui-m-0-5[data-v-e6b1d19f] {
    margin: var(--space-0-5)
}

.sui-mt-0-5[data-v-e6b1d19f] {
    margin-top: var(--space-0-5)
}

.sui-mr-0-5[data-v-e6b1d19f] {
    margin-right: var(--space-0-5)
}

.sui-mb-0-5[data-v-e6b1d19f] {
    margin-bottom: var(--space-0-5)
}

.sui-ml-0-5[data-v-e6b1d19f] {
    margin-left: var(--space-0-5)
}

.sui-mi-0-5[data-v-e6b1d19f] {
    margin-inline:var(--space-0-5)}

.sui-mk-0-5[data-v-e6b1d19f] {
    margin-block: var(--space-0-5)
}

.sui-mis-0-5[data-v-e6b1d19f] {
    margin-inline-start:var(--space-0-5)}

.sui-mie-0-5[data-v-e6b1d19f] {
    margin-inline-end: var(--space-0-5)
}

.sui-mbs-0-5[data-v-e6b1d19f] {
    margin-block-start:var(--space-0-5)}

.sui-mbe-0-5[data-v-e6b1d19f] {
    margin-block-end: var(--space-0-5)
}

.sui-m-1[data-v-e6b1d19f] {
    margin: var(--space-1)
}

.sui-mt-1[data-v-e6b1d19f] {
    margin-top: var(--space-1)
}

.sui-mr-1[data-v-e6b1d19f] {
    margin-right: var(--space-1)
}

.sui-mb-1[data-v-e6b1d19f] {
    margin-bottom: var(--space-1)
}

.sui-ml-1[data-v-e6b1d19f] {
    margin-left: var(--space-1)
}

.sui-mi-1[data-v-e6b1d19f] {
    margin-inline:var(--space-1)}

.sui-mk-1[data-v-e6b1d19f] {
    margin-block: var(--space-1)
}

.sui-mis-1[data-v-e6b1d19f] {
    margin-inline-start:var(--space-1)}

.sui-mie-1[data-v-e6b1d19f] {
    margin-inline-end: var(--space-1)
}

.sui-mbs-1[data-v-e6b1d19f] {
    margin-block-start:var(--space-1)}

.sui-mbe-1[data-v-e6b1d19f] {
    margin-block-end: var(--space-1)
}

.sui-m-2[data-v-e6b1d19f] {
    margin: var(--space-2)
}

.sui-mt-2[data-v-e6b1d19f] {
    margin-top: var(--space-2)
}

.sui-mr-2[data-v-e6b1d19f] {
    margin-right: var(--space-2)
}

.sui-mb-2[data-v-e6b1d19f] {
    margin-bottom: var(--space-2)
}

.sui-ml-2[data-v-e6b1d19f] {
    margin-left: var(--space-2)
}

.sui-mi-2[data-v-e6b1d19f] {
    margin-inline:var(--space-2)}

.sui-mk-2[data-v-e6b1d19f] {
    margin-block: var(--space-2)
}

.sui-mis-2[data-v-e6b1d19f] {
    margin-inline-start:var(--space-2)}

.sui-mie-2[data-v-e6b1d19f] {
    margin-inline-end: var(--space-2)
}

.sui-mbs-2[data-v-e6b1d19f] {
    margin-block-start:var(--space-2)}

.sui-mbe-2[data-v-e6b1d19f] {
    margin-block-end: var(--space-2)
}

.sui-m-3[data-v-e6b1d19f] {
    margin: var(--space-3)
}

.sui-mt-3[data-v-e6b1d19f] {
    margin-top: var(--space-3)
}

.sui-mr-3[data-v-e6b1d19f] {
    margin-right: var(--space-3)
}

.sui-mb-3[data-v-e6b1d19f] {
    margin-bottom: var(--space-3)
}

.sui-ml-3[data-v-e6b1d19f] {
    margin-left: var(--space-3)
}

.sui-mi-3[data-v-e6b1d19f] {
    margin-inline:var(--space-3)}

.sui-mk-3[data-v-e6b1d19f] {
    margin-block: var(--space-3)
}

.sui-mis-3[data-v-e6b1d19f] {
    margin-inline-start:var(--space-3)}

.sui-mie-3[data-v-e6b1d19f] {
    margin-inline-end: var(--space-3)
}

.sui-mbs-3[data-v-e6b1d19f] {
    margin-block-start:var(--space-3)}

.sui-mbe-3[data-v-e6b1d19f] {
    margin-block-end: var(--space-3)
}

.sui-m-4[data-v-e6b1d19f] {
    margin: var(--space-4)
}

.sui-mt-4[data-v-e6b1d19f] {
    margin-top: var(--space-4)
}

.sui-mr-4[data-v-e6b1d19f] {
    margin-right: var(--space-4)
}

.sui-mb-4[data-v-e6b1d19f] {
    margin-bottom: var(--space-4)
}

.sui-ml-4[data-v-e6b1d19f] {
    margin-left: var(--space-4)
}

.sui-mi-4[data-v-e6b1d19f] {
    margin-inline:var(--space-4)}

.sui-mk-4[data-v-e6b1d19f] {
    margin-block: var(--space-4)
}

.sui-mis-4[data-v-e6b1d19f] {
    margin-inline-start:var(--space-4)}

.sui-mie-4[data-v-e6b1d19f] {
    margin-inline-end: var(--space-4)
}

.sui-mbs-4[data-v-e6b1d19f] {
    margin-block-start:var(--space-4)}

.sui-mbe-4[data-v-e6b1d19f] {
    margin-block-end: var(--space-4)
}

.sui-m-5[data-v-e6b1d19f] {
    margin: var(--space-5)
}

.sui-mt-5[data-v-e6b1d19f] {
    margin-top: var(--space-5)
}

.sui-mr-5[data-v-e6b1d19f] {
    margin-right: var(--space-5)
}

.sui-mb-5[data-v-e6b1d19f] {
    margin-bottom: var(--space-5)
}

.sui-ml-5[data-v-e6b1d19f] {
    margin-left: var(--space-5)
}

.sui-mi-5[data-v-e6b1d19f] {
    margin-inline:var(--space-5)}

.sui-mk-5[data-v-e6b1d19f] {
    margin-block: var(--space-5)
}

.sui-mis-5[data-v-e6b1d19f] {
    margin-inline-start:var(--space-5)}

.sui-mie-5[data-v-e6b1d19f] {
    margin-inline-end: var(--space-5)
}

.sui-mbs-5[data-v-e6b1d19f] {
    margin-block-start:var(--space-5)}

.sui-mbe-5[data-v-e6b1d19f] {
    margin-block-end: var(--space-5)
}

.sui-m-6[data-v-e6b1d19f] {
    margin: var(--space-6)
}

.sui-mt-6[data-v-e6b1d19f] {
    margin-top: var(--space-6)
}

.sui-mr-6[data-v-e6b1d19f] {
    margin-right: var(--space-6)
}

.sui-mb-6[data-v-e6b1d19f] {
    margin-bottom: var(--space-6)
}

.sui-ml-6[data-v-e6b1d19f] {
    margin-left: var(--space-6)
}

.sui-mi-6[data-v-e6b1d19f] {
    margin-inline:var(--space-6)}

.sui-mk-6[data-v-e6b1d19f] {
    margin-block: var(--space-6)
}

.sui-mis-6[data-v-e6b1d19f] {
    margin-inline-start:var(--space-6)}

.sui-mie-6[data-v-e6b1d19f] {
    margin-inline-end: var(--space-6)
}

.sui-mbs-6[data-v-e6b1d19f] {
    margin-block-start:var(--space-6)}

.sui-mbe-6[data-v-e6b1d19f] {
    margin-block-end: var(--space-6)
}

.sui-m-7[data-v-e6b1d19f] {
    margin: var(--space-7)
}

.sui-mt-7[data-v-e6b1d19f] {
    margin-top: var(--space-7)
}

.sui-mr-7[data-v-e6b1d19f] {
    margin-right: var(--space-7)
}

.sui-mb-7[data-v-e6b1d19f] {
    margin-bottom: var(--space-7)
}

.sui-ml-7[data-v-e6b1d19f] {
    margin-left: var(--space-7)
}

.sui-mi-7[data-v-e6b1d19f] {
    margin-inline:var(--space-7)}

.sui-mk-7[data-v-e6b1d19f] {
    margin-block: var(--space-7)
}

.sui-mis-7[data-v-e6b1d19f] {
    margin-inline-start:var(--space-7)}

.sui-mie-7[data-v-e6b1d19f] {
    margin-inline-end: var(--space-7)
}

.sui-mbs-7[data-v-e6b1d19f] {
    margin-block-start:var(--space-7)}

.sui-mbe-7[data-v-e6b1d19f] {
    margin-block-end: var(--space-7)
}

.sui-m-8[data-v-e6b1d19f] {
    margin: var(--space-8)
}

.sui-mt-8[data-v-e6b1d19f] {
    margin-top: var(--space-8)
}

.sui-mr-8[data-v-e6b1d19f] {
    margin-right: var(--space-8)
}

.sui-mb-8[data-v-e6b1d19f] {
    margin-bottom: var(--space-8)
}

.sui-ml-8[data-v-e6b1d19f] {
    margin-left: var(--space-8)
}

.sui-mi-8[data-v-e6b1d19f] {
    margin-inline:var(--space-8)}

.sui-mk-8[data-v-e6b1d19f] {
    margin-block: var(--space-8)
}

.sui-mis-8[data-v-e6b1d19f] {
    margin-inline-start:var(--space-8)}

.sui-mie-8[data-v-e6b1d19f] {
    margin-inline-end: var(--space-8)
}

.sui-mbs-8[data-v-e6b1d19f] {
    margin-block-start:var(--space-8)}

.sui-mbe-8[data-v-e6b1d19f] {
    margin-block-end: var(--space-8)
}

.sui-m-16[data-v-e6b1d19f] {
    margin: var(--space-16)
}

.sui-mt-16[data-v-e6b1d19f] {
    margin-top: var(--space-16)
}

.sui-mr-16[data-v-e6b1d19f] {
    margin-right: var(--space-16)
}

.sui-mb-16[data-v-e6b1d19f] {
    margin-bottom: var(--space-16)
}

.sui-ml-16[data-v-e6b1d19f] {
    margin-left: var(--space-16)
}

.sui-mi-16[data-v-e6b1d19f] {
    margin-inline:var(--space-16)}

.sui-mk-16[data-v-e6b1d19f] {
    margin-block: var(--space-16)
}

.sui-mis-16[data-v-e6b1d19f] {
    margin-inline-start:var(--space-16)}

.sui-mie-16[data-v-e6b1d19f] {
    margin-inline-end: var(--space-16)
}

.sui-mbs-16[data-v-e6b1d19f] {
    margin-block-start:var(--space-16)}

.sui-mbe-16[data-v-e6b1d19f] {
    margin-block-end: var(--space-16)
}

.sui-p-0[data-v-e6b1d19f] {
    padding: var(--space-0)
}

.sui-pt-0[data-v-e6b1d19f] {
    padding-top: var(--space-0)
}

.sui-pr-0[data-v-e6b1d19f] {
    padding-right: var(--space-0)
}

.sui-pb-0[data-v-e6b1d19f] {
    padding-bottom: var(--space-0)
}

.sui-pl-0[data-v-e6b1d19f] {
    padding-left: var(--space-0)
}

.sui-pi-0[data-v-e6b1d19f] {
    padding-inline:var(--space-0)}

.sui-pk-0[data-v-e6b1d19f] {
    padding-block: var(--space-0)
}

.sui-pis-0[data-v-e6b1d19f] {
    padding-inline-start:var(--space-0)}

.sui-pie-0[data-v-e6b1d19f] {
    padding-inline-end: var(--space-0)
}

.sui-pbs-0[data-v-e6b1d19f] {
    padding-block-start:var(--space-0)}

.sui-pbe-0[data-v-e6b1d19f] {
    padding-block-end: var(--space-0)
}

.sui-p-0-5[data-v-e6b1d19f] {
    padding: var(--space-0-5)
}

.sui-pt-0-5[data-v-e6b1d19f] {
    padding-top: var(--space-0-5)
}

.sui-pr-0-5[data-v-e6b1d19f] {
    padding-right: var(--space-0-5)
}

.sui-pb-0-5[data-v-e6b1d19f] {
    padding-bottom: var(--space-0-5)
}

.sui-pl-0-5[data-v-e6b1d19f] {
    padding-left: var(--space-0-5)
}

.sui-pi-0-5[data-v-e6b1d19f] {
    padding-inline:var(--space-0-5)}

.sui-pk-0-5[data-v-e6b1d19f] {
    padding-block: var(--space-0-5)
}

.sui-pis-0-5[data-v-e6b1d19f] {
    padding-inline-start:var(--space-0-5)}

.sui-pie-0-5[data-v-e6b1d19f] {
    padding-inline-end: var(--space-0-5)
}

.sui-pbs-0-5[data-v-e6b1d19f] {
    padding-block-start:var(--space-0-5)}

.sui-pbe-0-5[data-v-e6b1d19f] {
    padding-block-end: var(--space-0-5)
}

.sui-p-1[data-v-e6b1d19f] {
    padding: var(--space-1)
}

.sui-pt-1[data-v-e6b1d19f] {
    padding-top: var(--space-1)
}

.sui-pr-1[data-v-e6b1d19f] {
    padding-right: var(--space-1)
}

.sui-pb-1[data-v-e6b1d19f] {
    padding-bottom: var(--space-1)
}

.sui-pl-1[data-v-e6b1d19f] {
    padding-left: var(--space-1)
}

.sui-pi-1[data-v-e6b1d19f] {
    padding-inline:var(--space-1)}

.sui-pk-1[data-v-e6b1d19f] {
    padding-block: var(--space-1)
}

.sui-pis-1[data-v-e6b1d19f] {
    padding-inline-start:var(--space-1)}

.sui-pie-1[data-v-e6b1d19f] {
    padding-inline-end: var(--space-1)
}

.sui-pbs-1[data-v-e6b1d19f] {
    padding-block-start:var(--space-1)}

.sui-pbe-1[data-v-e6b1d19f] {
    padding-block-end: var(--space-1)
}

.sui-p-2[data-v-e6b1d19f] {
    padding: var(--space-2)
}

.sui-pt-2[data-v-e6b1d19f] {
    padding-top: var(--space-2)
}

.sui-pr-2[data-v-e6b1d19f] {
    padding-right: var(--space-2)
}

.sui-pb-2[data-v-e6b1d19f] {
    padding-bottom: var(--space-2)
}

.sui-pl-2[data-v-e6b1d19f] {
    padding-left: var(--space-2)
}

.sui-pi-2[data-v-e6b1d19f] {
    padding-inline:var(--space-2)}

.sui-pk-2[data-v-e6b1d19f] {
    padding-block: var(--space-2)
}

.sui-pis-2[data-v-e6b1d19f] {
    padding-inline-start:var(--space-2)}

.sui-pie-2[data-v-e6b1d19f] {
    padding-inline-end: var(--space-2)
}

.sui-pbs-2[data-v-e6b1d19f] {
    padding-block-start:var(--space-2)}

.sui-pbe-2[data-v-e6b1d19f] {
    padding-block-end: var(--space-2)
}

.sui-p-3[data-v-e6b1d19f] {
    padding: var(--space-3)
}

.sui-pt-3[data-v-e6b1d19f] {
    padding-top: var(--space-3)
}

.sui-pr-3[data-v-e6b1d19f] {
    padding-right: var(--space-3)
}

.sui-pb-3[data-v-e6b1d19f] {
    padding-bottom: var(--space-3)
}

.sui-pl-3[data-v-e6b1d19f] {
    padding-left: var(--space-3)
}

.sui-pi-3[data-v-e6b1d19f] {
    padding-inline:var(--space-3)}

.sui-pk-3[data-v-e6b1d19f] {
    padding-block: var(--space-3)
}

.sui-pis-3[data-v-e6b1d19f] {
    padding-inline-start:var(--space-3)}

.sui-pie-3[data-v-e6b1d19f] {
    padding-inline-end: var(--space-3)
}

.sui-pbs-3[data-v-e6b1d19f] {
    padding-block-start:var(--space-3)}

.sui-pbe-3[data-v-e6b1d19f] {
    padding-block-end: var(--space-3)
}

.sui-p-4[data-v-e6b1d19f] {
    padding: var(--space-4)
}

.sui-pt-4[data-v-e6b1d19f] {
    padding-top: var(--space-4)
}

.sui-pr-4[data-v-e6b1d19f] {
    padding-right: var(--space-4)
}

.sui-pb-4[data-v-e6b1d19f] {
    padding-bottom: var(--space-4)
}

.sui-pl-4[data-v-e6b1d19f] {
    padding-left: var(--space-4)
}

.sui-pi-4[data-v-e6b1d19f] {
    padding-inline:var(--space-4)}

.sui-pk-4[data-v-e6b1d19f] {
    padding-block: var(--space-4)
}

.sui-pis-4[data-v-e6b1d19f] {
    padding-inline-start:var(--space-4)}

.sui-pie-4[data-v-e6b1d19f] {
    padding-inline-end: var(--space-4)
}

.sui-pbs-4[data-v-e6b1d19f] {
    padding-block-start:var(--space-4)}

.sui-pbe-4[data-v-e6b1d19f] {
    padding-block-end: var(--space-4)
}

.sui-p-5[data-v-e6b1d19f] {
    padding: var(--space-5)
}

.sui-pt-5[data-v-e6b1d19f] {
    padding-top: var(--space-5)
}

.sui-pr-5[data-v-e6b1d19f] {
    padding-right: var(--space-5)
}

.sui-pb-5[data-v-e6b1d19f] {
    padding-bottom: var(--space-5)
}

.sui-pl-5[data-v-e6b1d19f] {
    padding-left: var(--space-5)
}

.sui-pi-5[data-v-e6b1d19f] {
    padding-inline:var(--space-5)}

.sui-pk-5[data-v-e6b1d19f] {
    padding-block: var(--space-5)
}

.sui-pis-5[data-v-e6b1d19f] {
    padding-inline-start:var(--space-5)}

.sui-pie-5[data-v-e6b1d19f] {
    padding-inline-end: var(--space-5)
}

.sui-pbs-5[data-v-e6b1d19f] {
    padding-block-start:var(--space-5)}

.sui-pbe-5[data-v-e6b1d19f] {
    padding-block-end: var(--space-5)
}

.sui-p-6[data-v-e6b1d19f] {
    padding: var(--space-6)
}

.sui-pt-6[data-v-e6b1d19f] {
    padding-top: var(--space-6)
}

.sui-pr-6[data-v-e6b1d19f] {
    padding-right: var(--space-6)
}

.sui-pb-6[data-v-e6b1d19f] {
    padding-bottom: var(--space-6)
}

.sui-pl-6[data-v-e6b1d19f] {
    padding-left: var(--space-6)
}

.sui-pi-6[data-v-e6b1d19f] {
    padding-inline:var(--space-6)}

.sui-pk-6[data-v-e6b1d19f] {
    padding-block: var(--space-6)
}

.sui-pis-6[data-v-e6b1d19f] {
    padding-inline-start:var(--space-6)}

.sui-pie-6[data-v-e6b1d19f] {
    padding-inline-end: var(--space-6)
}

.sui-pbs-6[data-v-e6b1d19f] {
    padding-block-start:var(--space-6)}

.sui-pbe-6[data-v-e6b1d19f] {
    padding-block-end: var(--space-6)
}

.sui-p-7[data-v-e6b1d19f] {
    padding: var(--space-7)
}

.sui-pt-7[data-v-e6b1d19f] {
    padding-top: var(--space-7)
}

.sui-pr-7[data-v-e6b1d19f] {
    padding-right: var(--space-7)
}

.sui-pb-7[data-v-e6b1d19f] {
    padding-bottom: var(--space-7)
}

.sui-pl-7[data-v-e6b1d19f] {
    padding-left: var(--space-7)
}

.sui-pi-7[data-v-e6b1d19f] {
    padding-inline:var(--space-7)}

.sui-pk-7[data-v-e6b1d19f] {
    padding-block: var(--space-7)
}

.sui-pis-7[data-v-e6b1d19f] {
    padding-inline-start:var(--space-7)}

.sui-pie-7[data-v-e6b1d19f] {
    padding-inline-end: var(--space-7)
}

.sui-pbs-7[data-v-e6b1d19f] {
    padding-block-start:var(--space-7)}

.sui-pbe-7[data-v-e6b1d19f] {
    padding-block-end: var(--space-7)
}

.sui-p-8[data-v-e6b1d19f] {
    padding: var(--space-8)
}

.sui-pt-8[data-v-e6b1d19f] {
    padding-top: var(--space-8)
}

.sui-pr-8[data-v-e6b1d19f] {
    padding-right: var(--space-8)
}

.sui-pb-8[data-v-e6b1d19f] {
    padding-bottom: var(--space-8)
}

.sui-pl-8[data-v-e6b1d19f] {
    padding-left: var(--space-8)
}

.sui-pi-8[data-v-e6b1d19f] {
    padding-inline:var(--space-8)}

.sui-pk-8[data-v-e6b1d19f] {
    padding-block: var(--space-8)
}

.sui-pis-8[data-v-e6b1d19f] {
    padding-inline-start:var(--space-8)}

.sui-pie-8[data-v-e6b1d19f] {
    padding-inline-end: var(--space-8)
}

.sui-pbs-8[data-v-e6b1d19f] {
    padding-block-start:var(--space-8)}

.sui-pbe-8[data-v-e6b1d19f] {
    padding-block-end: var(--space-8)
}

.sui-p-16[data-v-e6b1d19f] {
    padding: var(--space-16)
}

.sui-pt-16[data-v-e6b1d19f] {
    padding-top: var(--space-16)
}

.sui-pr-16[data-v-e6b1d19f] {
    padding-right: var(--space-16)
}

.sui-pb-16[data-v-e6b1d19f] {
    padding-bottom: var(--space-16)
}

.sui-pl-16[data-v-e6b1d19f] {
    padding-left: var(--space-16)
}

.sui-pi-16[data-v-e6b1d19f] {
    padding-inline:var(--space-16)}

.sui-pk-16[data-v-e6b1d19f] {
    padding-block: var(--space-16)
}

.sui-pis-16[data-v-e6b1d19f] {
    padding-inline-start:var(--space-16)}

.sui-pie-16[data-v-e6b1d19f] {
    padding-inline-end: var(--space-16)
}

.sui-pbs-16[data-v-e6b1d19f] {
    padding-block-start:var(--space-16)}

.sui-pbe-16[data-v-e6b1d19f] {
    padding-block-end: var(--space-16)
}

.bodyDefault[data-v-e6b1d19f] {
    font-size: 1.0625rem;
    letter-spacing: .0125rem;
    line-height: 1.625rem
}

.bodyDefault[data-v-e6b1d19f],.bodySmall[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-weight: 400;
    scroll-behavior: smooth
}

.bodySmall[data-v-e6b1d19f] {
    font-size: .9375rem;
    letter-spacing: 0;
    line-height: 1.4375rem
}

.buttonLarge[data-v-e6b1d19f] {
    font-size: 1.25rem;
    line-height: 1.5rem
}

.buttonLarge[data-v-e6b1d19f],.buttonMedium[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-weight: 500;
    letter-spacing: 0;
    scroll-behavior: smooth
}

.buttonMedium[data-v-e6b1d19f] {
    font-size: 1.0625rem;
    line-height: 1.375rem
}

.buttonSmall[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .8125rem;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 1.125rem;
    scroll-behavior: smooth
}

.captionProminent[data-v-e6b1d19f] {
    font-weight: 600
}

.captionDefault[data-v-e6b1d19f],.captionProminent[data-v-e6b1d19f],.sui-input label[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .75rem;
    letter-spacing: .025rem;
    line-height: .875rem;
    scroll-behavior: smooth
}

.captionDefault[data-v-e6b1d19f],.sui-input label[data-v-e6b1d19f] {
    font-weight: 400
}

.desktopBody[data-v-e6b1d19f] {
    font-family: SFProText,Arial,sans-serif;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.25rem
}

.desktopBody[data-v-e6b1d19f],.desktopDisplayLarge[data-v-e6b1d19f] {
    letter-spacing: 0;
    scroll-behavior: smooth
}

.desktopDisplayLarge[data-v-e6b1d19f] {
    font-family: SFProDiplay,Arial,sans-serif;
    font-size: 1.75rem;
    font-weight: 600;
    line-height: 2rem
}

.desktopSubheading[data-v-e6b1d19f] {
    font-family: SFProText,Arial,sans-serif;
    font-size: .75rem;
    line-height: 1rem
}

.desktopSubheading[data-v-e6b1d19f],.displayLargeProminent[data-v-e6b1d19f] {
    font-weight: 600;
    letter-spacing: 0;
    scroll-behavior: smooth
}

.displayLargeProminent[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: 2rem;
    line-height: 2.625rem
}

.displayMediumProminent[data-v-e6b1d19f] {
    font-size: 1.5rem;
    font-weight: 600;
    line-height: 1.875rem
}

.displayMediumProminent[data-v-e6b1d19f],.titleLargeDefault[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    letter-spacing: .0125rem;
    scroll-behavior: smooth
}

.titleLargeDefault[data-v-e6b1d19f] {
    font-size: 1.25rem;
    font-weight: 400;
    line-height: 1.75rem
}

.titleLargeDefaultMono[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    -ms-font-feature-settings: "tnum" 1;
    -o-font-feature-settings: "tnum" 1;
    font-feature-settings: "tnum" 1;
    font-size: 1.25rem;
    font-weight: 400;
    letter-spacing: 0;
    line-height: 1.625rem;
    scroll-behavior: smooth
}

.titleLargeProminent[data-v-e6b1d19f] {
    font-weight: 500
}

.titleLargeProminent[data-v-e6b1d19f],.titleLargeProminentBold[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: 1.25rem;
    letter-spacing: .0125rem;
    line-height: 1.75rem;
    scroll-behavior: smooth
}

.titleLargeProminentBold[data-v-e6b1d19f] {
    font-weight: 600
}

.sui-input input[data-v-e6b1d19f],.sui-input textarea[data-v-e6b1d19f],.sui-input:not(.sui-input--disabled).sui-input--empty:not(.sui-input--focus) .sui-input__content label[data-v-e6b1d19f],.titleMediumDefault[data-v-e6b1d19f],.titleMediumDefaultMono[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: 1.0625rem;
    font-weight: 400;
    letter-spacing: 0;
    line-height: 1.375rem;
    scroll-behavior: smooth
}

.titleMediumDefaultMono[data-v-e6b1d19f] {
    -ms-font-feature-settings: "tnum" 1;
    -o-font-feature-settings: "tnum" 1;
    font-feature-settings: "tnum" 1
}

.titleMediumProminent[data-v-e6b1d19f],.titleMediumProminentMono[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: 1.0625rem;
    font-weight: 500;
    letter-spacing: 0;
    line-height: 1.375rem;
    scroll-behavior: smooth
}

.titleMediumProminentMono[data-v-e6b1d19f] {
    -ms-font-feature-settings: "tnum" 1;
    -o-font-feature-settings: "tnum" 1;
    font-feature-settings: "tnum" 1
}

.titleSmallDefault[data-v-e6b1d19f],.titleSmallDefaultMono[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .9375rem;
    font-weight: 400;
    letter-spacing: 0;
    line-height: 1.25rem;
    scroll-behavior: smooth
}

.titleSmallDefaultMono[data-v-e6b1d19f] {
    -ms-font-feature-settings: "tnum" 1;
    -o-font-feature-settings: "tnum" 1;
    font-feature-settings: "tnum" 1
}

.titleSmallProminent[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .9375rem;
    font-weight: 600;
    letter-spacing: .00625rem;
    line-height: 1.25rem;
    scroll-behavior: smooth
}

.titleXSmallDefault[data-v-e6b1d19f] {
    font-weight: 400
}

.titleXSmallDefault[data-v-e6b1d19f],.titleXSmallProminent[data-v-e6b1d19f] {
    font-family: DKBEuclid,Arial,sans-serif;
    font-size: .8125rem;
    letter-spacing: 0;
    line-height: 1.125rem;
    scroll-behavior: smooth
}

.titleXSmallProminent[data-v-e6b1d19f] {
    font-weight: 600
}

*[data-v-e6b1d19f] {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

.sui-input[data-v-e6b1d19f] {
    border-radius: 6px;
    box-sizing: border-box;
    display: flex;
    height: 56px;
    justify-content: space-between;
    overflow: hidden;
    padding: 8px 8px 6px 16px;
    position: relative;
    transition: outline .2s;
    z-index: 0
}

.sui-input .sui-input__content[data-v-e6b1d19f] {
    display: flex;
    flex-direction: column;
    gap: 2px;
    height: 100%;
    width: 100%
}

.sui-input .sui-input__field[data-v-e6b1d19f] {
    align-items: center;
    display: flex;
    gap: 4px
}

.sui-input[data-v-e6b1d19f]:after {
    background-color: transparent;
    border: 2px solid transparent;
    border-radius: 6px;
    bottom: 0;
    content: "";
    left: 0;
    pointer-events: none;
    position: absolute;
    right: 0;
    top: 0;
    transition: border-color .1s
}

.sui-input textarea[data-v-e6b1d19f] {
    resize: none
}

.sui-input input[data-v-e6b1d19f],.sui-input textarea[data-v-e6b1d19f] {
    background-color: transparent;
    border: none;
    box-shadow: none;
    color: var(--color-text-default);
    outline: none;
    width: 100%;
    z-index: 1
}

.sui-input input[data-v-e6b1d19f]::-moz-placeholder,.sui-input textarea[data-v-e6b1d19f]::-moz-placeholder {
    color: var(--color-text-subdued)
}

.sui-input input[data-v-e6b1d19f]::placeholder,.sui-input textarea[data-v-e6b1d19f]::placeholder {
    color: var(--color-text-subdued)
}

.sui-input input[data-v-e6b1d19f]::-webkit-inner-spin-button,.sui-input input[data-v-e6b1d19f]::-webkit-outer-spin-button,.sui-input textarea[data-v-e6b1d19f]::-webkit-inner-spin-button,.sui-input textarea[data-v-e6b1d19f]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0
}

.sui-input input[data-v-e6b1d19f]:-webkit-autofill,.sui-input textarea[data-v-e6b1d19f]:-webkit-autofill {
    box-shadow: 0 0 0 20px var(--color-surface-default) inset;
    -webkit-box-shadow: 0 0 0 20px var(--color-surface-default) inset;
    -webkit-transition: all .2s;
    transition: all .2s
}

.sui-input input[data-v-e6b1d19f]:-webkit-autofill:hover,.sui-input textarea[data-v-e6b1d19f]:-webkit-autofill:hover {
    box-shadow: 0 0 0 20px var(--color-surface-pressed) inset;
    -webkit-box-shadow: 0 0 0 20px var(--color-surface-pressed) inset
}

.sui-input input[type=number][data-v-e6b1d19f],.sui-input textarea[type=number][data-v-e6b1d19f] {
    -moz-appearance: textfield;
    -webkit-appearance: textfield;
    appearance: textfield
}

.sui-input input[type=password][data-v-e6b1d19f]::-ms-reveal,.sui-input input[type=password][data-v-e6b1d19f]::-webkit-reveal,.sui-input textarea[type=password][data-v-e6b1d19f]::-ms-reveal,.sui-input textarea[type=password][data-v-e6b1d19f]::-webkit-reveal {
    display: none
}

.sui-input--card input[data-v-e6b1d19f]:-webkit-autofill {
    box-shadow: inset 0 0 0 20px #f0f8ff;
    -webkit-box-shadow: inset 0 0 0 20px #f0f8ff;
    -webkit-transition: all .2s;
    transition: all .2s
}

.sui-input--card input[data-v-e6b1d19f]:-webkit-autofill:hover {
    box-shadow: 0 0 0 20px var(--color-surface-pressed) inset;
    -webkit-box-shadow: 0 0 0 20px var(--color-surface-pressed) inset
}

.sui-input--auto-resize[data-v-e6b1d19f] {
    height: auto
}

.sui-input label[data-v-e6b1d19f] {
    color: var(--color-text-subdued);
    pointer-events: none;
    transition: all .2s
}

.sui-input label[data-v-e6b1d19f]:after {
    background-color: transparent;
    bottom: 0;
    content: "";
    left: 0;
    pointer-events: all;
    position: absolute;
    right: 0;
    top: 0;
    transition: background-color .1s
}

.sui-input .sui-input__indicator[data-v-e6b1d19f] {
    background-color: var(--color-text-subdued);
    bottom: 0;
    height: 2px;
    left: -2px;
    position: absolute;
    right: -2px;
    transition: background-color .2s
}

.sui-input.sui-input--focus[data-v-e6b1d19f]:after {
    border-color: var(--color-focused-default)
}

.sui-input.sui-input--focus .sui-input__indicator[data-v-e6b1d19f] {
    background-color: transparent
}

.sui-input.sui-input--error.sui-input--focus[data-v-e6b1d19f]:after {
    border-color: var(--color-action-negative-default)
}

.sui-input.sui-input--error:not(.sui-input--focus) .sui-input__indicator[data-v-e6b1d19f] {
    background-color: var(--color-action-negative-default)
}

.sui-input.sui-input--error:not(.sui-input--focus) label[data-v-e6b1d19f] {
    color: var(--color-action-negative-default)
}

.sui-input[data-v-e6b1d19f]:not(.sui-input--disabled),.sui-input:not(.sui-input--disabled) label[data-v-e6b1d19f] {
    cursor: text
}

.sui-input:not(.sui-input--disabled) .sui-input__content:hover label[data-v-e6b1d19f]:after,.sui-input:not(.sui-input--disabled) label[data-v-e6b1d19f]:hover:after {
    background-color: var(--color-surface-hovered)
}

.sui-input:not(.sui-input--disabled).sui-input--empty:not(.sui-input--focus) .sui-input__content[data-v-e6b1d19f] {
    justify-content: center
}

.sui-input:not(.sui-input--disabled).sui-input--empty:not(.sui-input--focus) .sui-input__content .sui-input__field[data-v-e6b1d19f] {
    height: 0;
    overflow: hidden
}

.sui-input:not(.sui-input--disabled).sui-input--empty:not(.sui-input--focus) .sui-input__content .sui-input__field--is-textarea[data-v-e6b1d19f] {
    height: auto!important
}

.sui-input.sui-input--disabled .sui-input__content input[data-v-e6b1d19f],.sui-input.sui-input--disabled .sui-input__content label[data-v-e6b1d19f] {
    color: var(--color-text-default-disabled)
}

.sui-input.sui-input--disabled .sui-input__indicator[data-v-e6b1d19f] {
    background-color: var(--color-text-default-disabled)
}

.sui-input .sui-accessory[data-v-e6b1d19f] {
    height: 32px;
    margin-right: 12px;
    margin-top: 4px;
    width: 32px
}

.sui-input.sui-input--background[data-v-e6b1d19f] {
    background-color: var(--color-surface-default)
}

.sui-input.sui-input--card[data-v-e6b1d19f] {
    background-color: var(--color-surface-pressed)
}
/* Container for the form group */
.form-group {
    margin-bottom: 20px;
}

/* Labels */
.form--label {
    font-weight: 600;
    margin-bottom: 8px;
    display: block;
    color: #333;
}

/* Select dropdown styling */
.form--control {
    width: 100%;
    padding: 10px 15px;
    border-radius: 5px;
    border: 1px solid #ced4da;
    background-color: #fff;
    font-size: 16px;
    color: #495057;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

/* Custom Input Group */
.custom-input-group {
    display: flex;
    align-items: center;
    gap: 8px; /* Space between the mobile code and input */
}

/* Input group text for mobile code */
.input-group-text {
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    padding: 10px 15px;
    border-radius: 5px;
    color: #495057;
    font-size: 16px;
}

/* Input field styling */
.form-control {
    flex: 1;
    padding: 10px 15px;
    border-radius: 5px;
    border: 1px solid #ced4da;
    font-size: 16px;
    color: #495057;
}

/* Error text styling */
.text--danger {
    color: #dc3545;
    margin-top: 8px;
    font-size: 14px;
}

/* Columns styling */
.col-sm-6, .col-xsm-6 {
    padding: 0 15px;
    margin-bottom: 20px;
}
.logo {
            color: #0073cf;
            font-weight: bold;
            font-size: 24px;
        }

 
    </style>
    <style>
      .default-layout{display:flex;height:100%}
    </style>
    <link rel="stylesheet" href="/girokonto-start/_nuxt/entry.BDW9J_dr.css">
    <link rel="modulepreload" as="script" crossorigin="" href="/girokonto-start/_nuxt/rdvyawdE.js">
    <link rel="modulepreload" as="script" crossorigin="" href="/girokonto-start/_nuxt/bc5fSLHx.js">
    <link rel="modulepreload" as="script" crossorigin="" href="/girokonto-start/_nuxt/DJ71s2uH.js">
    <link rel="prefetch" as="script" crossorigin="" href="/girokonto-start/_nuxt/B2wDtUFl.js">
    <link rel="prefetch" as="script" crossorigin="" href="/girokonto-start/_nuxt/D4DooJEk.js">
    <link rel="prefetch" as="script" crossorigin="" href="/girokonto-start/_nuxt/D_uXMC-j.js">
    <link rel="prefetch" as="script" crossorigin="" href="/girokonto-start/_nuxt/DY9tvSTe.js">
    <link rel="prefetch" as="script" crossorigin="" href="/girokonto-start/_nuxt/CfvQBV1z.js">
    <link rel="prefetch" as="script" crossorigin="" href="/girokonto-start/_nuxt/DHq1GBp4.js">
    <link rel="prefetch" as="script" crossorigin="" href="/girokonto-start/_nuxt/DHImPlW9.js">
    <link rel="prefetch" as="script" crossorigin="" href="/girokonto-start/_nuxt/C3iXwqu3.js">
    <link rel="prefetch" as="script" crossorigin="" href="/girokonto-start/_nuxt/CoC0O23e.js">
    <script type="module" src="/girokonto-start/_nuxt/rdvyawdE.js" crossorigin="">
    </script>
    <script id="unhead:payload" type="application/json">
      {
        "title": "Girokonto und Karte eröffnen - Capitalnexusuk"
      }
    </script>
    <link rel="modulepreload" as="script" crossorigin="" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/CtDUmREc.js">
    <link rel="modulepreload" as="script" crossorigin="" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/BN3hr8tm.js">
    <link rel="modulepreload" as="script" crossorigin="" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/Dg7hhELV.js">
    <link rel="stylesheet" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/TheFooter.BgCj7WVo.css">
    <link rel="modulepreload" as="script" crossorigin="" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/qQ7qM-lY.js">
    <link rel="modulepreload" as="script" crossorigin="" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/BeJ9mAlO.js">
    <link rel="stylesheet" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/radio-button.C0-doDyk.css">
    <link rel="modulepreload" as="script" crossorigin="" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/mH2y7X0X.js">
    <link rel="stylesheet" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/card.D1_mr6Ys.css">
    <link rel="stylesheet" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/BaseCardRadioButton.D7Fkeo3-.css">
    <link rel="modulepreload" as="script" crossorigin="" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/k4RTyEOx.js">
    <link rel="stylesheet" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/customerDataValidations.CJnKmIJP.css">
    <link rel="modulepreload" as="script" crossorigin="" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/Bq8SpZcq.js">
    <link rel="stylesheet" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/TheBottomButton.D2fHYLG8.css">
    <link rel="modulepreload" as="script" crossorigin="" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/C4oSTB-a.js">
    <link rel="stylesheet" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/BaseMainLayout.BUK8f_1J.css">
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.26tY-h6gH9w.L.W.O/am=QDA/d=0/rs=AN8SPfrycRFEIstD_ODMax_0dvnH_HM3_Q/m=el_main_css">
    <link rel="stylesheet" href="https://dein-antrag.dkb.de/girokonto-start/_nuxt/default.H3yz-qnK.css">
  </head>
  
  <body>
    @stack('script')
    @include('partials.plugins')
    @include('partials.notify')
    @include('partials.user_activity')
    <div  >
      <div class="app-base">
        <!--[-->
        <div class="default-layout">
         
            <div data-v-41d4391a="" class="base-main-layout__container">
              <dialog id="sui-modal-1724924583858" class="sui-modal" aria-labelledby="undefined__title"
              disable-escape-key="true"> 
              </dialog>
              <nav data-v-7648d337="" data-v-41d4391a="" data-testid="nav-bar" class="the-nav-bar__container">
                <div data-v-7648d337="" class="the-nav-bar">
                  <!---->
                  <a data-v-7648d337="" href="{{ route('home') }}"
                  rel="noopener noreferrer" class="the-nav-bar__logo">
                  <div class="logo">Capitalnexusuk</div>
                  </a>
                </div>
                <!---->
              </nav>
              <div data-v-41d4391a="" class="base-main-layout__main-container">
                <main data-v-41d4391a="" class="base-main-layout">
                  <div data-v-6bbd4fac="" data-v-41d4391a="" class="the-progress-and-step-indicator--mobile"
                  data-testid="the-progress-and-step-indicator--mobile">
                    <div data-v-192ad4c4="" data-v-6bbd4fac="" class="the-step-indicator"
                    data-testid="the-step-indicator">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                          Step 1 of 4 - Personal information
                        </font>
                      </font>
                    </div>
                    <div data-v-cfb5c258="" data-v-6bbd4fac="" class="sui-progress-bar" data-testid="the-progress-bar"
                    role="progressbar" aria-label="step-1" aria-valuemin="0" aria-valuemax="12"
                    aria-valuenow="1">
                      <p data-v-cfb5c258="" class="sui-progress-bar__step-label">
                      </p>
                      <div data-v-cfb5c258="" class="sui-progress-bar__container sui-progress-bar__container--full-version"
                      role="presentation">
                        <div data-v-cfb5c258="" class="sui-progress-bar__container__step-indicator sui-progress-bar__container__step-indicator--active"
                        style="width: 8%; min-width: 8%;">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div data-v-279693dc="" data-v-41d4391a="" class="sui-card sui-card--with-shadow the-side-bar the-side-bar"
                  data-testid="the-side-bar">
                    <div data-v-279693dc="" class="the-side-bar__title">
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                          Account opening
                        </font>
                      </font>
                    </div>
                    <ul data-v-279693dc="" class="the-side-bar__list" role="list">
                      <li data-v-125c4df1="" data-v-279693dc="" class="sui-list-item sui-list-item--active sui-list-item--overflow-wrap sui-list-item--title-condensed"
                      data-testid="sui-list-item" role="listitem" tabindex="-1">
                        <div data-v-125c4df1="" class="sui-list-item__active-indicator">
                        </div>
                        <div data-v-125c4df1="" class="sui-list-item__left-section">
                          <div data-v-125c4df1="" class="sui-list-item__left-section__accessory">
                            <div data-v-bfc13c5b="" data-v-279693dc="" class="sui-accessory sui-accessory--icon sui-accessory--large">
                              <div data-v-b2c1bcc9="" data-v-bfc13c5b="" class="sui-icon" alt="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20C13.279 20 14.4852 19.7006 15.555 19.169C15.803 19.0457 16.0911 19.0308 16.3505 19.1279C17.3029 19.4843 18.265 19.6966 19.072 19.8222C18.6157 18.7361 18.3497 17.2035 19.169 15.555C19.7006 14.4852 20 13.279 20 12C20 7.58172 16.4183 4 12 4ZM21 21C21 22 20.9998 22 20.9996 22L21 21ZM20.9996 22L20.9952 22L20.9868 22L20.9592 21.9997C20.9362 21.9994 20.9038 21.9989 20.8628 21.9979C20.7807 21.9958 20.6638 21.9918 20.5169 21.984C20.2236 21.9683 19.8092 21.9372 19.3137 21.8754C18.4265 21.7647 17.2587 21.5531 16.0524 21.1446C14.8126 21.6947 13.4408 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 13.5947 21.626 15.1049 20.96 16.445C20.4594 17.4524 20.6202 18.3779 20.9432 19.111C21.1062 19.4808 21.3057 19.7866 21.4653 19.9998C21.5444 20.1054 21.6116 20.1856 21.6563 20.2365C21.6786 20.2619 21.6951 20.2799 21.7045 20.2899L21.7128 20.2986C21.9946 20.5851 22.0778 21.0129 21.9232 21.3843C21.7681 21.7571 21.4035 22 20.9996 22ZM11 16.5C11 17.0523 11.4477 17.5 12 17.5C12.5523 17.5 13 17.0523 13 16.5C13 15.9477 12.5523 15.5 12 15.5C11.4477 15.5 11 15.9477 11 16.5ZM10.5 9.95463C10.5 9.08404 11.1885 8.40918 12 8.40918C12.8115 8.40918 13.5 9.08404 13.5 9.95463C13.5 10.8252 12.8115 11.5001 12 11.5001H11V13.4092C11 13.9615 11.4477 14.4092 12 14.4092C12.5523 14.4092 13 13.9615 13 13.4092V13.3538C14.4542 12.9162 15.5 11.549 15.5 9.95463C15.5 8.0136 13.9499 6.40918 12 6.40918C10.0501 6.40918 8.5 8.0136 8.5 9.95463C8.5 10.5069 8.94772 10.9546 9.5 10.9546C10.0523 10.9546 10.5 10.5069 10.5 9.95463Z"
                                  fill="#0D0E0F" fill-opacity="0.95">
                                  </path>
                                </svg>
                              </div>
                              <!---->
                              <!---->
                            </div>
                          </div>
                          <div data-v-34829de0="" data-v-279693dc="" class="sui-list-item__left-section__content">
                            <p data-v-34829de0="" class="sui-list-item__left-section__content__title">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                  Personal Information
                                </font>
                              </font>
                            </p>
                            <!---->
                            <!---->
                          </div>
                        </div>
                      </li>
                      <li data-v-279693dc="">
                        <div data-v-279693dc="" class="the-side-bar__list-item__progress">
                          <div data-v-cfb5c258="" data-v-279693dc="" class="sui-progress-bar" data-testid="the-progress-bar"
                          role="progressbar" aria-label="step-1" aria-valuemin="0" aria-valuemax="12"
                          aria-valuenow="1">
                            <p data-v-cfb5c258="" class="sui-progress-bar__step-label">
                            </p>
                            <div data-v-cfb5c258="" class="sui-progress-bar__container sui-progress-bar__container--full-version"
                            role="presentation">
                              <div data-v-cfb5c258="" class="sui-progress-bar__container__step-indicator sui-progress-bar__container__step-indicator--active"
                              style="width: 8%; min-width: 8%;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li data-v-125c4df1="" data-v-279693dc="" class="sui-list-item sui-list-item--subtle sui-list-item--overflow-wrap sui-list-item--title-condensed"
                      data-testid="sui-list-item" role="listitem" tabindex="-1">
                        <!---->
                        <div data-v-125c4df1="" class="sui-list-item__left-section">
                          <div data-v-125c4df1="" class="sui-list-item__left-section__accessory">
                            <div data-v-bfc13c5b="" data-v-279693dc="" class="sui-accessory sui-accessory--icon sui-accessory--large">
                              <div data-v-b2c1bcc9="" data-v-bfc13c5b="" class="sui-icon" alt="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9 7C9 5.34315 10.3431 4 12 4C13.6569 4 15 5.34315 15 7C15 8.65685 13.6569 10 12 10C10.3431 10 9 8.65685 9 7ZM12 2C9.23858 2 7 4.23858 7 7C7 8.84281 7.99694 10.4528 9.4809 11.32C5.17752 12.4367 2 16.3473 2 21C2 21.5523 2.44772 22 3 22C3.55228 22 4 21.5523 4 21C4 16.5817 7.58172 13 12 13C16.4183 13 20 16.5817 20 21C20 21.5523 20.4477 22 21 22C21.5523 22 22 21.5523 22 21C22 16.3473 18.8225 12.4367 14.5191 11.32C16.0031 10.4528 17 8.84281 17 7C17 4.23858 14.7614 2 12 2Z"
                                  fill="#0D0E0F" fill-opacity="0.95">
                                  </path>
                                </svg>
                              </div>
                              <!---->
                              <!---->
                            </div>
                          </div>
                          <div data-v-34829de0="" data-v-279693dc="" class="sui-list-item__left-section__content">
                            <p data-v-34829de0="" class="sui-list-item__left-section__content__title">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                  Create login
                                </font>
                              </font>
                            </p>
                            <!---->
                            <!---->
                          </div>
                        </div>
                      </li>
                      <li data-v-279693dc="">
                        <!---->
                      </li>
                   
                      
                      <li data-v-125c4df1="" data-v-279693dc="" class="sui-list-item sui-list-item--subtle sui-list-item--overflow-wrap sui-list-item--title-condensed"
                      data-testid="sui-list-item" role="listitem" tabindex="-1">
                        <!---->
                        <div data-v-125c4df1="" class="sui-list-item__left-section">
                          <div data-v-125c4df1="" class="sui-list-item__left-section__accessory">
                            <div data-v-bfc13c5b="" data-v-279693dc="" class="sui-accessory sui-accessory--icon sui-accessory--large">
                              <div data-v-b2c1bcc9="" data-v-bfc13c5b="" class="sui-icon" alt="">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" clip-rule="evenodd" d="M12.4856 2.12583C12.1836 1.95804 11.8164 1.95804 11.5144 2.12583L2.51443 7.12579C2.1161 7.34708 1.91775 7.80968 2.03205 8.25078C2.14635 8.69188 2.5444 8.99993 3.00007 8.99993H20.9999C21.4556 8.99993 21.8537 8.69188 21.968 8.25078C22.0823 7.80968 21.8839 7.34708 21.4856 7.12579L12.4856 2.12583ZM12 4.14393L17.1408 6.99995H6.85917L12 4.14393ZM7.00007 10.9999C7.00007 10.4476 6.55236 9.99992 6.00008 9.99992C5.4478 9.99992 5.00008 10.4476 5.00008 10.9999L5.00008 14.9999C5.00008 15.5522 5.4478 15.9999 6.00008 15.9999C6.55236 15.9999 7.00007 15.5522 7.00007 14.9999V10.9999ZM4.00009 17.9999C4.00009 17.4476 4.4478 16.9999 5.00008 16.9999H19C19.5523 16.9999 20 17.4476 20 17.9999C20 18.5521 19.5523 18.9999 19 18.9999H5.00008C4.4478 18.9999 4.00009 18.5521 4.00009 17.9999ZM2.00011 20.9998C2.00011 20.4476 2.44782 19.9998 3.0001 19.9998H21C21.5522 19.9998 22 20.4476 22 20.9998C22 21.5521 21.5522 21.9998 21 21.9998H3.0001C2.44782 21.9998 2.00011 21.5521 2.00011 20.9998ZM10 9.99992C10.5523 9.99992 11 10.4476 11 10.9999V14.9999C11 15.5522 10.5523 15.9999 10 15.9999C9.44776 15.9999 9.00005 15.5522 9.00005 14.9999V10.9999C9.00005 10.4476 9.44777 9.99992 10 9.99992ZM15 10.9999C15 10.4476 14.5523 9.99992 14 9.99992C13.4477 9.99992 13 10.4476 13 10.9999V14.9999C13 15.5522 13.4477 15.9999 14 15.9999C14.5523 15.9999 15 15.5522 15 14.9999V10.9999ZM18 9.99992C18.5523 9.99992 19 10.4476 19 10.9999V14.9999C19 15.5522 18.5523 15.9999 18 15.9999C17.4477 15.9999 17 15.5522 17 14.9999V10.9999C17 10.4476 17.4477 9.99992 18 9.99992Z"
                                  fill="#0D0E0F" fill-opacity="0.95">
                                  </path>
                                </svg>
                              </div>
                              <!---->
                              <!---->
                            </div>
                          </div>
                          <div data-v-34829de0="" data-v-279693dc="" class="sui-list-item__left-section__content">
                            <p data-v-34829de0="" class="sui-list-item__left-section__content__title">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                  Create account
                                </font>
                              </font>
                            </p>
                            <!---->
                            <!---->
                          </div>
                        </div>
                      </li>
                      <li data-v-279693dc="">
                        <!---->
                      </li>
                    </ul>
                    <div data-v-279693dc="" class="the-side-bar__image">
                      <div data-v-279693dc="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="295" height="224" fill="none"
                        alt="" aria-hidden="true">
                          <path fill="#D8ECFC" d="M147.603 23.883c74.592 0 135.061 58.123 135.061 129.822 0 15.513-2.831 30.389-8.022 44.179H20.562c-5.19-13.79-8.021-28.666-8.021-44.179 0-71.699 60.469-129.822 135.062-129.822">
                          </path>
                          <path fill="#2AD1C9" d="M120.048 98.824h8.601v14.824h-8.601z">
                          </path>
                          <path fill="#000" d="M218.476 63.485c11.564 2.948 10.718 14.207 6.205 19.032l11.757 10.955c1.43 1.53 2.299 3.55 2.299 5.765 0 4.775-4.043 8.647-9.03 8.647l-62.282.237c-4.987 0-9.03-3.872-9.03-8.647s4.043-8.647 9.031-8.647c-5.641-2.145-6.77-8.31-2.821-13.135l11.917-12.867c-2.971-2.155-4.888-5.556-4.888-9.382 0-6.514 5.556-11.795 12.41-11.795 5.984 0 10.979 4.025 12.15 9.382 11.564-4.289 22.282 5.361 22.282 10.455">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M184.044 44.471c-6.385 0-11.55 4.918-11.55 10.971 0 3.557 1.781 6.72 4.548 8.726l.74.537-12.516 13.514c-1.829 2.245-2.441 4.745-2.003 6.887.436 2.13 1.925 3.983 4.48 4.955l-.318 1.588c-4.512 0-8.17 3.503-8.17 7.824s3.657 7.823 8.168 7.824h.002l62.278-.237h.004c4.512 0 8.17-3.503 8.17-7.824 0-1.994-.778-3.813-2.061-5.195L223.49 82.555l.55-.588c2.08-2.224 3.346-5.992 2.719-9.533-.613-3.466-3.046-6.762-8.505-8.154l-.638-.163v-.633c0-1.026-.556-2.413-1.69-3.9-1.119-1.466-2.739-2.946-4.716-4.15-3.953-2.409-9.237-3.664-14.705-1.636l-.945.35-.208-.95c-1.089-4.979-5.735-8.727-11.308-8.727m-13.27 10.971c0-6.974 5.947-12.618 13.27-12.618 6.051 0 11.16 3.852 12.755 9.125 5.764-1.802 11.253-.392 15.334 2.095 2.148 1.308 3.93 2.927 5.182 4.569 1.068 1.4 1.798 2.88 1.978 4.237 5.701 1.647 8.46 5.338 9.162 9.309.66 3.73-.501 7.668-2.606 10.297l11.21 10.445.02.021c1.565 1.675 2.518 3.889 2.518 6.314 0 5.23-4.427 9.47-9.889 9.471h-.001l-62.278.237h-.004c-5.462 0-9.89-4.24-9.89-9.47 0-4.355 3.068-8.023 7.247-9.13-1.723-1.257-2.811-2.988-3.207-4.922-.548-2.678.246-5.664 2.353-8.239l.016-.02 11.34-12.243c-2.763-2.31-4.51-5.7-4.51-9.478"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#fff" d="m188.864 96.562 20.875-.617-.047 16.275c-.003.988.645 1.864 1.614 2.184l11.82 3.896s-20.478 6.064-27.799 5.638c-8.058-2.307-19.508-7.354-19.508-7.354l11.085-2.27c1.113-.228 1.912-1.174 1.916-2.269z">
                          </path>
                          <path fill="#fff" d="M219.129 81.673c9.942-38.757-47.566-33.52-37.601-2.186-2.374-.93-5.829.193-5.616 4.748.212 4.554 4.027 5.28 5.469 4.355 1.855 11.21 9.764 18.23 18.12 18.716 8.356.485 15.535-5.318 18.402-16.089 2.055.624 4.835-.278 5.548-3.742s-1.17-6.6-4.322-5.802">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M216.459 61.14c3.899 4.518 5.819 11.262 4.131 20.235-.084.449-.53.749-.996.67a.823.823 0 0 1-.691-.955c1.619-8.603-.254-14.824-3.766-18.893-3.522-4.08-8.783-6.104-14.153-6.136-5.372-.032-10.789 1.93-14.588 5.741-3.78 3.793-6.023 9.48-4.95 17.038.064.451-.265.869-.734.933s-.901-.25-.965-.7c-1.137-8.01 1.236-14.217 5.415-18.41 4.161-4.173 10.048-6.287 15.842-6.252 5.797.035 11.565 2.222 15.455 6.728m-35.09 26.866c.472-.046.89.284.935.737.722 7.258 3.841 11.83 7.361 14.632 3.543 2.822 7.532 3.88 9.989 4.023 2.439.142 6.044-.423 9.413-2.759 3.353-2.325 6.547-6.457 8.097-13.583.097-.446.551-.734 1.015-.644.463.091.76.527.663.974-1.624 7.467-5.024 11.987-8.777 14.589-3.736 2.592-7.747 3.231-10.524 3.07-2.783-.162-7.126-1.332-10.974-4.397-3.873-3.084-7.206-8.057-7.969-15.739-.046-.453.3-.858.771-.903"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M189.159 103.973a.883.883 0 0 1 1.205-.164c3.382 2.465 7.049 3.409 9.36 3.544 1.22.071 2.741-.034 4.381-.456.459-.117.928.146 1.048.588a.83.83 0 0 1-.615 1.015c-1.822.468-3.527.59-4.927.509-2.623-.153-6.618-1.2-10.288-3.874a.81.81 0 0 1-.164-1.162M174.588 83.908c-.158-3.916 3.133-6.184 5.985-5.854.47.055.802.465.743.917-.058.453-.487.775-.957.72-1.826-.21-4.175 1.269-4.059 4.144.072 1.794.771 3.019 1.641 3.663.853.633 1.957.778 3.081.279a.87.87 0 0 1 1.136.402.816.816 0 0 1-.425 1.095c-1.689.75-3.473.549-4.843-.467-1.354-1.004-2.215-2.731-2.302-4.899M219.151 81.162c.094-.446.547-.736 1.01-.647 2.54.487 4.838 2.953 4.222 6.41-.645 3.616-3.387 5.774-6.34 5.094a.82.82 0 0 1-.629-.993.864.864 0 0 1 1.035-.61c1.669.383 3.708-.744 4.246-3.761.452-2.538-1.2-4.2-2.877-4.523a.82.82 0 0 1-.667-.97"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M188.829 103.091c.475-.001.858.369.857.826l-.025 8.538c-.001.457-.387.829-.861.83-.475.001-.858-.369-.857-.826l.025-8.538c.001-.457.387-.828.861-.83m20.667 1.451c.474-.001.858.369.857.826l-.022 7.4c-.001.457-.387.829-.861.83-.475.001-.858-.369-.857-.826l.021-7.4c.002-.457.387-.828.862-.83M189.896 76.005c1.449-.356 3.244-.39 5.033.512a.887.887 0 0 0 1.167-.342.8.8 0 0 0-.353-1.11c-2.257-1.14-4.514-1.082-6.269-.65a10 10 0 0 0-2.233.838c-.57.3-1.569.987-1.834 1.288a.794.794 0 0 0 .104 1.157.89.89 0 0 0 1.214-.105c.061-.07.84-.64 1.341-.903a8.2 8.2 0 0 1 1.83-.685m20.171.228c1.498.267 2.906.97 3.827 2.192a.887.887 0 0 0 1.202.184.8.8 0 0 0 .2-1.146c-1.233-1.636-3.074-2.517-4.902-2.844-1.817-.325-3.705-.119-5.12.514-.431.194-.619.683-.418 1.093.2.41.713.586 1.144.393 1.045-.467 2.558-.656 4.067-.386m-18.779 6.776c.656 0 1.168.12 1.308.18.434.184.944-.002 1.14-.416a.8.8 0 0 0-.43-1.084c-.436-.186-1.21-.322-2.008-.322-.807 0-1.812.137-2.636.65a.8.8 0 0 0-.256 1.136.886.886 0 0 0 1.192.237c.425-.263 1.042-.381 1.69-.38m18.259.045c.656 0 1.168.12 1.308.18.434.184.945-.002 1.141-.417a.8.8 0 0 0-.431-1.084c-.436-.185-1.21-.321-2.008-.321-.807 0-1.811.137-2.636.65a.8.8 0 0 0-.255 1.136.886.886 0 0 0 1.192.237c.424-.264 1.042-.381 1.689-.381m.829 8.009c-.447-.155-.943.064-1.108.49a8.67 8.67 0 0 1-2.85 3.716c-1.46 1.078-3.489 1.798-6.237 1.388-.47-.07-.913.236-.989.684-.077.448.242.868.712.938 3.241.484 5.747-.372 7.566-1.714a10.33 10.33 0 0 0 3.415-4.45c.165-.426-.063-.897-.509-1.052"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#000" d="M201.308 80.153c.474-.017.873.338.891.792v.009l.001.03.007.121a28.528 28.528 0 0 0 .201 2.067c.175 1.3.483 2.882 1.005 4.15.63 1.528.535 2.92-.443 3.843-.918.865-2.356 1.051-3.775.825-.468-.074-.785-.498-.707-.947s.521-.752.989-.677c1.17.186 1.933-.042 2.286-.375.294-.277.544-.867.05-2.065-.601-1.458-.93-3.2-1.111-4.543a30 30 0 0 1-.179-1.691c-.017-.211-.027-.38-.034-.498l-.007-.137-.002-.036v-.015c-.018-.454.353-.837.828-.853">
                          </path>
                          <path fill="#fff" d="m122.187 185.13-8.589-50.071c-.157-.58-1.72-5.353-1.72-5.353l-7.154-16.649 3.282-10.527.355-1.19c.336-1.126.781-2.22 1.328-3.267l.468-.896.628-3.287c.287.152.673.448 1.029.887l.335-.501 1.627-4.795c.765.405 2.224 1.736 1.939 3.815-.047.338-.115.76-.199 1.235l.727.902c.476.702 1.349 2.455 1.04 3.845-.31 1.389-.842 5.775-1.069 7.794l6.06 8.634 2.504-2.882-2.504-4.118c-.346-1.281-.863-3.226.86-5.353l6.881 8.647-1.101 10.169c.078 2.153-.641 7.177-2.339 9.993q.053.395.027.771l10.883 37.117 7.075-9.873 18.061 9.471-13.615 14.647c-4.075 4.282-8.426 9.202-14.464 9.567-5.821.35-11.139-2.913-12.355-8.732">
                          </path>
                          <path fill="#148DEA" d="m234.698 178.441-2.911 20.908h-74.239l5.903-26.964-.4-.267-24.942-14.411 23.486-33.626c3.493-4.832 8.249-6.969 10.189-7.434l14.059-2.788c1.29 4.53 13.331 10.907 28.48 0l20.859 7.434c8.249 4.646 8.897 11.616 10.675 17.191l8.79 38.576h-20.379z">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M165.805 161.429c.465.092.764.527.669.973l-3.011 14c-.095.445-.55.732-1.015.64-.466-.091-.765-.527-.669-.972l3.01-14c.096-.446.55-.733 1.016-.641"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#000" d="M183.692 76.178c6.947 7.07 3.403 18.18-5.034 19.96-12.004-.445-15.122-12.898-7.898-17.793 5.78-3.916 9.028-10.587 8.287-13.306 0-9.518 11.67-12.51 16.672-9.518 12.225-4.351 20.283 4.079 22.228 10.606 10.281 2.175 9.447 14.14 6.947 16.86-.889-3.263-2.307-4.38-3.789-3.927-6.002-1.305-9.271-7.766-7.881-10.758-9.447 7.07-19.245 2.992-22.024 0-1.111 5.711-4.822 7.876-7.508 7.876">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M218.627 65.435c5.212 1.294 7.64 5.032 8.429 8.753.405 1.908.387 3.828.101 5.459-.28 1.6-.838 3.035-1.618 3.884l-1.069 1.162-.408-1.499c-.411-1.507-1.063-2.376-1.678-2.821-.607-.44-1.026-.792-1.478-.654l-.223.069-.229-.05a10.8 10.8 0 0 1-7.09-5.208c-.846-1.504-1.368-2.908-1.364-4.39-4.35 2.662-8.709 3.225-12.403 2.751-3.312-.425-6.113-1.687-7.895-3.027-1.207 4.086-3.836 6.258-6.351 6.917 5.923 7.484 2.207 18.322-6.508 20.16l-.108.023-.111-.004c-6.346-.235-10.441-3.672-11.937-7.78-1.484-4.073-.395-8.817 3.577-11.508 2.77-1.877 4.944-4.425 6.332-6.828.693-1.2 1.18-2.348 1.449-3.338.275-1.009.302-1.776.17-2.26l-.028-.102v-.106c0-5.143 3.178-8.528 6.96-10.198 3.561-1.571 7.827-1.695 10.657-.225 6.205-2.092 11.427-1.03 15.356 1.44 3.796 2.386 6.353 6.061 7.467 9.38m-8.411-8.003c-3.561-2.238-8.346-3.223-14.198-1.14l-.396.141-.359-.214c-2.184-1.307-6.03-1.368-9.396.117-3.278 1.447-5.921 4.286-5.959 8.606.201.856.096 1.898-.198 2.98-.312 1.147-.86 2.422-1.608 3.719-1.496 2.59-3.836 5.336-6.845 7.375-3.252 2.204-4.217 6.133-2.946 9.622 1.249 3.43 4.678 6.426 10.268 6.671 7.619-1.694 11.012-11.926 4.487-18.567l-1.363-1.388h1.989c2.188 0 5.611-1.798 6.663-7.203l.322-1.653 1.166 1.256c1.231 1.325 4.174 3.016 7.982 3.504 3.765.483 8.34-.216 12.869-3.605l1.316.983c-.544 1.17-.348 3.293.821 5.374 1.115 1.984 3.021 3.74 5.623 4.373.967-.215 2.035 0 2.968.677.622.45 1.174 1.095 1.617 1.938a10 10 0 0 0 .422-1.624 13 13 0 0 0-.09-4.858c-.715-3.37-2.882-6.585-7.609-7.586l-.501-.106-.141-.472c-.921-3.09-3.305-6.658-6.904-8.92"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#fff" d="M224.643 178.986v-1.927h21.834l-.86 11.018c-3.078 11.359-15.575 10.606-21.834 10.214l-41.882-4.796c-2.504 3.924-6.186 5.074-9.442 4.796H146.71l8.215-6.623a1 1 0 0 1 .156-.1l11.469-5.722a33.8 33.8 0 0 1 12.552-3.446z">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M5.66 198.667c0-.455.385-.823.86-.823h283.39c.474 0 .86.368.86.823s-.386.824-.86.824H6.52c-.475 0-.86-.369-.86-.824M126.687 131.799c.456-.128.934.123 1.067.559l10.663 34.951 2.417-3.471a.885.885 0 0 1 1.193-.228.8.8 0 0 1 .238 1.142l-3.031 4.353c-.567.815-1.87.624-2.157-.316l-10.974-35.969c-.133-.436.129-.894.584-1.021m-13.225.389c.469-.072.91.234.985.683l8.686 51.951c.229 1.09.612 2.078 1.118 2.958a.806.806 0 0 1-.338 1.119.88.88 0 0 1-1.169-.324 11.7 11.7 0 0 1-1.301-3.446l-.004-.016-8.691-51.982c-.075-.449.245-.871.714-.943m45.844 40.966a.8.8 0 0 1 .066 1.163l-9.413 10.041-.62.664c-1.569 1.68-3.229 3.458-5.021 5.003a.89.89 0 0 1-1.215-.061.8.8 0 0 1 .064-1.163c1.717-1.481 3.312-3.187 4.888-4.875l.624-.668 9.413-10.041a.89.89 0 0 1 1.214-.063"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#fff" d="M17.566 150.707h61.339c2.44 0 4.72 1.165 6.08 3.106l12.627 19.184 6.313 9.593 6.061 9.207c.157.24.432.385.727.385h30.87c1.696 0 3.438.118 4.904.937 1.273.71 2.488 2.059 2.803 2.882.445 1.162.489 2.471-1.501 2.471H43.68c-.434 0-1.64-2.034-2.08-2.735l-26.125-41.485c-.98-1.558.191-3.545 2.091-3.545">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M85.7 153.353c-1.52-2.169-4.069-3.47-6.795-3.47H17.566c-2.57 0-4.153 2.687-2.827 4.793l26.124 41.485.165.266c.23.371.565.912.897 1.393.211.307.44.618.657.859.107.119.232.246.37.35.101.077.366.266.728.266H147.79c.587 0 1.114-.096 1.549-.324.456-.239.76-.596.921-1.014.295-.766.073-1.628-.161-2.24-.213-.556-.679-1.191-1.214-1.754-.547-.576-1.235-1.15-1.964-1.556-1.68-.939-3.63-1.049-5.337-1.049h-30.528l-12.721-18.809-12.628-19.186zm23.306 38.005H54.684c-.475 0-.86.368-.86.823s.385.824.86.824h86.899c1.684 0 3.22.125 4.471.824.543.304 1.099.76 1.557 1.242.47.495.769.945.872 1.213.21.549.232.923.163 1.102-.021.054-.051.097-.134.14-.101.053-.316.122-.723.122H43.925l-.039-.042a7 7 0 0 1-.526-.693 33 33 0 0 1-.838-1.303l-.186-.299-26.124-41.485c-.635-1.009.124-2.296 1.354-2.296h61.339c2.149 0 4.159 1.024 5.36 2.731l12.625 19.183zm-64.989 6.378q.022.015-.005-.004zm32.168-43.924c0-.455-.385-.823-.86-.823H21.71c-1.675 0-2.706 1.752-1.839 3.125l23.074 36.494a.883.883 0 0 0 1.18.278.804.804 0 0 0 .291-1.131l-23.073-36.494c-.174-.275.032-.625.367-.625h53.615c.475 0 .86-.369.86-.824"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M54.428 165.329c.073 1.746.828 3.697 2.285 5.41 1.458 1.712 3.301 2.813 5.072 3.235s3.41.156 4.593-.766c1.183-.923 1.784-2.408 1.711-4.153-.073-1.746-.828-3.697-2.285-5.41s-3.301-2.814-5.072-3.235-3.41-.157-4.593.766-1.784 2.408-1.711 4.153m-1.719.066c-.09-2.135.647-4.172 2.343-5.496 1.696-1.323 3.93-1.603 6.095-1.087 2.165.515 4.32 1.83 5.99 3.793 1.67 1.962 2.58 4.249 2.67 6.383s-.646 4.173-2.342 5.497-3.93 1.602-6.095 1.087-4.32-1.831-5.99-3.793-2.581-4.249-2.67-6.384M88.312 183.194c.006.454-.374.828-.849.834l-33.112.412c-.475.006-.865-.358-.871-.813s.373-.828.849-.834l33.112-.412c.475-.006.865.358.87.813M84.872 179.077c.006.454-.374.828-.85.834l-33.111.411c-.475.006-.865-.358-.872-.812-.006-.455.374-.829.85-.834L84 178.264c.474-.006.865.358.87.813"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#000" d="M61.924 163.961c.65 1.198.417 2.547-.52 3.014-.939.467-2.226-.125-2.876-1.322s-.418-2.547.52-3.014 2.226.125 2.876 1.322">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M59.04 164.005c-.06.354.003.811.25 1.267.248.456.603.768.94.923s.602.136.777.049c.174-.088.343-.284.404-.637.06-.354-.002-.811-.25-1.267s-.602-.768-.94-.923c-.336-.155-.601-.136-.776-.049s-.343.284-.404.637m-1.696-.269c.127-.737.544-1.449 1.307-1.829s1.611-.298 2.315.026c.704.323 1.318.906 1.721 1.647.403.742.548 1.558.42 2.296-.127.737-.544 1.449-1.307 1.829s-1.61.298-2.315-.026c-.703-.323-1.318-.906-1.72-1.647-.403-.742-.549-1.558-.421-2.296"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#000" d="M57.78 172.086c0-2.883 3.44-7.412 10.32-.824.43 3.706-7.568 4.118-10.32.824">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M58.654 171.793c1.197 1.212 3.41 1.82 5.42 1.684 1.046-.07 1.918-.338 2.478-.726.44-.306.68-.672.703-1.131-3.23-3.005-5.374-3.2-6.571-2.735-1.2.467-1.923 1.759-2.03 2.908m1.382-4.434c2.214-.861 5.155-.047 8.673 3.321l.213.204.034.287c.146 1.266-.453 2.259-1.395 2.913-.905.628-2.124.953-3.367 1.036-2.451.166-5.47-.585-7.086-2.52l-.188-.225v-.289c0-1.669.98-3.895 3.116-4.727M98.757 192.406c-1.68-.939-3.63-1.049-5.338-1.049-.474 0-.86.369-.86.824s.386.823.86.823c1.685 0 3.22.126 4.471.825.545.304 1.1.76 1.558 1.242.47.494.769.945.871 1.213.211.549.233.923.163 1.102-.021.054-.05.097-.133.14-.101.053-.316.121-.723.121-.475 0-.86.369-.86.824s.385.823.86.823c.587 0 1.114-.095 1.549-.323.456-.239.76-.596.921-1.015.295-.765.073-1.627-.162-2.239-.212-.556-.678-1.191-1.213-1.754-.547-.576-1.235-1.15-1.964-1.556M114.391 90.894c.437.526.801 1.299.666 2.28-.279 2.039-1.376 7.153-1.894 9.481-.099.444.197.882.661.977.465.095.922-.189 1.021-.634.514-2.305 1.628-7.492 1.918-9.61.347-2.532-1.426-4.14-2.375-4.643l-.912-.484-1.95 5.746c-.147.432.101.897.552 1.037.452.141.937-.096 1.084-.528z"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M110.226 93.471a.88.88 0 0 1 1.169-.32c1.012.537 2.709 2.245 2.393 5.055l-.002.022-1.121 6.525c-.077.449-.519.753-.988.679s-.786-.498-.709-.946l1.112-6.479c.218-2.023-1.001-3.141-1.519-3.416a.805.805 0 0 1-.335-1.12m5.746 1.254a.884.884 0 0 1 1.19.244c.275.406.645 1.083.909 1.856.26.76.45 1.708.25 2.608-.286 1.28-.782 5.304-1.025 7.435l4.671 7.437 1.415-1.581-.206-.356c-1.081-1.863-2.324-4.113-2.071-6.559.114-1.102.482-2.3 1.35-3.371l.69-.851 7.286 9.259c.251.32.373.716.341 1.115l-.8 10.209c.036 1.16-.135 2.996-.52 4.888-.39 1.911-1.017 3.975-1.936 5.499a.88.88 0 0 1-1.175.301.804.804 0 0 1-.314-1.125c.779-1.292 1.361-3.148 1.736-4.99.374-1.837.524-3.566.488-4.562l-.001-.045.807-10.299-5.838-7.419a5.1 5.1 0 0 0-.403 1.554c-.192 1.861.749 3.676 1.863 5.596l.207.356c.349.602.27 1.349-.198 1.872l-1.958 2.187c-.496.555-1.414.481-1.807-.145l-5.399-8.596.031-.275c.225-1.998.762-6.436 1.083-7.877.109-.49.017-1.113-.202-1.753a6.6 6.6 0 0 0-.718-1.473.804.804 0 0 1 .254-1.139m-8.177 7.832c.459.116.734.566.613 1.006l-2.582 9.417 8.566 19.705a.81.81 0 0 1-.464 1.077c-.438.174-.942-.024-1.124-.444l-8.789-20.218 2.73-9.955c.12-.44.59-.703 1.05-.588M119.128 121.47c1.193 1.755 1.887 3.637 1.1 5.249-.202.412-.714.589-1.144.397a.81.81 0 0 1-.415-1.095c.38-.777.157-1.975-.983-3.653-1.105-1.626-2.914-3.463-5.139-5.344a.8.8 0 0 1-.076-1.163.887.887 0 0 1 1.214-.072c2.274 1.922 4.215 3.873 5.443 5.681"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#2AD1C9" d="M111.396 85.334c-1.219-.003-2.214.937-2.223 2.1l-.179 23.869c-.008 1.163.973 2.107 2.192 2.11l11.442.235v-.824l-1.025-2.246c-.624-1.367-1.107-2.82-1.011-4.309.156-2.431 1.125-4.101 2.466-5.386l5.591 7.633.158-21.037c.008-1.162-.973-2.106-2.192-2.11z">
                          </path>
                          <path fill="#2AD1C9" fill-rule="evenodd" d="M110.893 87.445c.002-.249.22-.465.499-.464l15.219.036c.273 0 .477.208.476.45l1.72.012c.008-1.162-.973-2.106-2.192-2.11l-15.219-.035c-1.219-.003-2.214.937-2.223 2.1l-.179 23.869c-.008 1.163.973 2.107 2.192 2.11l11.442.235v-.824l-1.025-2.246c-.624-1.367-1.107-2.82-1.011-4.309.108-1.674.6-2.987 1.335-4.062a8.4 8.4 0 0 1 1.131-1.324l5.591 7.633.158-21.037-1.72-.011-.119 15.884-3.677-5.02-1.449 1.387c-1.616 1.547-2.783 3.587-2.967 6.449-.122 1.882.493 3.625 1.152 5.07l.327.716-9.147-.188h-.017c-.273-.001-.477-.208-.475-.451z"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#fff" d="m118.078 94.004-3.02.05c-.417.007-.76-.31-.765-.707l-.052-3.96c-.005-.398.328-.726.745-.733l3.021-.05c.417-.007.759.31.764.708l.052 3.96c.006.397-.328.725-.745.732">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M220.675 88.117c.475 0 .86.369.86.824v2.882c0 .455-.385.824-.86.824s-.86-.37-.86-.824v-2.882c0-.455.385-.824.86-.824"
                          clip-rule="evenodd">
                          </path>
                          <path fill="#fff" d="M222.395 93.06c0 .909-.77 1.646-1.72 1.646s-1.72-.737-1.72-1.647.77-1.647 1.72-1.647 1.72.737 1.72 1.647">
                          </path>
                          <path fill="#000" fill-rule="evenodd" d="M223.255 163.883c.475 0 .86.369.86.823v11.942c0 .454-.385.823-.86.823s-.86-.369-.86-.823v-11.942c0-.454.385-.823.86-.823M246.138 177.888c.473.048.814.454.764.906l-.631 5.634c-.431 3.852-.983 8.416-4.261 11.351a.89.89 0 0 1-1.216-.04.8.8 0 0 1 .041-1.164c2.733-2.446 3.28-6.339 3.726-10.322l.63-5.634c.051-.453.475-.78.947-.731"
                          clip-rule="evenodd">
                          </path>
                        </svg>
                      </div>
                    </div>
                  </div>


                  <div data-v-41d4391a="" class="base-main-layout__wrapper-component" data-testid="base-main-layout" id="div1">
                    <div data-v-41d4391a="" class="base-main-layout__main-content" >
                      <h1 data-v-41d4391a="">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">
                            Which checking account would you like to open?
                          </font>
                        </font>
                      </h1>
                      <!---->
                      <div  data-v-79f0c587="" class="base-input-group" role="group">
                        <div data-v-5a8126bd="" class="sui-card sui-card--with-shadow">
                          <div data-v-125c4df1="" data-v-5a8126bd="" class="sui-list-item sui-list-item--default sui-list-item--overflow-wrap sui-list-item--with-subtitle"
                          data-testid="base-card-radio-button-singleFlow">
                            <!---->
                            <div data-v-125c4df1="" class="sui-list-item__left-section">
                              <div data-v-125c4df1="" class="sui-list-item__left-section__accessory">
                                <div data-v-b6f21d74="" data-v-5a8126bd="" data-testid="sui-radio-button-singleFlow"
                                class="sui-radio-button">
                                  <input data-v-b6f21d74="" name="flowSelection" aria-describedby="singleFlow.description"
                                  autocomplete="off" aria-label="Individual account" id="singleFlow" type="radio"
                                  value="singleFlow">
                                  <!---->
                                </div>
                              </div>
                              <div data-v-34829de0="" data-v-5a8126bd="" class="sui-list-item__left-section__content">
                                <p data-v-34829de0="" class="sui-list-item__left-section__content__title">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      Individual account
                                    </font>
                                  </font>
                                </p>
                                <div data-v-34829de0="" class="sui-list-item__left-section__content__subtitle">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      An account just for you
                                    </font>
                                  </font>
                                </div>
                                <!---->
                              </div>
                            </div>
                            <div data-v-5a8126bd="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="64" fill="none"
                              alt="" aria-hidden="true">
                                <path stroke="#000" stroke-linecap="round" stroke-width="2.126" d="M18.522 29.942v5.044M41.522 20v5.045M16 32.464h5.045M39 22.522h5.045">
                                </path>
                                <circle cx="25.623" cy="15.121" r="1.121" fill="#000">
                                </circle>
                                <circle cx="46.879" cy="37.44" r="1.121" fill="#000">
                                </circle>
                                <path fill="#148DEA" stroke="#148DEA" stroke-linecap="round" stroke-width="2.126"
                                d="M32.473 35.787a3.72 3.72 0 1 0 0-7.44 3.72 3.72 0 0 0 0 7.44ZM32.473 38.444c-4.797 0-8.625 3.54-9.003 8.22-.036.448.276.84.712.946l.217.052a34.65 34.65 0 0 0 16.385-.008c.424-.104.728-.485.694-.92-.369-4.696-4.2-8.29-9.005-8.29Z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div data-v-5a8126bd="" class="sui-card sui-card--with-shadow">
                          <div data-v-125c4df1="" data-v-5a8126bd="" class="sui-list-item sui-list-item--default sui-list-item--overflow-wrap sui-list-item--with-subtitle"
                          data-testid="base-card-radio-button-jointFlow">
                            <!---->
                            <div data-v-125c4df1="" class="sui-list-item__left-section">
                              <div data-v-125c4df1="" class="sui-list-item__left-section__accessory">
                                <div data-v-b6f21d74="" data-v-5a8126bd="" data-testid="sui-radio-button-jointFlow"
                                class="sui-radio-button">
                                  <input data-v-b6f21d74="" name="flowSelection" aria-describedby="jointFlow.description"
                                  autocomplete="off" aria-label="Joint account" id="jointFlow" type="radio"
                                  value="jointFlow">
                                  <!---->
                                </div>
                              </div>
                              <div data-v-34829de0="" data-v-5a8126bd="" class="sui-list-item__left-section__content">
                                <p data-v-34829de0="" class="sui-list-item__left-section__content__title">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      Joint account
                                    </font>
                                  </font>
                                </p>
                                <div data-v-34829de0="" class="sui-list-item__left-section__content__subtitle">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      One account for two
                                    </font>
                                  </font>
                                </div>
                                <!---->
                              </div>
                            </div>
                            <div data-v-5a8126bd="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="64" fill="none"
                              alt="" aria-hidden="true">
                                <path fill="#148DEA" stroke="#148DEA" stroke-linecap="round" stroke-width="2"
                                d="M24.712 35.904a4.068 4.068 0 1 0 0-8.137 4.068 4.068 0 0 0 0 8.137ZM41.589 35.904a4.068 4.068 0 1 0 0-8.137 4.068 4.068 0 0 0 0 8.137ZM16.5 48.082c-.786-.293-1.287-.606-1.185-1.325A9.5 9.5 0 0 1 20 39.868a9.45 9.45 0 0 1 4.713-1.25 9.49 9.49 0 0 1 8.438 5.14 9.49 9.49 0 0 1 8.438-5.14c4.784 0 8.742 3.538 9.398 8.14.106.742-.432 1.051-1.26 1.353a116.1 116.1 0 0 1-33.072.011.8.8 0 0 1-.155-.04Z">
                                </path>
                                <path stroke="#000" stroke-linecap="round" stroke-width="2" d="M13.373 26.712v4.747M42.908 13v4.747M11 29.086h4.747M40.534 15.373h4.747">
                                </path>
                                <circle cx="26.822" cy="14.055" r="1.055" fill="#000">
                                </circle>
                                <circle cx="51.082" cy="34.096" r="1.055" fill="#000">
                                </circle>
                                <path stroke="#000" stroke-linecap="round" stroke-width="2" d="M32 46.504c.412-4.117 2.858-6.878 6.5-8.004">
                                </path>
                                <path stroke="#000" stroke-linecap="round" stroke-width="2" d="M29.247 38.92c1.69.481 3.135 1.305 4.253 2.445">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div data-v-5a8126bd="" class="sui-card sui-card--with-shadow">
                          <div data-v-125c4df1="" data-v-5a8126bd="" class="sui-list-item sui-list-item--default sui-list-item--overflow-wrap sui-list-item--with-subtitle"
                          data-testid="base-card-radio-button-continueFlow">
                            <!---->
                            <div data-v-125c4df1="" class="sui-list-item__left-section">
                              <div data-v-125c4df1="" class="sui-list-item__left-section__accessory">
                                <div data-v-b6f21d74="" data-v-5a8126bd="" data-testid="sui-radio-button-continueFlow"
                                class="sui-radio-button">
                                  <input data-v-b6f21d74="" name="flowSelection" aria-describedby="continueFlow.description"
                                  autocomplete="off" aria-label="Continue account opening" id="continueFlow"
                                  type="radio" value="continueFlow">
                                  <!---->
                                </div>
                              </div>
                              <div data-v-34829de0="" data-v-5a8126bd="" class="sui-list-item__left-section__content">
                                <p data-v-34829de0="" class="sui-list-item__left-section__content__title">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      Continue account opening
                                    </font>
                                  </font>
                                </p>
                                <div data-v-34829de0="" class="sui-list-item__left-section__content__subtitle">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      I have already started opening an account and would now like to continue.
                                    </font>
                                  </font>
                                </div>
                                <!---->
                              </div>
                            </div>
                            <div data-v-5a8126bd="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="64" fill="none"
                              alt="" aria-hidden="true">
                                <path stroke="#000" stroke-width="2" d="M54 18.563v30.11c0 1.037-.84 1.878-1.877 1.878h-23.47a1.88 1.88 0 0 1-1.877-1.878V14.877c0-1.036.84-1.877 1.877-1.877h20.583M54 18.563h-2.887a1.88 1.88 0 0 1-1.877-1.877V13M54 18.563 49.236 13">
                                </path>
                                <path stroke="#000" stroke-linecap="round" stroke-width="2" d="M49 39.286H30.225M41 43.04H30.674M14 14.878h8.918M18 34.592h4.224M8 19.571h11.735">
                                </path>
                                <path fill="#148DEA" stroke="#148DEA" stroke-linecap="round" stroke-width="1.6"
                                d="M40 26a2 2 0 1 1 0-4 2 2 0 0 1 0 4Z">
                                </path>
                                <path fill="#148DEA" stroke="#148DEA" stroke-linecap="round" stroke-width="1.893"
                                d="M40 28c2.454 0 4.578 1.644 4.944 3.787.065.379-.213.713-.59.793a21.1 21.1 0 0 1-8.708 0c-.377-.08-.655-.414-.59-.793C35.422 29.644 37.546 28 40 28Z">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    
                    <div data-v-41d4391a="" class="base-main-layout__bottom">
                      <button type="button" data-v-d4a1383c="" data-v-4840d15a="" class="buttons  "
                      id="next-btn1">
                        <div data-v-d4a1383c="" class="sui-button__inner">
                          <!---->
                          <!---->
                          <span data-v-d4a1383c="" class="sui-button__inner__text">
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">
                                Further
                              </font>
                            </font>
                          </span>
                          <!---->
                        </div>
                      </button>
                    </div>
                  </div>



                
                  <div data-v-41d4391a="" class="base-main-layout__wrapper-component hidden" data-testid="base-main-layout" id="div2"  >
                    <div data-v-41d4391a="" class="base-main-layout__main-content">
                      <h1 data-v-41d4391a="">
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">
                            Are you new to Capitalnexusuk?
                          </font>
                        </font>
                      </h1>
                      <!---->
                      <div data-v-79f0c587="" class="base-input-group" role="group">
                        <div data-v-5a8126bd="" class="sui-card sui-card--with-shadow">
                          <div data-v-125c4df1="" data-v-5a8126bd="" class="sui-list-item sui-list-item--default sui-list-item--overflow-wrap sui-list-item--with-subtitle"
                          data-testid="base-card-radio-button-newCustomer">
                            <!---->
                            <div data-v-125c4df1="" class="sui-list-item__left-section">
                              <div data-v-125c4df1="" class="sui-list-item__left-section__accessory">
                                <div data-v-b6f21d74="" data-v-5a8126bd="" data-testid="sui-radio-button-newCustomer"
                                class="sui-radio-button">
                                  <input data-v-b6f21d74="" name="customerType" aria-describedby="newCustomer.description"
                                  autocomplete="off" aria-label="Yes, I am new" id="newCustomer" type="radio"
                                  value="newCustomer">
                                  <!---->
                                </div>
                              </div>
                              <div data-v-34829de0="" data-v-5a8126bd="" class="sui-list-item__left-section__content">
                                <p data-v-34829de0="" class="sui-list-item__left-section__content__title">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      Yes, I am new
                                    </font>
                                  </font>
                                </p>
                                <div data-v-34829de0="" class="sui-list-item__left-section__content__subtitle">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      I do not yet have an account, securities account or other product with
                                      Capitalnexusuk.
                                    </font>
                                  </font>
                                </div>
                                <!---->
                              </div>
                            </div>
                            <div data-v-5a8126bd="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="64" fill="none"
                              alt="" aria-hidden="true">
                                <path fill="#148DEA" stroke="#148DEA" stroke-linecap="round" stroke-width="1.952"
                                d="M24.872 34.85V23.01c.03-.32.155-.491.277-.59a.86.86 0 0 1 .582-.172c.232.011.44.1.58.234.126.121.242.319.242.658v11.71l1.92.249 2.584-9.805c.086-.234.21-.325.315-.368a.77.77 0 0 1 .53.007.9.9 0 0 1 .478.37c.091.148.15.358.081.66l-2.419 9.495 1.801.71 3.588-6.537c.167-.178.44-.223.713-.066a.55.55 0 0 1 .253.287c.031.09.053.253-.068.515l-.026.055-.018.059-4.324 13.575-.013.04-.01.04c-.107.473-.355 1.023-.674 1.542s-.67.942-.93 1.175l-.322.29v4.381h-9.118v-4.486l-.459-.287c-.553-.346-1.103-1.038-1.579-1.877a11.6 11.6 0 0 1-.945-2.163l-.013-.044-.017-.042-3.672-8.928c.22-.083.4-.083.537-.06.265.043.49.19.61.306l2.958 4.229.8-.56-.8.56c.905 1.294 2.936.435 2.637-1.116l-2.323-12.064-.003-.02-.005-.019c-.125-.532.145-.893.571-1.036a.9.9 0 0 1 .608-.002c.143.055.293.166.406.397l2.746 10.78z">
                                </path>
                                <path stroke="#000" stroke-linecap="round" stroke-width="1.952" d="M34.193 46.91v4.614h10.38V46.91c1.427-.89 2.433-3.235 2.757-4.296l3.73-9.069c-1.297-1.145-2.486-.477-2.919 0l-2.886 4.204c-.493.718-1.613.212-1.4-.633l2.826-11.207c.487-2.069-2.432-3.023-3.243-1.114l-2.595 10.182V23.84c-.162-2.227-3.406-2.068-3.406.16v3.127">
                                </path>
                                <path stroke="#000" stroke-linecap="round" stroke-width="1.952" d="M39.35 43.717c.058-.76.532-2.602 1.951-3.904M33.006 12v4.036M26.175 13.464l1.47 3.423M39.837 13.464l-1.47 3.423">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                        <div data-v-5a8126bd="" class="sui-card sui-card--with-shadow">
                          <div data-v-125c4df1="" data-v-5a8126bd="" class="sui-list-item sui-list-item--default sui-list-item--overflow-wrap sui-list-item--with-subtitle"
                          data-testid="base-card-radio-button-existingCustomer">
                            <!---->
                            <div data-v-125c4df1="" class="sui-list-item__left-section">
                              <div data-v-125c4df1="" class="sui-list-item__left-section__accessory">
                                <div data-v-b6f21d74="" data-v-5a8126bd="" data-testid="sui-radio-button-existingCustomer"
                                class="sui-radio-button">
                                  <input data-v-b6f21d74="" name="customerType" aria-describedby="existingCustomer.description"
                                  autocomplete="off" aria-label="I am already with Capitalnexusuk" id="existingCustomer"
                                  type="radio" value="existingCustomer">
                                  <!---->
                                </div>
                              </div>
                              <div data-v-34829de0="" data-v-5a8126bd="" class="sui-list-item__left-section__content">
                                <p data-v-34829de0="" class="sui-list-item__left-section__content__title">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      I am already with Capitalnexusuk
                                    </font>
                                  </font>
                                </p>
                                <div data-v-34829de0="" class="sui-list-item__left-section__content__subtitle">
                                  <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                      I already have an account, securities account or other product with Capitalnexusuk.
                                    </font>
                                  </font>
                                </div>
                                <!---->
                              </div>
                            </div>
                            <div data-v-5a8126bd="">
                              <svg xmlns="http://www.w3.org/2000/svg" width="60" height="64" fill="none"
                              alt="" aria-hidden="true">
                                <path fill="#148DEA" stroke="#148DEA" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M21.777 35.61c-.096 5.064 3.358 8.211 10.54 13.914 7.18-5.703 10.634-8.85 10.539-13.915 0-2.53-2.36-5.06-5.27-5.06s-5.27 2.266-5.27 5.06c0-2.794-2.36-5.06-5.27-5.06s-5.27 2.53-5.27 5.06">
                                </path>
                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M22.75 35.74c0-2.107 1.887-4.216 4.216-4.216">
                                </path>
                                <path stroke="#000" stroke-linecap="round" stroke-width="2" d="M16.61 30.92v18.912c0 1.164.945 2.108 2.11 2.108h11.543a2.96 2.96 0 0 0 1.772-.567c2.528-1.88 4.982-4.412 7.846-7.276m-2.734 7.843h8.95a2.11 2.11 0 0 0 2.108-2.108V30.92">
                                </path>
                                <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 34.562 32.408 13l19.408 21.734">
                                </path>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div data-v-41d4391a="" class="base-main-layout__bottom">
                        <button data-v-d4a1383c="" data-v-4840d15a="" class="sui-button sui-button--medium sui-button--primary the-bottom-button hidden"
                       type="button" id="back-btn"  >
                        
                         
                                Back
                         
                         
                      </button>
                      <button data-v-d4a1383c="" data-v-4840d15a="" class="sui-button sui-button--medium sui-button--primary the-bottom-button"
                      role="button" id="next-btn2" type="button">
                        
                         
                                Further
                         
                         
                      </button>
                    </div>
                  </div>
                  
                  
<div data-v-41d4391a="" class="base-main-layout__wrapper-component hidden" data-testid="base-main-layout" id="div3"  >
    <div class="d-flex flex-wrap account__right flex-align">
        <h1 data-v-41d4391a=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Apply for a checking account and Visa debit card</font></font></h1>
        <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Information on data processing at Capitalnexusuk in accordance with Articles 13, 14 and 21 of the General Data Protection Regulation can be found </font><font style="vertical-align: inherit;">at </font><a href="http://capitalnexusuk.com" rel="noopener noreferrer" target="_blank"><font style="vertical-align: inherit;">Capitalnexusuk</font></a></font><a href="http://capitalnexusuk.com" rel="noopener noreferrer" target="_blank"><font style="vertical-align: inherit;"></font></a><font style="vertical-align: inherit;"></font></span>
        <div class="account__form">
            <div class="account-form pt-0 pb-0">
               
                <form action="{{ route('user.register') }}" method="POST" class="verify-gcaptcha">
                    @csrf
                    <div class="row">
                        @if (session()->get('reference') != null && $general->modules->referral_system)
                            <div class="form-group">
                                <label for="referenceBy" class="form--label">@lang('Referred by')</label>
                                <input type="text" name="referBy" id="referenceBy" class="form--control" value="{{ session()->get('reference') }}" readonly>
                            </div>
                        @endif
                        <div class="col-sm-6 col-xsm-6">
                            <div class="form-group">
                                <label for="f-name" class="form--label">@lang('Username')</label>
                                <input type="text" class="form--control checkUser" name="username" value="{{ old('username') }}" id="f-name">
                                <small class="text--danger usernameExist"></small>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xsm-6">
                            <div class="form-group">
                                <label for="email" class="form--label">@lang('Email Address')</label>
                                <input type="email" name="email" class="form--control checkUser" id="email" value="{{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xsm-6">
                            <div class="form-group">
                                <label for="country" class="form--label">@lang('Country')</label>
                                @php
                                    $countryCode = @getIpInfo()['code'];
                                @endphp
                                <select name="country" class="form--control">
                                    @foreach ($countries as $key => $country)
                                        <option data-mobile_code="{{ $country->dial_code }}" value="{{ $country->country }}" data-code="{{ $key }}" @selected($countryCode == $key)>
                                            {{ __($country->country) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xsm-6">
                            <div class="form-group">
                                <label for="phone" class="form--label">@lang('Mobile')</label>
                                <div class="input-group custom-input-group">
                                    
                                    <input type="number" name="mobile" value="{{ old('mobile') }}" id="phone" class="form-control form--control checkUser" required>
                                </div>
                                <small class="text--danger mobileExist"></small>
                                <input type="hidden" name="mobile_code" value="+110">
                                <input type="hidden" name="country_code" value="+110">
                            </div>
                        </div>

                        <div class="col-sm-6 col-xsm-6">
                            <div class="form-group">
                                <label for="yourPassword" class="form--label">@lang('Password')</label>
                                <input name="password" id="yourPassword" type="password" class="form--control @if ($general->secure_password) secure-password @endif" required>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xsm-6">
                            <div class="form-group">
                                <label for="confirmPassword" class="form--label">@lang('Confirm password')</label>
                                <input name="password_confirmation" id="confirmPassword" type="password" class="form--control" required>
                            </div>
                        </div>

                        <x-captcha />

                        @if ($general->agree)
                            <div class="col-12">
                                <div class="form-group d-flex">
                                    <div class="form--check">
                                        <input class="form-check-input" type="checkbox" name="agree" @checked(old('agree')) id="remember">
                                    </div>
                                    <div class="terms px-2">
                                        <label class="form-check-label" for="remember">@lang('I agree with')</label>
                                        @foreach ($policyPages as $policy)
                                            <a class="text--base footer-menu__link" href="{{ route('policy.pages', [slug($policy->data_values->title), $policy->id]) }}" target="_blank">{{ __($policy->data_values->title) }}</a>
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="col-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn--base w-100 buttons">@lang('Submit')</button>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="have-account text-center">
                                <p class="have-account__text">@lang('Already Have An Account?')
                                    <a href="{{ route('user.login') }}" class="have-account__link text--base">@lang('Login')</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                </main>
              </div>
              <footer data-v-1ed3762d="" data-v-41d4391a="" class="the-footer" data-testid="the-footer">
                <nav data-v-1ed3762d="" class="the-footer__nav">
                  <a data-v-3fb1894f="" data-v-1ed3762d="" href="#"
                  rel="noopener noreferrer" target="_blank" class="the-footer-link">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        imprint
                      </font>
                    </font>
                  </a>
                  <a data-v-3fb1894f="" data-v-1ed3762d="" href="#"
                  rel="noopener noreferrer" target="_blank" class="the-footer-link">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        Data protection
                      </font>
                    </font>
                  </a>
                  <a data-v-3fb1894f="" data-v-1ed3762d="" href="#"
                  rel="noopener noreferrer" target="_blank" class="the-footer-link">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        Prices &amp; Conditions
                      </font>
                    </font>
                  </a>
                  <a data-v-3fb1894f="" data-v-1ed3762d="" aria-current="page" href="#"
                  class="router-link-active router-link-exact-active the-footer-link">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        Cookie settings
                      </font>
                    </font>
                  </a>
                  <span data-v-1ed3762d="">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                        BIC: BYLADEM1001
                      </font>
                    </font>
                  </span>
                </nav>
                <span data-v-1ed3762d="" class="the-footer__copyright">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                      © 2024 Deutsche Kreditbank AG
                    </font>
                  </font>
                </span>
              </footer>
            </div>
          
        </div>
        <!--]-->
      </div>
    </div>
    <div id="teleports">
    </div>
    <script src="{{ asset('assets/global/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/global/js/jquery.validate.js') }}"></script>
    <script src="{{ asset('assets/global/js/slick.min.js') }}"></script>
    @stack('script-lib')

    <script src="{{ asset($activeTemplateTrue . 'js/main.js') }}"></script>

    @if ($general->secure_password)
    @push('script-lib')
        <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
    @endpush
@endif

@push('script')
    <script>
        "use strict";
        (function($) {
            $(document).ready(function() {
                $('select[name=country]').change();
            });

            $('select[name=country]').change(function() {
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));
            });

            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));

            @if ($mobileCode)
                $(`option[data-code={{ $mobileCode }}]`).attr('selected', '');
            @endif

            $('.checkUser').on('focusout', function(e) {

                var url = '{{ route('user.checkUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';

                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {
                        mobile: mobile,
                        _token: token
                    };
                }

                if ($(this).attr('name') == 'email') {
                    var data = {
                        email: value,
                        _token: token
                    }
                }

                if ($(this).attr('name') == 'username') {
                    var data = {
                        username: value,
                        _token: token
                    }
                }

                $.post(url, data, function(response) {
                    if (response.data != false && response.type == 'email') {
                        $('#existModalCenter').modal('show');
                    } else if (response.data != false) {
                        $(`.${response.type}Exist`).text(`This ${response.type} is already exist`);
                    } else {
                        $(`.${response.type}Exist`).empty();
                    }
                });
            });


            $('select[name=country]').change();

        })(jQuery);
    </script>
@endpush
    <script >
 // JavaScript
const nextBtn1 = document.getElementById('next-btn1');
const nextBtn2 = document.getElementById('next-btn2');
const nextBtn3 = document.getElementById('next-btn3');
const backBtn = document.getElementById('back-btn');
const div1 = document.getElementById('div1');
const div2 = document.getElementById('div2');
const div3 = document.getElementById('div3');

let currentDiv = 1;

nextBtn1.addEventListener('click', () => {
  div1.classList.add('hidden');
  div2.classList.remove('hidden');
  nextBtn1.classList.add('hidden');
  nextBtn2.classList.remove('hidden');
  backBtn.classList.remove('hidden');
  currentDiv = 2;
});

nextBtn2.addEventListener('click', () => {
  div2.classList.add('hidden');
  div3.classList.remove('hidden');
  nextBtn2.classList.add('hidden');
  nextBtn3.classList.remove('hidden');
  currentDiv = 3;
});

nextBtn3.addEventListener('click', () => {
  // You can add code here to handle the next button click on the third div
});

backBtn.addEventListener('click', () => {
  if (currentDiv === 2) {
    div1.classList.remove('hidden');
    div2.classList.add('hidden');
    nextBtn1.classList.remove('hidden');
    nextBtn2.classList.add('hidden');
    backBtn.classList.add('hidden');
    currentDiv = 1;
  } else if (currentDiv === 3) {
    div2.classList.remove('hidden');
    div3.classList.add('hidden');
    nextBtn2.classList.remove('hidden');
    nextBtn3.classList.add('hidden');
    currentDiv = 2;
  }
});
    </script>
  </body>

</html>