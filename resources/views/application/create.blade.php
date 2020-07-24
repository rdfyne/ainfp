@extends('layouts.front')

@section('title', 'Apply for Partnership')

@section('content')
	<!-- Breadcrumb Section -->
    <div class="bc-bg">
        <div class="bc-content">
            @if ( session()->has('success') )
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <span class="fa fa-2x fa-bookmark-o"></span>
            <h1>Apply for Partnership</h1>
            <span class="first-item">Homepage</span>
            <span class="separator">></span>
            <span class="second-item">Apply for Partnership</span>
        </div>
    </div>
    <!-- End -->

    <!-- Grid One -->
    <div>
        <div class="container sec-one">
            <div class="row">
                <div class="col-sm-6">
                    <img src="http://ainfp.org/wp-content/uploads/2020/07/asas.png" width="100%">
                </div>

                <div class="col-sm-6 opp">
                    <h2>The Opportunity</h2>
                    <p>The Alliance for Inclusive and Nutritious Food Processing (AINFP) program is a partnership between USAID, TechnoServe, 
                        and Partners in Food Solutions (PFS).</p>
                    <p>TechnoServe AINFP program is seeking dynamic partnerships with food processing companies in Ethiopia, Kenya, Malawi, 
                        Tanzania, and Zambia.</p>
                    <p>AINFP provides technical assistance, expertise, and business advisory services to help African food processors grow 
                        their business, create jobs, increase the availability of nutritious food, and expand markets for local farmers.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Partners --> 
    <div class="container">
        <div class="partners">
            <img src="http://ainfp.org/wp-content/uploads/2020/07/partners-1536x240.jpg" width="100%">
        </div>
    </div>
    <!-- End -->

    <!-- Grid Two -->
    <div class="sec-two">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Is this you</h4>
                    <ul>
                        <li>An operational business entity legally registered in any of the countries listed above and has been in operation 
                            for a minimum of three years to date</li>
                        <li>A business with a financially viable business model that counts on sales revenues to cover all expenses</li>
                        <li>A minimum production capacity of 2MT/day with five or more employees</li>
                        <li>A food processor using locally sourced raw materials from small holder farmers and processing any of the following 
                            nutritious food products: <i>Cereals, Soya, Groundnuts, Dairy, Edible oils, Fruits and vegetables, Orange fleshed 
                                sweet potato</i>.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Grid Three -->
    <div class="sec-three">
        <div class="container">
            <div class="f-t">
                <h4>Are you a food processor looking for a transformational partner in any of the following business areas?</h4>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <h4>Food Technology</h4>
                    <ul>
                        <li>Product development</li>
                        <li>Shelf-life improvement</li>
                        <li>Process development</li>
                        <li>Nutrition and fortification</li>
                        <li>Process engineering</li>
                        <li>Milling technology</li>
                        <li>Quality & regulatory compliance</li>
                    </ul>
                </div>

                <div class="col-sm-4">
                    <h4>Business Development</h4>
                    <ul>
                        <li>Business strategy</li>
                        <li>B.O.P Marketing and brand design</li>
                        <li>Sourcing and logistics</li>
                        <li>Capacity Building and Training</li>
                        <li>Market linkages</li>
                    </ul>
                </div>

                <div class="col-sm-4">
                    <h4>Financial Linkages</h4>
                    <ul>
                        <li>Financial needs assessment</li>
                        <li>Financial Management System development</li>
                        <li>Capital provider linkages</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Form Section -->
    <div class="sec-two">
        <div class="container">

        <h2>Complete the form below</h2>
        <hr/>
            
        <!-- registration inputs --> 
        <div>
            <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data">

            	@csrf

                <!-- personal details -->
                <h4>Personal Information</h4>
                <div class="reg-sec">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Full Name *</small>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Email Address* </small>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Select Country *</small>
                            <select class="form-control" name="country" required>
                                <option value="Kenya">Kenya</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Malawi">Malawi</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Phone Number* </small>
                            <input type="tel" class="form-control" name="phone" required>
                        </div>
                    </div>
                </div>

                <!-- company details -->
                <h4>Company Information</h4>
                <div class="reg-sec">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Company Name *</small>
                            <input type="text" class="form-control" name="company" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Year of Establishment *</small>
                            <input type="number" class="form-control" name="year_established" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Company Phone *</small>
                            <input type="tel" class="form-control" name="company_phone" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Company Email *</small>
                            <input type="email" class="form-control" name="company_email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Physical Address and GPS Coordinates *</small>
                            <input type="text" class="form-control" name="physical_address" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Form of Business (LLC, Coop, etc) *</small>
                            <input type="text" class="form-control" name="form_of_business" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Is this a subsidiary of another business? If yes, where is home office? *</small>
                            <input type="text" class="form-control" name="home_office">
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">In a commercial relationship(s) w/ a PFS Corporate Partner(s)? If yes, which one(s)? *</small>
                            <input type="text" class="form-control" name="corporate_partners">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Number of Employees (full time/part time; male/female) *</small>
                            <input type="number" class="form-control" name="employee_number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Annual Revenue ($/year) *</small>
                            <input type="number" class="form-control" name="annual_revenue" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Business Ownership: Male/Female proportion *</small>
                            <input type="text" class="form-control" name="ownership_proportion" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Number of Farmers Supported *</small>
                            <input type="number" class="form-control" name="farmers_number" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Product(s) produced (level/frequency) *</small>
                            <input type="text" class="form-control" name="products_produced" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Major markets/buyers *</small>
                            <input type="text" class="form-control" name="major_markets" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Currently targeting/potential & interest in BoP markets? *</small>
                            <input type="text" class="form-control" name="potential_markets" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Installed/Operating Capacity (Mt/day or l/day) *</small>
                            <input type="text" class="form-control" name="installed_capacity" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">Any financing(loan/equity)? If yes, with whom, what amount, what for, interest rate and term of financing? *</small>
                            <textarea class="form-control" name="financing"></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">Where do they want Annual Revenue to be in 3 years (or other production goal)? *</small>
                            <textarea class="form-control" name="production_goal" required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">What types of machinery and technology do you use? *</small>
                            <textarea class="form-control" name="technology" required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">Partnerships with other donors/NGOs? *</small>
                            <textarea class="form-control" name="ngo_partnerships" required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">Main Challenges Identified (potential projects) *</small>
                            <textarea class="form-control" name="challenges" required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Upload photo of business owner(s) *</small>
                            <input type="file" class="form-control-file" name="owners" accept="image/*" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Upload photo of your food processing premises *</small>
                            <input type="file" class="form-control-file" name="premises" accept="image/*" required>
                        </div>
                    </div>
                </div>

                <!-- expression of interest -->
                <h4>Expression of Interest</h4>
                <div class="reg-sec">

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">Why is your business interested in the AINFP program partnership? *</small>
                            <textarea class="form-control" name="interests" required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">What are your current gaps/needs that would benefit from this partnership? *</small>
                            <textarea class="form-control" name="needs" required></textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">What would success look like if you got this partnership? *</small>
                            <textarea class="form-control" name="success" required></textarea>
                        </div>
                    </div>

                </div>


                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="tocs" required name="tocs">
                    <label class="tocs" for="exampleCheck1">By checking this you agree to our <a href="#" target="_blank">Terms and Conditions</a> and <a href="#" target="_blank">Privacy Policy</a></label>
                </div>

                <div class="reg-btn">
                    <button type="submit" class="btn btn-success">
                    	Complete Registration
                    </button>
                    <button type="reset" class="btn btn-sm btn-danger">
                    	<span class="fa fa-refresh">&nbsp;</span>Reset
                    </button>
                </div>
                
            </form>

        </div>
        <!-- END registration inputs --> 

        </div>
    </div>
    <!-- End -->

    <!-- Terms -->
    <div class="sec-terms">
        <div class="container">
            <h4>Are you the partner of choice with the following minimum aspects?</h4>
            <ul>
                <li>The REOI is not and shall not be considered an offer by TechnoServe.</li>
                <li>All responses must be received on or before the date and time indicated above. All late responses will be rejected.</li>
                <li>All responses that do not fit the criteria will be rejected.</li>
                <li>All technical support will be subject to TechnoServe contractual terms and conditions and contingent on the availability 
                    of donor funding.</li>
                <li>TechnoServe reserves the right to accept or reject any proposal or cancel the solicitation process at any time, and shall 
                    have no liability to the proposing organizations submitting proposals for such rejection or cancellation of the request 
                    for proposals./li>
                <li>TechnoServe reserves the right to accept all or part of the EOI when technical support is provided.</li>
                <li>All information provided by TechnoServe in this REOI is offered in good faith. Individual items are subject to change at 
                    any time, and all applicants will be provided with notification of any changes. TechnoServe is not responsible or liable 
                    for any use of the information submitted by applicants or for any claims asserted therefrom.</li>
                <li>TechnoServe reserves the right to require any applicant to enter into a non-disclosure agreement.</li>
                <li>The Applicants are solely obligated to pay for any costs, of any kind whatsoever, which may be incurred by applicant or 
                    any third parties, in connection with the Response. All responses and supporting documentation shall become the property 
                    of TechnoServe, subject to claims of confidentiality in respect of the response and supporting documentation, which have 
                    been clearly marked confidential by the bidder.</li>
                <li>Applicants are required to identify and disclose any actual or potential Conflict of Interest.</li>
            </ul>
        </div>
    </div>
    <!-- End -->
@endsection