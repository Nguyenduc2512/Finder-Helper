<div class="widget">
    <div class="tree_widget-sec">
        @if(Auth::user()->rules == $gender['user_type_finder'])
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="{{ route('user.profile') }}" title=""><i class="far fa-user"></i>@lang('messages.profile')</a>
                </li>
                <li class="active">
                    <a href="{{ route('user.edit-profile') }}"><i class="far fa-edit"></i>Sửa Thông Tin Cá Nhân</a>
                </li>
                <li>
                    <a href="{{route('user.history')}}" title=""><i class="fas fa-clipboard-list"></i></i>Quản lí công việc</a>
                </li>
                <li>
                    <a href="{{ route('user.post-create') }}" title=""><i class="fas fa-notes-medical"></i>&nbsp;@lang('messages.newPost')</a>
                </li>
                <li>
                    <a href="" title=""><i class="fas fa-history"></i>&nbsp;@lang('messages.history')</a>
                </li>
                <li>
                    <a href="{{ route('user.coin') }}"><i class="fas fa-coins"></i>&nbsp;@lang('messages.addCoin')</a>
                </li>
                <li>
                    <a href="{{ route('user.change-password') }}" title=""><i class="fas fa-key"></i>&nbsp;@lang('messages.changePassword')</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" title=""><i class="fas fa-sign-out-alt"></i>&nbsp;@lang('messages.logout')</a>
                </li>
            </ul>
        @else
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="{{ route('user.profile') }}" title=""><i class="far fa-user"></i>@lang('messages.profile')</a>
                </li>
                <li class="active">
                    <a href="{{ route('user.edit-profile') }}"><i class="far fa-edit"></i>Sửa Thông Tin Cá Nhân</a>
                </li>
                <li>
                    <a href="{{route('user.history')}}" title=""><i class="fas fa-clipboard-list"></i></i>Quản lí công việc</a>
                </li>
                <li>
                    <a href="{{route('user.history')}}" title=""><i class="fas fa-history"></i>&nbsp;@lang('messages.history')</a>
                </li>
                <li>
                    <a href="{{ route('user.coin') }}"><i class="fas fa-coins"></i>Rút tiền</a>
                </li>
                <li>
                    <a href="{{ route('user.change-password') }}" title=""><i class="fas fa-key"></i>&nbsp;@lang('messages.changePassword')</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" title=""><i class="fas fa-sign-out-alt"></i>&nbsp;@lang('messages.logout')</a>
                </li>
            </ul>
        @endif
    </div>
</div>
