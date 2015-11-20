<nav class="sidebar">
	<ul class="nav-sidebar" role="navigation">
		<li class="{{ Request::is('admin') ? 'active' : '' }}"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
		<li class="{{ Request::is('admin/announcements') ? 'active' : '' }}"><a href="{{ route('admin.announcements') }}">Homepage Announcements</a></li>
		<li class="treeview{{ ((Request::segment(2) == 'faqcategories') or (Request::segment(2) == 'faqs')) ? ' active' : '' }}">
			<a href="#">FAQs</a>
			<ul>
				<li class="{{ (Request::segment(2) == 'faqs') ? 'active' : '' }}"><a href="{{ route('admin.faqs') }}">FAQs</a></li>
				<li class="{{ (Request::segment(2) == 'faqcategories') ? 'active' : '' }}"><a href="{{ route('admin.faqcategories') }}">FAQ Categories</a></li>
			</ul>
		</li>
		<li class="{{ Request::is('admin/widgets') ? 'active' : '' }}"><a href="{{ route('admin.widgets') }}">Widgets</a></li>
	</ul>
</nav>
