@extends('admin.layout.app')

@section('page_title', 'Comments')

@section('content')
<div class="card">
    <div class="card-header">
      <h5 class="m-0">All Comments</h5>
    </div>
    <div class="card-body table-responsive p-0 clear-fix">
      <div class="float-left pl-3">
        <form action="{{ route('admin-comment') }}" method="get">
          {{-- @csrf --}}
          <div class="form-group mt-4 row">
            <p class="col-sm m-0 pr-1">Sort by</p>
            <div class="col-sm m-0 p-0">
              <select name="sort" id="sort" onchange="this.form.submit()">
                <option value="asc" {{ $sort === 'asc' ? 'selected' : null }}>Ascending Name</option>
                <option value="desc" {{ $sort === 'desc' ? 'selected' : null }}>Descending Name</option>
              </select>
            </div>
          </div>
        </form>
      </div>
      <table class="table table-striped p-0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Comment</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($comments as $index => $item)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->content }}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" data-toggle="modal" data-target="#deleteItem" data-name="{{ $item->name }}" data-id="{{ $item->id }}" class="btn btn-sm text-danger" title="Delete">
                        <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-footer clearfix">
      <div class="float-left">
        <form action="{{ route('admin-comment') }}" method="get">
          {{-- @csrf --}}
          <div class="form-group row">
            <p class="col-sm m-0 pr-1">Show</p>
            <div class="col-sm m-0 p-0">
              <select name="perPage" id="perPage" onchange="this.form.submit()">
                <option value="10" {{ $ppg === 10 ? 'selected' : null }}>10</option>
                <option value="20" {{ $ppg === 20 ? 'selected' : null }}>20</option>
                <option value="30" {{ $ppg === 30 ? 'selected' : null }}>30</option>
                <option value="40" {{ $ppg === 40 ? 'selected' : null }}>40</option>
                <option value="{{ $totalItems }}" {{ $ppg === $totalItems ? 'selected' : null }}>All</option>
              </select>
            </div>
            <p class="col-sm m-0 pl-1">of {{ $totalItems }}</p>
          </div>
        </form>
      </div>
      <div class="float-right">
        {{ $comments->withQueryString()->links() }}
      </div>
    </div>
  </div>
@endsection

@section('modal')
  <div class="modal fade" id="deleteItem">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Delete Comment</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="modal-text"></p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <form name="deleteItem" class="delete-item">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
@endsection

@section('scripts')
    <script>
      $('#deleteItem').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var name = button.data('name')
        var idItem = button.data('id')
        let url = "{{ route('admin-comment-delete', ['id' => ':id']) }}"
        url = url.replace(':id', idItem)
        
        var modal = $(this)
        modal.find('.modal-text').text('Are you sure delete comment from "' + name + '"?')
        
        document.deleteItem.action = get_action();

        function get_action() {
          return url;
        }
      })
    </script>
@endsection