<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achlys' Bookstore – Mood Board</title>
    <link rel="shortcut icon" type="image/png" href="/assets/book_icon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@400;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto Slab", serif;
        }

        body {
            background-color: #ffffffff;
            color: #3c2f2f;
            padding: 40px 80px;
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            text-align: left;
            font-family: "Righteous", sans-serif;
            font-size: 2.4em;
            color: #3c2f2f;
            margin-bottom: 6px;
        }

        p.subtitle {
            color: #6c5c4c;
            font-size: 1.05em;
            margin-bottom: 40px;
        }

        section {
            margin-bottom: 70px;
        }

        h2 {
            font-family: "Righteous", sans-serif;
            font-size: 1.4em;
            color: #3c2f2f;
            margin-bottom: 18px;
        }

        .color-system {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 60px;
            text-align: center;
            padding: 20px 0;
        }

        .color-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .color-block {
            width: 220px;
            height: 65px;
            border-radius: 8px;
        }

        .color-codes {
            font-size: 1em;
            color: #5a4b41;
            margin-top: 6px;
        }

        .color-label {
            font-weight: 600;
            font-size: 1.05em;
            color: #3c2f2f;
        }

        .color-role {
            font-size: 0.9em;
            color: #6b5c51;
        }

        .typography {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            gap: 60px;
            text-align: left;
        }

        .heading-font {
            font-family: "Righteous", sans-serif;
            font-size: 1.6em;
            color: #8b7e74;
        }

        .body-font {
            max-width: 480px;
            font-size: 1em;
            color: #3c2f2f;
            line-height: 1.6;
        }

        .button-set {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
        }

        .btn-group {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 8px 20px;
            border-radius: 6px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.95em;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .light button,
        .dark-mode button {
            transition: all 0.25s ease;
            cursor: pointer;
        }

        .light .primary {
            background: #8b7e74;
            color: #fff;
        }

        .light .primary:hover {
            background: #776b63;
            transform: scale(1.05);
        }

        .light .secondary {
            background: #c7bbb0;
            color: #3c2f2f;
        }

        .light .secondary:hover {
            background: #b3a698;
            transform: scale(1.05);
        }

        .light .border {
            background: transparent;
            border: 2px solid #8b7e74;
            color: #8b7e74;
        }

        .light .border:hover {
            background: #8b7e74;
            color: #fff;
            transform: scale(1.05);
        }

        .light .disabled {
            background: #ccc;
            color: #999;
            cursor: not-allowed;
        }

        .light .disabled:hover {
            transform: none;
            opacity: 0.9;
        }

        .dark-mode {
            background: #3c2f2f;
            padding: 20px 40px;
            border-radius: 8px;
        }

        .dark-mode .primary {
            background: #8b7e74;
            color: #fff;
        }

        .dark-mode .primary:hover {
            background: #a99d92;
            transform: scale(1.05);
        }

        .dark-mode .secondary {
            background: #a99d92;
            color: #fff;
        }

        .dark-mode .secondary:hover {
            background: #c7bbb0;
            color: #3c2f2f;
            transform: scale(1.05);
        }

        .dark-mode .border {
            background: transparent;
            border: 2px solid #c7bbb0;
            color: #c7bbb0;
        }

        .dark-mode .border:hover {
            background: #c7bbb0;
            color: #3c2f2f;
            transform: scale(1.05);
        }

        .dark-mode .disabled {
            background: #666;
            color: #bbb;
            cursor: not-allowed;
        }

        .dark-mode .disabled:hover {
            transform: none;
            opacity: 0.9;
        }


        .btn-label {
            font-weight: 600;
            margin-top: 8px;
            color: #5a4b41;
        }

        .cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 25px;
        }

        .card {
            background: #fff;
            border: 1px solid #d9d4ce;
            border-radius: 8px;
            padding: 25px;
            width: 320px;
            text-align: left;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .card h3 {
            color: #8b7e74;
            margin-bottom: 10px;
            font-family: "Righteous", sans-serif;
            font-size: 1.1em;
        }

        .card p {
            color: #3c2f2f;
            margin-bottom: 10px;
        }

        .card a {
            color: #8b7e74;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9em;
        }

        .card a:hover {
            text-decoration: underline;
        }

        blockquote {
            font-style: italic;
            color: #3c2f2f;
            margin-bottom: 10px;
        }

        .logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 60px;
            flex-wrap: wrap;
            padding-top: 20px;
        }

        .logo-box {
            background: #fff;
            border: 1px solid #d9d4ce;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            width: 250px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .logo-box img {
            width: 120px;
            height: 120px;
            margin-bottom: 10px;
            object-fit: contain;
        }

        .logo-box.square img {
            border-radius: 0%;
        }

        .logo-label {
            color: #3c2f2f;
            font-size: 0.95em;
            font-weight: 500;
        }

        .centered {
            text-align: center;
        }

        hr {
            border: none;
            border-top: 1px solid #ddd;
            margin: 40px 0;
        }
    </style>
