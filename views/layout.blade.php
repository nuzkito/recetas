<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: hsl(153, 43%, 42%);
            --bg: #fafafa;
            --card-bg: #fff;
            --text: #333;
            --accent: #e0e0e0;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, var(--primary) 0%, white 120%);
            color: var(--text);
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }

        .wrapper {
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
        }

        header {
            text-align: center;
            padding: 2rem 1.5rem;
            color: white;
        }

        header h1 {
            margin: 0;
            font-weight: 600;
            font-size: 2.5rem;
            letter-spacing: -1px;
        }

        .content {
            display: flex;
            flex-direction: column;
            padding: 2rem 1.5rem;
            background: var(--bg);
            box-shadow: 0 10px 30px rgba(0, 0, 0, .1);
            overflow: hidden;
        }

        h2 {
            font-size: 1.25rem;
            margin-top: 0;
            color: var(--primary);
            border-left: 4px solid var(--primary);
            padding-left: .5rem;
            margin-bottom: 1rem;
        }

        ul,
        ol {
            list-style: none;
            padding-left: 0;
            margin: 0 0 2rem 0;
        }

        ul li {
            position: relative;
            border-left: 4px solid transparent;
            padding-left: 1.5rem;
            padding-right: 1.2rem;
            margin-bottom: .75rem;
            line-height: 1.5;
        }

        ul li::before {
            content: "•";
            position: absolute;
            left: .5rem;
            color: var(--primary);
            font-size: 1.3rem;
            top: -2px;
        }

        ol li {
            counter-increment: item;
            position: relative;
            border-left: 4px solid transparent;
            padding-left: .5rem;
            padding-right: .5rem;
            margin-bottom: .75rem;
            line-height: 1.5;
        }

        ol li::before {
            content: none;
        }

        ol li::after {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background: var(--accent);
            margin-top: .4rem;
        }

        ol li:last-child::after {
            content: none;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        @yield('content')
    </div>
</body>
</html>
