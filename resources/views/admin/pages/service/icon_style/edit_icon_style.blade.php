@extends('admin.layout.app')


@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />

    <style>
        .dvalbtn {
            width: 100%;
            display: flex;
            flex-direction: row-reverse;
        }
    </style>

    <div class="col-md-10 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Service Icon Style <small>Edit</small></h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">



                <br />
                <form action="{{ route('services_icon_style.update',$service_id) }}" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="service_cat" value="{{$cat}}">

                    <div id="containerdd">

                        @if(isset($get_icon_style_data))


                            <div class=" col-md-10">

                                <br>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Headline <span class="required">*</span>
                                    </label>
                                    <div class="col-md-10 col-sm-10 ">
                                        <input type="text" id="structure_two_title" name="structure_two_title" value="{{$structure_two_title}}" class="form-control "  @if ($errors->has('front_text')) style="border: 1px solid red"  @endif>

                                    </div>

                                </div>

                            </div>

                            @foreach($get_icon_style_data as $key => $get_icon_style_data_text)
                                <div id="liststyle{{$key}}" class="cbdm col-md-10">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Icon Style Text <span class="required">*</span>
                                        </label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input type="text" id="text" name="text[]" value="{{$get_icon_style_data_text->text}}" class="form-control "  @if ($errors->has('tab_name')) style="border: 1px solid red"  @endif required>

                                        </div>

                                    </div>


                                    <div class="item form-group">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Icon  <span class="required">*</span>
                                        </label>
                                        <div class="col-md-10 col-sm-10 ">


                                            <select name="icon[]" class="form-control "  id="icon">
                                                <option {{$get_icon_style_data_text->icon == "address verification.svg" ?'selected':''}} value="address verification.svg">Address Verification</option>
                                                <option value="advance operations.svg" {{$get_icon_style_data_text->icon == "advance operations.svg" ?'selected':''}}>Advance Operations</option>
                                                <option value="anti-money-laundering-know-your-vendor-clients-services.svg" {{$get_icon_style_data_text->icon == "anti-money-laundering-know-your-vendor-clients-services.svg" ?'selected':''}}>Anti Money Laundering Know Your Vendor Clients Services</option>
                                                <option value="assessment.svg" {{$get_icon_style_data_text->icon == "assessment.svg" ?'selected':''}}> Assessment</option>
                                                <option value="audit report.svg" {{$get_icon_style_data_text->icon == "audit report.svg" ?'selected':''}}>Audit Report</option>
                                                <option value="biometric checks.svg" {{$get_icon_style_data_text->icon == "biometric checks.svg" ?'selected':''}}>Biometric Checks</option>
                                                <option value="brand disputes.svg" {{$get_icon_style_data_text->icon == "brand disputes.svg" ?'selected':''}}>Brand Disputes</option>
                                                <option value="breach of contract disputes.svg" {{$get_icon_style_data_text->icon == "breach of contract disputes.svg" ?'selected':''}}>Breach of Contract Disputes</option>
                                                <option value="civil-criminal record.svg" {{$get_icon_style_data_text->icon == "civil-criminal record.svg" ?'selected':''}}>Civil Criminal Record</option>
                                                <option value="company legitimacy check.svg" {{$get_icon_style_data_text->icon == "company legitimacy check.svg" ?'selected':''}}>Company Legitimacy Check</option>
                                                <option value="construction disputes and claims.svg" {{$get_icon_style_data_text->icon == "construction disputes and claims.svg" ?'selected':''}}>Construction Disputes and Claims</option>
                                                <option value="contingency planning.svg" {{$get_icon_style_data_text->icon == "contingency planning.svg" ?'selected':''}}>Contingency Planning</option>
                                                <option value="customer service.svg" {{$get_icon_style_data_text->icon == "customer service.svg" ?'selected':''}}>Customer Service</option>
                                                <option value="data analysis and deduplication.svg" {{$get_icon_style_data_text->icon == "data analysis and deduplication.svg" ?'selected':''}}>Data Analysis and Deduplication</option>
                                                <option value="data privacy impact assessment report.svg" {{$get_icon_style_data_text->icon == "data privacy impact assessment report.svg" ?'selected':''}}>Data Privacy Impact Assessment Report</option>
                                                <option value="decrease manual communications.svg" {{$get_icon_style_data_text->icon == "decrease manual communications.svg" ?'selected':''}}>Decrease Manual Communications</option>
                                                <option value="drug testing.svg" {{$get_icon_style_data_text->icon == "drug testing.svg" ?'selected':''}}>Drug Testing</option>
                                                <option value="education check.svg" {{$get_icon_style_data_text->icon == "education check.svg" ?'selected':''}}>Education Check</option>
                                                <option value="email reviews.svg" {{$get_icon_style_data_text->icon == "email reviews.svg" ?'selected':''}}>Email Reviews</option>
                                                <option value="employee interactions.svg" {{$get_icon_style_data_text->icon == "employee interactions.svg" ?'selected':''}}>Employee Interactions</option>
                                                <option value="employee-benefits.svg" {{$get_icon_style_data_text->icon == "employee-benefits.svg" ?'selected':''}}>Employee Benefits</option>
                                                <option value="employment history.svg" {{$get_icon_style_data_text->icon == "employment history.svg" ?'selected':''}}>Employment History</option>
                                                <option value="environment-to-work.svg" {{$get_icon_style_data_text->icon == "environment-to-work.svg" ?'selected':''}}>Environment To Work</option>
                                                <option value="flexible-and-open-work-culture.svg" {{$get_icon_style_data_text->icon == "flexible-and-open-work-culture.svg" ?'selected':''}}>Flexible and Open Work Culture</option>
                                                <option value="forensic accounting and litigation support.svg" {{$get_icon_style_data_text->icon == "forensic accounting and litigation support.svg" ?'selected':''}}>Forensic Accounting and Litigation Support</option>
                                                <option value="form 16 verification.svg" {{$get_icon_style_data_text->icon == "form 16 verification.svg" ?'selected':''}}>Form 16 Verification</option>
                                                <option value="fraud investigation.svg" {{$get_icon_style_data_text->icon == "fraud investigation.svg" ?'selected':''}}>Fraud Investigation</option>
                                                <option value="fraud risk assessment.svg" {{$get_icon_style_data_text->icon == "fraud risk assessment.svg" ?'selected':''}}>Fraud Risk Assessment</option>
                                                <option value="gap analysis.svg" {{$get_icon_style_data_text->icon == "gap analysis.svg" ?'selected':''}}>Gap Analysis</option>
                                                <option value="gap assessment report.svg" {{$get_icon_style_data_text->icon == "gap assessment report.svg" ?'selected':''}}>Gap Assessment Report</option>
                                                <option value="gap verification.svg" {{$get_icon_style_data_text->icon == "gap verification.svg" ?'selected':''}}>Gap Verification</option>
                                                <option value="global database check.svg" {{$get_icon_style_data_text->icon == "global database check.svg" ?'selected':''}}>Global Database Check</option>
                                                <option value="guidance in implementing technical.svg" {{$get_icon_style_data_text->icon == "guidance in implementing technical.svg" ?'selected':''}}>Guidance In Implementing Technical</option>
                                                <option value="hands-on-experience.svg" {{$get_icon_style_data_text->icon == "hands-on-experience.svg" ?'selected':''}}>Hands OnExperience</option>
                                                <option value="identity verification.svg" {{$get_icon_style_data_text->icon == "identity verification.svg" ?'selected':''}}>Identity Verification</option>
                                                <option value="increased employee efficiency.svg" {{$get_icon_style_data_text->icon == "increased employee efficiency.svg" ?'selected':''}}>Increased Employee Efficiency</option>
                                                <option value="infrastructure sector disputes.svg" {{$get_icon_style_data_text->icon == "infrastructure sector disputes.svg" ?'selected':''}}>Infrastructure Sector Disputes</option>
                                                <option value="infrastructure.svg" {{$get_icon_style_data_text->icon == "infrastructure.svg" ?'selected':''}}>Infrastructure</option>
                                                <option value="intellectual property disputes.svg" {{$get_icon_style_data_text->icon == "intellectual property disputes.svg" ?'selected':''}}>Intellectual Property Disputes</option>
                                                <option value="investment treaty disputes.svg" {{$get_icon_style_data_text->icon == "investment treaty disputes.svg" ?'selected':''}}>Investment Treaty Disputes</option>
                                                <option value="joint venture disputes.svg" {{$get_icon_style_data_text->icon == "joint venture disputes.svg" ?'selected':''}}>Joint Venture Disputes</option>
                                                <option value="key aspects of gdpr.svg" {{$get_icon_style_data_text->icon == "key aspects of gdpr.svg" ?'selected':''}}>Key Aspects of GDPR</option>
                                                <option value="media searches.svg" {{$get_icon_style_data_text->icon == "media searches.svg" ?'selected':''}}>Media Searches</option>
                                                <option value="mega capital projects disputes.svg" {{$get_icon_style_data_text->icon == "mega capital projects disputes.svg" ?'selected':''}}>Mega Capital Projects Disputes</option>
                                                <option value="misleading-incorrect-false information provided in the resume.svg" {{$get_icon_style_data_text->icon == "misleading-incorrect-false information provided in the resume.svg" ?'selected':''}}>Misleading Incorrect False Information Provided in the Resume</option>
                                                <option value="off-court settlements.svg" {{$get_icon_style_data_text->icon == "off-court settlements.svg" ?'selected':''}}>Off Court Settlements</option>
                                                <option value="online reputation management.svg" {{$get_icon_style_data_text->icon == "online reputation management.svg" ?'selected':''}}>Online Reputation Management</option>
                                                <option value="operations management.svg" {{$get_icon_style_data_text->icon == "operations management.svg" ?'selected':''}}>Operations Management</option>
                                                <option value="organisation-structure-personal-policies-internal-control-analysis.svg" {{$get_icon_style_data_text->icon == "organisation-structure-personal-policies-internal-control-analysis.svg" ?'selected':''}}>Organisation Structure Personal Policies Internal Control Analysis</option>
                                                <option value="passport-voter-card-pan-validation.svg" {{$get_icon_style_data_text->icon == "passport-voter-card-pan-validation.svg" ?'selected':''}}>Passport Voter Card Pan Validation</option>
                                                <option value="performance.svg" {{$get_icon_style_data_text->icon == "performance.svg" ?'selected':''}}>Performance</option>
                                                <option value="planning.svg" {{$get_icon_style_data_text->icon == "planning.svg" ?'selected':''}}>Planning</option>
                                                <option value="policies data privacy impact assessment.svg" {{$get_icon_style_data_text->icon == "policies data privacy impact assessment.svg" ?'selected':''}}>Policies Data Privacy Impact Assessment</option>
                                                <option value="policies for gdpr.svg" {{$get_icon_style_data_text->icon == "policies for gdpr.svg" ?'selected':''}}>Policies for GDPR</option>
                                                <option value="premature contract termination.svg" {{$get_icon_style_data_text->icon == "premature contract termination.svg" ?'selected':''}}>Premature Contract Termination</option>
                                                <option value="privacy governance framework.svg" {{$get_icon_style_data_text->icon == "privacy governance framework.svg" ?'selected':''}}>Privacy Governance Framework</option>
                                                <option value="process conformity.svg" {{$get_icon_style_data_text->icon == "process conformity.svg" ?'selected':''}}>Process Conformity</option>
                                                <option value="product quality.svg" {{$get_icon_style_data_text->icon == "product quality.svg" ?'selected':''}}>Product Quality</option>
                                                <option value="product sampling.svg" {{$get_icon_style_data_text->icon == "product sampling.svg" ?'selected':''}}>Product Sampling</option>
                                                <option value="professional-support.svg" {{$get_icon_style_data_text->icon == "professional-support.svg" ?'selected':''}}>Professional Support</option>
                                                <option value="recovery of deleted data.svg" {{$get_icon_style_data_text->icon == "recovery of deleted data.svg" ?'selected':''}}>Recovery of Deleted Data</option>
                                                <option value="reduce outreach requirements.svg" {{$get_icon_style_data_text->icon == "reduce outreach requirements.svg" ?'selected':''}}>Reduce Outreach Requirements</option>
                                                <option value="reporting.svg" {{$get_icon_style_data_text->icon == "reporting.svg" ?'selected':''}}>Reporting</option>
                                                <option value="risk assessment.svg" {{$get_icon_style_data_text->icon == "risk assessment.svg" ?'selected':''}}>Risk Assessment</option>
                                                <option value="roadmap.svg" {{$get_icon_style_data_text->icon == "roadmap.svg" ?'selected':''}}>Roadmap</option>
                                                <option value="secured-vetted-transport.svg" {{$get_icon_style_data_text->icon == "secured-vetted-transport.svg" ?'selected':''}}>Secured Vetted Transport</option>
                                                <option value="securities ltigation.svg" {{$get_icon_style_data_text->icon == "securities ltigation.svg" ?'selected':''}}>Securities Ltigation</option>
                                                <option value="shareholder disputes.svg" {{$get_icon_style_data_text->icon == "shareholder disputes.svg" ?'selected':''}}>Shareholder Disputes</option>
                                                <option value="social media forensics.svg" {{$get_icon_style_data_text->icon == "social media forensics.svg" ?'selected':''}}>Social Media Forensics</option>
                                                <option value="standardize and automate.svg" {{$get_icon_style_data_text->icon == "standardize and automate.svg" ?'selected':''}}>Standardize and Automate</option>
                                                <option value="tap into high quality data.svg" {{$get_icon_style_data_text->icon == "tap into high quality data.svg" ?'selected':''}}>Tap Into High Quality Data</option>
                                                <option value="vacation-and-time-off.svg" {{$get_icon_style_data_text->icon == "vacation-and-time-off.svg" ?'selected':''}}>Vacation and Time Off</option>
                                                <option value="vendor audits.svg" {{$get_icon_style_data_text->icon == "vendor audits.svg" ?'selected':''}}>Vendor Audits</option>
                                                <option value="vendor profile.svg" {{$get_icon_style_data_text->icon == "vendor profile.svg" ?'selected':''}}>Vendor Profile</option>


                                            </select>

                                        </div>

                                    </div>


                                    <div class="item form-group">
                                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>
                                        <div class="col-md-10 col-sm-10 ">
                                            <input id="priority" class="form-control" type="number" min="0" name="priority[]"  @if ($errors->has('priority')) style="border: 1px solid red"  @endif value="{{$get_icon_style_data_text->priority}}" required>
                                        </div>
                                    </div>


                                    <div class="dvalbtn">
                                        <a href="#"  class="btn btn-danger divdeletev">Delete </a>

                                    </div>

                                    <br>
                                    <hr>
                                    <br>



                                </div>



                            @endforeach
                        @endif

                    </div>



                    <div class="ln_solid"></div>



                    <div class="col-md-12">


                        <div class="item form-group">
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                <a href="#" id="somebutton" class="btn btn-primary">Add Block </a>

                                <a href="/admin/service/icon-style/view" class="btn btn-primary" type="button">Go Back</a>
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>




