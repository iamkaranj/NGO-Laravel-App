<?php

namespace App\Http\Controllers;

use App\Cities;
use App\Countries;
use App\Donors;
use App\PostalCodes;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    public function address(Request $request, $slug, $id = null) {

        $searchTerm = $request->q ?? '';
        $model = 'App\\' . $slug;
        $data = $model::query()
                            ->where('name', 'LIKE', "%{$searchTerm}%")
                            ->paginate(15);
        return response()->json([
            'status' => 'success',
            'data' => $this->_map($data)
        ]);

    }

    protected function _map($data) {
        return $data->map(function ($item, $key) {
            return ["id" => $item->id, "text" => $item->name];
        });
    }

    public function postalCode(Request $request, $slug, $id = null) {

        $data = PostalCodes::query()
                        ->where('postal_code', '=', $request->postal_code)
                        ->with(['city.state.country'])
                        ->first();
        $data = [
            'city'  =>  ['id' => $data->city->id, 'name' => $data->city->name],
            'state'  =>  ['id' => $data->city->state->id, 'name' => $data->city->state->name],
            'country' => ['id' => $data->city->state->country->id, 
                        'name' => $data->city->state->country->name,
                    ],
        ];
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);

    }

    public function cities(Request $request, $slug, $id = null) {

        $data = Cities::find($request->city)
                        ->load(['state.country', 'postalCodes']);
                        
        $data = [
            'postalCode'  =>  $data->postalCodes[0]->postal_code ?? "",
            'state' => $data->state,
            'country' => ['id' => $data->state->country->id, 
                            'name' => $data->state->country->name,
                            'phone_code' => $data->state->country->phone_code,
                        ],
        ];
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);

    }

    public function getDonorsByParam(Request $request){
        if($request->has('param') && $request->param)
        {
            $searchTerm = $request->param;
            $data = Donors::query()
                            ->where('firstname', 'LIKE', "%{$searchTerm}%")
                            ->orWhere('lastname', 'LIKE', "%{$searchTerm}%")
                            ->paginate(15);
            if(!$data->isEmpty()){
              foreach ($data as $row){
                $new_row['label']=htmlentities(stripslashes($row['item_name']));
                $new_row['id']=htmlentities(stripslashes($row['item_id']));
                $new_row['gst']=htmlentities(stripslashes($row['item_gst']));
                $new_row['packing']=htmlentities(stripslashes($row['item_packing']));
                $row_set[] = $new_row; //build an array
              }
              echo json_encode($row_set); //format the array into json data
            }    
        }
    }
}