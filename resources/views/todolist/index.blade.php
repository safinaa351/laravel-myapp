<x-layout>
    <h2>Welcome Back</h2>

    <ul>
        @foreach($todolist as $task)
            <li>
                <p>{{ $task['name'] }}</p>
                <a href="/todolist/ {{ $task['id']}}">View Details</a>
            </li>
        @endforeach
    </ul>
</x-layout>
