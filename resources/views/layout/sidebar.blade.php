<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="{{asset("assets")}}/dashboard/index.html" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="{{asset("assets")}}/images/logo_portrait_white.png" style="width:80%" class="img-fluid logo-lg" alt="logo" />
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label data-i18n="Main Menu">Main Menu</label>
        </li>
        <li class="pc-item">
          <a href="{{route('dashboard')}}" class="pc-link">
            <span class="pc-micon">
              <i class="ph ph-house-line"></i>
            </span>
            <span class="pc-mtext" data-i18n="Dashboard">Dashboard</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="{{route('scan')}}" class="pc-link">
            <span class="pc-micon">
              <i class="ph ph-house-line"></i>
            </span>
            <span class="pc-mtext" data-i18n="Scan">Scan</span>
          </a>
        </li>
         <li class="pc-item">
          <a href="{{route('chat')}}" class="pc-link">
            <span class="pc-micon">
              <i class="ph ph-house-line"></i>
            </span>
            <span class="pc-mtext" data-i18n="Chat Assistant">Chat Assistant</span>
          </a>
        </li>

        
      </ul>
    </div>
  </div>
</nav>