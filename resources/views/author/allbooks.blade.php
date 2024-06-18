<div>
    <!-- Nothing in life is to be feared, it is only to be understood. Now is the time to understand more, so that we may fear less. - Marie Curie -->
    <h1>Books of: {{ $author->name }}</h1>
    <hr>
    <table>
        <tr>
            <th>ISBN</th>
            <th>Book Title</th>
        </tr>
    @foreach ($books as $book) 
        <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
        </tr>
    @endforeach
    </table>
</div>
