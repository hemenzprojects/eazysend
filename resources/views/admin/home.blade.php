@extends('admin.layout.main')

@section('content')
<div class="container">
    <div class="row clearfix" style="margin-top: 2%">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>SMS Sent Today</h6>
                            <h2>623</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-server"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>BALANCE</h6>
                            <h2>45</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-trending-up"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>SMS Error message</h6>
                            <h2>32</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-mail"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="widget">
                <div class="widget-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="state">
                            <h6>Received by recipient</h6>
                            <h2>594</h2>
                        </div>
                        <div class="icon">
                            <i class="ik ik-mail"></i>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-12 col-md-12">
                                            
                                          <div class="row">
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card sale-card">
                                                    <div class="card-header">
                                                        <h3>Expense Overview</h3>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div id="realtime-profit" style="height: 150px; padding: 0px; position: relative;"><canvas class="flot-base" width="368" height="225" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 245.552px; height: 150px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; max-width: 35px; top: 150px; font: 400 0px / 0px &quot;Nunito Sans&quot;, sans-serif; color: rgba(84, 84, 84, 0.22); left: 25px; text-align: center;">0</div><div style="position: absolute; max-width: 35px; top: 150px; font: 400 0px / 0px &quot;Nunito Sans&quot;, sans-serif; color: rgba(84, 84, 84, 0.22); left: 62px; text-align: center;">50</div><div style="position: absolute; max-width: 35px; top: 150px; font: 400 0px / 0px &quot;Nunito Sans&quot;, sans-serif; color: rgba(84, 84, 84, 0.22); left: 99px; text-align: center;">100</div><div style="position: absolute; max-width: 35px; top: 150px; font: 400 0px / 0px &quot;Nunito Sans&quot;, sans-serif; color: rgba(84, 84, 84, 0.22); left: 136px; text-align: center;">150</div><div style="position: absolute; max-width: 35px; top: 150px; font: 400 0px / 0px &quot;Nunito Sans&quot;, sans-serif; color: rgba(84, 84, 84, 0.22); left: 173px; text-align: center;">200</div><div style="position: absolute; max-width: 35px; top: 150px; font: 400 0px / 0px &quot;Nunito Sans&quot;, sans-serif; color: rgba(84, 84, 84, 0.22); left: 209px; text-align: center;">250</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 134px; left: 13px; text-align: right;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 101px; left: 6px; text-align: right;">25</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 67px; left: 6px; text-align: right;">50</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 34px; left: 6px; text-align: right;">75</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 0px; text-align: right;">100</div></div></div><canvas class="flot-overlay" width="368" height="225" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 245.552px; height: 150px;"></canvas></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card sale-card">
                                                    <div class="card-header">
                                                        <h3>SMS Delivery Status</h3>
                                                    </div>
                                                    <div class="card-block text-center">
                                                        <div id="sale-diff" class="chart-shadow" style="height:150px"></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          <h3 class="card-title">Payments</h3>
                                            <table class="table table-bordered table-hover">
                                                <thead class="thead-default thead-lg">
                                                    <tr>
                                                        <th class="pl-4">Period</th>
                                                        <th>Amount</th>
                                                        <th class="pr-4">Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>Last Payment</td>
                                                            <td><b> </b></td>
                                                            <td><b></b></td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">  
                            <div class="card" style="min-height: 422px;">
                                <div class="card-header"><h3>Scheduled Broadcast (0)</h3></div>
                                <div class="card-body">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-default thead-lg">
                                            <tr>
                                                <th class="pl-4">Period</th>
                                                <th>Amount</th>
                                                <th class="pr-4">Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>Last Payment</td>
                                                    <td><b> </b></td>
                                                    <td><b></b></td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </div>

                                
                            </div>
                         
                        </div>
                    </div>

        </div>
            </div>
        </div>
    </div>
</div>
@endsection

