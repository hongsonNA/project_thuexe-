<?php

namespace App\Repositories;

interface VehicelRepositoryInterface {

    //datatable
    public function AllDatatable();
    //store 1 new resource
    public function store($request);
    //edit $id parameter
    public function edit($id);
    //update $id parameter
    public function update($request, $id);
    //destroy $id parameter
    public function destroy($id);
}
