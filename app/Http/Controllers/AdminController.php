<?php

namespace App\Http\Controllers;


use App\Models\Contact;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class AdminController extends Controller
{

    public function index(){

return view('admin.body');


    }





            public function userdata(){

$id = User::all();


                return view('data.userform' ,compact('id'));


                    }



                    public function dawakari()
                    {
                        // Define an array to hold the relations to be loaded
                        $relations = [
                            'andams',
                            'rezlenans',
                            'blawkrawas',
                            'chalakidws',
                            'chalakises',
                            'chalakiyaks',
                            'dllnyajors',
                            'feedbacks',
                            'personaldws',
                            'twezhinawayaks',
                            'twezhinawadws',
                            'xwendnchars',
                            'xwendndws',
                            'xwendnones',
                            'xwendnses',
                            'personal_detailfs'
                        ];

                        // Build the query to retrieve users with all form submissions
                        $completeUsers = User::with($relations)->get();

                        // Define a variable to hold the count of complete submissions for each user
                        $completeSubmissionsCount = [];

                        // Filter the users who have submitted all 17 forms for the first time
                        $completeUsersArray = $completeUsers->filter(function ($user) use ($relations, &$completeSubmissionsCount) {
                            $userId = $user->id;

                            // Check if the user has submitted all 17 forms and if it's the first submission for each form
                            $firstSubmissions = true;
                            foreach ($relations as $relation) {
                                if ($user->$relation->isEmpty() || isset($completeSubmissionsCount[$userId][$relation])) {
                                    $firstSubmissions = false;
                                    break;
                                }
                            }

                            // If the user has submitted all 17 forms and it's the first time, save their data
                            if ($firstSubmissions) {
                                $completeSubmissionsCount[$userId] = [];
                                foreach ($relations as $relation) {
                                    if (!$user->$relation->isEmpty()) {
                                        $completeSubmissionsCount[$userId][$relation] = true;
                                    }
                                }
                                return true; // Save the user's data in $completeUsersArray
                            }

                            // If the user has not submitted all 17 forms or has submitted them multiple times, do not save their data
                            return false;
                        });






                     Cache::put('completeUsersArray', $completeUsersArray);

                        return view('data.request', ['completeUsersArray' => $completeUsersArray]);
                    }

                    public function viewUser($userId)
                    {
                        $user = User::findOrFail($userId);
                        $completeUsersArray = Cache::get('completeUsersArray');
                       return view('data.user_data', ['user' => $user , 'completeUsersArray' => $completeUsersArray]);


                    }




public function rejectedUsers() {
    // Retrieve rejected users
    $rejectedUsers = User::where('status', 'rejected')->get();

    return view('data.rejected', ['rejectedUsers' => $rejectedUsers]);
}


public function acceptedUsers() {
    // Retrieve accepted users
    $acceptedUsers = User::where('status', 'accepted')->get();

    return view('data.accepted', ['acceptedUsers' => $acceptedUsers]);
}










    public function toggleStatus(Request $request, $id)
{
    // This method might not be necessary if it's just for redirection purposes
    // You can remove it if it's not doing any actual logic

    // Redirect back or wherever you want
    return redirect()->back()->with('error', 'Invalid action');
}

    public function acceptStatus($id)
    {
        // Find the user by ID and update the status to 'accepted'
        User::where('id', $id)->update(['status' => 'accepted']);

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Status updated to accepted');
    }

    public function rejectStatus($id)
    {
        // Find the user by ID and update the status to 'rejected'
        User::where('id', $id)->update(['status' => 'rejected']);

        // Redirect back or wherever you want
        return redirect()->back()->with('success', 'Status updated to rejected');
    }


public function datas(){


    return view('admin.body');

}




public function dawakaryakan(){

$contact=Contact::all();


return view('data.contact_data' , compact('contact'));

 }









}




