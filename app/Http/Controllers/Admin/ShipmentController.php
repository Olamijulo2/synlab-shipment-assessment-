<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\LocationRegion;
use App\Models\QueryCategory;
use App\Models\Admin;
use App\Models\Shipment;

use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admins = Admin::all();
        $locations = Location::all();
        $location_regions = LocationRegion::all();
        $query_categories = QueryCategory::all();
        return view('admin.shipment.shipment-assessment', compact('locations', 'location_regions', 'query_categories', 'admins'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $shipment = new Shipment();
        $shipment->location_id = $request->input('location');
        $shipment->location_region_id = $request->input('locationRegion');
        $shipment->admin_id = $request->input('receiver');
        $shipment->query_category_id = 2;
        $shipment->date_of_shipment = $request->input('dateOfShipment');
        $shipment->time_received = $request->input('shipmentTime');
        $shipment->batch_number = $request->input('batchNumber');
        $shipment->temperature = $request->input('temperature');
        $shipment->number_of_sample = $request->input('numberOfSample');
        $shipment->number_of_sample_with_query = $request->input('numberOfSampleQuery');
        $shipment->query_details = $request->input('queryDetails');
        $shipment->save();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
