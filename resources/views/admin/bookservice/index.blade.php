@extends('layouts.admin')

@section('content')




        <div class="card">
          
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Request Booking List') }}
                </h6>
                <!-- <div class="ml-auto">
                    <a href="#" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New service') }}</span>
                    </a>
                </div> -->
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-bookservice" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>phone</th>
                                <th>email</th>
                                <th>address</th>
                                <th width="150px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($bookingform as $bookingforms)
                                <tr>
                                    <td>{{ $bookingforms->id }}</td>
                                    <td>{{ $bookingforms->fullname }}</td>
                                    <td>{{ $bookingforms->phone }}</td>
                                    <td>{{ $bookingforms->email }}</td>
                                    <td>{{ $bookingforms->address }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="" class="btn btn-info">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr> 
                            @endforeach   
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

@push('script-alt')
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  let deleteButtonTrans = ''
  let deleteButton = {
    text: deleteButtonTrans,
    url: "",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });
      if (ids.length === 0) {
        alert('zero selected')
        return
      }
      if (confirm('are you sure ?')) {
        $.ajax({
          headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
 
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'asc' ]],
    pageLength: 50,
  });
  $('.datatable-bookservice:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush