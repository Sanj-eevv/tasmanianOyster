<a href="{{ route('dashboard.stories.show', $r->id) }}" class="btn btn-sm btn-icon btn-light-facebook" title="{{ __('Show') }}"><i class="fas fa-eye"></i></a>
<a href="{{ route('dashboard.stories.edit', $r->id) }}" class="btn btn-sm btn-icon btn-light-twitter" title="{{ __('Edit') }}"><i class="fas fa-pencil-alt"></i></a>
<button class="btn btn-icon btn-light-youtube btn-sm ml-1p" onclick="confirmDelete(() => {deleteDatatableRecord('storiesDatatable', {{$r->id}}, '{{route('dashboard.stories.destroy',$r->id)}}')})"  title="{{ __('Destroy') }}"><i class="fas fa-trash"></i></button>
