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
					</li>
				</ul>
			</div>
			<div class="row" id="sortable_portlets">
				<div class="col-md-3 column sortable">
					<div class="portlet portlet-sortable box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Bussiness Development
							</div>
						</div>
						<div class="portlet-body">
						<ul class="">
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="{{ url('customer-registration') }}" target="_blank">Customer Registration</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Insurable Registration</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Issuing Policy</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Renew Issued Policy</a></li>
						</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 column sortable">
					<div class="portlet portlet-sortable box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Account
							</div>
						</div>
						<div class="portlet-body">
						<ul class="">
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Account Type</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Account Rule</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Ledger</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Account Posting</a></li>
						</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 column sortable">
					<div class="portlet portlet-sortable box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Claim
							</div>
						</div>
						<div class="portlet-body">
						<ul class="">
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Claim Intimation</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Process Claim</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Approve Claim</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Settle Claim</a></li>
						</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 column sortable">
					<div class="portlet portlet-sortable box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Reinsurance
							</div>
						</div>
						<div class="portlet-body">
					<ul class="">
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Cession</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Apportionment</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Treaty (RI)</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Program (RI)</a></li>
						</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 column sortable">
					<div class="portlet portlet-sortable box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Operation Department
							</div>
						</div>
						<div class="portlet-body">
							<ul class="">
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Cession</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Apportionment</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Treaty (RI)</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Program (RI)</a></li>
						</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 column sortable">
					<div class="portlet portlet-sortable box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Reports
							</div>
						</div>
						<div class="portlet-body">
							<ul class="">
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Cession</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Apportionment</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Treaty (RI)</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Program (RI)</a></li>
						</ul>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 column sortable">
					<div class="portlet portlet-sortable box green-haze">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Salesforce Menagement
							</div>
						</div>
						<div class="portlet-body">
							<ul class="">
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Create Agent</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Create Referrals</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Create Branch</a></li>
						  <li><i class="fa fa-caret-right" aria-hidden="true"></i><a href="">Create Employee</a></li>
						</ul>
						</div>
					</div>
				</div>	
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	@include('common.quick')
	<!-- END QUICK SIDEBAR -->
</div>
@stop()