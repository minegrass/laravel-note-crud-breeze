<x-app-layout>
    <div class="flex justify-center items-center flex-col">
   <a href="{{route('note.index')}}" class="bg-gray-300 p-3 rounded-lg">back</a>
   <div class="note-container">
   <div class="note-item single-note">
       
       <form action="{{ route('note.update', $note) }}" method="POST" class="note">
           @csrf
           @method('PUT')
           <textarea name="note" rows="10" class="note-body" placeholder="Enter your note here">{{ $note->note }}</textarea>
           <div class="note-btn-container">
               <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
               <button class="note-submit-button">Submit</button>
           </div>
       </form>
   </div></div></div>
</x-app-layout>