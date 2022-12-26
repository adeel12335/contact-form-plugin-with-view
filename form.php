<style>
    .required_error{
        color: red;
    }
</style>
<form action="#" method="post" class="wpcf7-form init" id="contact_form_custom" novalidate="novalidate" data-status="init">
    <input type="hidden" name="action" value="cs_submit_contact_form">
    <div class="form_section">
        <div class="row">
            <div class="column">
                <p>
                    <label>First Name:<br>
                        <span class="wpcf7-form-control-wrap"  data-name="first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div class="column">
                <p>
                    <label>Last Name:<br>
                        <span class="wpcf7-form-control-wrap" data-name="last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div class="column">
                <p style="width:200% !important;">
                    <label>Date-Of-Birth:<br>
                        <span class="wpcf7-form-control-wrap" data-name="date_of_birth"><input type="date" name="date_of_birth" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date required_val" aria-invalid="false"></span>  </label>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <p>
                    <label>Your email<br>
                        <span class="wpcf7-form-control-wrap" data-name="your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email required_val" aria-required="true" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div class="column">
                <p>
                    <label>Phone Number<br>
                        <span class="wpcf7-form-control-wrap" data-name="phone-no"><input type="text" name="phone-no" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div>
                <p>
                    <label>Security Number<br>
                        <span class="wpcf7-form-control-wrap" data-name="security_number"><input type="number" name="security_number" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number required_val" aria-invalid="false"></span> </label>
                </p>
            </div>
        </div>
        
          <h5>Residence</h5>
        
        <p class="address-fields-main">
            <label>Home Address<br>
                <span class="wpcf7-form-control-wrap" data-name="home_address"><textarea name="home_address" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"></textarea></span> </label>
        </p>
        
        <div class="row">
            <div class="column">
                <p>
                    <label>Monthly Rent/Mortage<br>
                        <span class="wpcf7-form-control-wrap" data-name="monthly_rent"><input type="number" name="monthly_rent" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-number required_val" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div class="column">
                <p>
                    <label> Years At Address<br>
                        <span class="wpcf7-form-control-wrap" data-name="years_at_address"><select name="years_at_address" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></span> </label>
                </p>
            </div>
            <div class="column">
                <p>
                    <label> Months At Address<br>
                        <span class="wpcf7-form-control-wrap" data-name="months_at_address"><select name="months_at_address" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option></select></span><br>
                    </label>
                </p>
            </div>
        </div>
        
        <h5>Employment </h5>
        <div class="row">
            <div class="column">
                <p>
                    <label>Driver license number<br>
                        <span class="wpcf7-form-control-wrap" data-name="driver_license_number"><input type="text" name="driver_license_number" value="" size="40" class="wpcf7-form-control wpcf7-text required_val" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div class="column">
                <p>
                    <label>Driver License State<br>
                        <span class="wpcf7-form-control-wrap" data-name="driver_license_state"><input type="text" name="driver_license_state" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div class="column">
                <p>
                    <label>Driver License Issue Date<br>
                        <span class="wpcf7-form-control-wrap" data-name="driver_license_issue_date"><input type="date" name="driver_license_issue_date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date required_val" aria-invalid="false"></span></label>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <p >
                    <label>Driver License Exp Date<br>
                        <span class="wpcf7-form-control-wrap" data-name="driver_license_expiration_date"><input type="date" name="driver_license_expiration_date" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date required_val" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div class="column">
                <p>
                    <label>Employer Name<br>
                        <span class="wpcf7-form-control-wrap" data-name="employer_name"><input type="text" name="employer_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div>
                <p>
                    <label>Monthly Gross income<br>
                        <span class="wpcf7-form-control-wrap" data-name="monthly_gross_income"><input type="number" name="monthly_gross_income" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number required_val" aria-required="true" aria-invalid="false"></span> </label>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <p>
                    <label> Years At Job<br>
                        <span class="wpcf7-form-control-wrap" data-name="years_at_job"><select name="years_at_job" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></span> </label>
                </p>
            </div>
            <div class="column">
                <p>
                    <label> Months At Job<br>
                        <span class="wpcf7-form-control-wrap" data-name="months_at_job"><select name="months_at_job" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required required_val" aria-required="true" aria-invalid="false"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select></span> </label>
                </p>
            </div>
        </div>
        <div class="row">
            <p>      Add Trade In: <input type="checkbox" id="myCheck" ></p>
            <p style="font-size:13px !important; margin-top:-20px !important;"> Check Value Of Your Vehicle <span style="color:orange !important;font-size:11px !important;">www.KBB.com</span></p>
            <div class="column">
                <p id="text" style="display:none">
                    <label>Trade In Value<br>
                        <span class="wpcf7-form-control-wrap" data-name="trade_in_value"><input type="text" name="trade_in_value" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span> </label>
                </p>
            </div>
            <div class="column">
                <p id="text1" style="display:none">
                    <label>Pay Off Amount<br>
                        <span class="wpcf7-form-control-wrap" data-name="pay_off_amount"><input type="number" name="pay_off_amount" value="" class="wpcf7-form-control wpcf7-number wpcf7-validates-as-required wpcf7-validates-as-number" aria-required="true" aria-invalid="false"></span> </label>
                </p>
            </div>
        </div>
        <p><input type="button" value="Review" class="has-spinner wpcf7-submit review_btn"><span class="wpcf7-spinner"></span></p>
    </div>
