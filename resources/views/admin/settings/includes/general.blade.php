<div class="tile">
    <form action="{{ route('settings.update') }}" method="POST" role="form">
        @method('PUT')
        @csrf
        <h3 class="tile-title">General Settings</h3>
        <hr>
        <div class="tile-body">
            <div class="form-group">
                <label class="control-label" for="site_name">Site Name</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter site name"
                    id="site_name"
                    name="site_name"
                    value="{{ $siteSetting['site_name']->value }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="site_title">Site Title</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter site title"
                    id="site_title"
                    name="site_title"
                    value="{{ $siteSetting['site_title']->value }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="default_email_address">Default Email Address</label>
                <input
                    class="form-control"
                    type="email"
                    placeholder="Enter store default email address"
                    id="default_email_address"
                    name="default_email_address"
                    value="{{ $siteSetting['default_email_address']->value }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="currency_code">Currency Code</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter store currency code"
                    id="currency_code"
                    name="currency_code"
                    value="{{ $siteSetting['currency_code']->value }}"
                />
            </div>
            <div class="form-group">
                <label class="control-label" for="currency_symbol">Currency Symbol</label>
                <input
                    class="form-control"
                    type="text"
                    placeholder="Enter store currency symbol"
                    id="currency_symbol"
                    name="currency_symbol"
                    value="{{ $siteSetting['currency_symbol']->value }}"
                />
            </div>
        </div>
        <div class="tile-footer">
            <div class="row d-print-none mt-2">
                <div class="col-12 text-right">
                    <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Update Settings</button>
                </div>
            </div>
        </div>
    </form>
</div>