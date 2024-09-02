<x-app-layout>

    <a href="{{route('note.index')}}" class="bg-gray-300 p-3 rounded-lg">back</a>
    <div class="note-container">
    <div class="note-item-large">
        <p>{{$note->created_at}}</p>
        <p>{{ $note->note }}</p>
        <div class="note-btn-container">
            <a href="{{route('note.edit',$note)}}">Edit</a>
            <form action="{{route('note.destroy',$note)}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit">Delete</button>

            </form>

        </div>
    </div>
    <div>
    </div>
    </div>
</x-app-layout>
