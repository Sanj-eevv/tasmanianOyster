<a href="{{ route('dashboard.orders.show', $r->id) }}" class="btn btn-sm btn-icon btn-light-facebook" title="{{ __('Show') }}"><i class="fas fa-eye"></i></a>
<button class="btn btn-icon btn-light-youtube btn-sm ml-1p" onclick="confirmDelete(() => {deleteDatatableRecord('orderDatatable', {{$r->id}}, '{{route('dashboard.orders.destroy',$r->id)}}')})"  title="{{ __('Destroy') }}"><i class="fas fa-trash"></i></button>