</head>

<body>
    <h1>Achlys’ Bookstore Moodboard</h1>
    <p class="subtitle">Visual identity guide for Achlys Bookstore</p>

    <!-- COLOR SYSTEM -->
    <section>
        <h2>Color System</h2>
        <p class="subtitle" style="margin-bottom: 25px;">Three main color themes with three vibrance levels each.</p>
        <div class="color-system">
            <div class="color-column">
                <div class="color-block" style="background-color:#8B7E74;"></div>
                <div class="color-block" style="background-color:#A99D92;"></div>
                <div class="color-block" style="background-color:#C7BBB0;"></div>
                <p class="color-codes">#8B7E74 — #A99D92 — #C7BBB0</p>
                <p class="color-label">Neutral Brown <span class="color-role">(Main Accent)</span></p>
            </div>

            <div class="color-column">
                <div class="color-block" style="background-color:#F5F0EC;"></div>
                <div class="color-block" style="background-color:#E8E1DB;"></div>
                <div class="color-block" style="background-color:#DAD3CC;"></div>
                <p class="color-codes">#F5F0EC — #E8E1DB — #DAD3CC</p>
                <p class="color-label">Soft Beige <span class="color-role">(Background)</span></p>
            </div>

            <div class="color-column">
                <div class="color-block" style="background-color:#333333;"></div>
                <div class="color-block" style="background-color:#555555;"></div>
                <div class="color-block" style="background-color:#777777;"></div>
                <p class="color-codes">#333333 — #555555 — #777777</p>
                <p class="color-label">Charcoal Gray <span class="color-role">(Text)</span></p>
            </div>
        </div>
    </section>

    <!-- TYPOGRAPHY -->
    <section>
        <h2>Typography</h2>
        <div class="typography">
            <div>
                <p class="heading-font">Heading font<br>Righteous — Heading Example</p>
            </div>
            <div>
                <p class="body-font">Body font<br>Roboto Slab — Example text that demonstrates readable copy for longer paragraphs in Achlys Bookstore materials.</p>
            </div>
        </div>
    </section>

    <!-- BUTTONS -->
    <section class="centered">
        <h2>Buttons</h2>
        <div class="button-set light">
            <div class="btn-label">Light Mode</div>
            <div class="btn-group">
                <button class="btn primary">Primary</button>
                <button class="btn secondary">Secondary</button>
                <button class="btn border">Border</button>
                <button class="btn disabled" disabled>Disabled</button>
            </div>

            <div class="btn-label">Dark Mode</div>
            <div class="dark-mode">
                <div class="btn-group">
                    <button class="btn primary">Primary</button>
                    <button class="btn secondary">Secondary</button>
                    <button class="btn border">Border</button>
                    <button class="btn disabled" disabled>Disabled</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CARDS -->
    <section>
        <h2>Card Samples</h2>
        <div class="cards">
            <div class="card">
                <h3>1,254</h3>
                <p>Books Sold</p>
                <a href="#">Read more</a>
            </div>

            <div class="card">
                <h3>Premium Collection</h3>
                <p>Limited edition hand-picked books for collectors.</p>
                <a href="#">Read more</a>
            </div>

            <div class="card">
                <blockquote>“A cozy place for every book lover.”</blockquote>
                <p>— Loyal Customer</p>
                <a href="#">Read more</a>
            </div>
        </div>
    </section>

    <!-- LOGOS -->
    <section class="centered">
        <h2>Logos</h2>
        <div class="logos">
            <div class="logo-box">
                <img src="/assets/circle_logo.png" alt="Achlys Circle Logo">
                <p class="logo-label">Main — Circle</p>
            </div>
            <div class="logo-box square">
                <img src="/assets/square_logo.png" alt="Achlys Square Logo">
                <p class="logo-label">Main — Square</p>
            </div>
        </div>
    </section>

</body>

</html>