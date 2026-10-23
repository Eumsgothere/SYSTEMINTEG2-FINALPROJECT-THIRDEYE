<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Floe Consumer Goods Trading'; ?></title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f3f4f6;
        }

        .hero-gradient {
            background: linear-gradient(135deg,
                    #1e3a8a,
                    #1e40af,
                    #2563eb);
        }

        .card-hover {
            transition: 0.3s;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #1e3a8a;
            color: white;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #1d4ed8;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 3rem;
        }
    </style>
</head>