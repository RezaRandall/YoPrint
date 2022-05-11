<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\YoPrintImport;
use App\Models\yoprint_import;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\yoprint_data_list_upload;

class UploadController extends Controller
{
	public function upload(){
        $yoPrintCSV = yoprint_data_list_upload::get();
		return view('upload', ['yoPrintCSV' => $yoPrintCSV]);

	}

    public function uploadProcess(Request $request){
        $this->validate($request, [
            'file'=>'required|mimes:csv,txt|max:2048',
            'status'=>"success",
        ]);

        // get name from input upload.blade
        $getFile = $request->file('file');
        $fileName = $getFile->getClientOriginalName();

        // folder path upload file
        $pathUpload = 'dataFile';

        // upload file
        $dir = public_path($pathUpload);

        // check the file from the database if there is a similar file
        $nameFile = yoprint_data_list_upload::where('file', '=', $fileName)->first();
        if($nameFile === null){ //insert
            $getFile->move($pathUpload, $fileName);
            Excel::import(new YoPrintImport, $dir.'/'.$fileName); //public_path('/file_siswa/'.$fileName)
                yoprint_data_list_upload::create([
                    'file' => $fileName,
                    'status' => "completed",
                ]);
        }else{ //update
            $getFile->move($pathUpload, $fileName);
            Excel::import(new YoPrintImport, $dir.'/'.$fileName);
                yoprint_data_list_upload::where('file', $fileName)->update([
                    'file' => $fileName,
                    'status' => "completed",
                ]);
        }

        return redirect()->back();
    }
}
