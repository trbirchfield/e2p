<nav class="sidebar">
	<ul class="nav-sidebar" role="navigation">
		<li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
		<li class="{{ Request::is('admin/announcements') ? 'active' : '' }}"><a href="{{ route('admin.announcements') }}">Homepage Announcements</a></li>
		<li class="{{ Request::is('admin/widgets') ? 'active' : '' }}"><a href="{{ route('admin.widgets') }}">Widgets</a></li>
	</ul>
</nav>
