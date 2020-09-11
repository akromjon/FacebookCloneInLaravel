<section>
    <div class="feature-photo">
        <figure><img style="width: 100%; height:300px;" src="{{Auth::user()->timeline_image}}" ></figure>
        <div class="container-fluid">
            <div class="row merged">
                <div class="col-lg-2 col-sm-3">
                    <div class="user-avatar">
                        <figure>
                            <img style="width: 100px;" src="{{Auth::user()->image}}">
                        </figure>
                    </div>
                </div>
                <div class="col-lg-10 col-sm-9">
                    <div class="timeline-info">
                        <ul>
                            <li class="admin-name">
                                <h5>{{Auth::user()->name}}</h5>
                            </li>
                            <li>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>