
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ active_class(['/']) }}">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="ti-palette menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

      <li class="nav-item {{ active_class(['basic-ui/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">

              <i class="ti-settings menu-icon"></i>
              <span class="menu-title"> Settings</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="settings">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage Website</a>
                  </li>

                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Slider</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['admin/page/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#page" aria-expanded="{{ is_active_route(['admin/page/*']) }}" aria-controls="basic-ui">

              <i class="icon-notebook menu-icon"></i>
              <span class="menu-title"> Page</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/page*']) }}" id="page">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ (request()->is('admin/page')) ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('page.index') }}">Manage Pages</a>
                  </li>

                  <li class="nav-item {{ (request()->is('admin/page/create')) ? 'active' : '' }}">
                      <a class="nav-link" href="{{ route('page.create') }}">Add Page</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['admin/service/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#services" aria-expanded="{{ is_active_route(['admin/service/*']) }}" aria-controls="basic-ui">

              <i class=" icon-list menu-icon"></i>
              <span class="menu-title"> Service</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/service/*']) }}" id="services">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['admin/service']) }}">
                      <a class="nav-link" href="{{ route('service.index') }}">Manage Services</a>
                  </li>

                  <li class="nav-item {{ active_class(['admin/service/create']) }}">
                      <a class="nav-link" href="{{ route('service.create') }}">Add Service</a>
                  </li>
              </ul>
          </div>
      </li>


      <li class="nav-item {{ active_class(['basic-ui/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#countries" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">

              <i class="icon-book-open menu-icon"></i>
              <span class="menu-title"> Study In Country</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="countries">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage Country</a>
                  </li>

                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Add Country</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['admin/test-preparation/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#test" aria-expanded="{{ is_active_route(['admin/test-preparation/*']) }}" aria-controls="basic-ui">

              <i class="icon-note menu-icon"></i>
              <span class="menu-title"> Test Preparation</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/test-preparation/*']) }}" id="test">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['admin/test-preparation']) }}">
                      <a class="nav-link" href="{{ route('test-preparation.index') }}">Manage Test</a>
                  </li>

                  <li class="nav-item {{ active_class(['admin/test-preparation/create']) }}">
                      <a class="nav-link" href="{{ route('test-preparation.create') }}">Add Test</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['basic-ui/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#news" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">

              <i class="icon-docs menu-icon"></i>
              <span class="menu-title"> News/Notices</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="news">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage News/Notices</a>
                  </li>

                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Add News/Notices</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['basic-ui/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">

              <i class="icon-picture menu-icon"></i>
              <span class="menu-title"> Gallery</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="gallery">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage Galleries</a>
                  </li>

                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Add Gallery</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['basic-ui/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#college" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">

              <i class="icon-graduation menu-icon"></i>
              <span class="menu-title "> College/University</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="college">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage College/University</a>
                  </li>

                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Add College/University</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item">
          <a class="nav-link" href="{{ route('admin.dashboard') }}">
              <i class="icon-speech menu-icon"></i>
              <span class="menu-title">Messages</span>

          </a>
      </li>

      <li class="nav-item {{ active_class(['basic-ui/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#testimonials" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">

              <i class="icon-people menu-icon"></i>
              <span class="menu-title"> Team</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="testimonials">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage Team</a>
                  </li>

                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Add Team</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['basic-ui/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#testimonials" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">

              <i class="icon-emotsmile menu-icon"></i>
              <span class="menu-title"> Testimonial</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="testimonials">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage Testimonial</a>
                  </li>

                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Add Testimonial</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['basic-ui/*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#visa" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">

              <i class="icon-layers menu-icon"></i>
              <span class="menu-title"> Recent Visa Acceptance</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="visa">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}" style="font-size: 14px">Recent Visa Acceptance</a>
                  </li>

                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">
                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}" style="font-size: 14px">Add Visa Acceptance</a>
                  </li>
              </ul>
          </div>
      </li>

  </ul>
</nav>