@endsection


@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>

    <script>
        $("#e1").select2({closeOnSelect:false});


        $("#somebutton").click(function () {
            $("#containerdd").append(' <div id="liststyle" class="cbdm col-md-10">\n' +
                '                                    <div class="item form-group">\n' +
                '                                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Icon Style Text <span class="required">*</span>\n' +
                '                                        </label>\n' +
                '                                        <div class="col-md-10 col-sm-10 ">\n' +
                '                                            <input type="text" id="text" name="text[]"  class="form-control "  required>\n' +
                '\n' +
                '                                        </div>\n' +
                '\n' +
                '                                    </div>\n' +
                '\n' +
                '\n' +
                '                                    <div class="item form-group">\n' +
                '                                        <label class="col-form-label col-md-2 col-sm-2 label-align" for="first-name">Icon  <span class="required">*</span>\n' +
                '                                        </label>\n' +
                '                                        <div class="col-md-10 col-sm-10 ">\n' +
                '\n' +
                '\n' +
                '                                            <select name="icon[]" class="form-control "  id="icon">\n' +
                '                                                <option value="address verification.svg">Address Verification</option>\n' +
                '                                                <option value="advance operations.svg">Advance Operations</option>\n' +
                '                                                <option value="anti-money-laundering-know-your-vendor-clients-services.svg">Anti Money Laundering Know Your Vendor Clients Services</option>\n' +
                '                                                <option value="assessment.svg"> Assessment</option>\n' +
                '                                                <option value="audit report.svg">Audit Report</option>\n' +
                '                                                <option value="biometric checks.svg">Biometric Checks</option>\n' +
                '                                                <option value="brand disputes.svg">Brand Disputes</option>\n' +
                '                                                <option value="breach of contract disputes.svg">Breach of Contract Disputes</option>\n' +
                '                                                <option value="civil-criminal record.svg">Civil Criminal Record</option>\n' +
                '                                                <option value="company legitimacy check.svg">Company Legitimacy Check</option>\n' +
                '                                                <option value="construction disputes and claims.svg">Construction Disputes and Claims</option>\n' +
                '                                                <option value="contingency planning.svg">Contingency Planning</option>\n' +
                '                                                <option value="customer service.svg">Customer Service</option>\n' +
                '                                                <option value="data analysis and deduplication.svg">Data Analysis and Deduplication</option>\n' +
                '                                                <option value="data privacy impact assessment report.svg">Data Privacy Impact Assessment Report</option>\n' +
                '                                                <option value="decrease manual communications.svg">Decrease Manual Communications</option>\n' +
                '                                                <option value="drug testing.svg">Drug Testing</option>\n' +
                '                                                <option value="education check.svg">Education Check</option>\n' +
                '                                                <option value="email reviews.svg">Email Reviews</option>\n' +
                '                                                <option value="employee interactions.svg">Employee Interactions</option>\n' +
                '                                                <option value="employee-benefits.svg">Employee Benefits</option>\n' +
                '                                                <option value="employment history.svg">Employment History</option>\n' +
                '                                                <option value="environment-to-work.svg">Environment To Work</option>\n' +
                '                                                <option value="flexible-and-open-work-culture.svg">Flexible and Open Work Culture</option>\n' +
                '                                                <option value="forensic accounting and litigation support.svg">Forensic Accounting and Litigation Support</option>\n' +
                '                                                <option value="form 16 verification.svg">Form 16 Verification</option>\n' +
                '                                                <option value="fraud investigation.svg">Fraud Investigation</option>\n' +
                '                                                <option value="fraud risk assessment.svg">Fraud Risk Assessment</option>\n' +
                '                                                <option value="gap analysis.svg">Gap Analysis</option>\n' +
                '                                                <option value="gap assessment report.svg">Gap Assessment Report</option>\n' +
                '                                                <option value="gap verification.svg">Gap Verification</option>\n' +
                '                                                <option value="global database check.svg">Global Database Check</option>\n' +
                '                                                <option value="guidance in implementing technical.svg">Guidance In Implementing Technical</option>\n' +
                '                                                <option value="hands-on-experience.svg">Hands OnExperience</option>\n' +
                '                                                <option value="identity verification.svg">Identity Verification</option>\n' +
                '                                                <option value="increased employee efficiency.svg">Increased Employee Efficiency</option>\n' +
                '                                                <option value="infrastructure sector disputes.svg">Infrastructure Sector Disputes</option>\n' +
                '                                                <option value="infrastructure.svg">Infrastructure</option>\n' +
                '                                                <option value="intellectual property disputes.svg">Intellectual Property Disputes</option>\n' +
                '                                                <option value="investment treaty disputes.svg">Investment Treaty Disputes</option>\n' +
                '                                                <option value="joint venture disputes.svg">Joint Venture Disputes</option>\n' +
                '                                                <option value="key aspects of gdpr.svg">Key Aspects of GDPR</option>\n' +
                '                                                <option value="media searches.svg">Media Searches</option>\n' +
                '                                                <option value="mega capital projects disputes.svg">Mega Capital Projects Disputes</option>\n' +
                '                                                <option value="misleading-incorrect-false information provided in the resume.svg">Misleading Incorrect False Information Provided in the Resume</option>\n' +
                '                                                <option value="off-court settlements.svg">Off Court Settlements</option>\n' +
                '                                                <option value="online reputation management.svg">Online Reputation Management</option>\n' +
                '                                                <option value="operations management.svg">Operations Management</option>\n' +
                '                                                <option value="organisation-structure-personal-policies-internal-control-analysis.svg">Organisation Structure Personal Policies Internal Control Analysis</option>\n' +
                '                                                <option value="passport-voter-card-pan-validation.svg">Passport Voter Card Pan Validation</option>\n' +
                '                                                <option value="performance.svg">Performance</option>\n' +
                '                                                <option value="planning.svg">Planning</option>\n' +
                '                                                <option value="policies data privacy impact assessment.svg">Policies Data Privacy Impact Assessment</option>\n' +
                '                                                <option value="policies for gdpr.svg">Policies for GDPR</option>\n' +
                '                                                <option value="premature contract termination.svg">Premature Contract Termination</option>\n' +
                '                                                <option value="privacy governance framework.svg">Privacy Governance Framework</option>\n' +
                '                                                <option value="process conformity.svg">Process Conformity</option>\n' +
                '                                                <option value="product quality.svg">Product Quality</option>\n' +
                '                                                <option value="product sampling.svg">Product Sampling</option>\n' +
                '                                                <option value="professional-support.svg">Professional Support</option>\n' +
                '                                                <option value="recovery of deleted data.svg">Recovery of Deleted Data</option>\n' +
                '                                                <option value="reduce outreach requirements.svg">Reduce Outreach Requirements</option>\n' +
                '                                                <option value="reporting.svg">Reporting</option>\n' +
                '                                                <option value="risk assessment.svg">Risk Assessment</option>\n' +
                '                                                <option value="roadmap.svg">Roadmap</option>\n' +
                '                                                <option value="secured-vetted-transport.svg">Secured Vetted Transport</option>\n' +
                '                                                <option value="securities ltigation.svg">Securities Ltigation</option>\n' +
                '                                                <option value="shareholder disputes.svg">Shareholder Disputes</option>\n' +
                '                                                <option value="social media forensics.svg">Social Media Forensics</option>\n' +
                '                                                <option value="standardize and automate.svg">Standardize and Automate</option>\n' +
                '                                                <option value="tap into high quality data.svg">Tap Into High Quality Data</option>\n' +
                '                                                <option value="vacation-and-time-off.svg">Vacation and Time Off</option>\n' +
                '                                                <option value="vendor audits.svg">Vendor Audits</option>\n' +
                '                                                <option value="vendor profile.svg">Vendor Profile</option>\n' +
                '\n' +
                '\n' +
                '                                            </select>\n' +
                '\n' +
                '                                        </div>\n' +
                '\n' +
                '                                    </div>\n' +
                '\n' +
                '\n' +
                '                                    <div class="item form-group">\n' +
                '                                        <label for="middle-name" class="col-form-label col-md-2 col-sm-2 label-align">Priority</label>\n' +
                '                                        <div class="col-md-10 col-sm-10 ">\n' +
                '                                            <input id="priority" class="form-control" type="number" min="0" name="priority[]" required>\n' +
                '                                        </div>\n' +
                '                                    </div>\n' +
                '\n' +
                '\n' +
                '                                    <div class="dvalbtn">\n' +
                '                                        <a href="#"  class="btn btn-danger divdeletev">Delete </a>\n' +
                '\n' +
                '                                    </div>\n' +
                '\n' +
                '                                    <br>\n' +
                '                                    <hr>\n' +
                '                                    <br>\n' +
                '\n' +
                '\n' +
                '\n' +
                '                                </div>\n');

            $('.divdeletev').on('click',function() {
                $(this).parent().parent().remove();

            });

            $("textarea").each(function(){
                CKEDITOR.inline( this );
            });

            $("html, body").animate({ scrollTop: $(document).height() }, "slow");

        });

        $('.divdeletev').on('click',function() {
            $(this).parent().parent().remove();

        });



    </script>

@endsection