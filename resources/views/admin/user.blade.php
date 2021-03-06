@extends('admin.layout.app')

@section('page_title', 'Users')

@section('content')
<div class="card">
    <div class="card-header">
      <h5 class="m-0">All Users</h5>
    </div>
    <div class="card-body table-responsive p-0 clear-fix">
      <div class="float-left pl-3">
        <form action="{{ route('admin-user') }}" method="get">
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
      <div class="float-right mt-3 mr-3">
        <button type="button" data-toggle="modal" data-target="#addItem" class="btn btn-primary" id="addUser">+ Add User</button>
      </div>
      <table class="table table-striped p-0">
        <thead>
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Username</th>
            <th>Phone</th>
            <th>Order Menu</th>
            <th>Villa</th>
            <th>Table</th>
            <th>MUA</th>
            <th>Attend</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $index => $item)
              <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->is_order === '1' ? 'Yes' : 'No' }}</td>
                <td>{{ $item->villa }}</td>
                <td>{{ $item->no_table != '-1' ? $item->no_table : '-' }}</td>
                <td>{{ $item->is_mua }}</td>
                <td>{{ $item->attend }}</td>
                <td>
                    <div class="btn-group">
                        <button type="button" data-toggle="modal" data-target="#updateItem" data-name="{{ $item->name }}" data-username="{{ $item->username }}" data-phone="{{ $item->phone }}" data-isorder="{{ $item->is_order }}" data-villa="{{ $item->villa }}" data-table="{{ $item->no_table }}" data-id="{{ $item->id }}" class="btn btn-sm text-primary" title="Edit">
                          <i class="fas fa-edit"></i>
                        </button>
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
        <form action="{{ route('admin-user') }}" method="get">
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
            <p class="col-sm m-0 pl-1">of {{ $totalItems - 1 }}</p>
          </div>
        </form>
      </div>
      <div class="float-right">
        {{ $users->withQueryString()->links() }}
      </div>
    </div>
  </div>
@endsection

@section('modal')
  <div class="modal fade" id="addItem">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form name="addItem" method="post">
          <div class="modal-body">
            @csrf
            <div class="form-group row">
              <label for="newName" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" id="newName">
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="newUsername" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="username" id="newUsername">
                  @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="newPhone" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="phone" id="newPhone">
                  @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2">Order Menu</label>
              <div class="col-sm-10 m-0 p-0">
                <select name="is_order" id="is_order">
                  <option value="1">Yes</option>
                  <option value="0">No</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2">Villa</label>
              <div class="col-sm-10 m-0 p-0">
                <select name="villa" id="villa">
                  <option value="">No Villa</option>
                  <option value="Villa Akira">Villa Akira</option>
                  <option value="Villa Bata Merah">Villa Bata Merah</option>
                  <option value="Villa Bata Putih">Villa Bata Putih</option>
                  <option value="Villa Batu Tua">Villa Batu Tua</option>
                  <option value="Villa Bumi Elok">Villa Bumi Elok</option>
                  <option value="Villa Bumi Elok Pondok 1">Villa Bumi Elok Pondok 1</option>
                  <option value="Villa Bumi Elok Pondok 2">Villa Bumi Elok Pondok 2</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="newNoTable" class="col-sm-2 col-form-label">No. Table</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" name="no_table" value="-1" id="newNoTable">
                  <span class="text-muted">Fill "-1" if doesn't have no. table</span>
                  @error('no_table')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <div class="modal fade" id="updateItem">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form name="updateItem" method="post">
          <div class="modal-body">
            @csrf
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name">
                  @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" name="username" id="username">
                  @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="phone" class="col-sm-2 col-form-label">Phone</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" name="phone" id="phone">
                  @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2">Order Menu</label>
              <div class="col-sm-10 m-0 p-0">
                <select name="is_order" id="is_order">
                  <option value="1" {{ old('is_order') === '1' ? 'selected' : null }}>Yes</option>
                  <option value="0" {{ old('is_order') === '0' ? 'selected' : null }}>No</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2">Villa</label>
              <div class="col-sm-10 m-0 p-0">
                <select name="villa" id="villa">
                  <option value="" {{ old('villa') === null ? 'selected' : null }}>No Villa</option>
                  <option value="Villa Akira" {{ old('villa') === 'Villa Akira' ? 'selected' : null }}>Villa Akira</option>
                  <option value="Villa Bata Merah" {{ old('villa') === 'Villa Bata Merah' ? 'selected' : null }}>Villa Bata Merah</option>
                  <option value="Villa Bata Putih" {{ old('villa') === 'Villa Bata Putih' ? 'selected' : null }}>Villa Bata Putih</option>
                  <option value="Villa Batu Tua" {{ old('villa') === 'Villa Batu Tua' ? 'selected' : null }}>Villa Batu Tua</option>
                  <option value="Villa Bumi Elok" {{ old('villa') === 'Villa Bumi Elok' ? 'selected' : null }}>Villa Bumi Elok</option>
                  <option value="Villa Bumi Elok Pondok 1" {{ old('villa') === 'Villa Bumi Elok Pondok 1' ? 'selected' : null }}>Villa Bumi Elok Pondok 1</option>
                  <option value="Villa Bumi Elok Pondok 2" {{ old('villa') === 'Villa Bumi Elok Pondok 2' ? 'selected' : null }}>Villa Bumi Elok Pondok 2</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="newNoTable" class="col-sm-2 col-form-label">No. Table</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control @error('no_table') is-invalid @enderror" name="no_table" value="{{ old('no_table') }}" id="no_table">
                  <span class="text-muted">Fill "-1" if doesn't have no. table</span>
                  @error('no_table')
                    <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

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
          <form name="deleteItem" class="delete-item" method="post">
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
      $('#addItem').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        let url = "{{ route('admin-user-store') }}"
        
        var modal = $(this)
        
        document.updateItem.action = get_action();

        function get_action() {
          return url;
        }
      })

      $('#updateItem').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var name = button.data('name')
        var username = button.data('username')
        var phone = button.data('phone')
        var isorder = button.data('isorder')
        var villa = button.data('villa')
        var table = button.data('table')
        var idItem = button.data('id')
        let url = "{{ route('admin-user-update', ['id' => ':id']) }}"
        url = url.replace(':id', idItem)
        
        var modal = $(this)
        modal.find('input#name').val(name)
        modal.find('input#username').val(username)
        modal.find('input#phone').val(phone)
        modal.find('input#no_table').val(table)
        modal.find('select#villa').val(villa)
        modal.find('select#is_order').val(isorder)
        
        document.updateItem.action = get_action();

        function get_action() {
          return url;
        }
      })

      $('#deleteItem').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var name = button.data('name')
        var idItem = button.data('id')
        let url = "{{ route('admin-user-delete', ['id' => ':id']) }}"
        url = url.replace(':id', idItem)
        
        var modal = $(this)
        modal.find('.modal-text').text('Are you sure delete user "' + name + '"?')
        
        document.deleteItem.action = get_action();

        function get_action() {
          return url;
        }
      })
    </script>
@endsection