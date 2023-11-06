<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('favicon.svg') }}">
    <title>phpast.com - Generate and explore PHP syntax trees.</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=fira-code:500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased min-h-screen flex flex-col">
    <header class="max-w-7xl mx-auto px-6 md:px-8 py-8 flex items-center justify-between w-full">
        <a href="{{ route('index') }}" class="flex items-center gap-x-4">
            <img src="{{ asset('favicon.svg') }}" class="border border-neutral-300 rounded-lg w-12 h-12 hover:border-neutral-500 transition-colors duration-300 ease-in-out">

            <h1 class="text-lg font-medium">
                phpast.com
            </h1>
        </a>

        <nav class="flex items-center gap-x-8">
            <a href="https://github.com/sponsors/ryangjchandler" class="text-sm font-medium underline" target="_blank">
                Support development
            </a>

            <a href="https://github.com/ryangjchandler/phpast.com" target="_blank" title="GitHub">
                <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"><title>GitHub</title><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
            </a>
        </nav>
    </header>

    <main class="max-w-7xl mx-auto px-6 md:px-8 flex-1 w-full flex flex-col">
        {{ $slot }}
    </main>

    <footer class="py-4 px-6 md:px-8 text-xs font-mono">
        <p>
            Developed and maintained by <a href="https://ryangjchandler.co.uk" class="underline" target="_blank">Ryan Chandler</a>. Copyright &copy; {{ date('Y') }}.
        </p>
    </footer>
</body>

</html>
