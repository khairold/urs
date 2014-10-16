<form class="bs-example bs-example-form" role="form">

    <span class="help-block">Site Name and Location</span>
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label>State</label>
                <select class="form-control">
                    <option>Klang Valley</option>
                    <option>Johor</option>
                </select>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>City</label>
                <select class="form-control">
                    <option>Bangsar</option>
                    <option>Petaling Jaya</option>
                    <option>Damansara Utama</option>
                </select>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="form-group">
                <label>Site Name</label>
                <input type="text" class="form-control" value="Midvalley Megamall" placeholder="Site Name">
            </div>
        </div>
    </div>

    <p></p>
    <span class="help-block">Other Details</span>
    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label>AP Names</label>
                <textarea class="form-control" rows="10">
ap1
ap2
ap3
                </textarea>
            </div>
        </div>


    </div>

    <div>
        <span class="help-block">Date Range</span>
        <label>Date Range</label>
        <div class="row">
            <div class="col-xs-10">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#day2" role="tab" data-toggle="tab">Day</a></li>
                    <li><a href="#week2" role="tab" data-toggle="tab">Week</a></li>
                    <li><a href="#month2" role="tab" data-toggle="tab">Month</a></li>
                    <li><a href="#year2" role="tab" data-toggle="tab">Year</a></li>
                    <li><a href="#custom2" role="tab" data-toggle="tab">Custom</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="day2">
                        <p></p>
                        <div class="form-group col-xs-6">
                            <label>Day</label>
                            <input type="date" class="form-control" placeholder="Week">        
                        </div>

                    </div>
                    <div class="tab-pane" id="week2">
                        <p></p>
                        <div class="form-group col-xs-6">
                            <label>Week</label>
                            <input type="week" class="form-control" placeholder="Week">        
                        </div>
                    </div>
                    <div class="tab-pane" id="month2">
                        <p></p>
                        <div class="form-group col-xs-6">
                            <label>Month</label>
                            <input type="month" class="form-control" placeholder="Month">        
                        </div>
                    </div>
                    <div class="tab-pane" id="year2">
                        <p></p>
                        <div class="form-group col-xs-6">
                            <label>Year</label>
                            <input type="text" class="form-control" placeholder="Year">        
                        </div>
                    </div>
                    <div class="tab-pane" id="custom2">
                        <p></p>
                        <div class="row">
                            <div class="form-group col-xs-6">
                                <label>From</label>
                                <input type="date" class="form-control" placeholder="Day">
                            </div>
                            <div class="form-group col-xs-6">
                                <label>To</label>
                                <input type="date" class="form-control" placeholder="Day">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</form>