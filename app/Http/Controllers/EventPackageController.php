<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventPackageController extends Controller
{
   
    public function index()
    {
        $corporatePackages = DB::select("SELECT * FROM corporate_packages");
        $birthdayPackages = DB::select("SELECT * FROM birthday_packages");

        return view('event-packages', [
            'corporatePackages' => $corporatePackages,
            'birthdayPackages' => $birthdayPackages
        ]);
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'party_type' => 'required|in:business,conference,gala,kids,luxury,classic,themed', 
            'image_url' => 'required|string|max:255',
            'timeline' => 'required|string',
            'detailed_info' => 'required|string',
            'photography' => 'nullable|boolean',
            'corporate_catering' => 'nullable|boolean',
            'extra_decorations' => 'nullable|boolean',
            'birthday_cake' => 'nullable|boolean',
        ]);
    
        
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_url' => $request->image_url,
            'party_type' => $request->party_type,
            'timeline' => $request->timeline,
            'detailed_info' => $request->detailed_info,
        ];
    
       
        if (in_array($request->party_type, ['business', 'conference', 'gala'])) {
           
            $data['photography'] = $request->has('photography') ? true : false;
            $data['corporate_catering'] = $request->has('corporate_catering') ? true : false;
            $data['extra_decorations'] = $request->has('extra_decorations') ? true : false;
    
           
            DB::table('corporate_packages')->insert($data);
        } elseif (in_array($request->party_type, ['kids', 'luxury', 'classic', 'themed'])) {
            
            $data['photography'] = $request->has('photography') ? true : false;
            $data['birthday_cake'] = $request->has('birthday_cake') ? true : false;
            $data['extra_decorations'] = $request->has('extra_decorations') ? true : false;
    
           
            DB::table('birthday_packages')->insert($data);
        }
    
        return redirect('/event-packages')->with('success', 'Package added successfully!');
    }
    
    
    
    public function destroy($id, Request $request)
    {
        $partyType = $request->query('type');
        $table = $partyType === 'corporate' ? 'corporate_packages' : 'birthday_packages';

        DB::delete("DELETE FROM $table WHERE id = ?", [$id]);

        return redirect('/event-packages')->with('success', 'Package deleted successfully!');
    }
}