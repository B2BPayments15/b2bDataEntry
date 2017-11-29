<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('merchant/create'); ?>

<script>

    function FillBilling(f) {

        if(f.billingtoo.checked === true) {

            f.owner_address.value = f.comp_address.value;

            f.owner_address2.value = f.comp_address2.value;

            f.owner_city.value = f.comp_city.value;

            f.owner_state.value = f.comp_state.value;

            f.owner_country.value = f.comp_country.value;

            f.owner_zipCode.value = f.comp_zipCode.value;

        }

        if(f.billingtoo.checked === false) {

            f.owner_address.value = '';

            f.owner_address2.value = '';

            f.owner_city.value = '';

            f.owner_state.value = '';

            f.owner_city.value = '';

            f.owner_country.value = '';

            f.owner_zipCode.value = '';

        }

    }

</script>

<!-- <pre><?php //print_r($mids->body);?></pre> -->

    <h4>+ Company Details</h4>

<div class="div-form-bg">
    <div class="form-group row">
    	<label for="mid" class="col-sm-4 col-form-label">Mid</label>
    	<div class="col-sm-5"><input type="input" name="mid" class='form-control' value="464473400000311" value="464473400000311" /></div>
    </div>
    

    <div class="form-group row">
    	<label for="legalName" class="col-sm-4 col-form-label">Legal Name</label>
    	<div class="col-sm-5"><input type="input" name="legalName" class='form-control' value="Test Legal Name" /></div>
    </div>

    <div class="form-group row">
    	<label for="dbaName" class="col-sm-4 col-form-label">Company DBA</label>
    	<div class="col-sm-5"><input type="input" name="dbaName" class='form-control' value="Test DBA Name" /></div>
    </div>

    <div class="form-group row">
    	<label for="descriptor" class="col-sm-4 col-form-label">Company Descriptor</label>
    	<div class="col-sm-5"><input type="input" name="descriptor" class='form-control' value="Descriptor" /></div>
    </div>

    <div class="form-group row">
    	<label for="businessDescription" class="col-sm-4 col-form-label">Company Description</label>
    	<div class="col-sm-5"><input type="input" name="businessDescription" class='form-control' value="businessDescription" /></div>
    </div>


    <div class="form-group row">
    	<label for="businessType" class="col-sm-4 col-form-label">Type</label>
    	<div class="col-sm-5">
			<?php 
				$js = array(
					'class' => 'form-control'
				);

				$options = array(
				        'INC'         => 'Inc',
				        'SOLE'           => 'Sole Proprietorship',
				        'PART'         => 'Partnership',
				        'COORP'        => 'Coorporation',
				);

				echo form_dropdown('businessType', $options, 'INC', $js);

			 ?> 
    	</div>
    </div>

    <div class="form-group row">
    	<label for="" class="col-sm-4 col-form-label">Country of Incorporation</label>
    	<div class="col-sm-5">
			<?php 
				$options = array(
				        'CA'         => 'Canada',
				        'US'           => 'United States',
				        'MX'         => 'Mexico',
				);

				echo form_dropdown('countryOfIncorporation', $options, 'CA',$js);

			 ?> 
    	</div>
    </div>

    <div class="form-group row">
    	<label for="email" class="col-sm-4 col-form-label">Company Email</label>
    	<div class="col-sm-5"><input type="email" name="email" class='form-control' value="test@example.com" /></div>
    </div>

    <div class="form-group row">
        <label for="companyPhone" class="col-sm-4 col-form-label">Company Phone</label>
        <div class="col-sm-5"><input type="input" name="companyPhone" class='form-control' value="5145555675" /></div>
    </div>

    <div class="form-group row">
        <label for="alternatePhone" class="col-sm-4 col-form-label">Alternate Phone</label>
        <div class="col-sm-5"><input type="input" name="alternatePhone" class='form-control' value="5145675555" /></div>
    </div>
    

    <div class="form-group row">
        <label for="website" class="col-sm-4 col-form-label">Company Website</label>
        <div class="col-sm-5"><input type="input" name="website" class='form-control' value="www.example.com" /></div>
    </div>



    <div class="form-group row">
        <label for="averagePaymentAmount" class="col-sm-4 col-form-label">Average Payment Amount</label>
        <div class="col-sm-5 input-group">
            <span class="input-group-addon" id="basic-addon1">$</span>
            <input type="input" name="averagePaymentAmount" class='form-control' value="60" />
        </div>
        <div class="col-sm-5 offset-4">
            <small id="averagePaymentAmount" class="form-text text-muted">
                  Enter a dollar amount (no cents - no decimal). Example: 80
            </small>
        </div>
    </div>

    <div class="form-group row">
        <label for="creditCardPresent" class="col-sm-4 col-form-label">Card Present?</label>
        <div class="col-sm-5">
            <?php 
                $js = array(
                    'class' => 'form-control'
                );

                $options = array(
                        '1'         => 'True',
                        '0'           => 'False',
                );

                echo form_dropdown('creditCardPresent', $options, 'true', $js);

             ?> 

        </div>
    </div>

    <div class="form-group row">
        <label for="termsAccepted" class="col-sm-4 col-form-label">Terms accepted?</label>
        <div class="col-sm-5">
            <?php 
                $js = array(
                    'class' => 'form-control'
                );

                $options = array(
                        '1'         => 'True',
                        '0'           => 'False',
                );

                echo form_dropdown('termsAccepted', $options, 'true', $js);

             ?> 

        </div>
    </div>

    


    <div class="form-group row">
        <label for="mccCode" class="col-sm-4 col-form-label">MCC Code</label>
        <div class="col-sm-5 input-group">
            <input type="input" name="mccCode" class='form-control' value="8999" />
        </div>  
        <div class="col-sm-5 offset-4">
            <small id="mccCodeHelp" class="form-text text-muted">
                  Enter 4 digit MCC code. 
            </small>
        </div>      
    </div>

    
    <div class="form-group row">
        <label for="ownershipTypes" class="col-sm-4 col-form-label">Type</label>
        <div class="col-sm-5">
            <?php 
                $js = array(
                    'class' => 'form-control'
                );

                $options = array(
                        'CORPORATION'        => 'Coorporation',
                        'INC'         => 'Inc',
                        'SOLE'           => 'Sole Proprietorship',
                        'PART'         => 'Partnership',
                        
                );

                echo form_dropdown('ownershipTypes', $options, 'CORPORATION', $js);

             ?> 
        </div>
    </div>

    <div class="form-group row">
        <label for="annualProcessing" class="col-sm-4 col-form-label">Annual Processing</label>
        <div class="col-sm-5 input-group">
            <input type="input" name="annualProcessing" class='form-control' readonly value='LEVEL_1' />
        </div>        
    </div>
