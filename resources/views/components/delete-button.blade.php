  <form id="confirmDelete-{{ $id }}" action="{{ $href}}"
      method="POST" class="d-inline">
      @method('DELETE')
      @csrf
      <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete({{ $id }})">
          <i class="fe fe-trash-2 fa-2x"></i>
      </button>
  </form>
