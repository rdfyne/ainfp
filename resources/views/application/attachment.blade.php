<title>Application Attachment</title>

<div style="border-bottom: 6px solid #4698b1;">
    <div class="clearfix" style="padding-bottom: 15px;">
        <img class="left" src="{{ public_path('backoffice/images/ainfp.png') }}" style="width: 40%;">
    </div>
</div>

<div class="clearfix">
    <img class="left" src="{{ public_path('backoffice/images/ainfp-subtitle.png') }}" style="width: 80%; margin-bottom: 20px">
</div>

<div>
    <div class="logo">
        @if ($application->company_logo)
            <img src="{{ public_path('storage/' . $application->company_logo) }}" width="30%">
        @endif
    </div>
    <div id="title">
        <strong>{{ $application->company }}</strong>
    </div>
</div>

<div>
    <table class="table-border" cellpadding="5">
    
        <tr>
            <th>Full Name</th>
            <td>{{ $application->name }}</td>
        </tr>
    
        <tr>
            <th>Email Address</th>
            <td>{{ $application->email }}</td>
        </tr>
    
        <tr>
            <th>Country</th>
            <td>{{ $application->country }}</td>
        </tr>
    
        <tr>
            <th>Phone Number</th>
            <td>{{ $application->phone }}</td>
        </tr>
    
        <tr>
            <th>Company Name</th>
            <td>{{ $application->company }}</td>
        </tr>
    
        <tr>
            <th>Year of Establishment</th>
            <td>{{ $application->year_established }}</td>
        </tr>
    
        <tr>
            <th>Company Phone</th>
            <td>{{ $application->company_phone }}</td>
        </tr>
    
        <tr>
            <th>Company Email</th>
            <td>{{ $application->company_email }}</td>
        </tr>
    
        <tr>
            <th>Physical Address and GPS Coordinates</th>
            <td>{{ $application->physical_address }}</td>
        </tr>
    
        <tr>
            <th>Form of Business Registration (LLC, Coop, etc)</th>
            <td>{{ $application->form_of_business }}</td>
        </tr>
    
        <tr>
            <th>Is this a subsidiary of another business? If yes, where is home office?</th>
            <td>{{ $application->home_office }}</td>
        </tr>
    
        <tr>
            <th>Are you in a commercial relationship with any of the PFS corporate partners (General Mills, Cargill, DSM, Buhler, The Hershey Company, Ardent Mills and The J.M. Smucker Company)? If yes which one(s)?</th>
            <td>{{ $application->corporate_partners }}</td>
        </tr>
    
        <tr>
            <th>Number of Employees (full time/part time; male/female)</th>
            <td>{{ $application->employee_number }}</td>
        </tr>
    
        <tr>
            <th>Annual Revenue ($/year)</th>
            <td>{{ $application->annual_revenue }}</td>
        </tr>
    
        <tr>
            <th>Business Ownership: Male/Female proportion</th>
            <td>{{ $application->ownership_proportion }}</td>
        </tr>
    
        <tr>
            <th>Number of Farmers Supported</th>
            <td>{{ $application->farmers_number }}</td>
        </tr>
    
        <tr>
            <th>Primary/Main Product(s) produced (level/frequency) e.g 10MT/Day of fortified maize Flour. (If producing more than one product, ONLY provide information for the main one)</th>
            <td>{{ $application->products_produced }}</td>
        </tr>
    
        <tr>
            <th>Major markets/buyers</th>
            <td>{{ $application->major_markets }}</td>
        </tr>
    
        <tr>
            <th>Are you currently targeting or have potential and interest in Bottom of Pyramid market?</th>
            <td>{{ $application->potential_markets }}</td>
        </tr>
    
        <tr>
            <th>Installed/Operating Capacity (Mt/day or litres/day)</th>
            <td>{{ $application->installed_capacity }}</td>
        </tr>
    
        <tr>
            <th>Any financing(loan/equity)? If yes, with whom, what amount, what for, interest rate and term of financing?</th>
            <td>{{ $application->financing }}</td>
        </tr>
    
        <tr>
            <th>Where do you expect your Annual Revenue to be in 3 years? Explain any other production goal in addition to Revenue</th>
            <td>{{ $application->production_goal }}</td>
        </tr>
    
        <tr>
            <th>What types of machinery and technology do you use?</th>
            <td>{{ $application->technology }}</td>
        </tr>
    
        <tr>
            <th>Outline any active partnerships you have with other donors or NGOs</th>
            <td>{{ $application->ngo_partnerships }}</td>
        </tr>
    
        <tr>
            <th>Any other information that is important for us to know</th>
            <td>{{ $application->challenges }}</td>
        </tr>
    
        <tr>
            <th>What is your primary interest in partnering with the Alliance for Inclusive and Nutritious Food Processing?</th>
            <td>{{ $application->interests }}</td>
        </tr>
    
        <tr>
            <th>What are the gaps/ opportunities that you envision your business benefiting from as a result of this partnership?</th>
            <td>{{ $application->needs }}</td>
        </tr>
    
        <tr>
            <th>What would be the desired results/outcomes for your business as a result of engagement with this partnership?</th>
            <td>{{ $application->success }}</td>
        </tr>
    
    </table>
</div>

<div class="text-center" style="margin-top: 20px">
    <img src="{{ public_path('backoffice/images/new-partners.png') }}" style="width: 90%">
</div>

<link href="{{ public_path('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">

<style type="text/css">
    * {
        font-family: sans-serif;
    }
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }
    .right {
        float: right
    }
    .left {
        float: left;
        padding: 5px;
    }
    .text-left {
        text-align: left;
    }
    .text-right {
        text-align: right;
    }
    .text-center {
        text-align: center;
    }
    .container {
        margin-bottom: 40px;
    }
    table {
        width: 100%
    }
    th, td {
        font-size: 14px;
    }
    td {
        vertical-align: top;
    }
    th {
        width: 30%;
        text-align: left;
        background: #eee
    }
    .table-border, .table-border th, .table-border td {
        border: 2px solid #aaa;
        border-collapse: collapse;
    }
    #title strong {
        font-size: 28px
    }
    #resources img {
        width: 70%;
    }
</style>
