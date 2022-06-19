<!-- </section> -->
<!-- </div> -->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer class="footer mt-6 ">
    <div class=" flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 ">
      <div class="flex items-center justify-start space-x-3 ">
        <div>
          <strong>© 2022, CEMRS.copyright<strong>
        </div>
          <a style="height: 20px">
          <img src="https://img.shields.io/github/v/release/justboil/admin-one-tailwind?color=%23999">
        </a>
      </div>

      </a>
    </div>
  </footer>
   <section>
  <nav  class="navbar is-fixed-top">
    <div class="navbar-brand">
      <a class="navbar-item mobile-aside-button">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
      <div class="navbar-item">
        <section class="is-hero-bar">
          <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
            <h2 class="title">
              <strong> Welcome To Reception Dashboard</strong> 
            </h2>
          </div>
        </section>
      </div>
    </div>
    <div class="flex">
          <div class="flex flex-row mr-2 mt-4 w-24 h-10">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
      </div> 



@livewireScripts
</body>
</html>
