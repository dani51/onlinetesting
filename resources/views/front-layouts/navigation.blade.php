<div class="main-sidebar-nav dark-navigation">
    <div class="nano">
        <div class="nano-content sidebar-nav">

            <div class="card-body border-bottom text-center nav-profile">
{{--                <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>--}}
                <img alt="profile" class="margin-b-10  " src="assets/img/avtar-2.png" width="80">
                <p class="lead margin-b-0 toggle-none"> <span class="hidden-xs">{!! Auth::user()->name !!}</span></p>
                <p class="text-muted mv-0 toggle-none">Welcome</p>
            </div>

            <ul class="metisMenu nav flex-column" id="menu">

                <li class="nav-item  active">
                    <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-th-large"></i> <span class="toggle-none">Menu<span class="fa arrow"></span></span></a>
                    <ul class="nav-second-level nav flex-column " aria-expanded="false">
                        <li class="nav-item"><a class="nav-link" href="/user-subjects">Subjects</a></li>
                        <li class="nav-item"><a class="nav-link" href="/user-results">Results</a></li>
                    </ul>
                </li>


            </ul>
        </div>
    </div>
</div>