</form>


<div role="form" class="wpcf7 review_section" id="wpcf7-f282-p550-o1" lang="en-US" dir="ltr" style="display: none">
    <h5 style="text-align:center;"> Pre-Qualify For auto Financing</h5>
    <br>
    <div class="three-fields-row">
        <br>
        <p class="three-fields-main">First Name :<span style="font-size:16px; font-weight:300;"><i id="first-name-show"></i></span></p>
        <p class="three-fields-main">Last Name :<span style="font-size:16px;font-weight:300;"><i id="last-name-show"></i></span></p>
        <p class="three-fields-main">Date-Of Birth :<span style="font-size:16px;font-weight:300;"><i id="date_of_birth-show"></i></span></p></div>
    <div class="three-fields-row">
        <br>
        <p class="three-fields-main">Your email :<span style="font-size:16px;font-weight:300;"><i id="your-email-show"></i></span></p>
        <p class="three-fields-main">Phone Number :<span style="font-size:16px;font-weight:300;"><i id="phone-no-show"></i></span>
</p>
        <p class="three-fields-main">Security Number :<span style="font-size:16px;font-weight:300;"><i id="security_number-show"></i></span></p><hr></div>
    <h5>Residence</h5>
    <p class="three-fields-main">Home Address :<span style="font-size:16px;font-weight:300;"><i id="home_address-show"></i></span></p>
    <div class="three-fields-row"><p class="three-fields-main">Monthly Rent/Mortage :<span style="font-size:16px;font-weight:300;"><i id="monthly_rent-show"></i></span></p>
        <p class="three-fields-main">Years At Address :<span style="font-size:16px;font-weight:300;"><i id="years_at_address-show"></i></span></p>
        <p class="three-fields-main">Months At Address:<span style="font-size:16px;font-weight:300;"><i id="months_at_address-show"></i></span></p><hr></div>
        <h5>Employment</h5>
        <br>
        <div class="three-fields-row"><p class="three-fields-main">Driver license number:<span style="font-size:16px;font-weight:300;"><i id="driver_license_number-show"></i>
           </span> </p>
            <p class="three-fields-main">Driver License State:<span style="font-size:16px;font-weight:300;"><i id="driver_license_state-show"></i></span></p>
            <p class="three-fields-main">Driver License Issue Date:<span style="font-size:16px;font-weight:300;"><i id="driver_license_issue_date-show"></i></span></p>
            <br></div>
        <div class="three-fields-row"><p class="three-fields-main">Driver License Exp Date:<span style="font-size:16px;font-weight:300;"><i id="driver_license_expiration_date-show"></i></span>
            </p>
            <p class="three-fields-main">Employer Name :<span style="font-size:16px;font-weight:300;"><i id="employer_name-show"></i></span></p>
            <p class="three-fields-main">Monthly Gross income:<span style="font-size:16px;font-weight:300;"><i id="monthly_gross_income-show"></i></span></p></div>
        <div class="three-fields-row">
            <br>
            <p class="three-fields-main">Years At Job:<span style="font-size:16px;font-weight:300;"><i id="years_at_job-show"></i></span></p>
            <p class="three-fields-main">Months At Job:<span style="font-size:16px;font-weight:300;"><i id="months_at_job-show"></i></span></p><hr></div>
        <br>
        <p class="three-fields-main">Trade In Value :<span style="font-size:16px;font-weight:300;"><i id="trade_in_value-show"></i></span></p>
        <p class="three-fields-main">Pay Off Amount:<span style="font-size:16px;font-weight:300;"><i id="pay_off_amount-show"></i></span></p><hr>
        
        <br>
        <p></p>
        <p><input type="checkbox" id="agreement" name="agreement" value="agreement"> I understand that by clicking the \"GET PRE-QUALIFIED\" button, i am providing \"written instructions\"
            under the FCRA authorizing Nowcom,LLC DBA CarZing to obtain my personal credit profile and other information
            from credit reporting agencies solely for credit pre-qualification and affirming i have read and agree to
            the Privacy Policy and Terms of Use.</p>
        <p id="agreement_error" style="display: none;color: red">Please Check the checkbox</p>
        <br>
        <br><div>
            <button type="button" id="submit_form_btn" >GET PRE-QUALIFIED</button>

            <input type="button" id="edit_form_btn" value="Edit Form" >
        </div>
    </div>
