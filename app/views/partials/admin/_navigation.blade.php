<div class="admin-menu navbar-inverse clearfix">
	<div class="container">

    <ul class="nav">

    	@unless(Request::is('pages'))
	      <li>{{ link_to_route('pages.index', 'Index Pages') }}</li>

	      @unless(Request::is('pages/create') || Request::is('pages/*/edit'))
      		<li>{{ link_to_route('pages.edit', 'Edit Page', $page->id) }}</li>
      	@endunless
      @endunless

      @unless(Request::is('pages/create'))
	      <li>{{ link_to_route('pages.create', 'Add Page') }}</li>
	    @endunless

	    <li>{{ link_to_action('UsersController@logout', 'Logout') }}</li>
    </ul>

  </div>
</div>
