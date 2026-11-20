<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Floe Consumer Goods Trading'; ?></title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

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
                    #8a1e1e,
                    #af1e1e,
                    #eb2525);
        }

        .card-hover {
            transition: 0.3s;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #8a1e1e;
            color: white;
            transition: 0.3s;
        }

        .btn-primary:hover {
            background-color: #d81d1d;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 3rem;
        }
    </style>
</head>