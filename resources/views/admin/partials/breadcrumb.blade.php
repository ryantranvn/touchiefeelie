<div class="container-fluid">
    <div class="row">
        <ol class="breadcrumb">
            <li>
                <a href="{{ url('admin/dashboard') }}">
                    <i class="material-icons">home</i>
                </a>
            </li>

            @if ($action == 'index')
                <li class="active">
                    @if (strtolower($controller) == 'scheduledorder')
                        Scheduled Order
                    @else
                        {{ ucfirst(trans('lang.'.$controller)) }}
                    @endif  
                </li>
            @else
                <li>
                    <a class="controller" href="{{ url('/'.ADMIN.'/'.$controller) }}">{{ ucfirst(trans('lang.'.$controller)) }}</a>
                </li>
            @endif

            @if ($action != 'index')
                <li class="active">
                    {{ ucfirst(trans('lang.'.$action)) }}
                </li>
            @endif
        </ol>
    </div>
</div>