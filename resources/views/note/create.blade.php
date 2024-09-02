<x-app-layout>
   <div class="flex justify-center items-center flex-col">
   <div class="flex flex-row gap-x-6 items-center">
      <h1>Create a new note</h1>

   <a href="{{route('note.index')}}" class="p-2 bg-gray-300 rounded-lg"> back bro</a>
</div>
   <form method="POST" action="{{ route('note.store') }}">
      @csrf      
      <div class="note-item">
         <label for="note">Content</label>
         <textarea name="note" id="content"></textarea>
         <div class="note-btn-container">
            <button type="submit">Create note</button>
         </div>
      </div>
     

   </div>
</x-app-layout>
