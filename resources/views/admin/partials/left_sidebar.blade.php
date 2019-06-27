<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="animated sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">
                    MAIN NAVIGATION
                </li>
                <li @if ($controller == "dashboard") class="active" @endif>
                    <a href="{{ url('admin/dashboard') }}">
                        <i class="material-icons">home</i>
                        <span>{{ trans('lang.dashboard') }}</span>
                    </a>
                </li>
                <li @if ($controller == "customer") class="active" @endif>
                    <a href="{{ url('admin/customer') }}">
                        <i class="material-icons">person</i>
                        <span>{{ trans('lang.customer') }}</span>
                    </a>
                </li>
                <li @if ($controller == "subscribe") class="active" @endif>
                    <a href="{{ url('admin/subscribe') }}">
                        <i class="material-icons">account_box</i>
                        <span>{{ trans('lang.subscribe') }}</span>
                    </a>
                </li>
                <li @if ($controller == "blog") class="active" @endif>
                    <a href="{{ url('admin/blog') }}">
                        <i class="material-icons">library_books</i>
                        <span>{{ trans('lang.blog') }}</span>
                    </a>
                </li>
                <li @if ($controller == "news") class="active" @endif>
                    <a href="{{ url('admin/news') }}">
                        <i class="material-icons">event_note</i>
                        <span>{{ trans('lang.news') }}</span>
                    </a>
                </li>
                <li @if ($controller == "calendar") class="active" @endif>
                    <a href="{{ url('admin/calendar') }}">
                        <i class="material-icons">calendar_today</i>
                        <span>{{ trans('lang.calendar') }}</span>
                    </a>
                </li>
                <li @if ($controller == "library") class="active" @endif>
                    <a href="{{ url('admin/library') }}">
                        <i class="material-icons">library_books</i>
                        <span>{{ trans('lang.library') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2018 - 2019 <a href="javascript:void(0);">Design by Admin BSB.</a>
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>