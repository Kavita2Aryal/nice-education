
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item {{ active_class(['admin/v1']) }}">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
          <i class="ti-palette menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

      <li class="nav-item {{ active_class(['admin/manage-website'])}} {{active_class(['admin/manage-homepage-banner'])}}">
          <a class="nav-link" data-toggle="collapse" href="#settings"  aria-controls="basic-ui">

              <i class="ti-settings menu-icon"></i>
              <span class="menu-title"> Settings</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/manage-website'])}} {{ show_class(['admin/manage-homepage-banner'])}} " id="settings">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['admin/manage-website']) }}">
                      <a class="nav-link" href="{{ route('manageWebsite') }}">Manage Website</a>
                  </li>

                  <li class="nav-item {{ active_class(['admin/manage-homepage-banner']) }}">
                      <a class="nav-link" href="{{ route('manageBanner') }}">Homepage Banner</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['admin/page*'])}}">
          <a class="nav-link" data-toggle="collapse" href="#pages" aria-expanded="false" aria-controls="pages">
              <i class="icon-notebook menu-icon"></i>
              <span class="menu-title"> Page</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/page*'])}}" id="pages">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['admin/page']) }}">
                      <a class="nav-link" href="{{ route('page.index') }}">Manage Pages</a>
                  </li>
                  <li class="nav-item {{ active_class(['admin/page/create']) }}">
                      <a class="nav-link" href="{{ route('page.create') }}">Add Page</a>
                  </li>
              </ul>
          </div>
      </li>

      <li class="nav-item {{ active_class(['admin/service*'])}} {{ active_class(['admin/manage-how-it-work*'])}} {{ active_class(['admin/document-required*'])}} {{ active_class(['admin/manage-visa-acceptance-content*'])}}">
          <a class="nav-link" data-toggle="collapse" href="#services" aria-expanded="{{ (request()->is('admin/service*')) ? 'true' : 'false' }}" aria-controls="services">

              <i class=" icon-list menu-icon"></i>
              <span class="menu-title"> Service</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/service*'])}} {{ show_class(['admin/manage-how-it-work*'])}} {{ show_class(['admin/document-required*'])}} {{ show_class(['admin/manage-visa-acceptance-content*'])}}" id="services">
              <ul class="nav flex-column sub-menu">
                  <li class="{{ (request()->is('admin/service')) ? 'nav-item active' : 'nav-item' }}">
                      <a class="nav-link" href="{{ route('service.index') }}">Manage Services</a>
                  </li>

                  <li class="{{ \Illuminate\Support\Facades\Request::is('admin/service/create') ? 'nav-item active' : 'nav-item' }}">
                      <a class="nav-link" href="{{ route('service.create') }}">Add Service</a>
                  </li>
                  <li class="{{ \Illuminate\Support\Facades\Request::is('admin/service/create') ? 'nav-item active' : 'nav-item' }}">
                      <a class="nav-link" href="{{ route('howItWork') }}">How It Works</a>
                  </li>
                  <li class="{{ \Illuminate\Support\Facades\Request::is('admin/service/create') ? 'nav-item active' : 'nav-item' }}">
                      <a class="nav-link" href="{{ route('document-required.index') }}">Document Required</a>
                  </li>

                  <li class="{{ \Illuminate\Support\Facades\Request::is('admin/service/create') ? 'nav-item active' : 'nav-item' }}">
                      <a class="nav-link" href="{{ route('manageVisaAcceptanceContent') }}">Visa Service Content</a>
                  </li>
              </ul>
          </div>
      </li>


    <!--------------  Study In Country ------------------------------------------------------------>
      <li class="nav-item {{ active_class(['admin/study-abroad*','admin/course'])}}">
          <a class="nav-link" data-toggle="collapse" href="#countries" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">

              <i class="icon-book-open menu-icon"></i>
              <span class="menu-title"> Study Abroad</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/study-abroad*','admin/course']) }}" id="countries">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['admin/study-abroad']) }}">
                      <a class="nav-link" href="{{ route('study-abroad.index') }}">Manage Country</a>
                  </li>

                  <li class="nav-item {{ active_class(['admin/study-abroad/create']) }}">
                      <a class="nav-link" href="{{ route('study-abroad.create') }}">Add Country</a>
                  </li>

                  <li class="nav-item {{ active_class(['admin/course']) }}">
                      <a class="nav-link" href="{{ route('course.index') }}">Manage Course</a>
                  </li>
              </ul>
          </div>
      </li>

      <!------------   Test Preparation --------------------------------------------------------------->
      <li class="nav-item {{ active_class(['admin/test-preparation*'])}}">
          <a class="nav-link" data-toggle="collapse" href="#test" aria-expanded="false" aria-controls="">

              <i class="icon-note menu-icon"></i>
              <span class="menu-title"> Test Preparation</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/test-preparation*']) }}" id="test">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['admin/test-preparation/create']) }}">
                      <a class="nav-link " href="{{ route('test-preparation.index') }}">Manage Test</a>
                  </li>

                  <li class="nav-item {{ active_class(['admin/test-preparation']) }}">
                      <a class="nav-link " href="{{ route('test-preparation.create') }}">Add Test</a>
                  </li>
              </ul>
          </div>
      </li>


      <!--------------- NEWS & NOTICE ----------------------------------->
{{--      <li class="nav-item {{ active_class(['basic-ui/*']) }}">--}}
{{--          <a class="nav-link" data-toggle="collapse" href="#news" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">--}}

{{--              <i class="icon-docs menu-icon"></i>--}}
{{--              <span class="menu-title"> News/Notices</span>--}}
{{--              <i class="menu-arrow"></i>--}}
{{--          </a>--}}
{{--          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="news">--}}
{{--              <ul class="nav flex-column sub-menu">--}}
{{--                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">--}}
{{--                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage News/Notices</a>--}}
{{--                  </li>--}}

{{--                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">--}}
{{--                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Add News/Notices</a>--}}
{{--                  </li>--}}
{{--              </ul>--}}
{{--          </div>--}}
{{--      </li>--}}


        <!----------------- GALLERY ---------------------------->
{{--      <li class="nav-item {{ active_class(['basic-ui/*']) }}">--}}
{{--          <a class="nav-link" data-toggle="collapse" href="#gallery" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">--}}

{{--              <i class="icon-picture menu-icon"></i>--}}
{{--              <span class="menu-title"> Gallery</span>--}}
{{--              <i class="menu-arrow"></i>--}}
{{--          </a>--}}
{{--          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="gallery">--}}
{{--              <ul class="nav flex-column sub-menu">--}}
{{--                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">--}}
{{--                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage Galleries</a>--}}
{{--                  </li>--}}

{{--                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">--}}
{{--                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Add Gallery</a>--}}
{{--                  </li>--}}
{{--              </ul>--}}
{{--          </div>--}}
{{--      </li>--}}

      <!------------- COLLEGE AND UNIVERSITIES ------>
      <li class="nav-item {{ active_class(['admin/university*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#college" aria-expanded="{{ is_active_route(['admin/university*']) }}" aria-controls="basic-ui">

              <i class="icon-graduation menu-icon"></i>
              <span class="menu-title ">University</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/university*']) }}" id="college">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['admin/university']) }}">
                      <a class="nav-link" href="{{ route('university.index') }}">Manage University</a>
                  </li>

                  <li class="nav-item {{ active_class(['admin/university/create']) }}">
                      <a class="nav-link" href="{{ route('university.create') }}">Add University</a>
                  </li>
              </ul>
          </div>
      </li>

    <!----------------------- MESSAGE ------------------------------------------------->
      <li class="nav-item {{ active_class(['admin/enquiry']) }}">
          <a class="nav-link" href="{{ route('enquiry.index') }}">
              <i class="icon-speech menu-icon"></i>
              <span class="menu-title">Messages</span>

          </a>
      </li>

    <!----------------------- TEAM ------------------------------------------------->

      <li class="nav-item {{ active_class(['admin/team*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#testimonials" aria-expanded="{{ is_active_route(['admin/team*']) }}" aria-controls="basic-ui">

              <i class="icon-people menu-icon"></i>
              <span class="menu-title"> Team</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/team*']) }}" id="testimonials">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['admin/team']) }}">
                      <a class="nav-link" href="{{route('team.index')}}">Manage Team</a>
                  </li>

                  <li class="nav-item {{ active_class(['admin/team/create']) }}">
                      <a class="nav-link" href="{{ route('team.create')}}">Add Team</a>
                  </li>
              </ul>
          </div>
      </li>

    <!--------------- TESTIMONIAL ---------------------------------------------------------->
{{--      <li class="nav-item {{ active_class(['basic-ui/*']) }}">--}}
{{--          <a class="nav-link" data-toggle="collapse" href="#testimonials" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">--}}

{{--              <i class="icon-emotsmile menu-icon"></i>--}}
{{--              <span class="menu-title"> Testimonial</span>--}}
{{--              <i class="menu-arrow"></i>--}}
{{--          </a>--}}
{{--          <div class="collapse {{ show_class(['basic-ui/*']) }}" id="testimonials">--}}
{{--              <ul class="nav flex-column sub-menu">--}}
{{--                  <li class="nav-item {{ active_class(['basic-ui/accordions']) }}">--}}
{{--                      <a class="nav-link" href="{{ url('/basic-ui/accordions') }}">Manage Testimonial</a>--}}
{{--                  </li>--}}

{{--                  <li class="nav-item {{ active_class(['basic-ui/progress-bar']) }}">--}}
{{--                      <a class="nav-link" href="{{ url('/basic-ui/progress-bar') }}">Add Testimonial</a>--}}
{{--                  </li>--}}
{{--              </ul>--}}
{{--          </div>--}}
{{--      </li>--}}

      <!-----------------  Recent Visa Acceptance -------------------------------------------->
      <li class="nav-item {{ active_class(['admin/visa-acceptance*']) }}">
          <a class="nav-link" data-toggle="collapse" href="#visa" aria-expanded="{{ is_active_route(['admin/visa-acceptance*']) }}" aria-controls="basic-ui">

              <i class="icon-layers menu-icon"></i>
              <span class="menu-title">Visa Approved</span>
              <i class="menu-arrow"></i>
          </a>
          <div class="collapse {{ show_class(['admin/visa-acceptance*']) }}" id="visa">
              <ul class="nav flex-column sub-menu">
                  <li class="nav-item {{ active_class(['admin/visa-acceptance']) }}">
                      <a class="nav-link" href="{{ route('visa-acceptance.index') }}" style="font-size: 14px">Visa Approved</a>
                  </li>

                  <li class="nav-item {{ active_class(['admin/visa-acceptance/create']) }}">
                      <a class="nav-link" href="{{ route('visa-acceptance.create') }}" style="font-size: 14px">Add Visa Approved</a>
                  </li>
              </ul>
          </div>
      </li>

  </ul>
</nav>
