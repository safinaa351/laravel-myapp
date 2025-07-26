<x-layout>
    <h2>Welcome Back</h2>

    <ul>
        @foreach($mytasks as $task)
            <li>
                <x-card href="/todolist/{{ $task['id'] }}">
                    <h3>{{ $task['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
