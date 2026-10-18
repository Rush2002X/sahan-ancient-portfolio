<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#090b08">
    <title>Sahan Rashmitha | Ancient Sri Lankan Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <script type="module"
        src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
    <style>
        :root {
            --bg: #090b08;
            --panel: #10140f;
            --gold: #c7a15a;
            --gold2: #e4c783;
            --ivory: #e9dfca;
            --muted: #b0a795;
            --line: rgba(199, 161, 90, .28)
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px
        }

        body {
            background: var(--bg);
            color: var(--ivory);
            font-family: Inter, Arial, sans-serif;
            overflow-x: hidden
        }

        a {
            color: inherit;
            text-decoration: none
        }

        img {
            max-width: 100%;
            display: block
        }

        button {
            font: inherit
        }

        .cinzel,
        h1,
        h2,
        h3,
        .eyebrow,
        .navlinks a,
        .btn,
        .logo-name {
            font-family: Cinzel, serif
        }

        .grain {
            pointer-events: none;
            position: fixed;
            inset: 0;
            z-index: 20;
            opacity: .07;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 180 180' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)' opacity='.3'/%3E%3C/svg%3E")
        }

        #ember-canvas {
            position: fixed;
            inset: 0;
            z-index: 19;
            width: 100%;
            height: 100%;
            pointer-events: none
        }

        .scroll-thread {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 32;
            width: 100%;
            height: 2px;
            pointer-events: none;
            background: linear-gradient(90deg, var(--gold), var(--gold2));
            transform: scaleX(0);
            transform-origin: left center;
            box-shadow: 0 0 12px #e4c783aa
        }

        .sound-toggle {
            position: fixed;
            right: 22px;
            bottom: 22px;
            z-index: 31;
            display: inline-flex;
            align-items: center;
            gap: 9px;
            padding: 10px 13px;
            border: 1px solid var(--line);
            background: #090b08e8;
            color: var(--gold2);
            font-family: Cinzel, serif;
            font-size: 9px;
            letter-spacing: 1.4px;
            cursor: pointer;
            transition: .3s
        }

        .sound-controls {
            position: fixed;
            right: 22px;
            bottom: 22px;
            z-index: 31;
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 5px;
            border: 1px solid var(--line);
            background: #090b08e8
        }

        .sound-controls .sound-toggle {
            position: static;
            border: 0;
            padding: 5px 8px
        }

        .volume-button {
            width: 28px;
            height: 28px;
            border: 1px solid transparent;
            background: transparent;
            color: var(--gold2);
            font-size: 16px;
            line-height: 1;
            cursor: pointer;
            transition: .2s
        }

        .volume-button:hover,
        .volume-button:focus-visible {
            border-color: var(--gold);
            background: #2a2113ed
        }

        .volume-level {
            min-width: 36px;
            color: var(--muted);
            font-family: Cinzel, serif;
            font-size: 8px;
            text-align: center;
            letter-spacing: .5px
        }

        .sound-toggle:hover,
        .sound-toggle[aria-pressed="true"] {
            border-color: var(--gold2);
            background: #2a2113ed;
            box-shadow: 0 8px 25px #0008
        }

        .sound-toggle-icon {
            font-size: 14px;
            line-height: 1
        }

        nav {
            position: fixed;
            inset: 0 0 auto;
            z-index: 30;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 6%;
            background: linear-gradient(#080a08f2, transparent);
            transition: .35s
        }

        nav.scrolled {
            background: #090b08ed;
            backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--line)
        }

        .brand {
            display: flex;
            gap: 12px;
            align-items: center;
            min-width: 0
        }

        .brand img {
            width: 44px;
            height: 44px;
            object-fit: contain
        }

        .logo-name {
            font-size: 13px;
            letter-spacing: 2px;
            white-space: nowrap
        }

        .navlinks {
            display: flex;
            gap: 26px;
            list-style: none
        }

        .navlinks a {
            font-size: 10px;
            letter-spacing: 1.5px;
            color: #d3c8b4;
            transition: .2s
        }

        .navlinks a:hover {
            color: var(--gold2)
        }

        .navlinks a.active {
            color: var(--gold2);
            text-shadow: 0 0 12px #e4c78388
        }

        .menu {
            display: none;
            background: none;
            border: 1px solid var(--line);
            color: var(--gold2);
            padding: 7px 11px;
            font-size: 20px
        }

        .hero {
            min-height: 100svh;
            position: relative;
            display: flex;
            align-items: center;
            isolation: isolate;
            overflow: hidden;
            background: linear-gradient(90deg, #050805f5 0%, #070a07d9 35%, #070a0766 68%, #070a0790 100%), linear-gradient(0deg, var(--bg), transparent 34%), url('images/backgrounds/sigiriya.jpg') center/cover
        }

        .hero:before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            pointer-events: none;
            opacity: .75;
            background: radial-gradient(circle 260px at var(--pointer-x, 72%) var(--pointer-y, 42%), #d9b76c2b, transparent 72%);
            transition: opacity .5s ease
        }

        .hero:after {
            content: "";
            position: absolute;
            inset: 0;
            z-index: -1;
            background: radial-gradient(ellipse at 75% 40%, transparent 0%, #0709073b 55%, #070907a8 100%)
        }

        .hero-inner {
            width: min(1240px, 100%);
            margin: auto;
            padding: 145px 7% 110px;
            position: relative
        }

        .hero-model {
            position: absolute;
            z-index: 2;
            top: 50%;
            right: 0;
            width: min(54vw, 680px);
            height: min(78vh, 760px);
            transform: translateY(-50%);
            --poster-color: transparent;
            filter: drop-shadow(0 28px 25px #000b);
            pointer-events: auto;
            transition: filter .5s ease
        }

        .hero-model.model-hover {
            filter: drop-shadow(0 34px 30px #000d) brightness(1.06)
        }

        .hero-model::part(default-progress-bar) {
            background-color: var(--gold)
        }

        .model-label {
            position: absolute;
            z-index: 3;
            right: 9%;
            bottom: 16%;
            padding: 9px 13px;
            border: 1px solid var(--line);
            background: #090b08c7;
            color: var(--gold2);
            font-family: Cinzel, serif;
            font-size: 9px;
            letter-spacing: 2px;
            text-transform: uppercase
        }

        .hero-mark {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-bottom: 24px;
            filter: drop-shadow(0 0 16px #c79e4b40)
        }

        .hero-mark {
            animation: emblem-float 5s ease-in-out infinite
        }

        @keyframes emblem-float {
            0%, 100% { transform: translateY(0) rotate(-2deg) }
            50% { transform: translateY(-8px) rotate(2deg) }
        }

        .eyebrow {
            font-size: 11px;
            letter-spacing: 5px;
            color: var(--gold2);
            text-transform: uppercase;
            display: flex;
            align-items: center;
            gap: 14px
        }

        .eyebrow:before {
            content: "";
            width: 38px;
            height: 1px;
            background: var(--gold)
        }

        h1 {
            font-weight: 500;
            text-transform: uppercase;
            font-size: clamp(42px, 8.4vw, 108px);
            line-height: .99;
            letter-spacing: .025em;
            margin: 22px 0 25px;
            max-width: 900px
        }

        h1 span {
            display: block;
            color: var(--gold2);
            text-shadow: 0 5px 35px #0008
        }

        .role {
            color: #d0c4af;
            letter-spacing: 3px;
            font-size: 11px;
            text-transform: uppercase
        }

        .hero-copy {
            font-family: Cinzel, serif;
            color: #d6cbb7;
            font-size: clamp(16px, 2vw, 21px);
            line-height: 1.8;
            margin-top: 27px;
            max-width: 540px
        }

        .hero-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 35px
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 15px 21px;
            min-height: 54px;
            border: 1px solid var(--gold);
            color: var(--gold2);
            background: #0b0c09a6;
            font-size: 10px;
            letter-spacing: 1.4px;
            text-transform: uppercase;
            transition: transform .35s cubic-bezier(.16, 1, .3, 1), background .3s, color .3s, box-shadow .3s
        }

        .btn:hover {
            background: var(--gold);
            color: #111;
            transform: translateY(-3px) scale(1.025);
            box-shadow: 0 12px 28px #c7a15a35
        }

        .btn img {
            width: 23px;
            height: 23px;
            object-fit: contain
        }

        .scrollhint {
            position: absolute;
            bottom: 27px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 9px;
            letter-spacing: 3px;
            color: #c6b99f;
            text-align: center
        }

        .scrollhint span {
            display: block;
            width: 1px;
            height: 38px;
            background: var(--gold);
            margin: 12px auto 0;
            animation: drop 1.8s infinite
        }

        .lion-guardian {
            position: absolute;
            top: 50%;
            left: 5%;
            transform: translateY(-50%);
            z-index: 1;
            width: 350px;
            height: 350px;
            object-fit: contain
        }

        @keyframes drop {
            0% {
                transform: scaleY(0);
                transform-origin: top
            }

            50% {
                transform: scaleY(1);
                transform-origin: top
            }

            51% {
                transform-origin: bottom
            }

            100% {
                transform: scaleY(0);
                transform-origin: bottom
            }
        }

        section {
            padding: 110px 7%;
            position: relative;
            overflow: hidden
        }

        section:after {
            content: "";
            position: absolute;
            top: 18%;
            right: -10%;
            width: 280px;
            height: 280px;
            border: 1px solid #c7a15a1f;
            border-radius: 50%;
            pointer-events: none;
            animation: ring-drift 12s ease-in-out infinite
        }

        @keyframes ring-drift {
            0%, 100% { transform: translate3d(0, 0, 0) rotate(0deg); opacity: .35 }
            50% { transform: translate3d(-35px, 20px, 0) rotate(18deg); opacity: .75 }
        }

        .section-wrap {
            max-width: 1180px;
            margin: auto
        }

        .section-no {
            color: var(--gold);
            font-family: Cinzel, serif;
            font-size: 11px;
            letter-spacing: 4px;
            margin-bottom: 14px
        }

        .section-title {
            font-weight: 400;
            font-size: clamp(34px, 5vw, 61px);
            line-height: 1.1;
            letter-spacing: 1px
        }

        .section-title span {
            color: var(--gold2)
        }

        .ornament {
            width: min(270px, 65%);
            height: 35px;
            object-fit: contain;
            object-position: left center;
            margin: 17px 0 25px;
            opacity: .95
        }

        .about {
            background: linear-gradient(90deg, #090b08f4, #090b08df), url('images/backgrounds/ancient-stone.jpg') center/cover
        }

        .about-grid {
            display: grid;
            grid-template-columns: 1fr .85fr;
            gap: 60px;
            align-items: center
        }

        .about-copy {
            font-size: 15px;
            line-height: 2;
            color: var(--muted);
            max-width: 640px
        }

        .about-copy p+p {
            margin-top: 15px
        }

        .about-art {
            position: relative;
            min-height: 420px;
            display: grid;
            place-items: center;
            background: linear-gradient(#0b0d0a1a, #0b0d0a8a), url('images/backgrounds/sri-lanka-landscape.jpg') center/cover;
            border: 1px solid var(--line);
            overflow: hidden
        }

        .about-art .lion {
            width: min(65%, 320px);
            max-height: 390px;
            object-fit: contain;
            filter: drop-shadow(0 25px 22px #000b)
        }

        .art-caption {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            text-align: center;
            font-family: Cinzel, serif;
            font-size: 10px;
            letter-spacing: 3px;
            color: var(--gold2)
        }

        .skills {
            background: radial-gradient(ellipse at center, #172017 0%, #0a0d09 70%)
        }

        .center {
            text-align: center
        }

        .center .ornament {
            object-position: center;
            margin-left: auto;
            margin-right: auto
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
            margin-top: 42px
        }

        .skill-card {
            background: linear-gradient(145deg, #171912d9, #0a0c09f2);
            border: 1px solid var(--line);
            padding: 24px 14px 22px;
            text-align: center;
            min-height: 165px;
            transition: transform .45s cubic-bezier(.16, 1, .3, 1), border-color .3s, box-shadow .3s
        }

        .skill-card:hover {
            transform: translateY(-6px);
            border-color: #d9b76c;
            box-shadow: 0 15px 35px #0005
        }

        .skill-card img {
            width: 76px;
            height: 76px;
            object-fit: contain;
            margin: 0 auto 13px;
            filter: drop-shadow(0 5px 7px #0008)
        }

        .skill-card h3 {
            font-size: 12px;
            letter-spacing: 1px;
            font-weight: 500;
            color: #e7d5ac
        }

        .skill-card p {
            font-size: 11px;
            color: #8f9383;
            margin-top: 8px
        }

        .projects {
            background: linear-gradient(0deg, #080a08ef, #080a08e8), url('images/backgrounds/project1.jpg') center/cover
        }

        .project-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 35px
        }

        .project-card {
            min-height: 330px;
            position: relative;
            overflow: hidden;
            border: 1px solid var(--line);
            background: #111
        }

        .skill-card,
        .project-card,
        .socials a {
            transform-style: preserve-3d;
            --card-x: 0deg;
            --card-y: 0deg
        }

        .skill-card.is-hovered,
        .project-card.is-hovered,
        .socials a.is-hovered {
            transform: translateY(-6px) perspective(700px) rotateX(var(--card-x)) rotateY(var(--card-y))
        }

        .project-card>img.project-bg {
            position: absolute;
            width: 100%;
            height: 100%;
            inset: 0;
            object-fit: cover;
            transition: transform .6s
        }

        .project-card:hover>img.project-bg {
            transform: scale(1.06)
        }

        .project-card:after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(0deg, #050705f5, #05070514 90%)
        }

        .project-content {
            position: absolute;
            z-index: 1;
            bottom: 0;
            left: 0;
            padding: 27px
        }

        .project-content .section-no {
            margin-bottom: 10px
        }

        .project-content h3 {
            font-size: 25px;
            font-weight: 400;
            margin-bottom: 10px
        }

        .project-content p {
            color: #c2b9a7;
            font-size: 13px;
            line-height: 1.7;
            max-width: 440px
        }

        .project-content a {
            display: inline-block;
            color: var(--gold2);
            font-family: Cinzel, serif;
            font-size: 10px;
            letter-spacing: 1.5px;
            margin-top: 16px
        }

        .contact {
            min-height: 500px;
            text-align: center;
            display: grid;
            place-items: center;
            background: linear-gradient(#080a08c9, #080a08ef), url('images/backgrounds/temple.jpg') center 40%/cover
        }

        .contact .section-title {
            font-size: clamp(36px, 6vw, 72px)
        }

        .contact p {
            max-width: 590px;
            margin: 15px auto 25px;
            line-height: 1.8;
            color: var(--muted)
        }

        .contact .ornament {
            object-position: center;
            margin-left: auto;
            margin-right: auto
        }

        .socials {
            display: flex;
            gap: 13px;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 28px
        }

        .socials a {
            width: 54px;
            height: 54px;
            display: grid;
            place-items: center;
            border: 1px solid var(--line);
            background: #080a08b0;
            transition: .25s
        }

        .socials a:hover {
            transform: translateY(-4px);
            border-color: var(--gold)
        }

        .socials img {
            width: 43px;
            height: 43px;
            object-fit: contain
        }

        footer {
            padding: 23px 7%;
            display: flex;
            justify-content: space-between;
            gap: 15px;
            border-top: 1px solid var(--line);
            font-size: 10px;
            color: #8b8577;
            letter-spacing: 1px
        }

        .footer-brand {
            display: flex;
            align-items: center;
            gap: 9px
        }

        .footer-brand img {
            width: 28px;
            height: 28px;
            object-fit: contain
        }

        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .7s ease, transform .7s ease
        }

        .reveal.visible {
            opacity: 1;
            transform: none
        }

        .reveal.visible[data-stagger] {
            transition-delay: var(--stagger-delay, 0ms)
        }

        .typewriter-target {
            min-height: 1em
        }

        .typewriter-target.typing:after {
            content: "";
            display: inline-block;
            width: 2px;
            height: .9em;
            margin-left: 5px;
            vertical-align: -.08em;
            background: var(--gold2);
            animation: typing-caret .75s steps(1) infinite
        }

        @keyframes typing-caret {
            50% { opacity: 0 }
        }

        @media(max-width:850px) {
            .navlinks {
                gap: 15px
            }

            .navlinks a {
                font-size: 9px
            }

            .about-grid {
                grid-template-columns: 1fr;
                gap: 35px
            }

            .about-art {
                min-height: 350px
            }

            .hero-model {
                right: -4%;
                width: min(54vw, 500px);
                height: min(58vh, 540px);
                opacity: .78
            }

            .model-label {
                right: 5%;
                bottom: 12%
            }

            .skills-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr))
            }
        }

        @media(max-width:640px) {
            nav {
                padding: 12px 5%
            }

            .brand img {
                width: 36px;
                height: 36px
            }

            .logo-name {
                font-size: 10px;
                letter-spacing: 1px
            }

            .menu {
                display: block
            }

            .navlinks {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                display: none;
                flex-direction: column;
                gap: 0;
                background: #090b08f7;
                border-bottom: 1px solid var(--line);
                padding: 10px 5% 18px
            }

            .navlinks.open {
                display: flex
            }

            .navlinks a {
                display: block;
                padding: 14px;
                font-size: 11px
            }

            .hero-inner {
                padding: 390px 7% 105px 7%
            }

            .hero-model {
                top: 122px;
                right: 0;
                width: 100vw;
                height: 350px;
                transform: none;
                opacity: .82
            }

            .model-label {
                right: 7%;
                top: 355px;
                bottom: auto;
                font-size: 8px
            }

            .lion-guardian {
                display: none
            }

            .hero-mark {
                width: 64px;
                height: 64px
            }

            .role {
                font-size: 9px;
                line-height: 1.8;
                letter-spacing: 1.5px
            }

            .hero-copy {
                font-size: 16px
            }

            .hero-actions {
                align-items: stretch;
                flex-direction: column;
                max-width: 260px
            }

            .btn {
                width: 100%
            }

            section {
                padding: 80px 6%
            }

            .skills-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px
            }

            .skill-card {
                padding: 18px 8px;
                min-height: 145px
            }

            .skill-card img {
                width: 65px;
                height: 65px
            }

            .project-grid {
                grid-template-columns: 1fr
            }

            .project-card {
                min-height: 300px
            }

            .about-art {
                min-height: 300px
            }

            footer {
                flex-direction: column;
                text-align: center;
                align-items: center;
                line-height: 1.7
            }
        }

        @media(prefers-reduced-motion:reduce) {
            html {
                scroll-behavior: auto
            }

            *,
            *:before,
            *:after {
                animation: none !important;
                transition: none !important
            }

            .reveal {
                opacity: 1;
                transform: none
            }

            .hero:before {
                display: none
            }

            #ember-canvas,
            .sound-toggle {
                display: none
            }

            .hero-mark,
            section:after,
            .typewriter-target.typing:after {
                animation: none
            }
        }

        @media(max-width:640px) {
            .sound-toggle {
                right: 12px;
                bottom: 12px;
                padding: 9px 10px;
                font-size: 8px
            }

            .sound-controls {
                right: 12px;
                bottom: 12px
            }
        }
    </style>
</head>

<body>
    <div class="grain"></div>
    <div class="scroll-thread" id="scroll-thread"></div>
    <canvas id="ember-canvas" aria-hidden="true"></canvas>
    <div class="sound-controls" aria-label="Music controls">
        <button class="volume-button" id="volume-down" type="button" aria-label="Decrease music volume">−</button>
        <button class="sound-toggle" id="sound-toggle" type="button" aria-pressed="false"
            aria-label="Enable ambient heritage sound">
            <span class="sound-toggle-icon" aria-hidden="true">♨</span><span id="sound-label">MUSIC OFF</span>
        </button>
        <span class="volume-level" id="volume-level">72%</span>
        <button class="volume-button" id="volume-up" type="button" aria-label="Increase music volume">+</button>
    </div>
    <nav id="navbar"><a class="brand" href="#home"><img src="images/assets/lotus_emblem.png" alt="Lotus emblem"><span
                class="logo-name">SAHAN RASHMITHA</span></a><button class="menu" id="menu"
            aria-label="Toggle navigation">☰</button>
        <ul class="navlinks" id="navlinks">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#skills">SKILLS</a></li>
            <li><a href="#projects">PROJECTS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </nav>
    <header class="hero" id="home">
        <div class="lion-guardian"><img src="images/assets/lion_guardian.png" alt="Lion guardian"></div>
        <model-viewer class="hero-model" src="images/sri-lankan-tusker/source/model.glb"
            alt="Interactive 3D model of a Sri Lankan tusker elephant" camera-controls
            interaction-prompt="none" shadow-intensity="1.1" exposure=".9" environment-image="neutral"
            loading="eager">
        </model-viewer>
        
    <div class="hero-inner"><img class="hero-mark" src="images/assets/lotus_emblem.png"
            alt="Antique gold lotus emblem">
        <div class="eyebrow">Ayubowan · Welcome to my digital realm</div>
        
        <h1>Sahan <span class="name">Rashmitha</span></h1>
        <div class="role">Software Engineer&nbsp; · &nbsp;Developer&nbsp; · &nbsp;Quality Assurance</div>
        <p class="hero-copy">Born from an ancient land.<br>Building the future with technology.</p>
        <div class="hero-actions"><a class="btn" href="#about"><img src="images/assets/button_explore_now.png"
                    alt="">Explore my journey <span>↗</span></a><a class="btn" href="#projects"><img
                    src="images/assets/button_view_projects.png" alt="">View projects <span>↗</span></a></div>
    </div>
    <div class="scrollhint">SCROLL TO EXPLORE<span></span></div>
</header>
    <section class="about" id="about">
        <div class="section-wrap about-grid">
            <div class="reveal">
                <div class="section-no">01 — THE STORY</div>
                <h2 class="section-title">Rooted in heritage.<br><span>Built for tomorrow.</span></h2><img
                    class="ornament" src="images/assets/divider_lotus_thin.png" alt="Decorative lotus divider">
                <div class="about-copy">
                    <p>I am a passionate software engineer who enjoys transforming ideas into useful digital
                        experiences. My interests span software development, interface design, testing, and
                        technology driven problem solving.</p>
                    <p>Inspired by Sri Lanka's rich history and craftsmanship, this portfolio brings together ancient
                        stone, forest tones, and golden details with a modern digital identity.</p>
                    <p><strong style="color:#e1c27f;font-weight:500">My focus:</strong> creating thoughtful, reliable,
                        and beautifully crafted technology.</p>
                </div><a class="btn" style="margin-top:27px" href="#contact"><img
                        src="images/assets/button_contact_me.png" alt="">Get in touch ↗</a>
            </div>
            <div class="about-art reveal"><img class="lion" src="images/assets/lion_guardian.png"
                    alt="Ancient stone lion guardian statue">
                <div class="art-caption">WISDOM · COURAGE · CREATION</div>
            </div>
        </div>
    </section>
    <section class="skills" id="skills">
        <div class="section-wrap">
            <div class="center reveal">
                <div class="section-no">02 — CRAFT & CAPABILITY</div>
                <h2 class="section-title">My <span>Expertise</span></h2><img class="ornament"
                    src="images/assets/divider_lotus_thin.png" alt="Lotus ornament">
                <p style="max-width:600px;margin:0 auto;color:var(--muted);line-height:1.8;font-size:14px">A growing
                    toolkit for building, testing, and delivering digital solutions.</p>
            </div>
            <div class="skills-grid">
                <div class="skill-card reveal"><img src="images/assets/skill_development.png" alt="Development icon">
                    <h3>Development</h3>
                    <p>Web · Desktop · Software</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_ui_ux.png" alt="UI UX icon">
                    <h3>UI / UX Design</h3>
                    <p>Interfaces · Experiences</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_quality.png" alt="Quality icon">
                    <h3>Quality Assurance</h3>
                    <p>Testing · Bug management</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_innovation.png" alt="Innovation icon">
                    <h3>Innovation</h3>
                    <p>Research · Problem solving</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_database.png" alt="Database icon">
                    <h3>Database</h3>
                    <p>Data · Storage</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_cloud.png" alt="Cloud icon">
                    <h3>Cloud</h3>
                    <p>Deployment · Services</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_security.png" alt="Security icon">
                    <h3>Security</h3>
                    <p>Secure development</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_mobile.png" alt="Mobile icon">
                    <h3>Mobile</h3>
                    <p>Mobile applications</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_web.png" alt="Web icon">
                    <h3>Web</h3>
                    <p>Responsive websites</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_desktop.png" alt="Desktop icon">
                    <h3>Desktop</h3>
                    <p>Desktop applications</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_network.png" alt="Network icon">
                    <h3>Networking</h3>
                    <p>Networks · Infrastructure</p>
                </div>
                <div class="skill-card reveal"><img src="images/assets/skill_media.png" alt="Media icon">
                    <h3>Digital Media</h3>
                    <p>Creative content</p>
                </div>
            </div>
        </div>
    </section>
    <section class="projects" id="projects">
        <div class="section-wrap">
            <div class="reveal">
                <div class="section-no">03 — SELECTED WORK</div>
                <h2 class="section-title">Projects & <span>Experiments</span></h2><img class="ornament"
                    src="images/assets/divider_ornate.png" alt="Ornate divider">
                <p style="color:var(--muted);line-height:1.8;max-width:600px;font-size:14px">A selection of projects,
                    prototypes, and technical explorations. Replace these sample cards with your real project details
                    and links.</p>
            </div>
            <div class="project-grid">
                <article class="project-card reveal"><img class="project-bg" src="images/backgrounds/project1.jpg"
                        alt="Ancient Sri Lankan fortress landscape">
                    <div class="project-content">
                        <div class="section-no">PROJECT 01</div>
                        <h3>Digital Experiences</h3>
                        <p>Web application concepts focused on clean interfaces, useful features, and thoughtful user
                            experiences.</p><a href="#contact">DISCUSS A PROJECT ↗</a>
                    </div>
                </article>
                <article class="project-card reveal"><img class="project-bg" src="images/backgrounds/project2.jpg"
                        alt="Ancient ruins and water at sunset">
                    <div class="project-content">
                        <div class="section-no">PROJECT 02</div>
                        <h3>Smart Systems</h3>
                        <p>Exploring software systems, automation, quality practices, and practical technology
                            solutions.</p><a href="#contact">DISCUSS A PROJECT ↗</a>
                    </div>
                </article>
                
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="section-wrap reveal">
            <div class="section-no">04 — BEGIN A CONVERSATION</div>
            <h2 class="section-title">Let's create <span>something meaningful.</span></h2><img class="ornament"
                src="images/assets/divider_lotus_thin.png" alt="Golden lotus divider">
            <p>Have an idea, collaboration, or opportunity in mind? Reach out and let's turn it into something real.</p>
            <a class="btn" href="mailto:dgrashmithasahan02@gmail.com"><img src="images/assets/button_contact_me.png"
                    alt="">Email me ↗</a>
            <div class="socials"><a href="www.linkedin.com/in/sahan-rashmitha-140788283" target="_blank" rel="noreferrer"
                    aria-label="LinkedIn"><img src="images/assets/social_linkedin.png" alt="LinkedIn"></a><a
                    href="https://github.com/Rush2002X" target="_blank" rel="noreferrer" aria-label="GitHub"><img
                        src="images/assets/social_github.png" alt="GitHub"></a><a href="https://www.instagram.com/_sahan_rashmitha_/"
                    target="_blank" rel="noreferrer" aria-label="Instagram"><img
                        src="images/assets/social_instagram.png" alt="Instagram"></a><a href="https://www.facebook.com/sahan.raahmitha"
                    target="_blank" rel="noreferrer" aria-label="Facebook"><img src="images/assets/social_facebook.png"
                        alt="Facebook"></a><a href="https://www.youtube.com/" target="_blank" rel="noreferrer"
                    aria-label="YouTube"><img src="images/assets/social_youtube.png" alt="YouTube"></a><a
                    href="https://x.com/SahanRash997" target="_blank" rel="noreferrer" aria-label="X"><img
                        src="images/assets/social_x.png" alt="X"></a><a href="mailto:dgrashmithasahan02@gmail.com"
                    aria-label="Email"><img src="images/assets/social_email.png" alt="Email"></a></div>
        </div>
    </section>
    <footer>
        <div class="footer-brand"><img src="images/assets/lotus_emblem.png" alt=""><span>© <span id="year">2026</span>
                SAHAN RASHMITHA</span></div><span>INSPIRED BY SRI LANKA · BUILT WITH CURIOSITY</span>
    </footer>
    <script>
        const nav = document.getElementById('navbar'),
            menu = document.getElementById('menu'),
            links = document.getElementById('navlinks'),
            hero = document.querySelector('.hero'),
            model = document.querySelector('.hero-model'),
            emberCanvas = document.getElementById('ember-canvas'),
            soundToggle = document.getElementById('sound-toggle'),
            soundLabel = document.getElementById('sound-label'),
            volumeDown = document.getElementById('volume-down'),
            volumeUp = document.getElementById('volume-up'),
            volumeLevel = document.getElementById('volume-level'),
            scrollThread = document.getElementById('scroll-thread'),
            reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const updateScrollState = () => {
            nav.classList.toggle('scrolled', window.scrollY > 40);
            const scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
            scrollThread.style.transform = `scaleX(${scrollableHeight ? window.scrollY / scrollableHeight : 0})`;
        };
        window.addEventListener('scroll', updateScrollState, { passive: true });
        updateScrollState();
        menu.addEventListener('click', () => links.classList.toggle('open'));
        links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => links.classList.remove('open')));
        document.getElementById('year').textContent = new Date().getFullYear();

        if (!reduceMotion) {
            let autoScrollTimer;
            let autoScrollFrame;
            let autoScrollActive = false;
            let userHasInteracted = false;

            const stopAutoScroll = () => {
                autoScrollActive = false;
                cancelAnimationFrame(autoScrollFrame);
            };

            const runAutoScroll = () => {
                if (!autoScrollActive) return;
                const maxScroll = document.documentElement.scrollHeight - window.innerHeight;
                if (window.scrollY >= maxScroll - 2) {
                    stopAutoScroll();
                    return;
                }
                window.scrollBy(0, .35);
                autoScrollFrame = requestAnimationFrame(runAutoScroll);
            };

            const beginAutoScroll = () => {
                if (userHasInteracted || autoScrollActive) return;
                autoScrollActive = true;
                runAutoScroll();
            };

            const resetAutoScroll = () => {
                userHasInteracted = true;
                stopAutoScroll();
                window.clearTimeout(autoScrollTimer);
            };

            autoScrollTimer = window.setTimeout(beginAutoScroll, 4500);
            ['wheel', 'touchstart', 'pointerdown', 'keydown'].forEach(eventName => {
                window.addEventListener(eventName, resetAutoScroll, { passive: eventName !== 'keydown', once: true });
            });
        }

        if (!reduceMotion) {
            const emberContext = emberCanvas.getContext('2d');
            let embers = [];
            let flames = [];
            let canvasWidth = 0;
            let canvasHeight = 0;

            const resizeEmbers = () => {
                const pixelRatio = Math.min(window.devicePixelRatio || 1, 1.5);
                canvasWidth = window.innerWidth;
                canvasHeight = window.innerHeight;
                emberCanvas.width = canvasWidth * pixelRatio;
                emberCanvas.height = canvasHeight * pixelRatio;
                emberContext.setTransform(pixelRatio, 0, 0, pixelRatio, 0, 0);
                embers = Array.from({ length: Math.min(46, Math.max(24, Math.floor(canvasWidth / 32))) }, () => ({
                    x: Math.random() < .5 ? Math.random() * canvasWidth * .2 : canvasWidth * (.8 + Math.random() * .2),
                    y: canvasHeight + Math.random() * canvasHeight,
                    radius: Math.random() * 1.7 + .6,
                    speed: Math.random() * .45 + .18,
                    drift: (Math.random() - .5) * .22,
                    alpha: Math.random() * .5 + .25
                }));
                flames = Array.from({ length: Math.min(18, Math.max(10, Math.floor(canvasWidth / 120))) }, (_, index) => ({
                    x: index % 2 ? canvasWidth - 28 - Math.random() * 100 : 28 + Math.random() * 100,
                    height: 25 + Math.random() * 55,
                    width: 10 + Math.random() * 15,
                    phase: Math.random() * Math.PI * 2,
                    speed: .035 + Math.random() * .035,
                    alpha: .18 + Math.random() * .2
                }));
            };

            const drawEmbers = () => {
                emberContext.clearRect(0, 0, canvasWidth, canvasHeight);
                flames.forEach(flame => {
                    flame.phase += flame.speed;
                    const sway = Math.sin(flame.phase) * 7;
                    const flicker = .78 + Math.sin(flame.phase * 1.7) * .16;
                    const baseY = canvasHeight + 5;
                    const tipY = baseY - flame.height * flicker;
                    const gradient = emberContext.createLinearGradient(0, tipY, 0, baseY);
                    gradient.addColorStop(0, `rgba(255, 214, 105, ${flame.alpha * .7})`);
                    gradient.addColorStop(.45, `rgba(235, 112, 30, ${flame.alpha})`);
                    gradient.addColorStop(1, 'rgba(99, 25, 8, 0)');
                    emberContext.beginPath();
                    emberContext.moveTo(flame.x - flame.width, baseY);
                    emberContext.quadraticCurveTo(flame.x - flame.width * .55 + sway, tipY + flame.height * .35, flame.x + sway, tipY);
                    emberContext.quadraticCurveTo(flame.x + flame.width * .7 - sway, tipY + flame.height * .5, flame.x + flame.width, baseY);
                    emberContext.fillStyle = gradient;
                    emberContext.shadowBlur = 18;
                    emberContext.shadowColor = '#e36f25';
                    emberContext.fill();
                });
                embers.forEach(ember => {
                    ember.y -= ember.speed;
                    ember.x += ember.drift + Math.sin(ember.y * .01) * .08;
                    if (ember.y < -10) {
                        ember.y = canvasHeight + 10;
                        ember.x = Math.random() < .5 ? Math.random() * canvasWidth * .2 : canvasWidth * (.8 + Math.random() * .2);
                    }
                    emberContext.beginPath();
                    emberContext.fillStyle = `rgba(226, 171, 74, ${ember.alpha})`;
                    emberContext.shadowBlur = 10;
                    emberContext.shadowColor = '#e4a83f';
                    emberContext.arc(ember.x, ember.y, ember.radius, 0, Math.PI * 2);
                    emberContext.fill();
                });
                requestAnimationFrame(drawEmbers);
            };

            resizeEmbers();
            window.addEventListener('resize', resizeEmbers);
            drawEmbers();
        }

        let ambientAudio;
        let typingSoundClock = 0;
        let musicVolume = .72;

        const playTypingSound = () => {
            if (!ambientAudio || ambientAudio.audio.paused) return;
            const now = performance.now();
            if (now - typingSoundClock < 85) return;
            typingSoundClock = now;
        };

        soundToggle.addEventListener('click', () => {
            if (!ambientAudio) {
                const audio = new Audio('images/music/background.mp3');
                audio.loop = true;
                audio.preload = 'auto';
                audio.volume = 0;
                ambientAudio = { audio };
            }

            const isEnabled = soundToggle.getAttribute('aria-pressed') === 'true';
            const targetVolume = isEnabled ? 0 : musicVolume;
            ambientAudio.audio.volume = targetVolume;
            if (isEnabled) ambientAudio.audio.pause();
            const playback = isEnabled ? Promise.resolve() : ambientAudio.audio.play();
            playback.catch(() => {
                soundLabel.textContent = 'CLICK TO PLAY MUSIC';
                soundToggle.setAttribute('aria-pressed', 'false');
            });
            soundToggle.setAttribute('aria-pressed', String(!isEnabled));
            soundLabel.textContent = isEnabled ? 'MUSIC OFF' : 'ANCIENT MUSIC ON';
        });

        const updateVolume = change => {
            musicVolume = Math.max(0, Math.min(1, Math.round((musicVolume + change) * 20) / 20));
            volumeLevel.textContent = `${Math.round(musicVolume * 100)}%`;
            volumeLevel.setAttribute('aria-label', `Music volume ${Math.round(musicVolume * 100)} percent`);
            if (ambientAudio) ambientAudio.audio.volume = soundToggle.getAttribute('aria-pressed') === 'true' ? musicVolume : 0;
        };
        volumeDown.addEventListener('click', () => updateVolume(-.1));
        volumeUp.addEventListener('click', () => updateVolume(.1));

        if (!reduceMotion && window.matchMedia('(pointer: fine)').matches) {
            let frame;
            hero.addEventListener('pointermove', event => {
                cancelAnimationFrame(frame);
                frame = requestAnimationFrame(() => {
                    const bounds = hero.getBoundingClientRect();
                    const x = (event.clientX - bounds.left) / bounds.width;
                    const y = (event.clientY - bounds.top) / bounds.height;
                    hero.style.setProperty('--pointer-x', `${x * 100}%`);
                    hero.style.setProperty('--pointer-y', `${y * 100}%`);
                });
            });
            model.addEventListener('pointerenter', () => model.classList.add('model-hover'));
            model.addEventListener('pointerleave', () => model.classList.remove('model-hover'));
        }

        document.querySelectorAll('.btn, .skill-card, .project-card, .socials a').forEach(element => {
            element.addEventListener('pointerenter', () => {
                if (!reduceMotion) element.classList.add('is-hovered');
            });
            element.addEventListener('pointermove', event => {
                if (reduceMotion || !window.matchMedia('(pointer: fine)').matches) return;
                const bounds = element.getBoundingClientRect();
                const x = (event.clientX - bounds.left) / bounds.width - .5;
                const y = (event.clientY - bounds.top) / bounds.height - .5;
                element.style.setProperty('--card-x', `${y * -7}deg`);
                element.style.setProperty('--card-y', `${x * 7}deg`);
            });
            element.addEventListener('pointerleave', () => {
                element.classList.remove('is-hovered');
                element.style.setProperty('--card-x', '0deg');
                element.style.setProperty('--card-y', '0deg');
            });
        });

        const obs = new IntersectionObserver(entries => entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                e.target.querySelectorAll('.typewriter-target').forEach(startTyping);
                obs.unobserve(e.target)
            }
        }), {
            threshold: .12
        });
        document.querySelectorAll('.reveal').forEach((el, index) => {
            const siblingIndex = Array.from(el.parentElement.children).indexOf(el);
            el.dataset.stagger = 'true';
            el.style.setProperty('--stagger-delay', `${Math.min(siblingIndex * 70, 350)}ms`);
            obs.observe(el);
        });

        const typewriterSelectors = [
            '.section-no',
            '.section-title',
            '.about-copy p',
            '.skills .skill-card h3',
            '.skills .skill-card p',
            '.project-content h3',
            '.project-content p',
            '.project-content a',
            '.contact p'
        ];
        document.querySelectorAll(typewriterSelectors.join(',')).forEach(element => {
            element.classList.add('typewriter-target');
        });

        function startTyping(element) {
            if (element.dataset.typed === 'true' || !element.textContent.trim()) return;
            element.dataset.typed = 'true';
            const textNodes = [];
            const walker = document.createTreeWalker(element, NodeFilter.SHOW_TEXT);
            while (walker.nextNode()) {
                if (walker.currentNode.textContent.trim()) textNodes.push(walker.currentNode);
            }
            const textData = textNodes.map(node => ({ node, text: node.textContent }));
            textNodes.forEach(node => { node.textContent = ''; });
            element.classList.add('typing');
            let nodeIndex = 0;
            let characterIndex = 0;
            const typeNext = () => {
                if (nodeIndex >= textData.length) {
                    element.classList.remove('typing');
                    return;
                }
                const current = textData[nodeIndex];
                current.node.textContent += current.text[characterIndex];
                playTypingSound();
                characterIndex++;
                if (characterIndex >= current.text.length) {
                    nodeIndex++;
                    characterIndex = 0;
                }
                window.setTimeout(typeNext, current.text[characterIndex - 1] === ' ' ? 32 : 52);
            };
            typeNext();
        }

        const sectionLinks = new Map(Array.from(links.querySelectorAll('a')).map(link => [
            document.querySelector(link.getAttribute('href')),
            link
        ]));
        const sectionObserver = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                sectionLinks.forEach(link => link.classList.remove('active'));
                sectionLinks.get(entry.target)?.classList.add('active');
            });
        }, { rootMargin: '-35% 0px -55% 0px' });
        sectionLinks.forEach((link, section) => section && sectionObserver.observe(section));
    </script>
</body>

</html>