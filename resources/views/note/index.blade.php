<x-app-layout>

<a href="{{route('note.create')}}" class="bg-gray-200 rounded-lg p-2" >New Note</a>
<div class="note-container">
    
@foreach ($notes as $note)
    <div class="note-item">
        <div >
            {{Str::words($note->note,30)}}
        </div>
        <div class="note-btn-container">
            <a href="{{route('note.show',$note)}}">View</a>
            <a href="{{route('note.edit',$note)}}">Edit</a>
            <form action="{{route('note.destroy',$note)}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit">Delete</button>

            </form>
        </div>

        

    </div>


@endforeach

</div>
{{$notes->links()}}



</x-app-layout>
