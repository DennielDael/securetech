@extends('layouts.admin')

@section('content')
<div class="container-fluid">



        <div class="card">
          
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Services List') }}
                </h6>
                <div class="ml-auto">
                    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New service') }}</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover datatable datatable-services" cellspacing="0" width="100%">
                        <thead>
                            <tr>    
                                    <th>no</th>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>specification_description</th>

                                    <th>unit_price</th>
                                    <th>price</th>
                                    <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $service)
                                <tr> 
                                    <td>{{$service->id }}</td>
                                    <td>{{$service->service_name }}</td>
                                    <td>{{$service->code_name }}</td>
                                    <td>{{$service->specification_description }}</td>
                                    <td>{{$service->unit_price }}</td>
                                    <td>{{$service->price }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-info">
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
  $('.datatable-services:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})
</script>
@endpush

