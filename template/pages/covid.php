<div class="col-12 col-sm-12  pt-5">

    <div class="row">
        <div class="col-12 col-sm-6">
            <div class="card text-white text-center mb-3">
                <h4 class="card-header bg-primary">Covid Tracker +</h4>
                <span class="card-body text-dark m-2 py-1 text-left ">
                    อัพเดทข้อมูลล่าสุด :
                    <h4 id="update_date"></h4>

                </span>
            </div>
        </div>

        <div class="col-12 col-sm-6">
            <div class="card text-white  ">
                <div class="card-body bg-warning py-4">
                    <div class="row no-gutters align-items-center text-left">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">New Cases</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h1 mb-0 mr-3 font-weight-bold " id="new_case"></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-bell fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-sm-4">
            <div class="card  mb-2">
                <div class="card-body bg-success p-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">total recovered
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h4 mb-0 mr-3 font-weight-bold text-white" id="total_recovered">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-child fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-sm-4">
            <div class="card mb-2">
                <div class="card-body bg-primary  p-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white  text-uppercase mb-1">total Cases</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h4 mb-0 mr-3 font-weight-bold text-white" id="total_case"></div>
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" hidden id="new_recovered">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-12 col-sm-4">
            <div class="card  mb-2">
                <div class="card-body bg-danger  p-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">total death</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h4 mb-0 mr-3 font-weight-bold text-white" id="total_death"></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-bed fa-2x text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="col-12 col-sm-12 text-right py-5">
        <span class=" text-dark ">Data from
            <a href="https://covid19.ddc.moph.go.th/">DDC OPEN DATA</a>
        </span>
    </div>
</div>

</div>