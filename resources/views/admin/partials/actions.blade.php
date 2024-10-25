<button type="button" class="btn bg-gradient-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Actions
</button>
<ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item border-radius-md" href="{{ route('admin.' . $name . '.edit', $id) }}">Edit</a></li>
    <li>
        <form action="{{ route('admin.' . $name . '.destroy', $id) }}" method="POST">
            @csrf
            @method('delete')
            <button
                type="submit"
                class="dropdown-item border-radius-md"
            >
                Delete
            </button>
        </form>
    </li>
</ul>
