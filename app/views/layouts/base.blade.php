
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wholesale Wireless Services</title>

        <!-- Bootstrap -->
        {{ HTML::style('css/bootstrap.min.css') }}

        <!-- Optional theme -->
        {{ HTML::style('css/bootstrap-theme.min.css') }}

        <!-- Bootstrap Documentation theme -->
        {{ HTML::style('css/docs.min.css') }}

        <!-- Own BRS theme -->
        {{ HTML::style('css/brs.css') }}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="bs-docs-home" data-spy="scroll" data-target="#myScrollspy">
        <a class="sr-only sr-only-focusable" href="#content">Skip to main content</a>
        <!-- Docs master nav -->
        <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="/urs/wws/" class="navbar-brand">WWS</a>
                </div>
                <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                    <ul class="nav navbar-nav">
                        <li><a href="/urs/wws/general-information/">General Information</a></li>
                        <li><a href="/urs/wws/business-rules/">Business Rules</a></li>
                        <li><a href="/urs/wws/fulfillment/">Fulfillment</a></li>
                        <li><a href="/urs/wws/billing/">Billing</a></li>
                        <li><a href="/urs/wws/assurance/">Assurance</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/urs/wws/reporting/">Reporting</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="bs-docs-header" id="content">
            <div class="container">
                <h1>Business Rules</h1>
                <p>Business Model and Target Customers for the Product and Product Offering details.</p>
            </div>
        </div>

        <div class="container bs-docs-container">
            <div class="row">
                <div class="col-md-9" role="main">
                    @yield('docs')
                </div>        

                <div class="col-md-3" role="complementary" id="myScrollspy">
                    <div class="bs-docs-sidebar hidden-print hidden-xs hidden-sm" data-spy="affix" data-offset-top="307" role="complementary">

                        <ul class="nav bs-docs-sidenav" >

                            <li><a href="#business-model">Business Model</a></li>

                            <li><a href="#package-offering">Package Offering</a>
                                <ul class="nav">
                                    <li><a href="#product-types">Product Types</a></li>
                                    <li><a href="#product-elements">Product Elements</a></li>
                                </ul>
                            </li>

                            <li><a href="#pricing">Pricing</a>
                                <ul class="nav">
                                    <li><a href="#pricing-table-generic">Pricing Table - Generic </a></li>
                                    <li><a href="#pricing-table-customer">Pricing Table - Customer</a></li>
                                </ul>
                            </li>

                            <li><a href="#charging-elements">Charging Elements</a>
                                <ul class="nav">
                                    <li><a href="#one-time-charge">One-Time Charge</a></li>
                                    <li><a href="#monthly-recurring-charge">Monthly Recurring Charge</a></li>
                                </ul>
                            </li>

                            <li><a href="#others">Others</a>
                                <ul class="nav">
                                    <li><a href="#taxation">Taxation</a></li>
                                    <li><a href="#early-termination-penalty">Early Termination Penalty</a></li>
                                    <li><a href="#contract-terms">Contract Terms</a></li>
                                    <li><a href="#service-level-agreement">Service Level Agreement</a></li>
                                </ul>
                            </li>

                        </ul>
                        <a class="back-to-top" href="#top">Back to top</a>
                    </div>



                </div>
            </div>
        </div>


        <footer class="bs-docs-footer" role="contentinfo">
            <div class="container">

                <p>Wholesale Wireless Access is curently under development stage, managed by <a href="mailto:jazilah@tm.com.my">Jazilah Othman</a></p>
                <p>This documentation is prepared by Management System &amp; Support, Global &amp; Wholesale</p>

                <ul class="bs-docs-footer-links muted">
                    <li>Currently v1.10</li>
                    <li>·</li>
                    <li><a href="/urs/wws/general-information/">General Information</a></li>
                    <li>·</li>
                    <li><a href="/urs/wws/business-rules/">Business Rules</a></li>
                    <li>·</li>
                    <li><a href="/urs/wws/fulfillment/">Fulfillment</a></li>
                    <li>·</li>
                    <li><a href="/urs/wws/billing/">Billing</a></li>
                    <li>·</li>
                    <li><a href="/urs/wws/assurance/">Assurance</a></li>
                    <li>·</li>
                    <li><a href="/urs/wws/reporting/">Reporting</a></li>
                </ul>
            </div>
        </footer>        

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('js/bootstrap.min.js'); }}

    </body>
</html>