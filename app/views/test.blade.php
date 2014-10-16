
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
                    <div class="bs-docs-section">
                        <div class="bs-docs-section">
                            <h1 id="business-model" class="page-header">Business Model</h1>
                            <p>Via WWS, TM is positioned as a neutral host providing shared wireless access to Service Providers.</p>
                            <p><strong>Target customers</strong>:</p>
                            <ol>
                                <li>
                                    <p>Mature Mobile Operators  <br />
                                        a. Requires secure and dedicated connectivity to their own network<br />
                                        b. Requires control on their own internet policy<br />
                                        c. High priority on WiFi footprint and quality of service</p>
                                </li>
                                <li>
                                    <p>New Mobile Operators/MVNO<br />
                                        a. Lower capital<br />
                                        b. Requires Faster Go-To-Market option<br />
                                        c. Requires total outsourcing  
                                    </p>
                                </li>
                            </ol>

                        </div>

                        <div class="bs-docs-section">
                            <h1 id="package-offering"class="page-header">Package Offering</h1>
                            <h3 id="product-types">Product Types</h3>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>SSID</th>
                                        <th>Internet</th>
                                        <th>AP Subsription</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Type 1</td>
                                        <td>Shared</td>
                                        <td>TM's</td>
                                        <td>All APs</td>
                                    </tr>
                                    <tr>
                                        <td>Type 2</td>
                                        <td>Dedicated</td>
                                        <td>TM's</td>
                                        <td>Selectable</td>
                                    </tr>
                                    <tr>
                                        <td>Type 3</td>
                                        <td>Dedicated</td>
                                        <td>Customers'</td>
                                        <td>Selectable</td>
                                    </tr>
                                </tbody>
                            </table>

                            <h3 id="product-elements">Product Elements</h3>
                            <table class="table table-striped table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Pre-requisite</th>
                                        <td>
                                            <ul>
                                                <li>Customer must ensure their own radius readiness for all WWS types.</li>
                                                <li>Customer must establish connectivity from SG to customer’s network <br />prior to subscription of WWS Type 3.</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>SSID</th>
                                        <td>
                                            <blockquote>
                                                <p>based on Product Type</p>
                                            </blockquote>
                                            <ul>
                                                <li>Shared</li>
                                                <li>Dedicated</li>
                                            </ul>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Internet Connectivity</th>
                                        <td>
                                            <blockquote>
                                                <p>based on Product Type</p>
                                            </blockquote>
                                            <ul>
                                                <li>TM's</li>
                                                <li>Customers'</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Access Point</th>
                                        <td>Shared amongst accross TM's LOB</td>
                                    </tr>
                                    <tr>
                                        <th>Bandwidth</th>
                                        <td>
                                            <blockquote>
                                                <p>Depends on network capability: FTTH / Ethernet / xDSL</p>
                                            </blockquote>
                                            <ul>
                                                <li>Shared</li>
                                                <li>Dedicated</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>User Throughput</th>
                                        <td>
                                            <blockquote>
                                                <p>Customer shall have control of users’ package</p>
                                            </blockquote>
                                            Varies and is offered at a max of 2Mbps per end user

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Customer's Responsibility</th>
                                        <td>
                                            <blockquote>
                                                <p>Integration between Customers' network and TM's Backed Server</p>
                                            </blockquote>
                                            <ul>
                                                <li>Landing Page</li>
                                                <li>User Management</li>
                                                <li>Authentication</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Value-added Service</th>
                                        <td>
                                            <ul>
                                                <li>EAP SIM seamless authentication</li>
                                                <li>Seamless roaming between APs</li>
                                                <li>Location based analytics</li>
                                                <li>Reporting </li>
                                                <li>Other features subject to testing</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Product Service Status</th>
                                        <td>
                                            <blockquote>
                                                <p>With different charging elements</p>
                                            </blockquote>
                                            <ul>
                                                <li>Trial</li>
                                                <li>Live</li>
                                            </ul>


                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Product Category</th>
                                        <td>Wireless Data</td>
                                    </tr>
                                    <tr>
                                        <th>Product Segment</th>
                                        <td>Global &amp; Wholesale</td>
                                    </tr>
                                    <tr>
                                        <th>Service Subscription Eligibility</th>
                                        <td>
                                            <ul>
                                                <li>Domestic Provider</li>
                                                <li>Global Provider (Roaming)</li>
                                            </ul>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>

                        <div class="bs-docs-section">
                            <h1 id="pricing" class="page-header">Pricing</h1>

                            <h3 id="pricing-table-generic">Pricing Table - Generic</h3>

                            <blockquote>
                                <p>
                                    Will be applied accross the Product to all WWS Customers.
                                </p>
                            </blockquote>

                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Type</th>
                                        <th>Service Status</th>
                                        <th>Rental</th>
                                        <th>Usage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Type 1</td>
                                        <td>Trial</td>
                                        <td>Fixed</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Type 1</td>
                                        <td>Live</td>
                                        <td>Fixed</td>
                                        <td>Traffic Minutes</td>
                                    </tr>
                                    <tr>
                                        <td>Type 2</td>
                                        <td>Trial</td>
                                        <td>Per AP</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Type 2</td>
                                        <td>Live</td>
                                        <td>Per AP</td>
                                        <td>Volume Usage</td>
                                    </tr>
                                    <tr>
                                        <td>Type 3</td>
                                        <td>Trial</td>
                                        <td>Per AP</td>
                                        <td>N/A</td>
                                    </tr>
                                    <tr>
                                        <td>Type 3</td>
                                        <td>Live</td>
                                        <td>Per AP</td>
                                        <td>Volume Usage</td>
                                    </tr>
                                </tbody>
                            </table>




                            <h3 id="pricing-table-customer">Pricing Table - Customer</h3>

                            <blockquote>
                                <p>
                                    Are set per WWS Customer.
                                </p>
                            </blockquote>

                            <h4>AP Rental</h4>
                            <div class="bs-example">

                                <p><em>Type 1:</em></p>

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>AP Rental</th>
                                            <th>Rental for All APs (RM)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>All APs</td>
                                            <td>5000</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <blockquote>
                                    <p><em>Type 1</em> will have one static price for the rental of all APs.</p>
                                </blockquote>

                                <p><em>Type 2 &amp; Type 3:</em></p>

                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>AP Category</th>
                                            <th>Rental per AP (RM)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Premium</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>Basic</td>
                                            <td>70</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <blockquote>
                                    <p><em>Type 2</em> &amp; <em>Type 3</em> will have dynamic price for the rental, corresponding to the APs subscribed.</p>
                                </blockquote>

                            </div>
                            <h4>Traffic Minutes Table</h4>
                            <div class="bs-example">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Connected Minutes</th>
                                            <th>Charge per Minute (USD)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>&lt;= 22,500</td>
                                            <td>0.05</td>
                                        </tr>
                                        <tr>
                                            <td>&gt; 22,501 and &lt;= 60,000</td>
                                            <td>0.04</td>
                                        </tr>
                                        <tr>
                                            <td>&gt; 60,000</td>
                                            <td>0.03</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <h4>Volume Usage Table</h4>
                            <div class="bs-example">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Usage (TB)</th>
                                            <th>Charge per GB (RM)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>&lt;= 5TB</td>
                                            <td>25</td>
                                        </tr>
                                        <tr>
                                            <td>&gt; 5TB and &lt;= 10TB</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>&gt; 10TB and &lt;= 25TB</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>&gt; 25TB</td>
                                            <td>12.50</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="bs-docs-section">
                            <h1 id="charging-elements" class="page-header">Charging Elements</h1>

                            <h3 id="one-time-charge">One-Time Charge</h3>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>OTC</th>
                                        <th>Amount (RM)</th>
                                        <th>Trigger</th>
                                        <th>Formula</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Solution Design</td>
                                        <td></td>
                                        <td>Manual</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>Backend Configuration</td>
                                        <td></td>
                                        <td>Manual</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>Backend Integration</td>
                                        <td></td>
                                        <td>Manual</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>AP Configuration</td>
                                        <td></td>
                                        <td>Manual</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>AP Relocation</td>
                                        <td></td>
                                        <td>Manual</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>AP Termination</td>
                                        <td></td>
                                        <td>Automatic when AP terminated</td>
                                        <td>(Agreement Period - AP Subscription Period) * AP Rental</td>
                                    </tr>

                                    <tr>
                                        <td>Cancellation</td>
                                        <td></td>
                                        <td>Manual</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>Reconnection</td>
                                        <td></td>
                                        <td>Manual</td>
                                        <td></td>
                                    </tr>

                                    <tr>
                                        <td>WWS Termination</td>
                                        <td></td>
                                        <td>Manual</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>   


                            <h3 id="monthly-recurring-charge">Monthly Recurring Charge</h3>
                            <ul>
                                <li>AP Rental</li>
                                <li>Volume Usage</li>
                                <li>Traffic Minutes</li>
                            </ul>

                        </div>

                        <div class="bs-docs-section">
                            <h1 id="others" class="page-header">Others</h1>

                            <h3 id="taxation">Taxation</h3>
                            <p>Based on latest Service Tax / GST from Finance team.</p>


                            <h3 id="early-termination-penalty">Early Termination Penalty</h3>
                            <ul>
                                <li>AP Termination</li>
                                <li>WWS Termination</li>
                            </ul>
                            <blockquote>
                                <p>Details in the Pricing section</p>
                            </blockquote>

                            <h3 id="contract-terms">Contract Terms</h3>

                            <div class="bs-callout bs-callout-info">
                                <h4>Contract Agreement Elements</h4>
                                <ul>
                                    <li>Agreement Name</li>
                                    <li>Agreement Period (months)</li>
                                    <li>AP Number</li>
                                </ul>
                            </div>



                            <div class="bs-example">
                                <p><em>Agreement Table:</em></p>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Service ID</th>
                                            <th>Agreement Name</th>
                                            <th>Period (Months)</th>
                                            <th>AP No</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>WWSCELCOM1</td>
                                            <td>Celcom Agreement 1</td>
                                            <td>60</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>WWSCELCOM1</td>
                                            <td>Celcom Agreement 2</td>
                                            <td>12</td>
                                            <td>20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <h3 id="service-level-agreement">Service Level Agreement</h3>
                            <blockquote>
                                <p>Best Effort</p></blockquote>
                            <p>Restoration Table:</p>
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Priority Level</th>
                                        <th>Fault Types</th>
                                        <th>MTTR per site per Trouble Report</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Level 1</td>
                                        <td>Accessibility Issues</td>
                                        <td>3 Business Days</td>
                                    </tr>
                                    <tr>
                                        <td>Level 2</td>
                                        <td>Quality Issues</td>
                                        <td>7 Business Days</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
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