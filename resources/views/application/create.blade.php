@extends('layouts.front')

@section('title', 'Apply for Partnership')

@section('content')
    <!-- AINFP Sec -->
    <div class="ainfp-bc-img">
        <div class="ainfp-indent d-none d-sm-block">
            <img src="https://ainfp.org/wp-content/uploads/2020/07/big-ainfp.png">
        </div>
        <div class="ainfp-indent d-block d-sm-none">
            <img src="https://ainfp.org/wp-content/uploads/2020/07/big-ainfp.png" width="100%">
        </div>
    </div>
    <!-- End -->

    <!-- Breadcrumb Section -->
    <div class="bc-bg">
        <div class="bc-content">
            <!--<span class="fa fa-2x fa-bookmark-o"></span>-->
            <h1>Apply for Partnership</h1>
            <!--<span class="first-item">Homepage</span>
            <span class="separator fa fa-chevron-right"></span>
            <span class="second-item">Apply for Partnership</span>-->
        </div>
    </div>
    <!-- End -->

    <!-- Grid One -->
    <div>
        <div class="container sec-one">
            <div class="row">
                <div class="col-sm-6">
                    <img src="https://ainfp.org/wp-content/uploads/2020/07/asas.png" width="100%">
                </div>

                <div class="col-sm-6 opp">
                    <h1>The Opportunity</h1>
                    <p>The Alliance for Inclusive and Nutritious Food Processing (AINFP) is a partnership between USAID, TechnoServe, 
                        and Partners in Food Solutions (PFS).</p>
                    <p>AINFP is seeking dynamic partnerships with food processing companies in Ethiopia, Kenya, Malawi, 
                        Tanzania, and Zambia.</p>
                    <p>AINFP provides technical assistance, expertise, and business advisory services to help African food processors grow 
                        their businesses, create jobs, increase the availability of nutritious food, and expand markets for local farmers.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Partners --> 
    <div class="container">

        <div class="row partners">
            <div class="col-sm-4 usaid">
                <a href="https://www.usaid.gov/" target="_blank"><img src="https://ainfp.org/wp-content/uploads/2020/07/new-usaid.png"></a>
            </div>
            <div class="col-sm-4 pfs">
                <a href="https://www.partnersinfoodsolutions.com/" target="_blank"><img src="https://ainfp.org/wp-content/uploads/2020/07/new-pfs.png"></a>
            </div>
            <div class="col-sm-4 tns">
                <a href="https://technoserve.org" target="_blank"><img src="https://ainfp.org/wp-content/uploads/2020/08/new-tns.png"></a>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Grid Two -->
    <div class="sec-two">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 opp-two">
                    <img src="https://ainfp.org/wp-content/uploads/2020/07/WE-ARE-LOOKING-FOR-YOU.png" width="100%">
                </div>

                <div class="col-sm-8">
                    <h1>Is this you?</h1>
                    <ul>
                        <li>An operational food processing business entity legally registered in Ethiopia, Kenya, Malawi, Tanzania or Zambia</li>
                        <li>Running an operational business for a minimum of 3 years to date</li>
                        <li>Operating a financially viable business model with sales revenues covering all expenses</li>
                        <li>Employer of five or more staff with a production capacity of at least 2MT/day</li>
                        <li>Processing nutritious food using locally sourced raw materials from small holder farmers and targeting your 
                            products to the Bottom of Pyramid market</li>
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
                <h1>Are you experiencing any gaps/challenges or need to focus on any of these areas:</h1>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <span class="fa fa-2x fa-leaf"></span>
                    <h4>Food Technology</h4>
                    <ul>
                        <li>Food safety</li>
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
                    <span class="fa fa-2x fa-line-chart"></span>
                    <h4>Business Development</h4>
                    <ul>
                        <li>Business strategy</li>
                        <li>Marketing and brand design</li>
                        <li>Sourcing and logistics</li>
                        <li>Staff training</li>
                        <li>Supply chain linkages</li>
                        <li>Last mile distribution</li>
                    </ul>
                </div>

                <div class="col-sm-4">
                    <span class="fa fa-2x fa-briefcase"></span>
                    <h4>Financial Linkages</h4>
                    <ul>
                        <li>Financial needs assessment</li>
                        <li>Financial management system</li>
                        <li>Access to finance</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Form Section -->
    <div class="sec-two">
        <div class="container">

        <h1>To apply for partnership complete the form below before August 31, 2020</h1>
        <small>* All fields are required</small>
        <hr/>
            
        <!-- registration inputs --> 
        <div>
            <form action="{{ route('application.store') }}" method="POST" enctype="multipart/form-data" id="application-form">

            	@csrf

                <!-- personal details -->
                <h4>Personal information of the business contact person</h4>
                <div class="reg-sec">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Full Name *</small>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Email Address * </small>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Select Country *</small>
                            <select class="form-control" name="country" required>
                                @foreach([

                                    'Kenya',
                                    'Ethiopia',
                                    'Tanzania',
                                    'Zambia',
                                    'Malawi',

                                ] as $country)

                                    <option
                                    @if ( $country == old('country') )
                                        selected
                                    @endif>
                                        {{ $country }}
                                    </option>

                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Phone Number * </small>
                            <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}" required>
                        </div>
                    </div>
                </div>

                <!-- company details -->
                <h4>Company Information</h4>
                <div class="reg-sec">

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Company Name *</small>
                            <input type="text" class="form-control" name="company" value="{{ old('company') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Year of Establishment *</small>
                            <input type="number" class="form-control" name="year_established" value="{{ old('year_established') }}" required>
                            @include('partials.form.error', ['field' => 'year_established'])
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Company Phone *</small>
                            <input type="tel" class="form-control" name="company_phone" value="{{ old('company_phone') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Company Email *</small>
                            <input type="email" class="form-control" name="company_email" value="{{ old('company_email') }}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Physical Address and GPS Coordinates *</small>
                            <input type="text" class="form-control" name="physical_address" value="{{ old('physical_address') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Form of business registration (LLC, Coop, etc) *</small>
                            <input type="text" class="form-control" name="form_of_business" value="{{ old('form_of_business') }}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Is this a subsidiary of another business? If yes, where is home office? *</small>
                            <input type="text" class="form-control" name="home_office"  value="{{ old('home_office') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Are you in a commercial relationship with any of the PFS corporate partners (General Mills, Cargill, DSM, Buhler, The Hershey Company, Ardent Mills and The J.M. Smucker Company)? If yes which one(s)? *</small>
                            <input type="text" class="form-control" name="corporate_partners"  value="{{ old('corporate_partners') }}">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Number of Employees (full time/part time; male/female) *</small>
                            <input type="text" class="form-control" name="employee_number" value="{{ old('employee_number') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Annual Revenue ($/year) *</small>
                            <input type="number" class="form-control" name="annual_revenue" value="{{ old('annual_revenue') }}" required>
                            @include('partials.form.error', ['field' => 'annual_revenue'])
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Business Ownership: Male/Female proportion *</small>
                            <input type="text" class="form-control" name="ownership_proportion" placeholder="e.g. 50% male, 50% female" value="{{ old('ownership_proportion') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Number of Farmers Supported *</small>
                            <input type="number" class="form-control" name="farmers_number" value="{{ old('farmers_number') }}" required>
                            @include('partials.form.error', ['field' => 'farmers_number'])
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Primary/Main Product(s) produced (level/frequency) e.g 10MT/Day of fortified maize Flour. (If producing more than one product, ONLY provide information for the main one)</small>
                            <textarea class="form-control" name="products_produced" required>{{ old('products_produced') }}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Major markets/buyers *</small>
                            <input type="text" class="form-control" name="major_markets" value="{{ old('major_markets') }}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Are you currently targeting or have potential and interest in Bottom of Pyramid market? *</small>
                            <input type="text" class="form-control" name="potential_markets" value="{{ old('potential_markets') }}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">Installed/Operating Capacity (Mt/day or litres/day) *</small>
                            <input type="text" class="form-control" name="installed_capacity" value="{{ old('installed_capacity') }}" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">Any financing (loan/equity)? If yes, with whom, what amount, what for, interest rate and term of financing? *</small>
                            <textarea class="form-control" name="financing">{{ old('financing') }}</textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">Where do you expect your Annual Revenue to be in 3 years? Explain any other production goal in addition to Revenue *</small>
                            <textarea class="form-control" name="production_goal" required>{{ old('production_goal') }}</textarea>
                        </div>
                    </div>
                </div>
                
                <!-- additional client details -->
                <h4>Other Client Information</h4>
                <div class="reg-sec">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">What types of machinery and technology do you use? *</small>
                            <textarea class="form-control" name="technology" required>{{ old('technology') }}</textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">Outline any active partnerships you have with other donors or NGOs *</small>
                            <textarea class="form-control" name="ngo_partnerships" required>{{ old('ngo_partnerships') }}</textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">Any other information that is important for us to know *</small>
                            <textarea class="form-control" name="challenges" required>{{ old('challenges') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- expression of interest -->
                <h4>Expression of Interest (EOI)</h4>
                <div class="reg-sec">

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">
                                What is your primary interest in partnering with the Alliance for Inclusive and Nutritious Food Processing? * (Max 700 words)
                            </small>
                            <textarea class="form-control wordsLimit" name="interests" required>{{ old('interests') }}</textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">
                                What are the gaps/ opportunities that you envision your business benefiting from as a result of this partnership? * (Max 700 words)
                            </small>
                            <textarea class="form-control wordsLimit" name="needs" required>{{ old('needs') }}</textarea>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <small class="form-text text-muted">
                                What would be the desired results/outcomes for your business as a result of engagement with this partnership? * (Max 700 words)
                            </small>
                            <textarea class="form-control wordsLimit" name="success" required>{{ old('success') }}</textarea>
                        </div>
                    </div>

                </div>

                <!-- photo uploads -->
                <h4>Uploads</h4>
                <div class="reg-sec">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">
                                Upload your company logo image *
                            </small>
                            <input type="file" class="form-control-file" name="company_logo" accept="image/*" required>
                            @include('partials.form.error', ['field' => 'company_logo'])
                        </div>
                        <div class="form-group col-md-6">
                            <small class="form-text text-muted">
                                Upload an attachment/image that highlights your brand, products or premises (Optional)
                            </small>
                            <input type="file" class="form-control-file" name="brand_document">
                            @include('partials.form.error', ['field' => 'brand_document'])
                        </div>
                    </div>
                </div>

                <small class="form-text text-muted">Successful applicants will be contacted for a further round of evaluation and in-person interviews with the company’s leadership.</small>

                <small class="form-text text-muted">NB: Women-owned/led businesses are encouraged to apply.</small>

                <small class="form-text text-muted">Thank you for your interest in partnering with TechnoServe’s Alliance for Inclusive and Nutritious Food Processing.</small>
                
                <hr/>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="tocs" required name="tocs">
                    <label class="tocs" for="exampleCheck1">By checking this you agree to our <a href="#sec-terms" target="_blank">Terms and Conditions</a>.</label>
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
    <div id="sec-terms" class="sec-terms">
        <div class="container">
            <h1>Terms and Conditions</h1>
            <ul>
                <li>The partnership application is not and shall not be considered an offer by TechnoServe.</li>
                <li>All responses must be received on or before the date indicated above. Only successful candidates will be contacted.</li>
                <li>All responses that do not fit the criteria will be rejected.</li>
                <li>All technical support will be subject to TechnoServe contractual terms and conditions and contingent on the availability 
                    of donor funding.</li>
                <li>TechnoServe reserves the right to accept or reject any application or cancel the solicitation at any time and shall have no liability to the applicants for such rejection or cancellation.</li>
                <li>TechnoServe reserves the right to accept all or part of the application when technical support is provided.</li>
                <li>All information provided by TechnoServe in this solicitation is offered in good faith. Individual items are subject to change at 
                    any time, and all successful applicants will be provided with notification of any changes. TechnoServe is not responsible or liable 
                    for any use of the information submitted by applicants or for any claims asserted therefrom.</li>
                <li>TechnoServe reserves the right to require any applicant to enter into a non-disclosure agreement.</li>
                <li>The applicants are solely obligated to pay for any costs, of any kind whatsoever, which may be incurred by applicant or 
                    any third parties, in connection with the Response. All responses and supporting documentation shall become the property 
                    of TechnoServe, subject to claims of confidentiality in respect of the response and supporting documentation, which have 
                    been clearly marked confidential by the bidder.</li>
                <li>Applicants are required to identify and disclose any actual or potential Conflict of Interest.</li>
            </ul>
        </div>
    </div>
    <!-- End -->
@endsection

@push('styles')
    
    <style type="text/css">

        .error {
            color: red
        }
        
    </style>

@endpush

@push('scripts')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174904443-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-174904443-1');
    </script>
    
    <script type="text/javascript">

        jQuery(document).ready( function ($) {

            // validate form
            $('#application-form').validate()

            // custom validation on words limit
            $.validator.addMethod('wordsLimit', function (value, element) { 

                return value && value.split(/\s+/).length <= 700;

            }, "Your text should not exceed 700 words")

            // successful form submission message
            @if ( session()->has('success') )

                Swal.fire(

                    @json( session('success') ) 
                )

            @endif
        })

    </script>

@endpush
