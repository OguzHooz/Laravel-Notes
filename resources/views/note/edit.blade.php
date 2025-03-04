<x-app-layout>
    <div class="note-container single-note">
        <h1 class="text-3xl py-4">Edit Your Note</h1>
        <form action="{{ route('note.update', $note) }}" method="post" class="note">
            @csrf
            @method('put')
            <textarea name="note" rows="10" class="note-body" placeholder="Enter Your Note Here">
                {{ $note->note }}
            </textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
