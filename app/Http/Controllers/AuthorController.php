<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Support\Facades\Validator;
use Response;
class AuthorController extends Controller
{
    public $data;
    public function __construct(){
    $this->data = new Author();
    }

    public function saveMessage(Request $request){
        $this->data->author_name =$request->author_name;
        $this->data->author_msg =$request->msg;

        $validator = Validator::make(request()->all(), [
          'author_name'     => 'required',
          'msg' => 'required|max:255', 
        ]);

        if ($validator->fails()) {
            return response()->json([
              'errors' => $validator->errors(),
            ]);
        }
        $details = $this->data->save();
        if ($details==1) {
            return "Data Saved successfully";
        }else{
            return "Something Went Wrong";
        }
    }
    public function getAuthorData(){
        $getTable = $this->data->getAuthorTable();
        return view('authorIndex')->with('display',$getTable);
    }

    public function getAuthorDataByID($id){
        $result = $this->data->getAuthorTableByID($id);
        $data = [
            'Author Name'  => $result->author_name,
            'Author Message'   => $result->author_msg,
            'Date' => $result->created_at
        ];
        return $data;
    }
}