</div>
    <br>
    <h4>+ Company Address Info</h4>
    <p>



  <div class="form-group">
    <label for="comp_address">Address</label>
    <input type="text" class="form-control" id="comp_address" name="comp_address" value="1234 Main St">
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="comp_address2">Address 2</label>
    <input type="text" class="form-control" id="comp_address2" name="comp_address2" placeholder="Apartment, studio, or floor" value="suite 03">
  </div>
  
    <div class="form-group col-md-6">
      <label for="comp_city">City</label>
      <input type="text" class="form-control" id="comp_city" name="comp_city" value="Montreal">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-5">
      <label for="comp_state">State</label>
      <select id="comp_state" name="comp_state" class="form-control">        
        <?=get_select_states()?>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="comp_country">Country</label>
      <select id="comp_country" name="comp_country" class="form-control">        
    <?=get_select_countries()?>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="comp_zipCode">Zip</label>
      <input type="text" class="form-control" id="comp_zipCode" name="comp_zipCode" value="H1H1H1">
    </div>
</div>

<div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" onclick="FillBilling(this.form)" name="billingtoo">
    Copy company address info to ownership info.
  </label>
</div>

    <br>
    <h4>+ Ownership Details</h4>
    <p>

  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="owner_firstName">First Name</label>
      <input type="input" class="form-control" id="owner_firstName" name="owner_firstName" value="CHRIS">
    </div>
    <div class="form-group col-md-4">
      <label for="owner_middleName">Middle Name</label>
      <input type="input" class="form-control" id="owner_middleName" name="owner_middleName" value="MIDDLE">
    </div>
    <div class="form-group col-md-4">
      <label for="owner_lastName">Last Name</label>
      <input type="input" class="form-control" id="owner_lastName" name="owner_lastName" value="LAST">
    </div>
  </div>

  <div class="form-group">
    <label for="owner_address">Address</label>
    <input type="text" class="form-control" id="owner_address" name="owner_address" value="1234 Main St">
  </div>

  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="owner_address2">Address 2</label>
    <input type="text" class="form-control" id="owner_address2" name="owner_address2" placeholder="Apartment, studio, or floor" value="suite 03">
  </div>
  
    <div class="form-group col-md-6">
      <label for="owner_city">City</label>
      <input type="text" class="form-control" id="owner_city" name="owner_city" value="Montreal">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-5">
      <label for="owner_state">State</label>
      <select id="owner_state" name="owner_state" class="form-control">        
    <?=get_select_states()?>
      </select>
    </div>
    <div class="form-group col-md-5">
      <label for="owner_country">Country</label>
      <select id="owner_country" name="owner_country" class="form-control">        
        <?=get_select_countries()?>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="owner_zipCode">Zip</label>
      <input type="text" class="form-control" id="owner_zipCode" name="owner_zipCode" value="H1H1H">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
          <label>Date of Birth</label>
          <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth" value="1980-01-01">
    </div> 
    <div class="form-group col-md-4">
          <label>SSN</label>
          <input type="input" class="form-control" id="ssn" name="ssn" value="288-418-874">
    </div> 

    <div class="form-group col-md-4">
        <label for="basic-url">Owner Percentage</label>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon3">%</span>
          <input type="text" class="form-control" id="ownerPercentage" name="ownerPercentage" value="50" aria-describedby="basic-addon3">
        </div>
    </div>
