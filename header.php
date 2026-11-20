<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crispy JNath Chips</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --white: #fbfbfb;
            --sand: #e6d98b;
            --tan: #a79160;
            --brown: #836740;
            --dark: #614f29;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Manrope', sans-serif;
            background: var(--white);
            color: var(--dark);
            margin: 0;
            line-height: 1.6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
            margin: 0 0 10px;
        }

        a {
            color: var(--brown);
        }

        .container {
            max-width: 960px;
            margin: auto;
            padding-left: 24px;
            padding-right: 24px;
        }

        .site-header {
            background: var(--dark);
            color: var(--white);
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
        }

        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 700;
        }

        .nav a {
            color: var(--white);
            text-decoration: none;
            margin-left: 24px;
        }

        .hero {
            background: var(--sand);
            padding: 72px 0;
            text-align: center;
        }

        .hero h1 {
            font-size: 52px;
            line-height: 1.1;
        }

        .hero p {
            font-size: 20px;
            margin: 0 0 24px;
        }

        .button, button {
            display: inline-block;
            background: var(--brown);
            color: var(--white);
            border: none;
            padding: 12px 28px;
            font-family: inherit;
            font-size: 16px;
            font-weight: 700;
            text-decoration: none;
            cursor: pointer;
        }

        section {
            padding: 48px 0 0;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            border: 1px solid var(--tan);
            padding: 20px;
        }

        .card h3 {
            border-bottom: 1px solid var(--sand);
            padding-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 6px 0;
        }

        td:last-child {
            text-align: right;
        }

        .total td {
            border-top: 1px solid var(--tan);
            font-weight: 700;
            color: var(--brown);
        }

        form {
            max-width: 560px;
        }

        label {
            display: block;
            font-weight: 700;
        }

        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 6px 0 18px;
            border: 1px solid var(--tan);
            background: var(--white);
            color: var(--dark);
            font-family: inherit;
            font-size: 16px;
        }

        .receipt {
            border: 1px solid var(--tan);
            padding: 24px;
            max-width: 560px;
            margin: 0 auto;
        }

        .error {
            color: #8a2b1f;
            font-weight: 700;
        }

        footer {
            background: var(--dark);
            color: var(--white);
            text-align: center;
            padding: 20px 0;
            margin-top: 64px;
        }

        footer p {
            margin: 0;
        }

        @media (max-width: 600px) {
            .hero h1 {
                font-size: 38px;
            }
        }
    </style>
</head>
<body>
<header class="site-header">
    <div class="nav container">
        <span class="brand"><a href="index.php#home">Crispy JNath Chips</a></span>
        <nav>
            <a href="index.php#home">Home</a>
            <a href="index.php#chips">Chips</a>
            <a href="index.php#order">Order</a>
        </nav>
    </div>
</header>
<main>