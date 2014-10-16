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

    <span class="help-block">Premium and/or Basic Sites</span>
    <div class="form-group">
        <label>Site Category</label>
        <div class="checkbox disabled">
            <label>
                <input type="checkbox" value="" checked>
                Premium
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                Basic
            </label>
        </div>
    </div>

    <span class="help-block">Site Capacity</span>
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Minimum AP Number per Site</label>
                <input type="text" class="form-control" value="50" placeholder="Minimum AP Number per Site">
            </div>
        </div>
        <div class="col-xs-6">   
            <div class="form-group">
                <label>Minimum Total Bandwidth per Site</label>
                <div class="input-group">
                    <input type="text" class="form-control" value="100" placeholder="Minimum Total Bandwidth per Site">
                    <span class="input-group-addon">Mbps</span>
                </div>
            </div>
        </div>
    </div>

    <span class="help-block">AP Names</span>
    <div class="row">
        <div class="col-xs-6">
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


    <span class="help-block">AP Capacity</span>
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Minimum Concurrent Users per AP</label>
                <input type="text" class="form-control" value="20" placeholder="Minimum Concurrent Users per AP">
            </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
                <label>Minimum Associated Users per AP</label>
                <input type="text" class="form-control" value="20" placeholder="Minimum Concurrent Users per AP">
            </div>
        </div>
    </div>



    <span class="help-block">SSID</span>
    <div class="form-group">
        <label>Existing SSID in AP</label>
        <div class="checkbox disabled">
            <label>
                <input type="checkbox" value="" checked disabled>
                tmwifi
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                maxis
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                celcom
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
                digi
            </label>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-4">
            <div class="form-group">
                <label>Minimum Available SSID Port per AP</label>
                <input type="text" class="form-control" value="1" placeholder="Minimum Available SSID Port per AP">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-default">Search</button>
</form>