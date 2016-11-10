<div class="list-group">
  <a href="{{ route('users.index') }}" class="list-group-item {{ activeUri('users') }}">Users</a>
  <a href="{{ route('roles.index') }}" class="list-group-item {{ activeUri('roles') }}">Roles</a>
  <a href="{{ route('permissions.index') }}" class="list-group-item {{ activeUri('permissions') }}">Permissions</a>
</div>
