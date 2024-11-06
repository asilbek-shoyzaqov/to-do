<?php

$taskCount = \App\Models\Task::count();

?>

<section class="section">
    <div class="row ">
        <!-- Users -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <a href="{{ route ('admin.my-tasks.index') }}">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">All Tasks</h5>
                                        <h2 class="mb-3 font-18">{{ $taskCount }}</h2>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 pl-0 text-right">
                                    <div class="banner-img">
                                        <i data-feather="briefcase" class="icon-lg text-violet"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>

    </div>
</section>

