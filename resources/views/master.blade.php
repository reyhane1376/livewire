<html>

<head>
    <livewire:styles />
</head>

<body>
    <h3>Livewire Website</h3>
    {{-- @livewire('header') --}}
    <livewire:header :article="$article">
        <livewire:scripts />
</body>

</html>