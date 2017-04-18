<nav class="navbar navbar-inverse">
  <div class="container-fluid container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand text-s2" href="{{route('index')}}">{{config('app.name')}}</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <span class="nav-icon ion ion-android-notifications">
            <i class="badge">5</i>
          </span>

          </a>
          <ul class="dropdown-menu nav-list-menu" role="menu">
            <li>
              <a href="#">
                  <span class="ion ion-lightbulb text-warning"></span> 
                  <b>Lorem ipsum dolor sit amet</b>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <i>3 min ago</i>
              </a>
            </li>
            <li>
              <a href="#">
                  <span class="ion ion-leaf text-success"></span> 
                  <b>Lorem ipsum dolor sit amet</b>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <i>3 min ago</i>
              </a>
            </li>
            <li>
              <a href="#">
                  <span class="ion ion-bug text-danger"></span> 
                  <b>Lorem ipsum dolor sit amet</b>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua.</p>
                  <i>3 min ago</i>
              </a>
            </li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
          <img src="{{ asset('layouts/v1/img/profile/user2.png') }}" class="nav-img">
          User fullname <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#"><i class="ion ion-person"></i> &nbsp; Profile</a></li>
            <li><a href="#"><i class="ion ion-radio-waves"></i> &nbsp; Activity Log</a></li> 
            <li class="divider"></li>
            <li><a href="#"><i class="ion ion-gear-b"></i> &nbsp; Settings</a></li>
            <li><a href="#"><i class="ion ion-nuclear"></i> &nbsp; Security</a></li>
            <li class="divider"></li>
            <li><a href="#"><i class="ion ion-power"></i> &nbsp; Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>