<div class="card mb-3" style="max-width: 100%;">
    <div class="card-header">
        <h4>Dashborad</h4>
    </div>
    <div class="card-body">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="fas fa-list"></i>&nbsp; @lang('messages.listPost')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="fas fa-notes-medical"></i>&nbsp; @lang('messages.newPost')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="{{ route('user.profile') }}">
                    <i class="far fa-id-card"></i></i>&nbsp; @lang('messages.profile')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="fas fa-history"></i>&nbsp; @lang('messages.history')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="fas fa-key"></i>&nbsp; @lang('messages.changePassword')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="fas fa-dollar-sign"></i>&nbsp; @lang('messages.addCoin')
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="#">
                    <i class="fas fa-sign-out-alt"></i>&nbsp; @lang('messages.logout')
                </a>
            </li>
        </ul>
    </div>
</div>
