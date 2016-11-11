<ul class="nav nav-sidebar">
  <li class="{{ activeUri('', 2) }}"><a href="{{ route('admin.index') }}">Dashboard</a></li>
</ul>

<ul class="nav nav-sidebar">
  <li class="{{ activeUri('burgers', 2) }}"><a href="{{ route('admin.burgers') }}">Burgers</a></li>
</ul>

<ul class="nav nav-sidebar">
  <li class="{{ activeUri('users', 2) }}"><a href="{{ route('admin.users') }}">Users</a></li>
  <li class="{{ activeUri('roles', 2) }}"><a href="{{ route('admin.roles') }}">Roles</a></li>
  <li class="{{ activeUri('permissions', 2) }}"><a href="{{ route('admin.permissions') }}">Permissions</a></li>
</ul>