</div>
<div id="success_msg">

</div>
<script>
    jQuery(document).ready(function($) {
        jQuery(".wpcf7-form-control").change(function () {
            var name = $(this).attr("name");
            var val = $(this).val();
            import_values(name,val);
        });
        jQuery(".wpcf7-form-control").keyup(function () {
            var name = $(this).attr("name");
            var val = $(this).val();
            import_values(name,val);
        });

        $(".review_btn").click(function(){
            if ($('.required_error').length > 0) {
                $(".required_error").remove();
            }
            var is_sucess = true;
            $('.required_val').each(function(i, obj) {
                if($(this).val() == ''){
                    is_sucess = false;
                    $(this).parent().append('<span class="required_error">Field is Required!</span>')

                }
            })
            if(is_sucess == true) {

                $(".review_section").show(500);
                $(".form_section").hide(500);

            }
        });
        $("#edit_form_btn").click(function(){
            if ($('.required_error').length > 0) {
                $(".required_error").remove();
            }
            $(".review_section").hide(500);
            $(".form_section").show(500);
        });
        $("#myCheck").change(function(){
            if($(this).is(':checked')){
                $("input[name='trade_in_value']").addClass("required_val");
                $("input[name='pay_off_amount']").addClass("required_val");
                $("#text").show();
                $("#text1").show();

            }else{

                $("input[name='trade_in_value']").removeClass("required_val");
                $("input[name='pay_off_amount']").removeClass("required_val");
                $("#text").hide();
                $("#text1").hide();

            }

        });
        function import_values(name,val) {

            var id = '#'+name+'-show';
            $(id).html(val);

        }
        $("#submit_form_btn").click(function(){
            if($('#agreement').is(':checked')) {

                $('#agreement_error').hide();
                $('#submit_form_btn').html('Submit Form <i class="fa fa-circle-o-notch fa-spin"> </i>');
                $('#submit_form_btn').prop('disabled', true);
                var form = $('#contact_form_custom');
                $.ajax({
                    type: "POST",
                    url: '<?= admin_url('admin-ajax.php'); ?>',
                    data: form.serialize(), // serializes the form's elements.
                    success: function (data) {

                        $('#submit_form_btn').html('Submit Form');
                        $('#submit_form_btn').prop('disabled', false);
                        $(".review_section").hide();
                        $(".form_section").hide();
                        $('#success_msg').html('Hi , Thank you for contacting us we will contact you on your email ' + $("input[name='your-email']").val() + '.');

                    }
                });
            }
            else{

                $('#agreement_error').show();
                
                
            }


        });
    });
</script>