<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do List</title>

    @vite(['resources/css/app.css'])
</head>
<body>
    <header>
        <nav>
            <h1>My To Do List</h1>
            <a href="/todolist">Home</a>
            <a href="/todolist/create">Add New Task</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>