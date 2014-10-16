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
                    <option>Kuala Lumpur</option>
                    <option>Bangsar</option>
                    <option>Petaling Jaya</option>
                    <option>Damansara Utama</option>
                </select>
            </div>
        </div>

    </div>
    
    <div class="row">
        <div class="col-xs-6">
            <div class="form-group">
                <label>Sites</label>
                <textarea class="form-control" rows="10">
Midvalley
Plaza Pantai
Plaza UOA
KLCC           
                </textarea>
            </div>
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
    
    <div class="form-group">
        <label>Site Category</label>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="" checked>
                Blank
            </label>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="">
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





    <button type="submit" class="btn btn-default">Search</button>
</form>