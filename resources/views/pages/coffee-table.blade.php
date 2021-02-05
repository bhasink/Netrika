
@extends('layout.app')


@section('content')

    <style>
        .coffee-page {
            height: 600px;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(/img/banner/coffee-table.jpg);
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .c-box{
            text-align: center;
            padding: 0rem 5rem;
            color: #fff;
        }
        .small-c-text{
            font-size: 1rem;
            margin-top: 1.2rem;
        }
        .coffee-title{
            color: #fde428;
            font-weight: 700;
            margin-bottom: 0.2rem;
        }
        .c-sub-heading {
            margin-top: 1rem;
            font-family: Poppins;
            font-size: 1.2rem;
        }
        .counts{
            padding: 0;
            display: flex;
            margin: 4em 0;
            justify-content: center;
            text-align: center;
        }

        .counts li{
            max-width: 300px;
            width: 100%;
            height: auto;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 10px 0;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
        }

        .counts li span{
            display: inline-block;
            font-weight: bolder;
            font-size: 2.2em !important;
            line-height: 1.0em;
            margin-left: 0.3rem;
        }
        .counts small{
            font-size: 2rem;
        }
        .count-text{
            font-family: "Poppins", Sans-serif;
            text-transform: capitalize;
            font-size: 1.5rem;

        }
        .left-border-coffe{
            border-left: 5px solid #e30016;
        }
        .left-border-coffe:hover {
            background-color: #e30016;
            padding: 0 0.5rem;
        }
        sup {
            top: -0.3em;
        }
        .coffee-contact-box{
            background-color: #ffffff;
            padding: 1rem;
        }
        .p1{
            text-align: center;
            font-weight: 700;
            font-size: 1.2rem;
        }
        .inn_upls22 {
            /* display: flex; */
            /* justify-content: space-between; */
            border-bottom: 1px solid #000000;
            /* align-items: baseline; */
            margin-bottom: 8px;
            position: relative;
        }


        .inn_upls22 fieldset {
            width: 100%;
            margin-bottom: 0px;
            border-bottom: 0px solid #000000;
        }
        .inn_upls22 fieldset input{
            border-bottom: 0px solid #000000;
            background: 0px;
            border: 0px;
            padding-bottom: 4px;
            width: 100%;
            /* height: 16px; */
            line-height: 14px;
            padding: 12px 5px;
            background: transparent;
            border: none;
            /* border-bottom: 1px solid #000000; */
            color: #000000;
            font-size: 10px;
            border-radius: 0;
            padding-bottom: 0px;
            box-shadow: none;
            font-weight: 300;
            letter-spacing: 1px;
        }
        .uploFl {
            display: block;
        }

        .lblup .lblup_data{
            top: -6px;
            opacity: 1;
            padding: 0px;
            font-weight: 600;
            font-size: 12px;
        }
        .show_upld {
            display: block!important;
        }
        .top_form_hai .form-coNtl:focus ~ .label-wrap.sltwrp, .top_form_hai .form-coNtl ~ .hasVal.sltwrp {
            top: -5px;
        }
        #EnquiryForm1_UploadedFile {
            padding: 3px 0px 0px;
            position: relative;
            z-index: 1;
        }

        .lblup {
            position: absolute;
            left: 0px;
            position: absolute;
            pointer-events: none;
            left: 3px;
            top: 8px;
            font-weight: 400;
            font-size: 13px;
            color: #583610;
            line-height: 15px;
            /* opacity: .5; */
            -webkit-transition: all 1s ease;
            transition: all 1s ease;
        }

        #EnquiryForm1_UploadedFile{
            opacity: 0;
            POSITION: ABSOLUTE;
            RIGHT: 0PX;
            TOP: 0PX;
            WIDTH: 123PX;
        }

        .opcFile{
            border: 1px solid #000000;
            text-align: center;
            font-size: 12px;
            line-height: 23px;
            position: absolute;
            right: 0px;
            color: #7d3d10;
            width: 100px;
            height: 24px;
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
            padding: 0px 4px;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            top: -2px;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            display: none;
        }

        .form-coNtl {
            width: 100%;
            /* height: 16px; */
            line-height: 14px;
            padding: 12px 5px;
            background: transparent;
            border: none;
            border-bottom: 1px solid #000000;
            color: #000000;
            font-size: 10px;
            border-radius: 0;
            padding-bottom: 0px;
            box-shadow: none;
            font-weight: 300;
            letter-spacing: 1px;
        }


        .login_section .p1[data-v-4e3a6b56] {
            margin-bottom: 22px;
            color: #3f3e3f;
            font-size: 16px;
            letter-spacing: .17px;
            line-height: 22px;
        }
        fieldset:not(:last-child) {
            margin-bottom: 8px;
            position: relative;
        }
        label.label-wrap {
            position: absolute;
            pointer-events: none;
            left: 3px;
            top: 8px;
            font-weight: 400;
            font-size: 13px;
            color: #000000;
            line-height: 15px;
            /* opacity: .5; */
            -webkit-transition: all 1s ease;
            transition: all 1s ease;
        }


        .top_form_hai .form-coNtl:focus ~ .label-wrap,
        .top_form_hai .form-coNtl ~ .hasVal {
            top: -6px;
            opacity: 1;
            padding: 0px;
            font-weight: 600;
            font-size: 12px;
        }

        .left_section p {
            font-size: 16px;
            font-weight: 300;
        }

        .EmtSec h3,
        .Comp h3,
        .Rch h3 {
            font-size: 23px;
            margin: 5px 0px;
            font-weight: 300;
        }

        .EmtSec h3 small,
        .Comp h3 small,
        .Rch h3 small {
            font-size: 23px;
            font-weight: 300;
            color: #ffffff;
        }

        .ParSecNet {
            float: left;
            width: 100%;
            position: relative;
            display: block;
        }

        .ParSecNet p {
            font-size: 14px;
            font-weight: 300;
            color: #ffffff;
            line-height: 18px;
        }

        .SlideSecText {
            transition: all 1s ease;
        }

        .arrow_go_dwn {
            cursor: pointer;
            position: absolute;
            bottom: -100px;
            left: 0px;
            display: none;
        }
        .show_upld {
            display: block!important;
        }
        .opcFile {
            border: 1px solid #000000;
            text-align: center;
            font-size: 12px;
            line-height: 23px;
            position: absolute;
            right: 0px;
            color: #000000;
            width: 100px;
            height: 24px;
            /* display: flex; */
            /* align-items: center; */
            /* justify-content: center; */
            padding: 0px 4px;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            top: -2px;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            display: none;
        }
        .lblup {
            position: absolute;
            left: 0px;
            position: absolute;
            pointer-events: none;
            left: 3px;
            top: 8px;
            font-weight: 400;
            font-size: 13px;
            color: #000000;
            line-height: 15px;
            /* opacity: .5; */
            -webkit-transition: all 1s ease;
            transition: all 1s ease;
        }
        .lblup.lblup_data{
            top: -6px;
            opacity: 1;
            padding: 0px;
            font-weight: 600;
            font-size: 12px;
        }
        .second-box{
            padding-right: 6rem;
        }
        .submit-cbtn{
            background-color: #002e5b;
            color: #ffffff;
            font-weight: 700;
            font-size: 14px;
            text-transform: capitalize;
            line-height: 22px;
            padding: 8px 20px 8px 20px;
            border-radius: 8px;
            border: 1px solid;
            text-align: center;
            justify-content: center;
            display: inline-block;
        }
        .submit-cbtn:hover{
            background-color: #E30016;
        }
        .notice-coffee{
            text-align: center;
            font-family: "Poppins", Sans-serif;
            color: #e30016;
            font-size: 0.9rem;
            line-height: 18px;
            margin-bottom: 0rem;
        }
        .notice-coffeesec{
            text-align: center;
            font-family: "Poppins", Sans-serif;
            font-size: 0.9rem;
            color: #e30016;
            font-weight: 600;
            margin-bottom: 0rem;
        }
        @media screen and (max-width: 600px){
            .coffee-page {
                height: auto;
                background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(/img/banner/coffee-table.jpg);
                background-size: cover;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .c-box {
                padding: 0rem 0.5rem;
            }
            .counts{
                display: block;
            }
            .second-box{
                padding-right: 15px;
                padding-bottom: 2rem;
            }
        }
    </style>

    <div class="coffee-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 c-box">
                    <h5 class="c-sub-heading">We are delighted to announce</h5>
                    <h1 class="coffee-title">1<sup>ST</sup> EVER COFFEE TABLE BOOK</h1>
                    <h5 style="margin-top: 0rem;" class="c-sub-heading">in the Fraud Risk and Security Industry</h5>
                    <h5 class="small-c-text">Netrika Coffee Table Book will feature top 100 Corporate Risk heads comprising of <br> Fraud Risk, Physical Security, IPR, Cyber Security, Background check and Trainings
                    </h5>
                    <ul class="counts">
                        <li>
                            <p class="left-border-coffe"> <span class='numscroller' data-min='1' data-max='3000' data-delay='1' data-increment='11'>3000</span><small> + </small>
                               <p class="count-text">Entries</p>
                            </p>
                        </li>

                        <li>
                            <p class="left-border-coffe"> <span class='numscroller' data-min='1' data-max='2500' data-delay='1' data-increment='11'>2500</span><small> + </small>
                                <p class="count-text">Companies</p>

                            </p>
                        </li>

                        <li>
                            <p class="left-border-coffe"> <span class='numscroller' data-min='1' data-max='3500' data-delay='1' data-increment='15'>3500</span><small> + </small>
                                <p class="count-text">Reach</p>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 second-box">
                    <div class="coffee-contact-box scrollanimation animated bounceInRight">
                    <div class="topLogin">

                        <div  class="BlgDetailSecShow">
                            <p class="p1"> Nominees details </p>

                            <div class="top_form_hai">


                                <fieldset>
                                    <input name="EnquiryForm1$txtBrandingFullName" type="text" id="EnquiryForm1_txtBrandingFullName" class="form-coNtl" autocomplete="off">
                                    <label class="label-wrap"> Name  </label>
                                </fieldset>
                                <fieldset>
                                    <input name="EnquiryForm1$txtDesignation" type="text" id="EnquiryForm1_txtDesignation" class="form-coNtl" autocomplete="off">
                                    <label class="label-wrap"> Designation  </label>
                                </fieldset>
                                <fieldset>
                                    <input name="EnquiryForm1$txtOrganisation" type="text" id="EnquiryForm1_txtOrganisation" class="form-coNtl" autocomplete="off">
                                    <label class="label-wrap"> Organisation  </label>
                                </fieldset>
                                <fieldset>
                                    <select name="EnquiryForm1$ddService" id="EnquiryForm1_ddService" class="form-coNtl">
                                        <option value="Select">Select</option>
                                        <option value="Forensic Investigation">Forensic Investigation</option>
                                        <option value="Due Diligence">Due Diligence</option>
                                        <option value="Information Security">Information Security</option>
                                        <option value="GDPR Compliance">GDPR Compliance</option>
                                        <option value="Security & Risk Consulting">Security & Risk Consulting</option>
                                        <option value="Brand Protection">Brand Protection</option>
                                        <option value="Background Checks">Background Checks</option>
                                        <option value=" Training and Certifications"> Training and Certifications</option>

                                    </select>
                                    <label class="label-wrap sltwrp">Service Sector</label>
                                </fieldset>



                                <div class="inn_upls22">



                                    <fieldset class="uploFl">

                                        <label class="lblup"> Profile Brief / Achievements   </label>
                                        <label class="opcFile">Upload file</label>
                                        <input name="EnquiryForm1$txtProfileBrief" type="text" id="EnquiryForm1_txtProfileBrief" class="form-coNtl" autocomplete="off">
                                        <input name="EnquiryForm1$UploadedFile" type="file" id="EnquiryForm1_UploadedFile" onchange="return validateFileUploadProfile(this);">
                                    </fieldset>
                                </div>
                                <fieldset>
                                    <input name="EnquiryForm1$txtWHyThePersontobefeaturedinNCTB" type="text" id="EnquiryForm1_txtWHyThePersontobefeaturedinNCTB" class="form-coNtl" autocomplete="off">
                                    <label class="label-wrap"> Why the person to be featured in NCTB </label>
                                </fieldset>
                                <span></span>
                                <fieldset>
                                    <input name="EnquiryForm1$txtYourName" type="text" id="EnquiryForm1_txtYourName" class="form-coNtl" autocomplete="off">
                                    <label class="label-wrap"> Nominee's Contact Info/ Full Name </label>
                                </fieldset>
                                <fieldset>
                                    <input name="EnquiryForm1$txtBrandingEmailID" type="text" id="EnquiryForm1_txtBrandingEmailID" class="form-coNtl" autocomplete="off">

                                    <label class="label-wrap"> Your Email Id </label>
                                </fieldset>
                                <fieldset>
                                    <input name="EnquiryForm1$txtBrandingMobileNo" type="number" maxlength="10" id="EnquiryForm1_txtBrandingMobileNo" class="form-coNtl" autocomplete="off" onkeypress="return numeralsOnly(event)">
                                    <label class="label-wrap"> Your Contact No.</label>
                                </fieldset>

                                <fieldset style="display:none;">
                                    <textarea name="EnquiryForm1$txtBrandingMessage" rows="2" cols="20" id="EnquiryForm1_txtBrandingMessage" class="form-coNtl" autocomplete="off"></textarea>
                                </fieldset>
                                <fieldset style="text-align: center;">
                                    <input type="submit" name="EnquiryForm1$btnSubmit" value="Submit" onclick="return pagecheckLetsTalkTop();" id="EnquiryForm1_btnSubmit" class="submit-cbtn">
                                </fieldset>
                                <span class="fttrmsg"></span>



                            </div>

                            <p class="notice-coffee"><span>Nominations are closed now. <br>
                                For more details.</span></p>
                            <p class="notice-coffeesec"><span>Please contact us at info@netrika.com</span></p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <section class="cta" id="cta">
        <div class="container-fuld">
            <div class="row">

                <h5 class="cta-title"> Achieving Excellence with A Global Vision
                </h5>

            </div>
        </div>
    </section>




@endsection

@section('script')
    <script type="text/javascript">
        //data counter//

        (function($){
            $(window).on("load",function(){
                $(document).scrollzipInit();
                $(document).rollerInit();
            });
            $(window).on("load scroll resize", function(){
                $('.numscroller').scrollzip({
                    showFunction    :   function() {
                        numberRoller($(this).attr('data-slno'));
                    },
                    wholeVisible    :     false,
                });
            });
            $.fn.scrollzipInit=function(){
                $('body').prepend("<div style='position:fixed;top:0px;left:0px;width:0;height:0;' id='scrollzipPoint'></div>" );
            };
            $.fn.rollerInit=function(){
                var i=0;
                $('.numscroller').each(function() {
                    i++;
                    $(this).attr('data-slno',i);
                    $(this).addClass("roller-title-number-"+i);
                });
            };
            $.fn.scrollzip = function(options){
                var settings = $.extend({
                    showFunction    : null,
                    hideFunction    : null,
                    showShift       : 0,
                    wholeVisible    : false,
                    hideShift       : 0,
                }, options);
                return this.each(function(i,obj){
                    $(this).addClass('scrollzip');
                    if ( $.isFunction( settings.showFunction ) ){
                        if(
                            !$(this).hasClass('isShown')&&
                            ($(window).outerHeight()+$('#scrollzipPoint').offset().top-settings.showShift)>($(this).offset().top+((settings.wholeVisible)?$(this).outerHeight():0))&&
                            ($('#scrollzipPoint').offset().top+((settings.wholeVisible)?$(this).outerHeight():0))<($(this).outerHeight()+$(this).offset().top-settings.showShift)
                        ){
                            $(this).addClass('isShown');
                            settings.showFunction.call( this );
                        }
                    }
                    if ( $.isFunction( settings.hideFunction ) ){
                        if(
                            $(this).hasClass('isShown')&&
                            (($(window).outerHeight()+$('#scrollzipPoint').offset().top-settings.hideShift)<($(this).offset().top+((settings.wholeVisible)?$(this).outerHeight():0))||
                                ($('#scrollzipPoint').offset().top+((settings.wholeVisible)?$(this).outerHeight():0))>($(this).outerHeight()+$(this).offset().top-settings.hideShift))
                        ){
                            $(this).removeClass('isShown');
                            settings.hideFunction.call( this );
                        }
                    }
                    return this;
                });
            };
            function numberRoller(slno){
                var min=$('.roller-title-number-'+slno).attr('data-min');
                var max=$('.roller-title-number-'+slno).attr('data-max');
                var timediff=$('.roller-title-number-'+slno).attr('data-delay');
                var increment=$('.roller-title-number-'+slno).attr('data-increment');
                var numdiff=max-min;
                var timeout=(timediff*1000)/numdiff;
                //if(numinc<10){
                //increment=Math.floor((timediff*1000)/10);
                //}//alert(increment);
                numberRoll(slno,min,max,increment,timeout);

            }
            function numberRoll(slno,min,max,increment,timeout){//alert(slno+"="+min+"="+max+"="+increment+"="+timeout);
                if(min<=max){
                    $('.roller-title-number-'+slno).html(min);
                    min=parseInt(min)+parseInt(increment);
                    setTimeout(function(){numberRoll(eval(slno),eval(min),eval(max),eval(increment),eval(timeout))},timeout);
                }else{
                    $('.roller-title-number-'+slno).html(max);
                }
            }
        })(jQuery);

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            Sys.WebForms.PageRequestManager.getInstance().add_endRequest(EndRequestHandler);
            function EndRequestHandler(sender, args) {
                $('.form-coNtl').focusout(function () {
                    if ($(this).val() != "") {
                        $(this).siblings('.label-wrap').addClass('hasVal')
                    } else {
                        $(this).siblings('.label-wrap').removeClass('hasVal')
                    }
                });
                $('.form-coNtl').each(function () {
                    if ($(this).val() != "") {
                        $(this).parents('fieldset').addClass('MyClassName');
                    } else {
                        $('.label-wrap').removeClass("hasVal");
                    }
                });
                $('.MyClassName').each(function () {
                    $(this).children('.label-wrap').addClass('hasVal');
                });
                $('.MsgTextShow').slideUp(7000);
            }
        });

        (function () {
            $('.form-coNtl').focusout(function () {
                if ($(this).val() != "") {
                    $(this).siblings('.label-wrap').addClass('hasVal')
                } else {
                    $(this).siblings('.label-wrap').removeClass('hasVal')
                }
            });
        })();

        var currentdate = new Date();
        var year = currentdate.getFullYear();
        var month = (currentdate.getMonth() + 1).toString().padStart(2, "0");
        var day = currentdate.getDate().toString().padStart(2, "0");
        var hour = currentdate.getHours().toString().padStart(2, "0");
        var minute = currentdate.getMinutes().toString().padStart(2, "0");

        var Cnt = '' + month + '' + day + '' + hour + '' + minute;

        $('.autoincres1').attr('data-count', Math.round(Cnt / 7640))
        $('.autoincres2').attr('data-count', Math.round(Cnt / 11001))
        $('.autoincres3').attr('data-count', Math.round(Cnt / 5046))

        $('.counter').each(function () {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({ countNum: $this.text() }).animate({
                    countNum: countTo
                },
                {
                    duration: 8000,
                    easing: 'linear',
                    step: function () {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function () {
                        $this.text(this.countNum);
                    }
                });
        });

        $("#EnquiryForm1_ddService").each(function () {
            $(this).first().val('')
        });
        $('.opcFile').removeClass('show_upld');
        //$("#EnquiryForm1_txtProfileBrief").click(function (evt) {
        //    evt.stopPropagation();
        //})
        //$("#EnquiryForm1_txtProfileBrief").on('focus blur', function (ev) {
        //    ev.stopPropagation();
        //    $('.uploFl').removeClass('show_upld');
        //})


        $('#EnquiryForm1_txtProfileBrief').on('blur', function () {
            $('.uploFl').removeClass('show_upld');
        }).on('focus', function () {
            $('.uploFl').removeClass('show_upld');
        });

        $('#EnquiryForm1_UploadedFile').change(function (e) {
            var i = $(this).prev('label').clone();
            var file = $('#EnquiryForm1_UploadedFile')[0].files[0].name;
            $(this).prev('#EnquiryForm1_txtProfileBrief').val(file);
        });
        $('#EnquiryForm1_UploadedFile').on('focus blur', function () {
            $(this).parents('.inn_upls22').find('.lblup').addClass('lblup_data');
        });
        $('#EnquiryForm1_txtProfileBrief').on('focus blur', function () {
            $(this).parents('.inn_upls22').find('.lblup').addClass('lblup_data');
            $(this).parents('.inn_upls22').find('.opcFile').addClass('show_upld');
        });

        $('.nxtSecAct').click(function () {
            var dataID = $(this).attr('data-nextSec');
            $('html, body').animate({
                scrollTop: ($('#' + dataID).offset().top - 50)
            }, 1000);
        });



    </script>
    <script language="JavaScript" type="text/javascript">
        function validateFileUploadProfile(obj) {
            var fileName = new String();
            var fileExtension = new String();                // store the file name into the variable
            fileName = obj.value;                // extract and store the file extension into another variable
            fileExtension = fileName.substr(fileName.length - 3, 3);                // array of allowed file type extensions
            var validFileExtensions = new Array("pdf", "txt", "doc", "docx");
            var flag = false;                // loop over the valid file extensions to compare them with uploaded file
            var FileExtension1 = fileName.substring(fileName.lastIndexOf('.') + 1).toLowerCase();
            var LengthOfFile = FileExtension1.length;
            if (LengthOfFile > 3) {
                if (FileExtension1 == "docx") {
                    flag = true;
                }
                else {
                    alert('Files with extension ".' + FileExtension1.toUpperCase() + '" are not allowed.\n\nYou can upload the files with following extensions only:\n.pdf\n.doc\n.txt\n.docx\n');
                    document.getElementById("EnquiryForm1_UploadedFile").value = "";
                    return false;
                }
            }
            if (FileExtension1 != "docx") {
                for (var index = 0; index < validFileExtensions.length; index++) {
                    if (fileExtension.toLowerCase() == validFileExtensions[index].toString().toLowerCase()) {
                        flag = true;
                    }
                }
            }
            if (flag == false) {
                alert('Files with extension ".' + fileExtension.toUpperCase() + '" are not allowed.\n\nYou can upload the files with following extensions only:\n.pdf\n.doc\n.txt\n.docx\n');
                document.getElementById("EnquiryForm1_UploadedFile").value = "";
                return false;
            }
            else {
                return true;
            }
        }
    </script>
@endsection
