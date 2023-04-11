<div>
    <div class="container-fluid" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-3">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-list-ul"></i> MAIN MENU</h5>
                        <hr>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fas fa-tachometer-alt"></i> DASHBOARD</li>
                            <li class="list-group-item"><i class="fas fa-tags"></i> TAGS</li>
                            <li class="list-group-item"><i class="fas fa-folder"></i> CATEGORIES</li>
                            <li class="list-group-item"><i class="fas fa-book"></i> POSTS</li>
                            <livewire:admin.logout/>
                          </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card border-0 rounded shadow">
                    <div class="card-body">
                        <h5> <i class="fa fa-tachometer-alt"></i> DASHBOARD</h5>
                        <hr>
                        Selamat Datang <strong>{{ auth()->user()->name }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>