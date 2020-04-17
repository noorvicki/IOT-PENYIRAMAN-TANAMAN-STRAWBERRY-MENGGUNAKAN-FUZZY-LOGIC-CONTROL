<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="/dashboard"><i class="fa fa-edit"></i><span>Dashboard</span></a>
</li>
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>
<li class="{{ Request::is('sensors*') ? 'active' : '' }}">
    <a href="{{ route('sensors.index') }}"><i class="fa fa-edit"></i><span>Sensors</span></a>
</li>

