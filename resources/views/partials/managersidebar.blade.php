<div class="list-group">
  <a href="{{ route('users.index') }}" class="list-group-item {{ activeUri('users', 1) }}">Users</a>
  <a href="{{ route('roles.index') }}" class="list-group-item {{ activeUri('roles', 1) }}">Roles</a>
  <a href="{{ route('permissions.index') }}" class="list-group-item {{ activeUri('permissions', 1) }}">Permissions</a>
</div>
