<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body>
    <header class="w-4/5 mx-auto">
        <flux:navbar>
            <flux:navbar.item href="/">Home</flux:navbar.item>
            <flux:navbar.item href="/aanbod">Aanbod</flux:navbar.item>
            <flux:navbar.item href="/recent">Recent</flux:navbar.item>
        </flux:navbar>
    </header>
    <main class="w-4/5 mx-auto">
        {{ $slot }}
    </main>
    <footer></footer>

</body>

</html>
