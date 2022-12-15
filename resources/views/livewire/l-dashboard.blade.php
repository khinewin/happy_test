
<div>
    <div class="container-fluid">
       <div class="row">
        <div class="col-sm-2">
            @include('partials.sidebar')
        </div>
        <div class="col-sm-10 shadow" style="height: 100vh">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Dashboard</h2>
                    <hr>
                    <h5>Welcome : {{Auth::user()->name}}</h5>
                </div>
            </div>
        </div>
       </div>
    </div>
</div>
