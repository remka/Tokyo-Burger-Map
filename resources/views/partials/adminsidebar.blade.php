<ul class="nav nav-sidebar">
  <li class="{{ activeUri('', 2) }}"><a href="{{ route('admin.index') }}">Dashboard</a></li>
</ul>

<ul class="nav nav-sidebar">
  <li class="{{ activeUri('users', 2) }}"><a href="{{ route('admin.users') }}">Users</a></li>
  <li><a href="#">Roles</a></li>
  <li><a href="#">Permissions</a></li>
</ul>