</div>

<br>
<h4>+ Driver's License Info</h4>
<div class="form-row">
    <div class="form-group col-md-4">
      <label for="license_state">State</label>
      <select id="license_state" name="license_state" class="form-control">        
        <?=get_select_states()?>
      </select>
    </div>
    <div class="form-group col-md-4">
      <label for="license_country">Country</label>
      <select id="license_country" name="license_country" class="form-control">        
    <?=get_select_countries()?>
      </select>
    </div>

<div class="form-group col-md-4">
          <label for="license_number">License #</label>
          <input type="input" class="form-control" id="license_number" name="license_number" value="123456789">
</div> 
</div>

<br>
<h4>+ Bank Account Info</h4>

<div class="form-row">

<div class="form-group col-md-3">
          <label for="bankAccountNumber">Bank Account #</label>
          <input type="input" class="form-control" id="bankAccountNumber" name="bankAccountNumber" value="0552687">
</div>

<div class="form-group col-md-3">
          <label for="routingNumber">Bank Account #</label>
          <input type="input" class="form-control" id="routingNumber" name="routingNumber" value="81530448">
</div>

<div class="form-group col-md-3">
          <label for="bankCurrency">Bank Account Currency</label>
          <select id="bankCurrency" name="bankCurrency" class="form-control">        
            <option value="USD" selected="selected">USD</option>
            <option value="CAD">CAD</option>
            </select>
</div>



<div class="form-group col-md-3">
      <label for="bankCountry">Country</label>
      <select id="bankCountry" name="bankCountry" class="form-control">        
        <?=get_select_countries()?>
      </select>
    </div>

</div>





  

    

    
    








    



    
    

    


    <input type="hidden" name="position" value='true'>
    <input type="submit" name="submit" value="Add Mid" />

</form>