<head>

    ...

    @livewireStyles

</head>

<body>
    <?php 
        $preguntas =[
            [
                'id' => 1,
                'pregunta' => 'uno'
            ],
            [
                'id'=> 2,
                'pregunta' => 'dos'
             ]
        ];
    ?>
    <ul wire:sortable="updatePreguntaOrder">
        @foreach ($preguntas as $pregunta)
            <li wire:sortable.item="{{ $pregunta['id']}}" wire:key="pregunta-{{ $pregunta['id'] }}">
                <h4 wire:sortable.handle>{{ $pregunta['pregunta'] }}</h4>
            </li>
        @endforeach
    </ul>

 

    ...

 

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
</body>

</html>