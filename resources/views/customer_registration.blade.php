@extends('layout.master')
@section('content')
<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM -->
			<div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							 Widget settings form goes here
						</div>
						<div class="modal-footer">
							<button type="button" class="btn blue">Save changes</button>
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="index.html">Home</a>
						<i class="fa fa-angle-right"></i>
						<li>Customer Registration</li>
					</li>
				</ul>
			</div>

<!-- main portlet goes here -->

<div class="portlet light bordered">
	<div class="portlet-body form">
		<!-- BEGIN FORM-->
		<form action="#" class="form-horizontal">
          <div class="row">
			<div class="form-body">
			    <div class="form-group">
					<div class="radio-list">
						<label class="radio-inline">
						<input type="radio" name="optionsRadios" id="optionsRadios4" value="option1" checked> Corporate </label>
						<label class="radio-inline">
						<input type="radio" name="optionsRadios" id="optionsRadios5" value="option2"> Individul </label>
					</div>
				</div>
   
				<div class="col-md-4"><strong>Party Code:</strong></div>
				<div class="col-md-4">Party Status:</div>
				<div class="col-md-4"><button type="submit" class="btn green">Save</button></div>
				</div>
            <div class="form-group">
				<div class="col-md-3">
				<label class="control-label">Salutation<span>*</span></label>
					<select class="form-control">
						<option value="">Mr.</option>
						<option value="">Mrs.</option>
						<option value="">Dasho</option>
						<option value="">Lynpo</option>
						<option value="">Dr.</option>
						<option value="">Other</option>
					</select>
				</div>
				<div class="col-md-3">
				<label class="control-label">First Name<span>*</span></label>
					<input type="text" class="form-control" placeholder="first name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Middle Name</label>
					<input type="text" class="form-control" placeholder="middle name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Last Name</label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Email<span>*</span></label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Date of Birth</label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Mobile Number<span>*</span></label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
				<label class="control-label">Work Phone</label>
					<input type="text" class="form-control" placeholder="last name">
				</div>
				<div class="col-md-3">
					<label class="control-label">Country<span>*</span></label>
					<select name="country" id="country_list" class="form-control">
					    <option value="AF">[select one country]</option>
						<option value="AF">Afghanistan</option>
						<option value="AL">Albania</option>
						<option value="DZ">Algeria</option>
						<option value="AS">American Samoa</option>
						<option value="AD">Andorra</option>
						<option value="AO">Angola</option>
						<option value="AI">Anguilla</option>
						<option value="AR">Argentina</option>
						<option value="AM">Armenia</option>
						<option value="AW">Aruba</option>
						<option value="AU">Australia</option>
					</select>
				</div>
				<div class="col-md-3">
				<label class="control-label">Address<span>*</span></label>
					<input type="text" class="form-control" placeholder="address line">
				</div>
				<div class="col-md-3">
				<label class="control-label">Contact Preference</label>
					<select class="form-control">
						<option value="">Email</option>
						<option value="">Physical</option>
						<option value="">Phone</option>
					</select>
				</div>

			</div>	
         </div>
		</form>
		<!-- END FORM-->																
	</div>
</div>


<!-- Leads -->
<div class="row">
<div class="col-md-12">
 <div class="portlet box yellow">
	 <div class="portlet-title">
			<div class="caption">
			   Leads
			</div>
			<div class="tools">	
				<a href="javascript:;" id="more_fields" onclick="add_fields();" class="collapse"></a>
			</div>
     </div>
  </div>
</div>

<div class="col-md-12">
<div class="leads hidden-sm hidden-xs">
<div class="col-md-2">
   No.
</div>
<div class="col-md-2">
   LOB
</div>
<div class="col-md-2">
   Product
</div>
<div class="col-md-1">
   Status
</div>
<div class="col-md-2">
   Source
</div>
<div class="col-md-1">
   Value
</div>
<div class="col-md-2">
   Closed Date
</div>
</div>
</div>

<div class="col-md-12 lead-control" style="margin-top:3px;">
<div class="col-md-2 md-controls">
<div class="form-group">
<label class="hidden-lg hidden-md control-label">No.:</label>

</div>
</div>

<div class="col-md-2 md-controls">
 <div class="form-group">
	<label class="label-control hidden-lg hidden-md">LOB:</label>
	<select class="form-control">
		<option value="">[select]</option>
		<option value="">Motor</option>
		<option value="">Fire</option>
		<option value="">Marine Hull</option>
		<option value="">Marine Cargo</option>
		<option value="">Misc. Liability</option>
		<option value="">Misc non Liability</option>
		<option value="">Engineering</option>
		<option value="">Aviation</option>
	</select>
	</div>
</div>

<div class="col-md-2 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Product:</label>
	<select class="form-control">
	    <option value="">[select]</option>
	</select>
	</div>
</div>
<div class="col-md-1 offset-0 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Status:</label>
	<select class="form-control">
	    <option value="">[select]</option>
		<option value="">To be contracted </option>
		<option value="">Contracted</option>
		<option value="">Could not be contracted</option>
		<option value="">Contact in progress</option>
		<option value="">Qualified</option>
		<option value="">Not Qualified</option>
		<option value="">Pre-Qualified</option>
	</select>
	</div>
</div>

<div class="col-md-2 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Source:</label>
	<select class="form-control">
		<option value="">[select]</option>
		<option value="">Media</option>
		<option value="">Marketing by staff</option>
		<option value="">Customer</option>
		<option value="">Web research</option>
		<option value="">Public event</option>
		<option value="">Recommended by friends</option>
		<option value="">Research</option>
		<option value="">Identified by staff</option>
	</select> 
	</div>
</div>
<div class="col-md-1 offset-0 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Value:</label>
  <input type="text" class="form-control" placeholder="address line">
  </div>
</div>
<div class="col-md-2 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Closed Date:</label>
    <input type="text" class="form-control" placeholder="address line">
    </div>
</div>

<div class="col-md-6 md-controls">
<div class="form-group">
<label class="label-control hidden-lg hidden-md">Description:</label>
	<textarea class="form-control" rows="3" placeholder="description"></textarea>
</div>
</div>
<div class="col-md-6 md-controls">
<div class="form-actions pull-right">
	<button type="button" class="btn btn-xs green">Save</button>
	<button type="submit" class="btn btn-xs green">Undo</button>
</div>
</div>

</div>
</div>



</div>
<!-- End of Leads -->






			<!-- END PAGE CONTENT-->
		</div>
	</div>
	@include('common.quick')
	<!-- END QUICK SIDEBAR -->
</div>
@stop()